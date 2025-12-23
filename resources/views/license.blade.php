@extends('layouts.app')

@section('content')

<style>
    .box {
        background: #fff;
        border: 1px solid #ddd;
        padding: 20px;
    }

    .filters {
        display: flex;
        gap: 15px;
        align-items: flex-end;
        margin-bottom: 15px;
    }

    .filters label {
        font-weight: 600;
        font-size: 14px;
        display: block;
        margin-bottom: 5px;
    }

    .filters input {
        height: 34px;
        width: 200px;
        padding: 5px 8px;
        border: 1px solid #ccc;
    }

    .btn-search {
        background: #3c8dbc;
        color: #fff;
        border: none;
        padding: 8px 16px;
        font-weight: 600;
        border-radius: 3px;
        cursor: pointer;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
        font-size: 14px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    th {
        background: #f9f9f9;
        font-weight: bold;
    }

    .action {
        color: #8a8a8a;
        cursor: pointer;
    }

    .action:hover {
        color: red;
    }

    .table-footer {
        display: flex;
        justify-content: space-between;
        margin-top: 15px;
        font-size: 14px;
        align-items: center;
    }

    .pagination a {
        border: 1px solid #ccc;
        padding: 6px 12px;
        margin-left: 4px;
        text-decoration: none;
        color: #333;
        border-radius: 2px;
    }

    .pagination a.active {
        background: #3c8dbc;
        color: #fff;
        border-color: #3c8dbc;
    }
</style>

<div class="box">

    <!-- FILTERS -->
    <div class="filters">
        <div>
            <label>Username</label>
            <input type="text">
        </div>

        <div>
            <label>Company Name</label>
            <input type="text">
        </div>

        <button class="btn-search">CLEAR SEARCH</button>
    </div>

    <!-- TABLE -->
    <table>
        <thead>
            <tr>
                <th>License Id</th>
                <th>Mac Address</th>
                <th>Username</th>
                <th>Company Name</th>
                <th>Created Date</th>
                <th>Exp Date</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
@forelse($licenses as $license)
<tr>
    <td>{{ $license->license_id }}</td>
    <td>{{ $license->macaddress }}</td>
    <td>{{ $license->userid }}</td>
    <td>{{ $license->subscriberid ?? '-' }}</td>
    <td>{{ $license->created_date }}</td>
    <td>0000-00-00</td>
    <td class="action">
        <form method="POST" action="{{ route('license.delete', $license->license_id) }}">
            @csrf
            @method('DELETE')
            <button style="border:none;background:none;color:red;cursor:pointer">
                delete
            </button>
        </form>
    </td>
</tr>
@empty
<tr>
    <td colspan="7" style="text-align:center">No licenses found</td>
</tr>
@endforelse
</tbody>

    </table>

    <!-- FOOTER -->

    <div class="pagination">
    {{ $licenses->links() }}
</div>

    <div class="table-footer">
        <div>Showing 1 to 10 of 16 entries</div>

        <div class="pagination">
            <a href="#">First</a>
            <a href="#">Previous</a>
            <a class="active" href="#">1</a>
            <a href="#">2</a>
            <a href="#">Next</a>
            <a href="#">Last</a>
        </div>
    </div>

</div>

@endsection
