@extends('layouts.dash')

@section('content')
    <div class="container">
        <div class="col-md-10">
            <p><a href="stores/create" class="btn btn-primary" role="button">Crear Comercio</a></p>
            @if (sizeof($stores)>0)
                @foreach ($stores as $index=>$store)
                    @if ($index %3 ==0)
                        <div class="row">
                    @endif
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>{{$company->name}}</h3>
                                <p>{{$company->nif}}</p>
                                <p><a href="/fotos?id={{$album->id}}" class="btn btn-primary" role="button">Ver</a></p>
                            </div>
                        </div>
                    </div>
                    @if (($index+1)%3 == 0)
                        </div>
                    @endif

                @endforeach
            @else
                <div class="alert alert-danger">
                    <p>No tienes Comercios. Crea uno.</p>
                </div>
            @endif
        </div>
    </div>
@endsection
