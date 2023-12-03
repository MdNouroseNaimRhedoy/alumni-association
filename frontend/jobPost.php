
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
                            $jobs = $result->fetch_all();
//                            echo gettype($stories);
                            ?>
                            <!--== Single Blog Post start ==-->
                            <?php foreach ($jobs as $item) {
                                ?>
                            <div class="col-lg-6 col-md-6">
                                <article class="single-blog-post">
                                    <figure class="blog-thumb">
                                        <div class="blog-thumbnail">
                                            <img src="../backend/storage/<?php echo $item[7] ?>" alt="Blog" class="img-fluid" />
                                        </div>
<!--                                        <figcaption class="blog-meta clearfix">-->
<!--                                            <a  class="author">-->
<!--                                                <div class="author-pic">-->
<!--                                                    <img src="assets/img/blog/author.jpg" alt="Author">-->
<!--                                                </div>-->
<!--                                                <div class="author-info">-->
<!--                                                    <h5>Daney williams</h5>-->
<!--                                                    <p>2 hours Ago</p>-->
<!--                                                </div>-->
<!--                                            </a>-->
<!--                                            <div class="like-comm pull-right">-->
<!--                                                <a href="#"><i class="fa fa-comment-o"></i>77</a>-->
<!--                                                <a href="#"><i class="fa fa-heart-o"></i>12</a>-->
<!--                                            </div>-->
<!--                                        </figcaption>-->
<!--                                        --><?php
//                                        echo '<pre>';
//                                        print_r($item);
//                                        echo '</pre>';
//                                        ?>
                                    </figure>

                                    <div class="blog-content">
                                        <h3><a ><?php echo substr($item[12],0,45) ?>.....</a></h3>
                                        <h3><a ><?php echo substr($item[3],0,45) ?>.....</a></h3>
                                        <h3><a ><?php echo substr($item[11],0,45) ?>.....</a></h3>
                                        <h3><a ><?php echo substr($item[14],0,45) ?>.....</a></h3>
                                        <h3><a ><?php echo substr($item[15],0,45) ?>.....</a></h3>
                                        <h3><a ><?php echo substr($item[16],0,45) ?>.....</a></h3>
                                        <h3><a ><?php echo substr($item[17],0,45) ?>.....</a></h3>
                                        <h3><a ><?php echo substr($item[18],0,45) ?>.....</a></h3>
                                        <h3><a ><?php echo substr($item[4],0,45) ?>.....</a></h3>
                                        <h3><a ><?php echo substr($item[5],0,45) ?>.....</a></h3>
                                        <h3><a ><?php echo substr($item[6],0,45) ?>.....</a></h3>
                                        <h3><a ><?php echo substr($item[10],0,45) ?>.....</a></h3>
                                        <h3><a ><?php echo substr($item[7],0,45) ?>.....</a></h3>
                                        <h3><a ><?php echo substr($item[12],0,45) ?>.....</a></h3>
<!--                                        <p>--><?php //echo substr($item[2],0,200) ?><!--...</p>-->
                                        <form method="post" action="frontend/singleJobPost.php">
                                            <input name="id" hidden value="<?php echo $item[0] ?>">
                                            <input type="submit" class="btn btn-brand" value="More">
                                        </form>

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

