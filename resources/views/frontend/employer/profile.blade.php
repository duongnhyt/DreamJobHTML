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
                     alt="Conpany profile picture">


                <h3 class="profile-username text-center">Tên Công ty</h3>

                <p class="text-muted text-center">Slogan</p>

                <div class="pull-center" style="max-width:80%; margin-bottom:10px;">
                    <a class="pull-right" href="">Upload Ảnh Đại diện</a>
                    <a href="">Chỉnh sửa thông tin tài khoản</a>
                </div>

                <ul class="list-group list-group-unbordered pull-center" STYLE="max-width: 80%;">
                    <li class="list-group-item">
                        <b>Lĩnh vực kinh doanh</b> <a class="pull-right">Xây dựng Dân dụng; Cầu đường</a>
                    </li>
                    <li class="list-group-item">
                        <b>Số điện thoại</b> <a class="pull-right">0123 456 789</a>
                    </li>
                    <li class="list-group-item">
                        <b>Email</b> <a href="mailto:duongnhyt@gmail.com?Subject=Xin%20chào"
                                        class="pull-right">company@company.com</a>
                    </li>
                    <li class="list-group-item">
                        <b>Địa chỉ</b> <a class="pull-right">KTT Cánh kiến - Vạn Phúc - Hà Đông - Hà Nội - Việt Nam</a>
                    </li>
                </ul>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

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
                        <label class="col-sm-2 control-label">Tên Công ty</label>

                        <div class="col-sm-10">
                            {{--<div class="input-group">--}}
                            {{--<div class="input-group-addon">--}}
                            {{--<i class="fa fa-user"></i>--}}
                            {{--</div>--}}
                            <input type="text" class="form-control"
                                   placeholder="Tên Công ty ...">
                            {{--</div>--}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Quy mô</label>

                        <div class="col-sm-10">
                            {{--<div class="input-group">--}}
                            {{--<div class="input-group-addon">--}}
                            {{--<i class="fa fa-user"></i>--}}
                            {{--</div>--}}
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Vui lòng chọn</option>
                                <option>Ít hơn 10</option>
                                <option>10-24</option>
                                <option>25-99</option>
                                <option>100-499</option>
                                <option>500-999</option>
                                <option>Nhiều hơn 1000</option>
                            </select>

                            {{--</div>--}}
                        </div>
                    </div>

                    {{--<div class="form-group">--}}
                    {{--<label class="col-sm-2 control-label">Ngành nghề</label>--}}

                    {{--<div class="col-sm-10">--}}
                    {{--<input class="form-control" list="nganh-nghe" name="nganh_nghe"--}}
                    {{--placeholder="Nhập hoặc lựa chọn ngành nghề">--}}
                    {{--<datalist id="nganh-nghe">--}}
                    {{--<option value="Công nghệ thông tin">--}}
                    {{--<option value="Kinh tế">--}}
                    {{--<option value="Kế toán">--}}
                    {{--<option value="Giảng viên">--}}
                    {{--</datalist>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Địa chỉ</label>

                        <div class="col-sm-10">
                            {{--<div class="input-group">--}}
                            {{--<div class="input-group-addon">--}}
                            {{--<i class="fa fa-user"></i>--}}
                            {{--</div>--}}
                            <input type="text" class="form-control" placeholder="Địa chỉ Công ty ...">
                            {{--</div>--}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Điện thoại</label>

                        <div class="col-sm-10">
                            {{--<div class="input-group">--}}
                            {{--<div class="input-group-addon">--}}
                            {{--<i class="fa fa-user"></i>--}}
                            {{--</div>--}}
                            <input type="text" class="form-control" placeholder="Điện thoại Công ty ...">
                            {{--</div>--}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Fax </label>

                        <div class="col-sm-10">
                            {{--<div class="input-group">--}}
                            {{--<div class="input-group-addon">--}}
                            {{--<i class="fa fa-user"></i>--}}
                            {{--</div>--}}
                            <input type="text" class="form-control" placeholder="Số Fax ...">
                            {{--</div>--}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email </label>

                        <div class="col-sm-10">
                            {{--<div class="input-group">--}}
                            {{--<div class="input-group-addon">--}}
                            {{--<i class="fa fa-user"></i>--}}
                            {{--</div>--}}
                            <input type="text" class="form-control" placeholder="Email Công ty ...">
                            {{--</div>--}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Website</label>

                        <div class="col-sm-10">
                            {{--<div class="input-group">--}}
                            {{--<div class="input-group-addon">--}}
                            {{--<i class="fa fa-user"></i>--}}
                            {{--</div>--}}
                            <input type="text" class="form-control" placeholder="Website Công ty ...">
                            {{--</div>--}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Fanpage/Facebook</label>

                        <div class="col-sm-10">
                            {{--<div class="input-group">--}}
                            {{--<div class="input-group-addon">--}}
                            {{--<i class="fa fa-user"></i>--}}
                            {{--</div>--}}
                            <input type="text" class="form-control" placeholder="Fanpage/Facebook của Công ty ...">
                            {{--</div>--}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Người liên hệ</label>

                        <div class="col-sm-10">
                            {{--<div class="input-group">--}}
                            {{--<div class="input-group-addon">--}}
                            {{--<i class="fa fa-user"></i>--}}
                            {{--</div>--}}
                            <input type="text" class="form-control" placeholder="Đại diện Công ty ...">
                            {{--</div>--}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Điện thoại liên hệ</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Điện thoại của người đại diện ...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Các lĩnh vực hoạt động </label>

                        <div class="col-sm-10">
                            <!-- checkbox -->
                            <label name="checkb-lv-lbl" class="col-sm-5">
                                <input name="checkb-linhvuc" type="checkbox" class="minimal" value="Thiết kế">
                                Thiết kế
                            </label>
                            <label name="checkb-lv-lbl" class="col-sm-5">
                                <input name="checkb-linhvuc" type="checkbox" class="minimal" value="Thi Công">
                                Thi Công
                            </label>
                            <label name="checkb-lv-lbl" class="col-sm-5">
                                <input name="checkb-linhvuc" type="checkbox" class="minimal" value="Trắc địa">
                                Trắc địa
                            </label>
                            <label name="checkb-lv-lbl" class="col-sm-5">
                                <input name="checkb-linhvuc" type="checkbox" class="minimal" value="Trắc ngang">
                                Trắc ngang
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Sơ lược về Công ty</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" style="background-color: red;"
                                   placeholder="Đình anh chèn ckeditor vào đây">
                        </div>
                    </div>
                    @include('frontend.partials.submit_div')                 </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        {{--<div class="box box-primary">--}}
            {{--<div class="box-header with-border">--}}
                {{--<h3 class="box-title"><i class="fa fa-hourglass"> </i> <span--}}
                            {{--style="margin-left: 15px;">Hồ sơ năng lực</span></h3>--}}
                {{--<div class="box-tools pull-right">--}}
                    {{--<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>--}}
                    {{--<button class="btn btn-box-tool" disabled="" data-widget="remove"><i class="fa fa-remove"></i>--}}
                    {{--</button>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- /.box-header -->--}}
            {{--<div class="box-body">--}}
                {{--<form class="form-horizontal" id="frm_skill">--}}
                    {{--<div id="div_skill">--}}
                        {{--<div class="form-group">--}}
                            {{--<label class="col-sm-2 control-label">Chọn lĩnh vực</label>--}}

                            {{--<div class="col-sm-4" id="hosonangluc-cbx">--}}
                                {{--<select class="form-control select2" style="width: 100%;">--}}
                                    {{--<option selected="selected">Vui lòng chọn ...</option>--}}
                                    {{--<option>Trắc địa</option>--}}
                                    {{--<option>Trắc ngang</option>--}}
                                    {{--<option>Xây dựng dân dụng</option>--}}
                                    {{--<option>Cầu đường</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}

                            {{--<div class="col-sm-6"><p>* Vui lòng chọn lĩnh vực hoạt động ở trên trước.</p></div>--}}
                        {{--</div>--}}
                        {{--<!-- Date range -->--}}
                        {{--<div class="form-group">--}}
                            {{--<label class="col-sm-2 control-label">Từ ngày:</label>--}}

                            {{--<div class="col-sm-4">--}}
                                {{--<div class="input-group">--}}
                                {{--<div class="input-group-addon">--}}
                                {{--<i class="fa fa-calendar"></i>--}}
                                {{--</div>--}}
                                {{--<input id="datemask" type="text" placeholder="Ngày/Tháng/Năm" class="form-control"--}}
                                       {{--data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>--}}
                                {{--</div>--}}
                                        {{--<!-- /.input group -->--}}
                            {{--</div>--}}

                            {{--<label class="col-sm-2 control-label">Đến ngày:</label>--}}

                            {{--<div class="col-sm-4">--}}
                                {{--<div class="input-group">--}}
                                {{--<div class="input-group-addon">--}}
                                {{--<i class="fa fa-calendar"></i>--}}
                                {{--</div>--}}
                                {{--<input id="datemask" type="text" placeholder="Ngày/Tháng/Năm" class="form-control"--}}
                                       {{--data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>--}}
                                {{--</div>--}}
                                        {{--<!-- /.input group -->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /.form group -->--}}

                        {{--<div class="form-group">--}}
                            {{--<label class="col-sm-2 control-label">Tên dự án</label>--}}

                            {{--<div class="col-sm-10">--}}
                                {{--<input type="text" class="form-control" placeholder="Tên dự án đã thực hiện ...">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label class="col-sm-2 control-label">Sản phẩm</label>--}}

                            {{--<div class="col-sm-10">--}}
                                {{--<input type="text" class="form-control" placeholder="Sản phẩm đã thực hiện ...">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label class="col-sm-2 control-label">Địa điểm</label>--}}

                            {{--<div class="col-sm-10">--}}
                                {{--<input type="text" class="form-control" placeholder="Địa điểm áp dụng sản phẩm ...">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label class="col-sm-2 control-label">Mô tả</label>--}}

                            {{--<div class="col-sm-10">--}}
                                {{--<input type="text" class="form-control" style="background-color: red;"--}}
                                       {{--placeholder="Đình anh chèn ckeditor vào đây">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<hr>--}}
                    {{--</div>--}}
                    {{--<div>--}}

                        {{--<div class="col-sm-12" id="btn_add_skill" style="cursor: pointer; color: blue;">+ Thêm mới Dự án--}}
                            {{--đã thực hiện--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--@include('frontend.partials.submit_div')                 </form>--}}
            {{--</div>--}}
            {{--<!-- /.box-body -->--}}
        {{--</div>--}}
        <!-- /.box -->

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-thumbs-o-up"> </i> <span
                            style="margin-left: 15px;">Là đối tác của chúng tôi</span></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" disabled="" data-widget="remove"><i class="fa fa-remove"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="color: #d73131;">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Công ty bạn có muốn trở thành đối tác của chúng
                            tôi?</label>

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
                        <label class="col-sm-2 control-label">Quyền lợi:</label>

                        <div class="col-sm-10">
                            <ul>
                                <li>Cho phép đăng tải hồ sơ năng lực để liên hệ việc làm trực tiếp với khách hàng.</li>
                                <li>Liên kết với chúng tôi để thực hiện các nhiệm vụ đấu thầu, tuyển chọn dự án xây
                                    dựng.
                                </li>
                                <li>Liên kết với chúng tôi trong lĩnh vực đào tạo nghiệp vụ cho sinh viên xây dựng cơ
                                    bản.
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{--<hr>--}}
                    {{--<div class="form-group">--}}

                    {{--<div class="col-sm-1 pull-right">--}}
                    {{--<button type="reset" class="btn btn-default">Hủy</button>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-1 pull-right">--}}
                    {{--<button type="submit" class="btn btn-danger">Lưu</button>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    @include('frontend.partials.submit_div')                 </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->


    </div><!-- /.row -->
@stop

@section('special_script')

{{--    <script src="{{asset("plugins/select2/select2.full.min.js")}}"></script>--}}
    {{--<!-- InputMask -->--}}
    {{--<script src="{{asset("plugins/input-mask/jquery.inputmask.js")}}"></script>--}}
    {{--<script src="{{asset("plugins/input-mask/jquery.inputmask.date.extensions.js")}}"></script>--}}
    {{--<script src="{{asset("plugins/input-mask/jquery.inputmask.extensions.js")}}"></script>--}}
    {{--iCheck 1.0.1--}}
    <script src="{{asset("plugins/iCheck/icheck.min.js")}}"></script>
    {{--<!-- Page script -->--}}
    <script>
        $(function () {
            $("[data-mask]").inputmask();

//            $(".select2").select2();

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });

//            $("label[name=checkb-lv-lbl]").click(function() {
////                alert("abc");
//                var arr_lv = new Array();
//
//                $("input:checkbox[name=checkb-linhvuc]:checked").each(function () {
//                    arr_lv.push($(this).val());
//                });
//
//                var html = "<select class='form-control select2' style='width: 100%'>";
//                html += "<option selected='selected'>Vui lòng chọn ...</option>";
//
//                for(i=0; i<arr_lv.length; i++)
//                {
//                    html += "<option> " + arr_lv[i] + "</option>";
//                }
//
//                html += "</select>";
//
//                $("#hosonangluc-cbx").html(html);
//
//                //Initialize Select2 Elements
//                $(".select2").select2();
//            });

//            $("input[name=checkb-linhvuc]").change(function() {
////                alert("abc");
//                var arr_lv = new Array();
//
//                $("input:checkbox[name=checkb-linhvuc]:checked").each(function () {
//                    arr_lv.push($(this).val());
//                });
//
//                var html = "<select class='form-control select2' style='width: 100%'>";
//                html += "<option selected='selected'>Vui lòng chọn ...</option>";
//
//                for(i=0; i<arr_lv.length; i++)
//                {
//                    html += "<option> " + arr_lv[i] + "</option>";
//                }
//
//                html += "</select>";
//
//                $("#hosonangluc-cbx").html(html);
//
//                //Initialize Select2 Elements
//                $(".select2").select2();
//            });

//            $(document).on('click', '.btn_remove_skill', function (e) {
//                e.preventDefault();
//                $(this).parents('.div_skill_child').remove()
//            });
//
//            $("#btn_add_skill").click(function () {
//                $("#div_skill").append("<div class='div_skill_child'>" +
//                        "<div class='form-group'>"+
//                            "<label class='col-sm-2 control-label'>Chọn lĩnh vực</label>" +
//                         "<div class='col-sm-4' id='hosonangluc-cbx'>"+
//                                "<select class='form-control select2' style='width: 100%;'>" +
//                                    "<option selected='selected'>Vui lòng chọn ...</option>"+
//                                    "<option>Trắc địa</option>"+
//                                    "<option>Trắc ngang</option>"+
//                                    "<option>Xây dựng dân dụng</option>"+
//                                    "<option>Cầu đường</option>"+
//                                "</select>"+
//                            "</div>"+
//
//                            "<div class='col-sm-6'><p>* Vui lòng chọn lĩnh vực hoạt động ở trên trước.</p></div>" +
//                        "</div>" +
//                        "<div class='form-group'>" +
//                        "<label class='col-sm-1 control-label'>" +
//                        "<i class='fa fa-remove btn_remove_skill' style='cursor: pointer; color: red;'></i>" +
//                        "</label>" +
//                        "<label class='col-sm-1 control-label'>Từ ngày:</label>" +
//                        "<div class='col-sm-4'>" +
//                        "<input id='datemask' type='text' placeholder='Ngày/Tháng/Năm' class='form-control' data-inputmask=''alias': 'dd/mm/yyyy'' data-mask>" +
//                        "</div>" +
//                        "<label class='col-sm-2 control-label'>Đến ngày:</label>" +
//                        "<div class='col-sm-4'>" +
//                        "<input id='datemask' type='text' placeholder='Ngày/Tháng/Năm' class='form-control' data-inputmask=''alias': 'dd/mm/yyyy'' data-mask>" +
//                        "</div>" +
//                        "</div>" +
//                        "<div class='form-group'>" +
//                        "<label class='col-sm-2 control-label'>Tên dự án</label>" +
//                        "<div class='col-sm-10'>" +
//                        "<input type='text' class='form-control' placeholder='Tên dự án đã thực hiện ...'>" +
//                        "</div>" +
//                        "</div>" +
//                        "<div class='form-group'>" +
//                        "<label class='col-sm-2 control-label'>Sản phẩm</label>" +
//                        "<div class='col-sm-10'>" +
//                        "<input type='text' class='form-control' placeholder='Sản phẩm đã thực hiện ...'>" +
//                        "</div>" +
//                        "</div>" +
//                        "<div class='form-group'>" +
//                        "<label class='col-sm-2 control-label'>Mô tả</label>" +
//                        "<div class='col-sm-10'>" +
//                        "<input type='text' class='form-control' style='background-color: red;' placeholder='Đình anh chèn ckeditor vào đây'>" +
//                        "</div>" +
//                        "</div>" +
//                        "<hr>" +
//                        "</div>");
//            });


        });
    </script>

@stop

