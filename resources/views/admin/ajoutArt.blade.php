@extends('base')

@section('title','ADMIN - Article')
@section('content')
<form action="{{route('admin.article.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal-header mt-3">						
        <h4 class="modal-title">Ajouter les informations</h4>
    </div>
    <div class="modal-body">					
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="imgArt" id="customFile" required>
        </div>
        <div class="row">
            <div class="col form-group">
                <label>Titre</label>
                <textarea class="form-control" name="title" required></textarea>
            </div>
            <div class="col form-group">
                <label>Corps de l'article</label>
                <textarea class="form-control" name="body" required></textarea>
            </div>
        </div>	
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Ajouter">
    </div>
</form>
@endsection