<nav class="layout-navbar shadow-none py-0">
    <div class="container">
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-8">
            <div class="navbar-brand app-brand demo d-flex py-0 me-4 me-xl-8">
                <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="icon-base bx bx-menu icon-lg align-middle text-heading fw-medium"></i>
                </button>
                <a href="{{ config('app.url') }}" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <span class="text-primary">
                            <img id="logo" class="h-px-40" src="/src/assets/logo/s2-epidemiologi-black.svg">
                        </span>
                    </span>
                </a>
            </div>

            <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="icon-base bx bx-x icon-lg"></i>
                </button>
                <ul class="navbar-nav me-auto w-100 justify-content-end">
                    @foreach($menus as $menu)
                        <li class="nav-item {{ request()->segment(1) == $menu->url ? 'active' : '' }}">
                            <a class="nav-link fw-medium" href="{{ config('app.url').'/'.$menu->url }}">{{ $menu->title }}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="landing-menu-overlay d-lg-none"></div>

            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                    <a class="nav-link dropdown-toggle hide-arrow" id="nav-theme" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <i class="icon-base bx bx-sun icon-lg theme-icon-active"></i>
                        <span class="d-none ms-2" id="nav-theme-text">Toggle theme</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="nav-theme-text">
                        <li>
                            <button type="button" class="dropdown-item align-items-center active" data-bs-theme-value="light" aria-pressed="false">
                                <span>
                                    <i class="icon-base bx bx-sun icon-md me-3" data-icon="sun"></i>Light
                                </span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="dark" aria-pressed="true">
                                <span>
                                    <i class="icon-base bx bx-moon icon-md me-3" data-icon="moon"></i>Dark
                                </span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="system" aria-pressed="false">
                                <span>
                                    <i class="icon-base bx bx-desktop icon-md me-3" data-icon="desktop"></i>System
                                </span>
                            </button>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
