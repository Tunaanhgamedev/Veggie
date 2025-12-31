<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AIChatController extends Controller
{
    public function chat(Request $request)
{
    $userMessage = $request->input('message');
    $apiKey = env('GEMINI_API_KEY');

    // 1. Kiểm tra đầu vào
    if (!$userMessage) {
        return response()->json(['reply' => 'Tôi chưa nghe rõ bạn nói gì...']);
    }

    // 2. Kiểm tra API Key
    if (!$apiKey) {
        return response()->json(['reply' => 'Lỗi: Bạn chưa cấu hình GEMINI_API_KEY trong file .env']);
    }

    try {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post('https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=' . $apiKey, [
            'contents' => [
                [
                    'parts' => [
                        ['text' => "Bạn là trợ lý ảo thân thiện của shop Broccoli. Trả lời ngắn gọn: " . $userMessage]
                    ]
                ]
            ]
        ]);

        $data = $response->json();

        // Kiểm tra nếu API trả về lỗi (Ví dụ: Key hết hạn, sai vùng địa lý)
        if ($response->failed()) {
            $errorMsg = data_get($data, 'error.message', 'AI đang bận, thử lại sau nhé!');
            return response()->json(['reply' => 'Lỗi API: ' . $errorMsg]);
        }

        // Lấy phản hồi an toàn
        $aiReply = data_get($data, 'candidates.0.content.parts.0.text', 'Tôi không hiểu ý bạn lắm.');

        return response()->json(['reply' => $aiReply]);

    } catch (\Exception $e) {
        // Ghi lỗi vào log để bạn kiểm tra trong storage/logs/laravel.log
        \Log::error("Chat AI Error: " . $e->getMessage());
        return response()->json(['reply' => 'Lỗi hệ thống: ' . $e->getMessage()]);
    }
}
}