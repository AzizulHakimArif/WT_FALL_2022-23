<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    
    , initial-scale=1.0">
    <title>Admin</title>
</head>
<body>

    <h1>Registration</h1>
    


<form action="/registration" method="post">
    @csrf
  <label for="name">First name:</label><br>
  <input type="text" id="name" name="name" placeholder="Enter Your name"><br>
  @error('name')
  {{$message}}
  @enderror
  <label for="email">Last name:</label><br>
  <input type="text" id="email" name="email" placeholder="Enter your e-mail"><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>