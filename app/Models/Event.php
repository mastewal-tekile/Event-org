<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'start_at',
        'finish_at',
        'latitude',
        'longitude',
        'has_ticket',
        'organizer_id',
        'event_type_id',
        'city_id'];
}
