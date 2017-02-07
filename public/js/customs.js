$(document).ready(function(){
    $('#add').click(function(e){
        // event.preventDefault()
        $('#items').append('<div><div class="form-group"><div class="col-md-8 col-md-offset-2"><input id="softwear" type="text" class="form-control" name="softwear[]" autofocus></div><button type="button" class="btn btn-danger" id="delete">hapus</button></div></div>');
    });

    $('body').on('click', '#delete', function(e){
        $(this).parent('div').remove();
    });

    $('.js-selectize').selectize({
            persist: false,
            createOnBlur: true,
            create: true
    });
});