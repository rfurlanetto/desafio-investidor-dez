@extends('base')
@section('content')
    <div class="container">
        <div class="row">
            @if($noticias->count())
                @foreach($noticias as $noticia)
                <div class="col-12 col-md-4 search-noticia" style="margin-top:2rem;">
                    <div class="card" style="width: 18rem; height: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><b>{{$noticia['titulo']}}</b></h5>
                            <p class="card-text">{{$noticia['noticia']}}</p>
                        </div>
                        <div class="card-body text-center">
                            <a 
                            href="{{url('show-noticia/') . '/' . $noticia['slug']}}" 
                            class="btn btn-secondary" style="width: 12rem;">
                                Acessar
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection