@extends('layouts.master')
@section('title')
{{__('trans.title')}}
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
                                            <li class="breadcrumb-item active">الابلاغات</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">الابلاغات</h4>
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
                                            <table class="table mb-0" id="tourist-list">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>تاريخ التبليغ</th>
                                                        <th>اسم المبلغ</th>
                                                        <th>نوع العضوية</th>
                                                        <th>السبب</th>
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
                                                        <td>
                                                            22/1/2022
                                                        </td>
                                                        <td>معاذ احمد</td>
                                                        <td>
                                                            سائح
                                                        </td>
                                                        <td>
                                                            هناك مشكلة في عمليه البث وما الي ذلك
                                                        </td>

                                                   <td>منتهية</td>
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
                                                            22/1/2022
                                                        </td>
                                                        <td>معاذ احمد</td>
                                                        <td>
                                                            سائح
                                                        </td>
                                                        <td>
                                                            هناك مشكلة في عمليه البث وما الي ذلك
                                                        </td>
                                                        <td>منتهية</td>


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
                                                            22/1/2022
                                                        </td>
                                                        <td>معاذ احمد</td>
                                                        <td>
                                                            سائح
                                                        </td>
                                                        <td>
                                                            هناك مشكلة في عمليه البث وما الي ذلك
                                                        </td>
                                                        <td>انتظار</td>


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
