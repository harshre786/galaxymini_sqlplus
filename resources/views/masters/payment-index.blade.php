@extends('layouts.app')

@section('content')
<h2>Payment Master</h2>

<a href="{{ route('/masters/payment.index') }}">
    <button>Add Payment Type</button>
</a>

<br><br>


<a href="{{ route('payment.create') }}">
    <button>ADD PAYMENT TYPE</button>
</a>


<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Id</th>
        <th>Payment Type</th>
        <th>Status</th>
        <th>Created Date</th>
        <th>Action</th>
    </tr>

    @foreach($payments as $payment)

    <tr>
        <td>{{ $payment->id }}</td>
        <td>{{ $payment->payment_type }}</td>
        <td>
            {{ $payment->status == 1 ? 'Active' : 'In-Active' }}
        </td>
        <td>{{ $payment->created_at->format('d-m-Y') }}</td>
        <td>
            <a href="{{ route('payment.edit', $payment->id) }}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection



