@extends('base')

@section('title','ADMIN - Article')
@section('content')
<form action="{{route('admin.post.update',['post'=>$post->id_post])}}" method="POST" enctype="multipart/form-data">
    @method("put")
    @csrf
    <div class="modal-header mt-3">						
        <h4 class="modal-title">Editer les informations</h4>
    </div>
    <div class="modal-body">					
        <div class="form-group">
            <label>Bannière</label>
            <input type="file" class="form-control" name="banniere" id="customFile" value="{{$post->banniere}}">
        </div>
        <div class="row">
            <div class="col form-group">
                <label>Text 1</label>
                <textarea class="form-control" name="text1" required>{{$post->text_1}}</textarea>
            </div>
            <div class="col form-group">
                <label>Sous texte</label>
                <textarea class="form-control" name="soustext" required>{{$post->text_2}}</textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Ajouter">
    </div>
</form>
@endsection