  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-type" content="text/html; charset=UTF-8 ">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
      <title>@yield ('title')</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/prism.css">
      <link rel="stylesheet" type="text/css" href="css/custom-min.css">
      <link rel="stylesheet" type="text/css" href="css/plugin-min.css">
      <link rel="stylesheet" type="text/css" href="css/perfect-scrollbar.css">
      <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> 
      <link rel="stylesheet" type="text/css" href="css/hover.min.css">
      <link rel="stylesheet" type="text/css" href="styles.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <div class="col s12 m8 l9"> <!-- START FIRST NAV -->
      <!-- Dropdown Structure -->
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!"><i class="fa fa-gear left"></i>Settings</a></li>
        <li class="divider"></li>
        <li><a href="#!"><i class="fa fa-sign-out left"></i>Logout</a></li>
      </ul>
      <nav class="teal">
        <div class="nav-wrapper">
          <div class="col s12">
          <ul class="right hide-on-med-and-down">
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="fa fa-user-circle-o left"></i>Dropdown</a>
            </li>
          </ul>
          </div>
        </div>
      </nav>
    </div> <!-- END FIRST NAV -->

    <div class="col s12 m8 l9"> <!-- START SECOND NAV -->
      <nav class="green">
        <div class="nav-wrapper">
          <div class="col s12">
          <a href="#!" class="brand-logo">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html"><i class="fa fa-dashboard left"></i>Dashboard</a>
            </li>
            <li><a href="components.html"><i class="fa fa-plus left"></i>Add Event</a>
            </li>
          </ul>
          </div>
        </div>
      </nav>
    </div>  <!-- END SECOND NAV -->

    <div>
      @yield('dashboard')
    </div>

    @yield('scripts')

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/prism.js"></script>
      <script type="text/javascript" src="js/custom-min.js"></script>
      <script type="text/javascript" src="js/plugin-min.js"></script>
      <script type="text/javascript" src="js/perfect-scrollbar.js"></script>
      <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    </body>
  </html>