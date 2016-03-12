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

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-hourglass"> </i> <span
                            style="margin-left: 15px;">Hồ sơ năng lực</span></h3>
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
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Chọn lĩnh vực</label>

                            <div class="col-sm-4" id="hosonangluc-cbx">
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Vui lòng chọn ...</option>
                                    <option>Trắc địa</option>
                                    <option>Trắc ngang</option>
                                    <option>Xây dựng dân dụng</option>
                                    <option>Cầu đường</option>
                                </select>
                            </div>

                            <div class="col-sm-6"><p>* Vui lòng chọn lĩnh vực Hoạt động trong phần hồ sơ Công ty  trước.</p></div>
                        </div>
                        <!-- Date range -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Từ ngày:</label>

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
                        <!-- /.form group -->

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tên dự án</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Tên dự án đã thực hiện ...">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Sản phẩm</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Sản phẩm đã thực hiện ...">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Địa điểm</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Địa điểm áp dụng sản phẩm ...">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Mô tả</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" style="background-color: red;"
                                       placeholder="Đình anh chèn ckeditor vào đây">
                            </div>
                        </div>

                        <hr>
                    </div>
                    <div>

                        <div class="col-sm-12" id="btn_add_skill" style="cursor: pointer; color: blue;">+ Thêm mới Dự án
                            đã thực hiện
                        </div>
                    </div>

                    @include('frontend.partials.submit_div')                 </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div><!-- /.row -->
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
                        "<label class='col-sm-1 control-label'>Chọn lĩnh vực</label>" +
                        "<div class='col-sm-4' id='hosonangluc-cbx'>" +
                        "<select class='form-control select2' style='width: 100%;'>" +
                        "<option selected='selected'>Vui lòng chọn ...</option>" +
                        "<option>Trắc địa</option>" +
                        "<option>Trắc ngang</option>" +
                        "<option>Xây dựng dân dụng</option>" +
                        "<option>Cầu đường</option>" +
                        "</select>" +
                        "</div>" +

                        "<div class='col-sm-6'><p>* Vui lòng chọn lĩnh vực hoạt động trong phần Hồ sơ Công ty trước.</p></div>" +
                        "</div>" +
                        "<div class='form-group'>" +
                        "<label class='col-sm-2 control-label'>Từ ngày:</label>" +
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

                //Initialize Select2 Elements
                $(".select2").select2();
            });


        });
    </script>

@stop

