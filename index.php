<?php
include "includes/header.php";
include "includes/navbar.php";
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h4>Monthly Average Temperature</h4>
          </div>
          <div class="card-body">
            <canvas id="myBar"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card card-statistic-2">
          <div class="card-chart">
            <canvas id="myTemp"></canvas>
          </div>
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-temperature-low"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Temperature</h4>
            </div>
            <div class="card-body">
              <div id="temp-value-placeholder"></div>
            </div>
          </div>
        </div>
        <div class="card card-statistic-2">
          <div class="card-chart">
            <canvas id="myHum"></canvas>
          </div>
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-snowflake"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Humidity</h4>
            </div>
            <div class="card-body">
              <div id="humidity-value-placeholder"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include "includes/footer.php"; ?>
<script src="model/Temperatur/ResChart.js"></script>