<input class="pull-center" type="radio" name="resume-tag" value="1" />
<!-- Profile Image -->
<div class="box box-primary">



    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-file-text"> </i> <span style="margin-left: 15px;">Tên resume</span></h3>
        {{--Nếu hiển thị trong resume-mng thì thêm cái div btn này vào. k thì ẩn nó đi--}}
        <div class="box-tools pull-right">
            {{--<a href=""><button class="btn btn-box-tool"><i class="fa fa-star"></i></button></a>--}}
            <a href="/person/show-resume-detail"><button class="btn btn-box-tool"><i class="fa fa-desktop"></i></button></a>
            <a href="/person/edit-resume-detail"><button class="btn btn-box-tool"><i class="fa fa-edit"></i></button></a>
            <button class="btn btn-box-tool"><i class="fa fa-remove"></i></button>
        </div>
    </div>



    <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="{{asset("img/user2-160x160.jpg")}}"
             alt="User profile picture">


        <h3 class="profile-username text-center">Nguyễn Hải Dương</h3>

        <p class="text-muted text-center">Chỉnh sửa lần cuối: 11/2012</p>
        <div class="resume-tag pull-center">
            <hr>
            <div class="row">
                <div class="col-md-5"><b>Điện thoại</b></div>
                <div class="col-md-7"><a href="" class="pull-right">0123456789</a></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-5"><b>Email</b></div>
                <div class="col-md-7">
                    <a href="mailto:duongnhyt@gmail.com?Subject=Xin%20chào" class="pull-right">duongnhyt@gmail.com</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-5"><b>Chỗ ở hiện nay</b></div>
                <div class="col-md-7"><a class="pull-right">KTT Cánh kiến - Vạn Phúc - Hà Đông - Hà Nội - Việt Nam</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->