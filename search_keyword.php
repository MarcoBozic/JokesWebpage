<?php

include "db_connect.php";

$keywordfromform = $_GET["keyword"];
//echo $keywordfromform;

// Search the database for the word cthe user requested
echo "<h2>Show all jokes with the word $keywordfromform</h2>";

$sql = "SELECT JokeID, Joke_question, Joke_answer, FROM Jokes_table WHERE Joke_question LIKE '% . $keywordfromform . %'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0)
{
	//output data of each row
	while($row = $result->fetch_assoc())
	{
		echo "id: " . $row["JokeID"] . " - Joke Question: " . $row["Joke_question"] . " " . $row["Joke_answer"] . "<br>";
	}
}

else
{
	echo "0 results";
}



?>