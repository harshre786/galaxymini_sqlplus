@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Users</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            margin: 0;
            background: #f4f6f9;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* PAGE HEADER */
        .page-header {
            padding: 20px;
        }

        .page-header h2 {
            margin: 0;
            font-weight: 500;
            display: inline-block;
        }

        .breadcrumb {
            float: right;
            color: #999;
        }

        /* CARD */
        .card {
            background: #fff;
            margin: 0 20px 20px;
            border-radius: 4px;
            box-shadow: 0 1px 1px rgba(0,0,0,.1);
        }

        .card-body {
            padding: 20px;
        }

        /* SEARCH BAR */
        .search-row {
            display: flex;
            align-items: flex-end;
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            height: 34px;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            width: 220px;
        }

        .btn {
            height: 36px;
            padding: 0 18px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-primary {
            background: #3c8dbc;
            color: #fff;
        }

        .btn-disabled {
            background: #f4f4f4;
            color: #999;
            cursor: not-allowed;
            margin-left: auto;
        }

        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #ddd;
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            vertical-align: middle;
        }

        th {
            background: #f9f9f9;
            font-weight: bold;
        }

        .sort-icon {
            float: right;
            color: #ccc;
        }

        .status {
            color: #000;
        }

        .action-icon {
            color: #777;
            cursor: pointer;
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
            cursor: pointer;
        }

        .pagination .active {
            background: #7fb8c8;
            color: #fff;
            border-color: #7fb8c8;
        }
    </style>
</head>
<body>

<!-- HEADER -->
<div class="page-header">
    <h2>Company Users</h2>
    <span class="breadcrumb">
        <i class="fa fa-home"></i> / Company Users
    </span>
</div>

<!-- CARD -->
<div class="card">
    <div class="card-body">

        <!-- SEARCH -->
        <div class="search-row">
            <div class="form-group">
                <label>Username</label>
                <input type="text">
            </div>

            <button class="btn btn-primary">CLEAR SEARCH</button>

            <button class="btn btn-disabled" disabled>ADD COMPANYUSERS</button>
        </div>

        <hr>

        <!-- TABLE -->
        <table>
            <thead>
                <tr>
                    <th>Company Username <i class="fa fa-sort sort-icon"></i></th>
                    <th>Exp Date <i class="fa fa-sort sort-icon"></i></th>
                    <th>Status <i class="fa fa-sort sort-icon"></i></th>
                    <th>Company Name <i class="fa fa-sort sort-icon"></i></th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>apex_inventoryuser1</td>
                    <td>31-12-2029</td>
                    <td class="status">Active</td>
                    <td>apex_inventory</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>Atto_123</td>
                    <td>16-01-2026</td>
                    <td class="status">Active</td>
                    <td>apex_company</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>hemang</td>
                    <td>01-01-2027</td>
                    <td class="status">Active</td>
                    <td>apex_company</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>apex_user3</td>
                    <td>31-07-2025</td>
                    <td class="status">Active</td>
                    <td>apex_company</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>test12</td>
                    <td>30-06-2026</td>
                    <td class="status">Active</td>
                    <td>apex_company</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>aditim</td>
                    <td>20-10-2024</td>
                    <td class="status">Active</td>
                    <td>apex_company</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>test</td>
                    <td>31-12-2026</td>
                    <td class="status">Active</td>
                    <td>apex_company</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>apex_user2</td>
                    <td>31-08-2025</td>
                    <td class="status">Active</td>
                    <td>apex_company</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>apex_user</td>
                    <td>31-12-2024</td>
                    <td class="status">Active</td>
                    <td>apex_company</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
            </tbody>
        </table>

        <!-- FOOTER -->
        <div class="table-footer">
            <div>Showing 21 to 29 of 29 entries</div>

            <div class="pagination">
                <button>First</button>
                <button>Previous</button>
                <button>1</button>
                <button>2</button>
                <button class="active">3</button>
                <button>Next</button>
                <button>Last</button>
            </div>
        </div>

    </div>
</div>

</body>
</html>
@endsection