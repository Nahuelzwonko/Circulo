<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class FullCalendarController extends Controller
{
    public function getEvent()
    {
        $events = array();
        $user = Auth::user();
        $bookings = $user->bookings()->orderBy('start_date')->get();

        if ($bookings) {
            foreach ($bookings as $booking) {
                $color = null;
                if ($booking->title == 'Turno nuevo') {
                    $color = '#924ace';
                }
                if ($booking->title == 'Nuevo') {
                    $color = '#68b01a';
                }

                $events[] = [
                    'id' => $booking->id,
                    'title' => $booking->title,
                    'start' => $booking->start_date,
                    'end' => $booking->end_date,
                    'color' => $color
                ];
            }
        }
        return view('fullcalendar', ['events' => $events]);
    }
    function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string'
        ]);
        $user = Auth::user();
        $booking = $user->bookings()->create([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        $color = null;
        if ($booking->title == 'Turno nuevo') {
            $color = '#924ace';
        };

        return response()->json([
            'id' => $booking->id,
            'start' => $booking->start_date,
            'end' => $booking->end_date,
            'title' => $booking->title,
            'color' => $color ? $color : '',
        ]);
    }
    function update(Request $request, $id)
    {
        $booking = Booking::find($id);
        if (!$booking) {
            return response()->json([
                'error' => 'No se puede localizar el evento'
            ], 404);
        }
        $booking->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return response()->json('Cambiado con exito');
    }
    public function destroy($id)
    {
        $booking = Booking::find($id);
        if (!$booking) {
            return response()->json([
                'error' => 'No se puede localizar el evento'
            ], 404);
        }
        $booking->delete();
        return $id;
    }
}