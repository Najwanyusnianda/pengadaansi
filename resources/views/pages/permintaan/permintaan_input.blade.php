@extends('layouts.master')

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @include('inc.post_notif')
            <div class="card">
                <div class="card-header" style="background-color: #2c3e50;">
                     Permintaan
                </div>
                <!-- /.card-header -->
                <!-- form start -->
            <form class="form-horizontal" method="POST" action="{{route('permintaan.store')}}">
                    <div class="card-body" style="font-family:Helvetica;font-weight: normal !important;">
                        {{ csrf_field() }}
                        <div class="form-group row  ">
                            <label for="form_kode" class="col-sm-2 col-form-label mt-3" style="font-weight: normal;">Nomor Form: </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="form_kode" name="form_kode" placeholder="" value="{{old('form_kode')}}">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="dateForm" class="col-sm-2  col-form-label  mt-3">Tanggal Buat Form</label>
                            <div class="col-md-4">
                                <input type="date" class="form-control" id="date_Form" name="date_Form" placeholder="" value="{{old('date_form')}}">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="date_start" class="col-sm-2  col-form-label  mt-3">Rentang Waktu Pelaksanaan</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="date_start" name="date_start" value="{{old('date_start')}}" placeholder="">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="Kegiatan" class="col-sm-2  col-form-label  mt-3">Kegiatan</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="Kegiatan" name="kode_Kegiatan" value="{{old('kode_Kegiatan')}}" placeholder="Entri kode kegiatan">
                            </div>

                        </div>

                        <div class="form-group row ">
                            <label for="Output" class="col-sm-2  col-form-label  mt-3">Output</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="Output" name="Output" value="{{old('Output')}}" placeholder="Entri Output">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="Komponen" class="col-sm-2  col-form-label mt-3">Komponen</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="Komponen" name="Komponen"  value="{{old('Komponen')}}" placeholder="Entri Komponen">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="SubKomponen" class="col-sm-2  col-form-label  mt-3">Sub Komponen</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="SubKomponen" name="SubKomponen" value="{{old('SubKomponen')}}" placeholder="">
                            </div>
                        </div>

                         <div class="form-group row ">
                            <label for="GrupAkun" class="col-sm-2  col-form-label  mt-3">Grup Akun</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="GrupAkun" name="GrupAkun" value="{{old('GrupAkun')}}" placeholder="">
                            </div>
                        </div>
                        <br>

                        <div class="form-group row">
                            <label for="jenis_pengadaan" class="col-sm-2  col-form-label  mt-3">Jenis Pengadaan: </label>
                            <div class="col-md-8">
                                <select class="form-control" name="jenis_pengadaan" id="jenis_pengadaan">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                  </select>
                            </div>
                          
                        </div>
                        <div class="form-group row ">
                            <label for="JudulPermintaan" class="col-sm-2  col-form-label  mt-3">Judul Permintaan</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="JudulPermintaan" name="JudulPermintaan" value="{{old('JudulPermintaan')}}" placeholder="">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="JumlahAnggaran" class="col-sm-2  col-form-label  mt-3">Jumlah Anggaran</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" id="JumlahAnggaran" name="JumlahAnggaran" value="{{old('JumlahAnggaran')}}"  placeholder="">
                            </div>
                        </div>
                     

                       
                           
                          
                            
                            
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('style')
   <style>
   .form-control{
       margin-top: 10px;
       height: 3em;
   }
   
   </style>
@endsection

@section('script')
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>

$('input[name="date_start"]').daterangepicker();
</script>

@endsection