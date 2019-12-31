<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<h1>Jokes Page</h1>

<?php

include "db_connect.php";

//include "search_all_jokes.php";

?>

<form action="/search_keyword.php">
  Please enter a key word to search for:<br>
  <input type="text" name="keyword"><br>
 
  <input type="submit" value="Submit">
</form>



<form class="form-horizontal" action = "search_keyword.php">
<fieldset>

<!-- Form Name -->
<legend>Search for a Joke</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Search Input</label>
  <div class="col-md-5">
    <input id="keyword" name="keyword" type="search" placeholder="e.g. chicken" class="form-control input-md" required="">
    <p class="help-block">Enter a word to search for in the joke database</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Search</button>
  </div>
</div>

</fieldset>
</form>










<hr>
<form action="/add_joke.php">
  Please enter a new joke here:<br>
  <input type="text" name="newjoke"><br>

  Please enter the answer to your joke here:<br>
  <input type="text" name="newanswer"><br>	

 
  <input type="submit" value="Submit">
</form>

<?php



//include "search_keyword.php";


$mysqli->close();

?>


</body>

</html>