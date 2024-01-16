@extends('base')

@section('title','ADMIN - Article')
@section('content')
<form action="{{route('admin.article.update',['about'=>$about->id_about])}}" method="POST" enctype="multipart/form-data">
    @method("put")
    @csrf
    <div class="modal-header mt-3">						
        <h4 class="modal-title">Editer les informations</h4>
    </div>
    <div class="modal-body">					
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="imgArt" class="form-control" id="customFile" value="{{$article->imgArt}}">
        </div>
        <div class="row">
            <div class="col form-group">
                <label>Titre</label>
                <textarea class="form-control" name="title" required>{{$article->title}}</textarea>
            </div>
            <div class="col form-group">
                <label>Corps de l'article</label>
                <textarea class="form-control" name="body" required>{{$article->body}}</textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Ajouter">
    </div>
</form>
@endsection