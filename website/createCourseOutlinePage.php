<?php include 'connect.php'; session_start();?>
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

    <link rel="stylesheet" href="courseOutline.css">
    <link rel="stylesheet" href="questionform.css">

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
                            <?php
                            $id = $_SESSION['ID'];
                            $firstName = '';
                            $lastName = '';
                            $role = '';
                            if (strlen($id) == 4) {
                                // faculty/employee
                                $sql = "SELECT * FROM employee_t WHERE employeeID = '$id'";
                                $result = mysqli_query($con, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $firstName = $row['firstName'];
                                $lastName = $row['lastName'];
                                $role = "Faculty";
                            } else if (strlen($id) == 7) {
                                // student
                                $sql = "SELECT * FROM student_t WHERE studentID = '$id'";
                                $result = mysqli_query($con, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $firstName = $row['firstName'];
                                $lastName = $row['lastName'];
                                $role = "Student";
                            }

                            echo $firstName.' '.$lastName;
                            ?>
                            <?= '<p style="position: relative; font-size: small; top: 5px; width: 20%; margin: -3px">'.$role.'</p>'; ?>
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
                    <a class="nav-link" data-toggle="collapse"  href="#pagesExamples">
                        <i class="material-icons">bar_chart</i>
                        <p> PLO Analysis
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="pagesExamples">
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
                    <div class="collapse" id="formsExamples">
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
                <li class="nav-item active">
                    <a class="nav-link" aria-expanded="true" data-toggle="collapse" href="#componentsExamples">
                        <i class="material-icons">storage</i>
                        <p> Data Entry
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse show" id="componentsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" data-toggle="collapse" href="#componentsCollapse">
                                    <span class="sidebar-mini"> E </span>
                                    <span class="sidebar-normal"> Exam
                      <b class="caret"></b>
                    </span>
                                </a>
                                <div class="collapse " id="componentsCollapse">
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
                            <li class="nav-item active">
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
                    <a class="nav-link"  data-toggle="collapse" href="#tablesExamples">
                        <i class="material-icons">emoji_events</i>
                        <p> GPA Analysis
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="tablesExamples">
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
                <li class="nav-item ">
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
                    <a class="navbar-brand" href="dashboard.php"><b>Create Course Outline</b>
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
                    <form action="createCourseOutlineConfig.php" method="POST" >
                        <div class="row d-flex justify-content-center ">
                            <select class="selectpicker mx-3" name="courseID" data-size="5" data-style="btn btn-primary rounded">
                                <option disabled="" selected="">Course</option>
                                <option value="CSC101">CSC101</option>
                                <option value="CSC303">CSC303</option>
                                <option value="MIS430">MIS430</option>
                                <option value="ENG101">ENG101</option>
                            </select>
                            <select class="selectpicker mx-3" name="section" data-size="5" title="Year" data-style="btn btn-primary rounded">
                                <option disabled="" selected="">Section</option>
                                <option value="1">Section 1</option>
                                <option value="2">Section 2</option>
                                <option value="3">Section 3</option>
                                <option value="4">Section 4</option>
                            </select>
                            <select class="selectpicker mx-4" name="semester" data-size="4" data-style="btn btn-primary rounded">
                                <option disabled="" selected="">Semester</option>
                                <option value="spring">Spring</option>
                                <option value="summer">Summer</option>
                                <option value="autumn">Autumn</option>
                            </select>


                            <select class="selectpicker mx-4" name="year" data-size="4" title="Year" data-style="btn btn-primary rounded">
                                <option disabled="" selected="">Year</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                            </select>



                        </div>


                        <div  class="row d-flex justify-content-center ">
                            <div class="col-md-12">
                                <div class="card ">
                                    <div class="card-header ">
                                    </div>
                                    <div style="width: 150%; position: relative; left: -275px;" class="card-body">
                                        <form action="createCourseOutlineConfig.php" method="post" >

                                            <div style="margin-top:10px;" class="course_outline_head">
                                                <div class="rectangle"><p class="text_of_headers">Course Outline</p></div>
                                                <table>
                                                    <tbody><tr>
                                                        <th>Course Code</th>
                                                        <td><input type="text" class="course-title" placeholder="Enter Course Code" name="courseCode"></td>
                                                        <th>Course Title</th>
                                                        <td><input type="text" class="course-title" placeholder="Enter Course Title" name="courseTitle"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Section</th>
                                                        <td><input type="text" class="course-title" placeholder="Enter Section" name="secNum"></td>
                                                        <th>Prerequisite(if any)</th>
                                                        <td><input type="text" class="course-title" placeholder="Enter Prerequisite" name="prerequisite"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Credit Value</th>
                                                        <td><input type="text" class="course-title" placeholder="Enter Credit Value" name="creditValue"></td>
                                                        <th>Semester</th>
                                                        <td><input type="text" class="course-title" placeholder="Enter Semester" name="semesterName"></td>
                                                    </tr>
                                                    </tbody></table>
                                            </div>

                                            <div class="course_description">
                                                <div class="rectangle"><p class="text_of_headers">Course Description</p></div>
                                                <textarea name="courseDescription" class="text-area" cols="30" rows="10" placeholder="Enter Course Description"></textarea>
                                            </div>

                                            <div class="course_objective">
                                                <div class="rectangle"><p class="text_of_headers">Course Objective</p></div>
                                                <textarea name="courseObjective" class="text-area" cols="30" rows="10" placeholder="Enter Course Objective"></textarea>
                                            </div>

                                            <div class="course_policy">
                                                <div class="rectangle"><p class="text_of_headers">Course Policy</p></div>
                                                <p>a. It is the student’s responsibility to gather information about the assignments/project and cover topics
                                                    during the lectures missed. Regular class attendance is mandatory. Points will be taken off for missing
                                                    classes. Without 70% of attendance, sitting for the final exam is NOT allowed. Students should come on
                                                    time to get the attendance. In the event of failing 70% of attendance, a student will receive a W grade
                                                    automatically.
                                                    <br>
                                                    b. Same project work is assigned to all sections. Students should work in groups for the project. They are
                                                    required to prepare a final report on the project which will be incrementally developed through
                                                    assignments.
                                                    <br>
                                                    c. The date and syllabus of class tests, Mid-Term and Final-Term will be announced in the class. There is NO
                                                    provision for make-up.
                                                    <br>
                                                    d. Both the Mid-Term and Final-Term exams will be coordinated exams and will be held on a specific date
                                                    for all the sections.
                                                    <br>
                                                    e. The reading materials for each class will be given prior to that class so that students may have a cursory
                                                    look into the materials.
                                                    <br>
                                                    f. Class participation is vital for a better understanding of the topics of this course. Students are invited to
                                                    raise questions.
                                                    <br>
                                                    g. Students should take tutorials with the instructor during office hours. Prior appointment is required.
                                                    <br>
                                                    h. Students must maintain the IUB code of conduct and ethical guidelines offered by the school of computer
                                                    science and engineering.
                                                    <br>
                                                    i. No working mobile phones are allowed in class. Using one for any purpose will result in serious
                                                    consequences.
                                                </p>
                                            </div>

                                            <div class="academic_dishonesty">
                                                <div class="rectangle"><p class="text_of_headers">ACADEMIC DISHONESTY</p></div>
                                                <p> a. A student who cheats, plagiarizes, or furnishes false, misleading information in the course is subject to
                                                    disciplinary action up to and including an F grade in the course and/or suspension/expulsion from the
                                                    University.
                                                    <br>
                                                    b. Students must maintain the code of IUB.
                                                    <br>
                                                    c. The goal of homework is to give you practice in mastering the course material. Consequently, you are
                                                    encouraged to collaborate on problem sets. In fact, students who form study groups generally do better on
                                                    exams than do students who work alone. If you do work in a study group, however, you owe it to yourself
                                                    and your group to be prepared for your study group meeting. Specifically, you should spend at least 30-45
                                                    minutes trying to solve each problem beforehand by yourself. If your group is unable to solve a problem,
                                                    talk to other groups or ask your recitation instructor or teaching assistant assigned to your class.
                                                    <br>
                                                    d. You must write up each problem solution by yourself without assistance. It is a violation of this policy to
                                                    submit a problem solution that you cannot orally explain to a member of the course staff.
                                                    <br>
                                                    e. No collaboration whatsoever is permitted during examination.
                                                    <br>
                                                    f. Plagiarism and other anti-intellectual behavior cannot be tolerated in any academic environment that
                                                    prides itself on individual accomplishment. If you have any questions about the collaboration policy, or if
                                                    you feel that you may have violated the policy, please talk to one of the course staff. Although the course
                                                    staff is obligated to deal with cheating appropriately, we are more understanding and lenient if we find out
                                                    from the transgressor himself or herself rather than from a third party or by ourselves.
                                                </p>

                                            </div>

                                            <div class="student_with_disability_and_stress">
                                                <div class="rectangle"><p class="text_of_headers">STUDENT WITH DISABILITIES AND STRESS</p></div>
                                                <p>Students with disabilities are required to inform the Department of Computer Science &amp; Engineering of any
                                                    specific requirement for classes or examination as soon as possible. Additionally, if you experience significant
                                                    stress or worry, changes in mood, or problems eating or sleeping this semester, whether because of this or
                                                    any other courses or factors, please do not hesitate to reach out immediately, at any hour, to any of the
                                                    course’s heads to discuss.
                                                </p>
                                            </div>

                                            <div class="non_discremination_policy">
                                                <div class="rectangle"><p class="text_of_headers">NON DISCREMINATION POLICY</p></div>
                                                <p>The course and University policy prohibit discrimination based on race, color, religion, sex, marital or parental
                                                    status, national origin or ancestry, age, mental or physical disability, sexual orientation, military status. If you
                                                    see either by course instructor or any other person related to course showing any form of discrimination,
                                                    please inform the proctors office of the wrongdoing.
                                                </p>
                                            </div>

                                            <div class="course_content">
                                                <div class="rectangle"><p class="text_of_headers">COURSE CONTENT</p></div>
                                                <textarea name="courseContent" class="text-area" cols="30" rows="10" placeholder="Enter Course Content"></textarea>
                                            </div>
                                            <div class="row justify-content-center">
                                                <select style="width:200px; margin-top:15px; margin-bottom:15px;" name="cloCount" data-style="btn btn-info rounded" class="selectpicker mx-4" data-size="8">
                                                    <option disabled="" selected="">No. of CLOs</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                </select>
                                            </div>


                                            <div class="course_learning_outcome_matrix">
                                                <div class="rectangle"><p class="text_of_headers">COURSE LEARNING OUTCOME (CLO) MATRIX</p></div>
                                                <table>
                                                    <tbody><tr>
                                                        <th rowspan="2">CLOs</th>
                                                        <th rowspan="2">CO Description</th>
                                                        <th colspan="4">Blooms Taxonomy</th>
                                                        <th rowspan="2">PLO Assessed</th>
                                                        <th rowspan="2">CLO – PLO Correlation **</th>
                                                    </tr>
                                                    <tr>
                                                        <th>C</th>
                                                        <th>P</th>
                                                        <th>A</th>
                                                        <th>S</th>
                                                    </tr>
                                                    <tr>
                                                        <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum1"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter Description" name="clo1"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="c1"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="p1"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="a1"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="s1"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo1"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation1"></th>
                                                    </tr>
                                                    <tr>
                                                        <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum2"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter Description" name="clo2"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="c2"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="p2"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="a2"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="s2"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo2"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation2"></th>
                                                    </tr>
                                                    <tr>
                                                        <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum3"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter Description" name="clo3"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="c3"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="p3"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="a3"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="s3"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo3"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation3"></th>
                                                    </tr>
                                                    <tr>
                                                        <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum4"> </th>
                                                        <th><input type="text" class="course-title" placeholder="Enter Description" name="clo4"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="c4"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="p4"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="a4"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="s4"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo4"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation4"></th>
                                                    </tr>
                                                    <tr>
                                                    </tr><tr>
                                                        <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum5"> </th>
                                                        <th><input type="text" class="course-title" placeholder="Enter Description" name="clo5"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="c5"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="p5"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="a5"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="s5"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo5"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation5"></th>
                                                    </tr>
                                                    <tr>
                                                        <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum6"> </th>
                                                        <th><input type="text" class="course-title" placeholder="Enter Description" name="clo6"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="c6"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="p6"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="a6"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="s6"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo6"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation6"></th>
                                                    </tr>
                                                    <tr>
                                                        <th><input type="text" class="course-title" placeholder="Enter Description" name="cloNum7"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter Description" name="clo7"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="c7"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="p7"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="a7"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter" name="s7"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter PLO" name="plo7"></th>
                                                        <th><input type="text" class="course-title" placeholder="Enter Correlation" name="correlation7"></th>
                                                    </tr>
                                                    <tr><th colspan="8">*Bloom's Learning Level: Numbers signifies the Level of Bloom's skills.<br> **CLO – PLO Correlation: 3 – high, 2 – medium, 1- low</th>
                                                    </tr>

                                                    </tbody></table>
                                            </div>
                                            <div class="row justify-content-center">
                                                <select style="width:200px; margin-top:15px; margin-bottom:15px;" name="topicNum" data-style="btn btn-info rounded" class="selectpicker mx-4" data-size="7">
                                                    <option disabled="" selected="">No. of Topic</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>


                                            <div class="lesson_planning_with_mapping_of_CLO">
                                                <div class="rectangle"><p class="text_of_headers">LESSON PLANNING WITH MAPPING OF CLO,TEACHING AND ASSESSMENT STRATEGIES</p></div>
                                                <table>
                                                    <tbody><tr>
                                                        <th>Week</th>
                                                        <th>Topic</th>
                                                        <th>Teaching-Learning Strategy</th>
                                                        <th>Assessment Stetragy</th>
                                                        <th>Corresponding CLOs</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="topic1"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy1"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy1"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo1"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="topic2"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy2"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy2"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo2"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="topic3"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy3"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy3"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo3"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="topic4"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy4"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy4"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="topic5"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy5"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy5"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo5"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="topic6"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy6"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy6"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo6"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="topic7"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy7"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy7"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo7"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="topic8"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy8"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy8"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo8"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="topic9"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy9"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy9"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo9"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="topic10"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy10"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy10"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo10"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="topic11"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy11"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy11"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo11"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="topic12"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy12"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy12"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo12"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="topic13"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy13"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy13"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo13"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="topic14"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="learningStrategy14"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentStrategy14"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="correspondingclo14"></td>
                                                    </tr>
                                                    </tbody></table>

                                            </div>
                                            <div class="row justify-content-center">
                                                <select style="width:220px; margin-top:15px; margin-bottom:15px;" name="assessmentCount" data-style="btn btn-info rounded" class="selectpicker mx-4" data-size="8">
                                                    <option disabled="" selected="">No. of Assessments</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                </select>
                                            </div>


                                            <div class="assessment_and_evaluation">
                                                <div class="rectangle"><p class="text_of_headers">ASSESSMENT AND EVALUATION</p></div>
                                                <table>
                                                    <tbody><tr>
                                                        <th>Assessment Type</th>
                                                        <th>Assessment Tools</th>
                                                        <th>Marks Distribution</th>
                                                        <th>Blooms Category</th>
                                                        <th>Sub Total</th>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="3"><input type="text" class="course-title" placeholder="Enter Assessment Type" name="assessmentType1"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool1"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution1"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory1"></td>
                                                        <td rowspan="3"><input type="text" class="course-title" placeholder="Enter" name="subTotal1"></td>
                                                    </tr>
                                                    <tr>

                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool2"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution2"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory2"></td>
                                                    </tr>
                                                    <tr>

                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool3"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution3"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory3"></td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="3"><input type="text" class="course-title" placeholder="Enter Assessment Type" name="assessmentType2"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool4"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution4"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory4"></td>
                                                        <td rowspan="3"><input type="text" class="course-title" placeholder="Enter" name="subTotal2"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool5"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution5"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory5"></td>

                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool6"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution6"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory6"></td>

                                                    </tr>
                                                    <tr>
                                                        <td rowspan="3"><input type="text" class="course-title" placeholder="Enter Assessment Type" name="assessmentType3"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool7"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution7"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory7"></td>
                                                        <td rowspan="3"><input type="text" class="course-title" placeholder="Enter" name="subTotal3"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool8"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution8"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory8"></td>

                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool9"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution9"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory9"></td>

                                                    </tr>
                                                    <tr>
                                                        <td rowspan="3"><input type="text" class="course-title" placeholder="Enter Assessment Type" name="assessmentType4"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool10"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution10"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory10"></td>
                                                        <td rowspan="3"><input type="text" class="course-title" placeholder="Enter" name="subTotal4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool11"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution11"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory11"></td>

                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool12"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution12"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory12"></td>

                                                    </tr>
                                                    <tr>
                                                        <td rowspan="3"><input type="text" class="course-title" placeholder="Enter Assessment Type" name="assessmentType5"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool13"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution13"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory13"></td>
                                                        <td rowspan="3"><input type="text" class="course-title" placeholder="Enter" name="subTotal5"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool14"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution14"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory14"></td>

                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="assessmentTool15"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="markDistribution15"></td>
                                                        <td><input type="text" class="course-title" placeholder="Enter" name="bloomsCategory15"></td>

                                                    </tr>
                                                    <tr>
                                                        <td td="" colspan="4" style="text-align:right;font-weight:bolder;"></td>
                                                        <td style="font-weight:bolder;text-align:center;">Total : 100%</td>
                                                    </tr>

                                                    </tbody></table>

                                            </div>



                                            <p style="text-align:center; font-weight:bold;">The following chart will be followed for grading. Please note that for each category.<br>
                                                * Numbers are inclusive<br></p>



                                            <div style="margin-bottom:15px;" class="grades">
                                                <table>
                                                    <tbody><tr>
                                                        <th>A</th>
                                                        <th>A-</th>
                                                        <th>B+</th>
                                                        <th>B</th>
                                                        <th>B-</th>
                                                        <th>C+</th>
                                                        <th>C</th>
                                                        <th>C-</th>
                                                        <th>D+</th>
                                                        <th>D</th>
                                                        <th>F</th>
                                                    </tr>
                                                    <tr>
                                                        <td>90-100</td>
                                                        <td>85-89</td>
                                                        <td>80-84</td>
                                                        <td>75-79</td>
                                                        <td>70-74</td>
                                                        <td>65-69</td>
                                                        <td>60-64</td>
                                                        <td>55-59</td>
                                                        <td>50-54</td>
                                                        <td>45-49</td>
                                                        <td>0-44</td>


                                                    </tr>
                                                    </tbody></table>
                                            </div>

                                            <div class="referance_book">
                                                <div class="rectangle"><p class="text_of_headers">REFERENCE BOOK AND ADDITIONAL MATERIALS</p></div>
                                                <textarea name="refMaterials" class="text-area" cols="30" rows="10" placeholder="Enter Reference Materials"></textarea>
                                            </div>
                                            <div class="row d-flex justify-content-center ">
                                                <input style="width: 10%" type="submit" name="submit" value="Submit" class="btn btn-rose btn-round mx-5 ">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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