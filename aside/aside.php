<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link " href="home.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="home.php">
        <i class="bi bi-layout-text-window-reverse"></i><span>Data Management</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="products/">
            <i class="bi bi-circle"></i><span>Your Products</span>
          </a>
        </li>
        <li>
          <a href="sales/">
            <i class="bi bi-circle"></i><span>Your sales</span>
          </a>
        </li>
        <li>
          <a href="profile/">
            <i class="bi bi-circle"></i><span>Business profile</span>
          </a>
        </li>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
        <li>
          <a href="reports/">
            <i class="bi bi-circle"></i><span>Reports of abuse</span>
          </a>
        </li>
        <?php endif; ?>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
        <li>
          <a href="categories/">
            <i class="bi bi-circle"></i><span>Categories</span>
          </a>
        </li>
        <?php endif; ?>
      </ul>
    </li>
  </ul>
</aside>