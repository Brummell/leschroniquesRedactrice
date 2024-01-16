@extends('base')

@section('title','ADMIN - Accueil')
@section('content')
<form action="{{route('admin.home.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal-header mt-3">						
        <h4 class="modal-title">Ajouter les informations</h4>
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
                <textarea class="form-control" name="text1" required></textarea>
            </div>
            <div class="col form-group">
                <label>Sous texte</label>
                <textarea class="form-control" name="soustext" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <label>Text footer(copyright)</label>
            <input type="text" name="textfooter" class="form-control" required>
        </div>
        <div class="row">
            <div class="col form-group">
                <label>lien twitter</label>
                <input type="text" name="lienTwitter" class="form-control" required>
            </div>
            <div class="col form-group">
                <label>lien facebook</label>
                <input type="text" name="lienFacebook" class="form-control" required>
            </div>
        </div>	
        <div class="row">
            <div class="col form-group">
                <label>lien instagram</label>
                <input type="text" name="lienInstagram" class="form-control" required>
            </div>
            <div class="col form-group">
                <label>lien linkedin</label>
                <input type="text" name="lienLinkedin" class="form-control" required>
            </div>
        </div>		
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Ajouter">
    </div>
</form>
@endsection