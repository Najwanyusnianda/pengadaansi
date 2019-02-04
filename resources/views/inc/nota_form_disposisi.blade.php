<!-- Modal -->

<div id="myModal" class="modal fade nota_modal" role="dialog"   aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#2c3e50;color:white;">
              <h5 class="modal-title" id="Judul modal"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                    <form id="notaform">
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Disposisi ke:</label>
                              <select class="form-control" id="nama_penerima" name="nama_penerima"  >
                                <option disabled selected >Pilih penerima</option>
                           @if (!$kasi->isEmpty())
                                @foreach ($kasi as $data)
                              <option>{{$data->nama}}</option>
                                @endforeach
                      
                           @else

                           <option>tidak ada kasi</option>
                           @endif
                             
                              
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Catatan:</label>
                              <textarea class="form-control" id="msg_disposisi" name="msg_disposisi"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Tembusan ke:</label>
                                <select class="form-control" id="tembusan" name="tembusan" >
                                    <option disabled selected ></option>     
                                </select>    
                            </div>
                    </form>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-primary" id="send_nota">Kirim</button>
            </div>
          </div>
        </div>
</div>


<style>


</style>



