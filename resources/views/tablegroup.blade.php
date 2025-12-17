@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table Group</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            margin: 0;
            background: #f4f6f9;
            font-family: Arial, Helvetica, sans-serif;
        }

        .page-title {
            font-size: 28px;
            padding: 15px 20px;
        }

        .container {
            background: #fff;
            margin: 0 20px 20px;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 1px 1px rgba(0,0,0,.1);
        }

        /* FILTER BAR */
        .filters {
            display: flex;
            align-items: flex-end;
            gap: 20px;
            margin-bottom: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input, select {
            padding: 8px;
            width: 220px;
            border: 1px solid #ccc;
            border-radius: 2px;
        }

        .btn {
            padding: 10px 18px;
            border: none;
            border-radius: 3px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-search {
            background: #3c8dbc;
            color: #fff;
        }

        .btn-disabled {
            background: #f0f0f0;
            color: #999;
            cursor: not-allowed;
        }

        .actions-top {
            margin-left: auto;
        }

        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 15px 0;
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            background: #f9f9f9;
            text-align: left;
        }

        .sort-icon {
            float: right;
            color: #ccc;
        }

        .action-icon {
            color: #777;
            cursor: pointer;
        }

        .status-select {
            width: 140px;
        }

        /* FOOTER */
        .table-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }

        .pagination button {
            padding: 6px 12px;
            border: 1px solid #ccc;
            background: #fff;
            margin-left: 3px;
            border-radius: 2px;
        }

        .pagination .active {
            background: #7fb8c8;
            color: #fff;
            border-color: #7fb8c8;
        }
    </style>
</head>
<body>

<div class="page-title">Table Group</div>

<div class="container">

    <!-- FILTERS -->
    <div class="filters">
        <div class="form-group">
            <label>Group Name</label>
            <input type="text">
        </div>

        <div class="form-group">
            <label>Company User</label>
            <input type="text">
        </div>

        <button class="btn btn-search">CLEAR SEARCH</button>

        <div class="actions-top">
            <button class="btn btn-disabled">ADD GROUP</button>
        </div>
    </div>

    <hr>

    <!-- TABLE -->
    <table>
        <thead>
            <tr>
                <th>Group name <i class="fa fa-sort sort-icon"></i></th>
                <th>Status <i class="fa fa-sort sort-icon"></i></th>
                <th>Company User <i class="fa fa-sort sort-icon"></i></th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Table</td>
                <td>
                    <select class="status-select">
                        <option selected>Active</option>
                        <option>In-Active</option>
                    </select>
                </td>
                <td>admin</td>
                <td><i class="fa fa-edit action-icon"></i></td>
            </tr>

            <tr>
                <td>T-2</td>
                <td>
                    <select class="status-select">
                        <option selected>Active</option>
                        <option>In-Active</option>
                    </select>
                </td>
                <td>apex_company</td>
                <td><i class="fa fa-edit action-icon"></i></td>
            </tr>

            <tr>
                <td>T-1</td>
                <td>
                    <select class="status-select">
                        <option selected>Active</option>
                        <option>In-Active</option>
                    </select>
                </td>
                <td>apex_company</td>
                <td><i class="fa fa-edit action-icon"></i></td>
            </tr>
        </tbody>
    </table>

    <!-- FOOTER -->
    <div class="table-footer">
        <div>Showing 1 to 3 of 3 entries</div>
        <div class="pagination">
            <button>First</button>
            <button>Previous</button>
            <button class="active">1</button>
            <button>Next</button>
            <button>Last</button>
        </div>
    </div>

</div>

</body>
</html>
@endsection