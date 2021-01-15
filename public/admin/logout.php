<?php
  session_start();
  session_destroy();
  header("Location: ../../public"); //Redirect back to homepage

?>
