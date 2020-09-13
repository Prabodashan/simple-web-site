<?php
  if (!empty($_GET['style'])) {
    $fileName = basename($_GET['style']);
    $filePath = 'style/'.$fileName;
    if (!empty($fileName) && file_exists($filePath)) {
      header("Cache-Control: public");
      header("Content-Description: File Transfer");
      header("Content-Description: attachment; filename=$fileName");
      header("Content-Type: application/zip");
      header("Content-Transfer-Encoding: binary");

      readfile($filePath);
      exit;
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
      <h2>SHOET TERM LOANS</h2>
      <form id="form1" name="form1" method="post" action="admin_login.php">
        <input type="text" name="amount" id="amount" placeholder="Loan Amount" required><br><br>
        <br />
         <input type="button" onclick="CalInstallment()" value="loan installment" />
      </form>

      <a href="ShortLoans.php?style=test.txt">Click to Download Loan Application</a>
      <script type="text/javascript">
        function CalInstallment() {
          var amount = document.getElementById('amount').value;
          var interest = (amount*12)/100;
          var fullAmount = Number(amount) + Number(interest);
          var installment = fullAmount/12;
         alert(installment);
        }
      </script>
    </div>
    <br>
  </div>
  <?php include_once("footer.php");?>
</div>
</body>
</html>
