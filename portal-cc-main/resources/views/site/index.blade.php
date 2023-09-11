<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/padrao.css') }}" rel="stylesheet">
    <title>Seu Título Aqui</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <header class="header-1">
        <div class="container-1">
            <div class="d-flex justify-content-between align-items-center py-2">
                <div>
                    <span class="fs-6">INSTITUTO FEDERAL DO NORTE DE MINAS GERAIS</span>
                </div>
                <div>
                    <a href="{{ route('login') }}" class="text-white text-decoration-none me-2">Login</a>
                    <span class="separator">|</span>

                    <span class="search-icon" id="search-icon">
                        <i class="fas fa-search"></i>
                    </span>

                    <div class="search-input" id="search-input">
                        <input type="text" placeholder="Pesquisar">
                        <span class="close-icon" id="close-icon">
                            <i class="fas fa-times"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-2">
            <nav class="navbar navbar-expand-lg bg-white custom-navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/logo-criada.png') }}" alt="Ciência da Computação" class="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse custom-navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item dropdown dropdown-item-custom">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Curso
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item " href="#">Opção 1</a></li>
                                    <li><a class="dropdown-item" href="#">Opção 2</a></li>
                                    <li><a class="dropdown-item" href="#">Opção 3</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown dropdown-item-custom">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Notícias
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Opção 1</a></li>
                                    <li><a class="dropdown-item" href="#">Opção 2</a></li>
                                    <li><a class="dropdown-item" href="#">Opção 3</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown dropdown-item-custom">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pesquisa
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Opção 1</a></li>
                                    <li><a class="dropdown-item" href="#">Opção 2</a></li>
                                    <li><a class="dropdown-item" href="#">Opção 3</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown dropdown-item-custom">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    TCC
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Opção 1</a></li>
                                    <li><a class="dropdown-item" href="#">Opção 2</a></li>
                                    <li><a class="dropdown-item" href="#">Opção 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>

    <div id="message"></div>

    <div class="navbar-divider"></div>


    <div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">

        <div class="carousel-indicators" id="carousel-indicators">
        </div>

        <div class="carousel-inner" id="carousel-inner">
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Restante do conteúdo -->
    <script>
        const searchIcon = document.getElementById('search-icon');
        const searchInput = document.getElementById('search-input');
        const closeIcon = document.getElementById('close-icon');
        const message = document.getElementById('message');

        searchIcon.addEventListener('click', () => {
            if (searchInput.classList.contains('active') && searchInput.querySelector('input').value.trim() !== '') {
                message.textContent = 'Você digitou: "' + searchInput.querySelector('input').value.trim() + '"';

                // Adicionar aqui página para busca

            } else if (!searchInput.classList.contains('active')) {
                searchInput.classList.add('active');
            }
        });

        closeIcon.addEventListener('click', () => {
            searchInput.classList.remove('active');
        });
    </script>

    <script>
        const carouselImages = [
            "{{ asset('images/ifnmg.png') }}",
            "{{ asset('images/ifnmg.png') }}",
            "{{ asset('images/ifnmg.png') }}",
            "{{ asset('images/ifnmg.png') }}"
        ];

        const carouselInner = document.getElementById('carousel-inner');
        const carouselIndicators = document.querySelector('.carousel-indicators');

        for (let i = 0; i < carouselImages.length; i++) {

            const carouselItem = document.createElement('div');
            carouselItem.classList.add('carousel-item');
            if (i === 0) {
                carouselItem.classList.add('active');
            }
            const image = document.createElement('img');
            image.setAttribute('src', carouselImages[i]);
            image.setAttribute('alt', `Image ${i + 1}`);
            image.classList.add('carousel-image');
            carouselItem.appendChild(image);
            carouselInner.appendChild(carouselItem);

            const indicator = document.createElement('button');
            indicator.type = 'button';
            indicator.setAttribute('data-bs-target', '#demo');
            indicator.setAttribute('data-bs-slide-to', i.toString());
            if (i === 0) {
                indicator.classList.add('active');
            }
            carouselIndicators.appendChild(indicator);
        }
    </script>
</body>

</html>