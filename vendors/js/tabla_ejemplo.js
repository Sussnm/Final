// $(document).ready(function () {
//     $('#tablaresultado').DataTable(

        




           

//     );
// });


$(document).ready( function () {
    $('#tablaresultado').DataTable({
        

          "language": {
            "lengthMenu": "Mostrar" +
                            ` <select class="custom-select custom-select-sm form-control form-control-sm"> 
                            <option value = '10'>10</option>
                            <option value = '25'>25</option>
                            <option value = '50'>50</option>
                            <option value = '100'>100</option>
                            <option value = '-1'>All</option>
                            </select>` +
                            " registros por pagina",
            "zeroRecords": "Nada encontrado  - Lo siento",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "Registros no disponibles",
            "infoFiltered": "(filtrando de  _MAX_ registros totales)",
            'search': 'Buscar;',
            'paginate': {
                'next': 'Siguiente',
                'previous': 'Anterior'
            }
        }
    });
} );


