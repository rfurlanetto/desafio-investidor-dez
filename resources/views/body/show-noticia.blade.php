@extends('base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding: 3rem;">
                <h1 class="text-center">{{$noticia->titulo}}</h1>

                <p>
                    {{$noticia->noticia}}
                </p>
            </div>
        </div>
    </div>
@endsection