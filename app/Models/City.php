<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = 'city';
    }

    public function server()
    {
        return $this->hasOne('App\Models\GameServer', 'city_id', 'city_id');
    }
}