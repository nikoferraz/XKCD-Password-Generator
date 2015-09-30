<?php ini_set('display_errors', 1);
error_reporting(E_ALL|E_STRICT);
?>
<!DOCTYPE html>
<html>
<head>
  <title>P2 - XKCD Password Generator</title>
  <!-- Bootstrap CSS -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <meta id="viewport" name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0"/>
  <?php set_include_path(dirname(__FILE__)."/../");
require 'logic.php'; ?>
</head>
<body>
 <nav class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">P1<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../p1/index.html">P1 Homepage</li>
              <li><a href="https://github.com/nikoferraz/p1">P1 GitHub</a></li>
            </ul>
            <li class="active dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">P2<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="https://github.com/nikoferraz/p2">P2 GitHub</a></li>
            </ul>
            </li>
            <li><a href="#">P3</a></li> 
            <li><a href="#">P4</a></li> 
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="container" id="picture">
    <h1>XKCD Password Generator</h1>
    <br><h3>The concept behind the XKCD password started with the xkcd cartoon below. To learn more about xkcd go to <a href="http://xkcd.com/936/">xkcd.com</a></h3>
    <img src="xkcd.png">
  </div>
  <div class="jumbotron">
    <form action="index.php" method="get">
      <div class="inputBox">
        <input type="checkbox" name="camelCase"> Camel Case<br>
      </div>
      <div class="inputBox">
        <input type="checkbox" name="appendNumber"> Append a number<br>
      </div>
      <div class="inputBox">
        <input type="checkbox" name="appendSymbol"> Append a symbol<br>
      </div>
      <div class="inputBox">
        <select name="words">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
        </select>
      </div>
      <br>
      <div class="inputBox">
        Add a connector (~,!@#$%^*) : <input type="text" name="connector"><br>
      </div>
      <br>
      <input type="submit">
    </form>
    <h3 id="password"><?php echo $password;?></h3>
  </div>
</body>
</html>