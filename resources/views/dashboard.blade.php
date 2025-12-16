@extends('layouts.app')

@section('content')
    <h2>Dashboard</h2>

    <div style="display:flex; gap:20px;">
        <div style="background:#3c8dbc;color:white;padding:20px;width:200px;">
            <h4>Active Companies</h4>
            <h2>5</h2>
        </div>

        <div style="background:#00a65a;color:white;padding:20px;width:200px;">
            <h4>Active Licenses</h4>
            <h2>16</h2>
        </div>

        <div style="background:#f39c12;color:white;padding:20px;width:200px;">
            <h4>Users Online</h4>
            <h2>19</h2>
        </div>
    </div>
@endsection
