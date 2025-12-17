@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Department</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            margin: 0;
            background: #f4f6f9;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* HEADER */
        .page-header {
            padding: 15px 20px;
            font-size: 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .breadcrumb {
            font-size: 14px;
            color: #999;
        }

        /* CARD */
        .card {
            background: #fff;
            margin: 0 20px 20px;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 1px 1px rgba(0,0,0,.1);
        }

        /* FILTER */
        .filter-row {
            display: flex;
            align-items: flex-end;
            gap: 15px;
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input {
            padding: 8px;
            width: 250px;
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

        .btn-primary {
            background: #3c8dbc;
            color: #fff;
        }

        .btn-disabled {
            background: #f0f0f0;
            color: #999;
            cursor: not-allowed;
        }

        .add-btn {
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
            border: 1px solid #ddd;
            padding: 12px;
        }

        th {
            background: #fafafa;
            text-align: left;
        }

        .sort-icon {
            float: right;
            color: #ccc;
        }

        .edit-icon {
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
            margin-left: 4px;
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

<!-- PAGE TITLE -->
<div class="page-header">
    <div>Department</div>
    <div class="breadcrumb">
        <i class="fa fa-home"></i> / Department
    </div>
</div>

<!-- CARD -->
<div class="card">

    <!-- FILTER -->
    <div class="filter-row">
        <div>
            <label>Department Name</label>
            <input type="text">
        </div>

        <button class="btn btn-primary">CLEAR SEARCH</button>

        <div class="add-btn">
            <button class="btn btn-disabled">ADD DEPARTMENT</button>
        </div>
    </div>

    <hr>

    <!-- TABLE -->
    <table>
        <thead>
            <tr>
                <th>
                    Department Name
                    <i class="fa fa-sort sort-icon"></i>
                </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>Shirts</td><td><i class="fa fa-edit edit-icon"></i></td></tr>
            <tr><td>Dress</td><td><i class="fa fa-edit edit-icon"></i></td></tr>
            <tr><td>Accessories</td><td><i class="fa fa-edit edit-icon"></i></td></tr>
            <tr><td>South Indian Foods</td><td><i class="fa fa-edit edit-icon"></i></td></tr>
            <tr><td>Accessories</td><td><i class="fa fa-edit edit-icon"></i></td></tr>
            <tr><td>Dress</td><td><i class="fa fa-edit edit-icon"></i></td></tr>
            <tr><td>Shirts</td><td><i class="fa fa-edit edit-icon"></i></td></tr>
            <tr><td>BEVERAGES MRP</td><td><i class="fa fa-edit edit-icon"></i></td></tr>
            <tr><td>CHAAT</td><td><i class="fa fa-edit edit-icon"></i></td></tr>
            <tr><td>COMBO</td><td><i class="fa fa-edit edit-icon"></i></td></tr>
        </tbody>
    </table>

    <!-- FOOTER -->
    <div class="table-footer">
        <div>Showing 1 to 10 of 15 entries</div>
        <div class="pagination">
            <button>First</button>
            <button>Previous</button>
            <button class="active">1</button>
            <button>2</button>
            <button>Next</button>
            <button>Last</button>
        </div>
    </div>

</div>

</body>
</html>
@endsection