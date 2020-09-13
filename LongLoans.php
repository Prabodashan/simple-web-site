
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
      <h2>LONG TERM LOANS</h2>
      <form id="form1" name="form1" method="post" action="admin_login.php">
        <input type="text" name="amount" id="amount" placeholder="Loan Amount" required><br><br>
        <br />
         <input type="button" onclick="CalInstallment()" value="loan installment" />
      </form>
      <script type="text/javascript">
        function CalInstallment() {
          var amount = document.getElementById('amount').value;
          var poliya = (amount*20)/100;
          var fullAmount = Number(amount) + Number(poliya);
          var installment = fullAmount/60;
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
