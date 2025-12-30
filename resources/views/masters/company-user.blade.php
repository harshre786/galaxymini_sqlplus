@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Company Users</title>

<!-- Font Awesome -->
<link rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- ✅ Bootstrap CSS (VERY IMPORTANT) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

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

.card-box {
    background: #fff;
    padding: 20px;
    border-radius: 4px;
    box-shadow: 0 1px 2px rgba(0,0,0,.1);
}

.search-row {
    display: flex;
    gap: 15px;
    align-items: flex-end;
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
}

.btn-clear {
    background: #aaa;
    color: #fff;
}

hr { margin: 20px 0; }

table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    border: 1px solid #ddd;
    padding: 10px;
}
th { background: #f9f9f9; }

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
    <h2>Company Users</h2>
    <div><i class="fa fa-home"></i> / Company Users</div>
</div>

<!-- Card -->
<div class="card-box">

<!-- Search -->
<form method="GET" action="{{ route('masters.companyuser') }}">
<div class="search-row">

    <div class="field">
        <label>Username</label>
        <input type="text" name="username" value="{{ request('username') }}">
    </div>

    <div class="field">
        <label>Company Name</label>
        <input type="text" name="company_name" value="{{ request('company_name') }}">
    </div>

    <button class="btn btn-primary">SEARCH</button>
    <a href="{{ route('masters.companyuser') }}" class="btn btn-clear">CLEAR</a>
</div>
</form>

<hr>

<!-- ✅ ADD BUTTON -->
<button type="button"
        class="btn btn-success"
        data-bs-toggle="modal"
        data-bs-target="#addCompanyUserModal">
    ADD COMPANY USER
</button>

<hr>

<!-- Table -->
<table>
<thead>
<tr>
    <th>Username</th>
    <th>Exp Date</th>
    <th>Status</th>
    <th>Company Name</th>
    <th>Action</th>
</tr>
</thead>

<tbody>
@forelse($companyUsers as $user)
<tr>
    <td>{{ $user->username }}</td>
    <td>{{ \Carbon\Carbon::parse($user->exp_date)->format('d-m-Y') }}</td>
    <td>{{ $user->status }}</td>
    <td>{{ $user->company_name }}</td>
    <td>
        <i class="fa fa-pen"></i>
    </td>
</tr>
@empty
<tr>
    <td colspan="5" class="text-center">No records found</td>
</tr>
@endforelse
</tbody>
</table>

<!-- Pagination -->
<div class="table-footer">
    <div>
        Showing {{ $companyUsers->firstItem() ?? 0 }}
        to {{ $companyUsers->lastItem() ?? 0 }}
        of {{ $companyUsers->total() }} entries
    </div>
    <div>
        {{ $companyUsers->links() }}
    </div>
</div>

</div>
</div>

<!-- ✅ MODAL -->
<div class="modal fade" id="addCompanyUserModal" tabindex="-1">
  <div class="modal-dialog modal-md">
    <form method="POST" action="{{ route('companyuser.store') }}">
        @csrf
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Add Company User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Expiry Date</label>
                    <input type="date" name="exp_date" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Company Name</label>
                    <input type="text" name="company_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="submit" class="btn btn-success">
                    Save
                </button>
            </div>

        </div>
    </form>
  </div>
</div>

<!-- ✅ Bootstrap JS (MOST IMPORTANT FOR MODAL) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
@endsection
