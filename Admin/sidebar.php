
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
              <i class="ti-palette menu-icon"></i>
              <span class="menu-title">Product</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="product">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="addproduct.php">Add Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="viewproduct.php">Manage Product</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#garage" aria-expanded="false" aria-controls="garage">
              <i class="ti-palette menu-icon"></i>
              <span class="menu-title">Garage</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="garage">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="addgarage.php">Add Garage</a></li>
                <li class="nav-item"> <a class="nav-link" href="viewgarage.php">Manage Garage</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#Employee" aria-expanded="false" aria-controls="Employee">
              <i class="ti-palette menu-icon"></i>
              <span class="menu-title">Employee</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Employee">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="addemployee.php">Add Employee</a></li>
                <li class="nav-item"> <a class="nav-link" href="viewemployee.php">Manage Employee</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#booking" aria-expanded="false" aria-controls="booking">
              <i class="ti-palette menu-icon"></i>
              <span class="menu-title">Manage Booking</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="booking">
              <ul class="nav flex-column sub-menu">
                
                <li class="nav-item"> <a class="nav-link" href="viewproductbooking.php">View Product Booking</a></li>
                
                <li class="nav-item"> <a class="nav-link" href="viewconfirmedproductbooking.php">View Confirmed Product Booking</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#Invoice" aria-expanded="false" aria-controls="Invoice">
              <i class="ti-palette menu-icon"></i>
              <span class="menu-title">Invoice</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Invoice">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="create_invoice.php">Add Invoice</a></li>
                <li class="nav-item"> <a class="nav-link" href="invoice_list.php">Manage Invoice</a></li>
              </ul>
            </div>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>