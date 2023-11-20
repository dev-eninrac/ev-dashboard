<?php
$HEADER_PATH = "<nav class='header-breadcrumb px-2' aria-label='breadcrumb'>
<ol class='breadcrumb mb-0'>
  <li class='breadcrumb-item fs-14 text-darklight-400'>Supply Chain</li>
  <li class='breadcrumb-item fs-14 text-darklight-400'>VoC Feeds & Finding</li>
</ol>
</nav>";
require('../header.php');
require('../filter.php')
?>

<style>
    .textitem{
      margin-left:15px;
    }
    .datetext{
      font-size:15px;
      color:blue;
    }
      .survey-items{
         width:100%;
         flex-wrap:wrap;
         gap:15px;       
      }
      .survey-box {
    border: 1px solid rgb(104,104,104);
    flex: 1;
    width: 100%;
    background: white;
    max-width: 100%;
}
.survey-box-body {
    padding: 10px;
}
</style>
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
     <div class="col-md-6">
      <div class="card h-100">
        <div class="card-header">
          <h2>EV Eco Sysetm & Market Facts</h2>
          <i class="icofont-plus text-blue-800 observatory-btn"></i>
        </div>
        <div class="card-body position-relative">
          <div class="card">
            <div class="card-body">
                <div class="image-text">
                     <img src="http://localhost/ev-dashboard/assets/images/volume.png" class="img-fluid" alt="" width="50" height="50">
                     <small class="text-muted textitem">Survey topics describes or No of survey/Survey Methodology</small>
                </div>

                <div class="totalSurvey ">
                            <p class="fw-bold text-center fs-20">Total Survey-10</p>
                            <div class="d-flex justify-content-between align-items-center     survey-items">
                                    <div class="survey-box border-primary"><div class="survey-box-body"><p class="fw-bold text-center">Survey 1</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body"><p class="fw-bold text-center">Survey 2</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body"><p class="fw-bold text-center">Survey 3</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body"><p class="fw-bold text-center">Survey 4</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body"><p class="fw-bold text-center">Survey 5</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body"><p class="fw-bold text-center">Survey 6</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body"><p class="fw-bold text-center">Survey 7</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body"><p class="fw-bold text-center">Survey 8</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body"><p class="fw-bold text-center">Survey 9</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body"><p class="fw-bold text-center">Survey 10</p></div></div>
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
    <div class="col-md-6">
      <div class="card h-100">
        <div class="card-header">
          <h2>Outlook & Investments</h2>
          <i class="icofont-plus text-blue-800 observatory-btn"></i>
        </div>
        <div class="card-body position-relative">
          <div class="card">
            <div class="card-body">
              <div class="" style="box-shadow: none; height: 100%">
                    <div class="image">
                        <img src="http://localhost/ev-dashboard/assets/images/categories.png" class="img-fluid" alt=""  width="50" height="50">
                        <small class="text-muted textitem" style="text-align:center">Survey topics describes or No of survey/Survey Methodology</small>
                     </div>

                     <div class="totalSurvey">
                     <p class="fw-bold text-center fs-20">Total Survey-10</p>
                       <div class="d-flex justify-content-between align-items-center survey-items">
                                    <div class="survey-box"><div class="survey-box-body"><p class="fw-bold text-center">Survey 1</p></div></div>
                                    <div class="survey-box "><div class="survey-box-body"><p class="fw-bold text-center">Survey 2</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body"><p class="fw-bold text-center">Survey 3</p></div></div>
                                    <div class="survey-box border-primary"><div class="survey-box-body"><p class="fw-bold text-center">Survey 4</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body" style="opacity: 0.5"><p class="fw-bold text-center">Survey 5</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body"><p class="fw-bold text-center">Survey 6</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body" style="opacity: 0.5"><p class="fw-bold text-center">Survey 7</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body " style="opacity: 0.5"><p class="fw-bold text-center">Survey 8</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body"><p class="fw-bold text-center">Survey 9</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body" style="opacity: 0.5"><p class="fw-bold text-center">Survey 10</p></div></div>
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
    <div class="col-md-6">
      <div class="card h-100">
        <div class="card-header">
          <h2>Attractive Index & Cluster Analysis</h2>
          <i class="icofont-plus text-blue-800 observatory-btn"></i>
        </div>
        <div class="card-body position-relative">
          <div class="card">
            <div class="card-body">
                <div class="image-text">
                     <img src="http://localhost/ev-dashboard/assets/images/categories.png" class="img-fluid" alt=""  width="50" height="50">
                     <small class="text-muted textitem" style="text-align:center">Survey topics describes or No of survey/Survey Methodology</small>
                </div>

                <div class="totalSurvey ">
                            <p class="fw-bold text-center fs-20">Total Survey-10</p>
                            <div class="d-flex justify-content-between align-items-center survey-items">
                                    <div class="survey-box"><div class="survey-box-body" style="opacity: 0.5"><p class="fw-bold text-center">Survey 1</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body"><p class="fw-bold text-center">Survey 2</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body" style="opacity: 0.5"><p class="fw-bold text-center">Survey 3</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body"><p class="fw-bold text-center">Survey 4</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body"><p class="fw-bold text-center">Survey 5</p></div></div>
                                    <div class="survey-box"><div class="survey-box-body" ><p class="fw-bold text-center">Survey 6</p></div></div>
                                    <div class="survey-box border-primary"><div class="survey-box-body" style="opacity: 0.5"><p class="fw-bold text-center">Survey 7</p></div></div>
                                    
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
    <div class="col-md-6">
      <div class="card h-100">
        <div class="card-header">
          <h2>Policy Impact & Drivers/Restaints</h2>
          <i class="icofont-plus text-blue-800 observatory-btn"></i>
        </div>
        <div class="card-body position-relative">
          <div class="card">
             <div class="card-body">
                <div class="image-text">
                     <img src="http://localhost/ev-dashboard/assets/images/volume.png" class="img-fluid" alt=""  width="50" height="50">
                     <small class="text-muted textitem" style="text-align:center">Survey topics describes or No of survey/Survey Methodology</small>
                </div>

                <div class="totalSurvey ">
                            <p class="fw-bold text-center fs-20">Total Survey-10</p>
                            <div class="d-flex justify-content-between align-items-center">
                                   <div>
                                       <h5 class="text-blue-800 fw-bold">Hydrogen Outlook Survey | <small class="datetext">12-Oct-2020</small></h5>
                                       <span class="text-blue-900 fs-9">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corruptiest qui Lorem ipsum dolor<br><span> sit amet consectetur adipisicing elit. Reprehenderit molestiae saepe voluptates, tenetur earum rem perferendis est a mnis sunt. Accusamus expedita tempora minima esse!</span></span>
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
    <div class="col-md-12">
      <div class="card h-100">
        <div class="card-header">
          <h2>EV Sales Findings</h2>
          <i class="icofont-plus text-blue-800 observatory-btn"></i>
        </div>
        <div class="card-body position-relative">
          
          <img src="http://localhost/ev-dashboard/assets/images/Screenshot.png" class="img" alt="">
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

<?php require('../footer.php') ?>