@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            margin: 0;
            background: #f4f6f9;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* CONTAINER */
        .container {
            background: #fff;
            margin: 20px;
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

<div class="container">

    <!-- FILTERS -->
    <div class="filters">
        <div class="form-group">
            <label>Username</label>
            <input type="text">
        </div>

        <div class="form-group">
            <label>Type</label>
            <select>
                <option>Select Type</option>
                <option>Manager</option>
                <option>Cashier</option>
            </select>
        </div>

        <button class="btn btn-search">CLEAR SEARCH</button>

        <div class="actions-top">
            <button class="btn btn-disabled">ADD USERS</button>
        </div>
    </div>

    <hr>

    <!-- TABLE -->
    <table>
        <thead>
            <tr>
                <th>Username <i class="fa fa-sort sort-icon"></i></th>
                <th>Type <i class="fa fa-sort sort-icon"></i></th>
                <th>Status <i class="fa fa-sort sort-icon"></i></th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>aq</td>
                <td>manager</td>
                <td>Active</td>
                <td><i class="fa fa-edit action-icon"></i></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Active</td>
                <td><i class="fa fa-edit action-icon"></i></td>
            </tr>
            <tr>
                <td>Tester2</td>
                <td>Manager</td>
                <td>Active</td>
                <td><i class="fa fa-edit action-icon"></i></td>
            </tr>
            <tr>
                <td>Tester1</td>
                <td>cashier</td>
                <td>Active</td>
                <td><i class="fa fa-edit action-icon"></i></td>
            </tr>
            <tr>
                <td>Harsh</td>
                <td>manager</td>
                <td>Active</td>
                <td><i class="fa fa-edit action-icon"></i></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Active</td>
                <td><i class="fa fa-edit action-icon"></i></td>
            </tr>
            <tr>
                <td>Rahul</td>
                <td>Cashier</td>
                <td>Active</td>
                <td><i class="fa fa-edit action-icon"></i></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Active</td>
                <td><i class="fa fa-edit action-icon"></i></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Active</td>
                <td><i class="fa fa-edit action-icon"></i></td>
            </tr>
            <tr>
                <td>Asdfgh</td>
                <td>Manager</td>
                <td>Active</td>
                <td><i class="fa fa-edit action-icon"></i></td>
            </tr>
        </tbody>
    </table>

    <!-- FOOTER -->
    <div class="table-footer">
        <div>Showing 1 to 10 of 32 entries</div>
        <div class="pagination">
            <button>First</button>
            <button>Previous</button>
            <button class="active">1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
            <button>Next</button>
            <button>Last</button>
        </div>
    </div>

</div>

</body>
</html>
@endsection