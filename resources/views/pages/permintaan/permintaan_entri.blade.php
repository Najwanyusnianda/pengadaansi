@extends('layouts.master_bagian')

@section('stylist')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://fonts.googleapis.com/css?family=Dosis|Raleway" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css\form_permintaan.css')}}">

@endsection

@section('konten')

<div class="container" >
    <div class="d-flex justify-content-center">
    <div class="col-8 ">
        @include('inc.post_notif')
        <form autocomplete="on" method="POST" action="{{route('permintaan.store')}}">
                        {{ csrf_field() }}
        <div class="invoice p-3 mb-3">
    
            
            <!-- title row -->
            <div class="row">
                <div class="col-12">
                <h5 class=" text-center mt-4">
                    <div class="">
                            FORMULIR PERMINTAAN                     
                    </div>
                     <small class="p-1"> </small>
                     <!-- <small class="float-right">Date: 2/10/2014</small>-->
                </h5>
                </div>
                <!-- /.col -->
            </div>

            <hr>
            <!-- info row -->
     
          
            <!-- /.row -->

  
            <!-- /.row -->
            <!-- Table row -->
            <div class="row">
                <div class="col-12">
                        <div class="p-4">
                                

                                        <div class="form-group ">
                                                <label for="exampleInputEmail1">Judul Permintaan: </label>
                                                <input type="text" class="form-control permintaan_control" id="JudulPermintaan" name="JudulPermintaan" aria-describedby="judulHelp" placeholder="Input judul">
                                                <small id="judulHelp" class="form-text text-muted">contoh: </small>
                                        </div>

                                        <div class="form-group ">
                                                <label for="exampleInputEmail1">Nomor Surat: </label>
                                                <input type="text" class="form-control permintaan_control" id="form_kode" name="form_kode" aria-describedby="emailHelp" placeholder="Input nomor surat">
                                                <small id="emailHelp" class="form-text text-muted"> </small>
                                        </div>

                                        <div class="form-group ">
                                                <label for="exampleInputEmail1">Kode Kegiatan: </label>                                              
                                                <input type="text" class="form-control permintaan_control" id="kode_kegiatan" name="kode_Kegiatan" aria-describedby="emailHelp" placeholder="Input kode kegiatan">
                                                <small id="emailHelp" class="form-text text-muted"></small>
                                        </div>

                                        <div class="form-group ">
                                                <label for="exampleInputEmail1">Output: </label>
                                                <input type="text" class="form-control permintaan_control" id="Output" name="Output" aria-describedby="emailHelp" placeholder="Input output">
                                                <small id="emailHelp" class="form-text text-muted"> </small>
                                        </div>

                                        <div class="form-group ">
                                                <label for="exampleInputEmail1">Komponen: </label>
                                                <input type="text" class="form-control permintaan_control" id="Komponen" name="Komponen" aria-describedby="emailHelp" placeholder="Input komponen">
                                                <small id="emailHelp" class="form-text text-muted"> </small>
                                        </div>

                                        <div class="form-group ">
                                                <label for="exampleInputEmail1">Sub Komponen: </label>
                                                <input type="text" class="form-control permintaan_control" id="SubKomponen" name="SubKomponen" aria-describedby="emailHelp" placeholder="Input sub komponen">
                                                <small id="emailHelp" class="form-text text-muted"> </small>
                                        </div>

                                        <div class="form-group ">
                                                <label for="exampleInputEmail1">Grup Akun: </label>
                                                <input type="text" class="form-control permintaan_control" id="GrupAkun" name="GrupAkun" aria-describedby="emailHelp" placeholder="Input grup akun">
                                                <small id="emailHelp" class="form-text text-muted"> </small>
                                        </div>

                                        <div class="form-group ">
                                                <label for="exampleInputEmail1">Nilai: </label>
                                                <input type="text" class="form-control permintaan_control input_nilai" id="JumlahAnggaran" name="JummlahAnggaran" aria-describedby="emailHelp" placeholder="Input nilai">
                                                <small id="emailHelp" class="form-text text-muted"> Biaya yang dibutuhkan </small>
                                        </div>


                                        <div class="form-group ">
                                                <label for="exampleInputEmail1">Tanggal buat form: </label>
                                                <input type="date" class="form-control permintaan_control date_control date_form_temp" id="date_form" name="date_Form" aria-describedby="emailHelp" placeholder="dd - m - yyyy">
                                                <small id="emailHelp" class="form-text text-muted"> </small>
                                        </div>

                                        <div class="form-group ">
                                                <label for="exampleInputEmail1">Tanggal Pelaksanaan: </label>
                                                <div class="form-inline">
                                                    <div class="row">
                                                        <div class="col">
                                                                <input type="date" class="form-control permintaan_control date_control" id="date_mulai" name="date_mulai" aria-describedby="emailHelp" placeholder="dd - m - yyyy">
                                                                <small id="emailHelp" class="form-text text-muted">Tanggal Mulai</small>
                                                        </div>
                                                        <div class="col">                 
                                                                <input type="date" class="form-control permintaan_control date_control" id="date_selesai" name="date_selesai" aria-describedby="emailHelp" placeholder="dd - m - yyyy">
                                                                <small id="emailHelp" class="form-text text-muted">Tanggal Selesai</small>
                                                        </div>
                                                    </div>
                                                  
           
                                            

    
                                                </div>
                                                <small id="emailHelp" class="form-text text-muted"> </small>
                                        </div>

                               
                        </div>
                </div>
               
            </div>
        


            
            <!-- /.row -->

           <hr>
           
     
            <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-12">
              <button class="btn btn-default"><i class="fa fa-print"></i> Reset</button>
              <button type="submit" class="btn btn-primary float-right shadow  rounded " style="margin-right: 5px;">
                <i class="fa fa-download"></i> Simpan
              </button>
            </div>
          </div>
        </div>
        </form>
    </div>
    </div>
</div>
@endsection



@section('script')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>

 // code here

 $('input[type="date"]').flatpickr({
    altInput: true,
    altFormat: "j - F - Y",
    dateFormat: "Y-m-d",
});

var cleave=new Cleave('.input_nilai', {
    numeral: true,
    numeralDecimalMark: ',',
    delimiter: '.'
});



 // numeralDecimalMark: ',', 
    //delimiter: '.'
</script>

@endsection