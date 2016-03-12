<form action="">
    <div class="row">
        <div class="col-lg-8">
            {{--<input id="txt_linhvuc" type="text"--}}
                   {{--placeholder="Lựa chọn lĩnh vực"--}}
                   {{--class="form-control">--}}
            <select class="form-control select2" style="width: 100%;" data-placeholder="Lựa chọn lĩnh vực" multiple="multiple">
                <option>Trắc địa</option>
                <option>Trắc ngang</option>
                <option>Xây dựng dân dụng</option>
                <option>Cầu đường</option>
            </select>
        </div>
        <div class="col-lg-4">
            {{--<input id="txt_diadiem" type="text"--}}
                   {{--placeholder="Lựa chọn địa điểm"--}}
                   {{--class="form-control">--}}

            <select class="form-control select2" style="width: 100%;" data-placeholder="Lựa chọn Địa điểm" multiple="multiple">
                <option>Hà Nội</option>
                <option>TP Hồ Chí Minh</option>
                <option>Nha Trang</option>
                <option>Vũng Tàu</option>
            </select>
        </div>
    </div>

    <div class="row" style="margin-top: 10px;">
        <div class="col-lg-4">
            <input id="txt_capbac" type="text"
                   placeholder="Mức lương mong muốn"
                   class="form-control">
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
        <div class="col-lg-4">
            {{--<input id="txt_capbac" type="text"--}}
                   {{--placeholder="Lựa chọn cấp bậc"--}}
                   {{--class="form-control">--}}
            <select class="form-control select2" style="width: 100%;" data-placeholder="Lựa chọn cấp bậc" multiple="multiple">
                <option>Nhân viên</option>
                <option>Trưởng phòng</option>
                <option>Phó Phòng</option>
                <option>Tạp vụ</option>
            </select>
        </div>
    </div>

    <div class="row" style="margin-top: 10px;">
        {{--Nếu là trang quản lý tin tuyển dụng của công ty thì enable button đăng tin tuyển dụng này--}}
        <div class="col-lg-8">
            <a href="/company/news-create">
                <input type="button" value="Đăng tin tuyển dụng" class="btn btn-danger">
            </a>
        </div>
        <div class="col-lg-4">
            <input type="submit" value="Tìm kiếm" class="btn btn-success">
        </div>
    </div>

</form>
