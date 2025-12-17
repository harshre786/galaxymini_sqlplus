@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Master</title>

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
            border-bottom: 2px solid #d2d6de;
            background: #f4f6f9;
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
            margin: 20px;
            border-radius: 4px;
            box-shadow: 0 1px 1px rgba(0,0,0,.1);
        }

        .card-body {
            padding: 20px;
        }

        /* TOP BUTTON */
        .top-action {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .btn {
            padding: 10px 18px;
            border: none;
            border-radius: 3px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-disabled {
            background: #f0f0f0;
            color: #999;
            cursor: not-allowed;
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

<!-- HEADER -->
<div class="page-header">
    <h2>Payment Master</h2>
    <span class="breadcrumb">
        <i class="fa fa-home"></i> / Payment Master
    </span>
</div>

<!-- CARD -->
<div class="card">
    <div class="card-body">

        <!-- ADD BUTTON -->
        <div class="top-action">
            <button class="btn btn-disabled">ADD PAYMENT TYPE</button>
        </div>

        <!-- TABLE -->
        <table>
            <thead>
                <tr>
                    <th>Id <i class="fa fa-sort sort-icon"></i></th>
                    <th>Payment Type <i class="fa fa-sort sort-icon"></i></th>
                    <th>Status <i class="fa fa-sort sort-icon"></i></th>
                    <th>Created Date <i class="fa fa-sort sort-icon"></i></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1111</td>
                    <td>Credit Party</td>
                    <td>In-Active</td>
                    <td>18-04-2024</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>UPI</td>
                    <td>Active</td>
                    <td>18-04-2024</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Card</td>
                    <td>In-Active</td>
                    <td>18-04-2024</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Cash</td>
                    <td>Active</td>
                    <td>18-04-2024</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
            </tbody>
        </table>

        <!-- FOOTER -->
        <div class="table-footer">
            <div>Showing 1 to 4 of 4 entries</div>
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