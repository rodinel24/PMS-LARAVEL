@extends('template.master')
@section('title', 'Reports')
@section('content')
    <div class="row mt-2 mb-2">
        <div class="col-lg-6 mb-2">
            <div class="d-grid gap-2 d-md-block">
                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Add Room Reservation">
                    <button type="button" class="btn btn-sm shadow-sm myBtn border rounded" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        <i class="fas fa-plus"></i>
                    </button>
                </span>
                <span data-bs-toggle="tooltip" data-bs-placement="right" title="Payment History">
                    <a href="{{route('payment.index')}}" class="btn btn-sm shadow-sm myBtn border rounded">
                        <i class="fas fa-history"></i>
                    </a>
                </span>
            </div>
        </div>
        <div class="col-lg-6 mb-2">
             <form class="d-flex" method="GET" action="{{ route('reports.index') }}">
                <input class="form-control me-2" type="search" placeholder="Search by ID" aria-label="Search"
                    id="search-user" name="search" value="{{ request()->input('search') }}">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="row my-2 mt-4 ms-1">
        <div class="col-lg-12">
            <h5>Occupancy Reports: </h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-hover">
                            <thead>
                                <tr>
                                   
                                    <th>Customer Name</th>
                                    <th>Gender</th>
                                    <th>User Id</th>
                                   
                                  
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->gender }}</td>
                                        <td>{{ $customer->user_id }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="15" class="text-center">
                                            There's no data in this table
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $transactions->onEachSide(2)->links('template.paginationlinks') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <div class="row my-2 mt-4 ms-1">
        <div class="col-lg-12">
            <h5>Upcoming Guests: </h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-hover">

                            <thead>
                            <th>
 
                                <a href="{{ route('reports.index', ['sort' => 'desc']) }}">Descending<img src="icons/descend.png" alt=""></a>
                            </th>
                            <th>
                                <a href="{{ route('reports.index', ['sort' => 'asc']) }}">Ascending <img src="icons/ascend.png" alt=""></a>
                            </th>
                                <tr>
                               

                                    <th>Name</th>
                                    <th>Checkin Date</th>
                                    <th>Checkout Date</th>
                                    <th>Room Number</th>
                                                
                                </tr>
                            </thead>
                            <tbody>
                                        @foreach ($guests as $guest)
                                <tr>
                                    <td>{{ $guest->customer->name }}</td>
                                    <td>{{ Helper::dateFormat($guest->check_in) }}</td>
                                    <td>{{ Helper::dateFormat($guest->check_out)}}</td>
                                    <td>{{ $guest->room->number }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $transactions->onEachSide(2)->links('template.paginationlinks') }}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row my-2 mt-4 ms-1">
        <div class="col-lg-12">
            <h5>Occupancy Reports: </h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Occupancy Count</th>
                                        
                                  
                                </tr>
                            </thead>
                            <tbody>
                                                    @foreach ($occupancyData as $data)
                                        <tr>
                                            <td>
                                            {{ Helper::dateFormat($data->occupancy_date) }}
                                            </td>
                                            <td>{{ $data->occupancy_count }}</td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        {{ $transactions->onEachSide(2)->links('template.paginationlinks') }}
                    </div>
                </div>
            </div>
        </div>
    </div>


 


    


    
   
    </div>

    <style>
        #printBtn {
   background-color: #4CAF50;
   border: none;
   color: white;
   padding: 10px 20px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 4px 2px;
   cursor: pointer;
}

    </style>

    <button id="printBtn">Print</button>

   <script>
    document.getElementById("printBtn").addEventListener("click", function(){
    var printContents = document.getElementById("checkout").innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
});

   </script>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Have any account?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-sm btn-primary m-1"
                            href="{{ route('transaction.reservation.createIdentity') }}">No, create
                            new account!</a>
                        <a class="btn btn-sm btn-success m-1"
                            href="{{ route('transaction.reservation.pickFromCustomer') }}">Yes, use
                            their account!</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
