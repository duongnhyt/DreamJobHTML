@extends('frontend.layouts.app')
@section('special_css')
{{--<!-- daterange picker -->--}}
{{--<link rel="stylesheet" href="{{asset("/plugins/daterangepicker/daterangepicker-bs3.css")}}">--}}

<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{asset("/plugins/iCheck/all.css")}}">

@stop
@section('content')
    <h4>
        Bạn muốn tạo tài khoản:
    </h4>
    <!-- Custom tabs (Charts with tabs)-->
    <div class="nav-tabs-custom">
        <!-- Tabs within a box -->
        <ul class="nav nav-tabs pull-right">
            <li style="width: 50%"><a href="#cong-ty" data-toggle="tab">Công ty</a></li>
            <li class="active" style="width: 49%"><a href="#ca-nhan" data-toggle="tab">Cá nhân</a></li>
        </ul>

        <div class="tab-content">
            <!-- Morris chart - Sales -->
            <div class="tab-pane active" id="ca-nhan" style="position: relative;">
                <div style="width:50%;margin: 3% auto">
                    <div style="text-align: center;">
                        <h2>Đăng ký tài khoản cá nhân</h2>
                    </div>

                    <div class="register-box-body">

                        <form action="" method="post">
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Họ và Tên">
                                <span class="fa fa-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="email" class="form-control" placeholder="Email">
                                <span class="fa fa-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" placeholder="Mật khẩu">
                                <span class="fa fa-key form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" placeholder="Xác nhận mật khẩu">
                                <span class="fa fa-sign-in form-control-feedback"></span>
                            </div>
                            <div class="row">
                                {{--<div class="col-xs-8">--}}
                                    <label class="col-sm-8">
                                        <input type="checkbox" class="minimal">
                                        Tôi đã đọc và đồng ý với các <a href="">điều khoản sử dụng hệ thống</a>
                                    </label>
                                    {{--<div class="checkbox icheck">--}}
                                        {{--<label>--}}
                                            {{--<input type="checkbox"> I agree to the <a href="#">terms</a>--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</div><!-- /.col -->--}}
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng ký</button>
                                </div><!-- /.col -->
                            </div>
                        </form>

                        <div class="social-auth-links text-center">
                            <p>- OR -</p>
                            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Đăng ký bằng tài khoản Facebook</a>
                            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Đăng ký bằng tài khoản Google+</a>
                        </div>

                        <a href="/login" class="text-center">Bạn đã có tài khoản?</a>
                    </div><!-- /.form-box -->
                </div><!-- /.register-box -->
            </div>
            <div class="tab-pane" style="position: relative;" id="cong-ty">
                <div style="width:50%;margin: 3% auto">
                    <div style="text-align: center;">
                        <h2>Đăng ký tài khoản Công ty</h2>
                    </div>

                    <div class="register-box-body">

                        <form action="" method="post">
                            <div class="form-group has-feedback">
                                <input type="email" class="form-control" placeholder="Email">
                                <span class="fa fa-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" placeholder="Mật khẩu">
                                <span class="fa fa-key form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" placeholder="Xác nhận mật khẩu">
                                <span class="fa fa-sign-in form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Tên Công ty">
                                <span class="fa fa-users form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Lĩnh vực hoạt động">
                                <span class="fa fa-building-o form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" placeholder="Số điện thoại">
                                <span class="fa fa-phone form-control-feedback"></span>
                            </div>
                            <div class="row">
                                {{--<div class="col-xs-8">--}}
                                <label class="col-sm-8">
                                    <input type="checkbox" class="minimal">
                                    Tôi đã đọc và đồng ý với các <a href="">điều khoản sử dụng hệ thống</a>
                                </label>
                                {{--<div class="checkbox icheck">--}}
                                {{--<label>--}}
                                {{--<input type="checkbox"> I agree to the <a href="#">terms</a>--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                {{--</div><!-- /.col -->--}}
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng ký</button>
                                </div><!-- /.col -->
                            </div>
                        </form>

                        {{--<div class="social-auth-links text-center">--}}
                            {{--<p>- OR -</p>--}}
                            {{--<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Đăng ký bằng tài khoản Facebook</a>--}}
                            {{--<a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Đăng ký bằng tài khoản Google+</a>--}}
                        {{--</div>--}}
                        <hr>
                        <a href="/login" class="text-center">Bạn đã có tài khoản?</a>
                    </div><!-- /.form-box -->
                </div><!-- /.register-box -->
            </div>
        </div>
    </div>
@stop

@section('special_script')
    {{--iCheck 1.0.1--}}
    <script src="{{asset("plugins/iCheck/icheck.min.js")}}"></script>
    {{--<!-- Page script -->--}}
    <script>
        $(function () {
            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });
        });
    </script>

@stop