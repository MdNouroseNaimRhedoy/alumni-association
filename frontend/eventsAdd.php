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
                    <h1 class="h2">Add Events</h1>
                    <p> A goal without a plan is just a wish.</p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Register Page Content Start ==-->
<section id="page-content-wrap" class="bg-info">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <form method="post" action="../backend/eventsAdd.php" enctype="multipart/form-data">

                <div class="">
                    <div class="">
                        <div class="form-group">
                            <label for=""><h3>Event Name</h3></label>
                            <input placeholder="Enter Event Name Here!" required type="text" class="form-control"
                                   name="event_name"/>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Event Date</h3></label>
                            <input  required type="date" class="form-control"
                                    name="event_date"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""><h3>Location</h3></label>
                            <input placeholder="Enter Event Location" required type="text" class="form-control"
                                    name="location"/>
                        </div>
                    </div>
                </div>
                <br>

                <br>
                <div class="form-group">
                    <label for=""><h3>Event Description</h3></label>
                    <textarea name="e_description" id="e_description"></textarea>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""><h3>Photo 1(Optional)</h3></label>
                            <input required type="file" class="form-control" name="cover_photo1"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""><h3>Photo 2(Optional)</h3></label>
                            <input type="file" class="form-control" name="cover_photo2"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""><h3>Photo 3(Optional)</h3></label>
                            <input type="file" class="form-control" name="cover_photo3"/>
                        </div>
                    </div>
                </div>
                <br>
<!--                <div class=" px-2">-->
<!--                    schedule 1-->
<!--                    <h1 class="text-center">Schedules</h1>-->
<!--                    <h3 class="text-center">Schedule 1</h3>-->
<!--                <div class="row">-->
<!---->
<!--                    <div class="col-md-4">-->
<!--                        <div class="form-group">-->
<!--                            <label for=""><h3>Start Time</h3></label>-->
<!--                            <input  required type="time" class="form-control"-->
<!--                                    name="start_time_1"/>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-4">-->
<!--                        <div class="form-group">-->
<!--                            <label for=""><h3>End Time</h3></label>-->
<!--                            <input  required type="time" class="form-control"-->
<!--                                    name="end_time_1"/>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-4">-->
<!--                        <div class="form-group">-->
<!--                            <label for=""><h3>Schedule Title</h3></label>-->
<!--                            <input  required type="text" class="form-control"-->
<!--                                    name="schedule_title_1"/>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-6">-->
<!--                            <div class="form-group">-->
<!--                                <label for=""><h3>Event Description</h3></label>-->
<!--                                <textarea name="schedule_description1" id="f_description"></textarea>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-6">-->
<!--                            <div class="form-group">-->
<!--                                <label for=""><h3>Speaker Name</h3></label>-->
<!--                                <input  required type="text" class="form-control"-->
<!--                                        name="speaker_name1"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--<!--                    schedule 2-->-->
<!--                    <h3 class="text-center">Schedule 2</h3>-->
<!--                    <div class="row">-->
<!---->
<!--                        <div class="col-md-4">-->
<!--                            <div class="form-group">-->
<!--                                <label for=""><h3>Start Time</h3></label>-->
<!--                                <input  required type="time" class="form-control"-->
<!--                                        name="start_time_2"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="form-group">-->
<!--                                <label for=""><h3>End Time</h3></label>-->
<!--                                <input  required type="time" class="form-control"-->
<!--                                        name="end_time_2"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="form-group">-->
<!--                                <label for=""><h3>Schedule Title</h3></label>-->
<!--                                <input  required type="text" class="form-control"-->
<!--                                        name="schedule_title_2"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-6">-->
<!--                            <div class="form-group">-->
<!--                                <label for=""><h3>Event Description</h3></label>-->
<!--                                <textarea name="schedule_description2" id="f_description"></textarea>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-6">-->
<!--                            <div class="form-group">-->
<!--                                <label for=""><h3>Speaker Name</h3></label>-->
<!--                                <input  required type="text" class="form-control"-->
<!--                                        name="speaker_name2"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    schedule 3-->
<!--                    <h3 class="text-center">Schedule 1</h3>-->
<!--                    <div class="row">-->
<!---->
<!--                        <div class="col-md-4">-->
<!--                            <div class="form-group">-->
<!--                                <label for=""><h3>Start Time</h3></label>-->
<!--                                <input  required type="time" class="form-control"-->
<!--                                        name="start_time_1"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="form-group">-->
<!--                                <label for=""><h3>End Time</h3></label>-->
<!--                                <input  required type="time" class="form-control"-->
<!--                                        name="end_time_1"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="form-group">-->
<!--                                <label for=""><h3>Schedule Title</h3></label>-->
<!--                                <input  required type="text" class="form-control"-->
<!--                                        name="schedule_title_1"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-6">-->
<!--                            <div class="form-group">-->
<!--                                <label for=""><h3>Event Description</h3></label>-->
<!--                                <textarea name="schedule_description1" id="f_description"></textarea>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-6">-->
<!--                            <div class="form-group">-->
<!--                                <label for=""><h3>Speaker Name</h3></label>-->
<!--                                <input  required type="text" class="form-control"-->
<!--                                        name="speaker_name1"/>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="form-group ">
                    <input class="btn-lg btn-success float-right " type="submit" value="Post">
                </div>

        </div>
        </form>
    </div>
</section>
<!--== Register Page Content End ==-->

<!--== Footer Area Start ==-->
<?php
include("footer.php")
?>

<script>
    tinymce.init({
        selector: '#e_description',
        width: 1100,
        height: 400,
    });
    tinymce.init({
        selector: '#f_description',
        width: 500,
        height: 400,
    });
    tinymce.init({
        selector: '#schedule_description',
        width: 1100,
        height: 400,
    });
    tinymce.init({
        selector: '#contact',
        width: 500,
        height: 200,
    });


</script>



