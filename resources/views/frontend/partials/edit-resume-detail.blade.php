<div class="row">
    <!-- Profile Image -->
    {{--<div class="box box-primary">--}}
        {{--<div class="div-resume-tags">--}}
            {{--@include("frontend.partials.resume-tag")--}}
            {{-- chỗ này @include("frontend.partials.resume-tag") và để div class=box box-primary thêm class selected vào cho tôi nhé. Ở đây hiện tại t copy code sang để demo mẫu thôi.--}}
                    {{--<!-- Profile Image -->--}}
            {{--<div class="box box-primary selected">--}}
                {{--Nếu hiển thị trong resume-mng thì thêm cái box-header này vào. k thì ẩn nó đi--}}
                {{--<div class="box-header with-border">--}}
                    {{--<h3 class="box-title"><i class="fa fa-file-text"> </i> <span--}}
                                {{--style="margin-left: 15px;">Tên resume</span></h3>--}}
                    {{--<div class="box-tools pull-right">--}}
                        {{--<button class="btn btn-box-tool"><i class="fa fa-edit"></i></button>--}}
                        {{--<button class="btn btn-box-tool"><i class="fa fa-remove"></i></button>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--Hết box-header--}}
                {{--<div class="box-body box-profile">--}}
                    {{--<img class="profile-user-img img-responsive img-circle" src="{{asset("img/user2-160x160.jpg")}}"--}}
                         {{--alt="User profile picture">--}}


                    {{--<h3 class="profile-username text-center">Nguyễn Hải Dương</h3>--}}

                    {{--<p class="text-muted text-center">Là thành viên từ: 11/2012</p>--}}
                    {{--<div class="resume-tag pull-center">--}}
                        {{--<hr>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-5"><b>Điện thoại</b></div>--}}
                            {{--<div class="col-md-7"><a href="" class="pull-right">0123456789</a></div>--}}
                        {{--</div>--}}
                        {{--<hr>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-5"><b>Email</b></div>--}}
                            {{--<div class="col-md-7">--}}
                                {{--<a href="mailto:duongnhyt@gmail.com?Subject=Xin%20chào"--}}
                                   {{--class="pull-right">duongnhyt@gmail.com</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<hr>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-5"><b>Chỗ ở hiện nay</b></div>--}}
                            {{--<div class="col-md-7"><a class="pull-right">KTT Cánh kiến - Vạn Phúc - Hà Đông - Hà Nội ---}}
                                    {{--Việt Nam</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- /.box-body -->--}}
            {{--</div>--}}
            {{--<!-- /.box -->--}}
            {{--Sau khi @include có class selected rồi thì xóa đoạn ở giữa này đi cho tôi.--}}
        {{--</div>--}}
        {{--<div class="box-body box-profile">--}}
        {{--<img class="profile-user-img img-responsive img-circle" src="{{asset("img/user2-160x160.jpg")}}"--}}
        {{--alt="User profile picture">--}}


        {{--<h3 class="profile-username text-center">Nguyễn Hải Dương</h3>--}}

        {{--<p class="text-muted text-center">Là thành viên từ: 11/2012</p>--}}

        {{--<div class="pull-center" style="max-width:80%; margin-bottom:10px;">--}}
        {{--<a class="pull-right" href="">Upload Ảnh Đại diện</a>--}}
        {{--<a href="/person/account">Chỉnh sửa thông tin tài khoản</a>--}}
        {{--</div>--}}

        {{--<ul class="list-group list-group-unbordered pull-center" STYLE="max-width: 80%;">--}}
        {{--<li class="list-group-item">--}}
        {{--<b>Email</b> <a href="mailto:duongnhyt@gmail.com?Subject=Xin%20chào"--}}
        {{--class="pull-right">duongnhyt@gmail--}}
        {{--.com</a>--}}
        {{--</li>--}}
        {{--<li class="list-group-item">--}}
        {{--<b>Giới tính</b> <a class="pull-right">Nam</a>--}}
        {{--</li>--}}
        {{--<li class="list-group-item">--}}
        {{--<b>Quốc tịch</b> <a class="pull-right">Việt Nam</a>--}}
        {{--</li>--}}
        {{--<li class="list-group-item">--}}
        {{--<b>Chỗ ở hiện tại</b> <a class="pull-right">KTT Cánh kiến - Vạn Phúc - Hà Đông - Hà Nội - Việt--}}
        {{--Nam</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</div>--}}
                <!-- /.box-body -->
    {{--</div>--}}
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
            <form class="form-horizontal ">
                {{--<div class="row">--}}

                {{--<div class="col-md-9">--}}
                <div class="form-group">
                    <label class="col-sm-2 control-label">Họ Tên</label>

                    <div class="col-sm-10">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <input type="text" class="form-control" placeholder="Họ Tên">
                        {{--</div>--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Quê quán</label>

                    <div class="col-sm-10">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <textarea type="text" class="form-control" placeholder="Quê quán"></textarea>
                        {{--</div>--}}
                    </div>
                </div>

                <div class="form-group" class="col-sm-6">
                    <label class="col-sm-2 control-label">Sinh ngày</label>

                    <div class="col-sm-4">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-calendar"></i>--}}
                        {{--</div>--}}
                        <input id="datemask" type="text" placeholder="Ngày/Tháng/Năm" class="form-control"
                               data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                        {{--</div>--}}
                        {{--<!-- /.input group -->--}}
                    </div>

                    <label class="col-sm-3 control-label">Giới tính</label>

                    <div class="col-sm-1" style="padding: 6px 12px;">
                        <label>
                            <input type="radio" name="radio_gt" class="minimal" checked>
                        </label>
                        <label>Nam</label>
                    </div>
                    <div class="col-sm-1" style="padding: 6px 12px;">
                        <label>
                            <input type="radio" name="radio_gt" class="minimal">
                        </label>
                        <label>Nữ</label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Chỗ ở hiện tại</label>

                    <div class="col-sm-10">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <input type="text" class="form-control" placeholder="Chỗ ở hiện tại">
                        {{--</div>--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Số điện thoại</label>

                    <div class="col-sm-10">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <input type="text" class="form-control" placeholder="Số điện thoại">
                        {{--</div>--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <input type="text" class="form-control" placeholder="abc@abc.com">
                        {{--</div>--}}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Facebook</label>

                    <div class="col-sm-10">
                        {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--</div>--}}
                        <input type="text" class="form-control" placeholder="https://www.facebook.com/account">
                        {{--</div>--}}
                    </div>
                </div>
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                @include('frontend.partials.submit_div')
                {{--</div>--}}
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
                        <input class="form-control" list="so-nam-kinh-nghiem" name="so-nam-kinh-nghiem"
                               placeholder="Nhập hoặc lựa chọn Số năm kinh nghiệm bản thân">
                        <datalist id="so-nam-kinh-nghiem">
                            <option value="Chưa có kinh nghiệm">
                            <option value="Mới tốt nghiệp">
                            <option value="3 Năm">
                            <option value="5 Năm">
                        </datalist>
                    </div>

                    <label class="col-sm-2 control-label">Bằng cấp</label>

                    <div class="col-sm-4">
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Trung học</option>
                            <option>Trung Cấp</option>
                            <option>Cao Đẳng</option>
                            <option>Cử Nhân</option>
                            <option>Kỹ Sư</option>
                            <option>Thạc Sỹ</option>
                            <option>Tiến Sỹ</option>
                        </select>

                        {{--</div>--}}
                    </div>
                </div>

                <div class="form-group">
                    <div id="div_lang">
                        <label class="col-sm-2 control-label">Ngoại ngữ</label>

                        <div class="col-sm-4">
                            <input class="form-control" list="ngoai-ngu" name="ngoai-ngu"
                                   placeholder="Nhập hoặc lựa chọn Ngoại ngữ">
                            <datalist id="ngoai-ngu">
                                <option value="Tiếng Anh">
                                <option value="Tiếng Nhật">
                                <option value="Tiếng Pháp">
                                <option value="Tiếng Đức">
                            </datalist>
                        </div>

                        <label class="col-sm-2 control-label">Trình độ</label>

                        <div class="col-sm-4">
                            {{--<div class="input-group">--}}
                            {{--<div class="input-group-addon">--}}
                            {{--<i class="fa fa-user"></i>--}}
                            {{--</div>--}}
                            <input type="text" class="form-control"
                                   placeholder="Tiếng Anh: A, B1, B2 ... / Toeic: 400 ...">
                            {{--</div>--}}
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10" id="btn_add_lang" style="cursor: pointer; color: blue;">+ Thêm mới
                            ngoại ngữ
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 control-label">Trình độ tin học</label>

                    <div class="col-sm-10">
                        <select class="form-control select2" style="width: 100%;" data-placeholder="Nhập hoặc lựa chọn trình độ tin học" multiple>
                            <option>Văn phòng</option>
                            <option>Lập trình viên</option>
                            <option>Chưa có trình độ</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Nơi làm việc hiện tại</label>

                    <div class="col-sm-4">
                        <input class="form-control" list="noi-lam-viec-hien-tai" name="noi_lam_viec_hien_tai"
                               placeholder="Nhập hoặc lựa chọn Nơi làm việc">
                        <datalist id="noi-lam-viec-hien-tai">
                            <option value="Hà Nội">
                            <option value="TP. Hồ Chí Minh">
                            <option value="Hải Phòng">
                            <option value="Đà Nẵng">
                        </datalist>
                    </div>

                    <label class="col-sm-2 control-label">Cấp bậc hiện tại</label>

                    <div class="col-sm-4">
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Vui lòng chọn ...</option>
                            <option>Mới tốt nghiệp/ Thực tập sinh</option>
                            <option>Nhân viên</option>
                            <option>Trưởng phòng</option>
                            <option>Phó Giám đốc</option>
                            <option>Giám đốc</option>
                            <option>Phó Chủ tịch</option>
                            <option>Chủ tịch</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Các lĩnh vực có thể tham gia hoạt động </label>

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
                    <label class="col-sm-2 control-label">Kỹ năng cá nhân</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" style="background-color: red;"
                               placeholder="Đình anh chèn ckeditor vào đây">
                    </div>
                </div>
                @include('frontend.partials.submit_div')
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
                    <div id="div_degree" class="row">
                        <label class="col-sm-2 control-label">Loại Giải thưởng/Chứng chỉ</label>

                        <div class="col-sm-4">
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Trung học</option>
                                <option>Trung Cấp</option>
                                <option>Cao Đẳng</option>
                                <option>Cử Nhân</option>
                                <option>Kỹ Sư</option>
                                <option>Thạc Sỹ</option>
                                <option>Tiến Sỹ</option>
                            </select>
                        </div>

                        <label class="col-sm-2 control-label">Upload minh chứng</label>

                        <div class="col-sm-4">
                            <button class="btn btn-primary" style="margin-right: 5px;"><i class="fa fa-upload"></i> Tải file </button>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10" id="btn_add_degree" style="cursor: pointer; color: blue;">+ Thêm mới Giải thưởng/Chứng chỉ
                        </div>
                    </div>
                </div>
                @include('frontend.partials.submit_div')
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
                        <label class="col-sm-2 control-label">Chức danh</label>

                        <div class="col-sm-10">
                            <input class="form-control" list="nganh-nghe" name="nganh_nghe"
                                   placeholder="Chức danh đã làm">
                            <datalist id="nganh-nghe">
                                <option value="Công nghệ thông tin">
                                <option value="Kinh tế">
                                <option value="Kế toán">
                                <option value="Giảng viên">
                            </datalist>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Công ty</label>

                        <div class="col-sm-10">
                            <input class="form-control" placeholder="Công ty đã làm">
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
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10" id="btn_add_skill" style="cursor: pointer; color: blue;">+ Thêm mới Kỹ
                        năng
                    </div>
                </div>

                @include('frontend.partials.submit_div')
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
                        <select class="form-control select2" style="width: 100%;" data-placeholder="Nhập hoặc lựa chọn Lĩnh vực mong muốn được làm việc" multiple>
                            <option>Trắc ngang</option>
                            <option>Trắc địa</option>
                            <option>Cầu đường</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Nơi làm việc mong muốn</label>

                    <div class="col-sm-4">
                        <select class="form-control select2" style="width: 100%;" data-placeholder="Nhập hoặc lựa chọn Nơi làm việc mong muốn" multiple>
                            <option>Hà Nội</option>
                            <option>TP Hồ Chí Minh</option>
                            <option>Hải Phòng</option>
                        </select>
                    </div>

                    <label class="col-sm-2 control-label">Cấp bậc mong muốn</label>

                    <div class="col-sm-4">
                        <select class="form-control select2" style="width: 100%;" multiple data-placeholder="Nhập hoặc lựa chọn Cấp bậc mong muốn">
                            <option>Mới tốt nghiệp/ Thực tập sinh</option>
                            <option>Nhân viên</option>
                            <option>Trưởng phòng</option>
                            <option>Phó Giám đốc</option>
                            <option>Giám đốc</option>
                            <option>Phó Chủ tịch</option>
                            <option>Chủ tịch</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Mức lương mong muốn</label>

                    <div class="col-sm-6">
                        <input class="form-control" placeholder="Mức lương mong muốn theo tháng">
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
                </div>

                @include('frontend.partials.submit_div')
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    <a class="btn btn-success pull-right" data-toggle="modal" data-target="#show-cv-modal">Xem trước Thẻ hồ sơ</a>
    <!-- Trigger the modal with a button -->
    {{--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>--}}
    @include('frontend.partials.show-cv-modal')
</div><!-- /.row -->


