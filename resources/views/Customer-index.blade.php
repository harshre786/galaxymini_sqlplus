@extends('layouts.app')

@section('content')

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />

<style>
    body { background: #f4f6f9; font-family: Arial; }
    .page-header { padding: 20px; }
    .breadcrumb { float: right; color: #999; }
    .card { background: #fff; margin: 0 20px 20px; border-radius: 4px; box-shadow: 0 1px 1px rgba(0,0,0,.1); }
    .card-body { padding: 20px; }
    .filter-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 25px; }
    .form-group { display: flex; flex-direction: column; }
    label { font-weight: bold; margin-bottom: 6px; }
    input, select { height: 36px; padding: 6px 10px; border: 1px solid #ccc; border-radius: 3px; }
    .btn-row { margin-top: 15px; display: flex; gap: 12px; }
    .btn { padding: 10px 18px; border: none; border-radius: 3px; font-weight: bold; cursor: pointer; }
    .btn-primary { background: #3c8dbc; color: #fff; }
    .btn-light { background: #f4f4f4; }
    table { width: 100%; border-collapse: collapse; }
    th, td { padding: 12px; border: 1px solid #ddd; }
    th { background: #f9f9f9; }
    .action-icon { color: #777; cursor: pointer; }
    .table-footer { display: flex; justify-content: space-between; margin-top: 15px; }
</style>

<!-- HEADER -->
<div class="page-header">
    <h2>Customer</h2>
    <span class="breadcrumb">
        <i class="fa fa-home"></i> / Customer
    </span>
</div>

<!-- CARD -->
<div class="card">
<div class="card-body">

<!-- FILTER FORM -->
<form method="GET" action="{{ route('customer.index') }}">

<div class="filter-grid">
    <div class="form-group">
        <label>Customer Code</label>
        <input type="text" name="customer_code" value="{{ request('customer_code') }}">
    </div>

    <div class="form-group">
        <label>Customer Name</label>
        <input type="text" name="customer_name" value="{{ request('customer_name') }}">
    </div>

    <div class="form-group">
        <label>Mobile No</label>
        <input type="text" name="mobile" value="{{ request('mobile') }}">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="{{ request('email') }}">
    </div>
</div>

<div class="btn-row">
    <button class="btn btn-primary">SEARCH</button>
    <a href="{{ route('customer.index') }}" class="btn btn-light">CLEAR SEARCH</a>
    <a href="{{ route('customer.create') }}" class="btn btn-light">ADD CUSTOMER</a>
</div>

</form>

<hr>

<!-- TABLE -->
<table>
<thead>
<tr>
    <th>Customer ID</th>
    <th>Customer Name</th>
    <th>E-mail</th>
    <th>Mobile No.</th>
    <th>Status</th>
    <th>Actions</th>
</tr>
</thead>

<tbody>
@forelse($customers as $customer)
<tr>
    <td>{{ $customer->customerCode }}</td>
    <td>{{ $customer->name }}</td>
    <td>{{ $customer->email ?? '-' }}</td>
    <td>{{ $customer->mobile1 }}</td>
    <td>
        {{ $customer->isActive ? 'Active' : 'In-Active' }}
    </td>
    <td>
        <a href="{{ route('customer.edit', $customer->id) }}">
            <i class="fa fa-edit action-icon"></i>
        </a>
    </td>
</tr>
@empty
<tr>
    <td colspan="6" style="text-align:center;">No customers found</td>
</tr>
@endforelse
</tbody>
</table>

<!-- FOOTER -->
<div class="table-footer">
    <div>
        Showing {{ $customers->firstItem() ?? 0 }} to {{ $customers->lastItem() ?? 0 }}
        of {{ $customers->total() }} entries
    </div>
    <div>
        {{ $customers->links() }}
    </div>
</div>

</div>
</div>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>

<script>
$(function () {
    $('.searchable').select2({ width: '100%' });
});
</script>

@endsection
