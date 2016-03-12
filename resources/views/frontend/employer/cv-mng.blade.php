@extends('frontend.layouts.app')
@section('content')

<!--Timeline news-->
<section class="content">

    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <!-- The time line -->
            <ul class="timeline">
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