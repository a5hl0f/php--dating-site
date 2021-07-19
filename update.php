<?php include "./connection.php";?>

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
 $query="UPDATE tinder SET ";
 $query .="username ='{$username_i}',";
 $query .="password ='{$password_i}',";
 $query .="gender ='{$gender_i}',";
 $query .="age_i ='{$age_i}',";
 $query .="address ='{$address_i}',";
 
 $query .=" WHERE username ='{$username_i}'";
 global $connection;
 $query_up=mysqli_query($connection,$query);
}
?>
<?php include "./header.php";?>
<style>@import url("style.css");</style>
<body>
<div class="login">
<h1>online : <?php echo $_SESSION['username'];?></h1>
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