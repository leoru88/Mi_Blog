@extends('adminlte::page')

@section('title', 'Admin - Categorías')

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content_header')

<nav class="navbar navbar-light bg-main">
    <div class="container p-4">
        <a class="navbar-brand m-auto" href="{{route('home')}}"
            class="mx-3 pb-3 link-category d-block d-md-inline text-center my-5"><b>PAGINA PRINCIPAL DEL BLOG</b></a>
    </div>
</nav>


<h1>
    Categorías
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-category">
        Crear
    </button>
</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de categorías</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="categories" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Categoría</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                        data-target="#modal-update-category-{{$category->id}}">
                                        Editar
                                    </button>

                                    <form action="{{ route('admin.categories.delete', $category->id) }}"  method ='POST'>
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    <button class="btn btn-danger">Eliminar</button>

                                    </form>

                                </td>
                            </tr>


                            <!-- modal UPDATE CATEGORY-->
                            @include('admin.categories.modal-update-category')

                            <!--         <div class="modal fade" id="modal-update-category-{{$category->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-default">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Actualizar Categoría</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                        </div>

                                        <form action="/admin/categories.store" method="POST">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <div class="form-group"></div>
                                                <label for="name">Categoría</label>
                                                <input type="text" name="name" class="form-control" id="category"
                                                    value="{{$category->name}}">
                                            </div>

                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-outline-light"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                                            </div>
                                        </form>
                                    </div>
                                  
                                </div>
                              
                            </div> -->


                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Categoría</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>


<!-- modal -->
<div class="modal fade" id="modal-create-category">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Crear Categoría</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>

            <form action="/admin/categories.store" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group"></div>
                    <label for="name">Categoría</label>
                    <input type="text" name="name" class="form-control" id="category">
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@stop


@section('js')
<script>
$(document).ready(function() {
    $('#categories').DataTable({
        "order": [
            [3, "desc"]
        ]
    });
});
</script>
@stop