<h4>All registered NGOs</h4>
<?php
  if($ngos)
  {
    echo '<table>';
    foreach($ngos as $ngo)
    {
?>
      <thead>
        <tr>
          <th>Name</th> 
          <th>Description</th>
          <th>Email</th>
          <th>Landline</th>
          <th>Fax</th>
          <th>Address</th>
          <th>Industry</th>
          <th>Government Registration ID</th>
          <th>Options</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $ngo['name'];?></td>
          <td><?php echo $ngo['description'];?></td>
          <td><?php echo $ngo['email'];?></td>
          <td><?php echo $ngo['landline'];?></td>
          <td><?php echo $ngo['fax'];?></td>
          <td><?php echo $ngo['address'];?></td>
          <td><?php echo $ngo['industry'];?></td>
          <td><?php echo $ngo['government_registration_id'];?></td>
            <td>
              <a href="<?php echo site_url('ngo/edit/' . $ngo['id']); ?>">Edit</a> | 
              <a href="<?php echo site_url('ngo/delete/' . $ngo['id']); ?>">Delete</a>
            </td>
        </tr>
      </tbody>
<?php
    }
    echo '</table>';
  }
?>

<p>
  Is your NGO not yet registered? 
  Click <a href="<?php echo site_url('ngo/create');?>">here</a> to register.
</p>