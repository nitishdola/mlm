<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li @if(isset($class) && $class == 'active') class="active" @endif><a href="{{ route('admin.home')}}"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <!-- <li><a href="#"><i class="icon-list-alt"></i><span>Reports</span> </a> </li> -->
        <li class="@if(isset($class) && $class == 'active') dropdown @endif"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Customer</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('admin.create.user')}}">Add New Customer</a></li>
            <li><a href="{{ route('admin.user.index')}}">View All Customer</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container -->
  </div>
  <!-- /subnavbar-inner -->
</div>
<!-- /subnavbar -->
