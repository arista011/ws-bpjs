$(document).ready(function() {
    $('#dataTable').DataTable({
        "ajax": {
          "url": 'model/Report/TempraturData.php', // URL to your datatables.php file
          "dataSrc": ""
        },
        "columns": [
            { "data": "datetimes" },
            { "data": "temp" },
            { "data": "hum" }
        ]
    });
    $('#dataHFIS').DataTable({
        "ajax": {
          "url": 'model/getHFIS.php', // URL to your datatables.php file
          "dataSrc": "cekDok.response.list"
        },
        "columns" :[
          { "data": "kode" },
          { "data": "nama" }
        ]
      });
    var table = $('#dataGE').DataTable({
      "dom": "Bfrtip",
      "search": false,
      "ajax": {
          "url": 'model/Report/BackupData.php', // URL to your PHP script
          "dataSrc": ""
      },
      "columns": [
          { "data": "folder" },
          { "data": "filename" },
          { "data": "last_modified" },
          { "data": "size" }
        ]
    });
  
  // Create a dropdown for custom filters
  var select = $('#folderFilter');
  
  // Populate the dropdown with unique folder values
  table.column(0).data().unique().sort().each(function (d, j) {
      select.append('<option value="' + d + '">' + d + '</option>');
  });
  
  // Handle dropdown change event to filter the DataTable
  select.on('change', function () {
      var folderValue = $.fn.dataTable.util.escapeRegex($(this).val());
  
      // Apply the filter to the first column (folder) and redraw the table
      table.column(0)
          .search(folderValue ? '^' + folderValue + '$' : '', true, false)
          .draw();
  });
});