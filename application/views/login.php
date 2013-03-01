<h3>User Login</h3>
<div>
  <form action="/login" method="post">
    <div>
      <label>Username</label>
      <input type="text" name="username" />
    </div>
    <div>
      <label>Password</label>
      <input type="password" name="password" />
    </div>
    <input type="submit" value="Login" class="button" />
</div>
<p>
  Not yet a member? Click <a href="<?php echo site_url('user/create');?>">here</a> to register.
</p>