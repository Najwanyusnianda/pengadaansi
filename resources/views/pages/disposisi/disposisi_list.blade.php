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
                      <td><a class="btn btn-block btn-outline-secondary btn-flat btn-sm modal-disposisi">Detail</a></td>
                    </tr>
                    @endforeach
              
                 
                 
                </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-4">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Sign in</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
          </div>
        </div>
</div>
@endsection


@section('script')
<script src="{{asset('js\disposisi_detail.js')}}"></script>
@endsection