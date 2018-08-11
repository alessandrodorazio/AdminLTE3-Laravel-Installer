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
    <li class="nav-item">
        <a href="{{ route('progetti.index') }}" class="nav-link @if(Request::is('progetti')) active @endif">
            <i class="nav-icon fa fa-project-diagram"></i>
            <p>Progetti</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('clienti.index') }}" class="nav-link @if(Request::is('clienti*')) active @endif">
            <i class="nav-icon fa fa-user-tie"></i>
            <p>Clienti</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('fatture.index') }}" class="nav-link">
            <i class="nav-icon fa fa-file-invoice-dollar"></i>
            <p>Fatture</p>
        </a>
    </li>
</ul>
