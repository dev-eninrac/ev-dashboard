<?php
$HEADER_PATH = "<nav class='header-breadcrumb px-2' aria-label='breadcrumb'>
<ol class='breadcrumb mb-0'>
  <li class='breadcrumb-item fs-14 text-darklight-400'>Marekt Sizing</li>
  <li class='breadcrumb-item fs-14 text-darklight-400'>Sales</li>
  <li class='breadcrumb-item fs-14 text-darklight-400'>EVs</li>
</ol>
</nav>";
require('../../header.php');
require('../../filter.php')
?>

<div class="container-fluid">
  <div class="row" style="gap: 20px 0;">
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
    <div class="col-sm-6 col-md-5">
      <div class="card h-100">
        <div class="card-header">
          <h2>Overview</h2>
          <i class="icofont-plus text-blue-800 observatory-btn"></i>
        </div>
        <div class="card-body position-relative">
          <div class="row">
            <div class="col-sm-7 col-md-7">
              <div class="" style="box-shadow: none; height: 100%">
                <div class="">
                  <img src="http://localhost/ev-dashboard/assets/images/GroupMap82.jpg" class="img-fluid" alt="">
                </div>
              </div>
            </div>
            <div class="col-sm-5 col-md-5">
              <div class="d-flex flex-column" style="gap: 8px 0;">
                <div class="card bg-blue-600 p-1">
                  <p class="fs-14 text-darklight-100 mb-2">Top Region</p>
                  <div class="fw-bold text-darklight-100 fs-18 text-center">West Region</div>
                </div>
                <div class="card bg-blue-500 p-1">
                  <p class="fs-14 text-darklight-100 mb-2">Top States</p>
                  <div class="fw-bold text-darklight-100 fs-18 text-center">Maharashtra</div>
                </div>
                <div class="card bg-blue-400 p-1">
                  <p class="fs-14 text-darklight-100 mb-2">Top Player</p>
                  <div class="fw-bold text-darklight-100 fs-18 text-center">Excide</div>
                </div>
                <div class="card bg-blue-300 p-1">
                  <p class="fs-14 text-darklight-100 mb-2">Top Category</p>
                  <div class="fw-bold text-darklight-100 fs-18 text-center">2 Wheeler</div>
                </div>
              </div>
            </div>
          </div>
          <div class="observatory-container d-none">
            <div class="observatory-overlay"></div>
            <div class="content p-2 d-flex align-items-center position-relative h-100">
              <div class="bg-darklight-100 p-3 text-darklight-700">
                <div class="fw-bold fs-18 text-blue-800 mb-2">Observatory</div>
                <p class="fw-light fs-14 text-blue-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla,
                  quis similique deserunt odit vitae eligendi aspernatur dicta
                  nostrum veniam molestias itaque totam possimus nemo accusamus
                  debitis voluptates in reprehenderit quam?
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Element-2 Start -->
    <div class="col-sm-6 col-md-7">
      <div class="card h-100">
        <div class="card-header">
          <h2 class="">By Value</h2>
          <i class="icofont-plus text-blue-800 observatory-btn"></i>
        </div>
        <div class="card-body position-relative">
          <div class="row" style="gap: 15px 0;">
            <div class="col-sm-6 col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div class="text-blue-700 elm-2-legend">
                      <h5 class="fw-bold fs-18">Regional Spread</h5>
                      <p class="fs-14 fw-light mb-1">
                        <samll>By Value</samll>
                      </p>
                      <p class="fs-25 mb-0">12,253</p>
                    </div>
                    <div id="TopRegion"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div class="text-blue-700 elm-2-legend">
                      <h5 class="fw-bold fs-18">Top States</h5>
                      <p class="fs-14 fw-light mb-1">
                        <samll>By Value</samll>
                      </p>
                      <h4 class="fs-25 mb-0">12,253</h4>
                    </div>
                    <div id="TopState"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div class="text-blue-700 elm-2-legend">
                      <h5 class="fw-bold fs-18">Top Category</h5>
                      <p class="fs-14 fw-light mb-1">
                        <samll>By Value</samll>
                      </p>
                      <h4 class="fs-25 mb-0">12,253</h4>
                    </div>
                    <div id="TopCategoray"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div class="text-blue-700 elm-2-legend">
                      <h5 class="fw-bold fs-18">Top Palyers</h5>
                      <p class="fs-14 fw-light mb-1">
                        <samll>By Value</samll>
                      </p>
                      <h4 class="fs-25 mb-0">12,253</h4>
                    </div>
                    <div id="TopPalyer"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="observatory-container d-none">
            <div class="observatory-overlay"></div>
            <div class="content p-2 d-flex align-items-center position-relative h-100">
              <div class="bg-darklight-100 p-3 text-darklight-700">
                <div class="fw-bold fs-18 text-blue-800 mb-2">Observatory</div>
                <p class="fw-light fs-14 text-blue-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla,
                  quis similique deserunt odit vitae eligendi aspernatur dicta
                  nostrum veniam molestias itaque totam possimus nemo accusamus
                  debitis voluptates in reprehenderit quam?
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Element-3 Start -->
    <div class="col-sm-6 col-md-7">
      <div class="card h-100">
        <div class="card-header">
          <h2>By Volume</h2>
          <i class="icofont-plus text-blue-800 observatory-btn"></i>
        </div>
        <div class="card-body position-relative">
          <div class="row" style="gap: 15px 0;">
            <div class="col-sm-6 col-md-6">
              <div class="card h-100">
                <div class="card-body  ">
                  <div class="d-flex justify-content-between">
                    <div class="text-blue-700 elm-2-legend">
                      <h5 class="fw-bold fs-18">Regional Spread</h5>
                      <p class="fs-14 fw-light mb-0"><small>By Volume</small></p>
                      <p class="fs-25 mb-0">12,253</p>
                    </div>
                    <div id="Region"> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="card h-100">
                <div class="card-body  ">
                  <div class="d-flex justify-content-between">
                    <div class="text-blue-700 elm-2-legend">
                      <h5 class="fw-bold fs-18">Top States</h5>
                      <p class="fs-14 fw-light mb-0"><small>By State</small></p>
                      <p class="fs-25 mb-0">12,253</p>
                    </div>
                    <div id="states"> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="card h-100">
                <div class="card-body  ">
                  <div class="d-flex justify-content-between">
                    <div class="text-blue-700 elm-2-legend">
                      <h5 class="fw-bold fs-18">Top Category</h5>
                      <p class="fs-14 fw-light mb-0"><small>By Categories</small></p>
                      <p class="fs-25 mb-0">12,253</p>
                    </div>
                    <div id="TopCategory"> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="card h-100">
                <div class="card-body  ">
                  <div class="d-flex justify-content-between">
                    <div class="text-blue-700 elm-2-legend">
                      <h5 class="fw-bold fs-18">Top Player</h5>
                      <p class="fs-14 fw-light mb-0">By Players </p>
                      <p class="fs-25 mb-0">12,253</p>
                    </div>
                    <div id="TopPlayers"> </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
          <div class="observatory-container d-none">
            <div class="observatory-overlay"></div>
            <div class="content p-2 d-flex align-items-center position-relative h-100">
              <div class="bg-darklight-100 p-3 text-darklight-700">
                <div class="fw-bold fs-18 text-blue-800 mb-2">Observatory</div>
                <p class="fw-light fs-14 text-blue-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla,
                  quis similique deserunt odit vitae eligendi aspernatur dicta
                  nostrum veniam molestias itaque totam possimus nemo accusamus
                  debitis voluptates in reprehenderit quam?
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Element-4 Start -->
    <div class="col-sm-6 col-md-5">
      <div class="card h-100">
        <div class="card-header">
          <h2>By Category</h2>
          <i class="icofont-plus text-blue-800 observatory-btn"></i>
        </div>
        <div class="card-body position-relative">
          <div id="EV"></div>
          <div class="observatory-container d-none">
            <div class="observatory-overlay"></div>
            <div class="content p-2 d-flex align-items-center position-relative h-100">
              <div class="bg-darklight-100 p-3 text-darklight-700">
                <div class="fw-bold fs-18 text-blue-800 mb-2">Observatory</div>
                <p class="fw-light fs-14 text-blue-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla,
                  quis similique deserunt odit vitae eligendi aspernatur dicta
                  nostrum veniam molestias itaque totam possimus nemo accusamus
                  debitis voluptates in reprehenderit quam?
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Element-5 Start -->
    <div class="col-sm-12 col-md-12">
      <div class="card">
        <div class="card-header">
          <h2>By Brand</h2>
          <i class="icofont-plus text-blue-800 observatory-btn"></i>
        </div>
        <div class="card-body position-relative">
          <div class="row">
            <div class="col-md-6">
              <div id="BrandValue"></div>
            </div>
            <div class="col-md-6">
              <div id="BrandVolume"></div>
            </div>
          </div>
          <div class="observatory-container d-none">
            <div class="observatory-overlay"></div>
            <div class="content p-2 d-flex align-items-center position-relative h-100">
              <div class="bg-darklight-100 p-3 text-darklight-700">
                <div class="fw-bold fs-18 text-blue-800 mb-2">Observatory</div>
                <p class="fw-light fs-14 text-blue-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla,
                  quis similique deserunt odit vitae eligendi aspernatur dicta
                  nostrum veniam molestias itaque totam possimus nemo accusamus
                  debitis voluptates in reprehenderit quam?
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  document.addEventListener("DOMContentLoaded", function() {
    var topReg = {
      series: [44, 55, ],
      chart: {
        redrawOnParentResize: false,
        type: 'donut',
        width: '100%',
      },
      colors: ['#1F58C7', '#1F58C730'],
      plotOptions: {
        pie: {
          startAngle: -90,
          endAngle: 90,
          offsetY: 0
        }
      },
      legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        verticalAlign: "top",
        floating: true,
        fontSize: '10px',
        fontFamily: 'Helvetica, Arial',
        fontWeight: 100,
        height: 20,
        itemMargin: {
          horizontal: 0,
          vertical: -20
        }
      },
    };
    var valueRegion = new ApexCharts(document.querySelector("#TopRegion"), topReg);
    valueRegion.render();

    //Top States 
    var topSt = {
      series: [44, 55, ],
      chart: {
        redrawOnParentResize: false,
        type: 'donut',
        width: '100%',
      },
      colors: ['#1F58C7', '#1F58C730'],
      plotOptions: {
        pie: {
          startAngle: -90,
          endAngle: 90,
          offsetY: 0
        }
      },
      legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        verticalAlign: "top",
        floating: true,
        fontSize: '10px',
        fontFamily: 'Helvetica, Arial',
        fontWeight: 100,
        height: 20,
        itemMargin: {
          horizontal: 0,
          vertical: -20
        }
      },
    };
    var valueState = new ApexCharts(document.querySelector("#TopState"), topSt);
    valueState.render();

    //Top Category
    var topValCat = {
      series: [44, 55, ],
      chart: {
        redrawOnParentResize: false,
        type: 'donut',
        width: '100%',
      },
      colors: ['#1F58C7', '#1F58C730'],
      plotOptions: {
        pie: {
          startAngle: -90,
          endAngle: 90,
          offsetY: 0
        }
      },
      legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        verticalAlign: "top",
        floating: true,
        fontSize: '10px',
        fontFamily: 'Helvetica, Arial',
        fontWeight: 100,
        height: 20,
        itemMargin: {
          horizontal: 0,
          vertical: -20
        }
      },
    };
    var valueCat = new ApexCharts(document.querySelector("#TopCategoray"), topValCat);
    valueCat.render();


    // Top Players
    var topValPlayer = {
      series: [44, 55, ],
      chart: {
        redrawOnParentResize: false,
        type: 'donut',
        width: '100%',
      },
      colors: ['#1F58C7', '#1F58C730'],
      plotOptions: {
        pie: {
          startAngle: -90,
          endAngle: 90,
          offsetY: 0
        }
      },
      legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        verticalAlign: "top",
        floating: true,
        fontSize: '10px',
        fontFamily: 'Helvetica, Arial',
        fontWeight: 100,
        height: 20,
        itemMargin: {
          horizontal: 0,
          vertical: -20
        }
      },
    };
    var valuePlayer = new ApexCharts(document.querySelector("#TopPalyer"), topValPlayer);
    valuePlayer.render();

    //     Element-3 Chart  by Volume

    //Top Regions
    var regions = {
      series: [44, 55, ],
      labels: ['Legend-1', 'Legened-2', ],


      chart: {
        type: 'donut',
        width: '100%',
        offsetX: 0,
        offsetY: 0
      },
      colors: ['#1F58C7', '#1F58C730'],

      grid: {
        padding: {
          top: 0,
          right: 0,
          bottom: 20,
          left: 0
        },
      },
      legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        verticalAlign: "top",
        floating: true,
        fontSize: '10px',
        fontFamily: 'Helvetica, Arial',
        fontWeight: 100,
        height: 20,
        itemMargin: {
          horizontal: 0,
          vertical: -20
        }
      },
    };
    var topRegion = new ApexCharts(document.querySelector("#Region"), regions);
    topRegion.render();


    //Top States
    var states = {
      series: [44, 55, ],
      labels: ['Legend-1', 'Legened-2', ],
      chart: {
        type: 'donut',
        width: '100%',
        offsetX: 0,
        offsetY: 0
      },
      colors: ['#1F58C7', '#1F58C730'],
      grid: {
        padding: {
          top: 0,
          right: 0,
          bottom: 20,
          left: 0
        },
      },
      legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        verticalAlign: "top",
        floating: true,
        fontSize: '10px',
        fontFamily: 'Helvetica, Arial',
        fontWeight: 100,
        height: 20,
        itemMargin: {
          horizontal: 0,
          vertical: -20
        }
      },
    };
    var topStates = new ApexCharts(document.querySelector("#states"), states);
    topStates.render();

    //Top Players
    var players = {
      series: [44, 55, ],
      labels: ['Legend-1', 'Legened-2', ],
      chart: {
        type: 'donut',
        width: '100%',
        offsetX: 0,
        offsetY: 0
      },
      colors: ['#1F58C7', '#1F58C730'],

      grid: {
        padding: {
          top: 0,
          right: 0,
          bottom: 20,
          left: 0
        },
      },
      legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        verticalAlign: "top",
        floating: true,
        fontSize: '10px',
        fontFamily: 'Helvetica, Arial',
        fontWeight: 100,
        height: 20,
        itemMargin: {
          horizontal: 0,
          vertical: -20
        }
      },
    };
    var topPlay = new ApexCharts(document.querySelector("#TopCategory"), players);
    topPlay.render();

    //Top Category
    var categ = {
      series: [44, 55, ],
      labels: ['Legend-1', 'Legened-2', ],
      chart: {
        type: 'donut',
        width: '100%',
        offsetX: 0,
        offsetY: 0
      },
      colors: ['#1F58C7', '#1F58C730'],

      grid: {
        padding: {
          top: 0,
          right: 0,
          bottom: 20,
          left: 0
        },
      },
      legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        verticalAlign: "top",
        floating: true,
        fontSize: '10px',
        fontFamily: 'Helvetica, Arial',
        fontWeight: 100,
        height: 20,
        itemMargin: {
          horizontal: 0,
          vertical: -20
        }
      },
    };
    var topCat = new ApexCharts(document.querySelector("#TopPlayers"), categ);
    topCat.render();


    //    Element -4 Chart
    var options = {
      series: [{
        name: 'Website Blog',
        type: 'column',
        data: [440, 505, 414, 601, 227, 413, 201, 352, ]
      }, {
        name: 'Social Media',
        type: 'line',
        data: [23, 42, 35, 27, 43, 22, 17, 31, ]
      }],
      colors: ['#1F58C7', '#1F58C790'],
      chart: {
        height: '100%',
        width: '100%',
        type: 'line',
        toolbar: {
          show: false
        }
      },
      stroke: {
        width: [0, 4]
      },
      title: {
        text: '4 Wheeler EV Sales ',
        colors: ['#1F58C7'],
      },
      dataLabels: {
        enabled: true,
        enabledOnSeries: [1]
      },
      labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', ],
      xaxis: {
        type: 'datetime'
      },
      yaxis: [{
        title: {
          text: '',
        },

      }, {
        opposite: true,
        title: {
          text: ''
        }
      }]
    };
    var chart = new ApexCharts(document.querySelector("#EV"), options);
    chart.render();

    var opti = {
      series: [{
          name: 'Bubble Chart1',
          data: [{
              x: 50,
              y: 89,
              z: 89
            }, // Example data point
            {
              x: 98,
              y: 50,
              z: 99
            }, // Add more data points as needed
            {
              x: 14,
              y: 190,
              z: 78
            },
            {
              x: 99,
              y: 100,
              z: 95
            },
          ],
        },
        {
          name: 'Bubble Chart2',
          data: [{
              x: 59,
              y: 89,
              z: 89
            },
            {
              x: 98,
              y: 150,
              z: 109
            },
            {
              x: 205,
              y: 30,
              z: 299
            },

            {
              x: 90,
              y: 159,
              z: 370
            },
            {
              x: 99,
              y: 100,
              z: 200
            },
          ],
        },
        {
          name: 'Buble Chart3',
          data: [{
              x: 140,
              y: 100,
              z: 99
            },
            {
              x: 290,
              y: 100,
              z: 216
            },
            {
              x: 214,
              y: 320,
              z: 234
            },
            {
              x: 198,
              y: 265,
              z: 300
            },
          ],
        },
      ],
      colors: ['#1F58C7', '#1F58C790', '#1F58C750'],
      chart: {
        height: 250,
        type: 'bubble',
        toolbar: {
          show: false
        }
      },
      title: {
        text: 'By Value',
        style: {
          color: '#174295'
        },
      },
      dataLabels: {
        enabled: false
      },
      xaxis: {
        labels: {
          rotate: 0,
        },
        title: {
          text: 'Quality',
        },
      },
      yaxis: {
        title: {
          text: 'Price',
        },
      },
    };

    var chart = new ApexCharts(document.querySelector("#BrandValue"), opti);
    chart.render();

    //  Element -5 Chart

    var opt = {
      chart: {
        height: 250,
        type: 'bubble',
        toolbar: {
          show: false
        }
      },
      title: {
        text: 'By Volume',
        style: {
          color: '#174295'
        },
      },
      dataLabels: {
        enabled: false,
      },
      series: [{
          // name: 'Bubble Chart',
          data: [{
              x: 50,
              y: 89,
              z: 89
            }, // Example data point
            {
              x: 9,
              y: 50,
              z: 99
            }, // Add more data points as needed
            {
              x: 14,
              y: 10,
              z: 78
            },
            {
              x: 99,
              y: 100,
              z: 95
            },
          ],
        },
        {
          // name: 'P-2',
          data: [{
              x: 99,
              y: 303,
              z: 39
            },
            {
              x: 5,
              y: 100,
              z: 10
            },
            {
              x: 205,
              y: 30,
              z: 299
            },

            {
              x: 90,
              y: 159,
              z: 370
            },
            {
              x: 9,
              y: 10,
              z: 3
            },
          ],
        },
        {
          // name: 'P-1',
          data: [{
              x: 14,
              y: 100,
              z: 99
            },
            {
              x: 90,
              y: 100,
              z: 216
            },
            {
              x: 14,
              y: 190,
              z: 234
            },
            {
              x: 98,
              y: 265,
              z: 300
            },
          ],
        },
      ],
      colors: ['#1F58C7', '#1F58C740', '#1F58C770'],
      xaxis: {
        title: {
          text: 'Quality',
        },
      },
      yaxis: {
        title: {
          text: 'Price',
        },
      },
    };
    var chart = new ApexCharts(document.querySelector("#BrandVolume"), opt);
    chart.render();
  });
</script>
<?php require('../../footer.php') ?>