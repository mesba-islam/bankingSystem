<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transactions;
use App\Models\User;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        // Retrieve the user with ID 1
        $user = User::find(1);

        if ($user) {
            // Create transactions for the user
            for ($i = 0; $i < 5; $i++) {
                $amount = rand(10, 100);
                $fee = $amount * 0.1;

                Transactions::create([
                    'id'=>1,
                    'user_id' => $user->id,
                    'amount' => $amount,
                    'fee' => $fee,

                ]);
            }
        }
    }
}
