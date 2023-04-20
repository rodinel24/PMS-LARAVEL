@extends('template.master')
@section('title', 'Guests')
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
            <form class="d-flex" method="GET" action="{{ route('home.guest') }}">
                <input class="form-control me-2" type="search" placeholder="Search by ID" aria-label="Search"
                    id="search-user" name="search" value="{{ request()->input('search') }}">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="row my-2 mt-4 ms-1">
 

        <div class="col-lg-12">
            <h5>Guests List: </h5>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
        <a href="#" class="btn btn-primary">Export to Excel</a>

                        <table class="table table-sm table-hover">

                            <thead>
                                <tr>
                                    <!-- <th>#</th> -->
                                    <th>ID</th>
                                    <th>Guest Name</th>
                                    <th>Email</th>
                                    <th>Balance</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($customers as $customer)
                                
                                    <tr>
                                    <!-- 'name',
                                    'address',
                                    'birthdate',
                                    'user_id',
                                    'job',
                                    'gender' -->
                                       <!-- <th>{{ ($customers->currentpage() - 1) * $customers->perpage() + $loop->index + 1 }}
                                        </th> -->
                                        <td>{{ $customer->id }}</td>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->user->email }}</td>
                                        <td>Balance</td>
                                       
                                       
                                        
                                      
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
                        {{ $customers->onEachSide(2)->links('template.paginationlinks') }}
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

   
@endsection
