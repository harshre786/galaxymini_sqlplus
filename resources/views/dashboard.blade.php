@extends('layouts.app')

@section('content')
    <!-- <h2>Dashboard</h2>

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
    </div> -->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            margin: 0;
            background: #f2f5f8;
            font-family: "Segoe UI", sans-serif;
        }

        .container {
            padding: 20px;
        }

        /* Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .page-header h2 {
            margin: 0;
            font-weight: 400;
        }

        .breadcrumb {
            color: #888;
            font-size: 14px;
        }

        /* Stat cards */
        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 25px;
        }

        .stat-card {
            background: #fff;
            display: flex;
            align-items: center;
            border-radius: 4px;
            box-shadow: 0 1px 2px rgba(0,0,0,.1);
        }

        .stat-icon {
            width: 90px;
            height: 90px;
            background: #3c8dbc;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px 0 0 4px;
        }
        .stat-card .stat-icon{
            cursor: pointer;
        }

        .stat-card .stat-content{
            cursor: pointer;
        }

        .stats .stat-card:hover{
            box-shadow: 0 8px 10px rgba(0,0,0,0.08);
        }

        .stat-icon i {
            color: #fff;
            font-size: 34px;
        }

        .stat-content {
            padding: 15px;
        }

        .stat-content small {
            display: block;
            color: #555;
            font-size: 13px;
        }

        .stat-content h3 {
            margin: 5px 0 0;
            font-weight: 500;
        }

        /* Charts */
        .charts {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .chart-card {
            background: #fff;
            padding: 15px;
            border-radius: 4px;
            box-shadow: 0 1px 2px rgba(0,0,0,.1);
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .chart-header h4 {
            margin: 0;
            font-weight: 400;
        }

        canvas {
            max-height: 300px;
        }
    </style>
</head>
<body>

<div class="container">

    <!-- Header -->
    <div class="page-header">
        <h2>Dashboard</h2>
        <div class="breadcrumb">
            <i class="fa fa-home"></i> / Dashboard
        </div>
    </div>

    <!-- Stats -->
    <div class="stats">
        <!-- <a href="{{ route('masters.company.active-company') }}" > -->
        <div class="stat-card" onclick="window.location='{{ route('masters.company.active-company') }}'">
            <div class="stat-icon"><i class="fa fa-building"></i></div>
            <div class="stat-content">
                <small>NO OF ACTIVE COMPANIES</small>
                <h3>5</h3>
            </div>
        </div>
        <!-- </a> -->

        <div class="stat-card" onclick="window.location='{{ route('masters.license') }}'">
            <div class="stat-icon"><i class="fa fa-id-card"></i></div>
            <div class="stat-content">
                <small>NO OF ACTIVE LICENSE</small>
                <h3>16</h3>
            </div>
        </div>

        <div class="stat-card" onclick="window.location='{{ route('masters.company.license-expire') }}'">
            <div class="stat-icon"><i class="fa fa-calendar-times"></i></div>
            <div class="stat-content">
                <small>LICENSE EXPIRING IN 30 DAYS</small>
                <h3>0</h3>
            </div>
        </div>

        <div class="stat-card" onclick="window.location='{{ route('masters.company.license-activated') }}'">
            <div class="stat-icon"><i class="fa fa-check-circle"></i></div>
            <div class="stat-content">
                <small>LICENSE ACTIVATED IN LAST 30 DAYS</small>
                <h3>8</h3>
            </div>
        </div>

        <div class="stat-card" onclick="window.location='{{ route('masters.companyuser') }}'">
            <div class="stat-icon"><i class="fa fa-users"></i></div>
            <div class="stat-content">
                <small>NO OF COMPANY USERS</small>
                <h3>29</h3>
            </div>
        </div>

        <div class="stat-card" onclick="window.location='{{ route('masters.company.active-users') }}'">
            <div class="stat-icon"><i class="fa fa-user-check"></i></div>
            <div class="stat-content">
                <small>NO OF ONLINE USERS</small>
                <h3>19</h3>
            </div>
        </div>
    </div>

    <!-- Charts -->
    <div class="charts">
        <div class="chart-card">
            <div class="chart-header">
                <h4>Company wise Sales</h4>
                <i class="fa fa-bars"></i>
            </div>
            <canvas id="barChart"></canvas>
        </div>

        <div class="chart-card">
            <div class="chart-header">
                <h4>Company wise Sales</h4>
                <i class="fa fa-bars"></i>
            </div>
            <canvas id="pieChart"></canvas>
        </div>
    </div>

</div>

<script>
    // Bar chart
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels: ['apex_company', 'apex_inventory'],
            datasets: [{
                data: [18, 95],
                backgroundColor: '#86bdf0'
            }]
        },
        options: {
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Pie chart
    new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: {
            labels: ['apex_company', 'apex_inventory'],
            datasets: [{
                data: [18, 95],
                backgroundColor: ['#86bdf0', '#444']
            }]
        }
    });
</script>

</body>
</html>

@endsection
