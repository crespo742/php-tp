<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User as User; //Pour appeler le model en le renommant

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = new User();//new User vide
        $user ->name = 'Chloe';
        $user->email ='cococassandra@hotmail.fr';
        $user->password = bcrypt('Test12345'); //Pour crypter
        //Ligne qui permet d'envoyer les donnée dans la base de donnée, méthode simple d'éloquent
        $user->save();

    }
}
