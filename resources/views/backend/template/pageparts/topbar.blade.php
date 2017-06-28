 <div class="topbar">
      <div class="logo">
        <img src="images/logo.jpg" class="img-circle" style="margin: 10px"  alt="onlineshoping" />
      </div>

      <div class="search">
        <i class="fa fa-fw fa-2x fa-search"></i>
        <input type="search" placeholder="Search..." />
      </div>

      <div class="settings">
        <div class="account-wrapper">
          <div class="account">
            <a href="#" id="my-account-link">My Account</a>

          </div>
          <div class="account-dropdown">
            <ul>
              <li class="sub-account"><a href="#"><i class="fa fa-fw fa-cogs"></i>Settings</a></li>
              <li class="sub-account"><a href="{{ url('admin/logout') }}"><i class="fa fa-fw fa-power-off"></i>Logout</a></li>
            </ul>
          </div>
        </div>


        <div class="notifications">
          <i class="fa fa-lg fa-fw fa-bell"></i>
        </div>

      </div>
    </div>