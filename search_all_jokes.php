<?php



/* the purpose of search_all_jokes.php is to go through all the jokes 
in the database and to display them, along with the ID and answer, in
chronological order
*/


//if there are any values in the table, display them one at a time
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


echo $mysqli->host_info . "\n";

//joke content variable taken from database
$sql = "SELECT JokeID, Joke_question, Joke_answer FROM Jokes_table";
$result = $mysqli->query($sql);

//if database is not empty, display all valid information
if ($result->num_rows > 0)
{
	//output data of each row
	echo "<br>";
	while($row = $result->fetch_assoc())
	{
		echo "id: " . $row["JokeId"] . " - Joke Question: " . $row["Joke_question"] . " " . $row["Joke_answer"] . "<br>";
	}
}

//if database is empty display an error message 
else
{
	echo "0 results";
}

?>