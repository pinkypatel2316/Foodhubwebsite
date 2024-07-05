<html>
<body>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <link rel="stylesheet" href="paymentstyle.css">
</head>
<?php
    if(isset($_POST['submit'])) {
        
        $link = mysqli_connect('localhost', 'root', '', 'project');
        
        if($link === false) {
            die("Failed to connect: " . mysqli_connect_error());
        }
        
        $first = $_POST["name1"];
        $last = $_POST["name2"];
        $contact = $_POST["phoneno"];
        $thing = $_POST["selecteditemle"];
        $rate = $_POST["pricele"];
        
        $sql = "INSERT INTO userinfo (firstname, lastname, MobileNo, selectditem, price) VALUES('$first', '$last', '$contact', '$thing', '$rate')";
        
        
        mysqli_close($link);
    }
?>
 <form action="order.html">
      <header><h1>Payment Details</h1></header>
        
       
  <h2>Payment information</h2>
  <p>Card type:
    <select name = "card_type" id= "card_type" required>  
    <option value="select"> ---select card</option>
    <option value="visa">visa</option>
    <option value="master card">master card</option>
    <option value="rupay">rupay</option>
  </select>
</p> 
<p>
    Card number : <input type="number" name="card_number" id="card_number"> <br>
    Expiration: <input type="date" name="date" id="date"><br>
    CVV: <input type="password" name="CVV" id="CVV"><br>  
</p>
<input type = "submit" value="Pay now">

    </form>
</body>
</html>
