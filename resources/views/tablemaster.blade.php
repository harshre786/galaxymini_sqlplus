@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table Master</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: #f2f5f8;
            font-family: "Segoe UI", sans-serif;
            margin: 0;
        }

        .page-wrapper {
            padding: 20px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .page-header h2 {
            font-weight: 400;
            margin: 0;
        }

        .breadcrumb {
            color: #888;
            font-size: 14px;
        }

        .card-box {
            background: #fff;
            border-radius: 4px;
            padding: 20px;
            box-shadow: 0 1px 2px rgba(0,0,0,.1);
        }

        .search-row {
            display: flex;
            align-items: flex-end;
            gap: 15px;
        }

        .search-row .field {
            display: flex;
            flex-direction: column;
        }

        .search-row label {
            font-size: 14px;
            margin-bottom: 5px;
        }

        .search-row input {
            height: 36px;
            width: 200px;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 2px;
        }

        .btn-clear {
            background: #3c8dbc;
            color: #fff;
            border: none;
            padding: 9px 18px;
            cursor: pointer;
            border-radius: 2px;
        }

        .btn-add {
            margin-left: auto;
            background: #eee;
            border: none;
            padding: 9px 18px;
            color: #aaa;
            border-radius: 2px;
            cursor: not-allowed;
        }

        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #ddd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        th {
            background: #f9f9f9;
            font-weight: 600;
            text-align: left;
        }

        tbody tr:nth-child(even) {
            background: #fafafa;
        }

        td i {
            color: #666;
            cursor: pointer;
        }

        .table-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .pagination button {
            border: 1px solid #ccc;
            background: #fff;
            padding: 6px 12px;
            margin-left: 5px;
            cursor: pointer;
        }

        .pagination .active {
            background: #5bc0de;
            color: #fff;
            border-color: #46b8da;
        }
    </style>
</head>
<body>

<div class="page-wrapper">

    <!-- Header -->
    <div class="page-header">
        <h2>Table Master</h2>
        <div class="breadcrumb">
            <i class="fa fa-home"></i> / Table Master
        </div>
    </div>

    <!-- Content -->
    <div class="card-box">

        <!-- Search -->
        <div class="search-row">
            <div class="field">
                <label>Name</label>
                <input type="text">
            </div>

            <div class="field">
                <label>Company User</label>
                <input type="text">
            </div>

            <button class="btn-clear">CLEAR SEARCH</button>

            <button class="btn-add">ADD TABLE</button>
        </div>

        <hr>

        <!-- Table -->
        <table>
            <thead>
            <tr>
                <th>Table Name</th>
                <th>Status</th>
                <th>Company User</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>I-2</td>
                <td>Active</td>
                <td>admin</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            <tr>
                <td>I-1</td>
                <td>Active</td>
                <td>admin</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            <tr>
                <td>Table-3</td>
                <td>Active</td>
                <td>apex_company</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            <tr>
                <td>Table-2</td>
                <td>Active</td>
                <td>apex_company</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            <tr>
                <td>Table-1</td>
                <td>Active</td>
                <td>apex_company</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            <tr>
                <td>T-3</td>
                <td>Active</td>
                <td>apex_company</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            <tr>
                <td>T-2</td>
                <td>Active</td>
                <td>apex_company</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            <tr>
                <td>T-1</td>
                <td>Active</td>
                <td>apex_company</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            </tbody>
        </table>

        <!-- Footer -->
        <div class="table-footer">
            <div>Showing 1 to 8 of 8 entries</div>
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
