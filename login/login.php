
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title><style>
      .card-holder{
         margin-top:12rem;
         margin-left:35rem; 
        
      }
      .card-title{
        text-align:center;
        font-weight: bold;
        font-size:24px;
       margin-bottom:1.5rem;
        
      }
      #pass{
       justify-content:center;
       align-items:left;

      }
      #us{
        font-size:16px;
      }
      .form-control{
        margin-top:6px;
      }
      body{
       background-color:#A8A4D8;
      }
      .btn:hover{
        border-color:#7693A3;
      }
    </style>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <link rel="stylesheet" type="text/css" href="style.php"/>

  <body>
  
  <div class="card-holder">
  <div class="card" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title">Login here</h5>
    
    <form action="validation.php" method="POST">
  <div class="form-group">
    <label for="exampleInputUsername" id="us">Username</label>
    <br>
    <input type="text" class="form-control" id="InputUsername" placeholder="Enter username"  name="loginid" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" id="pass">Password</label>
    <br>
    <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="login_pass" required>
  </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
    </div>
    </body>
</html>


