@extends('layouts.app')

@section('content')

<h2>Customer</h2>

<form method="GET">
    <input type="text" name="customer_code" placeholder="Customer Code">
    <input type="text" name="customer_name" placeholder="Customer Name">
    <input type="text" name="mobile" placeholder="Mobile No">
    <input type="text" name="email" placeholder="Email">

    <button type="submit">SEARCH</button>
    <a href="{{ route('customer.index') }}">CLEAR SEARCH</a>

    <a href="{{ route('customer.create') }}">
        <button type="button">ADD CUSTOMER</button>
    </a>
</form>

<br>

<table border="1" width="100%" cellpadding="8">
    <tr>
        <th>Customer ID</th>
        <th>Customer Name</th>
        <th>E-mail</th>
        <th>Mobile No.</th>
        <th>Actions</th>
    </tr>

    hello 
        @foreach($customers as $customer)
<tr>
    <td>{{ $customer->customerCode }}</td>
    <td>{{ $customer->name }}</td>
    <td>{{ $customer->email }}</td>
    <td>{{ $customer->mobile1 }}</td>
    <td>
        {{ $customer->isActive ? 'Active' : 'In-Active' }}
    </td>
    <td>Edit</td>
</tr>
@endforeach

    <!-- @forelse($customers as $customer)
        <tr>
            <td>{{ $customer->customer_code }}</td>
            <td>{{ $customer->customer_name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->mobile }}</td>
            <td>Edit</td>
        </tr> -->

        
<!-- 
    @empty -->
        <tr>
            <td colspan="5">No customers found</td>
        </tr>

    @endforelse
</table>

@endsection
