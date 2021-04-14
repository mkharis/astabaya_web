<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="/css/materialize.css"  media="screen,projection"/>
  <!-- Import MDI Icon -->
  <link href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css" rel="stylesheet">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>@yield('title')</title>
</head>

<body>
  <header>

    <nav>
      <div class="nav-wrapper">
        <ul id="nav-mobile" class="left">
          <li><a href="/" style="font-size: 2.1rem; padding: 0 1rem 0 1rem;">ASTABAYA</a></li>
        </ul>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="/tabel">Tabel</a></li>
          <li><a href="/publikasi">Publikasi</a></li>
          <li><a href="/lainnya">Lainnya</a></li>
        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li>
            <div class="right row">
              <div class="col s12" >
                <div class="row">
                  <div class="input-field col s12">
                    <i class="white-text material-icons prefix">search</i>
                    <input id="search-input" type="text" class="white-text" placeholder="cari">
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <nav class="z-depth-0" style="background-color:rgba(0,0,0,0.0);">
      <div class="nav-wrapper">
        <div class="col s12" style="padding-left:10px">
          @yield('breadcrumb')
        </div>
      </div>
    </nav>

  </header>

  @yield('main')

  <footer>

  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="/js/materialize.js "></script>
  <script type="text/javascript">

    M.AutoInit();

        // Collapsible
        $(document).ready(function(){
          $('.collapsible').collapsible();
        });

        // Collapsible Expandable
        // var elem = document.querySelector('.collapsible.expandable');
        // var instance = M.Collapsible.init(elem, {
        //   accordion: false
        // });

      </script>
    </body>
    </html>