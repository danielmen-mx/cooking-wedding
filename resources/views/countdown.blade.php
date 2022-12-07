<!DOCTYPE HTML>
<html>
  <head>
    <title>Daniel & Jhovana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <!-- add passess repsonse -->
    <!-- Photo Grid -->
    <div class="row container"> 
      <div class="column">
        <img src="{{ asset('carrousel/1.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/2.png') }}" style="width:100%">
        <img src="{{ asset('carrousel/3.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/4.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/5.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/7.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/8.jpeg') }}" style="width:100%">
        <img src="{{ asset('carrousel/32.jpg') }}" style="width:100%">
      </div>
      <div class="column">
        {{-- <img src="{{ asset('carrousel/9.jpeg') }}" style="width:100%"> --}}
        <img src="{{ asset('carrousel/10.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/11.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/12.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/14.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/31.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/34.jpg') }}" style="width:100%">
      </div>  
      <div class="column">
        <img src="{{ asset('carrousel/15.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/16.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/17.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/18.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/19.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/21.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/22.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/33.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/35.jpg') }}" style="width:100%">
      </div>
      <div class="column">
        <img src="{{ asset('carrousel/23.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/24.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/25.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/26.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/28.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/29.jpg') }}" style="width:100%">
        <img src="{{ asset('carrousel/30.jpg') }}" style="width:100%">
      </div>
    
      <div class="content" style="position: fixed">
        <h1 style="font-size: 8rem"><i>Daniel & Jhovana</i></h1>
        <p class="greatings"><i>¡Gracias por tu respuesta!</i></p>
        {{-- <h1>Gracias por tu respuesta!</h1> --}}
        <p id="countdown" style="color: #F8FFDB; font-family: system-ui; font-size: 8rem"></p>
        <p><i style="font-size: 2rem">Esperamos emocionados que nos acompañes ese gran día.</i></p>
      </div>
    </div>
  </body>

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      background-color: black;
      font-family: Arial;
      margin: 0;
    }

    p {
      text-align: center;
      font-size: 60px;
      margin-top: 0px;
      color: #F8FFDB;
    }

    .greatings {
      color: #F8FFDB;
      padding-top: 3rem;
    }

    h1 {
      color: #FDFDBD;
      text-align: center;
      font-size: 90px;
      font-family: Verdana;
      margin-top: 3rem;
    }

    .header {
      text-align: center;
      padding: 32px;
    }

    .row {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      padding: 0 4px;
    }

    .column {
      -ms-flex: 25%;
      flex: 25%;
      max-width: 25%;
      padding: 0 4px;
    }

    .column img {
      margin-top: 8px;
      vertical-align: middle;
      width: 100%;
    }

    @media screen and (max-width: 800px) {
      .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
      }
    }

    @media screen and (max-width: 600px) {
      .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
      }
    }

    .container {
      position: relative;
      max-width: 118rem;
      margin: 0 auto;
    }

    .container img {vertical-align: middle;}

    .container .content {
      position: absolute;
      bottom: 0;
      background: rgb(0, 0, 0);
      background: rgba(0, 0, 0, 0.5);
      color: #f1f1f1;
      width: 100%;
      height: 100%;
      padding: 20px;
    }

  </style>

  <script>
    // Set the date we're counting down to -----------------------------------------------<<
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
        
      // Output the result in an element with id="countdown"
      document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
      }

    }, 1000);
  </script>
</html>
