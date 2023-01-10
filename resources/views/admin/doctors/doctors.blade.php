@extends('layouts.master')
@section('title')
{{__('Doctors')}}
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{__('dashboard')}}</a></li>
                                            <li class="breadcrumb-item active">{{__('Doctors')}}</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">
                                            {{__('Doctors')}}
                                    
                                    </h4>
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
                                                <a href="add-doc.blade.php" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i>{{__('add-doctor')}}</a>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-end">
                                                    <button type="button" class="btn btn-light mb-2">{{__('export')}}</button>
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
                                                        <th>{{__('doctor_name')}}</th>
                                                        <th>{{__('specialize')}}th>
                                                        <th>{{__('phone')}}</th>
                                                        <th>{{__('consaltaion_count')}}</th>
                                                        <th>{{__('earned')}}</th>
                                                        <th>{{__('status')}}</th>
                                                        <th>{{__('details')}}</th>
                                                        <!-- <th style="width: 75px;">{{__('other_details')}}</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            @foreach($doctors as $doctor)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck">
                                                                <label class="form-check-label" for="customCheck2"></label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img src="{{asset('images/users/user-4.jpg')}}" alt="table-user" class="me-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">{{$doctor->name}}  {{$doctor->last_name}}</a>
                                                        </td>
                                                        <td>{{$doctor->specialize->id}}</td>
                                                        <td>
                                                            {{$doctor->phone}}
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

                                                @endforeach



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
