
<form action="">
    <div class="row">
        <div class="col-lg-4">
            <input id="txt_nganhnghe" type="text"
                   placeholder="Mã Hồ sơ"
                   class="form-control">
        </div>
        <div class="col-lg-8">
            <input id="txt_diadiem" type="text"
                   placeholder="Họ tên"
                   class="form-control">
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-lg-4">
            <input id="txt_nganhnghe" type="text"
                   placeholder="Số điện thoại"
                   class="form-control">
        </div>
        <div class="col-lg-8">
            <input id="txt_diadiem" type="text"
                   placeholder="Email"
                   class="form-control">
        </div>
    </div>

    {{--<div style="margin-top: 10px;">--}}
        {{--<input id="txt_luong" type="text"--}}
               {{--placeholder="Email"--}}
               {{--class="form-control">--}}
    {{--</div>--}}

    <div class="row" style="margin-top: 10px;">
        <div class="col-lg-4">
            <select class="form-control select2" style="width: 100%;" data-placeholder="Giới tính">
                <option>Nam</option>
                <option>Nữ</option>
                <option>Cả hai</option>
            </select>
        </div>
        <div class="col-lg-8">
            <input id="txt_capbac" type="text"
            placeholder="Số năm kinh nghiệm"
            class="form-control">
        </div>
        {{--<div class="col-lg-8">--}}
            {{--<div class="col-lg-4">--}}
                {{--<input id="txt_capbac" type="text"--}}
                       {{--placeholder="Mức lương mong muốn"--}}
                       {{--class="form-control">--}}
            {{--</div>--}}
            {{--<div class="col-sm-2" style="padding: 6px 12px;">--}}
                {{--<label>--}}
                    {{--<input type="radio" name="radio_luong" class="minimal" checked>--}}
                {{--</label>--}}
                {{--<label>VNĐ/Tháng</label>--}}
            {{--</div>--}}
            {{--<div class="col-sm-2" style="padding: 6px 12px;">--}}
                {{--<label>--}}
                    {{--<input type="radio" name="radio_luong" class="minimal">--}}
                {{--</label>--}}
                {{--<label>USD/Tháng</label>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
    <div class="row" style="margin-top: 10px;">
        {{--Nếu là trang quản lý tin tuyển dụng của công ty thì enable button đăng tin tuyển dụng này--}}
        <div class="col-lg-4">
            <a href="/company/news-create">
                <input type="button" value="Đăng tin tuyển dụng" class="btn btn-danger">
            </a>
        </div>
        <div class="col-lg-8">
            <input type="submit" value="Tìm kiếm" class="btn btn-success">
        </div>
    </div>

</form>