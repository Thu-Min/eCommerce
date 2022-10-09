@extends('customer.layout.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-body">
                    <section class="mb-4">
                        @if (Session::has('sent'))
                        <div class="alert alert-success alert-dismissible fade show p-3" role="alert">
                            {{ Session::get('sent') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <h1 class="fs-1 font-weight-bold text-center my-4">Contact us</h1>
                        <p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod porro, maxime architecto magni reiciendis ratione officiis veniam assumenda? Facere est optio quaerat sapiente mollitia alias quisquam tempora numquam libero saepe!</p>

                        <div class="row">

                            <div class="col-md-9 mb-md-0 mb-5">
                                <form id="contact-form" name="contact-form" action="{{ route('user#contact') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="name" class="">Your name</label>
                                                <input type="text" id="name" name="name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="email" class="">Your email</label>
                                                <input type="email" id="email" name="email" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <label for="message">Your message</label>
                                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center text-md-left mt-5">
                                        <button class="btn btn-lg btn-dark" type="submit">Send</button>
                                    </div>
                                </form>
                                <div class="">
                                    <a href="{{ route('user#home') }}">
                                        <button class="btn btn-primary btn-sm" type="butotn">Back</button>
                                    </a>
                                </div>
                                <div class="status"></div>
                            </div>
                            <div class="col-md-3 text-center">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="https://goo.gl/maps/Gd368TKdEht2phZ56" target="_blank"><i class="fas fa-map-marker-alt fa-2x text-dark"></i></a>
                                        <p>Insein, Yangon</p>
                                    </li>

                                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                        <p>+959 976927749</p>
                                    </li>

                                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                        <p>minnt5637@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
