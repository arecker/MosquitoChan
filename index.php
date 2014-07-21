<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mosquito Chan</title>
  <style>
    .thread {
       margin-left: 2em;
       max-width: 50%;
    }

    #site-title {
      margin-left: 0;
      margin-right: auto;
    }
  </style>
</head>

<body>
  <h1 id="site-title">Mosquito Chan ( ͡° ͜ʖ ͡°) </h1>

  <p>
    <h2>Start Thread</h2>
    <form method="POST">
      <input type="hidden" id="Username" name="Username" value=""/>
      Title: <input name="newthread_title" type="text"/> <br><br>
      Text: <br><textarea name="newthread_text" rows="6" cols="40"></textarea> <br>
      <input type="submit">
    </form>
  </p>

  <hr>
<?php
  require('connection.php');
  $connection = mysqli_connect($DBHOST, $DBUSER, $DBPASS, "Mosquito");
  $result = mysqli_query($connection, "CALL get_all_threads();");
  mysqli_close($connection);
  try {
    while($row = mysqli_fetch_array($result)) {
      echo '<div class="thread">';
      echo '<h2>' . $row['title'] . '</h2>';
      echo '<em>' . $row['timestamp'] . '</em>';
      echo '<p>' . $row['text'] . '</p>';
      echo '</div>';
      echo "<br>";
    }
  } catch (Exception $e) {
    // whatever
  }
?>
</body>

<footer>
<?php

  function create_new_thread($title, $text){
    require('connection.php');
    $connection = mysqli_connect($DBHOST, $DBUSER, $DBPASS, "Mosquito");
    $result = mysqli_query($connection, "CALL new_thread('" . $title . "', '" . $text . "');");
    mysqli_close($connection);
    header('Location: /');
  }
  
  // Postbacks
  if (!empty($_POST)) {

    // Honeypot
    if (!empty($_POST['Username'])){
      header('Location: http://google.com');
    }
    
    // New Thread
    if (!empty($_POST['newthread_title']) && !empty($_POST['newthread_text'])){
      $title = $_POST['newthread_title'];
      $text = $_POST['newthread_text'];
      create_new_thread($title, $text);
    }

  }

  // Clear out post data
  unset($_POST);

?>
</footer>
</html>
