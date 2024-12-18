<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',        // Title of the event
        'date',         // Date of the event
        'time',         // Time of the event
        'location',     // Location of the event
        'description',  // Optional description
    ];
}
