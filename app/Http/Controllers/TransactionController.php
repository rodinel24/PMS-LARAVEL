<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Room;
use App\Repositories\TransactionRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    private $transactionRepository;

    public function __construct(TransactionRepository $transactionRepository)
    {
        $this->transactionRepository = $transactionRepository;
    }

    public function index(Request $request)
    {
        $transactions = $this->transactionRepository->getTransaction($request);
        $transactionsExpired = $this->transactionRepository->getTransactionExpired($request);
        return view('transaction.index', compact('transactions', 'transactionsExpired'));
    }
    public function reports(Request $request)
    {
        $transactions = $this->transactionRepository->getTransaction($request);
        $transactionsExpired = $this->transactionRepository->getTransactionExpired($request);
      
            $occupancyData = DB::table('transactions')
                                ->select(DB::raw('count(*) as occupancy_count, date(check_in) as occupancy_date'))
                                ->groupBy('occupancy_date')
                                ->get();

                                //display all the customers in occupany reports
                                $customers = Customer::all(); // Fetch all customers from the database


                                //todays guests 
                                
                                $date = now();
                                $guests = Transaction::whereDate('check_in', '>=', $date)->get();


                                $query = Transaction::whereDate('check_in', '>=', $date);
                                
                                // Sorting
                                $sort = $request->query('sort');
                                if ($sort === 'asc') {
                                    $query->orderBy('check_in', 'asc');
                                } elseif ($sort === 'desc') {
                                    $query->orderBy('check_in', 'desc');
                                }
                                
                                $guests = $query->get();

                                //occupancy ratio
                                // Retrieve the number of occupied rooms
                                $occupiedRooms = DB::table('transactions')
                                ->whereDate('check_in', '<=', now())
                                ->whereDate('check_out', '>=', now())
                                ->count();

                                // Retrieve the total number of rooms in the hotel
                                $totalRooms = Room::count();

                                // Calculate the occupancy ratio
                                if ($totalRooms > 0) {
                                $occupancyRatio = ($occupiedRooms / $totalRooms) * 100;
                                } else {
                                $occupancyRatio = 0;
                                }

     
        return view('reports.index',  compact('transactions','occupancyRatio', 'transactionsExpired' , 'customers' ,'occupancyData'  , 'guests'));
    }

    public function calculateRemainingBalance(Transaction $transaction)
    {
        $totalPrice = $transaction->getTotalPrice();
        $totalPayment = $transaction->getTotalPayment();
        $remainingBalance = $totalPrice - $totalPayment;
        return $remainingBalance <= 0 ? '-' : $remainingBalance;
    }
        

}
