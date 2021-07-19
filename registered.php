
<?php include "./connection.php";?>
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
    <h1>online:<?php echo $_SESSION['username'];?></h1>
   <div class="payment"><a href="payment.php" >membership </a></div>
     <table>
       <thead>
         <tr>
           <th>username</th>
           <th>gender</th>
           <th>age</th>
           <th>address</th>
           <th>interest</th>
         </tr>
      
       </thead>
      <tbody>
      <?php 
    
        $query="SELECT * FROM tinder ";
        global $connection;
        $query_view=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($query_view)){
           $view_username=$row['username'];
           $view_password=$row['password'];
           $view_gender=$row['gender'];
          

         if(isset($_POST['login'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            
            
             
            if($username==$view_username && $password==$view_password){
              $_SESSION['username']=$view_username;
              


                $query_register="SELECT * FROM tinder WHERE gender !='$view_gender' ";
                global $connection;
                $query_register_all=mysqli_query($connection,$query_register);
                while($row=mysqli_fetch_assoc($query_register_all)){

                     $reg_username=$row['username'];
                     $reg_gender=$row['gender'];
                     $reg_age=$row['age'];
                     $reg_address=$row['address'];
                     $reg_interest=$row['interest'];
      
                     echo "<tr>";
                     echo "<td>$reg_username</td>";
                     echo "<td>$reg_gender</td>";
                     echo "<td>$reg_age</td>";
                     echo "<td>$reg_address</td>";
                     echo "<td>$reg_interest</td>";
                     echo "</tr>";
                }
                
            
            }

          }
        }
          ?>
       </tbody>
    </table>
    <a href="./logout.php"><button  name="logout">logout</button></a>
    <a href="./edit.php"><button  name="edit">edit</button></a>


    </div>
    
          
<?php include "./footer.php"; ?>