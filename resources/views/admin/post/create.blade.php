@extends('admin.layouts.base')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1>Crea un nuovo post</h1>

            <form method="POST" action="{{route('admin.posts.store')}}">
                @csrf

                <div class="form-group">
                  <label for="title">Titolo</label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>
                
                <div class="form-group">
                    <label for="content">Contenuto post</label>
                    <textarea name="content" class="form-control" id="content" name="content"></textarea>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Salva</button>
              </form>

        </div>
    </div>
</div>

@endsection