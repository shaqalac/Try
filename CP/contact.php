<?php
  include "navbar.php";
  include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>

  .holder {
    padding-top:45px;
    width: 80%;
    margin: 50px auto;


}
.holder h2 { 
    color: blueviolet;
}

.contact-box {
    background: white;
    display: flex;
}

.contact-left {
    flex-basis: 60%;
    padding: 40px 60px;
    background: whitesmoke;
}

.contact-right {
    flex-basis: 40%;
    padding: 40px;
    background: orangered;
    color: white;

}
.holder p {
    margin-bottom: 10px;
}
.input-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;

}


.input-row .input-group {

    flex-basis: 45%;

}

input {
    width: 100%;
    border: none;
    border-bottom: 1px solid orange;
    outline: none;
    padding-bottom: 5px;
}

textarea {
    width: 100%;
    border: 1px solid orange;
    outline: none;
    padding: 10px;
}

label {

    margin-bottom: 6px;
    display: block;

}

button {
    background: blueviolet;
    width: 100px;
    border: none;
    outline: none;
    color: white;
    height: 35px;
    border-radius: 30px;
    margin-top: 20px;


}

.contact-left h3 {
    color: blueviolet;
    font-weight: 600;
    margin-bottom: 30px;


}

.contact-right h3 {
    font-weight: 600;
    margin-bottom: 30px;

}




tr td {
    padding: 20px;
    color: white;
}
</style>
<body>




<div class=" holder">
           
           <h2> Connect With Us</h2>
           <p> Feel free to get in touch with us </p>

           <div class="contact-box">
               <div class=" contact-left">
                   <h3> Send your request</h3>

                       <form name =" Contact " action ="" method ="post">
                       <div class=" input-row">
                           <div class=" input-group">
                               <label> Name</label>
                               <input type="text" name="name" required="">
                           </div>
                           <div class=" input-group">
                               <label> Phone </label>
                               <input type="text" name ="phone" required="">
                           </div>
                       </div>
                       <div class=" input-row">
                           <div class=" input-group">
                               <label> Email </label>
                               <input type="text" name="email" type="text" required="">
                           </div>
                           <div class=" input-group">
                               <label> Subject </label>
                               <input type="text" name ="subject" required="">
                           </div>
                       </div>
                       <label> Message</label>
                       <input type="text" name ="message" required="">
                       <br><br><br>
                      <input class="btn btn-default" type="submit" name="submit" value="SEND" style="color: black; width: 70px; height: 30px">
                       
                   </form>
                   
                   
               </div>

               
      
          
               <div class="contact-right">
                   <h3> Reach us</h3>
                   <table>
                       <tr>
                           <td> Email </td>
                           <td> LibraryPro@gmail.com</td>
                       </tr>
                       <tr>
                           <td> Phone </td>
                           <td> +6012-323-7154</td>
                       </tr>
                       <tr>
                           <td> Address </td>
                           <td> 75, Jalan Taman Jaya,<br> Taman Jaya,<br>
                               59000 Selangor</td>
                       </tr>
                   </table>
               </div>

           </div>
         
    <?php

if(isset($_POST['submit']))
{
  $count=0;

  $sql="SELECT name from `contact`";
  $res=mysqli_query($db,$sql);

  while($row=mysqli_fetch_assoc($res))
  {
    if($row['name']==$_POST['name'])
    {
      $count=$count+1;
    }
  }
  if($count==0)
  {
    mysqli_query($db,"INSERT INTO `contact` VALUES('$_POST[name]', '$_POST[phone]', '$_POST[email]', '$_POST[subject]', '$_POST[message]');");
  ?>
    <script type="text/javascript">
     alert("Registration successful");
    </script>
  <?php
  }
  else
  {

    ?>
      <script type="text/javascript">
        alert("The username already exist.");
      </script>
    <?php

  }

}

?>

</body>
</html>
