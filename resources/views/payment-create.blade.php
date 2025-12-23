@extends('layouts.app')

@section('content')
<h2>Add Payment Type</h2>

<form method="POST" action="{{ route('payment.store') }}">
    @csrf

    <label>Payment Type</label><br>
    <input type="text" name="type" placeholder="Enter payment type" required>
    <br><br>

    <label>Status</label><br>
    <select name="status" class="form-control">
        <option value="Active">Active</option>
        <option value="Inactive">In-Active</option>
    </select>

    <br><br>
    <button class="btn btn-success">Save</button>
</form>
@endsection

<!-- <form method="POST" action="{{ route('payment.store') }}">
    @csrf

    <label>Payment Type</label>
    <input type="text" name="type" class="form-control" required>

    <label>Status</label>
    <select name="status" class="form-control">
        <option value="Active">Active</option>
        <option value="Inactive">In-Active</option>
    </select>

    <br>
    <button class="btn btn-success">Save</button>
</form> -->



