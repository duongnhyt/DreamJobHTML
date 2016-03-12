<!-- Modal -->
<div class="modal fade" id="send-cv-modal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="background-color: #ecf0f5; border: 3px solid #3c8dbc">
            <div class="modal-header" style="background-color: #3c8dbc">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Bạn muốn gửi hồ sơ nào?</h4>
            </div>
            <div class="modal-body row div-resume-tags">
                {{--<div class="row">--}}
                    <div class="col-md-4">@include("frontend.partials.resume-tag")</div>
                    <div class="col-md-4">@include("frontend.partials.resume-tag")</div>
                    <div class="col-md-4">@include("frontend.partials.resume-tag")</div>
                {{--</div>--}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-success">Gửi</button>
            </div>
        </div>

    </div>
</div>
