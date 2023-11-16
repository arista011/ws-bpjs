function rujukan() {
    $.ajax({
        url: 'model/ResRujukan.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            var resultElement = document.getElementById('rujukan');
            var toRu = response.toRu;

           // Determine the color of the alert based on execution time
           var alertColor = '';
           if (toRu < 10) {
               alertColor = 'green';
           } else if (toRu < 30) {
               alertColor = 'yellow';
           } else if (toRu > 30){
               alertColor = 'red';
           }

           // Show an alert with the execution time and color
           var alertMessage = + toRu + ' seconds';
           var alertHTML = '<div style="background-color: ' + alertColor + '; padding: 2px; text-align: center; font-weight: 700; color: black;">' + alertMessage + '</div>';
           resultElement.insertAdjacentHTML('beforebegin', alertHTML);

            // Show the alert for a few seconds and then remove it
            setTimeout(function() {
                var alertDiv = document.querySelector('.alert');
                if (alertDiv) {
                    alertDiv.remove();
                }
            }, 3000); // 3000 milliseconds (3 seconds)
        },
        error: function(xhr, status, error) {
            console.log('Error:', error);
        }
    });
}
function pendaftaran() {
    $.ajax({
        url: 'model/ResPendaftaran.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            var resultElement = document.getElementById('pendaftaran');
            var toPen = response.toPen;

           // Determine the color of the alert based on execution time
           var alertColor = '';
           if (toPen < 10) {
               alertColor = 'green';
           } else if (toPen < 30) {
               alertColor = 'yellow';
           } else if (toPen > 30){
               alertColor = 'red';
           }

           // Show an alert with the execution time and color
           var alertMessage = + toPen + ' seconds';
           var alertHTML = '<div style="background-color: ' + alertColor + '; padding: 2px; text-align: center; font-weight: 700; color: black;">' + alertMessage + '</div>';
           resultElement.insertAdjacentHTML('beforebegin', alertHTML);

            // Show the alert for a few seconds and then remove it
            setTimeout(function() {
                var alertDiv = document.querySelector('.alert');
                if (alertDiv) {
                    alertDiv.remove();
                }
            }, 3000); // 3000 milliseconds (3 seconds)
        },
        error: function(xhr, status, error) {
            console.log('Error:', error);
        }
    });
}
function antrean() {
    $.ajax({
        url: 'model/ResAntrean.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            var resultElement = document.getElementById('antrean');
            var toAnt = response.toAnt;

           // Determine the color of the alert based on execution time
           var alertColor = '';
           if (toAnt < 10) {
               alertColor = 'green';
           } else if (toAnt < 30) {
               alertColor = 'yellow';
           } else if (toAnt > 30){
               alertColor = 'red';
           }

           // Show an alert with the execution time and color
           var alertMessage = + toAnt + ' seconds';
           var alertHTML = '<div style="background-color: ' + alertColor + '; padding: 2px; text-align: center; font-weight: 700; color: black;">' + alertMessage + '</div>';
           resultElement.insertAdjacentHTML('beforebegin', alertHTML);

            // Show the alert for a few seconds and then remove it
            setTimeout(function() {
                var alertDiv = document.querySelector('.alert');
                if (alertDiv) {
                    alertDiv.remove();
                }
            }, 3000); // 3000 milliseconds (3 seconds)
        },
        error: function(xhr, status, error) {
            console.log('Error:', error);
        }
    });
}
function monitoring() {
    $.ajax({
        url: 'model/ResMonitoring.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            var resultElement = document.getElementById('monitoring');
            var toMon = response.toMon;

           // Determine the color of the alert based on execution time
           var alertColor = '';
           if (toMon < 10) {
               alertColor = 'green';
           } else if (toMon < 30) {
               alertColor = 'yellow';
           } else if (toMon > 30){
               alertColor = 'red';
           }

           // Show an alert with the execution time and color
           var alertMessage = + toMon + ' seconds';
           var alertHTML = '<div style="background-color: ' + alertColor + '; padding: 2px; text-align: center; font-weight: 700; color: black;">' + alertMessage + '</div>';
           resultElement.insertAdjacentHTML('beforebegin', alertHTML);

            // Show the alert for a few seconds and then remove it
            setTimeout(function() {
                var alertDiv = document.querySelector('.alert');
                if (alertDiv) {
                    alertDiv.remove();
                }
            }, 3000); // 3000 milliseconds (3 seconds)
        },
        error: function(xhr, status, error) {
            console.log('Error:', error);
        }
    });
}

function hfis() {
    $('#dataHFIS').DataTable({
        "ajax": {
            "url": 'model/getHFIS.php',
            "dataType": "json",
            "dataSrc": function (json) {
                // Parse the nested JSON string in the 'response' property
                var responseData = JSON.parse(json.cekDok.response);

                // Access the 'list' property of the parsed JSON
                return responseData.list;
            }
        },
        "columns": [
            { "data": "kode" },
            { "data": "nama" }
        ]
    });
}