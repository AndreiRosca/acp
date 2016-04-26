@include('layout.header')
        <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-left">
        <li ><a class="link link--yaku"
                    href="{{url('index')}}"><span>A</span><span>C</span><span>A</span><span>S</span><span>Ă</span></a>
        </li>

        <li><a href="{{url('search')}}" class="link link--yaku"><span>C</span><span>Ă</span><span>U</span><span>T</span><span>A</span><span>R</span><span>E</span></a>
        </li>
        <li class="active"><a href="{{url('list')}}"
               ><span>L</span><span>I</span><span>S</span><span>T</span><span>A</span>
                <span>L</span><span>U</span><span>C</span><span>R</span><span>Ă</span><span>R</span><span>I</span></a>
        </li>
        <li><a href="{{url('about')}}"
               class="link link--yaku"><span>D</span><span>E</span><span>S</span><span>P</span><span>R</span><span>E</span></a>
        </li>
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



<h3 class="titleBody text-center">Lista de <span>lucrări</span></h3>
@foreach ($articleList as $article)
<div class="publicationTitle">
    <div class="publicationTitle-top">
        <h4>{{$article['title']}}, {{$article['publication_date']}}</h4>
    </div>
</div>

@foreach($article['articleList'] as $a)
<div class="general">
    <div class="col-md-12 about-grids">

            <div class="publication">
                <div class="publication-top">
                    <h4><b> {{$a['romanian_title']}}  </b></h4>
                </div>
                <div class="publication-bottom">
                    <h5><b>Autor(i) : </b>{{$a['authors']}}</h5>
                    <h5><b>Instituție(i) : </b>{{$a['institution']}}</h5>
                    <div class="icon">
                        <a href="{{url('/getArticle/')}}/{{$a['article_file_name']}}"
                           target="_blank" class="glyphicon glyphicon-print" aria-hidden="true">
                        </a>
                    </div>
                    <h5><b>Rezumat : </b><br></h5>
                    <p>{{$a['article_resume']}}</p>
                </div>
            </div>

    </div>
</div>
@endforeach

<div class="clearfix"></div>
</div>
@endforeach

@include('layout.banner')
@include('layout.footer')
@include('layout.copyright')
</body>

</html>