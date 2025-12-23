@extends('layouts.app')

@section('content')

<div class="container-fluid">

    {{-- PAGE HEADER --}}
    <div class="page-header d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Payment Master</h4>
        <span class="text-muted">
            <i class="fa fa-home"></i> / Payment Master
        </span>
    </div>

    {{-- CARD --}}
    <div class="card shadow-sm">
        <div class="card-body">

            {{-- ADD BUTTON --}}
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('payment.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus"></i> ADD PAYMENT TYPE
                </a>
            </div>

            {{-- TABLE --}}
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-light">
                        <tr>
                            <th width="80">ID</th>
                            <th>Payment Type</th>
                            <th width="120">Status</th>
                            <th width="150">Created Date</th>
                            <th width="100">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($payments as $payment)
                        <tr>
                            <td>{{ $payment->id }}</td>

                            <td>{{ ucfirst($payment->type) }}</td>

                            <td>
                                @if($payment->status == 'Active')
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">In-Active</span>
                                @endif
                            </td>

                            <td>
                                {{ \Carbon\Carbon::parse($payment->created_date)->format('d-m-Y') }}
                            </td>

                            <td class="text-center">
                                <a href="{{ route('payment.edit', $payment->id) }}">
                                    <i class="fa fa-edit text-primary"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">
                                No payment types found
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- PAGINATION --}}
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div>
                    Showing {{ $payments->firstItem() ?? 0 }}
                    to {{ $payments->lastItem() ?? 0 }}
                    of {{ $payments->total() }} entries
                </div>

                <div>
                    {{ $payments->links() }}
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
