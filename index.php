<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Man Points Forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Will Parker">

    <!-- Le styles -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- @ToDo: Create Apple Web App Icons and Favicon -->
  </head>

  <body>
    <div class="container visible-desktop">
      <div class="row-fluid">
        <div class="span4">Site Logo Will Go Here</div>
        <div class="span8">This is where the silohettes of PUA's will go</div>
      </div>
    </div>
    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="/">Man Points Forum</a>
          <div class="nav-collapse collapse">
            <!--<p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>-->
            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#forum">Forum</a></li>
              <li><a href="#myManPoints">MyManPoints</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span9">
          <div class="well">
            <blockquote>
              <p>"If there was anything I'd learned, it's that the man never chooses the woman. All he can do is give her an opportunity to choose him."</p>
              <small>Neil Strauss in <cite title="The Game: Penetrating the Secret Society of Pickup Artists">The Game</cite></small>
            </blockquote>
            <p><a class="btn btn-primary btn-large" href="#">Learn how to create these opportunities &raquo;</a></p>
            <!--<blockquote>
              <p>"There are only so many ways to get rejected or ignored. It doesn't hurt at all anymore because why should someone who's a complete stranger have any control over your sense of selfworth?"</p>
              <small>Neil Strauss in <cite title="The Game: Penetrating the Secret Society of Pickup Artists">The Game</cite></small>
            </blockquote>
            <p><a class="btn btn-primary btn-large" href="#">Sign up today to start your journey &raquo;</a></p-->          </div>
          <div class="row-fluid">
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div>
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div>
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div>
          </div>
        </div>
        <!-- Sidebar -->
        <div class="span3">
          <div class="well">
          </div>
        </div>
        <!-- /SideBar -->
      </div>

      <hr>

      <footer>
        <div class="row-fluid">
          <div class="span4 offset4">
            <p class="text-center">
              &copy; <?= date("Y") ?> <a href="http://www.do-web-design.com/">Do Web Design</a>
            </p>
        </div>
      </footer>

    </div><!--/.fluid-container-->

    <!-- JS Files -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
      if (!window.jQuery) {
          document.write('<script src="/assets/js/jquery.min.js"><\/script>');
      }
    </script>
    <script src="/assets/js/bootstrap.min.js"></script>

  </body>
</html>
