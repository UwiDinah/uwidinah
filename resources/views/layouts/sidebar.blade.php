<div class="sidebar-wrapper">
    <div class="logo">
        <a href="/" class="simple-text">
                uwidinah
        </a>
    </div>

    <ul class="nav">
        <li class="{{ Request::is('/')?'active':''}}">
            <a href="/">
                <i class="ti-panel"></i>
                <p>Dashboard</p>
            </a>
        </li>
        {{-- <li class="{{ Request::is('user')?'active':''}}">
            <a href="/user">
                <i class="ti-user"></i>
                <p>User Profile</p>
            </a>
        </li> --}}
        {{-- <li class="{{ Request::is('table')?'active':''}}">
            <a href="/table">
                <i class="ti-view-list-alt"></i>
                <p>Table List</p>
            </a>
        </li> --}}
        <li class="{{ Request::is('job-title')?'active':'' }}">
            <a href="/job_title">
                <i class="fas fa-list"></i>
                <p>job list</p>
            </a>
        </li>
        <li class="{{ Request::is('employees')?'active':''}}">
            <a href="employees">
                <i class="fa fa-user-tie"></i>
                <p>Employees</p>
            </a>
        </li>
        <li class="{{ Request::is('job-title')?'active':'' }}">
            <a href="/depart_title">
                <i class="fas fa-list"></i>
                <p>depart</p>
            </a>
        </li>

        {{-- <li class="{{ Request::is('icon')?'active':''}}">
            <a href="icon">
                <i class="ti-pencil-alt2"></i>
                <p>Icons</p>
            </a>
        </li> --}}
        {{-- <li class="{{ Request::is('map')?'active':''}}">
            <a href="map">
                <i class="ti-map"></i>
                <p>Maps</p>
            </a>
        </li> --}}
        {{-- <li class="{{ Request::is('user')?'active':''}}">
            <a href="notification">
                <i class="ti-bell"></i>
                <p>Notifications</p>
            </a>
        </li> --}}
        {{-- <li class="{{ Request::is('upgrade')?'active':''}} ">
            <a href="upgrade">
                <i class="ti-export"></i>
                <p>Upgrade to PRO</p>
            </a>
        </li> --}}


    </ul>
</div>
</div>
