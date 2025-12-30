@extends('layouts.app')

@section('content')

<style>
    .report-card {
        background: #fff;
        padding: 20px;
        border-radius: 6px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    .filter-row {
        display: flex;
        gap: 20px;
        align-items: flex-end;
        flex-wrap: wrap;
        margin-bottom: 20px;
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

    .filter-group select,
    .filter-group input {
        padding: 8px 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        min-width: 200px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
        font-size: 14px;
    }

    table thead th {
        background: #fafafa;
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
        font-weight: 600;
    }

    table tbody td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    .no-data {
        text-align: center;
        padding: 20px;
        color: #666;
    }

    .table-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 15px;
        font-size: 14px;
    }

    .pagination {
        margin: 0;
    }

    .btn-search {
        background: #0d6efd;
        color: #fff;
        border: none;
        padding: 9px 18px;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-clear {
        background: #6c757d;
        color: #fff;
        border: none;
        padding: 9px 18px;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<!-- PAGE HEADER -->
<div class="mb-3">
    <h2>Reports Billwise</h2>
    <div class="text-muted">
        <i class="fa fa-home"></i> / Reports Billwise
    </div>
</div>

<div class="report-card">

    <!-- FILTER FORM -->
    <form method="GET" action="{{ route('reports.billwise') }}">
        <div class="filter-row">

            <div class="filter-group">
                <label>Payment Mode</label>
                <select name="mode">
                    <option value="">Select</option>
                    <option value="Cash" {{ request('mode')=='Cash'?'selected':'' }}>Cash</option>
                    <option value="UPI" {{ request('mode')=='UPI'?'selected':'' }}>UPI</option>
                    <option value="Card" {{ request('mode')=='Card'?'selected':'' }}>Card</option>
                    <option value="Online" {{ request('mode')=='Online'?'selected':'' }}>Online</option>
                </select>
            </div>

            <div class="filter-group">
                <label>Date</label>
                <input type="text" name="date" value="{{ request('date') }}" placeholder="dd/mm/yyyy - dd/mm/yyyy">
            </div>

            <div>
                <button type="submit" class="btn-search">SEARCH</button>
                <a href="{{ route('reports.billwise') }}" class="btn-clear">CLEAR</a>
            </div>

        </div>
    </form>

    <!-- TABLE -->
    <table>
        <thead>
            <tr>
                <th>Bill No</th>
                <th>Total Item</th>
                <th>SubTotal</th>
                <th>CGST</th>
                <th>SGST</th>
                <th>Discount</th>
                <th>Total Amt</th>
                <th>Order Date</th>
                <th>Mode</th>
            </tr>
        </thead>

        <tbody>
            @forelse($billwise as $bill)
                <tr>
                    <td>{{ $bill->bill_no }}</td>
                    <td>{{ $bill->total_item }}</td>
                    <td>{{ number_format($bill->subtotal,2) }}</td>
                    <td>{{ number_format($bill->cgst,2) }}</td>
                    <td>{{ number_format($bill->sgst,2) }}</td>
                    <td>{{ number_format($bill->discount,2) }}</td>
                    <td>{{ number_format($bill->total_amt,2) }}</td>
                    <td>{{ \Carbon\Carbon::parse($bill->order_date)->format('d/m/Y H:i') }}</td>
                    <td>{{ $bill->mode }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="no-data">No data available in table</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- FOOTER -->
    <div class="table-footer">
        <div>
            Showing {{ $billwise->firstItem() ?? 0 }} to {{ $billwise->lastItem() ?? 0 }}
            of {{ $billwise->total() }} entries
        </div>

        <div>
            {{ $billwise->appends(request()->query())->links() }}
        </div>
    </div>

</div>

@endsection
