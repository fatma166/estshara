@extends('layouts.master')
@section('title')
{{__('trans.add pruducts')}}
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
                                            <li class="breadcrumb-item active">اضافة خدمة</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">اضافة خدمة</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">معلومات عن الخدمة</h5>

                                        <div class="mb-3">
                                            <label for="product-name" class="form-label">اسم الخدمة <span class="text-danger">*</span></label>
                                            <input type="text" id="product-name" class="form-control" placeholder="كمثال : انتينال">
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-reference" class="form-label">كود الخدمة <span class="text-danger">*</span></label>
                                            <input type="text" id="product-reference" class="form-control" placeholder="837646">
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-description" class="form-label">وصف الخدمة <span class="text-danger">*</span></label>
                                            <div id="snow-editor" style="height: 150px;"></div> <!-- end Snow-editor-->
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-summary" class="form-label">وصف الخدمة باختصار</label>
                                            <textarea class="form-control" id="product-summary" rows="3" placeholder="ادخل معلومات مختصرة عن الدواء"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="project-priority" class="form-label">القسم</label>

                                            <select class="form-control" data-toggle="select2" data-width="100%">
                                                <option value="MD">قسم دواء</option>
                                                <option value="MD">قسم دواء</option>
                                                <option value="MD">قسم دواء</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="project-priority" class="form-label">البائع</label>

                                            <select class="form-control" data-toggle="select2" data-width="100%">
                                                <option value="MD">نورهان عبد الرحمن</option>
                                                <option value="MD">نورهان عبد الرحمن</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-price">السعر <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="product-price" placeholder="ادخل السعر">
                                        </div>


                                        <div class="mb-3">
                                            <label for="product-price">الخصم<span class="text-danger"></span></label>
                                            <input type="text" class="form-control" id="product-price" placeholder="اذا كان لا يوجد خصم اتركها فارغة">
                                        </div>

                                        <div class="mb-3">
                                            <label class="mb-2">الحالة <span class="text-danger">*</span></label>
                                            <br/>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                                <label for="inlineRadio1"> اون لاين </label>
                                            </div>

                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio3" value="option3" name="radioInline">
                                                <label for="inlineRadio3"> درافت </label>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="form-label">ملاحظات التوصيل</label>
                                            <textarea class="form-control" rows="3" placeholder="من فضلك اكتب مدة التوصيل للمنتج لكل محافظة"></textarea>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">صورة الخدمة</h5>

                                        <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                            data-upload-preview-template="#uploadPreviewTemplate">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>

                                            <div class="dz-message needsclick">
                                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                <h3>اسحب الملفات هنا او اضغط تحميل ملفات</h3>

                                            </div>
                                        </form>

                                        <!-- Preview -->
                                        <div class="dropzone-previews mt-3" id="file-previews"></div>
                                    </div>
                                </div> <!-- end col-->

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">منطقة محركات البحث</h5>

                                        <div class="mb-3">
                                            <label for="product-meta-title" class="form-label">عنوان البحث</label>
                                            <input type="text" class="form-control" id="product-meta-title" placeholder="عنوان الصفحة الظاهر في محركات البحث">
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-meta-keywords" class="form-label">الكلمات الدلالية</label>
                                            <input type="text" class="form-control" id="product-meta-keywords" placeholder="ادخل الكلمات الدلالية">
                                        </div>

                                        <div>
                                            <label for="product-meta-description" class="form-label">وصف الصفحة </label>
                                            <textarea class="form-control" rows="5" id="product-meta-description" placeholder="ادخل وصف الدواء باختصار ليظهر في محركات البحث"></textarea>
                                        </div>
                                    </div>
                                </div> <!-- end card -->

                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="text-center mb-3">
                                    <button type="button" class="btn w-sm btn-light waves-effect">الغاء</button>
                                    <button type="button" class="btn w-sm btn-success waves-effect waves-light">حفظ</button>
                                    <button type="button" class="btn w-sm btn-danger waves-effect waves-light">حذف</button>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


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
                                                <i class="dripicons-cross"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div> <!-- container -->

                </div> <!-- content -->
@endsection
