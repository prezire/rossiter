<h4>All registered users</h4>
<?php
  if($users)
  {
    echo '<table>';
    foreach($users as $user)
    {
?>
      <thead>
        <th>Full Name</th>
        <th>NGO</th>
        <th>Username</th>
        <th>Email</th>
        <th>Options</th>
      </thead>
      <tr>
        <td><?php echo $user['full_name'];?></td>
        <td><?php echo $user['name'];?></td>
        <td><?php echo $user['username'];?></td>
        <td><?php echo $user['email'];?></td>
        <td>
          <a href="<?php echo site_url('user/edit/' . $user['id']); ?>">Edit</a> | 
          <a href="<?php echo site_url('user/delete/' . $user['id']); ?>">Delete</a>
        </td>
      </tr>
<?php
    }
    echo '</table>';
  }
?>