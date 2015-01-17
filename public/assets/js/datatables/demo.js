+function ($) { "use strict";

  $(function(){

          // datatable
          $('[data-ride="datatables"]').each(function() {
            var oTable = $(this).dataTable( {
              "bProcessing": true,
              "sDom": "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
              "sPaginationType": "full_numbers"
            } );
          });
  });
}(window.jQuery);