<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/accueil') }}">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/produits') }}">Produits</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('panier.afficher') }}">
                                    Panier
                                    <span class="badge bg-secondary">
                                        {{
                                    Auth::check()
                                    ? \App\Models\Panier::where('user_id', Auth::id())->first()->details->sum('qte_com')
                                    : (\App\Models\Panier::find(Session::get('panier_id')) ? \App\Models\Panier::find(Session::get('panier_id'))->details->sum('qte_com') : 0)
                                }}
                                    </span>
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </div>
</div>