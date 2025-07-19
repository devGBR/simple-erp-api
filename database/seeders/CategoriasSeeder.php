<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            'Bagagem, bolsas e acessórios de viagem',
            'Relógios',
            'Joias',
            'Livros',
            'TV, áudio e cinema em casa',
            'Eletrônicos portáteis',
            'Celulares',
            'Câmera e fotografia',
            'Acessórios para eletrônicos e para PC',
            'Videogames e consoles',
            'Casa',
            'Reforma de casa',
            'Cozinha',
            'Computadores',
            'Papelaria e escritório',
            'Esportes, aventura e lazer',
            'Eletrodomésticos de linha branca',
            'Móveis',
            'Brinquedos e jogos',
            'Produtos para bebês',
            'Saúde e cuidado pessoal',
            'Beleza',
            'Produtos de beleza de luxo',
            'Aparelhos para cuidados pessoais',
            'Plantas e jardim',
            'Vídeo e DVD',
            'Música',
            'Instrumentos musicais e acessórios',
            'Peças e acessórios automotivos',
            'Pneus e rodas',
            'Produtos para animais de estimação',
            'Comidas e bebidas',
            'Bebidas alcoólicas',
            'Indústria e Ciência (que incluem Serviços alimentícios e Manutenção e higiene)',
            'Outros',
        ];

        foreach ($categorias as $nome) {
            DB::table('categorias')->insert([
                'nome' => $nome,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
