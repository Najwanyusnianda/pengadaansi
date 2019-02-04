@extends('layouts.master_bagian')

@section('konten')

<div class="container-fluid">
    
    <div class="col">
        <div class="card">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Permintaan</th>
                        <th scope="col">nilai </th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                 
                    @foreach ($permintaan as $data)
                    <tr>
                    <th scope="row">1</th>
                    <td>{{$data->judul}}</td>
                    <td>{{$data->anggaran}}</td>
                    <td>{{$data->disposisi_status}}</td>
                    </tr>
                    @endforeach
                 
                      
                    
                    
                    </tbody>
                </table>
        </div>
     </div>
</div>
    
@endsection