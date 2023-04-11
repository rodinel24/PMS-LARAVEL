<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Payment;
use App\Models\Transaction;
use App\Repositories\PaymentRepository;
use App\Repositories\TransactionRepository;
use Illuminate\Http\Request;
use App\Models\Customer;

class PaymentController extends Controller
{
    public $paymentRepository;
    public $transactionRepository;


    public function __construct(PaymentRepository $paymentRepository,TransactionRepository $transactionRepository)
    {
        $this->paymentRepository = $paymentRepository;
        $this->transactionRepository = $transactionRepository;

    }


    

    public function index(Request $request)
    
    {
        $payments = Payment::orderBy('id','DESC')->paginate(20);

        $transactions = $this->transactionRepository->getTransaction($request);

       
        return view('payment.index', compact('payments','transactions'));
    }

    public function create(Transaction $transaction)
    {
        return view('transaction.payment.create', compact('transaction'));
    }

    public function store(Transaction $transaction, Request $request)
    {
        $insufficient = $transaction->getTotalPrice() - $transaction->getTotalPayment();
        $request->validate([
            'payment' => 'required|numeric|lte:' . $insufficient
        ]);

        $this->paymentRepository->store($request, $transaction, 'Payment');

        return redirect()->route('transaction.index')->with('success', 'Transaction room ' . $transaction->room->number . ' success, ' . Helper::convertToRupiah($request->payment) . ' paid');
    }

    public function invoice(Payment $payment)
    {
        return view('payment.invoice', compact('payment'));
    }
}
