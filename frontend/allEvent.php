<!--== Header Area Start ==-->
<?php
include('loginCheck.php');
include('header.php');
include('database/db_connect.php');


?>
<!--== Header Area End ==-->

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">All Event Archive</h1>
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
    <div class="event-page-content-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="all-event-list">
                        <?php
                        $sql = "SELECT * FROM `events` ORDER BY date DESC";
                        $result = $conn->query($sql);

//                        echo "<pre>";
//                        echo print_r($result);
//                        echo "</pre>";

                        while( $item = $result->fetch_assoc() )
                        {
                        ?>
                        <!-- Single Event Start -->
                        <div class="single-upcoming-event">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="up-event-thumb">
                                        <img src="../backend/storage/<?php echo $item['photos_1'] ?>" class="img-fluid" alt="Upcoming Event">
                                        <h4 class="up-event-date">It’s at (<?php echo $item['date']  ?>)</h4>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="up-event-text">
                                                <h3><a ><?php echo $item['event_name']  ?></a></h3>
                                                <p><?php echo substr($item['event_description'], 0, 100) ?></p>
                                                <form action="singleEvent.php" method="POST">
                                                    <input type="number" name="event_id" value="<?php echo $item['event_id'] ?>" hidden>
                                                    <button  class="btn btn-brand btn-brand-dark">Details</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Event End -->
                        <?php
                        }
                        ?>

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

