@extends('layouts.master')
@section('title')
{{__('trans.Doctors')}}
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">لوحة التحكم</a></li>
                                            <li class="breadcrumb-item active">الاطباء</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">الاطباء</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <a href="add-doc.blade.php" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> اضافة طبيب</a>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-end">
                                                    <button type="button" class="btn btn-light mb-2">تصدير</button>
                                                </div>
                                            </div><!-- end col-->
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-striped dt-responsive nowrap w-100" id="doc-datatable">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>اسم الدكتور</th>
                                                        <th>التخصص</th>
                                                        <th>رقم الهاتف</th>
                                                        <th>عدد الاستشارات</th>
                                                        <th>المكسب</th>
                                                        <th>الحالة</th>
                                                        <th>التفاصيل</th>
                                                        <!-- <th style="width: 75px;">تفاصيل اخري</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2"></label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img src="{{asset('images/users/user-4.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">علا عبدو</a>
                                                        </td>
                                                        <td>طبيبة عامة</td>
                                                        <td>
                                                            01154285418
                                                        </td>
                                                        <td>
                                                            376
                                                        </td>
                                                        <td>
                                                            495$
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-success">مفعل</span>
                                                        </td>

                                                        <td>
                                                            <a  class="action-icon" data-bs-toggle="modal" data-bs-target="#con-close-modal"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a  class="action-icon" data-bs-toggle="modal" data-bs-target="#danger-alert-modal"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck3">
                                                                <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img src="{{asset('images/users/user-3.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">اشرف داود</a>
                                                        </td>
                                                        <td>
                                                            جراحة
                                                        </td>
                                                        <td>
                                                            0115428362
                                                        </td>
                                                        <td>
                                                            220
                                                        </td>
                                                        <td>44$</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">مفعل</span>
                                                        </td>
                                                        <td>
                                                            <a  class="action-icon" data-bs-toggle="modal" data-bs-target="#con-close-modal"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a  class="action-icon" data-bs-toggle="modal" data-bs-target="#danger-alert-modal"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck4">
                                                                <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img src="{{asset('images/users/user-3.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">فاطمة محمد</a>
                                                        </td>
                                                        <td>
                                                            عيون
                                                        </td>
                                                        <td>
                                                            012654332
                                                        </td>
                                                        <td>
                                                            841
                                                        </td>
                                                        <td>1999$
                                                        <td>
                                                            <span class="badge badge-soft-danger">ملغي</span>
                                                        </td>

                                                        <td>
                                                            <a  class="action-icon" data-bs-toggle="modal" data-bs-target="#con-close-modal"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a  class="action-icon" data-bs-toggle="modal" data-bs-target="#danger-alert-modal"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>




                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->
@endsection
