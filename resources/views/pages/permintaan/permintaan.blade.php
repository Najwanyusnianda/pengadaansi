
@extends('layouts.master')

@section('konten')
<div class="container-fluid">

        <div class="card">
            <div class="card-header">
                    <h3 class="card-title">Data Table With Full Features </h3>
            </div>
            <div class="card-body">
                    <table class="table table-hover dataTable" id="permintaanDataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Subject Matter</th>
                                    <th>Kode Kegiatan</th>
                                    <th>Nilai</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                    </table>
            </div>
          
            <div class="card-footer">

            </div>
        </div>    
    </div>

   @include('inc.nota_form_disposisi') 
@endsection

@section('script')
    <script>
    var permintaanTable=$('#permintaanDataTable').DataTable({
            responsive:true,
            processing:true,
            serverSide:true,
            ajax:"{{route('table.permintaan')}}",
            columns:[
                {data:'DT_RowIndex'},
                {data:'judul'},
                {data:'nama_bagian'},
                {data:'kode_kegiatan'},
                {data:'anggaran'},
                {data:'status'},
                {data:'disposisi'},
                {data:'action'},
    
            ]
        });
    </script>  
    
    <script src="{{asset('js\disposisi_ajax.js')}}"></script>
@endsection