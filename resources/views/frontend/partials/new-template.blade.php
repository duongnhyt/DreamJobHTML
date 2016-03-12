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

        <h3 class="timeline-header"><a href="/new-detail">News Title</a> subtitle</h3>

        <div class="timeline-body">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
            weebly ning heekya handango imeem plugg dopplr jibjab, movity
            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
            quora plaxo ideeli hulu weebly balihoo...
        </div>
        <div class="timeline-footer">
            <a class="btn btn-info">Đọc tiếp ...</a>
            <a class="btn btn-success">Đánh dấu</a>
            {{--Nếu là show tin tuyển dụng cho cá nhân thì hiển thị button ứng tuyển--}}
            <a class="btn btn-danger" data-toggle="modal" data-target="#send-cv-modal">Ứng tuyển</a>
            <!-- Trigger the modal with a button -->
            {{--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>--}}
            @include('frontend.partials.send-cv-modal')

            {{--Nếu là show hồ sơ cá nhân cho công ty thì hiển thị button chấp nhận hồ sơ--}}
            <a class="btn btn-danger">Chấp nhận hồ sơ</a>
            {{--Nếu là trang quản lý tin tuyển dụng của công ty thì hiển thị các button sau--}}
            <a class="btn btn-primary">Sửa tin</a>
            <a class="btn btn-danger">Xóa tin</a>
            <a class="btn btn-info" href="/company/cv-mng">Quản lý hồ sơ ứng tuyển</a>
        </div>
    </div>
</li>