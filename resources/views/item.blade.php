@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between mb-3">
        <h4>Item</h4>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItemModal">
            ADD ITEM
        </button>
    </div>

    <div class="card">
        <div class="card-body p-0">

            <table class="table table-bordered table-striped mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Item Name</th>
                        <th>Department</th>
                        <th>Rate 1</th>
                        <th>Rate 2</th>
                        <th>Unit</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->departmentCode }}</td>
                        <td>{{ $item->rate1 }}</td>
                        <td>{{ $item->rate2 }}</td>
                        <td>{{ $item->unit }}</td>
                        <td>
                            <i class="fa fa-edit text-primary"></i>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No items found</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

        </div>
    </div>

    <div class="mt-3">
        {{ $items->links() }}
    </div>
</div>

{{-- ADD ITEM MODAL --}}
<div class="modal fade" id="addItemModal">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('items.store') }}">
            @csrf
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Add Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-2">
                        <label>Item Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-2">
                        <label>Department Code</label>
                        <input type="number" name="departmentCode" class="form-control" required>
                    </div>

                    <div class="mb-2">
                        <label>Rate 1</label>
                        <input type="number" name="rate1" class="form-control" required>
                    </div>

                    <div class="mb-2">
                        <label>Rate 2</label>
                        <input type="number" name="rate2" class="form-control">
                    </div>

                    <div class="mb-2">
                        <label>Unit</label>
                        <input type="number" name="unit" class="form-control" value="257">
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-success">Save</button>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection
