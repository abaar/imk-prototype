<header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
  <!--logo start-->
  <a href="{{ route('dashboard') }}" class="logo col-md-2" style="margin-top:17px; text-transform:unset"><b>TydyiUp</b></a>
  <!--logo end-->
  <div class="nav notify-row col-md-6" id="top_menu">
      <!--  notification start -->
      <ul class="nav top-menu">
          <form class="form-horizontal">
                <div class="col-md-12 form-group">
                        <input for="" id="search-input" class="col-md-offset-1 col-sm- col-xs-10" style="height:30px" placeholder="Search...">
                        <button type="button" class="col-sm-1" id="search-btn" style="height:30px" onclick="location.href='{{ Route('search') }}'">
                            <span class="fa fa-search"></span>
                        </button>
                </div>
          </form>
      </ul>
      <!--  notification end -->
  </div>
  <div class="top-menu">
      <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Register</a></li>
          <li><a class="logout" href="{{ route('login') }}">Login</a></li>
      </ul>
  </div>
</header>
<!--header end-->