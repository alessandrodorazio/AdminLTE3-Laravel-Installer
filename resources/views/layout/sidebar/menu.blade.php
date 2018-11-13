<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link @if(Request::is('/')) active @endif">
            <i class="nav-icon fa fa-home"></i>
            <p>
                Home page
            </p>
        </a>
    </li>
</ul>
