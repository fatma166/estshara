@extends('layouts.master')
@section('title')
{{__('trans.request with drow')}}
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
                                            <li class="breadcrumb-item active">طلب سحب نقدي</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">طلب سحب نقدي</h4>
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
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-end">
                                                    <button type="button" class="btn btn-light mb-2">تصدير</button>
                                                </div>
                                            </div><!-- end col-->
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-striped dt-responsive nowrap w-100" id="withdarw-datatable">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>رقم السحب</th>
                                                        <th>تاريخ السحب</th>
                                                        <th>اسم الدكتور</th>
                                                        <th>المبلغ</th>
                                                        <th>طريقة السحب</th>
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
                                                        <td>
                                                            3454
                                                        </td>
                                                        <td>22/2/2022</td>
                                                        <td>
                                                            معاذ نصر
                                                        </td>
                                                        <td>
                                                            3433$
                                                        </td>
                                                        <td>
                                                            حساب بنكي
                                                        </td>

                                                        <td>
                                                          <a  class="action-icon" data-bs-toggle="modal" data-bs-target="#con-close-modal"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a  class="action-icon" data-bs-toggle="modal" data-bs-target="#danger-alert-modal"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            3454
                                                        </td>
                                                        <td>22/2/2022</td>
                                                        <td>
                                                            معاذ نصر
                                                        </td>
                                                        <td>
                                                            3433$
                                                        </td>
                                                        <td>
                                                            حساب بنكي
                                                        </td>

                                                        <td>
                                                          <a  class="action-icon" data-bs-toggle="modal" data-bs-target="#con-close-modal"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a  class="action-icon" data-bs-toggle="modal" data-bs-target="#danger-alert-modal"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            3454
                                                        </td>
                                                        <td>22/2/2022</td>
                                                        <td>
                                                            معاذ نصر
                                                        </td>
                                                        <td>
                                                            3433$
                                                        </td>
                                                        <td>
                                                            حساب بنكي
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
