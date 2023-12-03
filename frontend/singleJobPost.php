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
                    <h1 class="h2">Single Job Post</h1>
                    <p>Tumi job paba na</p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Register Page Content Start ==-->
<section id="page-content-wrap">

    <div class="blog-page-content-wrap section-padding">
        <div class="container">
            <div class="row">
                <?php
                //                                echo '<pre>';
                //                                print_r($_POST);
                //                                echo '</pre>';
                $job_id = $_POST['job_id'];
                include("database/db_connect.php");

                $sql = "select * from jobs where job_id='$job_id' ";
                $result = $conn->query($sql);
                $job_details = $result->fetch_assoc();

                ?>
                <!-- Blog content Area Start -->
                <div class="col-lg-10 m-auto">
                    <article class="single-blog-content-wrap">
                        <header class="article-head">
                            <div class="single-blog-thumb">
                                <?php if($job_details['photo']== null){
                                    ?>
                                    <img src="../backend/storage/default/default%20job%20post.jpg" class="img-fluid"
                                         alt="Blog">
                                    <?php
                                }
                                else {
                                    ?>
                                    <img src="../backend/storage/<?php echo $job_details['photo'] ?>" class="img-fluid"
                                         alt="Blog">
                                    <?php
                                }?>

                            </div>
                            <div class="single-blog-meta">
                                <h3>Designation: <?php echo $job_details['designation'] ?></h3>
                                <div class="posting-info">
                                    • Posted on: <a ><?php echo $job_details['created_at'] ?></a> <br><br>
                                    • Company Name: <a ><?php echo $job_details['company_name'] ?></a> <br><br>
                                    • Job Nature: <a ><?php echo $job_details['job_nature'] ?></a> <br><br>
                                    • No. of vacancy: <a ><?php echo $job_details['job_nature'] ?></a> <br><br>
                                    • Approximate Joining Date: <a ><?php echo $job_details['joining_date'] ?></a> <br><br>
                                    • Job Location: <a ><?php echo $job_details['job_location'] ?></a> <br><br>
                            </div>
                        </header>
                        <section class="blog-details">
                            <h3>Responsibilities:</h3>
                            <p> <?php echo $job_details['responsibilities'];?></p>
                            <h3>Skills Required:</h3>
                            <p> <?php echo $job_details['skill_requirement'];?></p>
                            <h3>Experience Required:</h3>
                            <p> <?php echo $job_details['experience'];?></p>
                            <h3>Salary(BDT):</h3>
                            <p> <?php echo $job_details['salary'];?></p>
                            <h3>Last Date Of Application:</h3>
                            <p> <?php echo $job_details['last_date_of_application'];?></p>
                            <h3>Contact Info:</h3>
                            <p> <?php echo $job_details['contact_info'];?></p>
                            <?php
                            if( $job_details['apply_link'] != null ){
                                ?>
                                <h3>Apply In This Link:</h3>
                                <p> <?php echo $job_details['apply_link'];?></p>
                            <?php
                            }
                            ?>

                            <?php
                            if( $job_details['email_for_online_cv'] != null ){
                                ?>
                                <h3>Send Your CV In This Email:</h3>
                                <p> <?php echo $job_details['email_for_online_cv'];?></p>
                            <?php
                            }
                            ?>

                            <!--find that alumni who postecd start-->
                            <?php
                            $alumni_id_fk = $job_details['alumni_id_fk'];

                            $sql = "SELECT email, name, student_id 
                            FROM users INNER JOIN alumni ON alumni.student_id = '$alumni_id_fk'";

                            $result = $conn->query($sql);
                            $alumni_info = $result->fetch_assoc();
//                            echo $alumni_info['name'];
                            ?>
                            <!--find that alumni who postecd end-->
                            <h3>Posted By:</h3>
                            <p>Name:  <?php echo $alumni_info['name'];?></p>
                            <p>Email:  <?php echo $alumni_info['email'];?></p>

                        </section>

                        <footer class="post-share">
                            <div class="row no-gutters ">
                                <div class="col-10">
<!--                                    <div class="shareonsocial">-->
<!--                                        <span>Share:</span>-->
<!--                                        <a href="#"><i class="fa fa-facebook"></i></a>-->
<!--                                        <a href="#"><i class="fa fa-twitter"></i></a>-->
<!--                                        <a href="#"><i class="fa fa-linkedin"></i></a>-->
<!--                                        <a href="#"><i class="fa fa-vimeo"></i></a>-->
<!--                                    </div>-->
                                </div>
                                <div class="col-2 text-right">
                                    <a class="btn btn-lg btn-info" href="allJobPost.php">
                                        <h4 class="bold text-white">Back</h4>
                                    </a>
                                    <!--                                    <div class="post-like-comm">-->
                                    <!--                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>20</a>-->
                                    <!--                                        <a href="#"><i class="fa fa-comment-o"></i>15</a>-->
                                    <!--                                    </div>-->
                                </div>
                            </div>
                        </footer>
                    </article>
                </div>
                <!-- Blog content Area End -->
            </div>
        </div>
    </div>

</section>
<!--== Register Page Content End ==-->

<!--== Footer Area Start ==-->
<?php
include("footer.php")
?>

