@extends('layouts.app')

@section('content')
    <h2>Dashboard</h2>

    <div style="display:flex; gap:20px;">
        <div style="background:#3c8dbc;color:white;padding:20px;width:200px;">
            <h4>No of Active Companies</h4>
            <h2>5</h2>
        </div>

        <div style="background:#00a65a;color:white;padding:20px;width:200px;">
            <h4>No of Active Licenses</h4>
            <h2>16</h2>
        </div>

        <div style="background:#3c8dbc;color:white;padding:20px;width:200px;">
            <h4>Licenses Expiring in 30 Days</h4>
            <h2>5</h2>
        </div>

        <div style="background:#f39c12;color:white;padding:20px;width:200px;">
            <h4>License Activated iin Last 30 days</h4>
            <h2>19</h2>
        </div>
        <div style="background:#00a65a;color:white;padding:20px;width:200px;">
            <h4>No of Company Users</h4>
            <h2>16</h2>
        </div>

        <div style="background:#f39c12;color:white;padding:20px;width:200px;">
            <h4>No of Users Online</h4>
            <h2>19</h2>
        </div>
    </div>
@endsection
