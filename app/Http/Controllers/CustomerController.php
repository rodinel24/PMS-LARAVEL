<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Models\Customer;
use App\Models\User;
use App\Repositories\CustomerRepository;
use App\Repositories\TransactionRepository;

use App\Repositories\ImageRepository;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OccupancyExport;

class CustomerController extends Controller
{
    private $customerRepository;

    public function __construct(CustomerRepository $customerRepository , TransactionRepository $transactionRepository)
    {
        $this->customerRepository = $customerRepository;
        $this->transactionRepository = $transactionRepository;
    }

  

    public function index(Request $request)
    {
        $customers = $this->customerRepository->get($request);
        return view('customer.index', compact('customers'));
    }
    public function guests(Request $request)
    {
        $transactions = $this->transactionRepository->getTransaction($request);
        $transactionsExpired = $this->transactionRepository->getTransactionExpired($request);
        $customers = $this->customerRepository->get($request);
        return view('home.guest', compact('customers','transactions', 'transactionsExpired'));

    }
    public function exportToExcel()
{
    // Retrieve the occupancy data from the database
    $customers = Customer::all();
    $transactions = Transaction::all();


    // Convert the data to an Excel file and return it for download
    return Excel::download(new OccupancyExport($customers,$transaction), 'occupancy.xlsx');
}
    public function create()
    {
        return view('customer.create');
    }

    public function store(StoreCustomerRequest $request)
    {
        $customer = $this->customerRepository->store($request);
        return redirect('customer')->with('success', 'Customer ' . $customer->name . ' created');
    }

    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', ['customer' => $customer]);
    }

    public function update(Customer $customer, StoreCustomerRequest $request)
    {
        $customer->update($request->all());
        return redirect('customer')->with('success', 'customer ' . $customer->name . ' udpated!');
    }

    public function destroy(Customer $customer, ImageRepository $imageRepository)
    {
        try {
            $user = User::find($customer->user->id);
            $avatar_path = public_path('img/user/' . $user->name . '-' . $user->id);

            $customer->delete();
            $user->delete();

            if (is_dir($avatar_path)) {
                $imageRepository->destroy($avatar_path);
            }

            return redirect('customer')->with('success', 'Customer ' . $customer->name . ' deleted!');
        } catch (\Exception $e) {
            $errorMessage = "";
            if($e->errorInfo[0] == "23000") {
                $errorMessage = "Data still connected to other tables";
            }
            return redirect('customer')->with('failed', 'Customer ' . $customer->name . ' cannot be deleted! ' . $errorMessage);
        }
    }
}

