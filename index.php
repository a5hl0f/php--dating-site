
<?php include "./header.php";?>
<style>
@import url("style.css");
</style>
<body>
  <div> 
    <h1>Fun with friend </h1>
<div class="login">
<form action="./user.php" method="post">
<label for="name"> name:</label>
<input type="text" id="name" name="username"  placeholder="Name"><br>
<label for="name"> password:</label>
<input type="password" id="password" name="password"  placeholder="Password"><br>
<labe for="Gender">gender:</labe><br>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label><br>
<label for="quantity">age:</label>
<input type="number" id="quantity" name="age" min="18" max="60"><br>
<labe for="Address">Address:</labe>
<input type="text"  name="address" placeholder="Address"><br>

<label for="interest">interest:</label><br>
<input type="checkbox"  name="interests[]" value="movies" >
<label for="movies"> movies</label><br>
<input type="checkbox"  name="interests[]" value="football">
<label for="football"> football</label><br>
<input type="checkbox"  name="interests[]" value="netflix">
<label for="netflix"> netflix</label><br>
<input type="checkbox"  name="interests[]" value="tea">
<label for="tea"> tea</label><br>
<input type="checkbox"  name="interests[]" value="dancing">
<label for="dancing"> dancing</label><br>
<input type="checkbox"  name="interests[]" value="travel">
<label for="travel"> travel</label><br>

 
  <button style="submit" name="submit">Register</button>
</form>
<span>
<a href="./login.php"><button>sign in</button></a> 
</span>
</div></div>

<?php include "./footer.php";?>