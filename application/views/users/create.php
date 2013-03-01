<h3>New user</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('user/create'); ?>
  <label>Full Name</label>
  <input type="text" 
          name="full_name" 
          value="<?php echo set_value('full_name'); ?>" />
  
  <label>Username</label>
  <input type="text" 
          name="username" 
          value="<?php echo set_value('username'); ?>" />
  
  <label>Password</label>
  <input type="password" 
          name="password" 
          value="<?php echo set_value('password'); ?>" />
  
  <label>Email Address</label>
  <input type="text" 
          name="email" 
          value="<?php echo set_value('email'); ?>" />
          
  <label>NGO</label>
  <?php 
    $a_ngos = array();
    foreach($ngos as $ngo)
    {
      $a_ngos[$ngo['id']] = $ngo['name'];
    }
    echo form_dropdown
          (
            'organization_id', 
            $a_ngos, 
            set_value('organization_id')
          ); 
  ?>
  
  <input type="submit" 
          class="button" 
          value="Create" />
</form>