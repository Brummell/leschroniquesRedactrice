@extends('base')

@section('title','ADMIN - Contact')
@section('content')
@if (session('success'))
    <div class="container mt-2">
        <div class="alert alert-success alert-dismissible fade show alert-auto" style="padding-top:25px;padding-bottom:20px;" role="alert">
            <span class="text-center text-dark fs-6 mt-3">{{ session('success') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif
<div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Page <b>contact</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="{{route('admin.contact.create')}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Ajouter une ligne</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Bannière</th>
                    <th>Texte 1</th>
                    <th>Sous texte</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="">					
                @foreach ($contact as $item)
                    <tr class="card-sel">
                        <td><img src="data:image/jpeg;base64,{{$item->banniere}}" width=25 height=25/></td>
                        <td>{{$item->text_1}}</td>
                        <td>{{$item->text_2}}</td>
                        <td class="d-flex">
                            <a href="{{route('admin.contact.edit',['contact'=>$item->id_contact])}}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <form action="{{route('admin.contact.destroy',['contact'=>$item->id_contact])}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="delete border-0 btn-light"><i class="material-icons" style="color:red;" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                            </form>
                            
                        </td>
                    </tr> 
                @endforeach
            </tbody>
        </table>
        <div class="clearfix">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-end" id="custom-pagination">
                    <li class="page-item previous">
                    
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>        
</div>

@endsection
@section('scripts')
$(document).ready(function() {
    var $jeux = $(".card-sel");
    var itemsPerPage = 2;
    var totalPages = Math.ceil($jeux.length / itemsPerPage);

    // Générer les liens de pagination
    var $pagination = $("#custom-pagination");
    var $prevPage = $("<li class='page-item previous'><a class='page-link' href='#' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>");
    $pagination.append($prevPage);

    for (var page = 1; page <= totalPages; page++) {
        var $pageLink = $("<li class='page-item'><a class='page-link' href='#'>" + page + "</a></li>");
        $pagination.append($pageLink);
    }

    var $nextPage = $("<li class='page-item next'><a class='page-link' href='#' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>");
    $pagination.append($nextPage);

    // Afficher la première page au chargement
    showPage(1);

    // Gérer le clic sur les liens de pagination
    $pagination.on("click", "a", function(e) {
        e.preventDefault();
        var page = $(this).text();
        if (!isNaN(page)) {
            showPage(parseInt(page));
        } else if ($(this).is($prevPage.find("a"))) {
            showPage(Math.max(1, parseInt($pagination.find(".active a").text()) - 1));
        } else if ($(this).is($nextPage.find("a"))) {
            showPage(Math.min(totalPages, parseInt($pagination.find(".active a").text()) + 1));
        }
    });

    // Fonction pour afficher une page donnée
    function showPage(page) {
        $pagination.find("li").removeClass("active");
        $pagination.find("li:contains(" + page + ")").addClass("active");

        var startIndex = (page - 1) * itemsPerPage;
        var endIndex = startIndex + itemsPerPage;

        $jeux.hide().slice(startIndex, endIndex).show();
    }

});
@endsection