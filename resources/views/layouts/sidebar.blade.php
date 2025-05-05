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
                <li class="nav-item">
                    <a href="#categoriesSubmenu" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="categoriesSubmenu">
                        <i class="nav-icon bi bi-tags"></i>
                        <p>
                            Categories
                            <i class="right bi bi-chevron-down"></i>
                        </p>
                    </a>
                    <ul class="nav collapse" id="categoriesSubmenu">
                        <li class="nav-item">
                            <a href="{{ route('category.totalfood') }}" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Total Food</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('category.showListFoods') }}" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>Show List Food</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('categories.create') }}" class="nav-link">
                                <i class="bi bi-circle nav-icon"></i>
                                <p>New Categories</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </nav>
    </div>
</aside>
