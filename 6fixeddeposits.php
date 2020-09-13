
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
      <h2>6 MONTH FIXED DEPOSITS</h2>
      <form id="form1" name="form1" method="post" action="admin_login.php">
        <input type="text" name="amount" id="Famount" placeholder="Fixed Deposits Amount" required><br><br>
        <br />
         <input type="button" onclick="CalfInstallment()" value="loan installment" />
      </form>
      <script type="text/javascript">
        function CalfInstallment() {
          var amount = document.getElementById('Famount').value;
          var poliya = ((amount*8)/100)*6;
          var fullAmount = Number(amount) + Number(poliya);
         alert(fullAmount);
        }
      </script>
    </div>
    <br>
  </div>
  <?php include_once("footer.php");?>
</div>
</body>
</html>
