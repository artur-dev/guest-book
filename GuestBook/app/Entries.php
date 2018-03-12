<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Entries model represents guest book entries
 */
class Entries extends Model
{
    protected $fillable = ['guest_name', 'guest_email', 'comment'];
}
