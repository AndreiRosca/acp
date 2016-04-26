@include('layout.header')
        <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-left">

        <li><a class="link link--yaku"
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
        <li><a href="{{url('contacts')}}"
               class="link link--yaku"><span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span><span>E</span></a>
        </li>
{{--       --}}
        <li></li>
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
                </tr>
                <tr>
                    <td>
                        <div class="servc-icon">
                            <a href="#" data-toggle="modal" data-target="#changeMail" class="diamond"><span
                                        class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                <p class="servc-text">Schimbă email</p>
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="servc-icon">
                            <a href="#" data-toggle="modal" data-target="#addBanner" class="diamond"><span
                                        class="glyphicon glyphicon-eye-open"
                                        aria-hidden="true"></span>
                                <p class="servc-text">Adaugă banere</p>
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="servc-icon">
                            <a href="#" data-toggle="modal" data-target="#deleteBanner" class="diamond"><span class="glyphicon glyphicon-eye-close"
                                                              aria-hidden="true"></span>
                                <p class="servc-text">Șterge banere</p>
                            </a>
                        </div>
                    </td>
                </tr>


            </table>
            <table style="width: 100%;">
                <tr>
                    <td>
                        <div class="servc-icon">
                            <a href="{{url('/logout')}}" class="diamond"><span
                                        class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                <p class="servc-text">Ieșire din admin</p>
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
                                <form method="POST" action="{{url("/create_article")}}" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input class="form-control" type="text" name="romanian_title" class="article"
                                           placeholder="Titlul articolului"
                                           required
                                           title="Completează te rog câmpul">
                                    <div class="clearfix"></div>
                                    <br>
                                    <input class="form-control" type="text" name="authors" class="article"
                                           placeholder="Autorul articolului" required
                                           title="Completează te rog câmpul">
                                    <div class="clearfix"></div>
                                    <br>
                                    <input class="form-control" type="text" name="institution" class="article"
                                           placeholder="Instituția articolului" required
                                           title="Completează te rog câmpul">
                                    <div class="clearfix"></div>
                                    <br>
                                    <div class="form-control" class="col-md-2 selectContainer" style="padding: 0px;">
                                        <select class="form-control col-md-2" name="publication_id">
                                            <optgroup label="Alege număr">
                                                @foreach($publicationList as $publication)
                                                    <option value="{{$publication['id']}}">{{$publication['publication_title']}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <br>
                                <textarea class="form-control" class="article" name="romanian_description"
                                          placeholder="Descriere" required
                                          title="Completează te rog câmpul"></textarea>
                                    <div class="clearfix"></div>
                                    <br>
                                <textarea class="form-control" class="article" name="article_resume"
                                          placeholder="Rezumat" required
                                          title="Completează te rog câmpul"></textarea>
                                    <div class="clearfix"></div>
                                    <br>



            <span class="file-input btn btn-primary btn-file">
                Încarcă fișier&hellip; <input type="file" name="file_name">
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
            {{----}}


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

            <div class="modal fade" id="addBanner" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Adaugă banner</h4>
                            <p>Imaginea încărcată trebuie să fie de dimensiunea 200x200px!</p>
                        </div>
                        <div class="modal-body">
                            <div class="contact-form">
                                <form method="POST" action="{{url("/insert_ad")}}" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <select class="form-control col-md-2" name="empty_banner_id">
                                        @if (count($freeAdList) == 0)
                                            <optgroup label="Nu sunt locuri de plasare disponibile">
                                            </optgroup>
                                        @else
                                            <optgroup label="Alege locul de plasare disponibil">
                                                @foreach ($freeAdList as $ad)
                                                    <option value="{{$ad['id']}}">Img{{$ad['id']}}</option>
                                                @endforeach
                                            </optgroup>
                                        @endif
                                    </select>
                                    <input type="text" name="link_of_banner" placeholder="Linkul dorit" required
                                           title="Completează te rog câmpul">
                                    <span class="file-input btn btn-primary btn-file">
                Încarcă imagine&hellip; <input type="file" name="new_banner_name">
            </span>
                                    @if (count($freeAdList) == 0)
                                        <input type="submit"
                                           value="Adaugă" disabled="disabled">
                                    @else
                                        <input type="submit"
                                               value="Adaugă">
                                        @endif
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Închide</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="deleteBanner" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Șterge banner</h4>
                        </div>
                        <div class="modal-body">
                            <div class="contact-form">
                                <form method="POST" action="{{url("/delete_ad")}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <select class="form-control col-md-2" name="existent_banner_id">
                                        @if (count($busyAdList) == 0)
                                            <optgroup label="Nu sunt banere ce pot fi șterse">
                                            </optgroup>
                                        @else
                                            <optgroup label="Alege banner-ul ce urmează a fi șters">
                                                @foreach ($busyAdList as $ad)
                                                    <option value="{{$ad['id']}}">Img{{$ad['id']}}</option>
                                                @endforeach
                                            </optgroup>
                                        @endif
                                    </select>
                                    @if (count($busyAdList) == 0)
                                        <input type="submit"
                                           value="Șterge" disabled="disabled">
                                    @else
                                        <input type="submit"
                                               value="Șterge">
                                    @endif
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