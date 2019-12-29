<html>
<head>

</head>

<body>
<h1>Jokes Page</h1>

<?php


$host = "localhost";
$username = "root";
$user_pass = "root";
$database_in_use = "test";

$mysql = new mysqli($host, $username, $user_pass, $database_in_use);


if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


echo $mysqli->host_info . "\n";

$sql = "SELECT JokeID, Joke_question, Joke_answer FROM Jokes_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0)
{
	//output data of each row
	echo "<br>";
	while($row = $result->fetch_assoc())
	{
		echo "id: " . $row["JokeId"] . " - Joke Question: " . $row["Joke_question"] . " " . $row["Joke_answer"] . "<br>";
	}
}

else
{
	echo "0 results";
}

$mysqli->close();

?>


</body>

</html>