<?php
include('../frontend/loginCheck.php');

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
//
//echo '<pre>';
//print_r($_FILES);
//echo '</pre>';

//database connection code included
include('../frontend/database/db_connect.php');

if (isset($_POST['designation']) && isset($_POST['salary']) && isset($_POST['skills'])
    && isset($_POST['last_date_of_application'])
    && isset($_POST['res']) && isset($_POST['contact']) && isset($_POST['job_nature']) && isset($_POST['link']) && isset($_POST['company'])
    && isset($_POST['location']) && isset($_POST['experience']) && isset($_POST['vacancy']) && isset($_POST['joining_date'])&& isset($_POST['cv_email'])
){
    $designation = $_POST['designation'];
    $salary = $_POST['salary'];
    $skills = $_POST['skills'];
    $last_date_of_application = $_POST['last_date_of_application'];
    $res = $_POST['res'];
    $contact = $_POST['contact'];
    $job_nature=$_POST['job_nature'];
    $link=$_POST['link'];
    $company=$_POST['company'];
    $location=$_POST['location'];
    $experience=$_POST['experience'];
    $vacancy=$_POST['vacancy'];
    $joining_date=$_POST['joining_date'];
    $cv_email=$_POST['cv_email'];

    $alumni_id = $_SESSION['user_details']->alumni_id_fk;

    $timezone = new DateTimeZone("Asia/Dhaka" );
    $date = new DateTime();
    $date->setTimezone($timezone );

    $today_date = $date->format('Y/m/d');

//    $sql = "INSERT INTO `jobs`
//        ( `designation`, `salary`, `last_date_of_application`, `skill_requirement`, `contact_info`, `alumni_id_fk`, `responsibilities`,`created_at`)
//VALUES ('$designation','$salary','$last_date_of_application','$skills','$contact','$alumni_id','$res','$today_date')";
    $sql = "INSERT INTO `jobs`(`created_at`, `designation`, `salary`, `last_date_of_application`, `skill_requirement`, `contact_info`, `alumni_id_fk`, 
                   `responsibilities`,`job_nature`, `apply_link`, `company_name`, `job_location`, `experience`, `no_of_vacancy`, `joining_date`, `email_for_online_cv`) 
                    VALUES ('$today_date','$designation','$salary','$last_date_of_application','$skills','$contact','$alumni_id','$res',
                    '$job_nature','$link','$company','$location','$experience','$vacancy','$joining_date','$cv_email')";
//    echo $sql;

    if (is_uploaded_file($_FILES['cover_photo']['tmp_name'])){
        //image details
        $file_name = $_FILES['cover_photo']['name'];
        $file_type = $_FILES['cover_photo']['type'];
        $file_temp_name = $_FILES['cover_photo']['tmp_name'];

        if ($file_type == 'image/jpeg' || $file_type == 'image/png' || $file_type == 'image/jpg') {

            $unique_file_name = md5(time() . rand()) . $file_name;
            move_uploaded_file($file_temp_name, 'storage/' . $unique_file_name);

            //change sql with photo
            $sql = "INSERT INTO `jobs`(`created_at`, `designation`, `salary`, `last_date_of_application`, `skill_requirement`, `contact_info`, `photo`, `alumni_id_fk`, 
                   `responsibilities`,`job_nature`, `apply_link`, `company_name`, `job_location`, `experience`, `no_of_vacancy`, `joining_date`, `email_for_online_cv`) 
                    VALUES ('$today_date','$designation','$salary','$last_date_of_application','$skills','$contact','$unique_file_name','$alumni_id','$res',
                    '$job_nature','$link','$company','$location','$experience','$vacancy','$joining_date','$cv_email')";

//            $sql = "INSERT INTO `jobs`
//        ( `designation`, `salary`, `last_date_of_application`, `skill_requirement`, `contact_info`, `alumni_id_fk`, `responsibilities`,`created_at`,
//         `photo`)
//VALUES ('$designation','$salary','$last_date_of_application','$skills','$contact','$alumni_id','$res','$today_date'
//,'$unique_file_name')";


//            echo $sql;

            $conn->query($sql);

            echo "<script>alert('Successfully Posted')</script>";
            echo "<script>location.assign('../frontend/allJobPost.php')</script>";

        } else {
            echo "<script>alert('Not Supported Image Format')</script>";
            echo "<script>location.assign('../frontend/addJobPost.php')</script>";
        }
    }
}
else{
    echo "<script>alert('Please provide valid Info')</script>";
    echo "<script>location.assign('../frontend/addJobPost.php')</script>";

}