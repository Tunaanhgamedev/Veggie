<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AIChatController extends Controller
{
    public function chat(Request $request)
    {
        $userMessage = $request->input('message');
        $apiKey = env('GEMINI_API_KEY');

        if (!$userMessage) {
            return response()->json(['reply' => 'Bạn chưa nhập tin nhắn!']);
        }

        try {
            // Sử dụng bản 2.5 Flash Lite từ danh sách của bạn
$url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-lite:generateContent?key=" . $apiKey;

            $response = Http::withHeaders(['Content-Type' => 'application/json'])
                ->timeout(15)
                ->post($url, [
'contents' => [
    ['parts' => [['text' => $userMessage]]] 
]
                ]);

            $data = $response->json();

            // Trường hợp thành công
            if ($response->successful()) {
                $aiReply = data_get($data, 'candidates.0.content.parts.0.text', 'Tôi đang suy nghĩ...');
                return response()->json(['reply' => $aiReply]);
            }

            // Trường hợp lỗi API (Sẽ hiện lỗi thật để bạn biết đường sửa)
            $errorDetail = data_get($data, 'error.message', 'Lỗi không xác định');
            return response()->json(['reply' => 'Lỗi từ Google: ' . $errorDetail]);

        } catch (\Exception $e) {
            Log::error("AIChat Error: " . $e->getMessage());
            return response()->json(['reply' => 'Lỗi hệ thống: ' . $e->getMessage()]);
        }
    }
}