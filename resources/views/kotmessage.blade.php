@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KotMessage</title>

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
            margin: 0;
            font-weight: 400;
        }

        .breadcrumb {
            font-size: 14px;
            color: #888;
        }

        .card-box {
            background: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 1px 2px rgba(0,0,0,.1);
        }

        /* Search */
        .search-row {
            display: flex;
            align-items: flex-end;
            gap: 15px;
        }

        label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
        }

        input {
            height: 36px;
            width: 240px;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 2px;
        }

        .btn-clear {
            background: #3c8dbc;
            color: #fff;
            border: none;
            padding: 9px 18px;
            border-radius: 2px;
            cursor: pointer;
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

        /* Table */
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

        /* Footer */
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
        <h2>KotMessage</h2>
        <div class="breadcrumb">
            <i class="fa fa-home"></i> / Kotmessage
        </div>
    </div>

    <!-- Card -->
    <div class="card-box">

        <!-- Search -->
        <div class="search-row">
            <div>
                <label>Kotmessage</label>
                <input type="text">
            </div>

            <button class="btn-clear">CLEAR SEARCH</button>

            <button class="btn-add">ADD KOTMESSAGE</button>
        </div>

        <hr>

        <!-- Table -->
        <table>
            <thead>
            <tr>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
@forelse($kotmessages as $msg)
    <tr>
        <td>{{ $msg->description }}</td>
        <td>
            <i class="fa fa-pen"></i>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="2">No Kot Messages Found</td>
    </tr>
@endforelse
</tbody>

        </table>

        <!-- Footer -->
        <div class="table-footer">
            <div>Showing 1 to 1 of 1 entries</div>
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

