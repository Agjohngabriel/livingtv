<?php 
    include 'inc/header.php';
    include 'inc/navbar.php';    
?>
      <!-- ##### Breadcumb Area Start ##### -->
	  <div class="breadcumb-area bg-img" style="background-image: url(assets/img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>ADMISSION</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
        <!--Iqoniq Content Start-->

	<div class="iq_content_wrap">
                        <!--About Us START-->  
                        <section class="about-us-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="text">
                                            <p>LIVING TV FILM ACADEMY ABA COMMENCES ADMISSIONS FOR THE AWARD OF CERTIFICATE, DIPLOMA, DEGREE FOR 2020/2021 ACADEMIC SESSION.</p>
                                            <p><strong >Admission Requirements</strong></p>
                                            <ul class="categries-list">
                                                <li><a href="#">Education: SSCE and above</a></li>
                                                <li><a href="#">Computer Literacy: Intended applicants must have basic knowledge of Windows or Mac Operating Systems.</a></li>
                                                <li><a href="#">Personal Laptop Computer: Students are advised to have their personal laptop/desktop computer</a></li>
                                                <li><a href="#">Completion & submission of a registration and guarantor form (offline/Online)</a></li>
                                                <li><a href="#">Payment of a registration fee of ₦100,000.</a></li>
                                                <li><a href="#">Social Media Marketing and Management</a></li>
                                            </ul>
                                        </div>    
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="thumb">
                                            <img src="assets/img/log.png" alt="about_us">
                                        </div> 
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="text">
                                            <p> Two-Year Ondinary National Diploma Information Technology and Digital Media Degree Program in computer programming employs a total immersion approach to the subject, where students develop a powerful arsenal of skills in web and mobile app software development, website and mobile app design, Graphic and UI}UX design, Cartoon and Animation design, Digital Social media marketing and Management. Students learn and work with all different programming framework starting from WORDPRESS, HTML CSS, JAVASCRIPT, PHP, LARAVAL, PYTHON etc. program with  hands-on practical instruction and actual real life project based learning. <br>

                                                The Two-Year Ondinary National Diploma program requires students to commit themselves to a focused and demanding curriculum on class and practical real project based problem solving.
                                                Students will complete the Two-Year program having build projects that solves problem using technoology in the different sector like Health,Education,Manufacturing, Finance ENTERTAINMENT  etc. The Living TV Film Academy encourages individual students to take creative risks and find their own voices as technology problem solvers. OND  students receive a certificate upon successful completion as well as a full arsenal of technology problem solving skills, an enormous amount of real life experience, a body of their own work, and a technology solution project. The network of working relationships they develop with their classmates will help carry them forward as they pursue their own careers in technology and media or  industry.
                                            </p>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--End-->

                                        <!-- Payment Form  -->
                                        <div class="container d-flex justify-content-center">
                                            <div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered justify-content-center " role="document">
                                                    <div class="modal-content border-0 mx-3">
                                                        <div class="modal-body p-0">
                                                            <div class="row justify-content-center">
                                                                <div class="col">
                                                                    <div class="card border-0">
                                                                        <div class="card-header p-3">
                                                                            <div class="row align-items-center">
                                                                                <div class="col-auto">
                                                                                    <h6 class="mb-1">Admission Form</h6>
                                                                                </div>
                                                                                <div class="col text-right"><button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="cross" aria-hidden="true">&times;</span> </button></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <form action="#" role="form" onsubmit="return validate(0)">
                                                                                <h6 class="card-title text-center"><b>Living TV Film Academy</b></h6>
                                                                                <div class="row my-3">
                                                                                    <div class="col">
                                                                                        <div class="form-group mt-1 mb-1"> <input type="text" id="email" class="form-control pl-3 " required onblur="validate(1)"> <label class="ml-3 form-control-placeholder" for="email">First Name<span class="text-danger"> *</span></label> </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row my-3">
                                                                                    <div class="col">
                                                                                        <div class="form-group mt-1 mb-1"> <input type="text" id="email" class="form-control pl-3 " required onblur="validate(2)"> <label class="ml-3 form-control-placeholder" for="email">Last Name<span class="text-danger"> *</span></label> </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row my-3">
                                                                                    <div class="col">
                                                                                        <div class="form-group mt-1 mb-1"> <input type="text" id="email" class="form-control pl-3 " required onblur="validate(3)"> <label class="ml-3 form-control-placeholder" for="email">Email<span class="text-danger"> *</span></label> </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row my-3">
                                                                                    <div class="col">
                                                                                        <div class="form-group mt-1 mb-1"> <input type="text" id="email" class="form-control pl-3 " required onblur="validate(4)"> <label class="ml-3 form-control-placeholder" for="email">Phone<span class="text-danger"> *</span></label> </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row my-3">
                                                                                    <div class="col">
                                                                                    <div class="form-group form-group mt-1 mb-1"> <label for="form_need">Please specify your program *</label> <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need." onblur="validate(5)">
                                                                                    <option value="" selected disabled>--Select Program Type--</option>
                                                                                    <option>Diploma</option>
                                                                                    <option>Degree</option>
                                                                                    <option>Certificate</option>
                                                                                
                                                                                    </select>
                                                                                </div>
                                                                            
                                                                                <div class="row mt-4 mb-3">
                                                                                    <div class="col">
                                                                                        <button type="submit" id="Submit" class="btn btn-primary btn-block"><b>Apply Now</b></button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
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
            </section>
            <!-- ##### Area End ##### -->

                <!-- ##### CTA Area Start ##### -->
                <div class="call-to-action-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                            <h3 class="typewrite" data-period="2000" data-type='[ "Get The Best knowledge From Us.", "Enroll at our Academy."]'>
                                 <span class="wrap"></span>  
                                </h3>
                                <a href="#" data-toggle="modal" data-target="#my-modal" class="btn academy-btn">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ##### CTA Area End ##### -->



<?php 
    include 'inc/footer.php';    
?>