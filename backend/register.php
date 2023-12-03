<?php
//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

//database connection code included
include('../frontend/database/db_connect.php');

// checking the values set or not and termsAndConditions is chekced
if (isset($_POST['student_id']) && isset($_POST['department'])
    && isset($_POST['email'])
    && isset($_POST['name']) && isset($_POST['dob'])
    && isset($_POST['phone']) && isset($_POST['password'])
    && isset($_POST['address']) && isset($_POST['gender'])
    && isset($_POST['termsAndCondition']) && $_POST['termsAndCondition'] == 'on'
    && isset($_POST['cgpa'])
    && isset($_POST['c_name'])
    && isset($_POST['c_website'])

) {
//    echo 'hello';

    $student_id = $_POST['student_id'];
    $department = $_POST['department'];
    $cgpa = $_POST['cgpa'];

    $c_name = $_POST['c_name'];
//    $c_email = $_POST['c_email'];
//    $c_address = $_POST['c_address'];
    $c_website = $_POST['c_website'];
//    $c_country  = $_POST['c_country'];



    //sql if photo is not uploaded
    $sql = "INSERT INTO alumni (student_id, department, cgpa, company_name, company_website)
            VALUES ('$student_id', '$department', '$cgpa','$c_name','$c_website')";


    if (is_uploaded_file($_FILES['photo']['tmp_name'])) {
//        echo '<pre>';
//        print_r($_FILES);
//        echo '</pre>';
        $file_name = $_FILES['photo']['name'];
        $file_type = $_FILES['photo']['type'];
        $file_temp_name = $_FILES['photo']['tmp_name'];

        if ($file_type == 'image/jpeg' || $file_type == 'image/png' || $file_type == 'image/jpg') {
//            echo $file_type;
            $unique_file_name = md5(time() . rand()) . $file_name;
//            echo $unique_file_name;
            move_uploaded_file($file_temp_name, 'storage/' . $unique_file_name);

            //change sql with photo
            $sql = "INSERT INTO alumni (student_id, department, cgpa, photo, company_name, company_website)
            VALUES ('$student_id', '$department', '$cgpa', '$unique_file_name','$c_name','$c_website')";
            echo $sql;
        } else {
            echo "<script>alert('Not Supported Image Format')</script>";
        }
    }

//    if compnay photo not uploaded
//    $company_sql = "INSERT INTO `companies`( `company_name`, `company_email`, `copmany_address`, `compnay_website`, `company_country`)
//                    VALUES ('$c_name','$c_email','$c_address','$c_website','$c_country')";

//    if (is_uploaded_file($_FILES['c_photo']['tmp_name'])) {
////        echo '<pre>';
////        print_r($_FILES);
////        echo '</pre>';
//        $file_name = $_FILES['c_photo']['name'];
//        $file_type = $_FILES['c_photo']['type'];
//        $file_temp_name = $_FILES['c_photo']['tmp_name'];
//
//        if ($file_type == 'image/jpeg' || $file_type == 'image/png' || $file_type == 'image/jpg') {
////            echo $file_type;
//            $unique_file_name = md5(time() . rand()) . $file_name;
////            echo $unique_file_name;
//            move_uploaded_file($file_temp_name, 'storage/' . $unique_file_name);
//
//            //change sql with photo
//            $company_sql = "INSERT INTO `companies`( `company_name`, `company_email`, `copmany_address`, `compnay_website`, `company_country`, `company_logo`)
//                    VALUES ('$c_name','$c_email','$c_address','$c_website','$c_country','$unique_file_name')";
//        } else {
//            echo "<script>alert('Not Supported Image Format')</script>";
//        }
//    }


    try {
        $conn->query($sql);
        $email = $_POST['email'];
        $password = password_hash(md5($_POST['password']), PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];

//        $conn->query($company_sql);

        $address = $_POST['address'];
        $phone = $_POST['phone'];

        $alumni_id_fk = $student_id;


        //sql for user data
        $sql = "INSERT INTO users (password, email, name, account_type, dob, gender, address, phone
            , alumni_id_fk)
            VALUES ('$password','$email', '$name', '2', '$dob' ,'$gender', '$address','$phone' , '$alumni_id_fk')";




        $conn->query($sql);




        echo "<script>alert('Successful')</script>";

    } catch (Exception $ex) {
        echo "<script>alert('Email/Student Id/phone is not unique')</script>";
    }
    echo "<script>location.assign('../frontend/register.php')</script>";

}


