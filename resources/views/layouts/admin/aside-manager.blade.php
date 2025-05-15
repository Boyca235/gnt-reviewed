<!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered">
                <a href="{{route('admin.profile')}}">
                    <img src="{{asset('admin/img/ui-sam.jpg')}}" class="img-circle" width="80" alt="">
                </a>
            </p>
            <h5 class="centered">{{ Auth::user()->name }}</h5>
            <li class="mt">
                <a class="{{Route::currentRouteName()=="dashboard"?'active':''}}" href="{{route('dashboard')}}">
                <i class="fa fa-dashboard"></i>
                <span>Tableau de bord</span>
                </a>
            </li>
            <li class="mt">
                <a class="{{Route::currentRouteName()=="admin.pubs"?'active':''}}" href="{{route('admin.pubs')}}">
                    <i class="fa fa-tv"></i>
                    <span>Publicité</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:" class="{{Route::currentRouteName()=="admin.contains"?'active':''}}">
                    <i class="fa fa-globe"></i>
                    <span>Publications</span>
                </a>
                <ul class="sub">
                    <li>
                        <a href="{{route('admin.contains', ["attr" => "waiting"])}}">
                            <i class="fa fa-hourglass-start"></i>
                            <span>En attente</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.contains', ["attr" => "active"])}}">
                            <i class="fa fa-toggle-on"></i>
                            <span>Actives</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.contains', ["attr" => "expired"])}}">
                            <i class="fa fa-calendar-minus-o"></i>
                            <span>Expirées</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.contains', ["attr" => "removed"])}}">
                            <i class="fa fa-remove"></i>
                            <span>Retirées</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:" class="{{Route::currentRouteName()=="admin.events"?'active':''}}">
                    <i class="fa fa-calendar"></i>
                    <span>Evènement</span>
                </a>
                <ul class="sub">
                    <li>
                        <a href="{{route('admin.events', ["attr" => "inProgress"])}}">
                            <i class="fa fa-list-ol"></i>
                            <span>En cours</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-product-hunt"></i>
                            <span>Programmer</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-archive"></i>
                            <span>Archives</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
