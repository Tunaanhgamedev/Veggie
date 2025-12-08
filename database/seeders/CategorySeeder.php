<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Trái cây', 'slug' => 'trai-cay', 'description' => 'Trái cây tươi ngon.',  'image' => 'uploads/categories/trai-cay.png'],
            ['name' => 'Rau củ', 'slug' => 'rau-cu', 'description' => 'Rau hữu cơ, tốt cho sức khỏe.', 'image' => 'uploads/categories/rau-cu.png'],
            ['name' => 'Cá', 'slug' => 'ca', 'description' => 'Cá tươi.', 'image' => 'uploads/categories/ca.png'],
            ['name' => 'Thực phẩm khác', 'slug' => 'thuc-pham-khac', 'description' => 'Các sản phẩm nướng mới ra lò.', 'image' => 'uploads/categories/thuc-pham-khac.png'],
            ['name' => 'Thịt', 'slug' => 'thit', 'description' => 'Sản phẩm thịt và gia cầm cao cấp.', 'image' => 'uploads/categories/thit.png'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}