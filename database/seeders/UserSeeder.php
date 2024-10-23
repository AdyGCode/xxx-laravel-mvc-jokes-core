<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedData = [
            [
                'id'=>100,
                'name'=>'Ad Ministrator',
                'email'=>'admin@example.com',
                'password'=>'Password1',
                'email_verified_at'=>now(),
            ],

            [
                'id'=>200,
                'name'=>'Adrian Gould',
                'email'=>'adrian@example.com',
                'password'=>'Password1',
                'email_verified_at'=>now(),
            ],

            [
                'id'=>202,
                'name'=>'YOUR NAME',
                'email'=>'GIVEN_NAME@example.com',
                'password'=>'Password1',
                'email_verified_at'=>now(),
            ],

            [
                'id'=>1000,
                'name'=>"Jacques d'Carre",
                'email'=>'jacques@example.com',
                'password'=>'Password1',
                'email_verified_at'=>now(),
            ],
            [
                'id'=>1001,
                'name'=>"Eileen Dover",
                'email'=>'eileen@example.com',
                'password'=>'Password1',
                'email_verified_at'=>now(),
            ],

            [
                'id'=>1002,
                'name'=>'Robyn Banks',
                'email'=>'robyn@example.com',
                'password'=>'Password1',
                'email_verified_at'=>now(),
            ],
        ];

        $numRecords = count($seedData);
        $this->command->getOutput()->progressStart($numRecords);

        foreach ($seedData as $newRecord){
            User::create($newRecord);
            $this->command->getOutput()->progressAdvance();
        }

        $this->command->getOutput()->progressFinish();
    }
}
