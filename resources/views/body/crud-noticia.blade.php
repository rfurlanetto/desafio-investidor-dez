@extends('base')
@section('content')
<div class="container">
    <div class="row">

        @if(isset($success) && $success)
            <div class="alert alert-success" role="alert">
                {{$mensagem}}
            </div>
        @endif

        @if(isset($erro) && $erro)
            <div class="alert alert-danger" role="alert">
                {{$mensagem}}
            </div>
        @endif

        <div class="col-md-12" style="margin-top: 2rem;">
            <form method="POST" action="{{route('save-noticia')}}">
                @csrf
                <input name="id" hidden>
                <div class="mb-3">
                    <label for="title" class="form-label">Titulo</label>
                    <input type="text" class="form-control" id="title" aria-describedby="titulo" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Noticia</label>
                    <textarea class="form-control" id="body" name="body" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{route('list-noticia')}}" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection