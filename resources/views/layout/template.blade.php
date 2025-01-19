<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Exemple avec Bootstrap et jQuery</title>

    <!-- Intégration de Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Intégration de jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Intégration de Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    /* Utiliser Flexbox pour étirer la page */
    html, body {
        height: 100%; /* Définit la hauteur totale de la page */
        margin: 0;
    }

    /* Wrapper qui occupe toute la hauteur de la page */
    .wrapper {
        min-height: 100%;
        display: flex;
        flex-direction: column;
    }

    /* Contenu principal qui prend l'espace restant */
    .content {
        flex: 1;
    }

    /* Footer fixé en bas */
    footer {
        background-color: #343a40;
        color: white;
        text-align: center;
        padding: 20px 0;
    }
</style>

<body>

    <!-- Header avec menu de navigation -->
    <header class="bg-dark text-white py-3">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="{{route('index')}}">Généalogie</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{$index ?? '' }}">
                        <a class="nav-link " href="{{route('index')}}">Accueil</a>
                    </li>

                    @if(Auth::check())
                    <li class="nav-item {{$invitation ?? '' }}">
                        <a class="nav-link  " href="{{route('invitations')}}">Invitations</a>
                    </li>
                    <li class="nav-item {{$create ?? '' }}">
                        <a class="nav-link " href="{{route('create')}}">Créer une personne</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Se connecter</a>
                    </li>
                    @endif

                </ul>
            </div>
        </nav>
    </header>

    <!-- Contenu principal de la page -->
    <div class="container mt-5"  style="min-height: 375px" >
        {{$slot}}
    </div>

    <!-- Pied de page -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 Généalogie. Tous droits réservés.</p>
    </footer>

</body>
</html>
