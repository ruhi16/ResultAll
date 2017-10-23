<div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide" style="width: 600px; margin: 0 auto">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" ></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="{{url('img/slide-1.jpg')}}" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="{{url('img/slide-2.jpg')}}" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="{{url('img/slide-3.jpg')}}" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h6 class="brand-name">Result Automation</h6>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>RA Software..</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->


    <!-- jQuery -->
    <script src="{{url('jQ/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('bs337/js/bootstrap.min.js')}}"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
    </script>







