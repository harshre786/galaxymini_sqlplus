@extends('layouts.app')

@section('content')

<style>
    .page-header {
        padding: 20px 30px;
        font-size: 26px;
        font-weight: 500;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #f3f6f9;
    }

    .breadcrumb {
        font-size: 14px;
        color: #888;
    }

    .card-custom {
        background: #fff;
        margin: 0 30px 30px;
        border-radius: 4px;
        box-shadow: 0 1px 2px rgba(0,0,0,0.1);
        padding: 20px;
    }

    .filter-row {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        align-items: flex-end;
    }

    .filter-group {
        display: flex;
        flex-direction: column;
        font-size: 14px;
    }

    .filter-group label {
        font-weight: 600;
        margin-bottom: 5px;
    }

    .filter-group input,
    .filter-group select {
        padding: 8px 10px;
        min-width: 180px;
        border: 1px solid #bbb;
        border-radius: 2px;
    }

    .btn-primary {
        background: #3b8ec2;
        color: #fff;
        padding: 9px 18px;
        border-radius: 3px;
        border: none;
    }

    .btn-secondary {
        background: #eaeaea;
        color: #999;
        padding: 9px 18px;
        border-radius: 3px;
        border: none;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
        margin-top: 15px;
    }

    thead th {
        background: #fafafa;
        border: 1px solid #ddd;
        padding: 10px;
        font-weight: 600;
        text-align: center;
    }

    tbody td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    .status-dispatched {
        color: green;
        font-weight: bold;
    }

    .status-pending {
        color: #d58512;
        font-weight: bold;
    }

    .table-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 15px;
        font-size: 14px;
    }
</style>

<!-- HEADER -->
<div class="page-header">
    <div>Future Orders</div>
    <div class="breadcrumb">
        <i class="fa fa-home"></i> / Reports / Future Orders
    </div>
</div>

<!-- CARD -->
<div class="card-custom">

    <!-- FILTERS -->
    <div class="filter-row">
        <div class="filter-group">
            <label>Payment Mode</label>
            <select>
                <option>Select</option>
                <option>Cash</option>
                <option>Online</option>
            </select>
        </div>

        <div class="filter-group">
            <label>Date</label>
            <input type="text" placeholder="dd/mm/yyyy - dd/mm/yyyy">
        </div>

        <button class="btn-primary">CLEAR SEARCH</button>
        <button class="btn-secondary">EXPORT</button>
    </div>

    <hr>

    <!-- TABLE -->
    <table>
        <thead>
            <tr>
                <th>Customer Code</th>
                <th>Order ID</th>
                <th>Order Date</th>
                <th>Discount %</th>
                <th>Discount ₹</th>
                <th>Service Charge</th>
                <th>Payment Mode</th>
                <th>Status</th>
                <th>Note</th>
            </tr>
        </thead>

        <tbody>
        @forelse($orders as $order)
            <tr>
                <td>{{ $order->customerCode }}</td>
                <td>{{ $order->orderID }}</td>
                <td>{{ \Carbon\Carbon::createFromTimestamp($order->orderDate)->format('d-m-Y') }}</td>
                <td>{{ $order->discountInPercent }}</td>
                <td>{{ $order->discountAmount }}</td>
                <td>{{ $order->serviceCharge }}</td>
                <td>{{ $order->paymentMode == 1 ? 'Cash' : 'Online' }}</td>

                <td>
                    @if($order->status == 'DISPATCHED')
                        <span class="status-dispatched">DISPATCHED</span>
                    @else
                        <span class="status-pending">{{ $order->status }}</span>
                    @endif
                </td>

                <td>{{ $order->note ?? '-' }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="9" style="text-align:center;color:#777;">
                    No future orders found
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <!-- FOOTER -->
    <div class="table-footer">
    <div>
        Showing {{ $orders->firstItem() ?? 0 }}
        to {{ $orders->lastItem() ?? 0 }}
        of {{ $orders->total() }} entries
    </div>

    <div>
        {{ $orders->links() }}
    </div>
</div>


@endsection
