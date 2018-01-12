<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'id_manager'
    ];

    public function manager()
    {
        return $this->belongsTo('App\User', 'id_manager');
    }

    public function boards()
    {
        return $this->hasMany('App\Board');
    }

    public function getBoards()
    {
        return $this->boards()->get();
    }
}
