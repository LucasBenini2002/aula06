<?php

use Illuminate\Database\Seeder;
use App\mensagens;

class mensagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
        {
            mensagens::create([
                'titulo' => 'Bom dia',
                'texto' => 'Atenção banana da feirinha 3 reais',
                'autor' => 'bla'
            ]);
    
            mensagens::create([
                'titulo' => 'URGENTE REUNIÃO',
                'texto' => 'reunião para fins de debate dos orçamentos',
                'autor' => 'autor'
            ]);
    
        }
    
}
