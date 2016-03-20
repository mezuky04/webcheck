<!-- BEGIN Header -->
<nav class="light-blue lighten-1" role="navigation">

    <div class="nav-wrapper container">
        <a id="logo-container" href="/" class="brand-logo">
            <i class="material-icons medium left">done</i>
            <span class="blue-grey-text darken-4">web</span>check.xyz
        </a>

        <!-- BEGIN Menu -->
        <ul class="right hide-on-med-and-down">

            @if (!empty($loggedIn))
            <!-- BEGIN Admin center drop down -->
            <li>
                <!-- BEGIN Drop down trigger -->
                <a class="dropdown-button" href="#!" data-activates="admin-center-dropdown">
                    <i class="material-icons left">assignment_ind</i>{{ trans('layout.admin_center') }}<i class="material-icons right">arrow_drop_down</i>
                </a>
                <!-- END Drop down trigger -->

                <!-- BEGIN Drop down structure -->
                <ul id='admin-center-dropdown' class='dropdown-content'>
                    <li><a href="/admin-center/messages">{{ trans('layout.messages') }}</a></li>
                    <li><a href="/admin-center/statistics">{{ trans('layout.statistics') }}</a></li>
                </ul>
                <!-- END Drop down structure -->

            </li>
            <!-- END Admin center drop down -->
            @endif

            @if (!empty($loggedIn))
            <!-- BEGIN User -->
            <li>
                <a href="/logout"><i class="material-icons left">perm_identity</i>{{ $email }}</a>
            </li>
            <!-- END User -->
            @endif
        </ul>
        <!-- END Menu -->

        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
<!-- END Header -->