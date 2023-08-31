
		<?php

		$conn = mysqli_connect("localhost", "root", "", "crime3");

		if ($conn === false) {
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		?>
        <div class="id3">
            <form method='POST' action="del2.php">
              <label class="label" for="name">Police name:</label><br>
              <input class="user_id val" type="text" id="name" value="<?php echo $row['user_name'] ?>">
              <br>
              <label class="label" for="id">Police id:</label><br>
              <input class="user_id val" type="text" id="pass" name="user_id" value="
 <?php echo $row["user_id"]; ?>">
              <br>

              <label class="label" for="pass">Authentication password:</label><br>
              <input class="user_id val" type="text" id="lname" value="
 <?php echo $row["user_password"]; ?>" readonly>
              <br>
              <input class="sub" type="submit" value="del" name="del"/>
            </form>
          </div>
		<?php
		if(isset($_REQUEST['user_id'])){
			include_once('del2.php');
		}
		?>
