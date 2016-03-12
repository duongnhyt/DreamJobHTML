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
                <li><a href="#cong-ty" data-toggle="tab">Công ty</a></li>
                <li class="active"><a href="#viec-lam" data-toggle="tab">Việc làm</a></li>
                <li class="pull-left header"><i class="fa fa-star"></i> Tìm kiếm công việc Đã đánh dấu</li>
            </ul>

            <div class="tab-content">
                <!-- Morris chart - Sales -->
                <div class="tab-pane active" id="viec-lam" style="position: relative;">
                    @include('frontend.partials.work-filter')
                </div>
                <div class="tab-pane" style="position: relative;" id="cong-ty">
                    @include('frontend.partials.company-filter')
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
                <!-- timeline time label -->
                <li class="time-label">
                              <span class="bg-red">
                                10 Feb. 2014
                              </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                @include('frontend.partials.new-template')
                @include('frontend.partials.new-template')
                @include('frontend.partials.new-template')

                <li class="time-label">
                              <span class="bg-green">
                                3 Jan. 2014
                              </span>
                </li>

                <!-- timeline item -->
                @include('frontend.partials.new-template')
                @include('frontend.partials.new-template')
                @include('frontend.partials.new-template')


            </ul>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@stop