<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserTableSeeder');
        $this->command->info('Biodata table seeded!');
    }
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        $data = new App\Biodata;
        $data->name      = 'Pramita Firnanda';
        $data->jk        = 'Perempuan';
        $data->birthdate = '1992-12-19';
        $data->phone     = '085736801820';
        $data->email     = 'pramitafirnanda@gmail.com';
        $data->address   = 'Surabaya';
        $data->save();
    }
}