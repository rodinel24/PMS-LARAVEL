<style>
    .dropend:hover .dropdown-menu {
        display: block;
        margin-top: 0;
      
    }
</style>
<div class="" id="sidebar-wrapper">
    <div class="d-flex flex-column"
        style="width: 4.5rem; border-top-right-radius:0.5rem; border-bottom-right-radius:0.5rem; ">
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="mb-2 bg-white rounded cursor-pointer" id="dash">
                <a href="{{ route('dashboard.index') }}"
                    class="nav-link py-3 border-bottom myBtn
                    {{ in_array(Route::currentRouteName(), ['dashboard.index', 'chart.dialyGuest']) ? 'active' : '' }}
                    "
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                    <img src="icons/home.png" alt="">
                </a>
            </li>
            @if (auth()->user()->role == 'Super' || auth()->user()->role == 'Admin')
                <li class="mb-2 bg-white rounded cursor-pointer">
                    <a href="{{ route('transaction.index') }}"
                        class="nav-link py-3 border-bottom border-right myBtn
                        {{ in_array(Route::currentRouteName(), ['payment.index', 'transaction.index', 'transaction.reservation.createIdentity', 'transaction.reservation.pickFromCustomer', 'transaction.reservation.usersearch', 'transaction.reservation.storeCustomer', 'transaction.reservation.viewCountPerson', 'transaction.reservation.chooseRoom', 'transaction.reservation.confirmation', 'transaction.reservation.payDownPayment']) ? 'active' : '' }}
                        "
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Transactions">
                        <img src="icons/transactions.png" alt="">
                    </a>
                </li>
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
                <li class="mb-2 bg-white rounded cursor-pointer">
                    <a href="{{ route('reports.index') }}"
                        class="nav-link py-3 border-bottom border-right myBtn
                        {{ in_array(Route::currentRouteName(), ['reports.index']) ? 'active' : '' }}
                        "
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Reports">
                        <img src="icons/reports.png" alt="">
                    </a>
                </li>
                
            @endif
        </ul>
    </div>
</div>
