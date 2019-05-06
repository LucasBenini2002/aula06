<?php

use Illuminate\Database\Seeder;

class exercicioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        atividades::create([
            'titulo' => 'Loucura',
            'autor' => 'Jean Luí',
            'texto' => 'beurifur girl'
        ]);

        atividades::create([
            'titulo' => 'Meritocracia',
            'autor' => 'BNErnardo',
            'texto' => 'grande baixo homem'
        ]);

    }
}
