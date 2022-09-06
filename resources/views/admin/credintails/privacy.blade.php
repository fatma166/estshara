@extends('layouts.master')
@section('title')
{{__('trans.problems')}}
@endsection

@section('content')

            <div class="content-page">
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
                                            <li class="breadcrumb-item active">سياسة الخصوصية</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">سياسة الخصوصية</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">سياسة الخصوصية</h4>
                                        <p class="sub-header">هنا يكتب سياسة الخصوصية الخاصة بتطبيق استشارة</p>

                                        <div id="snow-editor" style="height: 300px;">
                                            <h3><span class="ql-size-large">اهلا ومرحباً</span></h3>
                                            <p><br></p>
                                            <h3>سياسة خصوصية استشارة</h3>
                                            <p><br></p>
                                            <ul>
                                                <li>
                                                    يوفر إشعار الخصوصية وملفات تعريف الارتباط معلومات حول كيفية قيام إفاز بجمع ومعالجة بياناتك الشخصية عند زيارة موقعنا الإلكتروني.

                                                </li>
                                                <li>
                                                    نقوم بجمع بياناتك الشخصية من أجل توفير المنتجات والخدمات وتحسينها باستمرار.
                                                </li>
                                            </ul>
                                            <p><br></p>


                                        </div> <!-- end Snow-editor-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; جميع الحقوق محفوظة لي  استشارة</a>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">عن استشارة</a>
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
