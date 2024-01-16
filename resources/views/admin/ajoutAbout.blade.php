@extends('base')

@section('title','ADMIN - A propos')
@section('content')
<form action="{{route('admin.about.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal-header mt-3">						
        <h4 class="modal-title">Ajouter les informations</h4>
    </div>
    <div class="modal-body">					
        <div class="form-group">
            <label>Bannière</label>
            <input type="file" class="form-control" name="banniere" id="customFile" required>
        </div>
        <div class="row">
            <div class="col form-group">
                <label>Text 1</label>
                <textarea class="form-control" name="text1" required></textarea>
            </div>
            <div class="col form-group">
                <label>Sous texte</label>
                <textarea class="form-control" name="soustext" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <label>A propos</label>
            <textarea class="form-control" name="apropos" required></textarea>
        </div>	
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Ajouter">
    </div>
</form>
@endsection