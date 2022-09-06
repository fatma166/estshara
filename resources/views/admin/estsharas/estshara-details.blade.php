@extends('layouts.master')
@section('title')
{{__('trans.estshara details')}}
@endsection

@section('content')

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">الرئيسية</a></li>
                                            <li class="breadcrumb-item active">تفاصيل الاستشارة</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">تفاصيل الاستشارة</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row">
                            <div class="col-xl-8 col-lg-6">
                                <!-- project card -->
                                <div class="card d-block">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="dripicons-dots-3"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline me-1"></i>Invite</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                            </div>
                                        </div>
                                        <!-- project title-->
                                        <h3 class="mt-0 font-20">
                                            بيانات المريض
                                        </h3>
                                        <div class="badge bg-secondary text-light mb-3">منتهية</div>

                                        <h4>السجل الطبي للمريض</h4>

                                        <p class="text-muted mb-2">
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها
                                        </p>

                                        <p class="text-muted mb-4">
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها
                                        </p>
                                        <h4>الادوية المعطاة من الدكتور</h4>
                                        <p class="text-muted mb-4">
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها
                                        </p>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-4">
                                                    <h5>تاريخ بدء الاستشارة</h5>
                                                    <p>١٣ مارس ٢٠٢٢</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-4">
                                                    <h5>تاريخ انتهاء الاستشارة</h5>
                                                    <p>٣٤ يناير ٢٠٢٢</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-4">
                                                    <h5>المدفوعات</h5>
                                                    <p>١٥ جنية مصري</p>
                                                </div>
                                            </div>
                                        </div>



                                    </div> <!-- end card-body-->

                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">


                                        <h4 class="mt-0 mb-3">تفاصيل المحادثة</h4>


                                        <div class="mt-2">
                                            <div class="d-flex align-items-start">
                                                <img class="me-2 avatar-sm rounded-circle" src="{{asset('images/users/user-3.jpg')}}"
                                                    alt="Generic placeholder image">
                                                <div class="w-100">
                                                    <h5 class="mt-0"><a href="contacts-profile.html" class="text-reset">دكتور عبد الرحمن</a> <small class="text-muted">منذ ٣ ساعات</small></h5>
                                                    من فضلك ارسل لي سجلك الطبي مرة اخري

                                                    <br/>


                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start mt-3">
                                                <img class="me-2 avatar-sm rounded-circle" src="{{asset('images/users/user-2.jpg')}}"
                                                    alt="Generic placeholder image">
                                                <div class="w-100">
                                                    <h5 class="mt-0"><a href="contacts-profile.html" class="text-reset">احمد سعيد</a> <small class="text-muted">منذ يوم</small></h5>
                                                     ارسلت لك مرة اخري البيانات
                                                    <br/>

                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start mt-3">
                                                <a class="pe-2" href="#">
                                                    <img src="{{asset('images/users/user-1.jpg')}}" class="rounded-circle"
                                                        alt="Generic placeholder image" height="31">
                                                </a>
                                                <div class="w-100">
                                                    <input type="text" id="simpleinput" class="form-control form-control-sm form-control-light" placeholder="ارسال اشعار لي المريض والدكتور">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center mt-2">
                                            <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading me-1 font-16"></i> شاهد المزيد من المحادثة </a>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div>
                                <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-lg-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">ملفات الدكتور</h5>

                                        <div class="card mb-1 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title badge-soft-primary text-primary rounded">
                                                                ZIP
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-0">
                                                        <a href="javascript:void(0);" class="text-muted fw-bold">صورة الاشعة</a>
                                                        <p class="mb-0">2.3 MB</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                            <i class="dripicons-download"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-1 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title badge-soft-primary text-primary rounded">
                                                                JPG
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-0">
                                                        <a href="javascript:void(0);" class="text-muted fw-bold">روشتة الادوية السابقة</a>
                                                        <p class="mb-0">3.25 MB</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                            <i class="dripicons-download"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-0 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title badge-soft-primary text-primary rounded">
                                                                MP4
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-0">
                                                        <a href="javascript:void(0);" class="text-muted fw-bold">صورة المريض</a>
                                                        <p class="mb-0">7.05 MB</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                            <i class="dripicons-download"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">ملفات المريض</h5>

                                        <div class="card mb-1 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title badge-soft-primary text-primary rounded">
                                                                ZIP
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-0">
                                                        <a href="javascript:void(0);" class="text-muted fw-bold">صورة الاشعة</a>
                                                        <p class="mb-0">2.3 MB</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                            <i class="dripicons-download"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-1 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title badge-soft-primary text-primary rounded">
                                                                JPG
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-0">
                                                        <a href="javascript:void(0);" class="text-muted fw-bold">روشتة الادوية السابقة</a>
                                                        <p class="mb-0">3.25 MB</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                            <i class="dripicons-download"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-0 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title badge-soft-primary text-primary rounded">
                                                                MP4
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-0">
                                                        <a href="javascript:void(0);" class="text-muted fw-bold">صورة المريض</a>
                                                        <p class="mb-0">7.05 MB</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                            <i class="dripicons-download"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; جميع الحقوق محفوظة دوام</a>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">عن دوام</a>
                                    <a href="javascript:void(0);">مساعدة</a>
                                    <a href="javascript:void(0);">تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
@endsection
