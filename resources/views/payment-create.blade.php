@extends('layouts.app')

@section('content')
<h2>Add Payment Type</h2>

<form method="POST" action="{{ route('payment.store') }}">
    @csrf

    <label>Payment Type</label><br>
    <input type="text" name="payment_type" placeholder="Enter payment type" required>
    <br><br>

    <label>Status</label><br>
    <select name="status">
        <option value="1">Active</option>
        <option value="0">In-Active</option>
    </select>
    <br><br>

    <button type="submit">Save Payment</button>
</form>
@endsection
