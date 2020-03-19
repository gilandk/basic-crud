<?php
include('header.php');
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <br />
  <h2 class="page-header">Accounts</h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Registration #</th>
          <th>Registration Date</th>
          <th>Last name</th>
          <th>First name</th>
          <th>Middle name</th>
          <th>Email Address</th>
          <th>Contact</th>
          <th>House #</th>
          <th>St #/Subd/Blk</th>
          <th>Barangay</th>
          <th>Municipality</th>
          <th>Province</th>
        </tr>
      </thead>
      <?php

      $sql = "SELECT * FROM users ORDER BY regNo ASC";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($rows = $result->fetch_array()) {

      ?>
          <tbody>

            <td><?php echo $rows['regNo']; ?></td>
            <td><?php echo $rows['regDate']; ?></td>
            <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="lname_<?php echo $rows['userid']; ?>"><?php echo $rows['lname']; ?></td>
            <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="fname_<?php echo $rows['userid']; ?>"><?php echo $rows['fname']; ?></td>
            <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="midname_<?php echo $rows['userid']; ?>"><?php echo $rows['midname']; ?></td>
            <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="email_<?php echo $rows['userid']; ?>"><?php echo $rows['email']; ?></td>
            <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="contact_<?php echo $rows['userid']; ?>"><?php echo $rows['contact']; ?></td>
            <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="hNO_<?php echo $rows['userid']; ?>"><?php echo $rows['hNO']; ?></td>
            <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="stNO_<?php echo $rows['userid']; ?>"><?php echo $rows['stNO']; ?></td>
            <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="brgy_<?php echo $rows['userid']; ?>"><?php echo $rows['brgy']; ?></td>
            <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="municipality_<?php echo $rows['userid']; ?>"><?php echo $rows['municipality']; ?></td>
            <td data-toggle="tooltip" data-placement="top" title="Click to Edit" contenteditable="true" class="edit" id="province_<?php echo $rows['userid']; ?>"><?php echo $rows['province']; ?></td>

          </tbody>

      <?php
        }
      }
      ?>
    </table>
  </div>
</div>
</div>
</div>

<?php
include('footer.php');
?>