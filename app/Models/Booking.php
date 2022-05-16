<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //creates a new booking
    public function add_booking($params = []){
        return Booking::create($params);
    }

    private $tb                 = 'bookings';

    //retrieves a booking

    public function get_booking($params = []){
        return Booking::select('booking.*')
        ->from('bookings')
        ->selectRaw("(SELECT E.slug FROM events E WHERE E.id = bookings.event_id) event_slug")
        ->where(['customer_id' => $params['customer_id'] ])
        ->orderBy('id', 'desc')
        ->paginate(10);
    }
}
