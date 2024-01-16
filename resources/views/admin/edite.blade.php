@extends('base')

@section('title','ADMIN - Accueil')
@section('content')
<form action="{{route('admin.home.update',['home'=>$home->id_home])}}" method="POST" enctype="multipart/form-data">
    @method("put")
    @csrf
    <div class="modal-header mt-3">						
        <h4 class="modal-title">Editer les informations</h4>
    </div>
    <div class="modal-body">	
        <div class="row">
            <div class="col form-group">
                <label>Bannière</label>
                <input type="file" class="form-control" name="banniere" id="customFile" value="{{$home->banniere}}">
            </div>
            <div class="col form-group">
                <label>Logo</label>
                <input type="file" class="form-control" name="logo" value="{{$home->logo}}">
            </div>
        </div>				
        <div class="row">
            <div class="col form-group">
                <label>Text 1</label>
                <textarea class="form-control" name="text1" required>{{$home->text_1}}</textarea>
            </div>
            <div class="col form-group">
                <label>Sous texte</label>
                <textarea class="form-control" name="soustext" required>{{$home->text_2}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label>Text footer(copyright)</label>
            <input type="text" class="form-control" name="textfooter" required value="{{$home->footer_text}}">
        </div>
        <div class="row">
            <div class="col form-group">
                <label>lien twitter</label>
                <input type="text" class="form-control" name="lienTwitter" required value="{{$home->twitter}}">
            </div>
            <div class="col form-group">
                <label>lien facebook</label>
                <input type="text" class="form-control" name="lienFacebook" required value="{{$home->facebook}}">
            </div>
        </div>	
        <div class="row">
            <div class="col form-group">
                <label>lien instagram</label>
                <input type="text" class="form-control" name="lienInstagram" required value="{{$home->instagram}}">
            </div>
            <div class="col form-group">
                <label>lien linkedin</label>
                <input type="text" class="form-control" name="lienLinkedin" required value="{{$home->linkidin}}">
            </div>
        </div>		
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Ajouter">
    </div>
</form>
@endsection