<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
     <!-- Logo -->
    <nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto" href="#">
                <img src="{{asset('images/1.png')}}" width="200" alt="" loading="lazy">
            </a>
        </div>
    </nav>


        <!-- Contenido -->
        @yield('content')


        <!-- Footer -->
        <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div id="col-md-10">
                <a href="https://www.linkedin.com/in/leonardo-rodríguez-477781260">
                    <img src="{{asset('images/linkedin.png')}}" class="img-fluid" width="40px"
                        alt="Linkedin Leonardo Rodríguez">
                </a>
                <a href="https://www.instagram.com/leoru88/">
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px"
                        alt="Instagram Leonardo Rodríguez">
                </a>
                <a href="https://www.facebook.com/leonardo.rodriguez.uzcategui/">
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px"
                        alt="Facebook Leonardo Rodríguez">
                </a>
                <p class="mt-3">Copyright © 2022 Leonardo Rodríguez, Blog. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    
</body>

</html>