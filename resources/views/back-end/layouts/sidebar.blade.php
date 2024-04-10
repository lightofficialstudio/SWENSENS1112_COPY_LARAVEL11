    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">BACKEND <br><sup>ระบบจัดการหลังบ้าน</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">



        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            จัดการข้อมูล
        </div>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('backend.user.index') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>ตารางผู้ใช้งานระบบ</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('backend.product.index') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>ตารางรายการสินค้า</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('backend.category.index') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>ตารางหมวดหมู่สินค้า</span></a>
        </li>





        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
