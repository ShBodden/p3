<!DOCTYPE html>
<html>
    <head>
        <title>
          @yield('title','Home')
        </title>
        <meta charset='utf-8'>
        <link href='css/main.css' rel='stylesheet'>
    </head>

    <body>
      <h1>
        <a href="/">
          <img src="/img/dataicon.jpg" alt="a picture" >
        </a>
      </h1>

<section>
@yield('content')
</section>

    </body>

</html>
