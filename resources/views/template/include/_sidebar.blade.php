<style>
    .dropend:hover .dropdown-menu {
        display: block;
        margin-top: 0;
      
    }

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-wgmZb2EgLcsGqf3q1kYjN4dQxGjJqN3AM4ycNzFXulD/4j46kTxji/5R8WYvjMz5e+pMn1n/Hv8Ibnm7gyfZcQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="" id="sidebar-wrapper">
    <div class="d-flex flex-column"
        style="width: 4.5rem; border-top-right-radius:0.5rem; border-bottom-right-radius:0.5rem; ">
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="mb-2 bg-white rounded cursor-pointer" id="dash">
                <a href="{{ route('dashboard.index') }}"
                    class="nav-link py-3 border-bottom myBtn
                    {{ in_array(Route::currentRouteName(), ['dashboard.index', 'chart.dialyGuest']) ? 'active' : '' }}
                    "
                    data-bs-toggle="dropdown" aria-expanded="false"  title="Dashboard">
                    <img src="icons/home.png" alt="">
                  
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('dashboard.index') }}"><img src="icons/home-icon.png" alt=""> Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{ route('transaction.index') }}"
                        class="nav-link py-3 border-bottom border-right myBtn
                        {{ in_array(Route::currentRouteName(), ['payment.index', 'transaction.index', 'transaction.reservation.createIdentity', 'transaction.reservation.pickFromCustomer', 'transaction.reservation.usersearch', 'transaction.reservation.storeCustomer', 'transaction.reservation.viewCountPerson', 'transaction.reservation.chooseRoom', 'transaction.reservation.confirmation', 'transaction.reservation.payDownPayment']) ? 'active' : '' }}
                        "><img src="icons/reservation.png" alt=""> Reservations</a></li>
                        <li><a class="dropdown-item" href="{{ route('roomstatus.index') }}"><img src="icons/calendar.png" alt=""> Calendar</a></li>
                        <li><a class="dropdown-item" href="{{ route('home.guest') }}"><img src="icons/guest.png" alt=""> Guests</a></li>
                        <li><a class="dropdown-item" href="{{ route('room.index') }}"><img src="icons/bed.png" alt=""> Room Types</a></li>
                        <li><a class="dropdown-item" href="{{ route('home.rates') }}"><img src="icons/rates.png" alt=""> Room Rates</a></li>
                        <li><a class="dropdown-item" href="{{ route('facility.index') }}"><img src="icons/services.png" alt=""> Services</a></li>

                    </ul>
                </a>
                
                
    
            </li>
            <li class="mb-2 bg-white rounded cursor-pointer">
                    <a href="{{ route('reports.index') }}"
                        class="nav-link py-3 border-bottom border-right myBtn
                        {{ in_array(Route::currentRouteName(), ['reports.index']) ? 'active' : '' }}
                        "
                        data-bs-toggle="dropdown" aria-expanded="true"  title="Reports">

                        <img src="icons/reports.png" alt="">
                  
                    </a>
                    <ul class="dropdown-menu" style="height: 300px; overflow-y: scroll;">
                        <li><a class="dropdown-item" href="{{ route('reports.index') }}"><img src="icons/dailyOccupancy.png" alt=""> Daily Occupany</a></li>
                        <li><a class="dropdown-item" href="{{ route('type.index') }}"><img src="icons/inhouse.png" alt=""> In House Guest</a></li>
                        <li><a class="dropdown-item" href="{{ route('roomstatus.index') }}"><img src="icons/ratio.png" alt=""> Occupancy Ratio</a></li>
                        <li><a class="dropdown-item" href="{{ route('transaction.index') }}"><img src="icons/reserve.png" alt=""> Reservation Report</a></li>
                        <li><a class="dropdown-item" href="{{ route('facility.index') }}"><img src="icons/sourceReport.png" alt=""> Source Report</a></li>
                        <li><a class="dropdown-item" href="{{ route('facility.index') }}"><img src="icons/roomReport.png" alt=""> Room Report</a></li>
                        <li><a class="dropdown-item" href="{{ route('facility.index') }}"><img src="icons/serviceReport.png" alt=""> Service Report</a></li>
                        <li><a class="dropdown-item" href="{{ route('facility.index') }}"><img src="icons/guestlist.png" alt=""> Guest Report</a></li>
                        <li><a class="dropdown-item" href="{{ route('facility.index') }}"><img src="icons/daily.png" alt=""> Daily Sale Report</a></li>
                        <li><a class="dropdown-item" href="{{ route('facility.index') }}"><img src="icons/monthly.png" alt=""> Monthly Sale Report</a></li>
                        <li><a class="dropdown-item" href="{{ route('facility.index') }}"><img src="icons/payment.png" alt=""> Payment Report</a></li>
                        <li><a class="dropdown-item" href="{{ route('facility.index') }}"><img src="icons/balance.png" alt=""> Balance Report</a></li>

                    </ul>
                    </a>
                </li>
            @if (auth()->user()->role == 'Super' || auth()->user()->role == 'Admin')
                <!-- <li class="mb-2 bg-white rounded cursor-pointer">
                    <a href="{{ route('transaction.index') }}"
                        class="nav-link py-3 border-bottom border-right myBtn
                        {{ in_array(Route::currentRouteName(), ['payment.index', 'transaction.index', 'transaction.reservation.createIdentity', 'transaction.reservation.pickFromCustomer', 'transaction.reservation.usersearch', 'transaction.reservation.storeCustomer', 'transaction.reservation.viewCountPerson', 'transaction.reservation.chooseRoom', 'transaction.reservation.confirmation', 'transaction.reservation.payDownPayment']) ? 'active' : '' }}
                        "
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Transactions">
                        <img src="icons/transactions.png" alt="">
                    </a>
                </li> -->
                <li class="mb-2 bg-white rounded cursor-pointer">
                    <a class="nav-link py-3 border-bottom border-right myBtn  dropdown-toggle dropend
                    {{ in_array(Route::currentRouteName(), ['room.index', 'room.show', 'room.create', 'room.edit', 'type.index', 'type.create', 'type.edit', 'roomstatus.index', 'roomstatus.create', 'roomstatus.edit']) ? 'active' : '' }}
                        "
                        data-bs-toggle="dropdown" aria-expanded="false">
                       <img src="icons/rooms.png" alt="">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('room.index') }}">Room</a></li>
                        <li><a class="dropdown-item" href="{{ route('type.index') }}">Type</a></li>
                        <li><a class="dropdown-item" href="{{ route('roomstatus.index') }}">Status</a></li>
                        <li><a class="dropdown-item" href="{{ route('facility.index') }}">Facility</a></li>
                    </ul>
                </li>
                
                
                <li class="mb-2 bg-white rounded cursor-pointer">
                    <a class="nav-link py-3 border-bottom border-right myBtn  dropdown-toggle
                        {{ in_array(Route::currentRouteName(), ['customer.index', 'customer.create', 'customer.edit', 'user.index', 'user.create', 'user.edit']) ? 'active' : '' }}
                    "
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="icons/users.png" alt="">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('customer.index') }}">Customer</a></li>
                        @if (auth()->user()->role == 'Super')
                            <li><a class="dropdown-item" href="{{ route('user.index') }}">User</a></li>
                        @endif
                    </ul>
                </li>
              
                
            @endif
        </ul>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js" integrity="sha512-1vcd1z5i5KZlMVHlI1Q0JlgecXGLhE7JxGn1nIS7DgWTm+Urs7hUHc6bL7V+YX9dN7yBxNpB+7VidcRzfQe/2Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

