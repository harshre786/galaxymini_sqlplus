<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galaxy Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
          

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f9;
        }

        .topbar {
            height: 50px;
            background: #3c8dbc;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            position: fixed;
            width: 100%;
            top: 0;
        }
        
        .sidebar {
    width: 230px;
    background: #222d32;
    height: 100vh;        /* Full viewport height */
    position: fixed;      /* So content stays fixed while scrolling main page */
    overflow: hidden;     /* Hide overflow on sidebar container */
}

.sidebar-inner {
    height: 100%;
    overflow-y: auto;     /* Enable vertical scrolling */
    padding-bottom: 20px; /* optional spacing at bottom */
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

        .submenu {
            display: none;
            background: #1e282c;
        }

        .submenu a {
            padding-left: 35px;
            font-size: 14px;
        }

        .content {
            margin-left: 230px;
            margin-top: 50px;
            padding: 20px;
        }

        .rotate {
            transform: rotate(180deg);
        }

        .user-menu {
    position: relative;
    cursor: pointer;
    margin: 0 25px;
}

.user-menu span {
    display: flex;
    align-items: center;
    gap: 5px;
}

.dropdown {
    display: none;
    position: absolute;
    top: 35px;
    right: 0;
    background: #fff;
    min-width: 160px;
    box-shadow: 0 4px 8px rgba(0,0,0,.2);
    border-radius: 3px;
    z-index: 999;
}

.dropdown a,
.dropdown button {
    padding: 10px;
    display: block;
    width: 100%;
    border: none;
    background: none;
    text-align: left;
    cursor: pointer;
    color: #333;
    text-decoration: none;
}

.dropdown a:hover,
.dropdown button:hover {
    background: #f1f1f1;
}


    .sidebar-inner::-webkit-scrollbar {
    width: 6px;
}

.sidebar-inner::-webkit-scrollbar-thumb {
    background-color: #888;
    border-radius: 3px;
}

.sidebar-inner::-webkit-scrollbar-thumb:hover {
    background-color: #555;
}

    </style>
</head>

<body>

<!-- TOP BAR -->
<div class="topbar">
    <strong>GalaxyMini</strong>

    <div class="user-menu" id="userMenu">
    <span onclick="toggleUserMenu()">
        <i class="fa fa-user"></i> admin
        <i class="fa fa-angle-down"></i>
    </span>

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

    <div class="sidebar-inner">

        <a href="{{ route('dashboard') }}">
        <i class="fa fa-dashboard"></i> Dashboard
    </a>

    <!-- Masters -->
    <a href="javascript:void(0)" onclick="submenu('masterMenu','masterArrow')">
        Master's
        <i class="fa fa-angle-down pull-right" id="masterArrow"></i>
    </a>
    <div class="submenu" id="masterMenu">
            <a href="{{ route('masters.license') }}">License</a>
            <a href="{{ route('masters.company') }}">Company</a>
            <a href="{{ route('masters.companyuser') }}">Company Users</a>
            <a href="{{ route('masters.customer') }}">Customers</a>
            <a href="{{ route('masters.offercoupon') }}">Offer Coupon</a>
            <a href="{{ route('masters.paymentMaster') }}">Payment Master</a>
            <a href="{{ route('masters.otherusers') }}">Other Users</a>
            <a href="{{ route('masters.tablegroup') }}">Table Group</a>
            <a href="{{ route('masters.department') }}">Department</a>
            <a href="{{ route('masters.tablemaster') }}">Table Master</a>
            <a href="{{ route('masters.taxsetting') }}">Tax Setting</a>
            <a href="{{ route('masters.unit') }}">Unit</a>
            <a href="{{ route('masters.kotgroup') }}">Kot Group</a>
            <a href="{{ route('masters.kotmessage') }}">Kot Message</a>
            <a href="{{ route('masters.item') }}">Item</a>
            <a href="{{ route('masters.faqvideo') }}">Faq Video</a>
    </div>

    <!-- Reports -->
    <a href="javascript:void(0)" onclick="submenu('reportsMenu','reportsArrow')">
        Reports
        <i class="fa fa-angle-down pull-right" id="reportsArrow"></i>
    </a>
    <div class="submenu" id="reportsMenu">
        <a href="/reports/future-orders">Future Orders</a>
            <a href="/reports/billwise">Reports Billwise</a>
            <a href="/reports/itemwise">Reports Itemwise</a>
            <a href="/reports/datewise">Reports Datewise</a>
            <a href="/reports/cancelled-billwise">Reports Cancelled Billwise</a>
            <a href="/reports/nonchargeable-bill">Reports Non Chargeable Bill</a>
            <a href="/reports/department">Reports Department</a>
            <a href="/reports/customerwise">Reports Customer Wise</a>
            <a href="/reports/total-summary">Reports Total Summary</a>

    </div>
        <a href="/clear-data">
            <i class="fa fa-trash"></i> Clear Data
        </a>

    </div>
    
</div>

<!-- ✅ MAIN CONTENT AREA -->
<div class="content">
    @yield('content')
</div>

<script>
function submenu(menuId, arrowId) {
    const menu = document.getElementById(menuId);
    const arrow = document.getElementById(arrowId);

    menu.style.display = menu.style.display === "block" ? "none" : "block";
    arrow.classList.toggle('rotate');
}

function toggleUserMenu() {
    const dropdown = document.getElementById('userDropdown');
    dropdown.style.display =
        dropdown.style.display === 'block' ? 'none' : 'block';
}

// Close dropdown when clicking outside
document.addEventListener('click', function (e) {
    const menu = document.getElementById('userMenu');
    if (!menu.contains(e.target)) {
        document.getElementById('userDropdown').style.display = 'none';
    }
});

</script>

</body>
</html>
