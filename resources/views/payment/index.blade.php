@extends('template.master')
@section('title', 'Payment')
@section('content')

    <div class="card shadow-sm border">
        <div class="card-body">
            <table class="table table-hover">
                
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Room Number</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Check-in Date</th>
                        <th scope="col">Check-out Date</th>
                        <th scope="col">Paid Off</th>
                        <th scope="col">Status</th>
                        <th scope="col">At</th>
                        <th scope="col">Served By</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($payments as $payment)
                        <tr>
                            <th scope="row">{{ ($payments->currentPage() - 1) * $payments->perPage() + $loop->index + 1 }}</th>
                            <td>{{ $payment->transaction->room->number }}</td>
                            <td>{{ $payment->transaction->customer->name }}</td>
                            <td>{{ Helper::dateFormat($payment->transaction->check_in) }}</td>
                            <td>{{ Helper::dateFormat($payment->transaction->check_out) }}</td>
                            <td>{{ ($payment->price) }}</td>
                            <td>{{ $payment->status }}</td>
                            <td>{{ Helper::dateFormatTime($payment->created_at) }}</td>
                            <td>{{ $payment->user->name }}</td>
                            <td><a href="{{ route('payment.invoice', $payment->id) }}">Invoice</a></td>
                        </tr>
                        @empty
                        <tr class="text-center">
                            <td colspan="6">There's no payment found on the database</td>
                        </tr>
                    @endforelse

                    <div class="row justify-content-md-center mt-3">
                <div class="col-sm-10 d-flex justify-content-md-center">
                    {{ $payments->onEachSide(2)->links('template.paginationlinks') }}
                </div>
            </div>
                </tbody>
            </table>
        </div>
    </div>

@endsection
