<!--== Header Area Start ==-->
<?php
include('loginCheck.php');
include('header.php')
?>
<!--== Header Area End ==-->

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Job Portal</h1>
                    <p>Ashun Job Kori.</p>
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
                <!-- Blog content Area Start -->
                <div class="">
                    <div class="blog-page-contant-start">
                        <div class="row">

                            <?php
                            include('database/db_connect.php');
                            $sql = "SELECT * FROM jobs";
                            $result = $conn->query($sql);
                            ?>
                            <!--== Single Blog Post start ==-->
                            <?php while ($item = $result->fetch_assoc()) {
                                ?>
                                <div class="col-lg-6 col-md-6">
                                    <article class="single-blog-post">
                                        <figure class="blog-thumb">
                                            <div class="blog-thumbnail">
                                                <?php if($item['photo']== null){
                                                    ?>
                                                    <img src="../backend/storage/default/default%20job%20post.jpg" class="img-fluid"
                                                         alt="Blog">
                                                    <?php
                                                }
                                                else {
                                                    ?>
                                                    <img src="../backend/storage/<?php echo $item['photo'] ?>" class="img-fluid"
                                                         alt="Blog">
                                                    <?php
                                                }?>

                                            </div>
                                            <figcaption class="blog-meta clearfix">
                                                <a class="author">
<!--                                                    <div class="author-pic">-->
<!--                                                        <img src="assets/img/blog/author.jpg" alt="Author">-->
<!--                                                    </div>-->
                                                    <div class="author-info">
                                                        <h4 style="color: #edfff4">Designation: <?php echo substr($item['designation'], 0, 25) ?></h4>
                                                        <p>Posted on:<?php echo $item['created_at'] ?> </p>
                                                        <p>Last Date Of Application:<?php echo $item['last_date_of_application'] ?> </p>
                                                    </div>
                                                </a>
                                                <div class="like-comm pull-right">
                                                    <a >Salary Range: </a>
                                                    <a ><?php echo $item['salary'] ?></a>
                                                </div>
                                            </figcaption>
                                        </figure>

                                        <div class="blog-content">
                                            <h3><a><?php echo substr($item['skill_requirement'], 0, 45) ?>.....</a></h3>
                                            <form method="post" action="singleJobPost.php">
                                                <input name="job_id" hidden value="<?php echo $item['job_id'] ?>">
                                                <input type="submit" class="btn btn-brand" value="More">
                                            </form>

                                             <?php
                                             if ($_SESSION['user_details']->account_type == 0 || $_SESSION['user_details']->account_type == 1) {
                                                 ?>
                                                 <a href="editJobPost.php?job_id=<?php echo $item['job_id'] ?>"
                                                    class="btn btn-brand text-white">
                                                     Edit
                                                 </a>
                                                 <a href="../backend/deleteJobPost.php?job_id=<?php echo $item['job_id'] ?>"
                                                    class="btn btn-brand text-white">
                                                     Delete
                                                 </a>
                                                 <?php

                                             }
                                             ?>
                                        </div>
                                    </article>
                                </div>
                            <?php } ?>
                            <!--== Single Blog Post End ==-->
                        </div>

                        <!-- Pagination Start -->
                        <!--                        <div class="row">-->
                        <!--                            <div class="col-lg-12">-->
                        <!--                                <div class="pagination-wrap text-center">-->
                        <!--                                    <nav>-->
                        <!--                                        <ul class="pagination">-->
                        <!--                                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>-->
                        <!--                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>-->
                        <!--                                            <li class="page-item"><a class="page-link" href="#">2</a></li>-->
                        <!--                                            <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                        <!--                                            <li class="page-item"><a class="page-link" href="#">...</a></li>-->
                        <!--                                            <li class="page-item"><a class="page-link" href="#">50</a></li>-->
                        <!--                                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>-->
                        <!--                                        </ul>-->
                        <!--                                    </nav>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!-- Pagination End -->
                    </div>
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

