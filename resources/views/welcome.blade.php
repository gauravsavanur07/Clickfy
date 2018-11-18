    <!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clickfy</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </head>
    <body>
      <nav>
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">Clickfy</a>
          <a href="mobile-demo" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="../login.php">Login</a></li>
            <li><a href="../register.php">Register</a></li>

          </ul>
        </div>
      </nav>

      <ul class="sidenav" id="mobile-demo">
        <li><a href="/login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>

      </ul>
    <div class="row">
    <div class="col s6 offset-s6 ">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">News Feed</span>
          <?php

                $urlArticles = file_get_contents('https://newsapi.org/v1/articles?source=bbc-news&sortBy=top&apiKey=3eb2d5e47ad34c89ac518da077edc5e8');
                $urlArticlesArray = json_decode($urlArticles, true);

                 $articles = $urlArticlesArray['articles'];
                 for($i = 0; $i < count($articles); $i++) {
                   $sites = $urlArticlesArray['articles'][$i];
                   $output = "<ul>";

                   echo '<img src="'.$sites['urlToImage'].'">';
                   echo '</br>';
                   echo '<h6 class="fgd">'.$sites['description'].'</h6>';





                   }
    ?>
        </div>
        <div class="card-action">
          <a href="https://www.facebook.com">Comment</a>
          <a href="https://twitter.com">Like</a>
        </div>
      </div>
    </div>
  </div>


<style>
.nav-wrapper{
  width:100%;
}
img {
  width:300px;
  height:200px;

}
.fgd{
  padding:1em;

}
.ass{
  width:50%%
  height 40%;
  float:right;
  border-color: #0d39c6;
}
</style>
</body>




<script>
document.addEventListener('DOMContentLoaded', function() {
   var elems = document.querySelectorAll('.sidenav');
   var instances = M.Sidenav.init(elems, options);
 });

 // Or with jQuery

 $(document).ready(function(){
   $('.sidenav').sidenav();
 });

</script>





    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</html>
