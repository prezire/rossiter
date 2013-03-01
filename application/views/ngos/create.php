<h3>New NGO</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('ngo/create'); ?>
  <label>Name</label>
  <input type="text" 
          name="name" 
          value="<?php echo set_value('name'); ?>" />
          
  <label>Description</label>
  <textarea name="description"><?php echo set_value('name'); ?></textarea>
  
  <label>Email</label>
  <input type="text" 
          name="email" 
          value="<?php echo set_value('email'); ?>" />

  <label>Landline</label>
  <input type="text" 
          name="landline" 
          value="<?php echo set_value('landline'); ?>" />
          
  <label>Fax</label>
  <input type="text" 
          name="fax" 
          value="<?php echo set_value('fax'); ?>" />
          
  <label>Address</label>
  <textarea name="address"><?php echo set_value('address'); ?></textarea>
          
  <label>Industry</label>
  <input type="text" 
          name="industry" 
          value="<?php echo set_value('industry'); ?>" />
  
  <label>Government Registration ID</label>
  <input type="text" 
          name="government_registration_id" 
          value="<?php echo set_value('government_registration_id'); ?>" />
  
  <input type="submit" 
          class="button" 
          value="Create" />
</form>