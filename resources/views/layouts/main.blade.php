<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-type" content="text/html; charset=UTF-8 ">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
      <title>@yield ('title')</title>
      <!--Import Google Icon Font-->
      <!--Import jQuery before materialize.js-->
      <meta name="csrf_token" content="{{ csrf_token() }}" />
      <script type="text/javascript" src="{!! URL::asset('../js/jquery-2.1.1.min.js') !!}"></script>
      <script type="text/javascript" src="{!! URL::asset('../js/materialize.min.js') !!}"></script>
      <script type="text/javascript" src="{!! URL::asset('../js/prism.js') !!}"></script>
      <script type="text/javascript" src="{!! URL::asset('../js/custom-min.js') !!}"></script>
      <script type="text/javascript" src="{!! URL::asset('../js/plugin-min.js') !!}"></script>
      <script type="text/javascript" src="{!! URL::asset('../js/perfect-scrollbar.min.js') !!}"></script>
      <script type="text/javascript" src="{!! URL::asset('../js/jquery.magnific-popup.min.js') !!}"></script>
      <script type="text/javascript" src = "{!! URL::asset('../js/process/registration.js') !!}"></script>
      
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/materialize.min.css') !!}" media="screen,projection">
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/prism.css') !!}">
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/custom-min.css') !!}">
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/plugin-min.css') !!}">
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/perfect-scrollbar.css') !!}">
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/magnific-popup.css') !!}">
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/font-awesome.min.css') !!}">
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/hover-min.css') !!}">
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/jquery.dataTables.min.css') !!}">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <div>
      @yield('userNav')
    </div>

    <div class="col s12 m8 l12">
      <!-- Dropdown Structure -->
      <nav class="teal">
        <div class="nav-wrapper">
          <div class="col s12">
          <a href="index.php" class="brand-logo">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="http://demo.geekslabs.com/materialize/v3.1/sass.html">About</a></li>
            <!-- Dropdown Trigger -->
            <li style="width: 150px;"><a class="dropdown-button" href="" data-activates="dropdownEvents">Events<i class="fa fa-angle-down left"></i></a>
              <ul id="dropdownEvents" class="dropdown-content">
                <li style="width: 150px;"><a href="">Earthquake</a></li>
                <li><a href="">Fire</a></li>
                <li><a href="">Flood</a></li>
                <li><a href="">Storm</a></li>
              </ul>
            </li>
            </li>
            <li><a id = 'btnLogout'>Logout</a></li>
          </ul>
          </div>
        </div>
      </nav>
    </div>


    <div>
      @yield('body')
    </div>

    @yield('scripts')
    <script type="text/javascript" src = "{!! URL::asset('../js/process/main.js') !!}"></script>
    </body>
  </html>