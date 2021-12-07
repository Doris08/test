//Delay table load until everything else is loaded
$(window).load(function(){
    $('#postTable').removeAttr('style');
});

/* Eliminar*/
$(document).on('click', '.delete-modal', function() {
    $('#id_delete').val($(this).data('id'));

    $('#eliminar-medicamento').modal('show');
    id = $('#id_delete').val();
});

//acciónn de eliminar
$('.modal-footer').on('click', '.delete', function() {
    $.ajax({
        type: 'DELETE',
        url: 'medicamento/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
        },
        success: function(data) {
            $('#eliminar-medicamento').modal('hide');
            Swal.fire(
                'Éxito!',
                'Se ha eliminado el registro con éxito!',
                'success'
                )
            $('.itemMedicamento' + data['id']).remove();
            $('.col1').each(function (index) {
                $(this).html(index+1);
            });
        }
        
        //en caso de fallo al eliminar
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        Swal.fire(
            'Error!',
            'No se ha podido eliminar el registro!',
            'error'
            )
    });
});





/* agregar*/ 
$(document).on('click', '.add-modal', function() {
            // Vaciar imputs
            $('#nombre').val('');

            //mostrar modal
            $('#registro-medicamento').modal("show");
        });

/*insertar*/
$('.modal-footer').on('click', '.addmedicamento', function() {
    $.ajax({
        type: 'POST',
        url: 'medicamento',
        data: {
            '_token': $('input[name=_token]').val()
            ,            'nombre_medicamento': $('#nombre').val(),
        },

        success: function(data) {
            if ((data.errors)) {

                setTimeout(function () {
                    $('#registro-medicamento').modal('show');
                    Swal.fire(
                        'error!',
                        'no agregado!',
                        'error'
                        )
                }, 500);
                if (data.errors.nombre_medicamento) {
                    if($('#nombre').val() ==''){
                        Swal.fire(
                            'Error!',
                            'Debe ingresar el nombre del medicamento!',
                            'error'
                            )
                    }else{
                        // xD
                    }
                }
            } else {
               $('#registro-medicamento').modal('hide');
               Swal.fire(
                'Éxito!',
                'agregado!',
                'success'
                )
               $('#postTable').append("<tr class='itemmedicamento" + data.id + "'><td>" + data.nombre_medicamento+"<td><button class='edit-modal btn btn-info' data-id='"+data.id+"' data-medicamento='"+data.nombre_medicamento+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id+"' data-medicamento='"+data.nombre_medicamento+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");
           }
       },
   }).fail( function( jqXHR, textStatus, errorThrown ) {
    Swal.fire(
        'Error interno!',
        'error!',
        'error'
        )
});
});



// editar
$(document).on('click', '.edit-modal', function() {
    $('#id_edit').val($(this).data('id'));
    $('#medicamento_editar').val($(this).data('medicamento'));
    id = $('#id_edit').val();
    $('#editar-medicamento').modal('show');
});


$('.modal-footer').on('click', '.edit', function() {
    $.ajax({
        type: 'PUT',
        url: 'medicamento/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
            'id': $("#id_edit").val(),
            'nombre_medicamento': $('#medicamento_editar').val(),
        },
        success: function(data) {
            if ((data.errors)) {

                setTimeout(function () {
                    $('#modal-editar-medicamento').modal('show');
                    Swal.fire(
                        'no Éxito!',
                        'no agregado!',
                        'error'
                        )
                }, 500);
                if (data.errors.nombre_medicamento) {
                    if($('#nombre').val() ==''){
                        Swal.fire(
                            'no Éxito!',
                            'debe ingresar el nombre del medicamento!',
                            'error'
                            )
                    }else{

                    }
                }
                
            } else {
                $('#editar-medicamento').modal('hide');
                Swal.fire(
                    'Éxito!',
                    'editado!',
                    'success'
                    )
                //$('.itemmedicamento' + data.id).replaceWith("<tr class='itemmedicamento" + data.id + "'><td>" + data.nombre_medicamento+"<td><button class='edit-modal btn btn-info' data-id='"+data.id+"' data-medicamento='"+data.nombre_medicamento+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id+"' data-medicamento='"+data.nombre_medicamento+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");
                 setTimeout(function(){
                   window.location.reload(1);
               }, 3200);
            }
        }
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        setTimeout(function () {
            $('#editar-medicamento').modal('show');}, 500);
        Swal.fire(
            'error!',
            'error 500!',
            'error'
            )
    });
});