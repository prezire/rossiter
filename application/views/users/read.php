<?php
  foreach($users as $user)
  {
?>
    <h6>Full Name:</h6> <?php echo $user['full_name'];?>
    <h6>NGO:</h6> <?php echo $user['name'];?>
    <h6>Username:</h6> <?php echo $user['username'];?>
    <h6>Email:</h6> <?php echo $user['email'];?>
    <hr />
    <p>
      <a href="<?php echo site_url('user'); ?>">Back</a> | 
      <a href="<?php echo site_url('user/update/' . $user['id']); ?>">Edit</a>
    </p>
<?php
  }
?>