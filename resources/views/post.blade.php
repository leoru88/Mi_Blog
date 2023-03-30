@extends('layouts.layout')

@section('title', 'POST')

@section('content')


<nav class="navbar navbar-light bg-main">
    <div class="container p-4">
        <a class="navbar-brand m-auto" href="{{route('home')}}"
            class="mx-3 pb-3 link-category d-block d-md-inline text-center my-5"><b>INICIO</b></a>
    </div>
</nav>


<!-- Contenido -->
<section class="container-fluid content py-5">
    <div class=" row justify-content-center">

        <!-- Post -->
        <div class="col-12 col-md-7 text-center">
            <h1>{{$post->title}}</h1>
            <hr>
            <img src="{{asset($post->featured)}}" alt="{{$post->title}}" class="img-fluid" style="width:400px; height:400px">

            <p class="text-left mt-3 post-txt">
                <span>Autor: {{$post->author}}</span>
                <span class="float-right">Publicado: {{$post->created_at->diffForHumans()}}</span>
            </p>

            <b style="text-align: justify";>
                <span>{{$post->content}}</span>
            </b>

            <p class="text-left post-txt"><i>Categoría: {{$post->category->name}}</i></p>
        </div>

        <!-- Entradas recientes -->
        <div class="col-md-3 offset-md-1">
            <p>Últimas entradas</p>

            @foreach($latestPosts as $post)

            <div class="row mb-4">
                <div class="col-4 p-0">
                    <a href="{{route('post', $post->id)}}">
                        <img src="{{ asset($post->featured) }}" class="img-fluid rounded" width="100"
                            alt="{{ $post->title }}">
                    </a>
                </div>

                <div class="col-7 pl-0">
                    <a href="{{route('post', $post->id)}}" class="link-post">{{$post->title}}</a>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>

@endsection