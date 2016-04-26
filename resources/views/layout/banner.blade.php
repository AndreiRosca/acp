<div class="general">
    <div class="projects">
        <div class="container">
            <div class="col-md-3 project-right ">
                <h3 class="title">Partenerii <span> Noștri</span></h3>
                <p>Ei sunt mereu alături de noi.
                   <br>
                    Aici poate fi publicitatea ta!
                    <br>
                    Pentru mai multe informații <a href="{{url('contacts')}}"> contactează-ne </a>.
                </p>
            </div>
            <div class="col-md-9 project-left">
                <!-- flex-slider -->
                <div class="work-bottom">
                    <div class="nbs-flexisel-container">
                        <div class="nbs-flexisel-inner">
                            <ul id="flexiselDemo1" class="nbs-flexisel-ul" style="left: -285px; display: block;">
                                @foreach ($adList as $ad)
                                    <li class="nbs-flexisel-item" style="width: 285px;">
                                        <div class="project-grids">
                                            <a href="{{$ad['ad_href']}}" target="_blank">
                                                <img src="{{url('/getAdImage/' . $ad['ad_image_file_name'])}}" alt="">
                                            </a>
                                            <div class="team-bottom">
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                <!--
                                <li class="nbs-flexisel-item" style="width: 285px;">
                                    <div class="project-grids">
                                        <a href="#" target="_blank" name="link_of_banner1">
                                            <img src="{{asset('images/img1.jpg')}}" name="image_of_banner1" alt="">
                                        </a>
                                        <div class="team-bottom">
                                        </div>
                                    </div>
                                </li>
                                <li class="nbs-flexisel-item" style="width: 285px;">
                                    <div class="project-grids">
                                        <a href="#" target="_blank" name="link_of_banner2">
                                            <img src="{{asset('images/img2.jpg')}}" name="image_of_banner2" alt="">
                                        </a>
                                        <div class="team-bottom">
                                        </div>
                                    </div>
                                </li>
                                <li class="nbs-flexisel-item" style="width: 285px;">
                                    <div class="project-grids">
                                        <a href="#" target="_blank" name="link_of_banner3">
                                            <img src="{{asset('images/img3.jpg')}}" name="image_of_banner3" alt="">
                                        </a>
                                        <div class="team-bottom">
                                        </div>
                                    </div>
                                </li>
                                <li class="nbs-flexisel-item" style="width: 285px;">
                                    <div class="project-grids">
                                        <a href="#" target="_blank" name="link_of_banner4">
                                            <img src="{{asset('images/img4.jpg')}}" name="image_of_banner4" alt="">
                                        </a>
                                        <div class="team-bottom">
                                        </div>
                                    </div>
                                </li>
                                <li class="nbs-flexisel-item" style="width: 285px;">
                                    <div class="project-grids">
                                        <a href="#" target="_blank" name="link_of_banner5">
                                            <img src="{{asset('images/img5.jpg')}}" name="image_of_banner5" alt="">
                                        </a>
                                        <div class="team-bottom">
                                        </div>
                                    </div>
                                </li>
                                <li class="nbs-flexisel-item" style="width: 285px;">
                                    <div class="project-grids">
                                        <a href="#" target="_blank" name="link_of_banner6">
                                            <img src="{{asset('images/img6.jpg')}}" name="image_of_banner6" alt="">
                                        </a>
                                        <div class="team-bottom">
                                        </div>
                                    </div>
                                </li>
                                <li class="nbs-flexisel-item" style="width: 285px;">
                                    <div class="project-grids">
                                        <a href="#" target="_blank" name="link_of_banner7">
                                            <img src="{{asset('images/img7.jpg')}}" name="image_of_banner7" alt="">
                                        </a>
                                        <div class="team-bottom">
                                        </div>
                                    </div>
                                </li>
                                <li class="nbs-flexisel-item" style="width: 285px;">
                                    <div class="project-grids">
                                        <a href="#" target="_blank" name="link_of_banner8">
                                            <img src="{{asset('images/img8.jpg')}}" name="image_of_banner8" alt="">
                                        </a>
                                        <div class="team-bottom">
                                        </div>
                                    </div>
                                </li>
                                <li class="nbs-flexisel-item" style="width: 285px;">
                                    <div class="project-grids">
                                        <a href="#" target="_blank" name="link_of_banner9">
                                            <img src="{{asset('images/img9.jpg')}}" name="image_of_banner9" alt="">
                                        </a>
                                        <div class="team-bottom">
                                        </div>
                                    </div>
                                </li>
                                <li class="nbs-flexisel-item" style="width: 285px;">
                                    <div class="project-grids">
                                        <a href="#" target="_blank" name="link_of_banner10">
                                            <img src="{{asset('images/img10.jpg')}}" name="image_of_banner10" alt="">
                                        </a>
                                        <div class="team-bottom">
                                        </div>
                                    </div>
                                </li>
                                -->
                            </ul>
                            <div class="nbs-flexisel-nav-left" style="top: 138px;"></div>
                            <div class="nbs-flexisel-nav-right" style="top: 138px;"></div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(window).load(function () {
                            $("#flexiselDemo1").flexisel({
                                visibleItems: 4
                                , animationSpeed: 1000
                                , autoPlay: true
                                , autoPlaySpeed: 3000
                                , pauseOnHover: true
                                , enableResponsiveBreakpoints: true
                                , responsiveBreakpoints: {
                                    portrait: {
                                        changePoint: 480
                                        , visibleItems: 2
                                    }
                                    , landscape: {
                                        changePoint: 640
                                        , visibleItems: 3
                                    }
                                    , tablet: {
                                        changePoint: 768
                                        , visibleItems: 3
                                    }
                                }
                            });

                        });
                    </script>
                    <script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>
                    <!-- //flex-slider -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>