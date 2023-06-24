<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Approve Request</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">

		.srch
		{
			padding-left: 850px;

		}
		.form-control
		{
			width: 300px;
			height: 45px;
			background-color: black;
			color: white;
		}
		
		body {
			background-image: url("images/1111.jpg");
			background-repeat: no-repeat;
  	font-family: "Lato", sans-serif;
  	transition: background-color .5s;
}


.container
{
	height: 600px;
	background-color: black;
	opacity: .8;
	color: white;
}
.Approve
{
  margin-left: 510px;

}


	</style>

</head>
<body>
<!--_________________sidenav_______________-->
	


<div id="main">
  
  
  <div class="container">
    <br><h3 style="text-align: center;">Send Email </h3><br><br>
    
    <form class="Approve" action="" method="post">
        
       <button class ="btn btn-default" style ="float : left ; padding : 20px;  background-color : green;" name ="submit_m" type ="submit">Send Email </button>
    </form>
  
  </div>
</div>



<?php
  if(isset($_POST['submit_m']))
  {
    $t=mysqli_query($db, "SELECT *FROM 'issue_book; WHERE approve='yes';");
    $date1=date_create(date("Y-m-d"));
    $name_m=$row['username'];
    $bid_m=$row['bid'];
    $sql_m(mysqli_query($db,"SELECT * FROM 'student' WHERE username ='$row[username]';"));
    $to=mysqli_fetch_assoc($sql_m);
    $subject="Regarding Book Approval";
    $msg="Hello, your book (ID: ".$bid_m.") has been approved";
    $from = "From : LibraryPro@gmail.com";
 
    
    if (mail($to['email'], $subject, $msg, $from))
   {
     
   ?>

     <script type="text/javascript">
     alert("Email sent successfully.");
     window.location="index.php"
     </script>

   <?php
  }
   
  
    else{
    ?>
      <script type="text/javascript">
        alert("Email not sent.");
        
      </script>
    <?php
  }
}
  
     
    
?>
</body>
</html>