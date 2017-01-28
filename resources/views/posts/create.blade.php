@extends('layouts.layout')

@section('content')

    <div class="col-sm-8">
        <h1>Publier un article</h1>
        <hr>

        <form method="POST" action="/posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titre de l'article">
            </div>
            <div class="form-group">
                <label for="content">Contenu</label>
                <textarea class="form-control" id="content" name="content" placeholder="Contenu"></textarea>

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-default">Publier</button>
            </div>

            @include('layouts.error')
        </form>
    </div>
@endsection