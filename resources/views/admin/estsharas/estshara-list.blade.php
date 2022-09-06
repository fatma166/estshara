@extends('layouts.master')
@section('title')
    {{__('trans.estshara list')}}
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
                                <li class="breadcrumb-item active">الاستشارات</li>
                            </ol>
                        </div>
                        <h4 class="page-title">الاستشارات</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-between mb-2">
                                <div class="col-auto">

                                </div>
                                <div class="col-md-6">
                                </div><!-- end col-->
                            </div>

                            <div class="table-responsive">
                                <table class="table table-centered table-striped dt-responsive nowrap w-100" id="estshara-datatable">
                                    <thead>
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>رقم الاستشارة</th>
                                        <th>اسم الدكتور</th>
                                        <th>التخصص</th>
                                        <th>اسم المريض</th>
                                        <th>تاريخ الاستشارة</th>
                                        <th>تاريخ انتهاء</th>
                                        <th>المدفوعات</th>
                                        <th>التفاصيل</th>
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
                                        <td>
                                            <span class="fw-semibold">12884774658</span>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            جراحة
                                        </td>
                                        <td class="table-user">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            47$
                                        </td>

                                        <td>
                                            <a href="{{url('esteshara/esteshara-details')}}" class="btn btn-primary waves-effect waves-light">تفاصيل</a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="fw-semibold">12884774658</span>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            جراحة
                                        </td>
                                        <td class="table-user">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            47$
                                        </td>
                                        <td>
                                            <a href="estshara-details.blade.php" class="btn btn-primary waves-effect waves-light">تفاصيل</a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="fw-semibold">12884774658</span>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            جراحة
                                        </td>
                                        <td class="table-user">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            47$
                                        </td>

                                        <td>
                                            <a href="estshara-details.blade.php" class="btn btn-primary waves-effect waves-light">تفاصيل</a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="fw-semibold">12884774658</span>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            جراحة
                                        </td>
                                        <td class="table-user">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            47$
                                        </td>

                                        <td>
                                            <a href="estshara-details.blade.php" class="btn btn-primary waves-effect waves-light">تفاصيل</a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="fw-semibold">12884774658</span>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            جراحة
                                        </td>
                                        <td class="table-user">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            47$
                                        </td>

                                        <td>
                                            <a href="estshara-details.blade.php" class="btn btn-primary waves-effect waves-light">تفاصيل</a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="fw-semibold">12884774658</span>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            جراحة
                                        </td>
                                        <td class="table-user">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            47$
                                        </td>

                                        <td>
                                            <a href="estshara-details.blade.php" class="btn btn-primary waves-effect waves-light">تفاصيل</a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="fw-semibold">12884774658</span>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            جراحة
                                        </td>
                                        <td class="table-user">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            47$
                                        </td>

                                        <td>
                                            <a href="estshara-details.blade.php" class="btn btn-primary waves-effect waves-light">تفاصيل</a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="fw-semibold">12884774658</span>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            جراحة
                                        </td>
                                        <td class="table-user">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            47$
                                        </td>

                                        <td>
                                            <a href="estshara-details.blade.php" class="btn btn-primary waves-effect waves-light">تفاصيل</a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="fw-semibold">12884774658</span>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            جراحة
                                        </td>
                                        <td class="table-user">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            47$
                                        </td>

                                        <td>
                                            <a href="estshara-details.blade.php" class="btn btn-primary waves-effect waves-light">تفاصيل</a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="fw-semibold">12884774658</span>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            جراحة
                                        </td>
                                        <td class="table-user">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            07/07/2018
                                        </td>

                                        <td>
                                            47$
                                        </td>

                                        <td>
                                            <a href="estshara-details.blade.php" class="btn btn-primary waves-effect waves-light">تفاصيل</a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
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

        </div> <!-- contain
@endsection
