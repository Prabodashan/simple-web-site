<?php
  if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $amount = $_POST['amount'];

    if(!empty($name) && !empty($amount)){
      $file = fopen('log file.txt', 'a');
      fwrite($file, $name . "\t");
      fwrite($file, "Electricity Bill \t");
      fwrite($file, $amount . "\n");
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>core Bank</title>
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
</head>

<body>
<div align="center" id="mainWrapper">
  <?php include_once("header.php");?>
  <div id="pageContent"><br />
    <div align="center" style="margin-left:24px;">
      <h2>ELECTRICITY BILL PAY</h2>
      <form id="form1" name="form1" method="post" action="electricitybill.php">
        <input type="text" name="name" id="name" placeholder="Name" required><br><br>
        <input type="text" name="amount" id="amount" placeholder="Amount" required><br><br>
        <br />
         <input type="submit"  value="Pay Bill" />
      </form>
    </div>
    <br>
  </div>
  <?php include_once("footer.php");?>
</div>
</body>
</html>
