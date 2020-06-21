function editUser(id) {
    $.ajax({
        url: 'assets/php/validaciones/datos-user.php',
        type: 'POST',
        dataType: 'json',
        data: { id:id },
        success: function (data) {
            $('#modal_editUser').modal('show')

            $('#identificacion_edit').val(data[0].identificacion)
            $('#nombre_edit').val(data[0].nombre)
            $('#apellido_edit').val(data[0].apellido)
            $('#fecha_certificado_edit').val(data[0].fecha_certificado)
            $('#sede_edit').val(data[0].sede)
            $('#tipo_edit').val(data[0].tipo)
            $('#estado_edit').val(data[0].estado)
          
        }
    })
}
function deleteUser(id, nombre) {
    $('#modal_deleteUser').modal('show')
    $('#content_delete_user').html(`<h3>¿Seguro desea eliminar a ${nombre}?`)
    $('#identificacion_delete').val(id)
}


function editproveedor(id) {
    $.ajax({
        url: 'assets/php/validaciones/datos-proveedor.php',
        type: 'POST',
        dataType: 'json',
        data: { id:id },
        success: function (data) {
            $('#modal_edit_proveedor').modal('show')

            $('#identificacion_edit').val(data[0].identificacion)
            $('#nombre_edit').val(data[0].nombre)
            $('#apellido_edit').val(data[0].apellido)
            $('#fecha_certificado_edit').val(data[0].fecha_certificado)
            $('#sede_edit').val(data[0].sede)
            $('#tipo_edit').val(data[0].tipo)
            $('#estado_edit').val(data[0].estado)
          
        }
    })
}

function deleteproveedor(id, nombre) {
    $('#modal_delete_proveedor').modal('show')
    $('#content_delete_proveedor').html(`<h3>¿Seguro desea eliminar a ${nombre}?`)
    $('#identificacion_proveedor_delete').val(id)
}


function editProducto(id) {
    $.ajax({
        url: 'assets/php/validaciones/datos-productos.php',
        type: 'POST',
        dataType: 'json',
        data: { id:id },
        success: function (data) {
            $('#modal_editProducto').modal('show')

            
            $('#nombre_producto_edit').val(data[0].nombre)
            $('#valor_producto_edit').val(data[0].apellido)
            $('#estado_producto_edit').val(data[0].estado)
          
        }
    })
}

function deleteProducto(id, nombre) {
    $('#modal_deleteProducto').modal('show')
    $('#content_delete_producto').html(`<h3>¿Seguro desea eliminar a ${nombre}?`)
    $('#identificacion_producto_delete').val(id)
}




