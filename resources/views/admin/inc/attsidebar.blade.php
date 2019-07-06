<div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
               
                <li>
                    <a href="#"><i class="fa-tachometer-alt-average"></i> Dashboard</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-calendar-check fa-fw"></i>Attendence<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('attendence')}}"><i class="fa fa-angle-double-right"></i> &nbsp;&nbsp; Attendence by Date</a>
                        </li>
                        <li>
                            <a href="{{ url('attendence') }}"><i class="fa fa-angle-double-right"> </i>  &nbsp;&nbsp; Attendence Report </a>
                        </li>
                       
                    </ul>
                    <!-- /.nav-second-level -->
            
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
