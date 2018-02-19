<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>

    {{--Menu Admininstrator--}}
    <li class="treeview">
        <a href="#"><i class="fa fa-lock"></i> <span>Administrator</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
        <ul class="treeview-menu">
            {{--Menu user--}}
            <li class="treeview"><a href="#"><i class="fa fa-user fa-fw"></i> User <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                <ul class="treeview-menu">
                    <li><a href="{{route('user.create')}}">&nbsp;&nbsp;&nbsp;&nbsp; Create</a></li><li class="treeview">
                    <li><a href="{{route('user.index')}}">&nbsp;&nbsp;&nbsp;&nbsp; View</a></li><li class="treeview">
                </ul>
            </li>

            {{--branch--}}
            <li class="treeview"><a href="#"><i class="fa fa-university fa-fw"></i> Branch <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                <ul class="treeview-menu">
                    <li><a href="{{route('branch.create')}}">&nbsp;&nbsp;&nbsp;&nbsp; Create</a></li><li class="treeview">
                </ul>
            </li>
            {{---end branch--}}
            {{--staff--}}
            <li class="treeview"><a href="#"><i class="fa fa-users"></i> Staff <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                <ul class="treeview-menu">
                    <li><a href="{{route('staff.create')}}">&nbsp;&nbsp;&nbsp;&nbsp; Create</a></li><li class="treeview">
                </ul>
            </li>
            {{---end staff--}}

        </ul>



    </li>
    {{--End menu administrator--}}</ul>