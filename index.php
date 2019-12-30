<html>
<head>

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


<?php



//include "search_keyword.php";


$mysqli->close();

?>


</body>

</html>