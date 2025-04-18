<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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

        // Example Accounts
        $sampleAccounts = ['Credit Card', 'Bank Loan', 'Stock Agency'];
        foreach($sampleAccounts as $accounts)
        {
            Account::create([
                'name' => $accounts,
                'user_id' => $user->id,
                'type' => 'expense',
            ]);
        }
    }
}
