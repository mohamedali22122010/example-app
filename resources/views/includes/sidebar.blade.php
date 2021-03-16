<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <div class="user-panel">
      </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{trans('backend.MAIN NAVIGATION')}}</li>
            <!-- Optionally, you can add icons to the links -->
	            <li ><a href="{{route('districts.index')}}"> <i class="fa fa-pie-chart"></i> <span>Districts</span></a></li>
	            <li ><a href="{{route('compounds.index')}}"> <i class="fa fa-pie-chart"></i> <span>Compounds</span></a></li>
	            <li ><a href="{{route('buildings.index')}}"> <i class="fa fa-pie-chart"></i> <span>Buildings</span></a></li>
	            <li ><a href="{{route('promotions.index')}}"> <i class="fa fa-pie-chart"></i> <span>Promotions</span></a></li>
	            <li ><a href="{{route('properties.index')}}"> <i class="fa fa-pie-chart"></i> <span>Properties</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
