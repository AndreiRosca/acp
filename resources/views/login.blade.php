@include('layout.header')
        <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-left">
        <li><a href="{{url('index')}}"
               class="link link--yaku"><span>A</span><span>C</span><span>A</span><span>S</span><span>Ă</span></a>
        </li>
        <li><a href="{{url('search')}}"
               class="link link--yaku"><span>C</span><span>Ă</span><span>U</span><span>T</span><span>A</span><span>R</span><span>E</span></a>
        </li>
        <li><a href="{{url('list')}}"
               class="link link--yaku"><span>L</span><span>I</span><span>S</span><span>T</span><span>A</span>
                <span>L</span><span>U</span><span>C</span><span>R</span><span>Ă</span><span>R</span><span>I</span></a>
        </li>
        <li><a href="{{url('about')}}"
               class="link link--yaku"><span>D</span><span>E</span><span>S</span><span>P</span><span>R</span><span>E</span></a>
        </li>
        <li><a href="{{url('contacts')}}"
               class="link link--yaku"><span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span><span>E</span></a>
       <li>
	   </li>
    </ul>
    <div class="clearfix"></div>
</div>


</div>
<div class="clearfix"></div>
</div>
</nav>
</div>

<div class="services">
    <div class="container">
        <h3 class="title">Admin - Logare</h3>

        <div class="contact-form">

            <form method="post">
                <div class="col-centered">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input style="    float: none;
    margin: 10px auto;" type="text" name="email" class="article" placeholder="Email"
                       required
                       title="Completează te rog câmpul">
                <div class="clearfix"></div>
                <input style="    float: none;
    margin: 10px auto;" type="password" name="password" class="article"
                       placeholder="Parola" required
                       title="Completează te rog câmpul">
                    </div>
                <div class="clearfix"></div>



                <input type="submit"
                       value="Logare">
            </form>
        </div>
</div>
</div>
<!--//services-->
@include('layout.copyright')
</body>

</html>