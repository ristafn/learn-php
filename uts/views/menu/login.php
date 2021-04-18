<?php
require_once 'models/Member.php'
?>
<div class="row">
  <div class="col-6">
    <h2>Form Login</h2>
    <form method="POST" action="controllers/memberController.php">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
  <div class="col-6"></div>
</div>