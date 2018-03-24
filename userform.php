<div class='container'>
  <div class='row'>
      <div class='input-field col s12'>
          <label>Username : </label>
          <input type = 'text' name = 'txtUsername' value = '<?php echo $username ?>' class = 'box'/><br /><br />
      </div>
  </div>
  <div class='row'>
      <div class='input-field col s12'>
          <label>First Name :</label>
          <input type = 'text' name = 'txtFirstName' value = '<?php echo $firstname ?>' class = "box"/><br /><br />
      </div>
  </div>
  <div class='row'>
      <div class='input-field col s12'>
          <label>Last Name :</label>
          <input type = 'text' name = 'txtLastName' value = '<?php echo $lastname ?>' class = 'box'/><br /><br />
      </div>
  </div>
  <div class='row'>
      <div class='input-field col s12'>
          <label>Email :</label>
          <input type = 'text' name = 'txtEmail' value = '<?php echo $email ?>' class = 'box'/><br /><br />
      </div>
  </div>
  <div class='row'>
      <div class='input-field col s12'>
          <input name='txtDOB' type='text' class='datepicker' value='<?php echo $DOB ?>'>
          <label for='txtDOB' data-error='wrong' data-success='right'>Date Of Birth</label>
      </div>
  </div>
  <div class='row'>
      <div class='input-field col s12'>
          <label>Admin</label>
          <input type = 'text' name = 'txtAdmin' value = '<?php echo $admin ?>' class = 'box'/><br /><br />
      </div>
  </div>
