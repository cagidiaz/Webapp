@extends('layouts.dash')

@section('content')

<div class="page-header">
    <h1>Listado de Usuarios </h1>
</div>

<div class="row">
    <div class="col-md-8">

        <div class="panel panel-default">
            <div class="panel-heading">
                Lista
                <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                    <button type="button" id='nuevo'  name='nuevo' class="btn btn-warning navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>
                </p>
            </div>
            <div class="panel-body">

                <table class="table table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Imagen</th>
                        <th>Rol</th>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->image}}</td>
                            <td>
                                <a href="{{route('product.edit',$product->id)}}">[Editar]</a>
                                <a href="{{route('product.show',$product->id)}}">[Eliminar]</a></td>
                            </tr>
                            @endforeach
                        </tbody>


                    </table>
                    <div class="text-center">
                        {!!$products->links()!!}
                    </div>

                </div>
            </div>


        </div>
    </div>

    <script>
    $("#nuevo").click(function(event)
    {
        document.location.href = "{{ route('product.create')}}";
    });

    </script>

    @endsection
