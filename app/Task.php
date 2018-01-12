<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'date_expiration',
        'id_board',
        'id_user'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function board()
    {
        return $this->belongsTo('App\Board');
    }
}
