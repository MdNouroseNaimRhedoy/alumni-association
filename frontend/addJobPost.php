<!--== Header Area Start ==-->
<?php
include('loginCheck.php');
include('header.php');
?>

<!--== Header Area End ==-->

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Add Job Circular</h1>
                    <p>Choose a job you love, and you will never have to work a day in your life.</p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Register Page Content Start ==-->
<section id="page-content-wrap" class="bg-info">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <form method="post" action="../backend/addJobPost.php" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><h3>Company Name</h3></label>
                                <input placeholder="Enter Company Here!" required type="text" class="form-control"
                                       name="company"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><h3>Designation</h3></label>
                                <input placeholder="Enter Designation Here!" required type="text" class="form-control"
                                       name="designation"/>
                            </div>
                        </div>
                    </div>
                        <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Job Nature</h3></label>
                            <input placeholder="How Many Days a week and How much time!" required type="text"
                                   class="form-control" name="job_nature"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Job Location</h3></label>
                            <input placeholder="Enter Company Location !" required type="text" class="form-control"
                                   name="location"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Experience Required</h3></label>
                            <input placeholder="Enter Required Experience  !" required type="text" class="form-control"
                                   name="experience"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Email For CV Drop</h3></label>
                            <input placeholder="Enter Email for cv drop  !" required type="email" class="form-control"
                                   name="cv_email"/>
                        </div>
                    </div>
                </div>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><h3>Vacancy</h3></label>
                                    <input placeholder="Enter Number of vacancy Here!" required type="number"
                                           class="form-control" name="vacancy"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><h3>Joining date</h3></label>
                                    <input required type="date" class="form-control" name="joining_date"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><h3>Salary</h3></label>
                                    <input placeholder="Enter Salary Here!" required type="number" class="form-control"
                                           name="salary"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><h3>Last Date Of Application</h3></label>
                                    <input required type="date" class="form-control" name="last_date_of_application"/>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for=""><h3>Skill Requirement</h3></label>
                            <textarea name="skills" id="skills"></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for=""><h3>Job Responsibilities</h3></label>
                            <textarea name="res" id="res"></textarea>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><h3>Contact Info</h3></label>
                                    <textarea name="contact" id="contact"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><h3>Cover Photo</h3></label>
                                    <input type="file" class="form-control" name="cover_photo"/>
                                </div>
                            </div>
                        </div>


                            <div class="form-group">
                                <label for=""><h3>Apply Link</h3></label>
                                <input placeholder="Enter Link Here!" required type="text" class="form-control"
                                       name="link"/>
                            </div>

                            <br>
                            <div class="form-group ">
                                <input class="btn-lg btn-success float-right " type="submit" value="Publish">
                            </div>

                    </div>
            </form>
        </div>
</section>
<!--== Register Page Content End ==-->

<!--== Footer Area Start ==-->
<?php
include("footer.php")
?>

<script>
    tinymce.init({
        selector: '#skills',
        width: 1100,
        height: 400,
    });
    tinymce.init({
        selector: '#res',
        width: 1100,
        height: 400,
    });
    tinymce.init({
        selector: '#contact',
        width: 500,
        height: 200,
    });
</script>



