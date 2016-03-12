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
@include('frontend.partials.edit-resume-detail')
@stop

@section('special_script')

{{--<script src="{{asset("plugins/select2/select2.full.min.js")}}"></script>--}}
        <!-- InputMask -->
<script src="{{asset("plugins/input-mask/jquery.inputmask.js")}}"></script>
<script src="{{asset("plugins/input-mask/jquery.inputmask.date.extensions.js")}}"></script>
<script src="{{asset("plugins/input-mask/jquery.inputmask.extensions.js")}}"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
iCheck 1.0.1
<script src="{{asset("plugins/iCheck/icheck.min.js")}}"></script>
<!-- Page script -->
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

        $(document).on('click', '.btn_remove_lang', function (e) {
            e.preventDefault();
            $(this).parents('.div_lang_child').remove()
        });

        $("#btn_add_lang").click(function () {
            $("#div_lang").append("<div class='div_lang_child'>" +
                    "<label class='col-sm-2 control-label'>" +
                    "<i class='fa fa-remove btn_remove_lang' style='cursor: pointer; color: red;'></i>" +
                    "</label>" +
                    "<div class='col-sm-4'>" +
                    "<input class='form-control' list='ngoai-ngu' name='ngoai-ngu'" +
                    "placeholder='Nhập hoặc lựa chọn Ngoại ngữ'>" +
                    "<datalist id='ngoai-ngu'>" +
                    "<option value='Tiếng Anh'>" +
                    "<option value='Tiếng Nhật'>" +
                    "<option value='Tiếng Pháp'>" +
                    "<option value='Tiếng Đức'>" +
                    "</datalist>" +
                    "</div>" +
                    "<label class='col-sm-2 control-label'>Trình độ</label>" +
                    "<div class='col-sm-4'>" +
                    "<input type='text' class='form-control' placeholder='Tiếng Anh: A, B1, B2 ... / Toeic: 400 ...'>" +
                    "</div>" +
                    "</div>");


        });

        $(document).on('click', '.btn_remove_degree', function (e) {
            e.preventDefault();
            $(this).parents('.div_degree_child').remove()
        });

        $("#btn_add_degree").click(function () {
            $("#div_degree").append("<div class='div_degree_child'>" +
                    "<label class='col-sm-2 control-label'>" +
                    "<i class='fa fa-remove btn_remove_degree' style='cursor: pointer; color: red;'></i>" +
                    "</label>" +
                    "<div class='col-sm-4'>" +
                    "<select class='form-control select2' style='width: 100%;'>" +
                    "<option selected='selected'>Trung học</option>" +
                    "<option>Trung Cấp</option>" +
                    "<option>Cao Đẳng</option>" +
                    "<option>Cử Nhân</option>" +
                    "<option>Kỹ Sư</option>" +
                    "<option>Thạc Sỹ</option>" +
                    "<option>Tiến Sỹ</option>" +
                    "</select>" +
                    "</div>" +

                    "<label class='col-sm-2 control-label'>Upload minh chứng</label>" +

                    "<div class='col-sm-4'>" +

                    "<button class='btn btn-primary' style='margin-right: 5px;'><i class='fa fa-upload'></i> Tải file </button> </div>" +
                    "</div>");

            //Initialize Select2 Elements
            $(".select2").select2();
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
                    "<label class='col-sm-1 control-label'>Từ ngày:</label>"
                    + "<div class='col-sm-4'><input id='datemask' type='text' placeholder='Ngày/Tháng/Năm' class='form-control' data-inputmask=''alias': 'dd/mm/yyyy'' data-mask>"
                    + "</div>"
                    + "<label class='col-sm-2 control-label'>Đến ngày:</label>"
                    + "<div class='col-sm-4'>"
                    + "<input id='datemask' type='text' placeholder='Ngày/Tháng/Năm' class='form-control' data-inputmask=''alias': 'dd/mm/yyyy'' data-mask>"
                    + "</div></div>"
                    + "<div class='form-group'>"
                    + "<label class='col-sm-2 control-label'>Chức danh</label>"
                    + "<div class='col-sm-10'><input class='form-control' list='nganh-nghe' name='nganh_nghe' placeholder='Chức danh đã làm'>"
                    + "<datalist id='nganh-nghe'><option value='Công nghệ thông tin'><option value='Kinh tế'><option value='Kế toán'>"
                    + "<option value='Giảng viên'></datalist></div></div><div class='form-group'>"
                    + "<label class='col-sm-2 control-label'>Công ty</label>"
                    + "<div class='col-sm-10'><input class='form-control' placeholder='Công ty đã làm'>"
                    + "</div></div><div class='form-group'><label class='col-sm-2 control-label'>Mô tả</label>"
                    + "<div class='col-sm-10'><input type='text' class='form-control' style='background-color: red;' placeholder='Đình anh chèn ckeditor vào đây'>"
                    + "</div></div><hr></div>");
        });


    });
</script>

@stop

