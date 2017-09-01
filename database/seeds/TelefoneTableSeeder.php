<?php

use Illuminate\Database\Seeder;

class TelefoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Projeto\Entities\Telefone::class, 80 )->create();
    }
}
