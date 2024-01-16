@extends('base')

@section('title','ADMIN - A propos')
@section('content')
<form action="{{route('admin.about.update',['about'=>$about->id_about])}}" method="POST" enctype="multipart/form-data">
    @method("put")
    @csrf
    <div class="modal-header mt-3">						
        <h4 class="modal-title">Editer les informations</h4>
    </div>
    <div class="modal-body">					
        <div class="form-group">
            <label>Bannière</label>
            <input type="file" name="banniere" class="form-control" id="customFile" value="{{$about->banniere}}">
        </div>
        <div class="row">
            <div class="col form-group">
                <label>Text 1</label>
                <textarea class="form-control" name="text1" required>{{$about->text_1}}</textarea>
            </div>
            <div class="col form-group">
                <label>Sous texte</label>
                <textarea class="form-control" name="soustext" required>{{$about->text_2}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label>A propos</label>
            <textarea class="form-control" name="apropos" required>{{$about->apropos}}</textarea>
        </div>
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Ajouter">
    </div>
</form>
@endsection