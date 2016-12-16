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
      <script type="text/javascript" src = "{!! URL::asset('../js/process/game.js') !!}"></script>
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
      <link rel="stylesheet" type="text/css" href="{!! URL::asset('../css/media-hover-effects.css') !!}">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      
<!-- PROPOSED DESIGN
    <div class="col s12 m6 grid">
      <figure class="effect-marley">
        <img src="img/10.jpg" alt="img12">
        <figcaption>
          <h2>Sweet <span>Marley</span></h2>
          <p>Marley tried to convince her but she was not interested.</p>
          <a href="http://demo.geekslabs.com/materialize/v3.1/media-hover-effects.html#">View more</a>
        </figcaption>     
      </figure>
    </div>
      PROPOSED DESIGN -->

    <div class="row center">
      <div class="col s12 m8 l4 push-l4">
        <div class="card">
          <div class="card-image">
            <img src="{!! URL::asset('../img/10.jpg') !!}">
          </div>
          <div class="card-content">
            <p id = 'strQuestion' >test12345 question</p>
          </div>
          <div class="card-action">
            <input id = 'strAnswer' type="text" placeholder="Enter Your Answer">
            <p id = 'strAnswerStatus'></p>
          </div>
          <div class="card-action">
            <button id = 'btnEnter' class = "btn">Enter</button>
            <button id = 'btnNext' class = "btn">Next</button>
          </div>
        </div>
      </div>
    </div>


    </body>
  </html>    