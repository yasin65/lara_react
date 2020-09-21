<!DOCTYPE HTML>
<html>

<head>
  <title>simplestyle_purple</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="frontend/style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="{{URL::to('/')}}">simple<span class="logo_colour">style_purple</span></a></h1>
          <h2>Simple. Contemporary. Website Template.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class=""><a href="{{URL::to('/')}}">Home</a></li>
          <li><a href="{{route('example')}}">Examples</a></li>
          <li><a href="{{ route('another_page')}}">Another Page</a></li>
          <li><a href="{{route('page')}}">A Page</a></li>
          <li><a href="{{route('contact')}}">Contact Us</a></li>
          <li><a href="{{route('all')}}">All Information</a></li>
        </ul>
      </div>
    </div>


    @yield('content')


    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simplestyle_purple | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Website templates</a></p>
    </div>
  </div>
</body>
</html>
