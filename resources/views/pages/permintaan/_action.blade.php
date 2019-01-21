<a href="{{$url_show}}" style="color: #636e72;" class="view btn btn-link" title="Detail" data-toggle="tooltip" data-placement="top" data-original-title="Detail" ><i class="fas fa-eye "></i></a>
<a href="{{$url_edit}}" style="color: #0984e3;" class="edit btn btn-link" title="" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fas fa-pencil-alt "></i> </a>
    <form action="{{$url_delete}}" method="post">
        {{ csrf_field() }}
        {{method_field("DELETE")}}
        <button type="submit"  style="color: #d63031;" class="delete btn btn-link"  title="" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fas fa-trash-alt "></i></button>
    </form>