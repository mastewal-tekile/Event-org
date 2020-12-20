<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function organizers() {
        return $this->belongsToMany(Organizer::class, 'event_organizers');
    }

    public function reservation($event){
        $tickets = Ticket::where('event_id', $event->id)
            ->where('user_id', $this->id);
        if (count($tickets->get()) == 0) return null;
        $reservation = Ticket::where('event_id', $event->id)
                ->orderBy('created_at')
                ->take($event->number_of_seats)
                ->where('user_id', $this->id);
        return (bool)$reservation;
    }
    public function events() {
        return $this->belongsToMany(Event::class, 'tickets');
    }
}
