@extends('layouts.master')
@section('title')
    {{__('trans.reviews')}}
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
                                <li class="breadcrumb-item active">آراء المرضي</li>
                            </ol>
                        </div>
                        <h4 class="page-title">آراء المرضي</h4>
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
                                <table class="table table-centered table-striped dt-responsive nowrap w-100" id="reviews-datatable">
                                    <thead>
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>اسم المريض</th>
                                        <th>اسم الدكتور</th>
                                        <th>التعليق</th>
                                        <th>التقيم</th>
                                        <th>تاريخ التعليق</th>
                                        <th style="width: 82px;">التفاصيل</th>
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

                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى
                                        </td>

                                        <td>
                                            خمس نجوم
                                        </td>

                                        <td>
                                            1/2/2022
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى
                                        </td>

                                        <td>
                                            خمس نجوم
                                        </td>

                                        <td>
                                            1/2/2022
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى
                                        </td>

                                        <td>
                                            خمس نجوم
                                        </td>

                                        <td>
                                            1/2/2022
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى
                                        </td>

                                        <td>
                                            خمس نجوم
                                        </td>

                                        <td>
                                            1/2/2022
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى
                                        </td>

                                        <td>
                                            خمس نجوم
                                        </td>

                                        <td>
                                            1/2/2022
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى
                                        </td>

                                        <td>
                                            خمس نجوم
                                        </td>

                                        <td>
                                            1/2/2022
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى
                                        </td>

                                        <td>
                                            خمس نجوم
                                        </td>

                                        <td>
                                            1/2/2022
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى
                                        </td>

                                        <td>
                                            خمس نجوم
                                        </td>

                                        <td>
                                            1/2/2022
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى
                                        </td>

                                        <td>
                                            خمس نجوم
                                        </td>

                                        <td>
                                            1/2/2022
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>

                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('images/users/user-2jpg')}}"" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">نورهان عبد الرحمن</a>
                                        </td>
                                        <td>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى
                                        </td>

                                        <td>
                                            خمس نجوم
                                        </td>

                                        <td>
                                            1/2/2022
                                        </td>

                                        <td>
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
