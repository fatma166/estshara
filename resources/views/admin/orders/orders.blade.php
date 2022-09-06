@extends('layouts.master')
@section('title')
    {{__('trans.orderlist')}}
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
                                <li class="breadcrumb-item active">الطلبات</li>
                            </ol>
                        </div>
                        <h4 class="page-title">الطلبات</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <form class="d-flex flex-wrap align-items-center">
                                        <label for="inputPassword2" class="visually-hidden">ابحث</label>
                                        <div class="me-3">
                                            <input type="search" class="form-control my-1 my-lg-0" id="inputPassword2" placeholder="ابحث عن طلب ..">
                                        </div>
                                        <label for="status-select" class="me-2">حالة الطلب</label>
                                        <div class="me-sm-3">
                                            <select class="form-select form-select my-1 my-lg-0" id="status-select">
                                                <option selected>اختار الحالة</option>
                                                <option value="1">تم الدفع</option>
                                                <option value="2">بانتظار التآكد</option>
                                                <option value="3">فشل عملية الدفع</option>
                                                <option value="4">الدفع عند الاستلام</option>

                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-4">
                                    <div class="text-lg-end">
                                    </div>
                                </div><!-- end col-->
                            </div>

                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead class="table-light">
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>كود الطلب</th>
                                        <th>الادوية</th>
                                        <th>التاريخ</th>
                                        <th>حالة الدفع</th>
                                        <th>المجموع</th>
                                        <th>وسيلة الدفع</th>
                                        <th>حالة الطلب</th>
                                        <th style="width: 125px;">تفاصيل</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="ecommerce-order-detail.html" class="text-body fw-bold">#UB9708</a> </td>
                                        <td>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                        </td>
                                        <td>
                                            August 05 2018 <small class="text-muted">10:29 PM</small>
                                        </td>
                                        <td>
                                            <h5><span class="badge bg-soft-success text-success"><i class="mdi mdi-bitcoin"></i> تم الدفع</span></h5>
                                        </td>
                                        <td>
                                            $176.41
                                        </td>
                                        <td>
                                            ماستر كارد
                                        </td>
                                        <td>
                                            <h5><span class="badge bg-info">تم التوصيل</span></h5>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck3">
                                                <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="ecommerce-order-detail.html" class="text-body fw-bold">#UB9707</a> </td>
                                        <td>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                        </td>
                                        <td>August 04 2018 <small class="text-muted">08:18 AM</small></td>
                                        <td>
                                            <h5><span class="badge bg-soft-warning text-warning"><i class="mdi mdi-timer-sand"></i> انتظار التاكد</span></h5>
                                        </td>
                                        <td>
                                            $1,458.65
                                        </td>
                                        <td>
                                            فيزا
                                        </td>
                                        <td>
                                            <h5><span class="badge bg-warning">انتظار</span></h5>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck4">
                                                <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="ecommerce-order-detail.html" class="text-body fw-bold">#UB9706</a> </td>
                                        <td>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                        </td>
                                        <td>August 04 2018 <small class="text-muted">10:29 PM</small></td>
                                        <td>
                                            <h5><span class="badge bg-soft-success text-success"><i class="mdi mdi-bitcoin"></i> تم الدفع</span></h5>
                                        </td>
                                        <td>
                                            $801.99
                                        </td>
                                        <td>
                                            كريدت كارد
                                        </td>
                                        <td>
                                            <h5><span class="badge bg-warning">انتظار</span></h5>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck5">
                                                <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="ecommerce-order-detail.html" class="text-body fw-bold">#UB9705</a> </td>
                                        <td>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                        </td>
                                        <td>August 03 2018 <small class="text-muted">07:56 AM</small></td>
                                        <td>
                                            <h5><span class="badge bg-soft-success text-success"><i class="mdi mdi-bitcoin"></i> تم الدفع</span></h5>
                                        </td>
                                        <td>
                                            $215.35
                                        </td>
                                        <td>
                                            ماستر كارد
                                        </td>
                                        <td>
                                            <h5><span class="badge bg-success">تم التوصيل</span></h5>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck6">
                                                <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="ecommerce-order-detail.html" class="text-body fw-bold">#UB9704</a> </td>
                                        <td>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                        </td>
                                        <td>May 22 2018 <small class="text-muted">07:22 PM</small></td>
                                        <td>
                                            <h5><span class="badge bg-soft-danger text-danger"><i class="mdi mdi-cancel"></i> فشل الدفع</span></h5>
                                        </td>
                                        <td>
                                            $2,514.36
                                        </td>
                                        <td>
                                            باي بال
                                        </td>
                                        <td>
                                            <h5><span class="badge bg-danger">تم الغاء</span></h5>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck7">
                                                <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="ecommerce-order-detail.html" class="text-body fw-bold">#UB9703</a> </td>
                                        <td>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                        </td>
                                        <td>April 02 2018 <small class="text-muted">03:02 AM</small></td>
                                        <td>
                                            <h5><span class="badge bg-soft-success text-success"><i class="mdi mdi-bitcoin"></i> تم الدفع</span></h5>
                                        </td>
                                        <td>
                                            $183.20
                                        </td>
                                        <td>
                                            بايونير
                                        </td>
                                        <td>
                                            <h5><span class="badge bg-info">تم التوصيل</span></h5>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck8">
                                                <label class="form-check-label" for="customCheck8">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="ecommerce-order-detail.html" class="text-body fw-bold">#UB9702</a> </td>
                                        <td>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                        </td>
                                        <td>March 18 2018 <small class="text-muted">11:19 PM</small></td>
                                        <td>
                                            <h5><span class="badge bg-soft-warning text-warning"><i class="mdi mdi-timer-sand"></i> انتظار التاكد</span></h5>
                                        </td>
                                        <td>
                                            $1,768.41
                                        </td>
                                        <td>
                                            فيزا
                                        </td>
                                        <td>
                                            <h5><span class="badge bg-warning">في الانتظار</span></h5>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck9">
                                                <label class="form-check-label" for="customCheck9">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="ecommerce-order-detail.html" class="text-body fw-bold">#UB9701</a> </td>
                                        <td>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                        </td>
                                        <td>February 01 2018 <small class="text-muted">07:22 AM</small></td>
                                        <td>
                                            <h5><span class="badge bg-soft-info text-info"><i class="mdi mdi-cash"></i> الدفع عند الاستلام</span></h5>
                                        </td>
                                        <td>
                                            $3,582.99
                                        </td>
                                        <td>
                                            بيابال
                                        </td>
                                        <td>
                                            <h5><span class="badge bg-info">تم التوصيل</span></h5>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck10">
                                                <label class="form-check-label" for="customCheck10">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="ecommerce-order-detail.html" class="text-body fw-bold">#UB9700</a> </td>
                                        <td>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                        </td>
                                        <td>January 22 2018 <small class="text-muted">08:09 PM</small></td>
                                        <td>
                                            <h5><span class="badge bg-soft-success text-success"><i class="mdi mdi-bitcoin"></i> تم الدفع</span></h5>
                                        </td>
                                        <td>
                                            $923.95
                                        </td>
                                        <td>
                                            ماستر كارد
                                        </td>
                                        <td>
                                            <h5><span class="badge bg-success">تم التوصيل</span></h5>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck11">
                                                <label class="form-check-label" for="customCheck11">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="ecommerce-order-detail.html" class="text-body fw-bold">#UB9699</a> </td>
                                        <td>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                            <a href="ecommerce-product-detail.html"><img src="{{asset('images/products/med.webp')}}" alt="product-img" height="32" /></a>
                                        </td>
                                        <td>January 17 2018 <small class="text-muted">02:30 PM</small></td>
                                        <td>
                                            <h5><span class="badge bg-soft-success text-success"><i class="mdi mdi-bitcoin"></i> تم الدفع</span></h5>
                                        </td>
                                        <td>
                                            $5,177.68
                                        </td>
                                        <td>
                                            ماستر كارد
                                        </td>
                                        <td>
                                            <h5><span class="badge bg-info">تم الشحن</span></h5>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                            <ul class="pagination pagination-rounded justify-content-end my-2">
                                <li class="page-item">
                                    <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->

@endsection
