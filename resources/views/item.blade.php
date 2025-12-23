


@extends('layouts.app')

@section('content')
<style>
    .page-header{
        display:flex;
        justify-content:space-between;
        align-items:center;
        margin-bottom:15px;
    }
    .page-header h4{
        margin:0;
        font-weight:500;
    }
    .card{
        border-radius:4px;
        box-shadow:0 1px 2px rgba(0,0,0,.1);
    }
    .table th{
        background:#f9fafb;
        font-weight:600;
    }
    .action-icon{
        cursor:pointer;
        color:#3c8dbc;
    }
</style>

<div class="container-fluid">

    <!-- HEADER -->
    <div class="page-header">
        <h4>Item</h4>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItemModal">
            <i class="fa fa-plus"></i> ADD ITEM
        </button>
    </div>

    <!-- search -->

    <form method="GET" action="{{ route('items.index') }}" class="mb-3">
    <div class="row g-2">

        <div class="col-md-4">
            <input type="text" name="name"
                   class="form-control"
                   placeholder="Item Name"
                   value="{{ request('name') }}">
        </div>

        <div class="col-md-3">
            <input type="number" name="departmentCode"
                   class="form-control"
                   placeholder="Department"
                   value="{{ request('departmentCode') }}">
        </div>

        <div class="col-md-3">
            <input type="number" name="unit"
                   class="form-control"
                   placeholder="Unit"
                   value="{{ request('unit') }}">
        </div>

        <div class="col-md-2 d-flex gap-2">
            <button class="btn btn-primary w-100">Search</button>
            <a href="{{ route('items.index') }}" class="btn btn-light w-100">
                Clear
            </a>
        </div>

    </div>
</form>

    <!-- CARD -->
    <div class="card">
        <div class="card-body p-0">

            <table class="table table-bordered table-striped mb-0">
                <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Department</th>
                    <th>Rate 1</th>
                    <th>Rate 2</th>
                    <th>Unit</th>
                    <th width="80">Action</th>
                </tr>
                </thead>

                <tbody>
                @forelse($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->departmentCode }}</td>
                        <td>{{ $item->rate1 }}</td>
                        <td>{{ $item->rate2 ?? '-' }}</td>
                        <td>{{ $item->unit }}</td>
                        <td class="text-center">
                            <i class="fa fa-edit action-icon"></i>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">
                            No items found
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>

        </div>
    </div>

    <!-- PAGINATION -->
    <div class="mt-3 d-flex justify-content-between align-items-center">
        <div>
            Showing {{ $items->firstItem() ?? 0 }} to {{ $items->lastItem() ?? 0 }}
            of {{ $items->total() }} entries
        </div>
        <div>
            {{ $items->links() }}
        </div>
    </div>

</div>

<!-- ADD ITEM MODAL -->
<div class="modal fade" id="addItemModal" tabindex="-1">
    <div class="modal-dialog modal-md">
        <form method="POST" action="{{ route('items.store') }}">
            @csrf
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Add Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Item Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Department Code</label>
                        <input type="number" name="departmentCode" class="form-control" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Rate 1</label>
                            <input type="number" name="rate1" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Rate 2</label>
                            <input type="number" name="rate2" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Unit</label>
                        <input type="number" name="unit" class="form-control" value="257">
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-success">Save</button>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

