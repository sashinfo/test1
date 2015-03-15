<!-- Sidebar Menu -->
<div id="menu" class="hidden-print hidden-xs ">
    <div id="sidebar-discover-wrapper">
        <ul class="list-unstyled">
            <li @if ($menu=='dashboard') class="active" @endif ><a href="{{ url('/admin/dashboard') }}"
                                  class="glyphicons home"><i></i><span>Dashboard</span></a></li>
            <li  @if ($menu=='properties') class="active" @endif><a href="{{ url('/admin/properties') }}" class="glyphicons home"><i></i><span>Properties</span></a></li>
            <li  @if ($menu=='content') class="active" @endif>
                <a href="#sidebar-discover-content" class="glyphicons notes"
                   data-toggle="sidebar-discover"><i></i><span>Content</span></a>

                <div id="sidebar-discover-content" class="sidebar-discover-menu">
                    <div class="innerAll text-center border-bottom text-muted-dark">
                        <strong>Content</strong>
                        <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                    <ul class="animated fadeIn">
                        <li><a href="{{ url('/admin/pages') }}"><i class="fa fa-folder-o"></i>Pages</a></li>
                        <li><a href="{{ url('/admin/announcements') }}"><i class="fa fa-circle-o"></i>Announcements</a>
                        </li>
                        <li><a href="{{ url('/admin/testimonials') }}"><i class="fa fa-circle-o"></i>Testimonials</a>
                        </li>
                        <li><a href="{{ url('/admin/gallery') }}"><i class="fa fa-camera"></i>Gallery </a></li>
                    </ul>
                </div>
            </li>

            <li  @if ($menu=='newsletter') class="active" @endif>
                <a href="#sidebar-discover-newsletter" class="glyphicons envelope"
                   data-toggle="sidebar-discover"><i></i><span>Newsletter</span></a>

                <div id="sidebar-discover-newsletter" class="sidebar-discover-menu">
                    <div class="innerAll text-center border-bottom text-muted-dark">
                        <strong>Newsletter</strong>
                        <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                    <ul class="animated fadeIn">
                        <li><a href="{{ url('/admin/subscribers') }}"><i class="fa fa-circle-o"></i>Subscribers</a></li>
                        <li><a href="{{ url('/admin/broadcast') }}"><i class="fa fa-circle-o"></i>Broadcast</a></li>
                        <li><a href="{{ url('/admin/email_opt_out') }}"><i class="fa fa-circle-o"></i>Email Opt-out</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li  @if ($menu=='settings') class="active" @endif>
                <a href="#sidebar-discover-settings" class="glyphicons wrench"
                   data-toggle="sidebar-discover"><i></i><span>Settings</span></a>

                <div id="sidebar-discover-settings" class="sidebar-discover-menu">
                    <div class="innerAll text-center border-bottom text-muted-dark">
                        <strong>Newsletter</strong>
                        <button class="btn btn-xs btn-default close-discover"><i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                    <ul class="animated fadeIn">
                        <li><a href="{{ url('/admin/general_settings') }}"><i class="fa fa-circle-o"></i>General</a>
                        </li>
                        <li><a href="{{ url('/admin/menu_settings') }}"><i class="fa fa-circle-o"></i>Menu</a></li>
                        <li><a href="{{ url('/admin/banners_settings') }}"><i class="fa fa-circle-o"></i>Banners</a>
                        </li>
                        <li><a href="{{ url('/admin/property_settings') }}"><i class="fa fa-circle-o"></i>Property</a>
                        </li>
                        <li><a href="{{ url('/admin/template_settings') }}"><i class="fa fa-circle-o"></i>Template</a>
                        </li>
                        <li><a href="{{ url('/admin/modules_settings') }}"><i class="fa fa-circle-o"></i>Modules</a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</div>
<!-- // Sidebar Menu END -->