<?php
/**
 * Created by PhpStorm.
 * User: diogo
 * Date: 20/09/15
 * Time: 19:06
 */

namespace ProjectLumen\Entities;


use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefones()
    {
        return $this->hasMany(Telefone::class);
    }
}