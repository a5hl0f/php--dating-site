<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
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
<textarea name="comment" id="summernote" cols="30" rows="10"></textarea>

 
  <button style="submit" name="submit">Register</button>
</form>

    
</body>
</html>