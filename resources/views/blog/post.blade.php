@extends('base_blog')

@section('title','Article')
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url(data:image/jpeg;base64,{{$home->banniere}})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>{{$post->text_1}}</h1>
                        <h2 class="subheading">{{$post->text_2}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content-->
    <div class="container">
        <div class="row">
            @foreach ($article as $item)
                <div class="card col-md-3 mb-2 me-2">
                    <a href="{{route('blog.show',['article'=>$item->id_art])}}">
                        <div class="card-body">
                            <p class="post-title"><span style="text-decoration: underline;">Sujet</span> : {{$item->title}}</p>
                            <p class="post-subtitle">{{ Illuminate\Support\Str::limit($item->body, $limit = 50, $end = '...') }}</p>
                        </div>
                        <div class="card-footer">
                            Posté par {{$item->nom}} {{$item->prenom}}
                            le {{ \Carbon\Carbon::parse($item->date_read)->format('d/m/Y') }}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection