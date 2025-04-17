<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        if(!$user)
        {
            return;
        }

        // Income categories
        $incomeCategories = ['Salary', 'Freelance', 'Investments', 'Gifts', 'Other Income'];
        foreach($incomeCategories as $category)
        {
            Category::create([
                'name' => $category,
                'user_id' => $user->id,
                'type' => 'income',
            ]);
        }

        // Expense categories
        $expenseCategories = ['Housing', 'Food', 'Transportation', 'Entertainment', 'Utilities', 'Healthcare', 'Shopping', 'Other Expenses'];
        foreach($expenseCategories as $category)
        {
            Category::create([
               'name' => $category,
               'user_id' => $user->id,
               'type' => 'expense',
            ]);
        }
    }
}
