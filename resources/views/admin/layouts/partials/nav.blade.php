<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Panel de Administracion
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('roles.index') }}" class="nav-link active">
                    <i class="far fa-address-book nav-icon"></i>
                    <p>Roles</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="fas fa-users nav-icon"></i>
                    <p>Usuarios</p>
                </a>
            </li>
        </ul>
    </li>
</ul>