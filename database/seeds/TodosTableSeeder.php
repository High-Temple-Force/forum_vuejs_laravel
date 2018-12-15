<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'title' => 'お茶買う'
        ]);
        DB::table('todos')->insert([
            'title' => '洗濯物干す'
        ]);
        DB::table('todos')->insert([
            'title' => '掃除する'
        ]);
    }
}
