@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unit</title>

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
        <h2>Unit</h2>
        <div class="breadcrumb">
            <i class="fa fa-home"></i> / Unit
        </div>
    </div>

    <!-- Card -->
    <div class="card-box">

        <!-- Search -->

        <form method="GET" action="{{ route('masters.unit') }}">
    <div class="search-row">

        <div class="field">
            <label>Unit</label>
            <input type="text" name="unit" value="{{ request('unit') }}">
        </div>

        <div class="field">
            <label>Company ID</label>
            <input type="text" name="company_id" value="{{ request('company_id') }}">
        </div>

        <button class="btn-clear">SEARCH</button>

        <a href="{{ route('masters.unit') }}" class="btn-clear"
           style="background:#aaa;">CLEAR</a>

        <button type="button"
                class="btn-clear"
                data-bs-toggle="modal"
                data-bs-target="#addUnitModal">
            ADD UNIT
        </button>

    </div>
</form>


        <hr>

        <!-- Table -->
        <table>
            <thead>
            <tr>
                <th>Unit name</th>
                <th>Status</th>
                <th>Company User</th>
                <th>Action</th>
            </tr>
            </thead>

            
            <tbody>
@foreach($units as $unit)
    <tr>
        <td>{{ strtoupper($unit->unit) }}</td>

        <td>
            <select disabled>
                <option {{ $unit->status == 'Active' ? 'selected' : '' }}>
                    Active
                </option>
                <option {{ $unit->status == 'Inactive' ? 'selected' : '' }}>
                    In-Active
                </option>
            </select>
        </td>

        <td>{{ $unit->company_id }}</td>

        <td>
            <i class="fa fa-pen" title="Edit {{ $unit->unit }}"></i>
        </td>
    </tr>
@endforeach
</tbody>

        </table>

        <!-- Footer -->
       <div class="table-footer">
    <div>
        Showing {{ $units->firstItem() ?? 0 }} to {{ $units->lastItem() ?? 0 }}
        of {{ $units->total() }} entries
    </div>
    <div>
        {{ $units->links() }}
    </div>
</div>


    </div>
</div>

<div class="modal fade" id="addUnitModal" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <form method="POST" action="{{ route('unit.store') }}">
            @csrf
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Add Unit</h5>
                    <button type="button" class="btn-close"
                            data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <label class="form-label">Unit Name</label>
                    <input type="text"
                           name="unit"
                           class="form-control"
                           required>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary"
                            data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-success">Save</button>
                </div>

            </div>
        </form>
    </div>
</div>


</body>
</html>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
