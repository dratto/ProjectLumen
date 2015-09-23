<?php
/**
 * Created by PhpStorm.
 * User: diogo
 * Date: 20/09/15
 * Time: 19:06
 */

namespace ProjectLumen\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = [
        'descrição',
        'codpaís',
        'ddd',
        'prefixo',
        'sufixo'
    ];

    public function getNumeroAttribute()
    {
        return "{$this->codpaís} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";
    }
}