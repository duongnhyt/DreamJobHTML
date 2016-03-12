@extends('frontend.layouts.app')
@section('content')

        <!--Timeline news-->
<section class="content">

    {{--<!-- row -->--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-12">--}}
            {{--<!-- The time line -->--}}
            {{--<ul class="timeline">--}}
                {{--@include('frontend.partials.resume-template')--}}

                {{--@include('frontend.partials.resume-template')--}}

                {{--@include('frontend.partials.resume-template')--}}
            {{--</ul>--}}
        {{--</div>--}}
        {{--<!-- /.col -->--}}
    {{--</div>--}}
    {{--<!-- /.row -->--}}

    <div class="row">
        <div class="col-sm-12" style="padding-right: 40px; margin: 10px 0px;    line-height: 35px; padding: 0 10px; font-size: 20px; color: #444;">
            {{--<button class="btn btn-danger pull-right">Tạo mới hồ sơ cá nhân</button>--}}
            Lựa chọn 1 Hồ sơ để chỉnh sửa thông tin hoặc Thêm mới Hồ sơ của bạn
        </div>
    </div>

    <div class="row div-resume-tags">
        {{--<div class="row">--}}
        <div class="col-md-3">@include("frontend.partials.resume-tag")</div>
        <div class="col-md-3">@include("frontend.partials.resume-tag")</div>
        <div class="col-md-3">@include("frontend.partials.resume-tag")</div>
        <div class="col-md-3" >
            <a href="/person/edit-resume-detail"><img class="btn-plus"></a>
        </div>
        {{--</div>--}}
    </div>
</section>
@stop