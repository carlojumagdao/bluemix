  <!DOCTYPE html>
  <html lang="en">
    <head>
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
    </head>

    <body style="background-image: url(/img/wallpaper2.jpg);">
    
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
                        <p>
                          <input name="gender" type="radio" id="test1" class = "with-gap" value = 1 checked="checked" />
                          <label for="test1">Male</label>
                        </p>
                        <p>
                          <input name="gender" type="radio" id="test2" class = "with-gap" value = 0 />
                          <label for="test2">Female</label>
                        </p>
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
                    <a class="btn waves-effect waves-light col s12 green lighten-1" id = 'btnRegister'>Register Now</a>
                  </div>
                  <div class="input-field col s12">
                    <p class="margin center medium-small sign-up">Already have an account? <a href="/login">Login</a></p>
                  </div>
              </div>
            </form>
        </div>
    </div>

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
    </body>
  </html>