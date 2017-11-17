<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Contact extends Model
{
    use LogsActivity;

    /**
     * The database table used by the model.
     *
     * @string $table
     */
    protected $table = 'Contact';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'message',
    ];

    /**
     * The attributes that should be be logged when the model is
     * created, updated, or deleted.
     *
     * @var array
     */
    protected static $logAttributes = ['name', 'email', 'message'];
}
