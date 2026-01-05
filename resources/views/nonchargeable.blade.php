@extends('layouts.app') 

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Future Orders</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f6f9;
            color: #333;
        }

        .page-header {
            padding: 20px 30px;
            font-size: 28px;
            font-weight: 500;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .breadcrumb {
            font-size: 14px;
            color: #888;
        }

        .card {
            background: #fff;
            margin: 0 30px 30px;
            border-radius: 4px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.1);
            padding: 20px;
        }

        .filter-row {
            display: flex;
            align-items: flex-end;
            gap: 20px;
            flex-wrap: wrap;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
            font-size: 14px;
        }

        .filter-group label {
            margin-bottom: 5px;
            font-weight: 600;
        }

        .filter-group input,
        .filter-group select {
            padding: 8px 10px;
            min-width: 180px;
            border: 1px solid #bbb;
            border-radius: 2px;
            font-size: 14px;
        }

        .btn {
            padding: 9px 18px;
            font-size: 14px;
            border-radius: 3px;
            cursor: pointer;
            border: none;
            height: 38px;
        }

        .btn-primary {
            background: #3b8ec2;
            color: #fff;
        }

        .btn-secondary {
            background: #eaeaea;
            color: #999;
            cursor: not-allowed;
        }

        .divider {
            margin: 20px 0;
            border-bottom: 1px solid #ddd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        table thead th {
            background: #fafafa;
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            font-weight: 600;
            position: relative;
        }

        table thead th:after {
            /* content: "▲▼"; */
            font-size: 10px;
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            color: #ccc;
        }

        table tbody td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        .no-data {
            padding: 20px;
            text-align: center;
            color: #555;
        }

        .table-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .pagination {
            display: flex;
            gap: 8px;
        }

        .pagination button {
            padding: 6px 12px;
            border: 1px solid #bbb;
            background: #fff;
            cursor: pointer;
            border-radius: 2px;
        }

        .pagination .active {
            background: #6faec9;
            color: #fff;
            border-color: #6faec9;
        }
    </style>
</head>
<body>

    <!-- Page Header -->
    <div class="page-header">
        <div>Reports Non Chargeable Bills</div>
        <div class="breadcrumb">
            <i class="fa fa-home"></i> / Reports Non-Chargeable Bills
        </div>
    </div>

    <!-- Card -->
    <div class="card">

        <!-- Filters -->
        <form method="GET" action="{{ route('reports.nonchargeable-bill') }}">
        <div class="filter-row">
            <div class="filter-group">
                <label>Date</label>
                <input type="text" name="date" id="date_range" value="{{ request('date') }}">
            </div>

            <div class="filter-group">
                <label>User</label>
                <select name="username">
                    <option>Select</option>
                    @foreach($usernames as $user)
                        <option value="{{ $user->username }}" {{ request('username') == $user->username ? 'selected' : '' }}>
                            {{ $user->username }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">SEARCH</button>
            <a href="{{ route('reports.nonchargeable-bill') }}" class="btn btn-primary">CLEAR SEARCH</a>
        </div>
    </form>

        <div class="divider"></div>

        <!-- Table -->
        <table>
            <thead>
                <tr>
                    <th>User</th>
                    <th>Bill No</th>
                    <th>Total Item</th>
                    <th>Amount</th>
                    <th>CGST</th>
                    <th>SGST</th>
                    <th>Discount</th>
                    <th>Total Amount</th>
                    <th>Order Date</th>
                    <th>Reason</th>
                </tr>
            </thead>
            <tbody>
            @forelse($bills as $bill)
            <tr>
                <td>{{ $bill->username }}</td>
                <td>{{ $bill->bill_no }}</td>
                <td>{{ $bill->total_item }}</td>
                <td>{{ $bill->amount }}</td>
                <td>{{ $bill->cgst }}</td>
                <td>{{ $bill->sgst }}</td>
                <td>{{ $bill->discount }}</td>
                <td>{{ $bill->total_amount }}</td>
                <td>{{ date('d/m/Y', strtotime($bill->order_date)) }}</td>
                <td>{{ $bill->reason }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="10" class="no-data">No data available in table</td>
            </tr>
            @endforelse
        </tbody>
        </table>

        <!-- Footer -->
        <div class="table-footer">
            <div>
        Showing {{ $reports->firstItem() ?? 0 }}
        to {{ $reports->lastItem() ?? 0 }}
        of {{ $reports->total() }} entries
    </div>
            <div class="pagination">
        {{-- First --}}
        <a href="{{ $reports->url(1) }}">
            <button>First</button>
        </a>

        {{-- Previous --}}
        <a href="{{ $reports->previousPageUrl() }}">
            <button>Previous</button>
        </a>

        {{-- Page Numbers --}}
        @for ($i = 1; $i <= $reports->lastPage(); $i++)
            <a href="{{ $reports->url($i) }}">
                <button class="{{ $reports->currentPage() == $i ? 'active' : '' }}">
                    {{ $i }}
                </button>
            </a>
        @endfor

        {{-- Next --}}
        <a href="{{ $reports->nextPageUrl() }}">
            <button>Next</button>
        </a>

        {{-- Last --}}
        <a href="{{ $reports->url($reports->lastPage()) }}">
            <button>Last</button>
        </a>
    </div>
        </div>

    </div>

</body>
</html>


@endsection
