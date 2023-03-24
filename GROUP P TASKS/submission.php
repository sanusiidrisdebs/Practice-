<?php
// Establish a database connection
$db_host = "localhost";
$db_username = "username";
$db_password = "password";
$db_name = "database_name";

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the form data
$voter_name = $_POST['voter_name'];
$vote_option = $_POST['vote_option'];

// Validate the input
if (empty($vote_option)) {
  echo "Please select an option to vote for.";
} else {
  // Insert the vote into the database
  $sql = "INSERT INTO votes (voter_name, vote_option, vote_date) VALUES ('$voter_name', '$vote_option', NOW())";

  if (mysqli_query($conn, $sql)) {
    echo "Thank you for voting!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close the database connection
mysqli_close($conn);
?>
