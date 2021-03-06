<div id="show" class="modal fade" tabindex="-3" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 id="myModalLabel" class="modal-title"><i class="fa fa-search"></i> Scheduled SMS</h4>
            </div>
            <form id="show-message" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-xs-12 col-sm-6">
                            <label class="control-label">From (Sender)</label>
                            <input type="text" class="form-control" id="from" name="from" readonly>
                        </div>
                        <div class="form-group col-xs-12 col-sm-6">
                            <label class="control-label">Recipients</label>
                            <input type="text" class="form-control" id="recipients" name="recipients" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-12 col-sm-6">
                            <label class="control-label">Cost</label>
                            <input type="text" class="form-control" id="cost" name="cost" readonly>
                        </div>
                        <div class="form-group col-xs-12 col-sm-6">
                            <label class="control-label">Send Time</label>
                            <input type="text" class="form-control" id="send_time" name="send_time" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Scheduled Message</label>
                        <textarea class="form-control" rows="3" id="message" name="message" readonly></textarea>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
            </div>
        </div>
    </div>
</div>