<?php
  $serverName = "testdbtp043725.windows.net";

  $connectionOptions = array(
  "Database" => "testphpwithdbtp043725",
  "Uid" => "apuadmin",
  "PWD" => "Cay_008020");

  //Establishes the connection
  $conn = sqlsrv_connect($serverName, $connectionOptions);
  if (!$conn)
  {
  die("Error connection: ".sqlsrv_errors());
  }
  echo "DB Server Connected";
?>
