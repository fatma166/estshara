@extends('layouts.master')
@section('title')
    {{__('trans.index')}}
@endsection

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">مرحباً فاطمة غريب !</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-12 guide-banner">
                    <img src="{{asset('images/guide-bannerjpg')}}"" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                        <i class="fe-briefcase font-22 avatar-title text-primary"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">584</span></h3>
                                        <p class="text-muted mb-1 text-truncate">الاطباء</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                        <i class="fe-user font-22 avatar-title text-success"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">127</span></h3>
                                        <p class="text-muted mb-1 text-truncate">المرضي</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                        <i class="fe-edit font-22 avatar-title text-info"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">234</span></h3>
                                        <p class="text-muted mb-1 text-truncate">الاستشارات</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                        <i class="fe-eye font-22 avatar-title text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">78.41</span>k</h3>
                                        <p class="text-muted mb-1 text-truncate">عدد الزوار</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->
            </div>
            <!-- end row-->
            <!-- start stats -->

            <div class="row">
                <div class="col-lg-6 col-xl-3">
                    <div class="card bg-pattern">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-md bg-blue rounded">
                                        <i class="fe-layers avatar-title font-22 text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <h3 class="text-dark my-1"><span data-plugin="counterup">12,008</span></h3>
                                        <p class="text-muted mb-0 text-truncate">الصيدليات</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->

                <div class="col-lg-6 col-xl-3">
                    <div class="card bg-pattern">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-md bg-success rounded">
                                        <i class="fe-award avatar-title font-22 text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <h3 class="text-dark my-1"><span data-plugin="counterup">7,410</span></h3>
                                        <p class="text-muted mb-0 text-truncate">مراكز الاشعة</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->
                <div class="col-lg-6 col-xl-3">
                    <div class="card bg-pattern">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-md bg-danger rounded">
                                        <i class="fe-briefcase avatar-title font-22 text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <h3 class="text-dark my-1"><span data-plugin="counterup">2,125</span></h3>
                                        <p class="text-muted mb-0 text-truncate">المستشفيات</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->
                <div class="col-lg-6 col-xl-3">
                    <div class="card bg-pattern">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-md bg-warning rounded">
                                        <i class="fe-dollar-sign avatar-title font-22 text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <h3 class="text-dark my-1"><span data-plugin="counterup">256</span>k</h3>
                                        <p class="text-muted mb-0 text-truncate">عدد المنتجات</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row-->


            <!-- end stats -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-0">اجمالي الايرادات</h4>

                            <div class="widget-chart text-center" dir="ltr">

                                <div id="total-revenue" class="mt-0"  data-colors="#f1556c"></div>

                                <h5 class="text-muted mt-0">اجمالي الايرادات اليومية</h5>
                                <h2>123$</h2>

                                <p class="text-muted w-75 mx-auto sp-line-2">اجمالي الايرادات اليوميه الخاصة بدوام</p>

                                <div class="row mt-3">
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">التارجت</p>
                                        <h4><i class="fe-arrow-down text-danger me-1"></i>$7.8k</h4>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">اخر الاسبوع</p>
                                        <h4><i class="fe-arrow-up text-success me-1"></i>$1.4k</h4>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-muted font-15 mb-1 text-truncate">اخر شهر</p>
                                        <h4><i class="fe-arrow-down text-danger me-1"></i>$15k</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col-->

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body pb-2">
                            <div class="float-end d-none d-md-inline-block">
                                <div class="btn-group mb-2">
                                    <button type="button" class="btn btn-xs btn-light">اليومي</button>
                                    <button type="button" class="btn btn-xs btn-light">الاسبوعي</button>
                                    <button type="button" class="btn btn-xs btn-secondary">الشهري</button>
                                </div>
                            </div>

                            <h4 class="header-title mb-3">اجمالي عدد الاستشارات الشهرية</h4>

                            <div dir="ltr">
                                <div id="sales-analytics" class="mt-4" data-colors="#1abc9c,#4a81d4"></div>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col-->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Edit Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-3">قائمة الاطباء</h4>

                            <div class="table-responsive">
                                <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                                    <thead class="table-light">
                                    <tr>
                                        <th colspan="2">اسم الدكتور</th>
                                        <th>التخصص</th>
                                        <th>المكسب</th>
                                        <th>الاراء</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="width: 36px;">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 fw-normal">احمد عاطف</h5>
                                            <p class="mb-0 text-muted"><small>منذ ديسمبر</small></p>
                                        </td>

                                        <td>
                                            جراحة
                                        </td>

                                        <td>
                                            200$
                                        </td>

                                        <td>
                                            خمس نجوم
                                        </td>


                                    </tr>

                                    <tr>
                                        <td style="width: 36px;">
                                            <img src="{{asset('images/users/user-3jpg')}}"" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 fw-normal">اشرف داود</h5>
                                            <p class="mb-0 text-muted"><small>منذ يناير</small></p>
                                        </td>

                                        <td>
                                            عظام
                                        </td>

                                        <td>
                                            300$
                                        </td>

                                        <td>
                                            اربع نجوم
                                        </td>


                                    </tr>
                                    <tr>
                                        <td style="width: 36px;">
                                            <img src="{{asset('images/users/user-4jpg')}}"" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 fw-normal">فاطمة غريب</h5>
                                            <p class="mb-0 text-muted"><small>منذ فبراير</small></p>
                                        </td>

                                        <td>
                                            عيون
                                        </td>

                                        <td>
                                            300$
                                        </td>

                                        <td>
                                            خمس نجوم
                                        </td>


                                    </tr>
                                    <tr>
                                        <td style="width: 36px;">
                                            <img src="{{asset('images/users/user-5jpg')}}"" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 fw-normal">علا عبد الفتاح</h5>
                                            <p class="mb-0 text-muted"><small>منذ دسيمبر</small></p>
                                        </td>

                                        <td>
                                            طبيبة عامة
                                        </td>

                                        <td>
                                            400$
                                        </td>

                                        <td>
                                            خمس نجوم
                                        </td>


                                    </tr>
                                    <tr>
                                        <td style="width: 36px;">
                                            <img src="{{asset('images/users/user-6jpg')}}"" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 fw-normal">آيه محمد بركات</h5>
                                            <p class="mb-0 text-muted"><small>منذ يناير</small></p>
                                        </td>

                                        <td>
                                            جراحة عامة
                                        </td>

                                        <td>
                                            300$
                                        </td>

                                        <td>
                                            خمس نجوم
                                        </td>


                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Edit Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-3">قائمة المرضي</h4>

                            <div class="table-responsive">
                                <table class="table table-borderless table-nowrap table-hover table-centered m-0">

                                    <thead class="table-light">
                                    <tr>
                                        <th>اسم المريض</th>
                                        <th>رقم الهاتف</th>
                                        <th>موعد الاستشارة</th>
                                        <th>المدفوعات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <h5 class="m-0 fw-normal">معاذ نصر</h5>
                                        </td>

                                        <td>
                                            0129776465
                                        </td>

                                        <td>
                                            فبراير ٣
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-warning text-warning">200$</span>
                                        </td>


                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="m-0 fw-normal">ابراهيم سعيد محمد</h5>
                                        </td>

                                        <td>
                                            0129776465
                                        </td>

                                        <td>
                                            مارس ٣
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-warning text-warning">200$</span>
                                        </td>


                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="m-0 fw-normal">ياسين احمدي</h5>
                                        </td>

                                        <td>
                                            0129776465
                                        </td>

                                        <td>
                                            اغسطس
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-warning text-warning">200$</span>
                                        </td>


                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="m-0 fw-normal">هاني محمد</h5>
                                        </td>

                                        <td>
                                            0129776465
                                        </td>

                                        <td>
                                            سبتمير ٣
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-warning text-warning">200$</span>
                                        </td>


                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="m-0 fw-normal">ايمان هاني</h5>
                                        </td>

                                        <td>
                                            0129776465
                                        </td>

                                        <td>
                                            يناير ٢٠٢٠
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-warning text-warning">200$</span>
                                        </td>


                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="m-0 fw-normal">امجد احمد نصير</h5>
                                        </td>

                                        <td>
                                            0129776465
                                        </td>

                                        <td>
                                            يناير ٢٠٢٠
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-warning text-warning">200$</span>
                                        </td>


                                    </tr>

                                    <tr>
                                        <td>
                                            <h5 class="m-0 fw-normal">سناء هاني محمد</h5>
                                        </td>

                                        <td>
                                            0129776465
                                        </td>

                                        <td>
                                            يناير ٢٠٢٠
                                        </td>

                                        <td>
                                            <span class="badge bg-soft-warning text-warning">200$</span>
                                        </td>


                                    </tr>

                                    </tbody>
                                </table>
                            </div> <!-- end .table-responsive-->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
