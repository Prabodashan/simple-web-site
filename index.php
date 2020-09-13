
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
    <div align="left" style="margin-left:24px;">
      <center><h1>Wel Come !</h1></center>
      <table width="25%" border="2" cellspacing="0" cellpadding="0" >
        <tr><td><a href="car_data_manage.php#addCarForm">Insert Car Data</a></td></tr>
        <tr><td><a href="car_data_manage.php#CarForm">Display Car Data</a></td></tr>
        <tr><td><a href="car_data_manage.php#searchCarForm">Search Car Data</a></td></tr>
        <tr><td><a href="customer_data_manage.php#addCustomerForm">Insert Customer Data</a></td></tr>
        <tr><td><a href="customer_data_manage.php#CustomerForm">Display Customer Data</a></td></tr>
        <tr><td><a href="customer_data_manage.php#searchCustomerForm">Search Customer Data</a></td></tr>
        <tr><td><a href="storesadmin/booking_details.php">Booking Details</a></td></tr>
        <tr><td><a href="index.php?logout='1'" style="color: red;">logout</a></td></tr>
        </table>
        <br />
        <br />
    </div>
    <br>
  </div>
  <?php include_once("footer.php");?>
</div>
</body>
</html>
