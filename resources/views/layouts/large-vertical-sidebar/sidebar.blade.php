<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true" style="
    background: #6fbad7;">
        <ul class="navigation-left">
            <li class="nav-item {{ request()->is('dashboard/*') ? 'active' : '' }}">
                <a class="nav-item-hold" href="{{route('dashboard')}}">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">{{__('Dashboard')}}</span>
                </a>
                <div class="triangle"></div>
            </li>

            <?php  $user =  Auth::user(); if($user->login_type == "Admin"){?>
            <li class="nav-item {{ request()->is('roles/*') ? 'active' : '' }}">
                <a class="nav-item-hold" href="{{route('roles.index')}}">
                    <i class="nav-icon i-Library"></i>
                    <span class="nav-text">{{__('Roles')}}</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{ request()->is('stations/*') ? 'active' : '' }}">
                <a class="nav-item-hold" href="{{route('stations.index')}}">
                    <i class="nav-icon i-Suitcase"></i>
                    <span class="nav-text">{{__('Stations')}}</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{ request()->is('users/*') ? 'active' : '' }}">
                <a class="nav-item-hold" href="{{route('users.index')}}">
                    <i class="nav-icon i-Computer-Secure"></i>
                    <span class="nav-text">{{__('Users')}}</span>
                </a>
                <div class="triangle"></div>
            </li>
           
            <li class="nav-item {{ request()->is('question_category/*') ? 'active' : '' }}">
                <a class="nav-item-hold" href="{{route('question_category.index')}}">
                    <i class="nav-icon i-Computer-Secure"></i>
                    <span class="nav-text">{{__('Question Category')}}</span>
                </a>
                <div class="triangle"></div>
            </li>

        <?php }  ?>

        <?php if($user->login_type == "Manager" ||  $user->login_type == "Admin" || $user->login_type == "Station Supervisor"){ ?>
            <li class="nav-item {{ request()->is('surveyquestions/*') ? 'active' : '' }}" data-item="survey">
                <a class="nav-item-hold" href="{{route('surveyquestions.index')}}">
                    <i class="nav-icon i-File-Clipboard-File--Text"></i>
                    <span class="nav-text">{{__('Survey')}}</span>
                </a>
                <div class="triangle"></div>
            </li>
        <?php }  ?>


        <?php if($user->login_type == "Manager" || $user->login_type == "Facility Manager" || $user->login_type == "Admin"  || $user->login_type == "Station Supervisor" || $user->login_type == "Car Care Manager"){ ?>

            <li class="nav-item {{ request()->is('fmrs/*') ? 'active' : '' }}" data-item="fmr">
                <a class="nav-item-hold" href="">
                    <i class="nav-icon i-File-Clipboard-File--Text"></i>
                    <span class="nav-text">{{__('FMR')}}</span>
                </a>
                <div class="triangle"></div>
            </li>

        <?php } ?>
    

        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <!-- Submenu Dashboards -->
        
        <ul class="childNav" data-parent="survey">
            <?php if($user->login_type == "Admin"){?>
            <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='surveyquestions.index' ? 'open' : '' }}" href="{{route('surveyquestions.index')}}">
                    <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                    <span class="item-name">{{__('Survey Qstns')}}</span>
                </a>
            </li>
            <?php } ?>
            
        
            <?php if($user->login_type == "Manager" || $user->login_type == "Admin" || $user->login_type == "Station Supervisor"){?>
            <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='surveys.index' ? 'open' : '' }}" href="{{route('surveys.index')}}">
                    <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                    <span class="item-name">{{__('Survey')}}</span>
                </a>
            </li>
            

            <?php } ?>

           
        </ul>

        <ul class="childNav" data-parent="fmr">
            <?php if($user->login_type == "Admin"){?>
            <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='issuecategories.index' ? 'open' : '' }}" href="{{route('issuecategories.index')}}">
                    <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                    <span class="item-name">{{__('Issue Category')}}</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='issuetypes.index' ? 'open' : '' }}" href="{{route('issuetypes.index')}}">
                    <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                    <span class="item-name">{{__('Issue Type')}}</span>
                </a>
            </li>

            <?php } ?>
            <?php if($user->login_type == "Admin" || $user->login_type == "Station Supervisor" || $user->login_type == "Facility Manager" || $user->login_type == "Manager"){?>
            <li class="nav-item">
                <a class="{{ Route::currentRouteName()=='fmrs.index' ? 'open' : '' }}" href="{{route('fmrs.index')}}">
                    <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                    <span class="item-name">{{__('List')}}</span>
                </a>
            </li>
           <?php } ?>
            
           
        </ul>

        
        
    </div>
    <div class="sidebar-overlay"></div>
</div>
<!--=============== Left side End ================-->