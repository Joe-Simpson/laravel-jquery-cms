<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $guarded = [];

    public function buyin()
    {
        return $this->belongsTo(Buyin::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'make',
        'model',
        'description',
        'serial',
        'passcode',
        'boxed',
        'condition',
        'notes',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
