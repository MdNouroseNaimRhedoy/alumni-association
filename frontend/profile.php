<!--== Header Area Start ==-->
<?php
include('loginCheck.php');
include('header.php');
include('database/db_connect.php');

$user = $_SESSION['user_details'];

$query = "select * from users join alumni on users.alumni_id_fk = alumni.student_id where id=$user->id";
$result = $conn->query($query);
$user = $result->fetch_assoc();
?>

<section id="page-content-wrap">
    <div class="register-page-wrapper">
        <div class="container">
            <!-- Regsiter Form Area Start -->
            <div class="col-lg-12 col-md-6 ml-auto">
                <div class="register-form-wrap">
                    <h3>Profile Details</h3>
                    <div class="register-form">
                        <form method="post" action="../backend/editProfile.php"
                              enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="register_email">Student Id</label>
                                        <input name="student_id"
                                               readonly
                                               type="text"
                                               class="form-control"
                                               value="<?php echo $user['alumni_id_fk'] ?>"
                                        />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="register_name">Department</label> <br>
                                        <input type="text"
                                               class="form-control"
                                               disabled
                                               value="<?php echo strtoupper($user['department']) ?>"
                                        />
                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="register_name">CGPA</label>
                                        <input name="cgpa" readonly type="number" step=0.01 class="form-control"
                                               value="<?php echo $user['cgpa'] ?>"/>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="form-group file-input">
                                            <div>
                                                <img src="../backend/storage/<?php echo $user['photo'] ?>"
                                                     class="img-fluid rounded-circle"
                                                     style="width: 200px; height: 200px;"
                                                     alt="Blog"
                                                     id="previewImageId"
                                                >
                                            </div>
                                            <input type="file" id="photo" name="photo"
                                                   onchange="imagePreview(event, 'previewImageId')"/>
                                            <label for="photo" class="custom-file">
                                                <i class="fa fa-upload"></i>
                                                Upload Your
                                                Photo
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="register_year">Email</label>
                                        <input required
                                               type="email"
                                               class="form-control"
                                               value="<?php echo $user['email'] ?>"
                                               name="email"
                                        />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="register_deptno">Name</label>
                                        <input name="name"
                                               readonly
                                               type="text"
                                               class="form-control"
                                               value="<?php echo $user['name'] ?>"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="register_year">Date Of Birth</label>
                                        <input readonly
                                               type="date"
                                               class="form-control"
                                               value="<?php echo $user['dob'] ?>"
                                               name="dob"
                                        />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="register_deptno">
                                            Phone(Eg.01780976220)
                                        </label>
                                        <input required
                                               type="tel"
                                               pattern="[0-9]{11}"
                                               class="form-control"
                                               name="phone"
                                               value="<?php echo $user['phone'] ?>"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">New Password</label>
                                    <input type="password" class="form-control" name="password"/>
                                </div>
                            </div>

                            <div class="gender form-group">
                                <label class="g-name d-block">Gender</label>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input required type="radio" id="register_gender_male"
                                           name="gender" value="male"
                                           class="custom-control-input"
                                        <?php if ($user['gender'] == 'male') echo 'checked' ?>
                                    />
                                    <label class="custom-control-label"
                                           for="register_gender_male">Male</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input required type="radio" id="register_gender_female"
                                           name="gender" value="female"
                                           class="custom-control-input"
                                        <?php if ($user['gender'] == 'female') echo 'checked' ?>
                                    >
                                    <label class="custom-control-label"
                                           for="register_gender_female">Female</label>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Address</label>
                                    <textarea required name="address" class="form-control"
                                              id="exampleFormControlTextarea1" rows="5"
                                              cols="50"><?php echo $user['address'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="register_deptno">Company Name(optional*)</label>
                                <input required type="text" class="form-control" name="c_name"
                                       value="<?php echo $user['company_name'] ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="register_deptno">Companies Website</label>
                                <input required type="text" class="form-control" name="c_website"
                                       value="<?php echo $user['company_website'] ?>"/>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox float-lg-right">
                                    <input required checked name="termsAndCondition"
                                           type="checkbox" class="custom-control-input"
                                           id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"> I
                                        have read and agree to the <a href="#">Alumni</a> Terms
                                        of Service</label>
                                </div>
                                <input type="submit" class="btn btn-reg" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
</script>



