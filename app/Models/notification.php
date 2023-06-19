<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Notifications\Notifiable;


class notification extends Model 
{
    protected $table = 'notification';
    use HasFactory;
}
