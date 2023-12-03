<!--== Header Area Start ==-->
<?php
include('loginCheck.php');
include('header.php');
include('database/db_connect.php');


?>
<!--== Header Area End ==-->

<?php
//echo '<pre>';
//echo print_r($_POST);
//echo '</pre>';
if (isset($_POST['event_id'])){
    $id = $_POST['event_id'];
    $sql = "SELECT * FROM `events` WHERE event_id=$id ";
    $result = $conn->query($sql);

    $data = $result->fetch_assoc();

}

?>

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2"><?php echo $data['event_name'] ?></h1>
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
    <div class="single-event-page-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-event-details">
                        <div class="event-thumbnails">
                            <div class="event-thumbnail-carousel owl-carousel">
                                <div class="event-thumb-item ">
                                    <img style="width: 1100px; height: 700px" src="<?php echo "../backend/storage/".$data['photos_1'] ?>" alt="">
                                    <div class="event-meta">
<!--                                        <h3>Recently we are going to arrange a awesome get together!</h3>-->
                                        <a class="event-address" href="#"><i class="fa fa-map-marker"></i> <?php echo $data['location'] ?></a>
<!--                                        <a href="#" class="btn btn-brand btn-join">Join</a>-->
                                    </div>
                                </div>
                                <div class="event-thumb-item ">
                                    <img style="width: 1100px; height: 700px" src="<?php echo "../backend/storage/".$data['photos_2'] ?>" alt="">
                                    <div class="event-meta">
<!--                                        <h3>Recently we are going to arrange a awesome get together!</h3>-->
                                        <a class="event-address" href="#"><i class="fa fa-map-marker"></i> <?php echo $data['location'] ?></a>
<!--                                        <a href="#" class="btn btn-brand btn-join">Join</a>-->
                                    </div>
                                </div>
                                <div class="event-thumb-item">
                                    <img style="width: 1100px; height: 700px" src="<?php echo "../backend/storage/".$data['photos_3'] ?>" alt="">
                                    <div class="event-meta">
<!--                                        <h3>Recently we are going to arrange a awesome get together!</h3>-->
                                        <a class="event-address" href="#"><i class="fa fa-map-marker"></i> <?php echo $data['location'] ?></a>
<!--                                        <a href="#" class="btn btn-brand btn-join">Join</a>-->
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                        <h2><?php echo $data['event_name'] ?></h2>
                        <p><?php echo $data['event_description'] ?></p>
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

