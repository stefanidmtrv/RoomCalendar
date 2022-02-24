<div class="row flex-nowrap">
    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        </div>

        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">

                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link align-middle px-0">
                        <i class="menu-icon las la-home"></i>
                        <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.stmgmt')}}" class="nav-link ">
                        <span class="menu-title">Student Num Mgmt</span>
                    </a>
                </li>

                <li class="sidebar-menu-item ">
                    <a href="{{route('admin.building')}}" class="nav-link ">
                        <span class="menu-title">Building Management</span>
                    </a>
                </li>

                <li class="sidebar-menu-item ">
                    <a href="{{route('admin.floor')}}" class="nav-link ">
                        <span class="menu-title">Floor Management</span>
                    </a>
                </li>

                <li class="sidebar-menu-item ">
                    <a href="{{route('admin.room')}}" class="nav-link ">
                        
                        <span class="menu-title">Room Management</span>
                    </a>
                </li>
            </ul>
      

    </div>
</div>