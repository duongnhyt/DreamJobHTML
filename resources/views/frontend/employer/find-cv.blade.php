@extends('frontend.layouts.app')
@section('content')
        <!-- Main row -->
<div class="row">
    <!-- Left col -->
    <div class="col-lg-1"></div>
    <section class="col-lg-10 connectedSortable ">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
                <li class=""><a href="#ho-so" data-toggle="tab">Thông tin Hồ sơ</a></li>
                <li class="active"><a href="#viec-lam" data-toggle="tab">Thông tin Công việc Mong muốn</a></li>
                <li class="pull-left header"><i class="fa fa-inbox"></i> Tìm kiếm Nguồn nhân lực</li>
            </ul>

            <div class="tab-content">
                <!-- Morris chart - Sales -->
                <div class="tab-pane active" id="viec-lam" style="position: relative;">
                    @include('frontend.partials.dreamwork-filter')
                </div>
                <div class="tab-pane " style="position: relative;" id="ho-so">
                    @include('frontend.partials.cv-filter')
                </div>
            </div>
        </div>

    </section>

</div>
<!-- /.row (main row) -->

<!--Timeline news-->
<section class="content">

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <!-- The time line -->
            <ul class="timeline">
                {{--<!-- timeline time label -->--}}
                {{--<li class="time-label">--}}
                              {{--<span class="bg-red">--}}
                                {{--10 Feb. 2014--}}
                              {{--</span>--}}
                {{--</li>--}}
                <!-- /.timeline-label -->
                <!-- timeline item -->

                @include('frontend.partials.resume-template')
                @include('frontend.partials.resume-template')
                @include('frontend.partials.resume-template')
                @include('frontend.partials.resume-template')

                {{--<li class="time-label">--}}
                              {{--<span class="bg-green">--}}
                                {{--3 Jan. 2014--}}
                              {{--</span>--}}
                {{--</li>--}}

                @include('frontend.partials.resume-template')
                @include('frontend.partials.resume-template')
                @include('frontend.partials.resume-template')
                @include('frontend.partials.resume-template')
            </ul>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@stop