<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->createUsers();
        $this->createProduct();
        $this->createNews();
        $this->createCategory();
        $this->createRole();
    }

    private function createUsers(): void {
        User::truncate();

        User::factory(5)->create();
        User::factory()->create([
            'full_name' => 'Test user ' . Str::random(3),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake() ->address(),
            'phone_number'=> fake() ->phoneNumber(),
            'password' => Hash::make('123456'),
            'active_flg' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    private function createProduct():void {
        Product::truncate();

        Product::create([
            'name' => fake()->name,
            'price' => fake()->randomFloat(2, 10, 100), // Random price between 10 and 100 with 2 decimal places
            'inventory' => fake()->numberBetween(0, 100),
            'manufacturing_date' => fake()->dateTimeThisDecade()->format('Y-m-d H:i:s'),
            'description' => fake()->sentence,
            'detailed_description' => fake()->paragraph,
            'category_id' => fake()->numberBetween(1, 5), // Assuming you have 5 categories
            'image_id' => fake()->numberBetween(1, 5), // Assuming you have 5 categories
            'created_at' => now(), // Set created_at to current timestamp
            'updated_at' => now(), // Set updated_at to current timestamp
        ]);
    }

    private function createNews():void {
        News::truncate();

        News::create([
            'title' => fake()->sentence,
            'content' => fake()->paragraph,
            'image_id' => fake()->randomNumber(),
            'date_published' => now(),
        ]);
    }

    private function createCategory():void {
        Category::truncate();

        Category::create([
            'name' => 'Category ' . Str::random(3),
            'description' => 'Description of category ' . Str::random(3),
            'created_at' => now(), // Set created_at to current timestamp
            'updated_at' => now(), // Set updated_at to current timestamp
        ]);
    }

    private function createRole():void {
        Role::truncate();

        $roles = [
            ['name' => 'USER', 'description' => 'User role'],
            ['name' => 'ADMIN', 'description' => 'Admin role'],
            ['name' => 'SUPER_ADMIN', 'description' => 'Super Admin role'],
            ['name' => 'EMPLOYER', 'description' => 'Employer role'],
        ];
        Role::insert($roles); // Insert dữ liệu vào bảng roles
    }
}
