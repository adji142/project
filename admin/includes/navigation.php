<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <a href="/tutorial/admin/index.php" class="navbar-brand">Home Alisha Collection</a>
    <ul class="nav navbar-nav">
      <!-- Menu Items-->
      <li><a href="brands.php">Brands</a></li>
      <li><a href="categories.php">Categories</a></li>
      <li><a href="products.php">Products</a></li>
      <li><a href="archived.php">Archived</a></li>
      <?php if (has_permissions('admin')): ?>
        <li><a href="users.php">Users</a></li>
      <?php endif; ?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi, <?=$user_data['first'];?>!
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="change_password.php">Ganti Password</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </li>
      <!-- <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$key['category'];?> <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#"></a></li>
        </ul>
      </li>
    </ul> -->
  </div>
</nav>
