@include('layout.header')
        <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-left">
        <li class="active"><a
                    href="{{url('index')}}"><span>A</span><span>C</span><span>A</span><span>S</span><span>Ă</span></a>
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
        <li class="active"><a href="#"><span>A</span><span>D</span><span>M</span><span>I</span><span>N</span></a>
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

        <h3 class="title">Admin - Meniul de control</h3>
        <div class="services-info">
        {{--

                <!-- case success -->
                <div class="modal fade" id="caseSuccess" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Notificare</h4>
                            </div>
                            <div class="modal-body">
                                <div class="contact-form">
                                    <h4>Cererea a fost procesată cu succes!<br><br><i style="font-size: 25px"
                                                                                      class="glyphicon glyphicon-ok-circle"></i>
                                    </h4>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Închide</button>
                            </div>
                        </div>
                    </div>
                </div>
        --}}
        <table style="width: 100%; margin-top: 5%;">
            <tr>
                <td style="margin-left: 5%">
                    <div class="servc-icon">
                        <a href="#addEdition" class="diamond" data-toggle="modal" data-target="#addEdition"><span
                                    class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                            <p class="servc-text">Adaugă număr</p>
                        </a>
                    </div>
                </td>
                <td>
                    <div class="servc-icon">
                        <a href="#" data-toggle="modal" data-target="#addArticle" class="diamond"><span
                                    class="glyphicon glyphicon-education" aria-hidden="true"></span>
                            <p class="servc-text">Adaugă articol</p>
                        </a>
                    </div>
                </td>
                <td>
                    <div class="servc-icon">
                        <a href="#" data-toggle="modal" data-target="#changePass" class="diamond"><span
                                    class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                            <p class="servc-text">Schimbă parola</p>
                        </a>
                    </div>
                </td>
                <td>
                    <div class="servc-icon">
                        <a href="#" data-toggle="modal" data-target="#changeMail" class="diamond"><span
                                    class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                            <p class="servc-text">Schimbă email</p>
                        </a>
                    </div>
                </td>
            </tr>
        </table>

        <div class="modal fade" id="addEdition" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Adaugă număr</h4>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form">
                            <form id="publication_form" method="POST" action="{{url("/create_publication")}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="text" id="publication_title" name="publication_title"
                                       placeholder="Numele numărului" required
                                       title="Completează te rog câmpul">
                                <input type="submit" name="btn" id="btn" value="Adaugă">
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Închide</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="addArticle" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Adaugă articol</h4>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form">
                            <form method="POST" action="{{url("/create_article")}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="text" name="article_title" class="article" placeholder="Titlul articolului"
                                       required
                                       title="Completează te rog câmpul">
                                <div class="clearfix"></div>
                                <input type="text" name="article_author" class="article"
                                       placeholder="Autorul articolului" required
                                       title="Completează te rog câmpul">
                                <div class="clearfix"></div>
                                <input type="text" name="article_institution" class="article"
                                       placeholder="Instituția articolului" required
                                       title="Completează te rog câmpul">
                                <div class="clearfix"></div>
                                <textarea class="article" name="article_description" placeholder="Descriere" required
                                          title="Completează te rog câmpul"></textarea>
                                <div class="clearfix"></div>
                                <textarea class="article" name="article_resume" placeholder="Rezumat" required
                                          title="Completează te rog câmpul"></textarea>
                                <div class="clearfix"></div>


            <span class="file-input btn btn-primary btn-file">
                Încarcă fișier&hellip; <input type="file" multiple>
            </span>
                                <input type="submit"
                                       value="Adaugă">
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Închide</button>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="servc-icon">
            <a href="#" class="diamond"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                <p class="servc-text">Adaugă banere</p>
            </a>
        </div>
        <div class="servc-icon">
            <a href="#" class="diamond"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                <p class="servc-text">Șterge banere</p>
            </a>
        </div>--}}


        <div class="modal fade" id="changePass" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Schimbă parola</h4>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form">
                            <form method="POST" action="{{url("/update_password")}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="text" name="oldPassword" placeholder="Parola precedentă" required
                                       title="Completează te rog câmpul">
                                <input type="text" name="newPassword" placeholder="Parola nouă" required
                                       title="Completează te rog câmpul">
                                <input type="submit"
                                       value="Schimbă">
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Închide</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="changeMail" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Schimbă email-ul</h4>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form">
                            <form method="POST" action="{{url("/update_email")}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="text" placeholder="Noul email" name="email" required
                                       title="Completează te rog câmpul">
                                <input type="submit"
                                       value="Schimbă">
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Închide</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

</div>
</div>
<!--//services-->
@include('layout.copyright')
</body>

</html>