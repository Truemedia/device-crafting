<?php namespace Wadepenistone\Devicecrafting\Models;

use Illuminate\Database\Eloquent\Model;

class Battle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'attacker_id', 'defender_id', 'winner_id'
    ];
}
