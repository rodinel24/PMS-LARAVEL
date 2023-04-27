<?php

use App\Models\User;
use App\Events\NewReservationEvent;
use App\Events\RefreshDashboardEvent;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TransactionRoomReservationController;
use App\Http\Controllers\RoomStatusController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontdeskController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\HotelWebsiteController;
use App\Http\Controllers\BookingStepsController;










/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('website/home');
});


Route::get('/about' , [HotelWebsiteController::class , 'about'])->name('about');
Route::get('/blog' , [HotelWebsiteController::class , 'blog'])->name('blog');
Route::get('/contact' , [HotelWebsiteController::class , 'contact'])->name('contact');
Route::get('/gallery' , [HotelWebsiteController::class , 'gallery'])->name('gallery');
Route::get('/ourRoom' , [HotelWebsiteController::class , 'ourRoom'])->name('ourRoom');


//bookingStepsController
Route::get('/bookingSteps' , [TransactionRoomReservationController::class , 'bookingStep'])->name('bookingSteps');
Route::get('/bookingSteps2' , [BookingStepsController::class , 'bookingSteps2'])->name('bookingSteps2');
Route::get('/bookingSteps3' , [BookingStepsController::class , 'bookingSteps3'])->name('bookingSteps3');





// Route::get('/reserve' , [ReservationsController::class , 'index'])->name('booking');
// Route::post('/reservation/store' , [ReservationsController::class , 'store'])->name('store');


// Route::get('/reserve' , [ReservationsController::class , 'book'])->name('book');

Route::get('/data',[ReservationsController::class , 'index'])->name('data');
        //modal


// Route::get('/reserve' , [ReserveController::class , 'index'])->name('booking');


// booking steps controller (forms)
Route::post('/reservations' ,[ReservationsController::class , 'store'])->name('reservations.store');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');

//routes for available rooms display
// Route::post('/rooms/available', [RoomController::class , 'available'])->name('rooms.available');






    //Routes for walk-in booking inside the PMS
    Route::post("activeguest.store" , [TransactionsController::class , 'store'])->name('activeguest.store');
    Route::get('/activeguest',[TransactionsController::class , 'activeguest'])->name('activeguest');
    Route::get('/customers' , [TransactionsController::class , 'customers'])->name('customers');



    // //Routes for room sidebar inside the PMS
    // Route::get('/room',[RoomController::class , 'room'])->name('room');

    // Route::post("room.store" , [RoomController::class , 'store'])->name('room.store');


    //Routes for users sidebar inside the PMS
    Route::get('/users' , [UserController::class , 'displayUsers'])->name('users');

  




    Route::get('roomtype' , [FrontdeskController::class , 'roomtype'])->name('roomtype');


    Route::post("getdata" , [FrontdeskController::class , 'getData'])->name('getdata');

    Route::post("getdata1" , [FrontdeskController::class , 'getData1'])->name('getData1');

    Route::get("getdata2" , [FrontdeskController::class , 'getData2'])->name('getData2');


    Route::get('/expireguest' , [FrontdeskController::class , 'expireguest'])->name('expireguest');
  


    Route::get('/roomstatus' , [FrontdeskController::class , 'roomstatus'])->name('roomstatus');
    // Route::get('/customers' , [FrontdeskController::class , 'customers'])->name('customers');
    // Route::get('/users' , [FrontdeskController::class , 'users'])->name('users');





    








Route::get('/', function () {
    return view('website/home');
});


Route::get('/about' , [HotelWebsiteController::class , 'about'])->name('about');
Route::get('/blog' , [HotelWebsiteController::class , 'blog'])->name('blog');
Route::get('/contact' , [HotelWebsiteController::class , 'contact'])->name('contact');
Route::get('/gallery' , [HotelWebsiteController::class , 'gallery'])->name('gallery');
Route::get('/ourRoom' , [HotelWebsiteController::class , 'ourRoom'])->name('ourRoom');


//bookingStepsController
Route::get('/bookingSteps' , [BookingStepsController::class , 'bookingSteps'])->name('bookingSteps');
Route::get('/bookingSteps2' , [BookingStepsController::class , 'bookingSteps2'])->name('bookingSteps2');
Route::get('/bookingSteps3' , [BookingStepsController::class , 'bookingSteps3'])->name('bookingSteps3');





Route::group(['middleware' => ['auth', 'checkRole:Super']], function () {
    Route::resource('user', UserController::class);
});

Route::group(['middleware' => ['auth', 'checkRole:Super,Admin']], function () {
    Route::post('/room/{room}/image/upload', [ImageController::class, 'store'])->name('image.store');
    Route::delete('/image/{image}', [ImageController::class, 'destroy'])->name('image.destroy');

    Route::name('transaction.reservation.')->group(function () {
        Route::get('/createIdentity', [TransactionRoomReservationController::class, 'createIdentity'])->name('createIdentity');
        Route::get('/pickFromCustomer', [TransactionRoomReservationController::class, 'pickFromCustomer'])->name('pickFromCustomer');
        Route::post('/storeCustomer', [TransactionRoomReservationController::class, 'storeCustomer'])->name('storeCustomer');
        Route::get('/{customer}/viewCountPerson', [TransactionRoomReservationController::class, 'viewCountPerson'])->name('viewCountPerson');
        Route::get('/{customer}/chooseRoom', [TransactionRoomReservationController::class, 'chooseRoom'])->name('chooseRoom');
        Route::get('/{customer}/{room}/{from}/{to}/confirmation', [TransactionRoomReservationController::class, 'confirmation'])->name('confirmation');
        Route::post('/{customer}/{room}/payDownPayment', [TransactionRoomReservationController::class, 'payDownPayment'])->name('payDownPayment');
    });

    //route for hotel reservation room availability
    Route::post('/check-availability', [BookingStepsController::class, 'checkAvailability'])->name('checkAvailability');



    //route
    Route::resource('customer', CustomerController::class);
    Route::resource('type', TypeController::class);
    Route::resource('room', RoomController::class);
    Route::resource('roomstatus', RoomStatusController::class);
    Route::resource('transaction', TransactionController::class);
    Route::resource('facility', FacilityController::class);

    Route::get('/reports', [TransactionController::class, 'reports'])->name('reports.index');
    Route::get('/guests', [CustomerController::class, 'guests'])->name('home.guest');
    Route::get('/rates', [RoomController::class, 'roomRates'])->name('home.rates');




//occupancy reports
Route::get('/occupancy-report', 'App\Http\Controllers\OccupancyReportController@index');

Route::get('/revenue-report',  [TransactionController::class, 'revenue'])->name('revenue.index');








    Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
    Route::get('/payment/{payment}/invoice', [PaymentController::class, 'invoice'])->name('payment.invoice');

    Route::get('/transaction/{transaction}/payment/create', [PaymentController::class, 'create'])->name('transaction.payment.create');
    Route::post('/transaction/{transaction}/payment/store', [PaymentController::class, 'store'])->name('transaction.payment.store');

    Route::get('/get-dialy-guest-chart-data', [ChartController::class, 'dialyGuestPerMonth']);
    Route::get('/get-dialy-guest/{year}/{month}/{day}', [ChartController::class, 'dialyGuest'])->name('chart.dialyGuest');
});

Route::group(['middleware' => ['auth', 'checkRole:Super,Admin,Customer']], function () {
    Route::resource('user', UserController::class)->only([
        'show'
    ]);

    Route::view('/notification', 'notification.index')->name('notification.index');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/mark-all-as-read', [NotificationsController::class, 'markAllAsRead'])->name('notification.markAllAsRead');

    Route::get('/notification-to/{id}',[NotificationsController::class, 'routeTo'])->name('notification.routeTo');
});

Route::view('/login', 'auth.login')->name('login');
Route::post('/postLogin', [AuthController::class, 'postLogin'])->name('postlogin');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/sendEvent', function () {
    $superAdmins = User::where('role', 'Super')->get();
    event(new RefreshDashboardEvent("Someone reserved a room"));

    foreach ($superAdmins as $superAdmin) {
        $message = 'Reservation added by';
        // event(new NewReservationEvent($message, $superAdmin));
    }
});
