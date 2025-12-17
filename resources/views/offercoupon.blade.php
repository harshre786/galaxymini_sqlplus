@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coupon</title>

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

        /* SEARCH ROW */
        .search-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        }

        .search-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input {
            height: 36px;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            width: 220px;
        }

        /* BUTTONS */
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
    <h2>Coupon</h2>
    <span class="breadcrumb">
        <i class="fa fa-home"></i> / Offer Coupon
    </span>
</div>

<!-- CARD -->
<div class="card">
    <div class="card-body">

        <!-- SEARCH -->
        <div class="search-row">
            <div class="search-left">
                <label>Offer Coupon Code</label>
                <input type="text">
                <button class="btn btn-primary">CLEAR SEARCH</button>
            </div>

            <button class="btn btn-disabled">ADD OFFERCOUPON</button>
        </div>

        <hr>

        <!-- TABLE -->
        <table>
            <thead>
                <tr>
                    <th>Unique ID <i class="fa fa-sort sort-icon"></i></th>
                    <th>Offer Coupon Code <i class="fa fa-sort sort-icon"></i></th>
                    <th>Discount In % <i class="fa fa-sort sort-icon"></i></th>
                    <th>Max Discount Amount <i class="fa fa-sort sort-icon"></i></th>
                    <th>Minimum Bill Amount <i class="fa fa-sort sort-icon"></i></th>
                    <th>Valid Till <i class="fa fa-sort sort-icon"></i></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>W17C2</td>
                    <td>Surprise</td>
                    <td>10</td>
                    <td>500</td>
                    <td>500</td>
                    <td>30-12-2025</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>W17C1</td>
                    <td>Test</td>
                    <td>10</td>
                    <td>100</td>
                    <td>1000</td>
                    <td>29-11-2025</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>W12C1</td>
                    <td>AD10</td>
                    <td>10</td>
                    <td>50</td>
                    <td>100</td>
                    <td>29-04-2025</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>W4C1</td>
                    <td>test</td>
                    <td>15</td>
                    <td>100</td>
                    <td>50</td>
                    <td>27-08-2024</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>W3C1</td>
                    <td>SP20</td>
                    <td>10</td>
                    <td>10</td>
                    <td>75</td>
                    <td>12-06-2025</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
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