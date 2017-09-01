<?php


namespace Projeto\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table =  'telefones';

    protected $fillable = [
        'descriзгo',
        'codpaнs',
        'ddd',
        'prefixo',
        'sufixo'
    ];
}