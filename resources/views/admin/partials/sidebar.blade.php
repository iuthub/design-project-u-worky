<div id="slide-out" class="side-nav fixed">
    <ul class="custom-scrollbar">
        <!-- Logo -->
        <li>
            <div class="logo">
                <a href="#"><img src="{{asset('frontend/img/logo.png')}}"></a>
            </div>
        </li>
        <!-- /Logo -->

        <li class="user-profile">
            <img src="{{asset('frontend/img/employer-logo-turon.png')}}" alt="" class="my-auto">
            <h4>
                Turon Telecom
            </h4>
        </li>

        <!-- Side navigation links -->
        <li>
            <ul class="dashboard-menu">
                <li><a href="{{route('admin.main')}}"  ><i
                            class=" ion-ios-contact pr-3"></i>
                        <span>DASHBOARD</span></a>
                </li>
                <li><a href="{{route('admin.addnewjob')}}"  ><i
                            class=" ion-ios-compose pr-3"></i>
                        <span>ADD NEW JOB</span></a>
                </li>
                <li><a href="{{route('admin.alljobs')}}"  ><i
                            class=" ion-briefcase pr-3"></i>
                        <span>ALL JOBS</span></a>
                </li>
                <li><a href="dashboard-applications.html"  ><i
                            class=" ion-ios-people pr-3"></i>
                        <span>APPLICATIONS</span></a>
                </li>
                <li><a href="dashboard-saved-resumes.html"  ><i
                            class=" ion-ios-bookmarks pr-3"></i>
                        <span>SAVED RESUMES</span></a>
                </li>
                <li><a onclick="$('#formLogout').submit();">
                    <i class=" fa fas fa-power-off pr-3"></i>
                        <span>LOG OUT</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- /Side navigation links -->

    </ul>
</div>
