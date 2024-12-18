<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('admin/dashboard') }}" class="app-brand-link">
            <img src="{{ asset('assets/images/logo.png') }}" style="width: 160px" alt="Doctor Appointment"/>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    @if (!Auth::user()->is_staff)

        <ul class="menu-inner py-1">

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Gérer</span>
            </li>

            <!-- Tableau de bord -->
            <li class="menu-item {{ Request::is('doctor/dashboard') ? 'active':'' }}">
                <a href="{{ url('doctor/dashboard') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Tableau de bord</div>
                </a>
            </li>

            <li class="menu-item
            @if (Request::is('doctor/appointments') || Request::is('doctor/appointments/*'))
                open active
            @endif
            ">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-calendar-plus menu-link.menu-toggle"></i>
                    <div data-i18n="SubCategory">Rendez-vous</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item @if(Request::is('doctor/appointments')) active @endif">
                        <a href="{{ url('doctor/appointments') }}" class="menu-link">
                            <div data-i18n="Without menu">Tous les Rendez-vous</div>
                        </a>
                    </li>
                    <li class="menu-item @if(Request::is('doctor/appointments/history')) active @endif">
                        <a href="{{ url('doctor/appointments/history') }}" class="menu-link">
                            <div data-i18n="Without menu">Historique des Rendez-vous</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item @if (Request::is('doctor/patients') || Request::is('doctor/patients/*')) active @endif">
                <a href="{{ url('doctor/patients') }}" class="menu-link">
                    <i class="menu-icon tf-iconss bx bx-user-plus"></i>
                    <div data-i18n="Basic">Patients</div>
                </a>
            </li>
            <li class="menu-item @if (Request::is('doctor/profile')) active @endif">
                <a href="{{ url('doctor/profile') }}" class="menu-link">
                    <i class="menu-icon tf-iconss bx bx-user"></i>
                    <div data-i18n="Basic">Profil</div>
                </a>
            </li>
            <li class="menu-item @if (Request::is('doctor/timings')) active @endif">
                <a href="{{ url('doctor/timings') }}" class="menu-link">
                    <i class="menu-icon tf-iconss bx bx-calendar"></i>
                    <div data-i18n="Basic">Horaires</div>
                </a>
            </li>
            <li class="menu-item @if (Request::is('doctor/change-password')) active @endif">
                <a href="{{ url('doctor/change-password') }}" class="menu-link">
                    <i class="menu-icon tf-iconss bx bx-lock"></i>
                    <div data-i18n="Basic">Changer le Mot de Passe</div>
                </a>
            </li>

            <li class="menu-item mt-2">
                <a href="{{ asset('doctor/logout') }}" class="menu-link text-white bg-danger">
                    <i class="menu-icon tf-icons bx bx-log-out"></i>
                    <div data-i18n="Analytics">Déconnexion</div>
                </a>
            </li>

        </ul>

    @endif

</aside>
