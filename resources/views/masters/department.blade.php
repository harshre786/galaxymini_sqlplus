@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Department</title>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: #f2f5f8;
            font-family: "Segoe UI", sans-serif;
        }
        .page-wrapper { padding: 20px; }
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        .breadcrumb { font-size: 14px; color: #888; }
        .card-box {
            background: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 1px 2px rgba(0,0,0,.1);
        }
        .search-row {
            display: flex;
            align-items: flex-end;
            gap: 15px;
        }
        .field {
            display: flex;
            flex-direction: column;
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
        hr {
            margin: 20px 0;
            border-top: 1px solid #ddd;
        }
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
        }
        tbody tr:nth-child(even) {
            background: #fafafa;
        }
        select {
            width: 100%;
            height: 34px;
        }
        .table-footer {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }
    </style>
</head>

<body>

<div class="page-wrapper">

    <!-- Header -->
    <div class="page-header">
        <h2>Department</h2>
        <div class="breadcrumb">
            <i class="fa fa-home"></i> / Department
        </div>
    </div>

    <!-- Card -->
    <div class="card-box">

        <!-- Search -->
        <form method="GET" action="{{ route('masters.department') }}">
            <div class="search-row">

                <div class="field">
                    <label>Department</label>
                    <input type="text" name="department"
                           value="{{ request('department') }}">
                </div>

                <div class="field">
                    <label>Company ID</label>
                    <input type="text" name="company_id"
                           value="{{ request('company_id') }}">
                </div>

                <button class="btn-clear">SEARCH</button>

                <a href="{{ route('masters.department') }}"
                   class="btn-clear" style="background:#aaa;">
                    CLEAR
                </a>

                <button type="button"
                        class="btn-clear"
                        data-bs-toggle="modal"
                        data-bs-target="#addDepartmentModal">
                    ADD DEPARTMENT
                </button>
            </div>
        </form>

        <hr>

        <!-- Table -->
        <table>
            <thead>
            <tr>
                <th>Department Name</th>
                <th>Status</th>
                <th>Company</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($departments as $dept)
                <tr>
                    <td>{{ strtoupper($dept->description) }}</td>
                    <td>
                        <select disabled>
                            <option {{ $dept->status == 'Active' ? 'selected' : '' }}>
                                Active
                            </option>
                            <option {{ $dept->status == 'Inactive' ? 'selected' : '' }}>
                                In-Active
                            </option>
                        </select>
                    </td>
                    <td>{{ $dept->company_id }}</td>
                    <td>
                        <i class="fa fa-pen"
                           title="Edit {{ $dept->description }}"></i>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- Footer -->
        <div class="table-footer">
            <div>
                Showing {{ $departments->firstItem() ?? 0 }}
                to {{ $departments->lastItem() ?? 0 }}
                of {{ $departments->total() }} entries
            </div>
            <div>
                {{ $departments->links() }}
            </div>
        </div>

    </div>
</div>

<!-- ADD MODAL -->
<div class="modal fade" id="addDepartmentModal" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <form method="POST" action="{{ route('department.store') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add Department</h5>
                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <label>Department Name</label>
                    <input type="text"
                           name="description"
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
