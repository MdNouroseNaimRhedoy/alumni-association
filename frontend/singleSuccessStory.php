
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
                    <h1 class="h2">Success Story</h1>
                    <p>Success Story That Inspires thousands.</p>
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
//                echo '<pre>';
//                print_r($_POST);
//                echo '</pre>';
                $blog_id = $_POST['id'] ;
                include("database/db_connect.php");

                $sql = "select * from success_story where id='$blog_id' ";
                $result = $conn->query($sql);
                $blog_details = $result->fetch_assoc();

                ?>
                <!-- Blog content Area Start -->
                <div class="col-lg-10 m-auto">
                    <article class="single-blog-content-wrap">
                        <header class="article-head">
                            <div class="single-blog-thumb">
                                <img src="../backend/storage/<?php echo $blog_details['cover_photo'] ?>" class="img-fluid" alt="Blog">
                            </div>
                            <div class="single-blog-meta">
                                <h2><?php echo $blog_details['title'] ?></h2>
<!--                                <div class="posting-info">-->
<!--                                    <a href="#">23 May 2017</a> • Posted by: <a href="#">Admin</a>-->
<!--                                </div>-->
                            </div>
                        </header>
                        <section class="blog-details">
                           <p>
                               <?php
                               echo $blog_details['content'];
                               ?>
                           </p>

                        </section>

                        <footer class="post-share">
                            <div class="row no-gutters ">
                                <div class="col-10">
                                    <div class="shareonsocial">
                                        <span>Share:</span>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-vimeo"></i></a>
                                    </div>
                                </div>
                                <div class="col-2 text-right">
                                    <a class="btn btn-lg btn-info" href="successStory.php">
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

