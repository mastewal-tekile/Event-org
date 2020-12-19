<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    public function addUser($user_id) {
        return EventOrganizer::create([
            "user_id" => $user_id,
            "organizer_id" => $this['id']
        ]);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }
}
