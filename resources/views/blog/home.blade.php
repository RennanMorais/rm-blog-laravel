<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome do Blog</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>

    <div class="container-fluid bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <a href="/"><img width="200" src="{{asset('media/images/logo-rm.png')}}"></a>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <div class="row">
                        <div class="col-sm-1 me-4">
                            <a href=""><img src="{{asset('media/icons/facebook.png')}}" width="30"></a>
                        </div>
                        <div class="col-sm-1 me-4">
                            <a href=""><img src="{{asset('media/icons/twitter.png')}}" width="30"></a>
                        </div>
                        <div class="col-sm-1 me-4">
                            <a href=""><img src="{{asset('media/icons/instagram.png')}}" width="30"></a>
                        </div>
                        <div class="col-sm-1 me-4">
                            <a href=""><img src="{{asset('media/icons/youtube.png')}}" width="30"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="menu">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Início</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Menu</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Teste</a></li>
                                <li><a class="dropdown-item" href="#">Teste</a></li>
                                <li><a class="dropdown-item" href="#">Teste</a></li>
                            </ul>
                        </ul>

                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </form>

                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container bg-light pt-4">
        <div class="card mb-3">
            <div class="row">
                <div class="col-md-3">
                    <a href=""><img src="{{asset('media/images/post1.jpg')}}" width="300"></a>
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                    <a href="" style="color: blue; text-decoration:none;"><h5 class="card-title">Striking Distance Studios considera The Callisto Protocol como um 'AAAA Next-Gen'</h5></a>
                    <p class="card-text">Estúdio do co-criador de Dead Space e veteranos da Visceral Games adotará da Unreal Engine 4 para motor gráfico</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="row">
                <div class="col-md-3">
                    <a href=""><img src="{{asset('media/images/post2.jpg')}}" width="300"></a>
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                    <a href="" style="color: blue; text-decoration:none;"><h5 class="card-title">Segundo informações, a Microsoft já está trocando seus servidores do XCloud</h5></a>
                    <p class="card-text">De acordo com Jez Coden, a Microsoft já está trocando a infraestrutura do XCloud pro Xbox Series X</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="row">
                <div class="col-md-3">
                    <a href=""><img src="{{asset('media/images/post3.jpg')}}" width="300"></a>
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                    <a href="" style="color: blue; text-decoration:none;"><h5 class="card-title">Rumor | God of War: Ragnarok será apenas para PS5</h5></a>
                    <p class="card-text">Mostrando o potencial da nova geração.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark">
        <div class="footer">
            <div class="container p-3 text-center">
                <div class="row">
                    <div class="col-md-6">
                        <a href="/"><img width="150" src="{{asset('media/images/logo-rm.png')}}"></a>
                        <p><small class="text-muted">Todos os direitos reservados.</small></p>
                    </div>
                    <div class="col-md-6">
                        <h6>Links</h6>
                        <ul class="footer-menu">
                            <a href=""><li>Home</li></a>
                            <a href=""><li>Home</li></a>
                            <a href=""><li>Home</li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>