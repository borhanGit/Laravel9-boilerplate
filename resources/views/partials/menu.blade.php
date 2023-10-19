<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
                <a href="{{ route("admin.home") }}">
                    <i class="fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <span>{{ trans('cruds.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <li class="{{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('cruds.permission.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.role.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('cruds.user.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('company_access')
                <li class="{{ request()->is("admin/companies") || request()->is("admin/companies/*") ? "active" : "" }}">
                    <a href="{{ route("admin.companies.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.company.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('sub_company_access')
                <li class="{{ request()->is("admin/sub-companies") || request()->is("admin/sub-companies/*") ? "active" : "" }}">
                    <a href="{{ route("admin.sub-companies.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.subCompany.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('branch_access')
                <li class="{{ request()->is("admin/branches") || request()->is("admin/branches/*") ? "active" : "" }}">
                    <a href="{{ route("admin.branches.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.branch.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('department_access')
                <li class="{{ request()->is("admin/departments") || request()->is("admin/departments/*") ? "active" : "" }}">
                    <a href="{{ route("admin.departments.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.department.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('designation_access')
                <li class="{{ request()->is("admin/designations") || request()->is("admin/designations/*") ? "active" : "" }}">
                    <a href="{{ route("admin.designations.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.designation.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('grade_access')
                <li class="{{ request()->is("admin/grades") || request()->is("admin/grades/*") ? "active" : "" }}">
                    <a href="{{ route("admin.grades.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.grade.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('rank_access')
                <li class="{{ request()->is("admin/ranks") || request()->is("admin/ranks/*") ? "active" : "" }}">
                    <a href="{{ route("admin.ranks.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.rank.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('employee_access')
                <li class="{{ request()->is("admin/employees") || request()->is("admin/employees/*") ? "active" : "" }}">
                    <a href="{{ route("admin.employees.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.employee.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('attendance_access')
                <li class="{{ request()->is("admin/attendances") || request()->is("admin/attendances/*") ? "active" : "" }}">
                    <a href="{{ route("admin.attendances.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.attendance.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('holiday_access')
                <li class="{{ request()->is("admin/holidays") || request()->is("admin/holidays/*") ? "active" : "" }}">
                    <a href="{{ route("admin.holidays.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.holiday.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('weekly_holiday_access')
                <li class="{{ request()->is("admin/weekly-holidays") || request()->is("admin/weekly-holidays/*") ? "active" : "" }}">
                    <a href="{{ route("admin.weekly-holidays.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.weeklyHoliday.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('leave_type_access')
                <li class="{{ request()->is("admin/leave-types") || request()->is("admin/leave-types/*") ? "active" : "" }}">
                    <a href="{{ route("admin.leave-types.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.leaveType.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('leave_application_access')
                <li class="{{ request()->is("admin/leave-applications") || request()->is("admin/leave-applications/*") ? "active" : "" }}">
                    <a href="{{ route("admin.leave-applications.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.leaveApplication.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('salary_allowance_access')
                <li class="{{ request()->is("admin/salary-allowances") || request()->is("admin/salary-allowances/*") ? "active" : "" }}">
                    <a href="{{ route("admin.salary-allowances.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.salaryAllowance.title') }}</span>

                    </a>
                </li>
            @endcan
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="{{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}">
                        <a href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>
    </section>
</aside>