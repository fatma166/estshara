<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{asset('images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme"
                 class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                   data-bs-toggle="dropdown">فاطمة</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>حسابي</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>الاعدادات</span>
                    </a>



                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>تسجيل الخروج</span>
                    </a>

                </div>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                {{--<li class="menu-title">الرئيسية</li>
                <li>
                    <a href="{{url('login')}}">
                        <i data-feather="log-in"></i>
                        <span> تسجيل الدخول </span>
                    </a>
                </li>
                --}}
                <li>
                    <a href="{{route('admin.index')}}">
                        <i data-feather="airplay"></i>
                        <span class="badge bg-success rounded-pill float-end">4</span>
                        <span>  {{__('dashboard')}}</</span>
                    </a>
                </li>

                <li>
                    <a href="#doc" data-bs-toggle="collapse" id="doctors-tour">
                        <i data-feather="calendar"></i>
                        <span> {{__('doctors')}}</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="doc">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{url('admin/doctors/doctor-list')}}"> {{__('all-doctors')}}</a>
                            </li>
                            <li>
                                <a href="{{url('admin/doctors/add-doctor')}}"> {{__('add-doctor')}}</a>
                            </li>
                            <li>
                                <a href="{{url('admin/doctors/add-doctor-details')}}"> {{__('doctor-details')}}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{url('patients/patients-list')}}">
                        <i data-feather="message-square"></i>
                        <span> المرضي </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                        <i data-feather="shopping-cart"></i>
                        <span> التخصصات</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{url('specializations/specializations-list')}}">كل التخصصات</a>
                            </li>
                            <li>
                                <a href="{{url('specializations/add-specializations')}}">اضافة تخصص</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarCrm" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> الاستشارات </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{url('esteshara/esteshara-list')}}">الكل</a>
                            </li>
                            <li>
                                <a href="{{url('esteshara/esteshara-list')}}">الملغيه</a>
                            </li>
                            <li>
                                <a href="{{url('esteshara/esteshara-list')}}">المنتهية</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{url('reviews/reviews-list')}}">
                        <i data-feather="mail"></i>
                        <span> الآراء</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('transactions/transactions-list')}}">
                        <span class="badge bg-pink float-end">40</span>
                        <i data-feather="rss"></i>
                        <span> عمليات الدفع </span>
                    </a>
                </li>

                <li>
                    <a href="{{url('transactions/request-withdraw')}}">
                        <i data-feather="dollar-sign"></i>
                        <span> طلبات سحب الاموال </span>
                    </a>
                </li>

                <li class="menu-title">الخدمات</li>
                <li>
                    <a href="#pharmacy" data-bs-toggle="collapse">
                        <i data-feather="activity"></i>
                        <span> الصيدليات </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="pharmacy">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{url('providers/provider-list')}}">كل الصيدليات</a>
                            </li>
                            <li>
                                <a href="{{url('providers/category')}}">الاقسام</a>
                            </li>
                            <li>
                                <a href="{{url('services/service-list')}}">الخدمات</a>
                            </li>
                            <li>
                                <a href="{{url('services/service-add')}}">اضافة خدمة</a>
                            </li>
                            <li>
                                <a href="{{url('orders/order-list')}}">الطلبات</a>
                            </li>
                            <li>
                                <a href="pharmacist-list.html"> الصيادلة</a>
                            </li>
                            <li>
                                <a href="#">اضافة صيدلي</a>
                            </li>

                            <li>
                                <a href="{{url('orders/order-details')}}">تفاصيل الطلب</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#hospital" data-bs-toggle="collapse">
                        <i data-feather="briefcase"></i>
                        <span> المستشفيات </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="hospital">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">المستشفيات</a>
                            </li>
                            <li>
                                <a href="#">اضافة مستشفي</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarTasks" data-bs-toggle="collapse">
                        <i data-feather="clipboard"></i>
                        <span> مراكز الاشعة </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTasks">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">قائمة مركز الاشعة</a>
                            </li>
                            <li>
                                <a href="#">اضافة مركز اشعة</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title">التقارير والاعدادات</li>
                <li>
                    <a href="#sidebarTickets" data-bs-toggle="collapse">
                        <i data-feather="aperture"></i>
                        <span> التقارير</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTickets">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">تقارير الاطباء</a>
                            </li>
                            <li>
                                <a href="#">تقارير المرضي</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{url('credintails/privacy')}}">
                        <i data-feather="alert-circle"></i>
                        <span> سياسة الخصوصية</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('credintails/terms')}}">
                        <i data-feather="alert-circle"></i>
                        <span> الشروط والاحكام </span>
                    </a>
                </li>
                <li>
                    <a href="{{url('credintails/problems')}}">
                        <span class="badge bg-pink float-end">21</span>
                        <i data-feather="alert-circle"></i>
                        <span> الابلاغات </span>
                    </a>
                </li>
                <li>
                    <a href="{{url('settings')}}">
                        <i data-feather="folder-plus"></i>
                        <span> الاعدادات</span>
                    </a>
                </li>



            </ul>
        </div>
        </li>
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->
