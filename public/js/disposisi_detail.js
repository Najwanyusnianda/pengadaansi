$('body').on('click', '.modal-disposisi', function(e) {
    e.preventDefault();


    var me = $(this);
    var url = me.attr('href');
    console.log(url);
    $.ajax({
        url: url,
        dataType: 'html',
        success: function(response) {
            $('.modal-body').html(response);
        }
    });
    $('#disposisi_detail').modal('show');

});