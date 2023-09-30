<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

 <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Joint Venture & Mining | Bhavya Resources - Totally eco-friendly mining Solution ">
    <meta name="keywords" content="Joint Venture & Mining | Bhavya Resources - Totally eco-friendly mining Solution ">
    <link rel="shortcut icon" href="assets/images/favicon.ico" title="Favicon" sizes="16x16"/>
    <title>Services | Bhavya Resources - unearthing your dream </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">


       <!-- plugins css -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- flaticon  -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css"> 

    
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


<style>
    
    
    .services-item-two .content-box {
        text-align: center;
        height: 303px;
    }
</style>

</head>
<body>
    <?php include 'header.php'; ?>
    
    
<section id="page" class="header-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-title-heading">Our Services</h1>
            </div>
        </div>
    </div>
</section>
   
<section id="service" class="services services-two services-page pt-120 pb-90">
    
    <div class="container">

        <div class="row">
           <!-- Services Items Column -->
          
           
           <?php
        $er = "SELECT * FROM `chief_survey_service`";
        $pro = mysqli_query($con, $er);
        while ($row = mysqli_fetch_array($pro)) {

        ?>
            <div class="col-md-6 col-lg-4">
                <div class="services-item-two">
                    
                    <div class="content-box">
                            <span class="flaticon-conveyor-1"></span>
                            <h4><?= $row['name'] ?></h4>
                            <p><?= substr(strip_tags($row['description']),0,100) ?></p>

                            
                            <a  class="btn-read-more ">
                                <div class="text-btn btn_modal  " data-value="<?= $row['id'] ?>" >Read More</div>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                            
                        </div>
                    
                    <div class="services-box-img" style="background-image: url(admin/survey/<?= $row['image'] ?>)"></div>
                </div>
            </div>
            
           
             <?php
        }
        ?>
            
          
                    
        </div>
        
        
    </div>

 </section>
 <section id="service" class="services services-two services-page pt-120 pb-90" style="background:#f9f9f9;">

    
    <div class="container" >
        <div class="row">
             <div class="signle-services-item">
                        <div class="title-single-service"> 
                            <h3>Mechanical Constructions</h3>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                 
                                <ul class="indicator">
             

                                    <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;Surveying & Mapping</li>
                <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp; Planning & Management of exploration like pitting, trenching & drilling etc. </li>
                <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp; Collection & interpretation of Geological data – Core & dump sampling.</li>
                <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;3D modeling, Reserves & Resource estimation Mining – Operation & Regulatory Services.</li>
                <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp;Precise surveying of new & old mining areas with latest equipments.</li>
                <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp; Geotechnical & Geo-hydrological studies.</li>
                <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp; Assistance for statutory approval of mining leases grant, renewal & transfers.</li>
                <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp; Conceptual mine designing with precise viability estimates.</li>
                <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp; Supervision & Technical support for operating mines .</li>
                <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp; Preparation & approval of Statutory Mine Plan & its subsequent reviews.</li>
                <li><i class="fas fa-angle-right"></i>&nbsp;&nbsp; Preparation & approval of Progressive Mine Closure Plan (PMCP) & Final Mine Closure Plan (FMCP).</li>



                                </ul>
                            </div>

                            <div class="col-md-6 img-indicator">
                                 <img src="assets/images/services/01.jpg" alt="services">
                            </div>
                        </div>
                        
                    </div>
            
        
        </div>
    
    </div>
 </section>
    <div class="modal fade " id="showmodel" style="top: 150px;">
      <div class="modal-dialog modal-lg">
        <div class="modal-content " style="background-color: #ff6119;">
          <div class="modal-header" style="padding: 8px; border-bottom: none">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color:white;">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="mydiv"></div>
          </div>

        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
<?php include 'footer.php'; ?>
 <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- plugins Js  -->
    <script src="assets/js/plugins.js"></script>
    <!-- My Custom Js  -->
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript">
      $('.btn_modal').click(function() {
        var id = $(this).data("value");

        $.ajax({
          url: "survey_consultant.php",
          method: "POST",
          type: "POST",
          data: {
            id: id
          },
          dataType: "text",
          success: function(data) {

            $('#mydiv').html(data);
            $('#showmodel').modal('show');

          }
        });
      });

      $('.imageshowclose').click(function() {
        $('#showmodel').hide();

      });
    </script> 
</body>
 
</html>