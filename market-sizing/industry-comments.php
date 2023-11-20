<?php
$HEADER_PATH = "<nav class='header-breadcrumb px-2' aria-label='breadcrumb'>
<ol class='breadcrumb mb-0'>
  <li class='breadcrumb-item fs-14 text-darklight-400'>Marekt Sizing</li>
  <li class='breadcrumb-item fs-14 text-darklight-400'>Industry Comments</li>
</ol>
</nav>";
require('../header.php');
require('../filter.php')
?>
<div class="container-fluid mb-3">
  <div class="row" style="gap:30px 0">
    <div class="col-md-12">
      <div class="card h-100">
        <div class="card-header">
          <h2>Key Findings</h2>
        </div>
        <div class="card-body kf-element">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="d-flex align-items-center">
                <div class="carousel-image-wrapper">
                  <img class="w-100" src="http://localhost/ev-dashboard/assets/images/exide.png" alt="">
                </div>
                <p class="text-blue-800 fw-light fs-14 mb-0 ms-2 ">India observed a growth of approximately 20% in the count of battery-operated electric vehicles from Dec'22- till April ' 23.</p>
              </div>
            </div>
            <div class="item">
              <div class="d-flex align-items-center">
                <div class="carousel-image-wrapper">
                  <img class="w-100" src="http://localhost/ev-dashboard/assets/images/exide.png" alt="">
                </div>
                <p class="text-blue-800 fw-light fs-14 mb-0 ms-2 ">India observed a growth of approximately 20% in the count of battery-operated electric vehicles from Dec'22- till April ' 23.</p>
              </div>
            </div>
            <div class="item">
              <div class="d-flex align-items-center">
                <div class="carousel-image-wrapper">
                  <img class="w-100" src="http://localhost/ev-dashboard/assets/images/exide.png" alt="">
                </div>
                <p class="text-blue-800 fw-light fs-14 mb-0 ms-2 ">India observed a growth of approximately 20% in the count of battery-operated electric vehicles from Dec'22- till April ' 23.</p>
              </div>
            </div>
            <div class="item">
              <div class="d-flex align-items-center">
                <div class="carousel-image-wrapper">
                  <img class="w-100" src="http://localhost/ev-dashboard/assets/images/exide.png" alt="">
                </div>
                <p class="text-blue-800 fw-light fs-14 mb-0 ms-2 ">India observed a growth of approximately 20% in the count of battery-operated electric vehicles from Dec'22- till April ' 23.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card h-100">
        <div class="card-header">
          <h2>Industry Comments</h2>
        </div>
        <div class="card-body position-relative">
          <div class="EV-Growth">
            <h4 class="text-blue-700 fw-bold">EV Growth 2023
              <span class="fs-14 text-darklight-700">
                <small>Nov 11, 2023</small>
              </span>
            </h4>
            <p>India observed a growth of approximately 20% in the count of battery-operated electric vehicles from Dec’22- till April ’ 23. The number of total EVs registered
              in India during this period increased by more than 6 Lakhs approximately. As of 7 Dec,2022 the total number of EVs registered in India were 1,802,967 which
              increased to a count of 2,467,535 as of 7 May,2023. As per Eninrac EV visionboard the total EV fleet in India would hover b/w 34-36 lakhs by Mar’24 under the
              base case scenario.</p>
            <p>Some of the most exciting developments that relates to the growth of electric vehicles in India is the small format mobility that includes electric two & three
              wheelers. Cumulatively both e-2W & 3W commands 95% of the total EVs share in the country. For e-2Ws much of the demand is witnessed by low to medium
              income group people, fleet aggregators that deals in – last mile deliveries, bike taxis etc. such as Zepto, Blink it, Zomato,Swiggy, Ola, Uber etc. For the e-3Ws, a
              lot of demand is observed for the e-rickshaws from the riders due to its affordability. Also, with the increase in ecommerce options, e-bulk order home deliveries
              etc. - many such service providers have also started adopting e-3W good carriers for meeting door to door deliveries of bulk items.</p>

            <div class="ev-cop mb-3">
              <h3 class="mb-0 fw-bold">EV India Composite</h3>
              <div class="fs-54 text-blue-700" style="display: flex;align-items: center;padding: 0;margin: 0;">10%
                <div style="line-height: 1.1;margin-left: 10px;" class="fs-14 text-darklight-700 fw-bold">
                  <small>Monthly<br>Growth</small>
                </div>
              </div>
            </div>
            <div id="chart"></div>
          </div>
          <div class="EV-Growth">
            <h4 class="text-blue-700 fw-bold">EV Demand 2023
              <span class="fs-14 text-darklight-700">
                <small>Oct 11, 2023</small>
              </span>
            </h4>
            <p>India observed a growth of approximately 20% in the count of battery-operated electric vehicles from Dec’22- till April ’ 23. The number of total EVs registered
              in India during this period increased by more than 6 Lakhs approximately. As of 7 Dec,2022 the total number of EVs registered in India were 1,802,967 which
              increased to a count of 2,467,535 as of 7 May,2023. As per Eninrac EV visionboard the total EV fleet in India would hover b/w 34-36 lakhs by Mar’24 under the
              base case scenario.</p>
            <p>Some of the most exciting developments that relates to the growth of electric vehicles in India is the small format mobility that includes electric two & three
              wheelers. Cumulatively both e-2W & 3W commands 95% of the total EVs share in the country. For e-2Ws much of the demand is witnessed by low to medium
              income group people, fleet aggregators that deals in – last mile deliveries, bike taxis etc. such as Zepto, Blink it, Zomato,Swiggy, Ola, Uber etc. For the e-3Ws, a
              lot of demand is observed for the e-rickshaws from the riders due to its affordability. Also, with the increase in ecommerce options, e-bulk order home deliveries
              etc. - many such service providers have also started adopting e-3W good carriers for meeting door to door deliveries of bulk items.</p>

            <div class="ev-cop mb-3">
              <h3 class="mb-0 fw-bold">EV India Moniter</h3>
              <div class="fs-54 text-blue-700" style="display: flex;align-items: center;padding: 0;margin: 0;">10%
                <div style="line-height: 1.1;margin-left: 10px;" class="fs-14 text-darklight-700 fw-bold">
                  <small>Monthly<br>Growth</small>
                </div>
              </div>
            </div>
            <div id="chart2"></div>
          </div>
          <div class="EV-Growth">
            <h4 class="text-blue-700 fw-bold">EV Demand Spotlight
              <span class="fs-14 text-darklight-700">
                <small>Oct 11, 2023</small>
              </span>
            </h4>
            <div class="card-list py-2">
              <div class="fw-bold fs-20 text-darklight-500">Uttar Pradesh</div>
              <h5 class="fw-bold fs-18 text-blue-800">India observed a growth of approximately 20% in the count of battery-operated electric vehicles from Dec’22- till April ’ 23.</h5>
              <p class="fs-14 fw-light">India observed a growth of approximately 20% in the count of battery-operated electric vehicles from Dec’22- till April ’ 23. The number of total EVs registered
                in India during this period increased by more than 6 Lakhs approximately. As of 7 Dec,2022 the total number of EVs registered in India were 1,802,967 which
                increased to a count of 2,467,535 as of 7 May,2023. As per Eninrac EV visionboard the total EV fleet in India would hover b/w 34-36 lakhs by Mar’24 under the
                base case scenario.</p>
            </div>
            <div class="card-list py-2">
              <div class="fw-bold fs-20 text-darklight-500">Rajasthan</div>
              <h5 class="fw-bold fs-18 text-blue-800">India observed a growth of approximately 20% in the count of battery-operated electric vehicles from Dec’22- till April ’ 23.</h5>
              <p class="fs-14 fw-light">India observed a growth of approximately 20% in the count of battery-operated electric vehicles from Dec’22- till April ’ 23. The number of total EVs registered
                in India during this period increased by more than 6 Lakhs approximately. As of 7 Dec,2022 the total number of EVs registered in India were 1,802,967 which
                increased to a count of 2,467,535 as of 7 May,2023. As per Eninrac EV visionboard the total EV fleet in India would hover b/w 34-36 lakhs by Mar’24 under the
                base case scenario.</p>
            </div>
            <div class="card-list py-2">
              <div class="fw-bold fs-20 text-darklight-500">Haryana</div>
              <h5 class="fw-bold fs-18 text-blue-800">India observed a growth of approximately 20% in the count of battery-operated electric vehicles from Dec’22- till April ’ 23.</h5>
              <p class="fs-14 fw-light">India observed a growth of approximately 20% in the count of battery-operated electric vehicles from Dec’22- till April ’ 23. The number of total EVs registered
                in India during this period increased by more than 6 Lakhs approximately. As of 7 Dec,2022 the total number of EVs registered in India were 1,802,967 which
                increased to a count of 2,467,535 as of 7 May,2023. As per Eninrac EV visionboard the total EV fleet in India would hover b/w 34-36 lakhs by Mar’24 under the
                base case scenario.</p>
            </div>
            <div class="card-list py-2">
              <div class="fw-bold fs-20 text-darklight-500">Tamil Nadu</div>
              <h5 class="fw-bold fs-18 text-blue-800">India observed a growth of approximately 20% in the count of battery-operated electric vehicles from Dec’22- till April ’ 23.</h5>
              <p class="fs-14 fw-light">India observed a growth of approximately 20% in the count of battery-operated electric vehicles from Dec’22- till April ’ 23. The number of total EVs registered
                in India during this period increased by more than 6 Lakhs approximately. As of 7 Dec,2022 the total number of EVs registered in India were 1,802,967 which
                increased to a count of 2,467,535 as of 7 May,2023. As per Eninrac EV visionboard the total EV fleet in India would hover b/w 34-36 lakhs by Mar’24 under the
                base case scenario.</p>
            </div>
            <hr>
            <div class="list-card-mr">
              <div class="row">
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center" style="border-bottom: 2px solid var(--darklight-500);padding: 10px;">
                        <div class="icon" style="width: 90px;">
                          <img src="http://localhost/ev-dashboard/assets/images/user.png" alt="" style="display: block;margin: auto;">
                        </div>
                        <div class="icon-profile" style="width: calc(100% - 90px);padding: 5px;">
                          <div class="fw-bold fs-20">Ravi Shekhar</div>
                          <div class="fw-normal fs-14 text-darklight-500">Director, Eninrac Consulting</div>
                        </div>
                      </div>
                      <div style="padding: 10px;font-size: 14px;color: var(--darklight-600);">
                        The number of total EVs registered in India
                        during this period increased by more than 6
                        Lakhs approximately
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center" style="border-bottom: 2px solid var(--darklight-500);padding: 10px;">
                        <div class="icon" style="width: 90px;">
                          <img src="http://localhost/ev-dashboard/assets/images/user.png" alt="" style="display: block;margin: auto;">
                        </div>
                        <div class="icon-profile" style="width: calc(100% - 90px);padding: 5px;">
                          <div class="fw-bold fs-20">Nitika Sharma</div>
                          <div class="fw-normal fs-14 text-darklight-500">V.P, Eninrac Consulting</div>
                        </div>
                      </div>
                      <div style="padding: 10px;font-size: 14px;color: var(--darklight-600);">
                        The number of total EVs registered in India
                        during this period increased by more than 6
                        Lakhs approximately
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center" style="border-bottom: 2px solid var(--darklight-500);padding: 10px;">
                        <div class="icon" style="width: 90px;">
                          <img src="http://localhost/ev-dashboard/assets/images/user.png" alt="" style="display: block;margin: auto;">
                        </div>
                        <div class="icon-profile" style="width: calc(100% - 90px);padding: 5px;">
                          <div class="fw-bold fs-20">Anurag Dubey</div>
                          <div class="fw-normal fs-14 text-darklight-500">Sr. Manager, Eninrac Consulting</div>
                        </div>
                      </div>
                      <div style="padding: 10px;font-size: 14px;color: var(--darklight-600);">
                        The number of total EVs registered in India
                        during this period increased by more than 6
                        Lakhs approximately
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require('../footer.php') ?>

<script>
  var options = {
    series: [{
      name: 'series1',
      data: [31, 40, 28, 51, 42, 109, 100]
    }, {
      name: 'series2',
      data: [11, 32, 45, 32, 34, 52, 41]
    }],
    chart: {
      height: 350,
      type: 'area',
      toolbar: {
        show: false
      }
    },
    colors: ['#1F58C7', '#1F58C5'],
    dataLabels: {
      enabled: false
    },
    legend: {
      show: false,
    },
    stroke: {
      curve: 'smooth'
    },
    xaxis: {
      type: 'datetime',
      categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
    },
    tooltip: {
      x: {
        format: 'dd/MM/yy HH:mm'
      },
    },
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();

  var options2 = {
    series: [{
      data: [{
        x: 'Team A',
        y: [1, 5]
      }, {
        x: 'Team B',
        y: [4, 6]
      }, {
        x: 'Team C',
        y: [5, 8]
      }, {
        x: 'Team D',
        y: [3, 11]
      }]
    }, {
      data: [{
        x: 'Team A',
        y: [2, 6]
      }, {
        x: 'Team B',
        y: [1, 3]
      }, {
        x: 'Team C',
        y: [7, 8]
      }, {
        x: 'Team D',
        y: [5, 9]
      }]
    }],
    chart: {
      type: 'rangeBar',
      height: 350,
      toolbar: {
        show: false
      }
    },
    colors: ['#1F58C7', '#1F58C5'],
    plotOptions: {
      bar: {
        horizontal: false
      }
    },
    legend: {
      show: false,
    },
    dataLabels: {
      enabled: true
    },
    xaxis: {
      title: {
        text: 'Data as per October 2023',
      },
    },
    yaxis: {
      title: {
        text: '',
      },
    },
  };

  var chart = new ApexCharts(document.querySelector("#chart2"), options2);
  chart.render();
</script>