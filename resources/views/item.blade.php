@extends('layouts.app')

@section('content')

<style>
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .search-bar {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .search-bar input {
        padding: 6px 8px;
        border: 1px solid #ccc;
        border-radius: 2px;
    }

    .btn {
        padding: 7px 14px;
        border: none;
        border-radius: 2px;
        cursor: pointer;
        font-size: 14px;
    }

    .btn-primary {
        background: #3c8dbc;
        color: #fff;
    }

    .btn-light {
        background: #f4f4f4;
        color: #999;
        border: 1px solid #ddd;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
        background: #fff;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
        font-size: 14px;
    }

    th {
        background: #f9f9f9;
        color: #777;
    }

    .actions i {
        cursor: pointer;
        color: #3c8dbc;
    }

    .pagination {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 15px;
    }

    .pagination-buttons a {
        padding: 6px 10px;
        border: 1px solid #ccc;
        margin: 0 2px;
        text-decoration: none;
        color: #333;
    }

    .pagination-buttons .active {
        background: #3c8dbc;
        color: white;
        border-color: #3c8dbc;
    }
</style>

<div class="page-header">
    <h2>Item</h2>
    <div>
        <i class="fa fa-home"></i> / Item
    </div>
</div>

<div style="background:#fff;padding:15px;border:1px solid #ddd;">

    <!-- SEARCH ROW -->
    <div class="search-bar">
        <label>Name</label>
        <input type="text">

        <label>Company User</label>
        <input type="text">

        <button class="btn btn-primary">CLEAR SEARCH</button>

        <div style="margin-left:auto;">
            <button class="btn btn-light">ADD ITEM</button>
        </div>
    </div>

    <!-- TABLE -->
    <table>
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Department</th>
                <th>Rate 1</th>
                <th>Rate 2</th>
                <th>Company User</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach(range(1,10) as $i)
            <tr>
                <td>Adult Hawaiian Shirt</td>
                <td>Shirts</td>
                <td>199</td>
                <td>249</td>
                <td>khadya_khorakh</td>
                <td class="actions">
                    <i class="fa fa-edit"></i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- PAGINATION -->
    <div class="pagination">
        <div>
            Showing 1 to 10 of 87 entries
        </div>

        <div class="pagination-buttons">
            <a href="#">First</a>
            <a href="#">Previous</a>
            <a class="active" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">Next</a>
            <a href="#">Last</a>
        </div>
    </div>

</div>

@endsection
