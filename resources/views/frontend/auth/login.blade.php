@extends('frontend.layouts.app')
@section('content')
        <!-- Main row -->
<div class="row">
    <!-- Left col -->
    <div class="col-lg-1"></div>
    <section class="col-lg-10 connectedSortable ">
        <div class="login-box">
            <div class="login-logo">
                <a href="">DREAMJOB</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Bạn chưa đăng nhập <br> Vui lòng đăng nhập vào tài khoản của bạn</p>

                {!! Form::open(['url' => 'login', 'class' => 'form-horizontal']) !!}
                    <div class="form-group has-feedback">
                        {!! Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' =>'Tài khoản']) !!}
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => 'Mật khẩu']) !!}
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-7" style="padding-top: 6px;">
                                <!--<div class="checkbox icheck">-->
                                {!! Form::checkbox('remember') !!} Ghi nhớ đăng nhập
                                <!--</div>-->
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-5">
                                {!! Form::submit('Đăng nhập', ['class' => 'btn btn-primary btn-block btn-flat']) !!}
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                </form>
                {!! link_to('password/reset', 'Quên mật khẩu') !!}<br>
                <a href="/register" class="text-center">Tạo tài khoản</a>

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
    </section>

</div>
@stop