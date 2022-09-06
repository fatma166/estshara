@extends('layouts.master')
@section('title')
{{__('trans.patient list')}}
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
                                            <li class="breadcrumb-item active">المرضي</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">المرضي</h4>
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
                                                <a href="javascript:void(0);" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> اضافة مريض</a>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-end">
                                                    <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                                                    <button type="button" class="btn btn-light mb-2 me-1">رفع</button>
                                                    <button type="button" class="btn btn-light mb-2">تصدير</button>
                                                </div>
                                            </div><!-- end col-->
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-striped dt-responsive nowrap w-100" id="patient-datatable">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>الكود</th>
                                                        <th>اسم المريض</th>
                                                        <th>العنوان</th>
                                                        <th>العمر</th>
                                                        <th>رقم الهاتف</th>
                                                        <th>دفع</th>
                                                        <th>التفاصيل</th>
                                                        <!-- <th style="width: 75px;">تفاصيل اخري</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2">ABC</label>
                                                            </div>
                                                        </td>
                                                        <td>#ffir4</td>
                                                        <td class="table-user">
                                                            <img src="{{asset('images/users/user-4.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">علا عبدو</a>
                                                        </td>
                                                        <td>
                                                            بركة السبع غرب
                                                        </td>
                                                        <td>
                                                            37
                                                        </td>
                                                        <td>
                                                            01165253426
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-success">4856</span>
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
                                                        <td>#ffir4</td>
                                                        <td class="table-user">
                                                            <img src="{{asset('images/users/user-4.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">علا عبدو</a>
                                                        </td>
                                                        <td>
                                                            بركة السبع غرب
                                                        </td>
                                                        <td>
                                                            37
                                                        </td>
                                                        <td>
                                                            01165253426
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-success">4856</span>
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
                                                        <td>#ffir4</td>
                                                        <td class="table-user">
                                                            <img src="{{asset('images/users/user-4.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">علا عبدو</a>
                                                        </td>
                                                        <td>
                                                            بركة السبع غرب
                                                        </td>
                                                        <td>
                                                            37
                                                        </td>
                                                        <td>
                                                            01165253426
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-success">4856</span>
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
