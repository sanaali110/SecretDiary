<?php 
/*

if(array_key_exists('email',$_POST) OR array_key_exists('password',$_POST)){
  $link = mysqli_connect("shareddb-t.hosting.stackcp.net","sanaali","sanaali110","userstesting-3133313170");
  if(mysqli_connect_error()){
   die ("Can not connect to the database");
  }
    
      if($_POST["email"] == ""){
        echo "<p>Email is Required</p>";
      }
      
      else if($_POST["password"] == ""){
        echo "<p>Password is Required</p>";
      }
      else{
          $query = "SELECT id FROM users WHERE email = '".mysqli_real_escape_string($link,$_POST['email'])."'";
          $result = mysqli_query($link, $query);
          if(mysqli_num_rows($result) > 0){
             echo "<p>This email address already exixts</p>";
          }
          else{

            $query = "INSERT INTO users (email,password) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['password'])."')";
      
            if(mysqli_query($link,$query)){
              echo "You have been signed up";
            }else{
              echo "There is a problem signing you up!";
            }
          }
      }


     // if ( $result = mysqli_query($link,$query)) {
         // while ($row = mysqli_fetch_array($result)){
         //   print_r($row);
         // }
      //}

}
*/

session_start();

if(array_key_exists('email',$_POST) OR array_key_exists('password',$_POST)){
  $link = mysqli_connect("shareddb-t.hosting.stackcp.net","sanaali","sanaali110","userstesting-3133313170");
  if (mysqli_connect_error()){
die ("Can't connect to the database at this time");
  }

  if($_POST["email"] == ""){
    echo "<p>Email is required</p>";
  }
  if($_POST["password"]== ""){
    echo "<p>Password is required</p>";
  }
  $query = "SELECT * FROM users WHERE email = '".mysqli_real_escape_string($link,$_POST['email'])."'";
  $result = mysqli_query($link,$query);


if(mysqli_num_rows($result)> 0 ){

 
 echo "Email already exist";
 

 }
 else
 {
  $query = "INSERT INTO users (email,password) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['password'])."')";

  if(mysqli_query($link,$query)){
    $_SESSION['email'] = $_POST['email'];
    
    header("Location: session.php");




  }else{
    echo "There is a problem signing you up!";
  }
}

}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="styles.css" rel= "stylesheet" type="text/css">
    <title>Signup Form</title>
  </head>
  <body>
    
    <div class="container" id="main-container">
    <h1>Sign-up /Login</h1>
    <br/>
    <br/>
        <div class="form-content col-md-8">
            <form method="post">
                <div class="form-group">
                    <label for ="email">Email address:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="e.g abc@hotmail.com">
                </div>
            
                <div class="form-group">
                    <label for= "password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
            
                <button type= "submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script type="text/javascript">
  $(document).ready(function() {

  });
   
  </script>
  
  </body>
</html>
