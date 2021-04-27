<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Import Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href={{ url("css/materialize.css") }} media="screen,projection"/>
  <!-- Import MDI Icon -->
  <link href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css" rel="stylesheet">
  <!-- Import Jquery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>@yield('title')</title>

  <style>
    body {
      font-family: 'Josefin Sans', sans-serif;
    }
  </style>
</head>

<body>
  <header>

    <div class="navbar-fixed">
      <nav>
        <div class="container">
          <div class="nav-wrapper">
            <a href="{{ route("kategori") }}" style="font-size: 2.1rem; padding: 0 1rem 0 1rem;">ASTABAYA</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              {{-- <li><a href="{{ route("beranda") }}">Beranda</a></li> --}}
              <li><a href="{{ route("kategori") }}">Kategori</a></li>
              <li><a href="{{ route("publikasi") }}">Publikasi</a></li>
              <li><a href="{{ route("infografis") }}">Infografis</a></li>
              <li><a href="{{ route("lainnya") }}">Lainnya</a></li>
              <li><a onclick="logout()" style="display: flex;"><span>Keluar</span><i class="material-icons">exit_to_app</i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <nav class="z-depth-0" style="background-color:rgba(0,0,0,0.0);">
      <div class="container">
        <div class="nav-wrapper">
          <div class="col s12" style="padding-left:10px">
            @yield('breadcrumb')
          </div>
        </div>
      </div>
    </nav>

  </header>

  @yield('main')

  <footer>

  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="/js/materialize.js "></script>
  <script type="text/javascript">
    $(document).ready(function(){
      M.AutoInit();

      $('.modal').modal({
          dismissible: false,
          preventScrolling: false,
        }
      );

      $('#listInfografi').on('click', '.modal-trigger', function() {
        var infografis_id = $(this).data('id');
        var judul = $(this).parents('#' + infografis_id).children('.judul').data('judul');
        var img = $(this).parents('#' + infografis_id).children('.img').data('img');
        
        if(infografis_id) {
          // Fill Infografis Id
          $('input#infografis_id.validate.edit-infografis').val(infografis_id);
          // Fill Infografis Judul
          $('input#judul.validate.edit-infografis').val(judul);
          $('label#judul.edit-infografis', function() {
            M.updateTextFields();
          });
        }
      })
    })
    let url = window.location.href;
    let splited_url = url.split('?token=');
    window.token = splited_url[1];

    $('a').click(function(event) {
      event.preventDefault();
      let url = $(this).attr('href');
      if (url) {
        window.location.href = url + "?token=" + window.token;
      }
    });

    function logout() {
      $.post('/auth/logout?token=' + window.token)
      .done(function (data) {
        M.toast({html: data.message});
        window.location.href = '/?token=' + window.token
      })
      .fail(function(error){
        console.log(error);
      });
    }

  </script>
</body>
</html>