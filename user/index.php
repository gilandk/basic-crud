<?php
include('header.php');
?>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <br />
        <h2 class="page-header">My Info</h2>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Information</th>
              </tr>
            </thead>
            <tbody>

              <?php

              $sql = "SELECT * FROM users WHERE userid='$_SESSION[id_user]'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
              ?>

                  <tr>
                    <td>Registration #</td>
                    <td><?php echo $row['regNo']; ?></td>
                  </tr>

                  <tr>
                    <td>First name</td>
                    <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="fname_<?php echo $row['userid']; ?>"><?php echo $row['fname']; ?></td>
                  </tr>

                  <tr>
                    <td>Middle name</td>
                    <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="midname_<?php echo $row['userid']; ?>"><?php echo $row['midname']; ?></td>
                  </tr>

                  <tr>
                    <td>Last name</td>
                    <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="lname_<?php echo $row['userid']; ?>"><?php echo $row['lname']; ?></td>
                  </tr>

                  <tr>
                    <td>Username</td>
                    <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="user_<?php echo $row['userid']; ?>"><?php echo $row['user']; ?></td>
                  </tr>
                  <tr>
                    <td>Email Address</td>
                    <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="email_<?php echo $row['userid']; ?>"><?php echo $row['email']; ?></td>
                  </tr>

                  <tr>
                    <td>Contact #</td>
                    <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="contact_<?php echo $row['userid']; ?>"><?php echo $row['contact']; ?></td>
                  </tr>

                  <tr>
                    <td>House #</td>
                    <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="hNO_<?php echo $row['userid']; ?>"><?php echo $row['hNO']; ?></td>
                  </tr>

                  <tr>
                    <td>St. #/Subd/Blk</td>
                    <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="stNO_<?php echo $row['userid']; ?>"><?php echo $row['stNO']; ?></td>
                  </tr>

                  <tr>
                    <td>Barangay</td>
                    <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="brgy_<?php echo $row['userid']; ?>"><?php echo $row['brgy']; ?></td>
                  </tr>

                  <tr>
                    <td>Municipality</td>
                    <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="municipality_<?php echo $row['userid']; ?>"><?php echo $row['municipality']; ?></td>
                  </tr>

                  <tr>
                    <td>Province</td>
                    <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="province_<?php echo $row['userid']; ?>"><?php echo $row['province']; ?></td>
                  </tr>

                  <tr>
                    <td>Registration Date</td>
                    <td><?php echo date("F/d/Y", strtotime($row['regDate'])); ?></td>
                  </tr>

              <?php
                }
              }
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('footer.php');
  ?>