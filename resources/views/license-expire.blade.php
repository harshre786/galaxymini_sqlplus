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

    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }
</style>

<div class="page-header">
    <h2>License Expiring in 30 days</h2>
    <div>
        <i class="fa fa-home"></i> / License
    </div>
</div>

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
            <tr>
                <td>119</td>
                <td>1a:22:09:05:00:10</td>
                <td>flutteruser9</td>
                <td>khadya_khorakh</td>
                <td>2025-12-15</td>
                <td>0000-00-00</td>
                <td class="action">delete</td>
            </tr>

            <tr>
                <td>117</td>
                <td>1a:24:02:05:00:4b</td>
                <td>flutteruser10</td>
                <td>khadya_khorakh</td>
                <td>2025-12-15</td>
                <td>0000-00-00</td>
                <td class="action">delete</td>
            </tr>

            <tr>
                <td>116</td>
                <td>3a:21:07:05:00:10</td>
                <td>flutteruser1</td>
                <td>khadya_khorakh</td>
                <td>2025-12-15</td>
                <td>0000-00-00</td>
                <td class="action">delete</td>
            </tr>

            <tr>
                <td>115</td>
                <td>1a:21:08:12:01:60</td>
                <td>hemang_inventory</td>
                <td>apex_inventory</td>
                <td>2025-12-09</td>
                <td>0000-00-00</td>
                <td class="action">delete</td>
            </tr>

            <tr>
                <td>113</td>
                <td>02:00:00:00:00:00</td>
                <td>apex_inventoryuser1</td>
                <td>apex_inventory</td>
                <td>2025-12-08</td>
                <td>0000-00-00</td>
                <td class="action">delete</td>
            </tr>
        </tbody>
    </table>

    <!-- FOOTER -->
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
