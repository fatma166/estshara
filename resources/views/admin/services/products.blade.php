@extends('layouts.master')
@section('title')
    {{__('trans.pruducts list')}}
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
                                <li class="breadcrumb-item active">منتجات الادوية</li>
                            </ol>
                        </div>
                        <h4 class="page-title">منتجات الادوية</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <form class="d-flex flex-wrap align-items-center">
                                        <label for="inputPassword2" class="visually-hidden">ابحث</label>
                                        <div class="me-3">
                                            <input type="search" class="form-control my-1 my-lg-0" id="inputPassword2" placeholder="ابحث عن دواء">
                                        </div>
                                        <label for="status-select" class="me-2">ترتيب بواسطة</label>
                                        <div class="me-sm-3">
                                            <select class="form-select my-1 my-lg-0" id="status-select">
                                                <option selected="">الكل</option>
                                                <option value="1">الاكثر شيوعاً</option>
                                                <option value="2">الاقل سعراً</option>
                                                <option value="3">الاكثر سعراً</option>
                                                <option value="4">نفذ المخزون</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-auto">
                                    <div class="text-lg-end my-1 my-lg-0">
                                        <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button>
                                        <a href="add-product.php" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle me-1"></i> اضافة دواء جديد</a>
                                    </div>
                                </div><!-- end col-->
                            </div> <!-- end row -->
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col-->
            </div>
            <!-- end row-->

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card product-box">
                        <div class="card-body">
                            <div class="product-action">
                                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                            </div>

                            <div class="bg-light">
                                <img src="{{asset('images/products/med.webp')}}" alt="product-pic" class="img-fluid" />
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">نيفيا | غسول للوجة الازرق</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> المخزون : 67</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            $39
                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card product-box">
                        <div class="card-body">
                            <div class="product-action">
                                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                            </div>

                            <div class="bg-light">
                                <img src="{{asset('images/products/med.webp')}}" alt="product-pic" class="img-fluid" />
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">نيفيا | غسول للوجة الازرق</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> المخزون : 67</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            $39
                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card product-box">
                        <div class="card-body">
                            <div class="product-action">
                                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                            </div>
                            <div class="bg-light">
                                <img src="{{asset('images/products/med.webp')}}" alt="product-pic" class="img-fluid" />
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">نيفيا | غسول للوجة الازرق</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> المخزون : 67</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            $39
                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card product-box">
                        <div class="card-body">
                            <div class="product-action">
                                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                            </div>

                            <div class="bg-light">
                                <img src="{{asset('images/products/med.webp')}}" alt="product-pic" class="img-fluid" />
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">نيفيا | غسول للوجة الازرق</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> المخزون : 67</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            $39
                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row-->


            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card product-box">
                        <div class="card-body">
                            <div class="product-action">
                                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                            </div>

                            <div class="bg-light">
                                <img src="{{asset('images/products/med.webp')}}" alt="product-pic" class="img-fluid" />
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">نيفيا | غسول للوجة الازرق</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> المخزون : 67</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            $39
                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card product-box">
                        <div class="card-body">
                            <div class="product-action">
                                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                            </div>

                            <div class="bg-light">
                                <img src="{{asset('images/products/med.webp')}}" alt="product-pic" class="img-fluid" />
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">نيفيا | غسول للوجة الازرق</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> المخزون : 67</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            $39
                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card product-box">
                        <div class="card-body">
                            <div class="product-action">
                                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                            </div>

                            <div class="bg-light">
                                <img src="{{asset('images/products/med.webp')}}" alt="product-pic" class="img-fluid" />
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">نيفيا | غسول للوجة الازرق</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> المخزون : 67</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            $39
                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card product-box">
                        <div class="card-body">
                            <div class="product-action">
                                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                            </div>

                            <div class="bg-light">
                                <img src="{{asset('images/products/med.webp')}}" alt="product-pic" class="img-fluid" />
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">نيفيا | غسول للوجة الازرق</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> المخزون : 67</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            $39
                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row-->

            <div class="row">
                <div class="col-12">
                    <ul class="pagination pagination-rounded justify-content-end mb-3">
                        <li class="page-item">
                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="visually-hidden">السابق</span>
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
                                <span class="visually-hidden">التالي</span>
                            </a>
                        </li>
                    </ul>
                </div> <!-- end col-->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->

@endsection
