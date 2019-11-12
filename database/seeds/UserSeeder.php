<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $people = [
            [
                'name' => 'Mg Mg',
                'email' => 'mgmg@bm.com'
            ],
            [
                'name' => 'Ag Ag',
                'email' => 'agag@bm.com'
            ]
        ];

        foreach($people as $person) {
            $user = new App\User();
            $user->name = $person['name'];
            $user->email = $person['email'];
            $user->password = bcrypt('123');
            $user->save();
        }

        
    }
}
