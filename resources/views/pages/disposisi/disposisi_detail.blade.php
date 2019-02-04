
   
        <div class="card-header">
          <div class="user-block">
            <img class="img-circle" src="{{asset('img\user.png')}}" alt="User Image">
            <span class="username"><a href="#">{{$disposisi->nama_pengirim}}</a></span>
          <span class="description">Pesan disposisi - {{Carbon\Carbon::parse($disposisi->created_at)->format('H:i')}} WIB  {{Carbon\Carbon::parse($disposisi->created_at)->diffForHumans()}} </span>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body" style="display: block;">
          <!-- post text -->
          <p> {{$disposisi->isi}}</p>
         

          
          <!-- Attachment -->
       
          <!-- /.attachment-block -->

          <!-- Social sharing buttons -->
          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i> disposisi ke staf</button>
         
        </div>
        <!-- /.card-body -->

  