@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />

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

        /* FORM GRID */
        .filter-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 6px;
        }

        input, select {
            height: 36px;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        /* BUTTONS */
        .btn-row {
            margin-top: 15px;
            display: flex;
            gap: 12px;
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

        .btn-light {
            background: #f4f4f4;
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

        /* SELECT2 FIX */
        .select2-container .select2-selection--single {
            height: 36px;
            padding: 4px;
        }
    </style>
</head>
<body>

<!-- HEADER -->
<div class="page-header">
    <h2>Customer</h2>
    <span class="breadcrumb">
        <i class="fa fa-home"></i> / Customer
    </span>
</div>

<!-- CARD -->
<div class="card">
    <div class="card-body">

        <!-- FILTERS -->
        <div class="filter-grid">
            <div class="form-group">
                <label>Customer Code</label>
                <input type="text">
            </div>

            <div class="form-group">
                <label>Customer Name</label>
                <input type="text">
            </div>

            <div class="form-group">
                <label>Mobile No</label>
                <input type="text">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text">
            </div>

            <div class="form-group">
                <label>Added By</label>
                <select class="searchable">
                    <option>Select</option>
                    <option>admin</option>
                    <option>manager</option>
                    <option>staff</option>
                </select>
            </div>

            <div class="form-group">
                <label>Company Name</label>
                <select class="searchable">
                    <option>Select</option>
                    <option>apex_inventory</option>
                    <option>apex_company</option>
                    <option>test_company</option>
                </select>
            </div>
        </div>

        <!-- BUTTONS -->
        <div class="btn-row">
            <button class="btn btn-primary">CLEAR SEARCH</button>
            <button class="btn btn-light">EXPORT</button>
            <button class="btn btn-light">ADD CUSTOMER</button>
        </div>

        <hr>

        <!-- TABLE -->
        <table>
            <thead>
                <tr>
                    <th>Customer ID <i class="fa fa-sort sort-icon"></i></th>
                    <th>Customer Name <i class="fa fa-sort sort-icon"></i></th>
                    <th>E-mail <i class="fa fa-sort sort-icon"></i></th>
                    <th>Mobile No. <i class="fa fa-sort sort-icon"></i></th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>W11</td>
                    <td>Virus</td>
                    <td>test@test.com</td>
                    <td>9876543210</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>M182</td>
                    <td>Testing</td>
                    <td></td>
                    <td>9875541011</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>M181</td>
                    <td>Test</td>
                    <td></td>
                    <td>9123456780</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>W112</td>
                    <td>Virag</td>
                    <td>virag.mehta@attoinfotech.com</td>
                    <td>9876543210</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>W111</td>
                    <td>Test</td>
                    <td>test@yahoo.com</td>
                    <td>1234567890</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>M51</td>
                    <td>Vinit</td>
                    <td>vinit.parekh@attoinfotech.com</td>
                    <td>8655501494</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
                <tr>
                    <td>M121</td>
                    <td>Aditi</td>
                    <td>aditiminiyar@gmail.com</td>
                    <td>7499254914</td>
                    <td><i class="fa fa-edit action-icon"></i></td>
                </tr>
            </tbody>
        </table>

        <!-- FOOTER -->
        <div class="table-footer">
            <div>Showing 1 to 7 of 7 entries</div>
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

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function () {
        $('.searchable').select2({
            placeholder: "Select",
            width: '100%'
        });
    });
</script>

</body>
</html>
@endsection