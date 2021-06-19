<?php

namespace Database\Seeders;

use App\Models\Debtor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DebtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Debtor::factory(10)->create();

        DB::table('debtors')->insert([
            'user' => '9',
            'months_overdue' => '2',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('debtors')->insert([
            'user' => '5',
            'months_overdue' => '6',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        DB::table('debtors')->insert([
            'user' => '8',
            'months_overdue' => '4',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);

        $this->command->info('Debtors añadidos correctamente');
    }
}
