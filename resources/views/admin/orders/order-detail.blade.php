@extends('layouts.master')
@section('title')
{{__('trans.order details')}}
@endsection

@section('content')

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
                                            <li class="breadcrumb-item active">تفاصيل الطلب</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">تفاصيل الطلب</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">تتبع الطلب</h4>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <h5 class="mt-0">كود الطلب :</h5>
                                                    <p>#VL2537</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <h5 class="mt-0">كود التتبع :</h5>
                                                    <p>894152012012</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="track-order-list">
                                            <ul class="list-unstyled">
                                                <li class="completed">
                                                    <h5 class="mt-0 mb-1">تم الطلب</h5>
                                                    <p class="text-muted">April 21 2019 <small class="text-muted">07:22 AM</small> </p>
                                                </li>
                                                <li class="completed">
                                                    <h5 class="mt-0 mb-1">تم التجهيز</h5>
                                                    <p class="text-muted">April 22 2019 <small class="text-muted">12:16 AM</small></p>
                                                </li>
                                                <li>
                                                    <span class="active-dot dot"></span>
                                                    <h5 class="mt-0 mb-1">تم شحن الطلب</h5>
                                                    <p class="text-muted">April 22 2019 <small class="text-muted">05:16 PM</small></p>
                                                </li>
                                                <li>
                                                    <h5 class="mt-0 mb-1"> تم التوصيل</h5>
                                                    <p class="text-muted">الوقت المتوقع لوصول الادوية ٣ ايام ان شاء الله</p>
                                                </li>
                                            </ul>

                                            <div class="text-center mt-4">
                                                <a href="#" class="btn btn-primary">كافة التفاصيل</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">جميع تفاصيل الطلب #VL2537</h4>

                                        <div class="table-responsive">
                                            <table class="table table-bordered table-centered mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>اسم المنتج</th>
                                                        <th>صورة المنتج</th>
                                                        <th>الكمية</th>
                                                        <th>السعر</th>
                                                        <th>المجموع</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">انتينال</th>
                                                        <td><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32"></td>
                                                        <td>1</td>
                                                        <td>$39</td>
                                                        <td>$39</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">دواء جديد</th>
                                                        <td><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32"></td>
                                                        <td>2</td>
                                                        <td>$46</td>
                                                        <td>$92</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">دواء ايجي</th>
                                                        <td><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32"></td>
                                                        <td>1</td>
                                                        <td>$46</td>
                                                        <td>$46</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" colspan="4">الاجمالي قبل المصاريف الاخري :</th>
                                                        <td><div class="fw-bold">$177</div></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" colspan="4">مصاريف الشحن :</th>
                                                        <td>$24</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" colspan="4">قيمة النسبة المضافة :</th>
                                                        <td>$12</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" colspan="4" >المجموع :</th>
                                                        <td><div class="fw-bold">$213</div></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">معلومات التوصيل</h4>

                                        <h5 class="font-family-primary fw-semibold">محمد سلمان</h5>

                                        <p class="mb-2"><span class="fw-semibold me-2">العنوان :</span> المنوفية بركة السبع ١٠ شارع محي الطيار</p>
                                        <p class="mb-2"><span class="fw-semibold me-2">رقم الهاتف :</span> (123) 456-7890</p>
                                        <p class="mb-0"><span class="fw-semibold me-2">رقم الهاتف</span> (+01) 12345 67890</p>

                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">تفاصيل الدفع</h4>

                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <p class="mb-2"><span class="fw-semibold me-2">وسيلة الدفع :</span> كريدت كارد</p>
                                                <p class="mb-2"><span class="fw-semibold me-2">المقدم :</span>فيزا 2851</p>
                                                <p class="mb-2"><span class="fw-semibold me-2">يعمل حتي :</span> 02/2020</p>
                                                <p class="mb-0"><span class="fw-semibold me-2">CVV:</span> xxx</p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">معلومات الطلب</h4>

                                        <div class="text-center">
                                            <i class="mdi mdi-truck-fast h2 text-muted"></i>
                                            <h5><b>UPS Delivery</b></h5>
                                            <p class="mb-1"><span class="fw-semibold">كود الطلب</span> xxxx235</p>
                                            <p class="mb-0"><span class="fw-semibold">Payment Mode :</span> COD</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->
@endsection
