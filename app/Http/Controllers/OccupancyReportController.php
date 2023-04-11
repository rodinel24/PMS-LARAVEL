<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OccupancyReportController extends Controller
{
    public function index()
    {
        $occupancyData = DB::table('Transaction')
                            ->select(DB::raw('count(*) as occupancy_count, date(check_in) as occupancy_date'))
                            ->groupBy('occupancy_date')
                            ->get();

        return view('occupancy-report', ['occupancyData' => $occupancyData]);
    }
}

