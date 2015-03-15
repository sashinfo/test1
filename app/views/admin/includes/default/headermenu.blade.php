<nav class="navbar hidden-print main " role="navigation">
<div class="navbar-header pull-left">
    <div class="user-action user-action-btn-navbar pull-left border-right">
        <button class="btn btn-sm btn-navbar btn-inverse btn-stroke"><i class="fa fa-bars fa-2x"></i>
        </button>
    </div>
</div>
<ul class="main pull-right ">
    <li class="dropdown notif notifications hidden-xs">
        <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell-fill"></i> <span class="label label-danger">0</span></a>
    </li>
    <li class="dropdown username">
        <a href="" class="dropdown-toggle" data-toggle="dropdown">Admin<span class="caret"></span></a>
        <ul class="dropdown-menu pull-right">
            <li><a href="{{ url('/admin/admin_account') }}" class="glyphicons user"><i></i> Account</a>
            </li>
            <li><a href="{{ url('/admin/admin_messages') }}" class="glyphicons envelope"><i></i>Messages</a>
            </li>
            <li><a href="{{ url('/admin/admin_settings') }}" class="glyphicons settings"><i></i>Settings</a>
            </li>
            <li><a href="{{ url('/admin/logout') }}" class="glyphicons lock no-ajaxify"><i></i>Logout</a>
            </li>
        </ul>
    </li>
</ul>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a class="dropdown-toggle" href="{{ url('/admin/dashboard') }}" data-toggle="dropdown">
                    Website logo
                </a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="{{ url('/admin/dashboard') }}" data-toggle="dropdown">
                    Website Name
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- // END navbar -->