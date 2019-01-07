
var dataTable = $('#mytable').DataTable(
  {
    //  paging: false,
      info:false,
    dom: 'Bfrtip',
    buttons: [
        {
            extend: 'print',
            customize: function ( win ) {
                $(win.document.body)
                    .css( 'font-size', '10pt' )
                    .prepend(
                        '<img src="http://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:0;" />'
                    );

                $(win.document.body).find( 'table' )
                    .addClass( 'compact' )
                    .css( 'font-size', 'inherit' );
            }
        }
    ]
  }
);

$("#search_box").on('keyup', function() {
  dataTable.search( this.value ).draw();
});
