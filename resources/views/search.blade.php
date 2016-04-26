@include('layout.header')
        <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-left">
        <li><a href="{{url('index')}}"
               class="link link--yaku"><span>A</span><span>C</span><span>A</span><span>S</span><span>Ă</span></a></li>
        <li class="active"><a href="{{url('search')}}"
            ><span>C</span><span>Ă</span><span>U</span><span>T</span><span>A</span><span>R</span><span>E</span></a>
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
    </ul>
    <div class="clearfix"></div>
</div>
</div>
<div class="clearfix"></div>
</div>
</nav>
</div>

<script>
    var array = [];

    $(document).ready(function () {

        $('#search').keyup(function () {

            var search = $('#search').val();
            var searchCriteria = $('#criteria').val();
            var searchMode = $('#mode').val();

            $.ajax({
                url: '{{url("/search_handler")}}'
                , data: {
                    search: search,
                    criteria : searchCriteria,
                    mode : searchMode
                }
                , type: 'GET'
                , success: function (data) {
                    if (!data.error) {
                        //$('#result').html(data);
                        parseFunction(data);
                    }

                }

            });
        })
    })
</script>

<script>


function parseFunction(response) {
    array = JSON.parse(response)
    var out = "";
    var i;

    out += "<div class=\"alert alert-success\" style=\"font-size: 15px;\">" + array.length + " articole găsite. </div>"

    for (i = 0; i < array.length; i++) {
        out += "<div class=\"general\"><div class=\"col-md-12 about-grids\"><div class=\"publication\"><div class=\"publication-top\"><h4><b>" + array[i].romanian_title + "</b></h4> </div> <div class=\"publication-bottom\"> <h5><b>Autor(i) : </b>" + array[i].authors + "</h5> <h5><b>Instituție(i) : </b>" + array[i].institution + "</h5> <div class=\"icon\"> <a href=\"" + array[i].article_file_name + "\"target=\"_blank\" class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"> </a> </div> <h5><b>Descriere : </b><br></h5> <p>" + array[i].romanian_description + "</p><h5><b>Rezumat : </b><br></h5> <p>" + array[i].article_resume + "</p> </div> </div> </div> </div>";

    }

    $('#result').html(out);
}

</script>

<div class="row" style="margin-left: 50px; margin-right: 50px;">
    <h3 class="titleBody text-center">Caută prin <span>lucrările</span> existente</h3>

    <input class='form-control' type="text" name='search' id='search' placeholder='Scrie aici...'>
    <div class="form-group">
        <br>
        <label style="margin-bottom: 10px;" class="col-md-2 control-label">Criterii de căutare</label>
        <div class="col-md-5 selectContainer">
            <select class="form-control" name="size" id="criteria">
                <optgroup label="Alege criteriu"></optgroup>
                <option value="authors">Autori</option>
                <option value="romanian_title">Titlu</option>
                <option value="article_resume">Rezumat</option>
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="form-group">
        <br>
        <label style="margin-bottom: 10px;" class="col-md-2 control-label">Mod de căutare</label>
        <div class="col-md-5 selectContainer">
            <select class="form-control" name="size" id="mode">
                <optgroup label="Alege mod de căutare"></optgroup>
                <option value="and">ȘI</option>
                <option value="or">SAU</option>
            </select>
        </div>
    </div>

    <br>
    <br>


    <div class="result" id="result">


        </div>
</div>
@include('layout.footer')
@include('layout.copyright')
</body>

</html>