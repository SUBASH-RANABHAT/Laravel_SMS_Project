
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Welcome</div>
                <a class="nav-link" href="/admin/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{ route('calendar.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-calendar"></i></div>
                   School Calendar
                </a>
                <div class="sb-sidenav-menu-heading">CMS</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    CMS Layouts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('page-add') }}">Home</a>
                        <a class="nav-link" href="{{ route('about_add') }}">About Us</a>
                        <a class="nav-link" href="{{ route('notice_add') }}">Notices</a>
                        <a class="nav-link" href="">Gallery</a>
                        <a class="nav-link" href="">Contact</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">School Members</div>
                <a class="nav-link" href="{{ route('student_details') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-graduation-cap"></i></div>
                   Student Record
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                    Teacher Info
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link collapsed" href="{{ route('teacher') }}">
                    <div class="sb-nav-link-icon"></div>
                    Add Teacher.
                </a>
                <a class="nav-link collapsed" href="{{ route('teacher.view') }}">
                    <div class="sb-nav-link-icon"></div>
                   Teacher Details  
                </a>
                <a class="nav-link collapsed" href="{{ route('schedule') }}">
                    <div class="sb-nav-link-icon"></div>
                   Teacher Class Schedule
                </a>
                <a class="nav-link collapsed" href="{{ route('dropdown') }}">
                    <div class="sb-nav-link-icon"></div>
                   For Relation
                </a>
            </nav>
        </div>
        <div class="sb-sidenav-menu-heading">CMS</div>
        <a class="nav-link" href="{{ route('class') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
           Enter Class
        </a>
        <a class="nav-link" href="{{ route('class.show') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
           Class Details
        </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as: Admin</div>
        </div>
    </nav>
</div>