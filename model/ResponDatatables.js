$(document).ready(function() {
    $('#dataHFIS').DataTable({
        "ajax": {
            "url": 'model/getHFIS.php', // URL to your getHFIS.php file
            "dataSrc": function (json) {
                // Parse the inner JSON string
                var responseData = JSON.parse(json.cekDok.response);

                // Return the desired data source
                return responseData.list;
            }
        },
        "columns": [
            { "data": "kode" },
            { "data": "nama" }
        ]
    });
});