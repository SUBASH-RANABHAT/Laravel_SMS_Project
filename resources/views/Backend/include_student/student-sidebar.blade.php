
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Welcome</div>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{ route('calendar.student') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-calendar"></i></div>
                   School Calendar
                </a>
                <div class="sb-sidenav-menu-heading">Student Details</div>
                <a class="nav-link" href="{{ route('attendance') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-clipboard-user"></i></div>
                   Attendance Log
                </a>
                <a class="nav-link" href="{{ route('fee') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-money-check-alt"></i></div>
                   Fee Payments
                </a>
                <a class="nav-link" href="{{ route('result') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-sheet-plastic"></i></div>
                   Results 
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as: Student</div>
        </div>
    </nav>
</div>