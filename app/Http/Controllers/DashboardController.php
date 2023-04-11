<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Payment;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('user', 'room', 'customer')
            ->where([['check_in', '<=', Carbon::now()], ['check_out', '>=', Carbon::now()]])
            ->orderBy('check_out', 'ASC')
            ->orderBy('id', 'DESC')->get();

            //total revenue
            $orders = Payment::all();
            $revenue = $orders->sum('price');

            //todays revenue
            $orders = Payment::whereDate('created_at', today())->get();
         $todays_revenue = $orders->sum('price');

        //  $today = now()->format('Y-m-d');
        // $orders = Payment::whereBetween('transaction_date', [$today . ' 00:00:00', $today . ' 23:59:59'])->get();
        // $todays_revenue = $orders->sum('total');

        //download function for todays guests

        
        

        return view('dashboard.index', compact('transactions','revenue','todays_revenue'));
    }

    
}
