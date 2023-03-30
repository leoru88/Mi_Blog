<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Blog</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])


<nav>
    <div class="container p-4">
    <a class="navbar-brand m-auto" href="{{route('admin.posts.index')}}"
            class="mx-3 pb-3 link-category d-block d-md-inline text-center my-5"><b>PANEL DE CONTROL</b></a>
    </div>
</nav>

</head>

<body>

    <!-- Logo -->
    
    <nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto text-center my-5" href="{{route('home')}}">
                <img src="{{asset('images/1.png')}}" width="250" alt="" loading="lazy">
                <h1 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif"><center>Bienvenido al BLOG</center></h1>

            </a>
        </div>
    </nav>


    <!-- Contenido -->
    <section class="container-fluid content">
        <!-- Categorías -->
        <div class="row justify-content-center">
            <div class="col-10 col-md-12">
                <nav class="text-center my-5">
                    <a href="/"
                        class="mx-3 pb-3 link-category d-block d-md-inline {{isset($categoryIdSelected)? '': 'selected-category'}}">Todas</a>

                    @foreach ($categories as $category)
                    <a href="{{route('posts.category', $category->name)}}"
                        class="mx-3 pb-3 link-category d-block d-md-inline {{ (isset($categoryIdSelected) && $category->id == $categoryIdSelected)? 'selected-category':'' }}">{{$category->name}}</a>
                    @endforeach
                </nav>
            </div>
        </div>

        <!-- Posts -->
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">


                    <!-- Post 1 -->
                    @foreach ($posts as $post)

                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset($post->featured)}}" alt="{{$post->name}}">
                            <div class="card-body">
                                <small class="card-txt-category">
                                    <center>Categoría: {{$post->category->name}}</center>
                                </small>
                                <h5 class="card-title my-2" >
                                    <center>{{$post->title}}</center>
                                </h5>
                                <div class="d-card-text text-align-center">

                                    <p style="width: 16rem; overflow:hidden; white-space:nowrap; text-overflow: ellipsis;
           
                                    "> 
                                       {{$post->content}}
                                    </p>
                                    
                                </div>
                                <a href="{{route('post', $post->id)}}" class="post-link"><b>Leer más</b></a>
                                <hr>

                                <div class="row">

                                    <div class="col-6 text-right">
                                        <span class="card-txt-author">{{$post->author}}</span>
                                    </div>

                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">{{$post->created_at->diffForHumans()}}</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach



                    <!-- Post 2 -->

                    <!--  <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/3.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category"><center>Categoría: Lenguajes de Programación</center></small>
                                <h5 class="card-title my-2">
                                    <center>PHP</center>
                                </h5>
                                <div class="d-card-text">
                                    <center>PHP es un lenguaje de código abierto que se utiliza
                                        para generar páginas web dinámicas. Es bastante popular,
                                        está adecuado para desarrollo web y puede ser incrustado
                                        en HTML. Un gran número de páginas y portales web están
                                        creadas con PHP. El mismo es de uso libre y gratuito
                                        para todos los programadores que quieran utilizarlo.</center>
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Post 3 -->

                    <!-- <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/4.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category"><center>Categoría: Lenguajes de Programación</center></small>
                                <h5 class="card-title my-2">
                                    <center>C</center>
                                </h5>
                                <div class="d-card-text">
                                    <center>El lenguaje C es uno de los más antiguos que
                                        se usan en la actualidad. Es valorado por la eficiencia
                                        del código que produce y es el lenguaje de programación
                                        más popular para crear software de sistemas, ofrece la
                                        posibilidad de manejar todos los aspectos de las
                                        instrucciones del CPU y también se utiliza para crear
                                        aplicaciones. </center>
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>

            <div class="col-12">
                <!-- Paginador -->

            </div>
        </div>
    </section>


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