<aside>
    <div id="sidebar"  class="nav-collapse">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        
              <p class="centered"><a href="profile.html"><img src="{{ asset('img/ui-sam.jpg') }}" class="img-circle" width="60"></a></p>
              <h5 class="centered">Marcel Newman</h5>
                  
            <li class="mt">
                <a href="{{ route('profile') }}">
                    <i class="fa fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Upload new post</span>
                </a>
                <ul class="sub">
                    <li><a  href="general.html">Upload Video</a></li>
                    <li><a  href="buttons.html">Upload Article</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span>
                </a>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->