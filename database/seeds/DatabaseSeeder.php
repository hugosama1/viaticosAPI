<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Concepto;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();

        $users = array(
                ['name' => 'Hugo sama', 'email' => 'hugosama1@gmail.com', 'password' => Hash::make('123456')],
                ['name' => 'Chris Sevilleja', 'email' => 'chris@scotch.io', 'password' => Hash::make('secret')],
                ['name' => 'Holly Lloyd', 'email' => 'holly@scotch.io', 'password' => Hash::make('secret')],
                ['name' => 'Adnan Kukic', 'email' => 'adnan@scotch.io', 'password' => Hash::make('secret')],
        );
            
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            User::create($user);
        }

        DB::table('conceptos')->delete();

        $conceptos = array(
            ['descripcion' => 'AVION','id' => 1] ,
            ['descripcion' => 'TRANSPORTE','id' => 2] ,
            ['descripcion' => 'HOSPEDAJE','id' => 3] ,
            ['descripcion' => 'ALIMENTOS','id' => 4] ,
            ['descripcion' => 'OTROS','id' => 5] ,
            );

        // Loop through each user above and create the record for them in the database
        foreach ($conceptos as $concepto)
        {
            Concepto::create($concepto);
        }

        Model::reguard();
    }
}
