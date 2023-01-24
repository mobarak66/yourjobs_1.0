<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Job;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(2)->create();

        // ?? To be checked
        // $user = User::factory()->create([
        //     'name' => 'Tahera Yasmeen',
        //     'email' => 'tahera@gmail.com'        // PW: password
        // ]);

        // Job::factory(6)->create([
        //     'user_id' => $user->id
        // ]);

    }
}
