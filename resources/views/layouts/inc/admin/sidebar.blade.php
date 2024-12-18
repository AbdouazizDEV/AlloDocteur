<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('admin/dashboard') }}" class="app-brand-link">
            <img src="{{ asset('assets/images/logo.png') }}" style="width: 160px" alt="Rendez-vous médical" />
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Gérer</span>
        </li>

        <!-- Tableau de bord -->
        <li class="menu-item {{ Request::is('admin/dashboard') ? 'active':'' }}">
            <a href="{{ url('admin/dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Tableau de bord</div>
            </a>
        </li>

        <li class="menu-item @if (Request::is('admin/appointments')) active @endif">
            <a href="{{ url('admin/appointments') }}" class="menu-link">
                <i class="menu-icon tf-iconss bx bx-list-ol"></i>
                <div data-i18n="Basic">Rendez-vous</div>
            </a>
        </li>
        <li class="menu-item @if (Request::is('admin/appointments/create')) active @endif">
            <a href="{{ url('admin/appointments/create') }}" class="menu-link">
                <i class="menu-icon tf-iconss bx bx-list-ol"></i>
                <div data-i18n="Basic">Créer un Rendez-vous</div>
            </a>
        </li>

        <li class="menu-item
            @if (Request::is('admin/departments') || Request::is('admin/departments/*'))
                open active
            @endif
            ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-body"></i>
                <div data-i18n="SubCategory">Spécialité</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @if(Request::is('admin/departments/create')) active @endif">
                    <a href="{{ url('admin/departments/create') }}" class="menu-link">
                        <div data-i18n="Without menu">Ajouter un spécialite</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::is('admin/departments') || Request::is('admin/departments/*/edit')) active @endif">
                    <a href="{{ url('admin/departments') }}" class="menu-link">
                        <div data-i18n="Without menu">Voir les spécialité</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item
            @if (Request::is('admin/doctors') || Request::is('admin/doctors/*'))
                open active
            @endif
            ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-plus-medical"></i>
                <div data-i18n="SubCategory">Médecins</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @if(Request::is('admin/doctors/create')) active @endif">
                    <a href="{{ url('admin/doctors/create') }}" class="menu-link">
                        <div data-i18n="Without menu">Ajouter un Médecin</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::is('admin/doctors') || Request::is('admin/doctors/*/edit')) active @endif">
                    <a href="{{ url('admin/doctors') }}" class="menu-link">
                        <div data-i18n="Without menu">Voir les Médecins</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item @if (Request::is('admin/patients') || Request::is('admin/patients/*')) active @endif">
            <a href="{{ url('admin/patients') }}" class="menu-link">
                <i class="menu-icon tf-iconss bx bx-user-plus"></i>
                <div data-i18n="Basic">Patients</div>
            </a>
        </li>


        <li class="menu-item @if (Request::is('admin/manage-admins')) active @endif">
            <a href="{{ url('admin/manage-admins') }}" class="menu-link">
                <i class="menu-icon tf-iconss bx bx-collection"></i>
                <div data-i18n="Basic">Gérer les Admins</div>
            </a>
        </li>
        <li class="menu-item @if (Request::is('admin/settings')) active @endif">
            <a href="{{ url('admin/settings') }}" class="menu-link">
                <i class="menu-icon bx bx-cog"></i>
                <div data-i18n="Basic">Paramètres du Site</div>
            </a>
        </li>

        <li class="menu-item mt-2">
            <a href="{{ asset('admin/manage-admins/logout') }}" class="menu-link text-white bg-danger">
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                <div data-i18n="Analytics">Déconnexion</div>
            </a>
        </li>

    </ul>

</aside>
