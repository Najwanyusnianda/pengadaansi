<!-- Modal -->

<div id="myModal" class="modal fade nota_modal" role="dialog"   aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                    <form id="notaform">
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Penerima:</label>
                              <select class="form-control" id="nama_penerima" name="nama_penerima"  >
                                <option disabled selected >Pilih kasi</option>
                              
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Pesan:</label>
                              <textarea class="form-control" id="msg_disposisi" name="msg_disposisi"></textarea>
                            </div>
                    </form>
              
            </div>
            <div class="modal-footer">
             
              <button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="send_nota">Save changes</button>
            </div>
          </div>
        </div>
</div>



