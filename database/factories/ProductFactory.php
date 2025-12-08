<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->randomElement([
            'Táo', 'Chuối', 'Cam', 'Nho', 'Dâu tây',
            'Cà rốt', 'Bông cải xanh', 'Rau bina', 'Cải bó xôi', 'Khoai tây',
            'Nước ép cam', 'Nước ép táo', 'Trà xanh', 'Cà phê đá', 'Sữa hạt',
            'Bánh mì nguyên cám', 'Bánh ngọt', 'Bánh quy', 'Bánh pizza', 'Bánh kem',
            'Thịt bò', 'Thịt gà', 'Thịt lợn', 'Cá hồi', 'Tôm', 'Khoai lang', 'Khoai tây',
        ]);
        return [
            'name' => ucfirst($name),
            'slug' => Str::slug($name) . '-' . Str::uuid(),
            'category_id' => Category::inRandomOrder()->first()->id,
            'description' => $this->faker->sentence(10),
            'price' => $this->faker->randomFloat(2, 10000, 200000),
            'stock' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->randomElement(['in_stock', 'out_of_stock']),
            'unit' => $this->faker->randomElement(['kg', 'bó', 'túi', 'hộp']),  
        ];
    }
}