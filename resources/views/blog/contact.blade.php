@extends('base_blog')

@section('title','Contact')
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url(data:image/jgep;base64,{{$contact->banniere}})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>{{$contact->text_1}}</h1>
                        <span class="subheading">{{$contact->text_2}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h1 class="text-center">Contactez-nous</h1>
                    <div class="my-5">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form action="{{route('blog.doContact')}}" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            @csrf
                            @if (session('success'))
                                <div class="container mt-2">
                                    <div class="alert alert-success alert-dismissible fade show alert-auto" style="padding-top:25px;padding-bottom:20px;" role="alert">
                                        <span class="text-center text-dark fs-6 mt-3">{{ session('success') }}</span>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="container mt-2">
                                    <div class="alert alert-success alert-dismissible fade show alert-auto" style="padding-top:25px;padding-bottom:20px;" role="alert">
                                        <span class="text-center text-dark fs-6 mt-3">{{ session('error') }}</span>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                            @endif
                            <div class="form-floating">
                                <input class="form-control" id="name" type="text"  name="fullname" placeholder="Entrer votre nom et prenom..." data-sb-validations="required" />
                                <label for="name">Nom & Prenom</label>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="email" type="email" name="email" placeholder="Entrer votre email..." data-sb-validations="required,email" />
                                <label for="email">Address Mail</label>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="phone" type="tel" name="tel" placeholder="Entrer votre numéro de téléphone..." data-sb-validations="required" />
                                <label for="phone">Numéro de téléphone</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="message" placeholder="Entrer votre message ici..." style="height: 12rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <br />
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection