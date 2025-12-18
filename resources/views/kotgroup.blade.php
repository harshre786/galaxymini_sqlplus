@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kotgroup</title>

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

        /* Search Row */
        .search-row {
            display: flex;
            align-items: flex-end;
            gap: 15px;
        }

        .field {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 14px;
            margin-bottom: 5px;
        }

        input {
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

        select {
            width: 100%;
            height: 34px;
            padding: 4px 8px;
            border: 1px solid #ccc;
            border-radius: 2px;
            background: #fff;
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
        <h2>Kotgroup</h2>
        <div class="breadcrumb">
            <i class="fa fa-home"></i> / Kotgroup
        </div>
    </div>

    <!-- Card -->
    <div class="card-box">

        <!-- Search -->
        <div class="search-row">
            <div class="field">
                <label>Kotgroup</label>
                <input type="text">
            </div>

            <div class="field">
                <label>Company User</label>
                <input type="text">
            </div>

            <button class="btn-clear">CLEAR SEARCH</button>

            <button class="btn-add">ADD KOTGROUP</button>
        </div>

        <hr>

        <!-- Table -->
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Company User</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>KG</td>
                <td>
                    <select>
                        <option selected>Active</option>
                        <option>In-Active</option>
                    </select>
                </td>
                <td>khadya_khorakh</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            <tr>
                <td>SIF</td>
                <td>
                    <select>
                        <option selected>Active</option>
                        <option>In-Active</option>
                    </select>
                </td>
                <td>RSPandi</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            <tr>
                <td>KG</td>
                <td>
                    <select>
                        <option selected>Active</option>
                        <option>In-Active</option>
                    </select>
                </td>
                <td>apex_inventory</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            <tr>
                <td>kot</td>
                <td>
                    <select>
                        <option selected>Active</option>
                        <option>In-Active</option>
                    </select>
                </td>
                <td>apex_company</td>
                <td><i class="fa fa-pen"></i></td>
            </tr>
            </tbody>
        </table>

        <!-- Footer -->
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
