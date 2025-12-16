<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galaxy Dashboard</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f9;
        }

        /* TOP BAR */
        .topbar {
            height: 50px;
            background: #3c8dbc;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }

        /* SIDEBAR */
        .sidebar {
            width: 220px;
            background: #222d32;
            position: fixed;
            top: 50px;
            bottom: 0;
            color: white;
        }

        .sidebar a {
            display: block;
            color: #b8c7ce;
            padding: 12px 15px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #1e282c;
            color: white;
        }

        /* CONTENT */
        .content {
            margin-left: 220px;
            margin-top: 50px;
            padding: 20px;
        }

        /* USER DROPDOWN */
        .user-menu {
            position: relative;
            cursor: pointer;
        }

        .dropdown {
            display: none;
            position: absolute;
            right: 0;
            background: white;
            color: #333;
            width: 160px;
            box-shadow: 0 4px 8px rgba(0,0,0,.2);
        }

        .dropdown a, .dropdown form button {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            background: none;
            text-align: left;
            cursor: pointer;
            text-decoration: none;
            color: #333;
        }

        .dropdown a:hover, .dropdown button:hover {
            background: #f1f1f1;
        }
    </style>
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
    <strong>Galaxy</strong>

    <div class="user-menu" onclick="toggleMenu()">
        <i class="fa fa-user"></i>
        {{ auth()->user()->username }}

        <div class="dropdown" id="userDropdown">
            <a href="{{ route('password.change') }}">
                <i class="fa fa-key"></i> Change Password
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">
                    <i class="fa fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </div>
    </div>
</div>

<!-- SIDEBAR -->
<div class="sidebar">
    <a href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
    <a href="#"><i class="fa fa-database"></i> Master's</a>
    <a href="#"><i class="fa fa-file"></i> Reports</a>
    <a href="#"><i class="fa fa-trash"></i> Clear Data</a>
</div>

<!-- CONTENT -->
<div class="content">
    @yield('content')
</div>

<script>
function toggleMenu() {
    const dropdown = document.getElementById('userDropdown');
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
}
</script>

</body>
</html>
