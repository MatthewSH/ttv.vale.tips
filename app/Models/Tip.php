<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tip extends Model
{
    use \Rinvex\Categories\Traits\Categorizable, SoftDeletes;

    protected $fillable = [
        'user_id', 'title', 'short',
        'long', 'visible'
    ];

    protected $casts = [
      'visible' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
