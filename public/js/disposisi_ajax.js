$(document).ready(function() {

    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });



    function postDisposisi(id_permintaan) {
        return (id_permintaan);
    }


    var permintaan_id = 0;

    $('body').on('click', '.modal-show', function(e) {
        var id = $(this).attr("data_id");
        console.log(id);
        $('.nota_modal').modal('show');
        return permintaan_id = id;
    });

    $('#send_nota').click(function(e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/disposisi/store",
            data: {
                // change data to this object
                _token: $('meta[name="csrf-token"]').attr('content'),
                msg_disposisi: $('#msg_disposisi').val(),
                nama_penerima: $('#nama_penerima').val(),
                permintaanid: permintaan_id
            },
            success: function(result) {
                //console.log(result);
                alert("Berhasil dikirim");
                permintaanTable.ajax.reload();
                $("#close").trigger("click");
            }
        });


    })



    var disposisiDisabled = function() {
        var x = $('span.badge-warning').parent().parent();
        x = x.find('.modal-show');
        x.prop('disabled', true);
    }
    disposisiDisabled();
});