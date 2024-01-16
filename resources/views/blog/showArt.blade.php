@extends('base_blog')

@section('title','Détail article')
@section('content')
    
<div class="container mt-5">
  <section class="py-5 overflow-hidden">
      <div class="row mb-4">
          <div class="col-12 col-md-6 mb-4 mb-md-0">
              <div class="position-relative mb-3" style="height: 564px;">
                  <img class="img-fluid w-100 h-100" id="image" style="object-fit: cover;" src="data:image/jpeg;base64,{{$article->imgArt}}" alt="">
              </div>
          </div>
          <div class="col-12 col-md-6">
              <div class="ps-lg-4">
                  <div class="mb-3 pb-3">
                      <p class="text-secondary">{{$article->nom}} {{$article->prenom}} le {{ \Carbon\Carbon::parse($article->date_read)->format('d/m/Y') }}</p>
                      <br>
                      <h1>{{$article->title}}</h1>
                      <p class="fs-5 text-justify">{{$article->body}}</p>
                      <br>
                  </div>
              </div>
          </div>
      </div>
  </section>
</div>

@endsection