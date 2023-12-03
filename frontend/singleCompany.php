
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
                    <h1 class="h2">Company Review</h1>
                    <p>Don't judge a book by its cover</p>
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
//                $blog_id = $_POST['id'] ;
//                include("database/db_connect.php");

//                $sql = "select 'company_name','company_webs' from success_story where id='$blog_id' ";
//                $result = $conn->query($sql);
//                $blog_details = $result->fetch_assoc();

                ?>
                <!-- Blog content Area Start -->
                <div class="col-lg-10 m-auto">
                    <article class="single-blog-content-wrap">
                        <header class="article-head">
                            <div class="single-blog-thumb">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <img src="../backend/storage/default/img_2.png" class="img-fluid text-center" alt="Blog">
                                    </div>
                                    <div class="col-md-4"></div>

                                </div>
                            </div>
                            <div class="single-blog-meta">
                                <?php
                                    $company_name = $_GET['company_name'];
                                    $company_website = $_GET['company_website'];
                                ?>
                                <h3><?php echo $company_name  ?></h3>
                                <a href="<?php echo $company_website  ?>"><?php echo $company_website  ?></a>
                                <!--                                <div class="posting-info">-->
                                <!--                                    <a href="#">23 May 2017</a> • Posted by: <a href="#">Admin</a>-->
                                <!--                                </div>-->
                            </div>
                        </header>
                        <?php
                        try{

                            $sql2 = "SELECT * FROM `company_review` WHERE company_name ='$company_name' and company_website='$company_website'";
                            include ('database/db_connect.php');
                            $result = $conn->query($sql2);

//                                        echo "<pre>";
//                                        echo print_r($result);
//                                        echo "</pre>";
                        }
                        catch (Exception $ex){

                        }?>
                        <section class="blog-details">
                            <?php
                            while( $item = $result->fetch_assoc()) {
                            ?>
                            <div class="row">
                                <div class="col-md-2">
                                    <img class="img-fluid rounded-circle" src="../backend/storage/default/img_3.png" alt="">
                                </div>

                                <div class="col-md-10">
                                    <textarea disabled name="review" id="" cols="" rows=""><?php echo $item['review'] ?></textarea>
                                </div>

                            </div>
                            <?php
                            }
                            ?>
                                <div class="row">
                                    <div class="col-md-2">
                                        <img class="img-fluid rounded-circle" src="../backend/storage/default/img_3.png" alt="">
                                    </div>

                                    <div class="col-md-10">
                                        <form action="../backend/singleCompany.php" method="get">
                                            <input hidden type="text" name="company_name" value="<?php echo $company_name ?>">
                                            <input hidden type="text" name="company_website" value="<?php echo $company_website ?>">
                                            <textarea name="review" id="" cols="85" rows="6"></textarea>
                                            <button class="btn btn-sm btn-primary" type="submit">Save</button>
                                        </form>
                                    </div>

                                </div>

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
                                    <a class="btn btn-lg btn-info" href="anonymousReview.php">
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

