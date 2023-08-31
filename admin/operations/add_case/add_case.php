<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Update user</title>
</head>
<body>
      <center>
    <form action="insert_case.php" method="POST">
  <!-- <h1>FORMS - INPUTS</h1> -->
  
  <!-- Inputs -->
  
  <p>
  <label for="caseid" id="m">
    Case id:
    <input  name="case_id" placeholder="Enter case ID here" type="text" id="casei" required>
  </label>
    </p>
  <!-- Textarea -->
  <p>
  <label id="id">
    Case branch:
    <input name="c_branch" placeholder="Enter case branch" type="text" required id="cbid"></input>
  </label>
    </p>
    
    <p>
  <label id="crid">
    Criminal ID:
    <input name="cr_id" placeholder="Enter Criminal ID" type="text" required id="cbid"></input>
  </label>
    </p>
    
  <p>
  <label id="userid">
    User IDS:
    <input name="user_id" placeholder="Enter user ID" type="text" id ="uid"required></input>
  </label>
    </p>

    <p>
  <label id="loc">
    Crime location:
    <input name="cr_loc" placeholder="Enter the crime location" type="text" id ="lid"required></input>
  </label>
    </p>

    <p>
  <label id="victimid">
    Victim ID:
    <input name="victim_id" placeholder="Enter Victim ID" type="text" id ="vid"required></input>
  </label>
    </p>

    

    <input type="submit" value="Submit">
</form>
    </center>
  </body>
</html>