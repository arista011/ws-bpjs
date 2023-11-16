$(document).ready(function() {
    $.ajax({
      url: 'model/Temperatur/DailyHumi.php', // Chart Humidity
      type: 'GET',
      dataType: 'json',
      success: 
      function(data) {
        myHum(data);
        var humidityValue = data.length > 0 ? data[data.length - 1].hum : 'N/A';
        $('#humidity-value-placeholder').text( + humidityValue + '°C');
        },
      error: function(xhr, status, error) {
          console.log(error);
        }
    });
    $.ajax({
        url: 'model/Temperatur/DailyTemp.php', // Chart Temperature
        type: 'GET',
        dataType: 'json',
        success: function(data) {
          myTemp(data);
          var tempValue = data.length > 0 ? data[data.length - 1].temp : 'N/A';
          $('#temp-value-placeholder').text( + tempValue + '°C');
          },
        error: function(xhr, status, error) {
            console.log(error);
          }
      });
      $.ajax({
          url: 'model/Temperatur/TemperaturYear.php', // Chart Year Average
          type: 'GET',
          dataType: 'json',
          success: function(data) {
              myBar(data);
          },
          error: function(xhr, status, error) {
              console.log(error);
          }
      });
  });
  function myBar(data) {
      var ctx = document.getElementById("myBar").getContext('2d');
      var labels = data.map(item => item.month);
      var tempData = data.map(item => item.temp);
      var humData = data.map(item => item.hum);
      var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: labels,
          datasets: [
              {
                  label: 'Temperature',
                  data: tempData,
                  borderWidth: 2,
                  backgroundColor: 'rgba(254,86,83,.7)',
                  borderColor: 'transparent',
                  pointBorderWidth: 0 ,
                  pointRadius: 3.5,
                  pointBackgroundColor: 'transparent',
                  pointHoverBackgroundColor: 'rgba(254,86,83,.8)',
              },
              {
                  label: 'Humidity',
                  data: humData,
                  borderWidth: 2,
                  backgroundColor: 'rgba(63,82,227,.8)',
                  borderColor: 'transparent',
                  pointBorderWidth: 0,
                  pointRadius: 3.5,
                  pointBackgroundColor: 'transparent',
                  pointHoverBackgroundColor: 'rgba(63,82,227,.8)',
              }]
      },
      options: {
          legend: {
              display: false,
              responsive: true,
              maintainAspectRatio: true
          },
          scales: {
              yAxes: [{
                  gridLines: {
                  display: false,
                  drawBorder: false,
                  },
                  ticks: {
                  beginAtZero: true,
                  display: false
                  }
              }],
          }
      }
      });
  }
  function myTemp(data) {
      var ctx = document.getElementById("myTemp").getContext('2d');
      var labels = data.map(item => item.time);
      var tempData = data.map(item => item.temp);
  
      var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: labels,
          datasets: [{
              label: 'Temperature',
              data: tempData,
              backgroundColor: 'rgba(254,86,83,.7)',
              borderWidth: 2,
              borderColor: 'rgba(63,82,227,1)',
              pointBorderWidth: 0,
              pointBorderColor: 'transparent',
              pointRadius: 3,
              pointBackgroundColor: 'transparent',
              pointHoverBackgroundColor: 'rgba(63,82,227,1)',
          }]
      },
      options: {
          legend: {
              display: false,
              responsive: true,
              maintainAspectRatio: true
          },
          scales: {
              yAxes: [{
                  gridLines: {
                  display: false,
                  drawBorder: false,
                  },
                  ticks: {
                  beginAtZero: true,
                  display: false
                  }
              }],
          }
      }
      });
  }
  function myHum(data) {
      var ctx = document.getElementById("myHum").getContext('2d');
      var labels = data.map(item => item.time);
      var humData = data.map(item => item.hum);
  
      var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: labels,
          datasets: [{
              label: 'Humidity',
              data: humData,
              backgroundColor: 'rgba(63,82,227,.2)',
              borderWidth: 2,
              borderColor: 'rgba(63,82,227,1)',
              pointBorderWidth: 0,
              pointBorderColor: 'transparent',
              pointRadius: 3,
              pointBackgroundColor: 'transparent',
              pointHoverBackgroundColor: 'rgba(63,82,227,1)',
          }]
      },
      options: {
          legend: {
              display: false,
              responsive: true,
              maintainAspectRatio: true
          },
          scales: {
              yAxes: [{
                  gridLines: {
                  display: false,
                  drawBorder: false,
                  },
                  ticks: {
                  beginAtZero: true,
                  display: false
                  }
              }],
          }
      }
      });
  }
  