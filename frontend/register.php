<!--== Header Area Start ==-->
<?php
include('header.php')
?>
<!--== Header Area End ==-->

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Membership Form</h1>
                    <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the
                        need</p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Register Page Content Start ==-->
<section id="page-content-wrap">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="register-page-inner">
                        <div class="col-lg-10 m-auto">
                            <div class="register-form-content">
                                <div class="row">
                                    <!-- Signin Area Content Start -->
                                    <div class="col-lg-4 col-md-6 text-center">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="signin-area-wrap">
                                                    <h4>Already a Member?</h4>
                                                    <div class="sign-form">
                                                        <form action="login_authentication.php" method="post">
                                                            <input required type="email" name="email"
                                                                   placeholder="Enter your Email">
                                                            <input required type="password" name="password"
                                                                   placeholder="Password">
                                                            <button type="submit" class="btn btn-reg">Login</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Signin Area Content End -->

                                    <!-- Regsiter Form Area Start -->
                                    <div class="col-lg-7 col-md-6 ml-auto">
                                        <div class="register-form-wrap">
                                            <h3>Registration Form</h3>
                                            <div class="register-form">
                                                <form method="post" action="../backend/register.php"
                                                      enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_email">Student Id</label>
                                                                <input required type="number" class="form-control"
                                                                       name="student_id"/>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_name">Department</label> <br>
                                                                <select required name="department" class=""
                                                                        id="exampleFormControlSelect1">
                                                                    <option selected value="cse">CSE</option>
                                                                    <option value="eee">EEE</option>
                                                                    <option value="bba">BBA</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_name">CGPA</label>
                                                                <input type="number" step=0.01 class="form-control"
                                                                       name="cgpa"/>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <div class="form-group file-input">
                                                                    <input type="file" id="photo" name="photo"/>
                                                                    <label for="photo" class="custom-file"><i
                                                                                class="fa fa-upload"></i>Upload Your
                                                                        Photo</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_year">Email</label>
                                                                <input required type="email" class="form-control"
                                                                       name="email"/>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_deptno">Name</label>
                                                                <input required type="text" class="form-control"
                                                                       name="name"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_year">Date Of Birth</label>
                                                                <input required type="date" class="form-control"
                                                                       name="dob"/>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_deptno">Phone(Eg.
                                                                    01780976220)</label>
                                                                <input required type="tel" pattern="[0-9]{11}"
                                                                       class="form-control" name="phone"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Password</label>
                                                            <input required type="password" class="form-control"
                                                                   name="password"/>
                                                        </div>
                                                    </div>

                                                    <div class="gender form-group">
                                                        <label class="g-name d-block">Gender</label>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input required type="radio" id="register_gender_male"
                                                                   name="gender" value="male"
                                                                   class="custom-control-input"/>
                                                            <label class="custom-control-label"
                                                                   for="register_gender_male">Male</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input required type="radio" id="register_gender_female"
                                                                   name="gender" value="female"
                                                                   class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                   for="register_gender_female">Female</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Address</label>
                                                            <textarea required name="address" class="form-control"
                                                                      id="exampleFormControlTextarea1" rows="5"
                                                                      cols="50"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="register_deptno">Company Name(optional*)</label>
                                                        <input required type="text" class="form-control" name="c_name"/>
                                                    </div>
<!--                                                    <div class="form-group">-->
<!--                                                        <label for="register_deptno">Company Email</label>-->
<!--                                                        <input required type="email" class="form-control" name="c_email"/>-->
<!--                                                    </div>-->
<!--                                                    <div class="form-group">-->
<!--                                                        <label for="register_deptno">Company Address</label>-->
<!--                                                        <input required type="text" class="form-control" name="c_address"/>-->
<!--                                                    </div>-->
                                                    <div class="form-group">
                                                        <label for="register_deptno">Companies Website</label>
                                                        <input required type="text" class="form-control" name="c_website"/>
                                                    </div>
<!--                                                    <div class="form-group">-->
<!--                                                        <label for="register_deptno">Companies Country</label>-->
<!--                                                        <input required type="text" class="form-control" name="c_country"/>-->
<!--                                                    </div>-->
<!--                                                    <div class="form-group">-->
<!--                                                        <div class="form-group file-input">-->
<!--                                                            <input type="file" id="c_photo" name="c_photo"/>-->
<!--                                                            <label for="photo" class="custom-file"><i-->
<!--                                                                        class="fa fa-upload"></i>Upload Your-->
<!--                                                                company logo</label>-->
<!--                                                        </div>-->
<!--                                                    </div>-->




                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox float-lg-right">
                                                            <input required checked name="termsAndCondition"
                                                                   type="checkbox" class="custom-control-input"
                                                                   id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1"> I
                                                                have read and agree to the <a href="#">Alumni</a> Terms
                                                                of Service</label>
                                                        </div>
                                                        <input type="submit" class="btn btn-reg" value="Registration">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Regsiter Form Area End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Register Page Content End ==-->

<!--== Footer Area Start ==-->
<?php
include("footer.php")
?>

