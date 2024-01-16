@extends('base')

@section('title','ADMIN - Contact')
@section('content')
<form action="{{route('admin.contact.update',['contact'=>$contact->id_contact])}}" method="post" enctype="multipart/form-data">
    @method("put")
    @csrf
    <div class="modal-header mt-3">						
        <h4 class="modal-title">Editer les informations</h4>
    </div>
    <div class="modal-body">					
        <div class="form-group">
            <label>Bannière</label>
            <input type="file" class="form-control" name="banniere" id="customFile" value="{{$contact->banniere}}">
        </div>
        <div class="row">
            <div class="col form-group">
                <label>Text 1</label>
                <textarea class="form-control" name="text1" required>{{$contact->text_1}}</textarea>
            </div>
            <div class="col form-group">
                <label>Sous texte</label>
                <textarea class="form-control" name="soustext" required>{{$contact->text_2}}</textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Ajouter">
    </div>
</form>
@endsection