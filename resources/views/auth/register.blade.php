@extends('layouts.app')

@section('auth')

<div class="container col-md-4 mt-5">
    <div class="card shadow p-2 mb-5 bg-white rounded">
        <div class="card-header"  style="background-color: #2c3e50; height:40px;">
                <h5 class="text-center" style="color:white">
                        <strong>Register</strong> 
                </h5>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
    <form role="form" method="POST" action="{{route('post.register')}}">
            {{ csrf_field() }}
            <div class="card-body">
            <div class="form-group">
                <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid':''}}" id="name" placeholder="Enter nama" name="name" value="{{old('name')}}">
                @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{$errors->first('name')}}
                    </div>
                    
                @else
                    
                @endif
            </div>
            <div class="form-group">
                <input type="text" class="form-control {{$errors->has('nip') ? 'is-invalid':''}}" id="nip" placeholder="Enter nip" name="nip" value="{{old('nip')}}">
                @if ($errors->has('nip'))
                    <div class="invalid-feedback">
                        {{$errors->first('nip')}}
                    </div>
                    
                @else
                    
                @endif
            </div>    
            <div class="form-group">
                <input type="text" class="form-control {{$errors->has('username') ? 'is-invalid':''}}" id="username" placeholder="Enter username" name="username" value="{{old('username')}}">
                @if ($errors->has('username'))
                    <div class="invalid-feedback">
                        {{$errors->first('username')}}
                    </div>
                    
                @else
                    
                @endif
            </div>
     
            <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
    
            <div class="form-group">
        
                    <select class="form-control" name="role_id">
                        <option value=""  disabled>Pilih Jenis</option>
                        <option value=1 {{old('type') ==1 ? 'selected' :''}}>admin</option>
                        <option value=2 {{old('type') ==2 ? 'selected' :''}}>Pejabat Pengadaan</option>
                        <option value=3 {{old('type') ==3 ? 'selected' :''}}>Pejabat Pembuat Komitmen </option> 
                        <option value=4 {{old('type') ==4 ? 'selected' :''}}> Kepala ULP </option> 
                        <option value=5 >kepala Seksi ULP</option> 
                        <option value=6 >Kelompok Kerja</option> 
                        <option value=7 >Subject Matter</option> 
                    </select>
            </div>
            </div>
            <!-- /.card-body -->
    
            <div class="card-footer text-center" style="background-color:#fff">
            <button type="submit" class="btn col-md-8" style="color:#fff;background-color:#2c3e50">Submit</button>
            </div>
        </form>
    </div>
</div>

<style>

</style>
@endsection

