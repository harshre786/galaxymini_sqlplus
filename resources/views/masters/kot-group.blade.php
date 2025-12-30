@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kot Group</title>

<link rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body {
    background: #f2f5f8;
    font-family: "Segoe UI", sans-serif;
    margin: 0;
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

/* Search */
.search-row {
    display: flex;
    gap: 15px;
    align-items: flex-end;
}

.field {
    display: flex;
    flex-direction: column;
}

input, select {
    height: 36px;
    width: 200px;
    padding: 6px 10px;
    border: 1px solid #ccc;
}

.btn {
    background: #3c8dbc;
    color: #fff;
    border: none;
    padding: 9px 18px;
    cursor: pointer;
}

.btn-clear { background: #aaa; }

hr { margin: 20px 0; border-top: 1px solid #ddd; }

/* Table */
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

<div class="page-header">
    <h2>Kot Group</h2>
    <div><i class="fa fa-home"></i> / Kot Group</div>
</div>

<div class="card-box">

{{-- SEARCH --}}
<form method="GET" action="{{ route('masters.kotgroup') }}">
<div class="search-row">

    <div class="field">
        <label>Kot Group</label>
        <input type="text" name="kotgroup" value="{{ request('kotgroup') }}">
    </div>

    <div class="field">
        <label>Company User</label>
        <input type="text" name="created_by" value="{{ request('created_by') }}">
    </div>

    <button class="btn">SEARCH</button>

    <a href="{{ route('masters.kotgroup') }}" class="btn btn-clear">CLEAR</a>

    <button type="button" class="btn"
            data-bs-toggle="modal"
            data-bs-target="#addKotGroupModal">
        ADD KOT GROUP
    </button>

</div>
</form>

<hr>

{{-- TABLE --}}
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
@forelse($kotgroups as $group)
<tr>
    <td>{{ $group->sname }}</td>
    <td>{{ $group->status }}</td>
    <td>{{ $group->created_by }}</td>
    <td><i class="fa fa-pen"></i></td>
</tr>
@empty
<tr>
    <td colspan="4" style="text-align:center;">No records found</td>
</tr>
@endforelse
</tbody>
</table>

{{-- PAGINATION --}}
<div class="table-footer">
    <div>
        Showing {{ $kotgroups->firstItem() ?? 0 }}
        to {{ $kotgroups->lastItem() ?? 0 }}
        of {{ $kotgroups->total() }} entries
    </div>
    <div>
        {{ $kotgroups->links() }}
    </div>
</div>

</div>
</div>

{{-- ADD MODAL --}}
<div class="modal fade" id="addKotGroupModal" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <form method="POST" action="{{ route('kotgroup.store') }}">
            @csrf
            <div class="modal-content">

                <div class="modal-header">
                    <h5>Add Kot Group</h5>
                    <button type="button" class="btn-close"
                            data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <label>Name</label>
                    <input type="text" name="sname" class="form-control" required>

                    <label class="mt-2">Status</label>
                    <select name="status" class="form-control">
                        <option value="Active">Active</option>
                        <option value="In-Active">In-Active</option>
                    </select>
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
