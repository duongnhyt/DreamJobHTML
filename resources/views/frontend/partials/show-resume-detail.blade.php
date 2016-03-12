@extends('frontend.layouts.app')
@section('special_css')
{{--<!-- daterange picker -->--}}
{{--<link rel="stylesheet" href="{{asset("/plugins/daterangepicker/daterangepicker-bs3.css")}}">--}}
        <!-- Select2 -->
{{--<link rel="stylesheet" href="{{asset("/plugins/select2/select2.min.css")}}">--}}
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{asset("/plugins/iCheck/all.css")}}">

@stop

@section('content')
    <div class="row">
        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="{{asset("img/user2-160x160.jpg")}}"
                     alt="User profile picture">
                <center>
                    {{--<button class="btn btn-success" style="margin: 10px 0px;">Xem Thẻ Hồ sơ</button>--}}
                    <a class="btn btn-success" style="margin: 10px 0px;" data-toggle="modal" data-target="#show-cv-modal">Xem Thẻ hồ sơ</a>
                <!-- Trigger the modal with a button -->
                {{--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>--}}

                </center>
                @include('frontend.partials.show-cv-modal')


                <h3 class="profile-username text-center">Nguyễn Hải Dương</h3>

                <p class="text-muted text-center">Là thành viên từ: 11/2012</p>


                <ul class="list-group list-group-unbordered pull-center" STYLE="max-width: 80%;">
                    <li class="list-group-item">
                        <b>Email</b> <a href="mailto:duongnhyt@gmail.com?Subject=Xin%20chào" class="pull-right">duongnhyt@gmail
                            .com</a>
                    </li>
                    <li class="list-group-item">
                        <b>Giới tính</b> <a class="pull-right">Nam</a>
                    </li>
                    <li class="list-group-item">
                        <b>Quốc tịch</b> <a class="pull-right">Việt Nam</a>
                    </li>
                    <li class="list-group-item">
                        <b>Chỗ ở hiện tại</b> <a class="pull-right">KTT Cánh kiến - Vạn Phúc - Hà Đông - Hà Nội - Việt Nam</a>
                    </li>
                </ul>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-user"> </i> <span
                            style="margin-left: 15px;">Thông tin Cá nhân</span></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" disabled="" data-widget="remove"><i class="fa fa-remove"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Họ Tên</label>

                        <div class="col-sm-10">
                            <input type="text" disabled class="form-control disabled-text" placeholder="Họ Tên">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Quê quán</label>

                        <div class="col-sm-10">
                            <textarea type="text" disabled class="form-control disabled-text"  placeholder="Quê quán"></textarea>
                        </div>
                    </div>

                    <div class="form-group" class="col-sm-6">
                        <label class="col-sm-2 control-label">Sinh ngày</label>

                        <div class="col-sm-4">
                            <input id="datemask" type="text" placeholder="Ngày/Tháng/Năm" disabled class="form-control disabled-text" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                        </div>

                        <label class="col-sm-3 control-label">Giới tính</label>

                        <div class="col-sm-1" style="padding: 6px 12px;">
                            <label>
                                <input disabled type="radio" name="radio_gt" class="minimal" checked>
                            </label>
                            <label>Nam</label>
                        </div>
                        <div class="col-sm-1" style="padding: 6px 12px;">
                            <label>
                                <input disabled type="radio" name="radio_gt" class="minimal">
                            </label>
                            <label>Nữ</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Chỗ ở hiện tại</label>

                        <div class="col-sm-10">
                            <input type="text" disabled class="form-control disabled-text"  placeholder="Chỗ ở hiện tại">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Số điện thoại</label>

                        <div class="col-sm-10">
                            <input type="text" disabled class="form-control disabled-text"  placeholder="Số điện thoại">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                            <input type="text" disabled class="form-control disabled-text"  placeholder="abc@abc.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Facebook</label>

                        <div class="col-sm-10">
                            <input type="text" disabled class="form-control disabled-text"  placeholder="https://www.facebook.com/account">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{--/.box--}}

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-list"> </i> <span
                            style="margin-left: 15px;">Thông tin Chung</span></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" disabled="" data-widget="remove"><i class="fa fa-remove"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Số năm kinh nghiệm</label>

                        <div class="col-sm-4">
                            {{--<div class="input-group">--}}
                            {{--<div class="input-group-addon">--}}
                            {{--<i class="fa fa-user"></i>--}}
                            {{--</div>--}}
                            <input type="text" disabled class="form-control disabled-text"
                                   placeholder="3 năm/Mới tốt nghiệp/Chưa có kinh nghiệm ...">
                            {{--</div>--}}
                        </div>

                        <label class="col-sm-2 control-label">Bằng cấp</label>

                        <div class="col-sm-4">
                            <input disabled class="form-control disabled-text" value="Đại học">
                        </div>
                    </div>

                    <div class="form-group">
                        <div id="div_lang">
                            <label class="col-sm-2 control-label">Ngoại ngữ</label>

                            <div class="col-sm-4">
                                <input type="text" disabled class="form-control disabled-text"
                                       placeholder="Tiếng Anh; Tiếng Nhật; Tiếng Đức ...">
                            </div>

                            <label class="col-sm-2 control-label">Trình độ</label>

                            <div class="col-sm-4">

                                <input type="text" disabled class="form-control disabled-text"
                                       placeholder="Tiếng Anh: A, B1, B2 ... / Toeic: 400 ...">
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Trình độ tin học</label>

                        <div class="col-sm-10">
                            <input type="text" disabled class="form-control disabled-text"  placeholder="Văn phòng; Lập trình viên ...">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nơi làm việc hiện tại</label>

                        <div class="col-sm-4">
                            <input disabled class="form-control disabled-text"  list="noi-lam-viec-hien-tai" name="noi_lam_viec_hien_tai"
                                   placeholder="Nhập hoặc lựa chọn Nơi làm việc">
                        </div>

                        <label class="col-sm-2 control-label">Cấp bậc hiện tại</label>

                        <div class="col-sm-4">
                            <input disabled class="form-control disabled-text" placeholder="Trưởng phòng">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Các lĩnh vực có thể tham gia hoạt động </label>

                        <div class="col-sm-10">
                            <!-- checkbox -->
                            <label class="col-sm-5">
                                <input disabled type="checkbox" class="minimal">
                                Thiết kế
                            </label>
                            <label class="col-sm-5">
                                <input  disabled type="checkbox" class="minimal">
                                Thi Công
                            </label>
                            <label class="col-sm-5">
                                <input disabled type="checkbox" class="minimal">
                                Trắc địa
                            </label>
                            <label class="col-sm-5">
                                <input disabled type="checkbox" class="minimal">
                                Trắc ngang
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Kỹ năng cá nhân</label>

                        <div class="col-sm-10">
                            <input type="text" disabled class="form-control disabled-text"  style="background-color: red;"
                                   placeholder="Đình anh chèn ckeditor vào đây">
                        </div>
                    </div>
                    {{--@include('frontend.partials.submit_div')--}}
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-trophy"> </i> <span
                            style="margin-left: 15px;">Giải thưởng/Chứng chỉ</span></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" disabled="" data-widget="remove"><i class="fa fa-remove"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div id="div_degree">
                            <label class="col-sm-2 control-label">Loại Giải thưởng/Chứng chỉ</label>

                            <div class="col-sm-4">
                                <input type="text" disabled class="form-control disabled-text"  placeholder="Loại bằng cấp chứng chỉ">
                            </div>

                            {{--<label class="col-sm-2 control-label">Vui lòng tải để xem</label>--}}

                            {{--<div class="col-sm-4">--}}
                                {{--<button class="btn btn-primary " style="margin-right: 5px;"><i class="fa fa-download"></i> Tải xuống </button>--}}

                                {{----}}

                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="col-sm-6">
                                <a class="btn btn-success" data-toggle="modal" data-target="#show-img-modal">Xem</a>
                                @include('frontend.partials.show-img-modal')
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <!-- /.box-body -->
        </div>

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-hourglass"> </i> <span
                            style="margin-left: 15px;">Kinh nghiệm làm việc</span></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" disabled="" data-widget="remove"><i class="fa fa-remove"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form class="form-horizontal" id="frm_skill">
                    <div id="div_skill">
                        <!-- Date range -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Từ ngày:</label>

                            <div class="col-sm-4">
                                {{--<div class="input-group">--}}
                                {{--<div class="input-group-addon">--}}
                                {{--<i class="fa fa-calendar"></i>--}}
                                {{--</div>--}}
                                <input id="datemask" type="text" placeholder="Ngày/Tháng/Năm" disabled class="form-control disabled-text"
                                       data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                {{--</div>--}}
                                        <!-- /.input group -->
                            </div>

                            <label class="col-sm-2 control-label">Đến ngày:</label>

                            <div class="col-sm-4">
                                {{--<div class="input-group">--}}
                                {{--<div class="input-group-addon">--}}
                                {{--<i class="fa fa-calendar"></i>--}}
                                {{--</div>--}}
                                <input id="datemask" type="text" placeholder="Ngày/Tháng/Năm" disabled class="form-control disabled-text"
                                       data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                {{--</div>--}}
                                        <!-- /.input group -->
                            </div>
                        </div>
                        <!-- /.form group -->

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Chức danh</label>

                            <div class="col-sm-10">
                                <input disabled class="form-control disabled-text"  list="nganh-nghe" name="nganh_nghe"
                                       placeholder="Chức danh đã làm">
                                {{--<datalist id="nganh-nghe">--}}
                                    {{--<option value="Công nghệ thông tin">--}}
                                    {{--<option value="Kinh tế">--}}
                                    {{--<option value="Kế toán">--}}
                                    {{--<option value="Giảng viên">--}}
                                {{--</datalist>--}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Công ty</label>

                            <div class="col-sm-10">
                                <input disabled class="form-control disabled-text"  list="nganh-nghe" name="nganh_nghe"
                                       placeholder="Công ty đã làm">
                                {{--<datalist id="nganh-nghe">--}}
                                    {{--<option value="Công nghệ thông tin">--}}
                                    {{--<option value="Kinh tế">--}}
                                    {{--<option value="Kế toán">--}}
                                    {{--<option value="Giảng viên">--}}
                                {{--</datalist>--}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Mô tả</label>

                            <div class="col-sm-10">
                                <input type="text" disabled class="form-control disabled-text"  style="background-color: red;"
                                       placeholder="Đình anh chèn ckeditor vào đây">
                            </div>
                        </div>

                        <hr>
                    </div>
                    {{--<div>--}}
                        {{--<div class="col-sm-2"></div>--}}
                        {{--<div class="col-sm-10" id="btn_add_skill" style="cursor: pointer; color: blue;">+ Thêm mới Kỹ--}}
                            {{--năng--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--@include('frontend.partials.submit_div')--}}
                </form>
            </div>
            <!-- /.box-body -->
        </div>

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-heartbeat"> </i> <span
                            style="margin-left: 15px;">Công việc mong muốn</span></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" disabled="" data-widget="remove"><i class="fa fa-remove"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Lĩnh vực mong muốn</label>

                        <div class="col-sm-10">
                            <input disabled class="form-control disabled-text"  list="nganh-nghe" name="nganh_nghe" placeholder="Nhập hoặc lựa chọn ngành nghề">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nơi làm việc mong muốn</label>

                        <div class="col-sm-4">
                            <input disabled class="form-control disabled-text"  list="noi-lam-viec-hien-tai" name="noi_lam_viec_hien_tai" placeholder="Nhập hoặc lựa chọn Nơi làm việc">

                        </div>

                        <label class="col-sm-2 control-label">Cấp bậc mong muốn</label>

                        <div class="col-sm-4">
                            <input disabled class="form-control disabled-text" placeholder="Trưởng phòng">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Mức lương mong muốn</label>

                        <div class="col-sm-6">
                            <input disabled class="form-control disabled-text"  placeholder="Mức lương mong muốn theo tháng">
                        </div>
                        <div class="col-sm-2" style="padding: 6px 12px;">
                            <label>
                                <input disabled type="radio" name="radio_luong" class="minimal" checked>
                            </label>
                            <label>VNĐ/Tháng</label>
                        </div>
                        <div class="col-sm-2" style="padding: 6px 12px;">
                            <label>
                                <input disabled type="radio" name="radio_luong" class="minimal">
                            </label>
                            <label>USD/Tháng</label>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </div><!-- /.row -->


@stop

@section('special_script')

{{--    <script src="{{asset("plugins/select2/select2.full.min.js")}}"></script>--}}

    <script src="{{asset("plugins/iCheck/icheck.min.js")}}"></script>
    {{--<!-- Page script -->--}}
    <script>
        $(function () {
            //Initialize Select2 Elements
//            $(".select2").select2();

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });

        });
    </script>

@stop

