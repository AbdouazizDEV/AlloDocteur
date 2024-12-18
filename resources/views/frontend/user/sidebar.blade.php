<h5 class="mb-3">
    Bonjour
    <span class="text-primary">{{ Auth::user()->name }}.</span> <!-- Affiche le nom de l'utilisateur -->
</h5>

<div class="card mb-3">
    <div class="card-header">
        <h4 class="mb-0">Liens Rapides</h4> <!-- En-tête de la carte -->
    </div>
    <div class="card-body">
        <ul class="user-sidebar">
            <li>
                <a href="{{ url('user/appointments') }}"><i class="bx bx-list-check"></i> Mes Rendez-vous</a>
                <!-- Lien vers la page "Mes Rendez-vous" avec une icône -->
            </li>
            <li>
                <a href="{{ url('user/profile') }}"><i class="bx bx-user"></i> Mon Profil</a>
                <!-- Lien vers la page "Mon Profil" avec une icône -->
            </li>
            <li>
                <a href="{{ url('user/change-password') }}"><i class="bx bx-lock"></i> Changer le Mot de Passe</a>
                <!-- Lien vers la page "Changer le Mot de Passe" avec une icône -->
            </li>
            <li>
                <a href="{{ url('user/support') }}"><i class="bx bx-phone-call"></i> Support</a>
                <!-- Lien vers la page "Support" avec une icône -->
            </li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="bx bx-log-out"></i>
                    <span class="align-middle">Déconnexion</span>
                </a>
                <!-- Lien pour la déconnexion avec une icône -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
