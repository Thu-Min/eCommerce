@extends('admin.layout.app')

@section('content')
<div class="container-fluid mt-2">
        <div class="row">
            <div class="col-2">
                <div class="">
                    <h1>Product List</h1>
                </div>
            </div>
            <div class="offset-8 col-2">
                <a href="{{ route('admin#addProductPage') }}">
                    <button class="btn btn-primary me-0"><i class="fa-solid fa-plus"></i> Add New</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-2 mb-4">
            <!-- Card -->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.webp"
                        alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">Card title</h4>
                    <!--Text-->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-light-blue btn-md">Read more</button>

                    </div>

                </div>
            <!-- Card -->
            </div>

            <div class="col-2 mb-4">
            <!-- Card -->
            <div class="card">

                <!--Card image-->
                <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.webp"
                    alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                <!--Title-->
                <h4 class="card-title">Card title</h4>
                <!--Text-->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn btn-light-blue btn-md">Read more</button>

                </div>

            </div>
            <!-- Card -->
            </div>
            <div class="col-2 mb-4">
            <!-- Card -->
            <div class="card">

                <!--Card image-->
                <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.webp"
                    alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                <!--Title-->
                <h4 class="card-title">Card title</h4>
                <!--Text-->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn btn-light-blue btn-md">Read more</button>

                </div>

            </div>
            <!-- Card -->
            </div>
            <div class="col-2 mb-4">
            <!-- Card -->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.webp"
                        alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">Card title</h4>
                    <!--Text-->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-light-blue btn-md">Read more</button>

                    </div>

                </div>
            <!-- Card -->
            </div>
            <div class="col-2 mb-4">
                <!-- Card -->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.webp"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">Read more</button>

                        </div>

                    </div>
                <!-- Card -->
                </div>
                <div class="col-2 mb-4">
                    <!-- Card -->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.webp"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body">

                            <!--Title-->
                            <h4 class="card-title">Card title</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <button type="button" class="btn btn-light-blue btn-md">Read more</button>

                            </div>

                        </div>
                    <!-- Card -->
                    </div>
        </div>
</div>
@endsection
