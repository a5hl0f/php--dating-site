<?php include "./connection.php";?>
<?php require('conf.php');?>


<?php

 if(isset($_POST['submit'])){
   
  $username_i=$_POST['username'];
  $password_i=$_POST['password'];
  $gender_i=$_POST['gender'];
  $age_i=$_POST['age'];
  $address_i=$_POST['address'];
  $interest_i=$_POST['interests'];
  
  $int="";
  foreach($interest_i as $int1){
    $int.=$int1 . ',';
  }
  //encrypt password 
  $hashformat="$2y$10$";
  $salt="iusesomecrazything22";
  $hashf_and_salt=$hashformat . $salt;
  $password_i=crypt($password_i,$hashf_and_salt);
  
   $query_insert="INSERT INTO  tinder (username,password,gender,age,address,interest) VALUES ('$username_i','$password_i','$gender_i',$age_i,'$address_i','$int')";

   global $connection;
   $query_=mysqli_query($connection,$query_insert);
   if(!$query_){
   
       die("connection fail");
     }

  }
 ?>
<?php include "./header.php";?>
<style>@import url("style.css");
.payment{
  text-align:right;
  
}
.payment a{
  text-decoration:none;
  font-size:30px;
  color:red;
  
}


</style>
<body>
<div class="login">
<h1>online : <?php echo $_SESSION['username'];?></h1>
<div class="payment"></div><a href="payment.php">membership </a></div>

  <table>
    <thead>
     <tr>
     <th>username</th>
     <th>gender</th>
     <th>age</th>
     <th>address</th>
     <th>interests</th>
     </tr>
      
    </thead>
    <tbody>
    
    <?php 
    
           if(isset($_POST['submit'])){
             $gender=$_POST['gender'];
             $username=$_POST['username'];
             $_SESSION['username']=$username;
             $query="SELECT * FROM tinder WHERE gender !='$gender' ";
             global $connection;
             $query_view=mysqli_query($connection,$query);
             while($row=mysqli_fetch_assoc($query_view)){
                $view_username=$row['username'];
                $view_password=$row['password'];
                $view_gender=$row['gender'];
                $view_age=$row['age'];
                $view_address=$row['address'];
                $view_interest=$row['interest'];
                
               

                echo "<tr>";
                echo "<td>$view_username</td>";
                echo "<td>$view_gender</td>";
                echo "<td>$view_age</td>";
                echo "<td>$view_address</td>";
                echo "<td>$view_interest</td>";
                echo "</tr>";


              }
            }
    
    
    
    ?>
    
    
    </tbody>
  </table>
  <a href="./logout.php"><button  name="logout">logout</button></a>

  </div>
  
<?php include "./footer.php"; ?>