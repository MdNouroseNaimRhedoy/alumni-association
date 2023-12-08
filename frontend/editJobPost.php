<!--== Header Area Start ==-->
<?php
include('loginCheck.php');
include('header.php');
include('database/db_connect.php');

if ($_SESSION['user_details']->account_type == 0 || $_SESSION['user_details']->account_type == 1) {

    $job_id = $_GET['job_id'];

    if (isset($job_id) && $job_id) {
        $query = "select * from jobs where job_id='$job_id'";

            $result = $conn->query($query);
            $job = $result->fetch_assoc();
            if($result->lengths == 0){
                echo "<script> location.href='allJobPost.php'; </script>";
            }

        /*  echo '<pre>';
          echo var_dump($job_details);
          echo '</pre>';*/
    } else {
        echo "<script> location.href='allJobPost.php'; </script>";
    }

} else {
    echo "<script> location.href='allJobPost.php'; </script>";
}
    ?>
?>

<!--== Header Area End ==-->

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Edit Job Circular</h1>
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
            <form method="post" action="../backend/editJobPost.php" enctype="multipart/form-data">

                <input type="number" hidden value="<?php echo $job_id ?>" name="job_id">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Company Name</h3></label>
                            <input placeholder="Enter Company Here!"
                                   required type="text"
                                   class="form-control"
                                   name="company"
                                   value="<?php echo $job['company_name'] ?>"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Designation</h3></label>
                            <input placeholder="Enter Designation Here!"
                                   required type="text"
                                   class="form-control"
                                   name="designation"
                                   value="<?php echo $job['designation'] ?>"
                            />
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Job Nature</h3></label>
                            <input placeholder="How Many Days a week and How much time!"
                                   required type="text"
                                   class="form-control"
                                   name="job_nature"
                                   value="<?php echo $job['job_nature'] ?>"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Job Location</h3></label>
                            <input placeholder="Enter Company Location !"
                                   required
                                   type="text"
                                   class="form-control"
                                   name="location"
                                   value="<?php echo $job['job_location'] ?>"
                            />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Experience Required</h3></label>
                            <input placeholder="Enter Required Experience  !"
                                   required
                                   type="text"
                                   class="form-control"
                                   name="experience"
                                   value="<?php echo $job['experience'] ?>"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Email For CV Drop</h3></label>
                            <input placeholder="Enter Email for cv drop  !"
                                   required
                                   type="email"
                                   class="form-control"
                                   name="cv_email"
                                   value="<?php echo $job['email_for_online_cv'] ?>"
                            />
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Vacancy</h3></label>
                            <input placeholder="Enter Number of vacancy Here!"
                                   required
                                   type="number"
                                   class="form-control"
                                   name="vacancy"
                                   value="<?php echo $job['no_of_vacancy'] ?>"
                            />

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Joining date</h3></label>
                            <input required
                                   type="date"
                                   class="form-control"
                                   name="joining_date"
                                   value="<?php echo $job['joining_date'] ?>"
                            />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Salary</h3></label>
                            <input placeholder="Enter Salary Here!"
                                   required
                                   type="number"
                                   class="form-control"
                                   name="salary"
                                   value="<?php echo $job['salary'] ?>"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Last Date Of Application</h3></label>
                            <input required
                                   type="date"
                                   class="form-control"
                                   name="last_date_of_application"
                                   value="<?php echo $job['last_date_of_application'] ?>"
                            />
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for=""><h3>Skill Requirement</h3></label>
                    <textarea name="skills" id="skills">
                        <?php echo $job['skill_requirement'] ?>
                    </textarea>

                </div>
                <br>
                <div class="form-group">
                    <label for=""><h3>Job Responsibilities</h3></label>
                    <textarea name="res" id="res">
                       <?php echo $job['responsibilities'] ?>
                    </textarea>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Contact Info</h3></label>
                            <textarea name="contact" id="contact">
                                <?php echo $job['contact_info'] ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Cover Photo</h3></label>
                            <img src="../backend/storage/<?php echo $job['photo'] ?>"
                                 class="img-fluid w-50 h-50 m-5"
                                 alt="Blog"
                                 id="previewImageId"
                            >
                            <input type="file"
                                   onchange="imagePreview(event, 'previewImageId')"
                                   class="form-control"
                                   name="cover_photo"
                            />

                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for=""><h3>Apply Link</h3></label>
                    <input placeholder="Enter Link Here!"
                           required type="text"
                           class="form-control"
                           name="link"
                           value="<?php echo $job['apply_link'] ?>"
                    />
                </div>

                <br>
                <div class="form-group ">
                    <input class="btn-lg btn-success float-right " type="submit" value="Save">
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
    let imagePreview = function (event, id) {
        let output = document.getElementById(id);
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function () {
            URL.revokeObjectURL(output.src) // free memory
        }
    };

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



