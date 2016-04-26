@include('layout.header')
        <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-left">
        <li class="active"><a
                    href="{{url('index')}}"><span>A</span><span>C</span><span>A</span><span>S</span><span>Ă</span></a>
        </li>

        <li><a href="{{url('search')}}" class="link link--yaku"><span>C</span><span>Ă</span><span>U</span><span>T</span><span>A</span><span>R</span><span>E</span></a>
        </li>
        <li><a href="{{url('list')}}"
               class="link link--yaku"><span>L</span><span>I</span><span>S</span><span>T</span><span>A</span>
                <span>L</span><span>U</span><span>C</span><span>R</span><span>Ă</span><span>R</span><span>I</span></a>
        </li>
        <li><a href="{{url('about')}}"
               class="link link--yaku"><span>D</span><span>E</span><span>S</span><span>P</span><span>R</span><span>E</span></a>
        </li>
        <!-- <li><a href="#" class="dropdown-toggle link link--yaku" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>G</span><span>A</span><span>L</span><span>E</span><span>R</span><span>I</span><span>I</span><span class="caret"></span></a>
             <ul class="dropdown-menu">
                 <li><a class="hvr-bounce-to-bottom" href="gallery.php">Gallery1</a></li>
                 <li><a class="hvr-bounce-to-bottom" href="gallery.php">Gallery2</a></li>
                 <li><a class="hvr-bounce-to-bottom" href="gallery.php">Gallery3</a></li>
             </ul>
         </li>-->
        <li><a href="{{url('contacts')}}"
               class="link link--yaku"><span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span><span>E</span></a>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>
</div>
<div class="clearfix"></div>
</div>
</nav>
</div>

<div class="banner">
    <div class="container">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="banner-info">
                            <h3 class="titleImage">Suntem medici bravo!</h3>
                            <p class="titleImage">Da chiar suntem</p>
                            <a href="{{url('about')}}" class="effect6">Află mai multe...</a>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info">
                            <h3 class="titleImage">Suntem medici deștepți!</h3>
                            <p class="titleImage">Fără nici o întrebare...</p>
                            <a href="{{url('about')}}" class="effect6">Află mai multe...</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!-- FlexSlider -->
    <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
    <script type="text/javascript">
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide"
                , start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //FlexSlider -->
</div>
<div class="general">
    <div class="col-md-3 about-grids">
        <div class="offic-time">
            <div class="time-top">
                <h4>Orele de lucru :</h4>
            </div>
            <div class="time-bottom">
                <h5>Luni-Vineri:10am-9pm </h5>
                <h5>Sambata-Duminica:11am-4pm</h5>
                <p>Suntem mereu la dispoziția dumnevoastră. </p>
            </div>
        </div>
        <div class="general">
            <div class="arch">
                <div class="arch-top">
                    <h4> Arhivă </h4>
                </div>
                <div class="arch-bottom">
                    <div class="treeview" data-role="treeview">
                        <ul>
                            @foreach ($publications as $publication)
                            <li class="node collapsed">
                                <span class="glyphicon glyphicon-triangle-right"></span>
                                <span class="leaf"> {{$publication['publication_date']}} </span>
                                <ul>
                                    @foreach ($publication['titleList'] as $title)
                                    <li>
                                        <span class="leaf"><span class="glyphicon glyphicon-folder-close"></span>
                                            <span onclick="location.href='{{url('/list/' . $title['id'])}}'">{{$title['title']}}</span></span>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
</div>

<div class="general">
    <div class="col-md-9 about-grids">
        @foreach($articleList as $article)
            <div class="publication">
                <div class="publication-top">
                    <h4><b> {{$article['romanian_title']}}</b></h4>
                </div>
                <div class="publication-bottom">
                    <h5><b>Autor(i) : </b>{{$article['authors']}} </h5>
                    <h5><b>Instituție(i) : </b>{{$article['institution']}} </h5>
                    <div class="icon">
                        <a href="{{url('/getArticle/')}}/{{$article['article_file_name']}}"
                           target="_blank" class="glyphicon glyphicon-print" aria-hidden="true">
                        </a>
                    </div>
                    <h5><b>Descriere : </b><br></h5>
                    <p>{{$article['romanian_description']}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="clearfix"></div>
</div>


@include('layout.banner')
@include('layout.footer')
@include('layout.copyright')
</body>

</html>