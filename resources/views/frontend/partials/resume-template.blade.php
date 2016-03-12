<!-- timeline time label -->
<li class="time-label">
                              <span class="bg-red">
                                10 Feb. 2014
                              </span>
</li>

<li>
    {{--icon này để biểu thị loại hình đăng tin: ví dụ:
    Company thì dùng fa-users,
    Công ty tổ đội xây dựng thì dùng: fa-building-o
    Hồ sơ cá nhân (cv) thì dùng: fa-user
     --}}
    <i class="fa fa-users bg-blue"></i>

    <div class="timeline-item">
                        <span class="time">
                            <i class="fa fa-clock-o"></i> 12:05 31/12/2015 {{--Ngày đăng tin--}}
                            {{--Có 2 trạng thái là note-work & note-work-active--}}
                            <a href="" class="note-work-active"><i class="fa fa-star fa-fw"></i></a>
                            {{--Có 2 trạng thái là send-cv & send-cv-active--}}
                            <a href="" class="send-cv-active"><i class="fa fa-send fa-fw"></i></a>
                        </span>

        <h3 class="timeline-header"><a href="/person/show-resume-detail">Resume title</a> subtitle</h3>

        <div class="timeline-body">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
            weebly ning heekya handango imeem plugg dopplr jibjab, movity
            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
            quora plaxo ideeli hulu weebly balihoo...
        </div>
        <div class="timeline-footer">
            <a href="/person/show-resume-detail" class="btn btn-info">Đọc tiếp ...</a>
            <a class="btn btn-success">Đánh dấu</a>
            {{--Nếu là show tin tuyển dụng cho cá nhân thì hiển thị button ứng tuyển--}}
            {{--<a class="btn btn-danger">Ứng tuyển</a>--}}
            {{--Nếu là show hồ sơ cá nhân cho công ty thì hiển thị button chấp nhận hồ sơ--}}
            <a class="btn btn-danger">Chấp nhận hồ sơ</a>
            {{--Nếu là trang quản lý tin tuyển dụng của công ty thì hiển thị các button sau--}}
            <a class="btn btn-primary">Sửa hồ sơ</a>
            <a class="btn btn-danger">Xóa hồ sơ</a>
        </div>
    </div>
</li>