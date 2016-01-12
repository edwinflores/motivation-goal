<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        Model::unguard();

        $this->call(QuoteTableSeeder::class);
        $this->call(JokeTableSeeder::class);
        $this->call(ScareTableSeeder::class);

        Model::reguard();
        DB::statement("SET foreign_key_checks = 1");
    }
}
