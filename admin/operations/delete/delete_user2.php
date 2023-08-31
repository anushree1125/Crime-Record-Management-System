if ($res==1) {
          ?>
              <div class="alert alert-success alert-dismissible" id="alert-width">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Deletion successful!</strong>
              <?php
            } else {
              ?>
                <div class="alert alert-danger alert-dismissible" id="alert-width">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Deletion unsuccessful!</strong>
            <?php
            }
            mysqli_close($conn);
          }
        }
      } else {
            ?>
            <div class="alert alert-danger alert-dismissible" id="alert-width">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Invalid police id!</strong>

            </div>
        <?php }
?>