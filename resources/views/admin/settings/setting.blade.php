@extends('layouts.master')
@section('title')
{{__('trans.settings')}}
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
                                            <li class="breadcrumb-item active">الاعدادات</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">الاعدادات</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
<div class="row">
    <h3 class="mb-3">البيانات الشخصية</h3>
    <div class="col-lg-3">
        <div class="my-3 mt-xl-0">
            <p></p>
            <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                data-upload-preview-template="#uploadPreviewTemplate">
                <div class="fallback">
                    <input name="file" type="file" />
                </div>

                <div class="dz-message needsclick">
                    <i class="h3 text-muted dripicons-cloud-upload"></i>
                    <h4>اضف الصورة الشخصية</h4>
                </div>
            </form>

            <!-- Preview -->
            <div class="dropzone-previews mt-3" id="file-previews"></div>

            <!-- file preview template -->
            <div class="d-none" id="uploadPreviewTemplate">
                <div class="card mt-1 mb-0 shadow-none border">
                    <div class="p-2">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                            </div>
                            <div class="col ps-0">
                                <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                <p class="mb-0" data-dz-size></p>
                            </div>
                            <div class="col-auto">
                                <!-- Button -->
                                <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                    <i class="mdi mdi-close"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end file preview template -->
        </div>
</div>
                                        <div class="row">

                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">الاسم الاول</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل الاسم الاول">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">الاسم الاخير</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل الاسم الاخير">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">البريد الالكتروني</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل البريد الالكتروني">
                                                </div>
                                            </div>


                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">كلمة المرور</label>
                                                    <input type="password" id="projectname" class="form-control" placeholder="*********">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">تاكيد كلمة المرور</label>
                                                    <input type="password" id="projectname" class="form-control" placeholder="*********">
                                                </div>
                                            </div>











                                        </div>

                                        <!-- end row -->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        <!-- start 23 -->
                          <!-- start row -->
                          <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <h3 class="mb-3">اعدادات عامة</h3>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="project-priority" class="form-label">العملة</label>

                                                    <select class="form-control" data-toggle="select2" data-width="100%">
                                                        <option value="MD">الدولار</option>
                                                        <option value="HI">الجنية</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">الحد ادني للسحب</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل المبلغ">

                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">الحد الاقصي للسحب</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل المبلغ">

                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12 text-center">
                                                <button type="button" class="btn btn-success waves-effect waves-light m-1" id="sa-success"><i class="fe-check-circle me-1"></i> حفظ الاعدادات</button>
                                                <button type="button" class="btn btn-light waves-effect waves-light m-1"><i class="fe-x me-1"></i> الغاء</button>
                                            </div>
                                        </div>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; جميع الحقوق محفوظة وان تيك</a>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">عن وان تيك</a>
                                    <a href="javascript:void(0);">مساعدة</a>
                                    <a href="javascript:void(0);">تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
@endsection
