<?php


namespace Projeto\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table =  'telefones';

    protected $fillable = [
        'descri��o',
        'codpa�s',
        'ddd',
        'prefixo',
        'sufixo'
    ];
}