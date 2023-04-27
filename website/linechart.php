<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        SPMS 4.0
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, material design, material dashboard bootstrap 4 dashboard">
    <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Dashboard PRO by Creative Tim">
    <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim">
    <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://demos.creative-tim.com/material-dashboard-pro/website/dashboard.php" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg" />
    <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../assets/css/material-dashboard.min.css?v=2.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
    </script>
    <!-- End Google Tag Manager -->

    <!-- JS Charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>

        #chartdiv {
            width: 100%;
            height: 500px;
            background-color:pink;
        }



        .studentID{
            background-color:#FFFFFF;
            height:36px;border: 1px solid;
            cursor: pointer;
            border-radius: 5px;
            font-size: 14px;
            letter-spacing:2px;
            font-weight: bold;
            text-transform: uppercase;
            border: none;
            outline: none;
            text-align: center;
            color:white;
        }

        .studentID:hover{
            background:linear-gradient(90deg,#87CEFA,#00BFFF);
        }
        .studentID:active{
            opacity: 0.5;
        }

        .enterButton{
            background:#6698FF;
            border-radius:10px;
            border:none;
            outline:none;
            color:#fff;
            font-size:14px;
            letter-spacing:2px;
            text-transform:uppercase;cursor:pointer;
            font-weight:bold;margin-left:10px;
            height: 36px;
            width: 100px;

        }

        .enterButton:hover{
            background:linear-gradient(90deg,#87CEFA,#00BFFF);
        }
        .enterButton:active{
            opacity: 0.5;
        }

        .viewButton{
            background:#6698FF;
            border-radius:10px;
            border:none;
            outline:none;
            color:#fff;
            font-size:14px;
            letter-spacing:2px;
            text-transform:uppercase;cursor:pointer;
            font-weight:bold;margin-left:10px;
            height: 36px;
            width: 100px;
        }

        .viewButton:hover{
            background:linear-gradient(90deg,#87CEFA,#00BFFF);
        }
        .viewButton:active{
            opacity: 0.5;
        }


        ::placeholder{
            color:white;
        }

        ::-ms-input-placeholder{
            color:white;
        }

        :-ms-input-placeholder{
            color:white;
        }


    </style>


</head>

<body class="">
<!-- Extra details for Live View on GitHub Pages -->
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="wrapper ">
    <div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.png">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo">

            <a href="dashboard.php" class="simple-text logo-mini">
                <img style="scale: 50%; position: relative; left: -25px; top: -25px; " src="../assets/img/faces/spms_maha.png" alt="spmsv4.0 logo">
            </a>
            <a href="dashboard.php" class="simple-text logo-normal">
                SPMS 4.0
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="../assets/img/faces/nuLLc4t.jpg" />
                </div>
                <div class="user-info">
                    <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                Ikkty Rahman
              </span>

                    </a>
                    <!--                    <div class="collapse" id="collapseExample">-->
                    <!--                        <ul class="nav">-->
                    <!--                            <li class="nav-item">-->
                    <!--                                <a class="nav-link" href="#">-->
                    <!--                                    <span class="sidebar-mini"> MP </span>-->
                    <!--                                    <span class="sidebar-normal"> My Profile </span>-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                            <li class="nav-item">-->
                    <!--                                <a class="nav-link" href="#">-->
                    <!--                                    <span class="sidebar-mini"> EP </span>-->
                    <!--                                    <span class="sidebar-normal"> Edit Profile </span>-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                            <li class="nav-item">-->
                    <!--                                <a class="nav-link" href="#">-->
                    <!--                                    <span class="sidebar-mini"> S </span>-->
                    <!--                                    <span class="sidebar-normal"> Settings </span>-->
                    <!--                                </a>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="../website/dashboard.php">
                        <i class="material-icons">cottage</i>
                        <p> Home </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                        <i class="material-icons">bar_chart</i>
                        <p> PLO Analysis
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pagesExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="../website/ploAnalysisDeptProgramSchoolAvg.php">
                                    <span class="sidebar-mini ac"> D/P/S </span>
                                    <span class="sidebar-normal"> PLO Analysis For Depart.. </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../website/ploAnalysisOverall.php">
                                    <span class="sidebar-mini"> CO/C </span>
                                    <span class="sidebar-normal"> Overall, CO Wise & Cours.. </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                        <i class="material-icons">insights</i>
                        <p> PLO Achievement Stats
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse "  id="formsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="../website/ploComparisonStudent.php">
                                    <span class="sidebar-mini"> StC </span>
                                    <span class="sidebar-normal"> Student Comparison </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../website/ploComparisonCourse.php">
                                    <span class="sidebar-mini"> CC </span>
                                    <span class="sidebar-normal"> Course Comparison </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../website/ploComparisonProgram.php">
                                    <span class="sidebar-mini"> PC </span>
                                    <span class="sidebar-normal"> Program Comparison </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../website/ploComparisonSchool.php">
                                    <span class="sidebar-mini"> SC </span>
                                    <span class="sidebar-normal"> School Comparison </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../website/ploComparisonDepartment.php">
                                    <span class="sidebar-mini"> DC </span>
                                    <span class="sidebar-normal"> Department Comparison </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                        <i class="material-icons">storage</i>
                        <p> Data Entry
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="componentsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" data-toggle="collapse" href="#componentsCollapse">
                                    <span class="sidebar-mini"> E </span>
                                    <span class="sidebar-normal"> Exam
                      <b class="caret"></b>
                    </span>
                                </a>
                                <div class="collapse" id="componentsCollapse">
                                    <ul class="nav">
                                        <li class="nav-item ">
                                            <a class="nav-link" href="../website/addExam.php">
                                                <span class="sidebar-mini"> AE </span>
                                                <span class="sidebar-normal"> Add Exam </span>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="../website/viewExam.php">
                                                <span class="sidebar-mini"> VE </span>
                                                <span class="sidebar-normal"> View Exam </span>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="../website/evaluateAnswerScript.php">
                                                <span class="sidebar-mini"> EES </span>
                                                <span class="sidebar-normal"> Evaluate Exam Script </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../website/createCourseOutlinePage.php">
                                    <span class="sidebar-mini"> CCO </span>
                                    <span class="sidebar-normal"> Create Course Outline </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../website/viewCourseOutline.php">
                                    <span class="sidebar-mini"> VCO </span>
                                    <span class="sidebar-normal"> View Course Outline </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../website/indexElma.php">
                                    <span class="sidebar-mini"> ASD </span>
                                    <span class="sidebar-normal"> Add Student Data Points </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                        <i class="material-icons">emoji_events</i>
                        <p> GPA Analysis
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="tablesExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="gpaSchoolDepartmentProgram.php">
                                    <span class="sidebar-mini"> S/D/P </span>
                                    <span class="sidebar-normal"> Student, Department, Pr.. </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../website/courseWisePerformance.php">
                                    <span class="sidebar-mini"> CW </span>
                                    <span class="sidebar-normal"> Course Wise </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../website/instructorWisePerformance.php">
                                    <span class="sidebar-mini"> IW </span>
                                    <span class="sidebar-normal"> Instructor Wise </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../website/instructorWiseSelectedCourse.php">
                                    <span class="sidebar-mini"> IWC </span>
                                    <span class="sidebar-normal"> Instructor Wise (Select.. </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../website/instructorWiseSelectedCourse.php">
                                    <span class="sidebar-mini"> DHW </span>
                                    <span class="sidebar-normal"> Dean/Head Wise </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../website/spiderChart.php">
                        <i class="material-icons">radar</i>
                        <p> Spider Chart </p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                            <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <a class="navbar-brand" href="dashboard.php"><b>Spider Chart Analysis</b>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                    </form>
                    <ul class="navbar-nav">
                        <!--                        <li class="nav-item">-->
                        <!--                            <a class="nav-link" href="#pablo">-->
                        <!--                                <i class="material-icons">dashboard</i>-->
                        <!--                                <p class="d-lg-none d-md-block">-->
                        <!--                                    Stats-->
                        <!--                                </p>-->
                        <!--                            </a>-->
                        <!--                        </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications</i>
                                <span class="notification">0</span>
                                <p class="d-lg-none d-md-block">
                                    Some Actions
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../website/login.php">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">

            <div class="content">
                <div class="container-fluid">

                    <!-- <button type="button" class="btn btn-round btn-default dropdown-toggle btn-link" data-toggle="dropdown">
7 days
</button> -->
                    <form method="POST" >
                        <div class="row d-flex justify-content-center">
                            <div class="form-group bmd-form-group col-md-3">
                                <label for="studentID" class="bmd-label-floating">Enter Student ID</label>
                                <input type="text" class="form-control" name="studentID">
                            </div>
                            <button type="submit" name="submit" value="Enter" class="btn btn-fill btn-round btn-rose mx-4">Enter</button>
                        </div>

                    </form>
                    <div class="row d-flex justify-content-center">
                        <button onclick="poView()" style="width:200px;" class="btn rounded btn-fill btn-primary mx-4">View PO Analysis</button>
                        <button onclick="coView()" style="width:200px;" class="btn rounded btn-fill btn-primary mx-4">View CO Analysis</button>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div style="height: 90%" class="card ">
                                <div class="card-header ">
                                </div>
                                <div class="card-body ">
                                    <div style="display:flex;justify-content:center;margin-top:5px;height:600px;width:100%;"class="row3">
                                        <canvas style="background-color:white;height:500px;width:400px;" id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <footer style="font-size: 80%" class="footer">
            <div class="container-fluid">

                <div class="copyright float-right">
                    Copyleft (ɔ),
                    <a href="http://www.iub.edu.bd/" target="_blank">Independent University, Bangladesh</a>
                </div>
            </div>
        </footer>
    </div>
</div>
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Filters</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                    <div class="badge-colors ml-auto mr-auto">
                        <span class="badge filter badge-purple" data-color="purple"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-warning" data-color="orange"></span>
                        <span class="badge filter badge-danger" data-color="danger"></span>
                        <span class="badge filter badge-rose active" data-color="rose"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="ml-auto mr-auto">
                        <span class="badge filter badge-black active" data-background-color="black"></span>
                        <span class="badge filter badge-white" data-background-color="white"></span>
                        <span class="badge filter badge-red" data-background-color="red"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Mini</p>
                    <label class="ml-auto">
                        <div class="togglebutton switch-sidebar-mini">
                            <label>
                                <input type="checkbox">
                                <span class="toggle"></span>
                            </label>
                        </div>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Images</p>
                    <label class="switch-mini ml-auto">
                        <div class="togglebutton switch-sidebar-image">
                            <label>
                                <input type="checkbox" checked="">
                                <span class="toggle"></span>
                            </label>
                        </div>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Images</li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.png" alt="">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-2.jpg" alt="">
                </a>
            </li>
            <li >
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-4.jpg" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>



<?php
if(isset($_POST['submit'])){
    $studentID=$_POST['studentID'];
}?>


<script>

    function poView(){
        <?php
        $sql="SELECT po.poNum AS poNum, 
   AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
   FROM registration_t AS r, answer_t AS ans, question_t AS q, 
   co_t AS co, po_t AS po
   WHERE r.registrationID=ans.registrationID 
   AND ans.examID=q.examID
   AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
   AND q.courseID=co.courseID AND co.poID=po.poID 
   AND r.studentID='$studentID'
   GROUP BY po.poNum";

        $result=mysqli_query($con,$sql);

        $po=array();
        $percent=array();

        while($data=mysqli_fetch_array($result)){

            array_push($po,"PO ".$data['poNum']);
            array_push($percent,$data['percent']);

        }

        ?>


        var po=<?php echo json_encode($po); ?>;
        var percent=<?php echo json_encode($percent); ?>;

        for(var i=0;i<percent.length;i++){
            percent[i]=parseFloat(percent[i]);
        }

        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'radar',
            data: {
                labels: po,
                datasets: [{
                    label: 'PO Achieved',
                    data: percent,
                    fill: true,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgb(54, 162, 235)',
                    pointBackgroundColor: 'rgb(54, 162, 235)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(54, 162, 235)'}]
            },
            options: {
                elements: {
                    line: {
                        borderWidth: 3
                    }
                }
            }
        });

    }

    function coView(){
        <?php
        $sql="SELECT q.coNum, 
   AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
   FROM registration_t AS r, answer_t AS ans, question_t AS q, 
   co_t AS co, po_t AS po
   WHERE r.registrationID=ans.registrationID 
   AND ans.examID=q.examID
   AND ans.answerNum=q.questionNum AND q.coNum=co.coNum
   AND r.studentID='$studentID'
   GROUP BY q.coNum";

        $result=mysqli_query($con,$sql);

        $co=array();
        $percent=array();

        while($data=mysqli_fetch_array($result)){

            array_push($co,"CO ".$data['coNum']);
            array_push($percent,$data['percent']);

        }

        ?>


        var co=<?php echo json_encode($co); ?>;
        var percent=<?php echo json_encode($percent); ?>;

        for(var i=0;i<percent.length;i++){
            percent[i]=parseFloat(percent[i]);
        }

        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'radar',
            data: {
                labels: co,
                datasets: [{
                    label: 'CO Achieved',
                    data: percent,
                    fill: true,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgb(54, 162, 235)',
                    pointBackgroundColor: 'rgb(54, 162, 235)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(54, 162, 235)'}]
            },
            options: {
                elements: {
                    line: {
                        borderWidth: 3
                    }
                }
            }
        });

    }


</script>



<!--   Core JS Files   -->
<script>
    function setFormValidation(id) {
        $(id).validate({
            highlight: function(element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
                $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
            },
            success: function(element) {
                $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
                $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
            },
            errorPlacement: function(error, element) {
                $(element).closest('.form-group').append(error);
            },
        });
    }

    $(document).ready(function() {
        setFormValidation('#RegisterValidation');
        setFormValidation('#TypeValidation');
        setFormValidation('#LoginValidation');
        setFormValidation('#RangeValidation');
    });
</script>
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap-material-design.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Plugin for the momentJs  -->
<script src="../assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="../assets/js/plugins/sweetalert2.js"></script>
<!-- Forms Validations Plugin -->
<script src="../assets/js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="../assets/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="../assets/js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="../assets/js/plugins/arrive.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Chartist JS -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    $('.fixed-plugin .dropdown').addClass('open');
                }

            }

            $('.fixed-plugin a').click(function(event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .active-color span').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.fixed-plugin .background-color .badge').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function() {
                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function() {
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').change(function() {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').change(function() {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function() {
                        $('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
</script>
<!-- Sharrre libray -->
<script src="../assets/demo/jquery.sharrre.js"></script>
<script>
    $(document).ready(function() {


        $('#facebook').sharrre({
            share: {
                facebook: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            click: function(api, options) {
                api.simulateClick();
                api.openPopup('facebook');
            },
            template: '<i class="fab fa-facebook-f"></i> Facebook',
            url: 'https://demos.creative-tim.com/material-dashboard-pro/website/dashboard.php'
        });

        $('#google').sharrre({
            share: {
                googlePlus: true
            },
            enableCounter: false,
            enableHover: false,
            enableTracking: true,
            click: function(api, options) {
                api.simulateClick();
                api.openPopup('googlePlus');
            },
            template: '<i class="fab fa-google-plus"></i> Google',
            url: 'https://demos.creative-tim.com/material-dashboard-pro/website/dashboard.php'
        });

        $('#twitter').sharrre({
            share: {
                twitter: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            buttons: {
                twitter: {
                    via: 'CreativeTim'
                }
            },
            click: function(api, options) {
                api.simulateClick();
                api.openPopup('twitter');
            },
            template: '<i class="fab fa-twitter"></i> Twitter',
            url: 'https://demos.creative-tim.com/material-dashboard-pro/website/dashboard.php'
        });


        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-46172202-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

        // Facebook Pixel Code Don't Delete
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');

        try {
            fbq('init', '111649226022273');
            fbq('track', "PageView");

        } catch (err) {
            console.log('Facebook Track Error:', err);
        }

    });
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
</noscript>
<script>
    function setFormValidation(id) {
        $(id).validate({
            highlight: function(element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
                $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
            },
            success: function(element) {
                $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
                $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
            },
            errorPlacement: function(error, element) {
                $(element).closest('.form-group').append(error);
            },
        });
    }

    $(document).ready(function() {
        setFormValidation('#RegisterValidation');
        setFormValidation('#TypeValidation');
        setFormValidation('#LoginValidation');
        setFormValidation('#RangeValidation');
    });
</script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

        md.initVectorMap();

    });
</script>
</body>

</html>