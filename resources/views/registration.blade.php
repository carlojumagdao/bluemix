  <!DOCTYPE html>
  <html lang="en">
    <head>
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
    
    <div id="login-page" class="row">
        <div class="col s12 m8 l6 push-l3 z-depth-4 card-panel">
              <div class="row">
                  <div class="input-field col s12 center">
                    <h4>Register</h4>
                    <p class="center">Join to our community now !</p>
                  </div>
              </div> 
            <form class="login-form">
              <div class="row">
                <div class="col s4">
                  <div class="input-field col s12">
                    <i class="fa fa-user-circle fa-fw prefix"></i>
                    <input id="firstname" type="text">
                    <label for="firstname">First name</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="fa fa-user-circle fa-fw prefix"></i>
                    <input id="lastname" type="text">
                    <label for="lastname">Last Name</label>
                  </div>
                  <div class="col s12">
                    <form action="#">
                        <p>
                          <input name="group1" type="radio" id="test1" />
                          <label for="test1">Male</label>
                        </p>
                        <p>
                          <input name="group1" type="radio" id="test2" />
                          <label for="test2">Female</label>
                        </p>
                      </form>
                  </div>
                </div>

                <div class="col s4">
                  <div class="input-field col s12">
                    <i class="fa fa-user-circle fa-fw prefix"></i>
                    <input id="username" type="text">
                    <label for="username">Username</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="fa fa-envelope fa-fw prefix"></i>
                    <input id="email" type="email">
                    <label for="email">Email</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="fa fa-lock fa-fw prefix"></i>
                    <input id="password" type="password">
                    <label for="password">Password</label>
                  </div>
                </div>
                <div class="col s4">
                  <form action="#">
                    <div class="file-field input-field">
                      <div class="btn">
                        <span>File</span>
                        <input type="file" >
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" onchange="readURL(this);">
                        <img id="blah" src="#" alt="your image" />
                      </div>
                    </div>
                  </form>                  
                </div>
              </div>

              <div class="row">
                  <div class="input-field col s12">
                    <a href="http://demo.geekslabs.com/materialize/v3.1/index.html" class="btn waves-effect waves-light col s12">Register Now</a>
                  </div>
                  <div class="input-field col s12">
                    <p class="margin center medium-small sign-up">Already have an account? <a href="login.php">Login</a></p>
                  </div>
              </div>
            </form>
        </div>
    </div>

    @section('scripts')

      <script type="text/javascript">
        function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('#blah')
                      .attr('src', e.target.result)
                      .width(150)
                      .height(200);
              };

              reader.readAsDataURL(input.files[0]);
          }
      }
      </script>
    @endsection
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