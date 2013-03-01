<h3>Update user</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('form/update'); ?>
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
  
  <input type="submit" 
          class="button" 
          value="Create" />
</form>