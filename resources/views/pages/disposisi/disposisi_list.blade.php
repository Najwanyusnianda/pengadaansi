@extends('layouts.master')

@section('konten')
<div class="container-fluid">
  <div class="row">
 
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Disposisi</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody>
                  <tr>
                    <th>No</th>
                    <th>Dari</th>
                    <th>Tanggal Disposisi</th>
                    <th>Detail</th>
                   
                  </tr>
                 
                    @foreach ($disposisi as $data)
                    <tr>
                      <td>183</td>
                      <td>{{$data->nama_pengirim}}</td>
                      <td>{{Carbon\Carbon::parse($data->created_at)->format('d-F-Y')}}</td>
        
                    <td><a href="{{route('disposisi.show',$data->id)}}" class="btn btn-block btn-info modal-disposisi">Detail</a></td>
                    </tr>
                    @endforeach
              
                 
                 
                </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

    
        </div>
</div>

@include('pages.disposisi.modal_detail_disposisi')
@endsection


@section('script')
<script src="{{asset('js\disposisi_detail.js')}}"></script>
@endsection