@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Active Company</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            background: #f2f5f8;
            font-family: "Segoe UI", sans-serif;
        }

        .container {
            padding: 20px;
        }

        /* Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .page-header h2 {
            margin: 0;
            font-weight: 400;
        }

        .breadcrumb {
            color: #888;
            font-size: 14px;
        }

        /* Card */
        .card {
            background: #fff;
            border-radius: 4px;
            box-shadow: 0 1px 2px rgba(0,0,0,.1);
            padding: 15px;
        }

        /* Search row */
        .search-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .search-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-left label {
            font-weight: 600;
        }

        .search-left input {
            height: 34px;
            padding: 5px 8px;
            border: 1px solid #ccc;
            border-radius: 2px;
            width: 220px;
        }

        .btn {
            border: none;
            padding: 8px 14px;
            border-radius: 3px;
            cursor: pointer;
            font-weight: 600;
        }

        .btn-clear {
            background: #3c8dbc;
            color: #fff;
        }

        .btn-add {
            background: #eee;
            color: #999;
            cursor: not-allowed;
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #f9f9f9;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            font-weight: 600;
        }

        th i {
            float: right;
            color: #bbb;
        }

        td i {
            color: #888;
            cursor: pointer;
        }

        /* Footer */
        .table-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .pagination {
            display: flex;
            gap: 5px;
        }

        .pagination button {
            padding: 6px 12px;
            border: 1px solid #ccc;
            background: #fff;
            cursor: pointer;
        }

        .pagination .active {
            background: #3c8dbc;
            color: #fff;
            border-color: #3c8dbc;
        }
    </style>
</head>
<body>

<div class="container">

    <!-- Header -->
    <div class="page-header">
        <h2>Active Company</h2>
        <div class="breadcrumb">
            <i class="fa fa-home"></i> / Company
        </div>
    </div>

    <!-- Card -->
    <div class="card">

        <!-- Search -->
        <div class="search-row">
            <div class="search-left">
                <label>Company Name</label>
                <input type="text" placeholder="">
                <button class="btn btn-clear">CLEAR SEARCH</button>
            </div>

            <button class="btn btn-add">ADD COMPANY</button>
        </div>

        <!-- Table -->
        <table>
            <thead>
            <tr>
                <th>Company Name <i class="fa fa-sort"></i></th>
                <th>Status <i class="fa fa-sort"></i></th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>khadya_khorakh</td>
                <td>Active</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            <tr>
                <td>RSPandi</td>
                <td>Active</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            <tr>
                <td>test_company</td>
                <td>Active</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            <tr>
                <td>apex_inventory</td>
                <td>Active</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            <tr>
                <td>apex_company</td>
                <td>Active</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            </tbody>
        </table>

        <!-- Footer -->
        <div class="table-footer">
            <div>Showing 1 to 5 of 5 entries</div>
            <div class="pagination">
                <button>First</button>
                <button>Previous</button>
                <button class="active">1</button>
                <button>Next</button>
                <button>Last</button>
            </div>
        </div>

    </div>

</div>

</body>
</html>
@endsection