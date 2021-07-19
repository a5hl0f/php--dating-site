<?php include "./header.php";?>
<?php 

?>
<style>
    @import url("style.css");
</style>
<body>
    <div class="login">
<form action="./registered.php" method="POST">
<label for="name"> name:</label>
<input type="text" id="name" name="username"  placeholder="Name"><br><br>
 
<label for="name"> password:</label>
<input type="password"  name="password"  placeholder="Password"><br>
<button style="submit" name="login">login</button>
</form>
<a href="index.php"><button style="submit" name="register">register</button></a>

</div>
    
<?php include "./footer.php";?>