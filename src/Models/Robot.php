<?php namespace Wadepenistone\Devicecrafting\Models;

use Illuminate\Database\Eloquent\Model;

class Robot extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'owner_id', 'name', 'avatar', 'weight', 'power', 'speed'
    ];
}
