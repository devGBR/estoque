<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use illuminate\Database\Eloqueent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('ProdutoTableSeeder');
    }
}

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::insert('insert into produtos
         (nome, quantidade, valor, descricao)
         values (?,?,?,?)',
         array('Geladeira', 2, 5900.00, 
         'Side by Side com gelo na porta'));
        
       DB::insert('insert into produtos
         (nome, quantidade, valor, descricao)
         values (?,?,?,?)',
         array('Fogão', 5, 950.00, 
         'Painel automático e forno elétrico'));
        
       DB::insert('insert into produtos
         (nome, quantidade, valor, descricao)
         values (?,?,?,?)',
         array('Microondas', 1, 1520.00, 
         'Manda SMS quando termina de esquentar'));
    }
}
