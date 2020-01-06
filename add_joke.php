<?php


/* the purpose of add_joke.php is to allow the ability to insert
jokes and answers into the database 
*/


//includes functions from db_connect.php
include "db_connect.php";

//variables that contain the joke and answer the user wants to add
$new_joke_question = $_GET["newjoke"];
$new_joke_answer = $_GET["newanswer"];
//updates the new joke and answer to allow for apostrophes
$new_joke_question = addslashes($new_joke_question);
$new_joke_answer = addslashes($new_joke_answer);

// Search the database for the word the user requested
echo "<h2>Trying to add a new joke: $new_joke_question and $new_joke_answer</h2>";

//insert the new joke and answer into the database
$sql = "INSERT INTO Jokes_table (JokeID, Joke_question, Joke_answer) VALUES (NULL, '$new_joke_question', '$new_joke_answer')"
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

//includes functions from search_all_jokes.php
include "search_all_jokes.php";

?>

<a href="index.php">Return to main page</a>