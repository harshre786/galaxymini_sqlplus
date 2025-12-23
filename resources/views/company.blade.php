@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            background: #f4f6f9;
            font-family: Arial, Helvetica, sans-serif;
        }

        .page-header {
            padding: 20px;
            background: #f4f6f9;
        }

        .page-header h2 {
            margin: 0;
            font-weight: 500;
        }

        .breadcrumb {
            background: none;
            padding: 0;
            margin: 0;
            float: right;
        }

        .card {
            background: #fff;
            margin: 0 20px 20px;
            border-radius: 4px;
            box-shadow: 0 1px 1px rgba(0,0,0,.1);
        }

        .card-body {
            padding: 20px;
        }

        .form-row {
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
            padding: 0 16px;
            border-radius: 3px;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: #3c8dbc;
            color: white;
        }

        .btn-light {
            background: #f4f4f4;
            color: #999;
            float: right;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            background: #f9f9f9;
            text-align: left;
        }

        .badge {
            padding: 4px 10px;
            border-radius: 3px;
            background: #00a65a;
            color: white;
            font-size: 13px;
        }

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
            background: #3c8dbc;
            color: #fff;
        }
    </style>
</head>
<body>

<!-- PAGE HEADER -->
<div class="page-header">
    <h2>Company</h2>

    <ul class="breadcrumb">
        <li><i class="fa fa-home"></i></li>
        <li> / Company</li>
    </ul>
</div>

<!-- CARD -->
<div class="card">
    <div class="card-body">

        <!-- SEARCH -->
        <div class="form-row">
            <div class="form-group">
                <label>Company Name</label>
                <input type="text">
            </div>

            <button class="btn btn-primary">CLEAR SEARCH</button>

            <button class="btn btn-light" disabled>ADD COMPANY</button>
        </div>

        <hr>

        <!-- TABLE -->
        <table>
            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Status</th>
                    <th width="120">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>khadya_khorakh</td>
                    <td><span class="badge">Active</span></td>
                    <td><i class="fa fa-edit"></i></td>
                </tr>
                <tr>
                    <td>RSPandi</td>
                    <td><span class="badge">Active</span></td>
                    <td><i class="fa fa-edit"></i></td>
                </tr>
                <tr>
                    <td>test_company</td>
                    <td><span class="badge">Active</span></td>
                    <td><i class="fa fa-edit"></i></td>
                </tr>
                <tr>
                    <td>apex_inventory</td>
                    <td><span class="badge">Active</span></td>
                    <td><i class="fa fa-edit"></i></td>
                </tr>
                <tr>
                    <td>apex_company</td>
                    <td><span class="badge">Active</span></td>
                    <td><i class="fa fa-edit"></i></td>
                </tr>
            </tbody>
        </table>

        <!-- FOOTER -->
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