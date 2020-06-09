<?php
  $serverName = tcp:"testdbtp043725.database.windows.net,1433";

  $connectionOptions = array(
  "Database" => "testdbtp043725",
  "Uid" => "apuadmin",
  "PWD" => "Cay_008020");

  //Establishes the connection
  $conn = sqlsrv_connect($serverName, $connectionOptions);
  if (!$conn)
  {
  die("Error connection: ".sqlsrv_errors());
  }
  echo "DB Server Connected";
  $tsql= "SELECT * FROM [dbo].[restaurant]";
  $getResults= sqlsrv_query($conn, $tsql);
  if ($getResults == FALSE)
  {
  die(sqlsrv_errors());
  }
  while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
  {
  echo "<tr>";
  echo "<td>". $row['restaurant_id'] . "</td>";
  echo "<td>". $row['restaurant_name'] ."</td>";
  echo "<td>". $row['restaurant_address'] . "</td>";
  echo "</tr>";
  }
  sqlsrv_free_stmt($getResults);
?>
