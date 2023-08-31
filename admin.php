
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
        margin: 4px;
        justify-content: space-around;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
      }
      body{
        background-color: #1f5776;;
      }
      .card {
        margin-top: 5rem;
        padding-top: 1rem;
        background-color: rgb(159, 230, 248);
        padding-right: 2rem;
        padding-left: 2rem;
        padding-bottom: 1rem;
        text-align: center;
        border-radius: 1rem;
      }
      p {
        font-size: 19px;
        /* margin-bottom: 1.5rem; */
      }
      h2 {
        margin-top: 3rem;
        text-align: center;
        /* margin-bottom: 2rem; */
        color: #D8D7E0;
      }
      h3 {
        font-size: 24px;
        font-weight: 2rem;
        color: #161428;
        padding-bottom: 1rem;
      }
      .btn {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        font-size: 19px;
        background-color: #1a73e8;
        border-radius: 0.5rem;
        color: balck;
        padding-top: 0.3rem;
        padding-bottom: 0.3rem;
      }
      a {
        color: white;
        text-decoration: none;
      }
      a:hover {
        color: #1a73e8;
      }
      .btn:hover {
        cursor: pointer;
        background-color: white;
        box-shadow: 1px 1px 1px 1px #D8D7E0;
        color: #1a73e8;
      }
      .card:hover {
        box-shadow: 3px 3px 3px 3px #D8D7E0;
      }

      #log{
        color:white;
        margin-left:85rem;

      }
      #log:hover{
        color:#1a73e8;
      }
    </style>
</head>
<body>
<h2>
      Admin home page
    </h2>
    <a href="../logout.php"><button type="submit" class="btn btn-primary" id="log">Logout</button></a>
    <div class="container wrap">
      <div class="card">
        <h3>Dashboard</h3>
        <p class="text">
          Analyse crime records, total number of cases filed<br />total number
          of cops
        </p>
        <button class="btn" type="button">
          <a href="dashboard.php">Submit</a>
        </button>
      </div>
      <div class="card">
        <h3>Update crime</h3>
        <p>Add new crime, delete or update existing crime <br />records</p>
        <button class="btn" type="button">
          <a href="update_crime.php">Submit</a>
        </button>
      </div>
      <div class="card">
        <h3>Update user</h3>
        <p>Add user, delete or update existing user details</p>
        <button class="btn" type="button">
          <a href="update_user.php">Submit</a>
        </button>
      </div>
      <div class="card">
        <h3>Your Profile</h3>
        <p>Change admin username or password</p>
        <button class="btn" type="button">
          <a href="profile.php">Submit</a>
        </button>
      </div>
    </div>

</body>
</html>
