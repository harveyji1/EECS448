<!DOCTYPE html>
<html>
<head>
	<title>Exercise 3</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<center><b><h1>Harvey's Sock Store</h1></center></b>
<?php
  $username = $_POST["username"];
  $password = $_POST["password"];
  $leftSock = $_POST["leftSock"];
  $rightSock = $_POST["rightSock"];
  $middleSock = $_POST["middleSock"];
  $shippingOpt = $_POST["shipping"];

  $totLSCost = $leftSock*2;
  $totRSCost = $rightSock*3;
  $totMSCost = $middleSock*9;


//gets the shipping cost
  if($shippingOpt==7)
  {
    $shippingCost = 0;
    $shippingWord = "Free 7 day";
  }
  else if($shippingOpt==1)
  {
    $shippingCost = 50;
    $shippingWord = "Over night";
  }
  else if($shippingOpt==3)
  {
    $shippingCost = 5;
    $shippingWord = "3 day";
  }
  $totalCost = $totLSCost+$totRSCost+$totMSCost+$shippingCost;

  echo "Your password is: $password";
  echo "<h3>Reciept:</h3>";
  echo "<table>";
  echo "<tr>
          <th><b>Item</th>
          <th><b>Quantity</th>
          <th><b>Cost per Item</th>
          <th><b>Sub total</th>
        </tr>";
  echo "<tr>
          <td><b>Left Sock</td>
          <td>$leftSock</td>
          <td>$2.00</td>
          <td>$$totLSCost</td>
        </tr>";
  echo "<tr>
          <td><b>Right Sock</td>
          <td>$rightSock</td>
          <td>$3.00</td>
          <td>$$totRSCost</td>
        </tr>";
  echo "<tr>
          <td><b>Middle Sock</td>
          <td>$middleSock</td>
          <td>$9</td>
          <td>$$totMSCost</td>
        </tr>";
  echo "<tr>
          <td><b>Shipping</td>
          <td colspan='2'><center>$shippingWord</center></td>
          <td>$$shippingCost</td>
        </tr>";
  echo "<tr>
          <td colspan='3'><b><center>Total Cost</center></td>
          <td><b>$$totalCost</td>
        </tr>";
  echo "</table>";

?>
</body>
</html>