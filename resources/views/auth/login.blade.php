@extends('layouts.app')

@section('auth')

<div class="container col-md-4 mt-5">
    <div class="card shadow p-2 mb-5 bg-white rounded">
        <div class="card-header"  style="background-color: #2c3e50; height:40px;">
                <h5 class="text-center" style="color:white">
                        <strong>Sign in</strong> 
                </h5>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
    <form role="form" method="POST" action="{{route('post.login')}}">
            {{ csrf_field() }}
            <div class="card-body">
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

