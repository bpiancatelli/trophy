$(document).ready(function() {
    
    $('.dataTable').DataTable( {
        "language": {"url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"}
    });


    $('.dataTableLight').dataTable( {
    	"searching": false,
    	"paging": false,
    	"bInfo": false
  	});
    
});
