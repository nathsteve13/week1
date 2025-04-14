<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{route('dashboard')}}" class="brand-link">
            <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow" />
            <span class="brand-text fw-light">AdminLTE 4</span>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column">
                <!-- Define sidebar items here -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- Add more sidebar menu items as needed -->
                <li class="nav-item menu-open">
                    <a href="{{route('foods.index')}}" class="nav-link active">
                        <i class="nav-icon bi bi-basket"></i>
                        <p>Foods</p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{ route('category.totalfood')}}" class="nav-link active">
                        <i class="nav-icon bi bi-tags"></i>
                        <p>Categories</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
