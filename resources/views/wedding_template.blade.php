<!DOCTYPE html>
<html>
  <head>
    <title>Daniel & Jhovana</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <body>
    <!-- Header / Home-->
    <header class="display-container wide bgimg" id="home">
      <div class="display-middle center round-4" style="background-color: black; opacity: 0.7; padding-left: 1rem; padding-right: 1rem; color: #FDFDBD">
        <h1 class="jumbo">Daniel & Jhovana</h1>
        <h2>¡Nos casamos!</h2>
        <p id="countdown" class="countdown"></p>
      </div>
    </header>

    <!-- Navbar (sticky bottom) -->
    <div class="bottom hide-small">
      <div class="bar white center padding opacity-min hover-opacity-off">
        <a href="#home" style="width:25%" class="bar-item button">Inicio</a>
        <a href="#us" style="width:25%" class="bar-item button">Jhovana & Daniel</a>
        <a href="#wedding" style="width:25%" class="bar-item button">Boda</a>
        <a href="#rsvp" style="width:25%" class="bar-item button hover-black">Responder invitación</a>
      </div>
    </div>

    <!-- About -->
    <div class="container padding-64 pale-red" id="us">
      <div class="content">
        <h1 class="verse">
          <b><i>
            "Asi que, no son ya más dos, si no una sola carne; por tanto, lo que Dios ha unido no lo separe el hombre"
            - Mateo 19:6
          </i></b>
        </h1>
        <img class="round-4 grayscale-min" src="{{ asset('images/proposal-hug.jpg') }}" style="width:100%;margin:32px 0">
        <p class="text-center large">
          Hola familia y/o amigos les enviamos un gran saludo y esperamos en el Señor que se encuentren bien.<br>
          Nosotros estamos muy contentos y emocionados ya que este año cumpliremos la promesa que nos hicimos un 31 de Diciembre Jhovana y yo.
          Han sido meses de mucha espera pero el momento ha llegado, Gracias a Dios.<br>
          Tenemos la dicha de invitarles este 30 de Diciembre a que nos acompañes a la celebración de nuestra boda,
          de parte de Jhova & yo esperamos que puedas asistir.<br>
        </p><br>
        <p class="center"><a href="#wedding" class="button black round-4 padding-large large">Detalle de la Boda</a></p>
      </div>
    </div>

    <!-- Background photo -->
    <div class="display-container bgimg2">
      <div class="display-middle text-white center">
        <h2 style="margin-bottom: 500px; font-size: 50px">¡El momento al fin</h2>
        <h1 class="jumbo">Ha llegado!</h1>
      </div>
    </div>

    <!-- Wedding information -->
    <div class="container padding-64 pale-red center" id="wedding">
      <div class="content">
        <h1 class="text-grey"><b>Estás invitado:</b></h1>
        <h1 class="text-grey"><b>Salón Jardin Florencia</b></h1>
        <img class="grayscale-min" src="{{ asset('images/invitation.jpeg') }}" style="width:90%; margin-bottom: 10rem">
      </div>
      <div>
        <h4 class="text-grey">Te compartimos el programa para que estes familiarizado con los horarios</h4>
        <img src="{{ asset('images/programa.png') }}" style="border-radius: 25px; width: 70%">
        <h5 class="text-grey">Sujeto a cambios por tiempos</h5>
      </div>
    </div>

    <div class="map">
      <h4 style="margin: 0px 0px 10px 0px;">Ubicación</h4>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15229.37073759274!2d-93.1753415726563!3d16.72173330670081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd9f426455b9f%3A0xcbe82a96a508c769!2sSal%C3%B3n%20Jardin%20Florencia!5e1!3m2!1ses-419!2smx!4v1670208957812!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

    <!-- RSVP section -->
    <div class="container padding-64 pale-red center wide" id="rsvp">
      <h1>ESPERAMOS QUE PUEDAS ACOMPAÑARNOS!</h1>
      <p
      class="large"
      >
        Porfavor responda antes del 15 de Diciembre.
      </p>
      <p
      style="font-size: 14px"
      >
        (Si no responde a esta invitación no se le agregará a la lista de invitados.)
      </p>
      <p class="xlarge">
        <button
        onclick="document.getElementById('id01').style.display='block'"
        class="button round-4 red opacity hover-opacity-off"
        style="padding:8px 60px">
          Responder
        </button>
      </p>
    </div>

    <!-- Intructions modal -->
    <div id="id01" class="modal">
      <div class="modal-content card-4 animate-zoom" style="padding:32px;max-width:600px">
        <div class="container white center">
          <button type="button" class="close-modal"
          onclick="document.getElementById('id01').style.display='none'"
          >
          <span class="close">&times;</span>
          </button>
          <span style="color: red; font-size: 2rem">Atención</span>
          <h4>Para confirmar la asistencia solo necesitas ingresar tu o tus nombres y apellidos en el espacio señalado,
          preferiblemente quíen sea la cabeza de la familia debe ingresarlo.</h4>
          <h4>Se realizará una consulta a la base de datos para responderte el número de pases que tiene por familia.</h4>
          <h4>Es importante confirmar y ver el numero de pases que tiene porque en la entrada del evento no dejarán pasar a nadie más que los indicados por familia.</h4>
          <h4>Si la aplicación no le regresa su número de pases, puede mandarnos un mensaje a cualquiera de estos números:</h4>
          <h4>Él: 961 304 9788 - Ella: 961 266 2677</h4>

          <button
          onclick="closeAnswerInvitation()"
          class="button round-4 green hover-opacity-off"
          style="padding:8px 60px">
            Entendí y voy a confirmar mi asistencia.
          </button>
        </div>
      </div>
    </div>

    <!-- RSVP modal -->
    <div id="id02" class="modal">
      <div class="modal-content card-4 animate-zoom" style="padding:32px;max-width:600px">
        <div class="container white center">
          <button type="button" class="close-modal"
          onclick="document.getElementById('id02').style.display='none'"
          >
          <span class="close">&times;</span>
          </button>
          <h1 class="wide">PODRÁS ASISTIR?</h1>
          <h5 class="text-grey">
            Ingresa tus nombres y apellidos en el espacio debajo y confirma tu asistencia.
          </h5>
          <form action="{{ route('guests.store') }}" method="POST">
            @csrf
            <!--- If the name or the assistance fault send an error message --->
            <input class="label border" type="text" placeholder="Nombre(s) y Apellido(s)" name="name" required>
            <div class="row">
              <div class="inputs">
                <input type="submit" name="assistance" value="Asistimos" id="assistance1" class="button block green">
              </div>
              <div class="inputs">
                <input type="submit" name="assistance" value="No podremos" id="assistance2" class="button block red">
              </div>
            </form>
            <p><i>Esperamos verte, sinceramente, Daniel & Jhovana</i></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
      <p>
        Hecho con amor por
        <a
        href="countdown"
        title="made with love"
        target="_blank"
        class="hover-text-green">
          Daniel & Jhovana
        </a>
      </p>
    </footer>
  </body>

  <script>
    function closeAnswerInvitation() {
        document.getElementById('id01').style.display='none'
        document.getElementById('id02').style.display='block'
    }
    // Set the date we're counting down to
    var countDownDate = new Date("Dec 30, 2022 19:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {
      // Get today's date and time
      var now = new Date().getTime();
        
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Output the result in an element with id="demo"
      document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>

  <style>
    .bgimg {background-image: url('{{ asset('images/full-propuesta.jpg')}}');}
    .bgimg2 {background-image: url('{{ asset('images/main-proposal.jpg')}}')}

    {{-- Custom Styles --}}

    html {
      box-sizing: border-box
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit
    }

    html {
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%
    }

    body {
      margin: 0;
      background-color: #ffdddd
    }

    button,
    input,
    select,
    textarea,
    optgroup {
      font: inherit;
      margin: 0
    }

    body,h1,h2{
      font-family: "Raleway", sans-serif
    }

    body, html {
      height: 100%
    }

    p {
      line-height: 2
    }

    .top,
    .bottom {
      position: fixed;
      width: 100%;
      z-index: 1
    }

    .bottom {
      bottom: 0
    }

    .bar {
      width: 100%;
      overflow: hidden
    }

    .center .bar {
      display: inline-block;
      width: auto
    }

    .bar .bar-item {
      padding: 8px 16px;
      float: left;
      width: auto;
      border: none;
      display: block;
      outline: 0
    }

    .bar .dropdown-hover,
    .bar .dropdown-click {
      position: static;
      float: left
    }

    .bar .button {
      white-space: normal
    }

    .bar-block .bar-item {
      width: 100%;
      display: block;
      padding: 8px 16px;
      text-align: left;
      border: none;
      white-space: normal;
      float: none;
      outline: 0
    }

    .bar-block.center .bar-item {
      text-align: center
    }

    .bar:before,
    .bar:after {
      content: "";
      display: table;
      clear: both
    }

    .button {
      border: none;
      display: inline-block;
      padding: 8px 16px;
      vertical-align: middle;
      overflow: hidden;
      text-decoration: none;
      color: inherit;
      background-color: inherit;
      text-align: center;
      cursor: pointer;
      white-space: nowrap
    }

    .button:hover {
      color: #000 !important;
      background-color: #ccc !important
    }

    .button:disabled {
      cursor: not-allowed;
      opacity: 0.3
    }

    .dropdown-hover:hover>.button:first-child,
    .dropdown-click:hover>.button:first-child {
      background-color: #ccc;
      color: #000
    }

    .bar-block .dropdown-hover .button,
    .bar-block .dropdown-click .button {
      width: 100%;
      text-align: left;
      padding: 8px 16px
    }

    .bar .button {
      white-space: normal
    }

    .button {
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
    }

    .display-container:hover .display-hover {
      display: block
    }

    .display-container:hover span.display-hover {
      display: inline-block
    }

    .tooltip,
    .display-container {
        position: relative
    }

    .display-middle {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%)
    }

    .container:after,
    .container:before {
      content: "";
      display: table;
      clear: both
    }

    .container {
      padding: 0.01em 16px
    }

    .content,
    .auto {
      margin-left: auto;
      margin-right: auto
    }

    .content {
      max-width: 980px
    }

    .red,
    .hover-red:hover {
      color: #fff !important;
      background-color: #f44336 !important
    }

    .pale-red,
    .hover-pale-red:hover {
      color: #000 !important;
      background-color: #ffdddd !important
    }

    .green,
    .hover-green:hover {
      color: #fff !important;
      background-color: #4CAF50 !important
    }

    .black,
    .hover-black:hover {
      color: #fff !important;
      background-color: #000 !important
    }

    .text-white,
    .hover-text-white:hover {
      color: #fff !important
    }

    .block {
      display: block;
      width: 100%
    }

    .opacity,
    .hover-opacity:hover {
      opacity: 0.60
    }

    .opacity-off,
    .hover-opacity-off:hover {
      opacity: 1
    }

    .grayscale-min {
      filter: grayscale(50%)
    }

    .text-grey {
      color: #757575
    }

    .text-center {
      text-align: center;
    }

    .verse {
      text-align: center;
      display: inline-block;
      width: auto;
      color: #757575;
      font-size: 30px;
    }

    .round-4 {
      border-radius: 4px
    }

    .medium {
      font-size: 14px;
    }

    .opacity-min {
      opacity: 0.75
    }

    .large {
      font-size: 18px;
    }

    .xlarge {
      font-size: 24px !important
    }

    .jumbo {
      font-size: 64px
    }

    .padding {
      padding: 8px 16px !important
    }

    .padding-64 {
      padding-top: 64px;
      padding-bottom: 64px
    }

    .padding-large {
      padding: 12px 24px !important
    }

    .bgimg, .bgimg2 {
      min-height: 100%;
      background-position: center;
      background-size: cover;
    }

    .close-modal {
      position: absolute;
      background-color: white;
      top: 1px;
      right: 15px;
      font-size: 30px;
      font-weight: bold;
      border: none;
    }

    .close-modal:hover,
    .close-modal:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .white,
    .hover-white:hover {
        color: #000 !important;
        background-color: #fff !important
    }

    .center .bar {
      display: inline-block;
      width: auto
    }

    .bar-block.center .bar-item {
      text-align: center
    }

    .center {
      text-align: center !important
    }

    .footer {
      width: auto;
      text-align: center;
      color: #fff;
      background-color: #000;
      padding-top: 16px;
      padding-bottom: 64px
    }

    .text-green,
    .hover-text-green:hover {
      color: #4CAF50 !important
    }

    .inputs {
      float: left;
      width: 100%
    }

    .inputs {
      width: 49.99999%
    }

    .label {
      padding: 8px;
      display: block;
      border: none;
      border-bottom: 1px solid #ccc;
      width: 100%
    }

    .border {
      border: 1px solid #ccc !important
    }

    .wide {
      letter-spacing: 4px
    }

    .row:after,
    .row:before,
    .row-padding:after,
    .row-padding:before {
      content: "";
      display: table;
      clear: both
    }

    .card-4,
    .hover-shadow:hover {
      box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2), 0 4px 20px 0 rgba(0, 0, 0, 0.19)
    }

    .modal {
      z-index: 3;
      display: none;
      padding-top: 100px;
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.4)
    }

    .modal-content {
      margin: auto;
      background-color: #fff;
      position: relative;
      padding: 0;
      outline: 0;
      width: 600px
    }

    .animate-zoom {
      animation: animatezoom 0.6s
    }

    .countdown {
      font-size: 35px;
    }

    .map {
      text-align: center;
      background-color: #ffdddd;
    }

    @media (max-width:600px) {
      .modal-content {
          margin: 0 10px;
          width: auto !important
      }

      .modal {
          padding-top: 30px
      }

      .dropdown-hover.mobile .dropdown-content,
      .dropdown-click.mobile .dropdown-content {
          position: relative
      }

      .hide-small {
          display: none !important
      }

      .mobile {
          display: block;
          width: 100% !important
      }

      .bar-item.mobile,
      .dropdown-hover.mobile,
      .dropdown-click.mobile {
          text-align: center
      }

      .dropdown-hover.mobile,
      .dropdown-hover.mobile .btn,
      .dropdown-hover.mobile .button,
      .dropdown-click.mobile,
      .dropdown-click.mobile .btn,
      .dropdown-click.mobile .button {
          width: 100%
      }
    }

    @media (max-width:768px) {
      .modal-content {
        width: 500px
      }

      .modal {
        padding-top: 50px
      }
    }

    @media (min-width:993px) {
      .modal-content {
        width: 900px
      }

      .hide-large {
        display: none !important
      }

      .sidebar.collapse {
        display: block !important
      }
    }

  </style>
</html>