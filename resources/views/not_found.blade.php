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
    <br>
    <div class="display-container wide">
      <div class="center round-4" style="background-color: black; opacity: 0.7; color: #FDFDBD">
        <h1 class="jumbo">Upss, lo siento {{ $name }}, parece que tu nombre no esta en la lista</h1>
        <h2>Recuerda que el número de pases se esta respondiendo por familias y personales</h2>
        <h2>Si no eres el papá o la cabeza del hogar debes ingresar otro nombre</h2>
        <h2>Asegurate de estar escribiendo tu nombre completo</h2>
        <h2>Si el error persiste {{ $name }} no dudes en comunicarte con nosotros.</h2>
        <h3><a
            href="bodorrio"
            style="text-decoration: none; color: red"
        >Intentar de nuevo</a></h3>
      </div>    
    </div>
  </body>
  <style>
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
      background-color: black
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
      padding: 8px 1px;
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
        overflow:hidden;
        padding-bottom:56.25%;
        position:relative;
        height:0;
    }

    .map iframe{
        left:0;
        top:0;
        height:100%;
        width:100%;
        position:absolute;
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