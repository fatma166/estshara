@extends('layouts.master')
@section('title')
{{__('trans.add Doctor')}}
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">الاطباء</a></li>
                                            <li class="breadcrumb-item active">اضافة طبيب</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">اضافة طبيب</h4>
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
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل الاسم الاول للدكتور">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">الاسم الاخير</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل الاسم الاول للدكتور">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">رقم الهاتف</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="اكتب هنا رقم الهاتف الصحيح">
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
                                                    <label for="projectname" class="form-label">اسم المستخدم</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="@moaz">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">الرقم  القومي</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل رقم البطاقة الشخصية من الشمال الي اليمين">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="project-priority" class="form-label">البلد</label>

                                                    <select class="form-control" data-toggle="select2" data-width="100%">
                                                        <option value="MD">مصر</option>
                                                        <option value="HI">السعودية</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="project-priority" class="form-label">المحافظة</label>

                                                    <select class="form-control" data-toggle="select2" data-width="100%">
                                                        <option value="MD">المنوفية</option>
                                                        <option value="HI">الغربية</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">العنوان بالتفصيل</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="اكتب هنا العنوان بالتفصيل">
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
                                                    <label class="form-label">تاريخ الانضمام :</label>
                                                    <input type="text" class="form-control" data-toggle="flatpicker" placeholder="October 9, 2019">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label class="form-label">تاريخ الميلاد</label>
                                                    <input type="text" class="form-control" data-toggle="flatpicker" placeholder="March 9, 2020">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label">النوع</label> <br/>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio1">ذكر</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                                                        <label class="form-check-label" for="customRadio2">انثي</label>
                                                    </div>
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
                                            <h3 class="mb-3">البيانات الظاهرة للمريض</h3>
                                           <div class="col-lg-12">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="project-overview" class="form-label">معلومات عن الطبيب باختصار</label>
                                                    <textarea class="form-control" id="project-overview" rows="5" placeholder="اكتب هنا وصف بسيط عن الدكتور للظهور بشكل افضل للمريض والحصول علي استشارات"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="items-av">
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="project-priority" class="form-label">حدد يوم العمل</label>

                                                    <select class="form-control" data-toggle="select2" data-width="100%">
                                                        <option value="MD">السبت</option>
                                                        <option value="HI">الاحد</option>
                                                        <option value="HI">الاثنين</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="example-time" class="form-label">من الساعة</label>
                                                    <input class="form-control" id="example-time" type="time" name="time">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="example-time" class="form-label">الي الساعة</label>
                                                    <input class="form-control" id="example-time" type="time" name="time">
                                                </div>
                                            </div>

                                      </div>
                                      <div class="row">
                                        <div class="col-lg-12">
                                            <button id="add" class="btn add-more button-yellow uppercase" type="button">+ اضافة المزيد</button> <button class="delete btn button-white uppercase">- حذف</button>
                                        </div>
                                      </div>

                                        <div class="row">

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">اختار اللغات المتحدث بها</label>
                                                    <select id="selectize-maximum">
                                                        <option value="">اختار اللغة</option>
                                                        <option value="AL">العربية</option>
                                                        <option value="AK">الانجليزية</option>
                                                        <option value="AR">الفرنسية</option>
                                                        <option value="CA" selected>العربية</option>

                                                    </select>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="project-priority" class="form-label">التخصص</label>

                                                    <select class="form-control" data-toggle="select2" data-width="100%">
                                                        <option value="MD">باطنة</option>
                                                        <option value="HI">قلب واوعية</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="project-priority" class="form-label">الخبرة</label>

                                                    <select class="form-control" data-toggle="select2" data-width="100%">
                                                        <option value="MD">٣ سنوات</option>
                                                        <option value="HI">٥ سنوات</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="project-priority" class="form-label">يقبل تامين مع</label>

                                                    <select class="form-control" data-toggle="select2" data-width="100%">
                                                        <option value="MD">شركة تامين معاذ نصر</option>
                                                        <option value="HI">شركة تامين</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">سعر الاستشارة</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل سعر الاستشارة">
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row">

                                        </div>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->
                        <!-- start 23 -->
                        <!-- start row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <h3 class="mb-3">بيانات التعليم والعمل</h3>
                                            <div class="col-lg-3">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="project-priority" class="form-label">خريج من جامعة : </label>

                                                    <select class="form-control" data-toggle="select2" data-width="100%">
                                                        <option value="MD">المنوفية</option>
                                                        <option value="HI">الغربية</option>
                                                        <option value="LW">الدقهلية</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">كلية :</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل اسم الكلية">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">السنة</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل سنة التخرج">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">الدرجة :</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل الدرجة :">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">مكان العمل</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل اسم المستشفي او العيادة">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">السنة</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل السنة">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">وصف بسيط</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخ وصف بسيط">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">اسم الانجاز</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل اسم الانجاز">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">سنة الانجاز</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل سنة الانجاز">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <!-- Date View -->
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">وصف بسيط</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="ادخل وصف بسيط">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row mt-3">
                                            <div class="col-12 text-center">
                                                <button type="button" class="btn btn-success waves-effect waves-light m-1" id="sa-success"><i class="fe-check-circle me-1"></i> اضافة طبيب</button>
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
                                <script>document.write(new Date().getFullYear())</script> &copy; جميع الحقوق محفوظة دوام</a>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">عن دوام</a>
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

