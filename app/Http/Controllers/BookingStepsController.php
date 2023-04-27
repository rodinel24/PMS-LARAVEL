<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;


class BookingStepsController extends Controller
{
   

    public function checkAvailability(Request $request)
    {
        $checkin_date = $request->input('checkin_date');
        $checkout_date = $request->input('checkout_date');
        
        // Query the database to find available rooms for the given dates
        $available_rooms = Room::whereDoesntHave('transactions', function ($query) use ($checkin_date, $checkout_date) {
            $query->where(function ($query) use ($checkin_date, $checkout_date) {
                $query->where('checkin_date', '>=', $checkin_date)
                      ->where('checkin_date', '<', $checkout_date);
            })->orWhere(function ($query) use ($checkin_date, $checkout_date) {
                $query->where('checkout_date', '>', $checkin_date)
                      ->where('checkout_date', '<=', $checkout_date);
            })->orWhere(function ($query) use ($checkin_date, $checkout_date) {
                $query->where('checkin_date', '<', $checkin_date)
                      ->where('checkout_date', '>', $checkout_date);
            });
        })->get();
        
        // Pass the available rooms to the view
        return view('website.bookingSteps2', compact('available_rooms'));
    }
    

    


    
    public function bookingSteps ()
    {
        return view ('website.bookingSteps');
    }
    public function bookingSteps2 ()
    {
        return view ('website.bookingSteps2');
    }
    public function bookingSteps3 ()
    {
        return view ('website.bookingSteps3');
    }
}
