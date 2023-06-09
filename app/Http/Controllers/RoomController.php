<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomRequest;
use App\Models\Room;
use App\Models\RoomStatus;
use App\Models\Transaction;
use App\Models\Type;
use App\Repositories\ImageRepository;
use App\Repositories\RoomRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    private $roomRepository;

    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->roomRepository->getRoomsDatatable($request);
        }
        return view('room.index');
    }
    
    public function roomRates(Request $request)
    {
        if ($request->ajax()) {
            return $this->roomRepository->getRoomsDatatable($request);
        }
        $rooms = $this->roomRepository->getRooms($request);
        return view('home.roomrates', compact('rooms'));
    }


    public function create()
    {
        $types = Type::all();
        $roomstatuses = RoomStatus::all();
        $view = view('room.create', compact('types', 'roomstatuses'))->render();

        return response()->json([
            'view' => $view
        ]);
    }

    public function store(StoreRoomRequest $request)
    {
        $room = Room::create($request->all());

        return response()->json([
            'message' => 'Room ' . $room->number . ' created'
        ]);
    }

    public function show(Room $room)
    {
        $customer = [];
        $transaction = Transaction::where([['check_in', '<=', Carbon::now()], ['check_out', '>=', Carbon::now()], ['room_id', $room->id]])->first();
        if (!empty($transaction)) {
            $customer = $transaction->customer;
        }
        return view('room.show', compact('customer', 'room'));
    }

    public function edit(Room $room)
    {
        $types = Type::all();
        $roomstatuses = RoomStatus::all();
        $view = view('room.edit', compact('room', 'types', 'roomstatuses'))->render();

        return response()->json([
            'view' => $view
        ]);
    }

    public function update(Room $room, StoreRoomRequest $request)
    {
        $room->update($request->all());

        return response()->json([
            'message' => 'Room ' . $room->number . ' udpated!'
        ]);
    }

    public function destroy(Room $room, ImageRepository $imageRepository): JsonResponse
    {
        try {
            $room->delete();
    
            $path = 'img/room/' . $room->number;
            $path = public_path($path);
    
            if (Storage::exists($path)) {
                $imageRepository->destroy($path);
            }
    
            return response()->json([
                'message' => 'Room number ' . $room->number . ' deleted!'
            ]);
        } catch (\PDOException $e) {
            return response()->json([
                'message' => 'Room ' . $room->number . ' cannot be deleted! Error Code:' . $e->getCode()
            ], 500);
        }

        
    }
    //room availability function 
    // public function checkAvailability(Request $request)
    // {
    //     $checkin = $request->input('checkinDate');
    //     $checkout = $request->input('checkoutDate');
    
    //     // Query the database to get available rooms for the given date range
    //     $availableRooms = Room::whereDoesntHave('transactions', function ($query) use ($checkin, $checkout) {
    //         $query->where(function ($q) use ($checkin, $checkout) {
    //             $q->where('checkinDate', '<', $checkout)
    //               ->where('checkoutDate', '>', $checkin);
    //         });
    //     })->get();
    
    //     // Pass the available rooms to the view
    //     return view('availability', ['availableRooms' => $availableRooms]);
    // }
    

    
}
