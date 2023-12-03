
    <!--== Header Area Start ==-->
<?php
include('header.php')
?>
    <!--== Header Area End ==-->

    <!--== Slider Area Start ==-->
<section id="slider-area">
    <div class="slider-active-wrap owl-carousel text-center text-md-left">
        <!-- Single Slide Item Start -->
        <div class="image"  style="background-image: url(../backend/storage/default/uiu.png); height: 1280px; width:1920px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider-content">
                            <h2>We Are Proud</h2>
                            <h3>Students of <span>United International University</span></h3>
                            <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                            <div class="slider-btn">
                                <a href="about.php" class="btn btn-brand smooth-scroll">our mission</a>
                                <a href="successStory.php" class="btn btn-brand-rev">our story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide Item End -->

<!--        Single Slide Item Start -->
<!--        <div class="single-slide-wrap slide-bg-2">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-9">-->
<!--                        <div class="slider-content">-->
<!--                            <h2>We Are Not Proud</h2>-->
<!--                            <h3>Students of <span>United International University</span></h3>-->
<!--                            <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>-->
<!--                            <div class="slider-btn">-->
<!--                                <a href="#" class="btn btn-brand">our mission</a>-->
<!--                                <a href="#" class="btn btn-brand-rev">our story</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- Single Slide Item End -->

        <!-- Single Slide Item Start -->
<!--        <div class="single-slide-wrap slide-bg-3">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-9">-->
<!--                        <div class="slider-content">-->
<!--                            <h2>Why Proud for u</h2>-->
<!--                            <h3>Students of <span>United International University</span></h3>-->
<!--                            <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>-->
<!--                            <div class="slider-btn">-->
<!--                                <a href="#" class="btn btn-brand">our mission</a>-->
<!--                                <a href="#" class="btn btn-brand-rev">our story</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- Single Slide Item End -->
    </div>

    <!-- Social Icons Area Start -->
<!--    <div class="social-networks-icon">-->
<!--        <ul>-->
<!--            <li><a href="#"><i class="fa fa-facebook"></i> <span>7.2k Likes</span></a></li>-->
<!--            <li><a href="#"><i class="fa fa-twitter"></i> <span>3.2m Followers</span></a></li>-->
<!--            <li><a href="#"><i class="fa fa-pinterest"></i> <span>7.2k Likes</span></a></li>-->
<!--            <li><a href="#"><i class="fa fa-youtube"></i> <span>2.2k Subscribers</span></a></li>-->
<!--        </ul>-->
<!--    </div>-->
    <!-- Social Icons Area End -->
</section>
<!--== Slider Area End ==-->

    <!--== Upcoming Event Area Start ==-->
<section id="upcoming-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="upcoming-event-wrap">
                    <div class="up-event-titile">
                        <h3>Recent event</h3>
                    </div>
                    <?php
                    include ('database/db_connect.php');
                    $sql = "SELECT * FROM `events` ORDER BY date DESC limit 1";
                    $result = $conn->query($sql);


                    $event = $result->fetch_assoc();

                    ?>
                    <div class="upcoming-event-content owl-carousel">
                        <!-- No 1 Event -->
                        <div class="single-upcoming-event">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="up-event-thumb">
                                        <img src="../backend/storage/<?php echo $event['photos_1'] ?>" class="img-fluid" alt="Upcoming Event">
                                        <h4 class="up-event-date">It’s at (<?php echo $event['date']  ?>)</h4>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="up-event-text">
                                                <h3><a ><?php echo $event['event_name']  ?></a></h3>
                                                <p><?php echo substr($event['event_description'], 0, 100) ?></p>
                                                <form action="singleEvent.php" method="POST">
                                                    <input type="number" name="event_id" value="<?php echo $event['event_id'] ?>" hidden>
                                                    <button  class="btn btn-brand btn-brand-dark">Details</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- partial -->


                        <!-- No 2 Event -->
<!--                        <div class="single-upcoming-event">-->
<!--                            <div class="row">-->
<!--                                <div class="col-lg-5">-->
<!--                                    <div class="up-event-thumb">-->
<!--                                        <img src="../assets/frontend/assets/img/event/event-img-2.jpg" class="img-fluid" alt="Upcoming Event">-->
<!--                                        <h4 class="up-event-date">It’s 27 February 2019</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="col-lg-7">-->
<!--                                    <div class="display-table">-->
<!--                                        <div class="display-table-cell">-->
<!--                                            <div class="up-event-text">-->
<!--                                                <div class="event-countdown">-->
<!--                                                    <div class="event-countdown-counter" data-date="2018/9/10"></div>-->
<!--                                                    <p>Remaining</p>-->
<!--                                                </div>-->
<!--                                                <h3><a href="single-event.html">We are going to arrange a get together!</a></h3>-->
<!--                                                <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipv ex ea.</p>-->
<!--                                                <a href="single-event.html" class="btn btn-brand btn-brand-dark">join with us</a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <!-- partial -->


                        <!-- No 3 Event -->
<!--                        <div class="single-upcoming-event">-->
<!--                            <div class="row">-->
<!--                                <div class="col-lg-5">-->
<!--                                    <div class="up-event-thumb">-->
<!--                                        <img src="../assets/frontend/assets/img/event/event-img-3.jpg" class="img-fluid" alt="Upcoming Event">-->
<!--                                        <h4 class="up-event-date">It’s 27 February 2019</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="col-lg-7">-->
<!--                                    <div class="display-table">-->
<!--                                        <div class="display-table-cell">-->
<!--                                            <div class="up-event-text">-->
<!--                                                <div class="event-countdown">-->
<!--                                                    <div class="event-countdown-counter" data-date="2018/9/10"></div>-->
<!--                                                    <p>Remaining</p>-->
<!--                                                </div>-->
<!--                                                <h3><a href="single-event.html">We are going to arrange a get together!</a></h3>-->
<!--                                                <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipv ex ea.</p>-->
<!--                                                <a href="single-event.html" class="btn btn-brand btn-brand-dark">join with us</a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <!-- partial -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Upcoming Event Area End ==-->

    <!--== About Area Start ==-->
<section id="about-area" class="section-padding">
    <div class="about-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 ml-auto">
                    <div class="about-content-wrap">
                        <div class="section-title text-center text-lg-left">
                            <h2>Our Misssion</h2>
                        </div>

                        <div class="about-thumb">
                            <img src="../assets/frontend/assets/img/about-bg.jpg" alt="" class="img-fluid">
                        </div>

                        <p>There are many company Lorem ipsm dolor sitg amet, csetur adipicing elit, sed do eiusmod tempor dncint ut labore et dolore magna alis enim ad minim veniam, quis  csetur adipicing elit, sed do eiusmod tempor dncint ut labore et dolore magna alis enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <p>There are many company Lorem ipsm dolor sitg amet, csetur adipicing elit, sed do eiusmod tempor dncint ut labore et dolore magna alis enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <a href="about.html" class="btn btn-brand about-btn">know more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== About Area End ==-->

    <!--== Our Responsibility Area Start ==-->
<section id="responsibility-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Our Responsibility</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Responsibility Content Wrapper ==-->
        <div class="row text-center text-sm-left">
            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="../assets/frontend/assets/img/responsibility/01.png" alt="Responsibility">
                    <h4>Scholarship</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="../assets/frontend/assets/img/responsibility/02.png" alt="Responsibility">
                    <h4>Help Current Students</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="../assets/frontend/assets/img/responsibility/03.png" alt="Responsibility">
                    <h4>Help Our University</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="../assets/frontend/assets/img/responsibility/04.png" alt="Responsibility">
                    <h4>Build Our Community</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->
        </div>
        <!--== Responsibility Content Wrapper ==-->
    </div>
</section>
<!--== Our Responsibility Area End ==-->


    <!--== Job Opportunity Area Start ==-->
<section id="job-opportunity" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Recent Jobs</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Job opportunity Wrapper ==-->
        <div class="job-opportunity-wrapper">
            <div class="row">
                <!-- Blog content Area Start -->
                <div class="">
                    <div class="blog-page-contant-start">
                        <div class="row">

                            <?php

                            $sql = "SELECT * FROM jobs limit 2";
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
                                                        <h4 style="color: #edfff4">Designation: <?php echo substr($item['designation'], 0, 15) ?></h4>
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

            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="allJobPost.php" class="btn btn-brand btn-loadmore">All job list</a>
                </div>
            </div>
        </div>
        <!--== Job opportunity Wrapper ==-->
    </div>
</section>
<!--== Job Opportunity Area End ==-->



    <!--== Blog Area Start ==-->
    <section id="blog-area" class="section-padding">
        <div class="container">
            <!--== Section Title Start ==-->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Success Story</h2>
                    </div>
                </div>
            </div>
            <!--== Section Title End ==-->

            <!--== Blog Content Wrapper ==-->
            <div class="row">




                <!--== Single Blog Post start ==-->
                <div class="blog-page-content-wrap section-padding">
                    <div class="container">
                        <div class="row">
                            <!-- Blog content Area Start -->
                            <div class="">
                                <div class="blog-page-contant-start">
                                    <div class="row">

                                        <?php

                                        $sql = "SELECT * FROM success_story limit 2";
                                        $result = $conn->query($sql);
                                        $stories = $result->fetch_all();
                                        //                            echo gettype($stories);
                                        ?>
                                        <!--== Single Blog Post start ==-->
                                        <?php foreach ($stories as $item) {
                                            ?>
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single-blog-post">
                                                    <figure class="blog-thumb">
                                                        <div class="blog-thumbnail">
                                                            <img src="../backend/storage/<?php echo $item[3] ?>" alt="Blog" class="img-fluid" />
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
                                                    </figure>

                                                    <div class="blog-content">
                                                        <h3><a ><?php echo substr($item[1],0,45) ?>.....</a></h3>
                                                        <p><?php echo substr($item[2],0,200) ?>...</p>
                                                        <form method="post" action="singleSuccessStory.php">
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
                <!--== Single Blog Post End ==-->
            </div>
            <!--== Blog Content Wrapper ==-->
        </div>
    </section>
<!--== Blog Area EndBlog ==-->

    <!--== Footer Area Start ==-->
    <?php
    include("footer.php")
    ?>

<!--== Footer Area End ==-->
