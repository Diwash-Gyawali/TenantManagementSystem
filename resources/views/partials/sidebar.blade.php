@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('Dashboard')</span>
                </a>
            </li>

            
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('global.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('permission_access')
                <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.permissions.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.users.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('property_access')
                <li class="{{ $request->segment(2) == 'properties' ? 'active' : '' }}">
                    <a href="{{ route('admin.properties.index') }}">
                        <i class="fa fa-gears"></i>
                        <span class="title">@lang('global.properties.title')</span>
                    </a>
                </li>

                <li class="{{ $request->segment(2) == 'tenants' ? 'active' : '' }}">
                    <a href="{{ route('admin.tenants.index') }}">
                        <i class="fa fa-gears"></i>
                        <span class="title">@lang('global.tenants.title')</span>
                    </a>
                </li>
            @endcan
            
            @can('document_access')
            <li class="{{ $request->segment(2) == 'documents' ? 'active' : '' }}">
                <a href="{{ route('landlord.bill_details.create') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('Bill Details')</span>
                </a>
            </li>
            @endcan
            
            @can('note_access')
            <li class="{{ $request->segment(2) == 'View' ? 'active' : '' }}">
                <a href="{{ route('admin.notes.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('Tenant Details')</span>
                </a>
            </li>
            @endcan
            

            

            
            {{-- @php ($unread = App\MessengerTopic::countUnread()) --}}
            {{-- <li class="{{ $request->segment(2) == 'messenger' ? 'active' : '' }} {{ ($unread > 0 ? 'unread' : '') }}"> --}}
                <li>
                <a href="{{ route('landlord.tenant_details.create') }}">
                    <i class="fa fa-envelope"></i>

                    <span>Notifications</span>
                    {{-- @if($unread > 0)
                        {{ ($unread > 0 ? '('.$unread.')' : '') }}
                    @endif --}}
                </a>
            </li>
            <style>
                .page-sidebar-menu .unread * {
                    font-weight:bold !important;
                }
            </style>



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('landlord.tenant_details.create') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('Change Password')</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('landlord.property_details.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('Room Details')</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('landlord.bill_details.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('Bill Details')</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('tenant_index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('Tenant Details')</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('landlord.evacuation_notice.template') }}">
                    <i class="fa fa-envelope"></i>
                    <span class="title">@lang('Evacuation Notice')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('Logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

