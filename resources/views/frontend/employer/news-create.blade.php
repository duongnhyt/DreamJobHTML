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
    {{--Div chỉnh sửa thông tin bài đăng--}}
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-list"> </i> <span
                        style="margin-left: 15px;">Thông tin Công việc</span></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" disabled="" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tiêu đề</label>

                    <div class="col-sm-10">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <input type="text" class="form-control"
                               placeholder="Tiêu đề tin ...">
                        {{--</div>--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Lĩnh vực </label>

                    <div class="col-sm-10">
                        <!-- checkbox -->
                        <label class="col-sm-5">
                            <input type="checkbox" class="minimal">
                            Thiết kế
                        </label>
                        <label class="col-sm-5">
                            <input type="checkbox" class="minimal">
                            Thi Công
                        </label>
                        <label class="col-sm-5">
                            <input type="checkbox" class="minimal">
                            Trắc địa
                        </label>
                        <label class="col-sm-5">
                            <input type="checkbox" class="minimal">
                            Trắc ngang
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Chức danh</label>

                    <div class="col-sm-10">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <input type="text" class="form-control"
                               placeholder="Chức danh ...">
                        {{--</div>--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Cấp bậc</label>

                    <div class="col-sm-10">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <input type="text" class="form-control"
                               placeholder="Cấp bậc ...">
                        {{--</div>--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Nơi làm việc</label>

                    <div class="col-sm-10">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <input type="text" class="form-control"
                               placeholder="Nơi làm việc ...">
                        {{--</div>--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Mức lương </label>

                    <div class="col-sm-4">
                        <input class="form-control" placeholder="Mức lương theo tháng">
                    </div>
                    <div class="col-sm-2" style="padding: 6px 12px;">
                        <label>
                            <input type="radio" name="radio_luong" class="minimal" checked>
                        </label>
                        <label>VNĐ/Tháng</label>
                    </div>
                    <div class="col-sm-2" style="padding: 6px 12px;">
                        <label>
                            <input type="radio" name="radio_luong" class="minimal">
                        </label>
                        <label>USD/Tháng</label>
                    </div>

                    <div class="col-sm-2" style="padding: 6px 12px;">
                        <label>
                            <input type="radio" name="radio_luong" class="minimal">
                        </label>
                        <label>Thỏa thuận</label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Mô tả công việc</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" style="background-color: red;"
                               placeholder="Đình anh chèn ckeditor vào đây">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Yêu cầu</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" style="background-color: red;"
                               placeholder="Đình anh chèn ckeditor vào đây">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Quyền lợi</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" style="background-color: red;"
                               placeholder="Đình anh chèn ckeditor vào đây">
                    </div>
                </div>

                <hr>
                <h3 style="color: blue;">Thông tin nộp hồ sơ</h3>

                <div class="form-group">
                    <label class="col-sm-2 control-label" >Cho phép ứng tuyển trực tiếp?</label>

                    <div class="col-sm-6">
                        <div class="col-sm-3" style="padding: 6px 12px;">
                            <label>
                                <input type="radio" name="radio_partner" class="minimal" checked>
                            </label>
                            <label>Có</label>
                        </div>
                        <div class="col-sm-3" style="padding: 6px 12px;">
                            <label>
                                <input type="radio" name="radio_partner" class="minimal">
                            </label>
                            <label>Không</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Người liên hệ</label>

                    <div class="col-sm-10">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <input type="text" class="form-control"  style="background-color: red;"
                               placeholder="Lấy từ CSDL ra ...">
                        <input type="checkbox" class="minimal">
                        Hiển thị thông tin người liên hệ
                        {{--</div>--}}
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-sm-2 control-label">Điện thoại người liên hệ</label>

                    <div class="col-sm-10">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <input type="text" class="form-control" style="background-color: red;"
                               placeholder="Điện thoại của người đại diện công ty (lấy từ CSDL)...">
                        {{--</div>--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Email nộp hồ sơ: </label>

                    <div class="col-sm-10">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <input type="text" class="form-control"
                               placeholder="Địa chỉ email nộp hồ sơ ...">
                        {{--</div>--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Địa chỉ nộp hồ sơ</label>

                    <div class="col-sm-10">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <input type="text" class="form-control"
                               placeholder="Địa chỉ nộp hồ sơ ...">
                        {{--</div>--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Nộp hồ sơ từ ngày:</label>

                    <div class="col-sm-4">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-calendar"></i>--}}
                        {{--</div>--}}
                        <input id="datemask" type="text" placeholder="Ngày/Tháng/Năm" class="form-control"
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
                        <input id="datemask" type="text" placeholder="Ngày/Tháng/Năm" class="form-control"
                               data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                        {{--</div>--}}
                                <!-- /.input group -->
                    </div>
                </div>

                <hr>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Thẻ/Từ khóa</label>

                    <div class="col-sm-3">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <input type="text" class="form-control"
                               placeholder="Xây dựng...">
                        {{--</div>--}}
                    </div>

                    <div class="col-sm-4">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <input type="text" class="form-control"
                               placeholder="Dân dụng ...">
                        {{--</div>--}}
                    </div>

                    <div class="col-sm-3">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <input type="text" class="form-control"
                               placeholder="Cầu đường ...">
                        {{--</div>--}}
                    </div>
                </div>

                <hr>
                <div class="form-group">
                    <div class="col-sm-2">
                        <button class="btn btn-success" onclick="openWin()">Xem trước tin</button>
                    </div>
                    <div class="col-sm-2 pull-right">
                        <button type="reset" class="btn btn-default" style="width: 100%">Hủy</button>
                    </div>
                    <div class="col-sm-2 pull-right">
                        <button type="submit" class="btn btn-danger" style="width: 100%">Lưu</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

    {{--<button onclick="openWin()">Open "myWindow"</button>--}}

    {{--div xem trước tin--}}
    {{--<div class="box box-success" style="border: 1px solid #00a65a">--}}
        {{--<div class="box-header with-border">--}}
            {{--<h3 class="box-title"><i class="fa fa-list"> </i> <span--}}
                        {{--style="margin-left: 15px;">Xem trước tin tuyển dụng</span></h3>--}}
            {{--<div class="box-tools pull-right">--}}
                {{--<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>--}}
                {{--<button class="btn btn-box-tool" disabled="" data-widget="remove"><i class="fa fa-remove"></i></button>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="box-body div-newscontent" style="background-color: #ecf0f5">--}}
            {{--@include('partials.new-detail')--}}
        {{--</div>--}}
        {{--<!-- /.box-body -->--}}
    {{--</div>--}}

@stop

@section('special_script')

    {{--<script src="{{asset("plugins/select2/select2.full.min.js")}}"></script>--}}
    {{--<!-- InputMask -->--}}
    {{--<script src="{{asset("plugins/input-mask/jquery.inputmask.js")}}"></script>--}}
    {{--<script src="{{asset("plugins/input-mask/jquery.inputmask.date.extensions.js")}}"></script>--}}
    {{--<script src="{{asset("plugins/input-mask/jquery.inputmask.extensions.js")}}"></script>--}}
    {{--iCheck 1.0.1--}}
    <script src="{{asset("plugins/iCheck/icheck.min.js")}}"></script>
    {{--<!-- Page script -->--}}
    <script>
        $(function () {
            //Initialize Select2 Elements
//            $(".select2").select2();

            //Datemask dd/mm/yyyy
//            $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});

            //Money Euro
            $("[data-mask]").inputmask();

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });

            $(document).on('click', '.btn_remove_skill', function (e) {
                e.preventDefault();
                $(this).parents('.div_skill_child').remove()
            });

            $("#btn_add_skill").click(function () {
                $("#div_skill").append("<div class='div_skill_child'>" +
                        "<div class='form-group'>" +
                        "<label class='col-sm-1 control-label'>" +
                        "<i class='fa fa-remove btn_remove_skill' style='cursor: pointer; color: red;'></i>" +
                        "</label>" +
                        "<label class='col-sm-1 control-label'>Từ ngày:</label>" +
                        "<div class='col-sm-4'>" +
                        "<input id='datemask' type='text' placeholder='Ngày/Tháng/Năm' class='form-control' data-inputmask=''alias': 'dd/mm/yyyy'' data-mask>" +
                        "</div>" +
                        "<label class='col-sm-2 control-label'>Đến ngày:</label>" +
                        "<div class='col-sm-4'>" +
                        "<input id='datemask' type='text' placeholder='Ngày/Tháng/Năm' class='form-control' data-inputmask=''alias': 'dd/mm/yyyy'' data-mask>" +
                        "</div>" +
                        "</div>" +
                        "<div class='form-group'>" +
                        "<label class='col-sm-2 control-label'>Tên dự án</label>" +
                        "<div class='col-sm-10'>" +
                        "<input type='text' class='form-control' placeholder='Tên dự án đã thực hiện ...'>" +
                        "</div>" +
                        "</div>" +
                        "<div class='form-group'>" +
                        "<label class='col-sm-2 control-label'>Sản phẩm</label>" +
                        "<div class='col-sm-10'>" +
                        "<input type='text' class='form-control' placeholder='Sản phẩm đã thực hiện ...'>" +
                        "</div>" +
                        "</div>" +
                        "<div class='form-group'>" +
                        "<label class='col-sm-2 control-label'>Mô tả</label>" +
                        "<div class='col-sm-10'>" +
                        "<input type='text' class='form-control' style='background-color: red;' placeholder='Đình anh chèn ckeditor vào đây'>" +
                        "</div>" +
                        "</div>" +
                        "<hr>" +
                        "</div>");
            });


        });

        var preview_news;
        function openWin() {
            preview_news = window.open("/company/preview-news","preview_news");
//            myWindow.document.write("<p>This is 'myWindow'</p>");
        }
    </script>

@stop