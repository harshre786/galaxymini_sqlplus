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
    width: 230px;
    background: #222d32;
    min-height: 100vh;
}

.sidebar a {
    display: block;
    padding: 12px 15px;
    color: #b8c7ce;
    text-decoration: none;
}

.sidebar a:hover {
    background: #1e282c;
    color: #fff;
}

.sidebar-dropdown > a {
    cursor: pointer;
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

        .sidebar-dropdown > a {
    position: relative;
}

.pull-right {
    float: right;
}

.submenu {
    display: none;
    background: #1e282c;
}

.submenu a {
    padding-left: 35px;
    font-size: 14px;
}

.pull-right {
    float: right;
}

.rotate {
    transform: rotate(180deg);
}

    </style>
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
    <strong>GalaxyMini</strong>

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

    <!-- Dashboard -->
    <a href="/dashboard">
        <i class="fa fa-dashboard"></i> Dashboard
    </a>

    <!-- ================= MASTER ================= -->
    <div class="sidebar-dropdown">

        <a href="javascript:void(0)" onclick="submenu('masterMenu','masterArrow')">
            <i class="fa fa-desktop"></i>
            Master's
            <i class="fa fa-angle-down pull-right" id="masterArrow"></i>
        </a>

        <div class="submenu" id="masterMenu">
            <a href="/masters/license">License</a>
            <a href="/masters/company">Company</a>
            <a href="/masters/company-users">Company Users</a>
            <a href="/masters/customers">Customers</a>
            <a href="/masters/offer-coupon">Offer Coupon</a>
            <a href="/masters/payment-master">Payment Master</a>
            <a href="/masters/other-users">Other Users</a>
            <a href="/masters/table-group">Table Group</a>
            <a href="/masters/department">Department</a>
            <a href="/masters/tablemaster">Table Master</a>
            <a href="/masters/tax-setting">Tax Setting</a>
            <a href="/masters/unit">Unit</a>
            <a href="/masters/kotgroup">Kot Group</a>
            <a href="/masters/kotmessage">Kot Message</a>
            <a href="/masters/item">Item</a>
            <a href="/masters/faq-video">Faq Video</a>
        </div>

    </div>

    <!-- ================= REPORTS ================= -->
    <div class="sidebar-dropdown">

        <a href="javascript:void(0)" onclick="submenu('reportsMenu','reportsArrow')">
            <i class="fa fa-file"></i>
            Reports
            <i class="fa fa-angle-down pull-right" id="reportsArrow"></i>
        </a>

        <div class="submenu" id="reportsMenu">
            <a href="/reports/future-orders">Future Orders</a>
            <a href="/reports/billwise">Reports Billwise</a>
            <a href="/reports/itemwise">Reports Itemwise</a>
            <a href="/reports/datewise">Reports Datewise</a>
            <a href="/reports/cancelled-billwise">Reports Cancelled Billwise</a>
            <a href="/reports/non-chargeable">Reports Non Chargeable Bill</a>
            <a href="/reports/department">Reports Department</a>
            <a href="/reports/customer-wise">Reports Customer Wise</a>
            <a href="/reports/total-summary">Reports Total Summary</a>
        </div>

    </div>

    <!-- ================= CLEAR DATA ================= -->
    <a href="/clear-data">
        <i class="fa fa-trash"></i> Clear Data
    </a>

</div>




<!-- CONTENT
<div class="content">
    @yield('content')
</div> -->

<script>
function toggleMenu() {
    const dropdown = document.getElementById('userDropdown');
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
}

function submenu(menuId, arrowId) {
    const menu = document.getElementById(menuId);
    const arrow = document.getElementById(arrowId);

    if (menu.style.display === "block") {
        menu.style.display = "none";
        arrow.classList.remove('rotate');
    } else {
        menu.style.display = "block";
        arrow.classList.add('rotate');
    }
}

</script>

</body>
</html>
