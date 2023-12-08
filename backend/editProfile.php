<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

//database connection code included
include('../frontend/database/db_connect.php');

// checking the values set or not and termsAndConditions is chekced
if (isset($_POST['student_id'])
    && isset($_POST['department'])
    && isset($_POST['email'])
    && isset($_POST['name']) && isset($_POST['dob'])
    && isset($_POST['phone']) && isset($_POST['password'])
    && isset($_POST['address']) && isset($_POST['gender'])
    && isset($_POST['termsAndCondition']) && $_POST['termsAndCondition'] == 'on'
    && isset($_POST['cgpa'])
    && isset($_POST['c_name'])
    && isset($_POST['c_website'])
) {
    $student_id = $_POST['student_id'];
    $department = '';
    $cgpa = $_POST['cgpa'];
    $c_name = $_POST['c_name'];
    $c_website = $_POST['c_website'];

    //sql if photo is not uploaded
    $sql = "UPDATE alumni
        SET department = '$department',
            cgpa = '$cgpa',
            company_name = '$c_name',
            company_website = '$c_website'
        WHERE student_id = '$student_id'";


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
            $sql = "UPDATE alumni
        SET department = '$department',
            cgpa = '$cgpa',
            photo = '$unique_file_name',
            company_name = '$c_name',
            company_website = '$c_website'
        WHERE student_id = '$student_id'";

            echo $sql;
        } else {
            echo "<script>alert('Not Supported Image Format')</script>";
        }
    }

    try {
        $conn->query($sql);
        $email = $_POST['email'];

        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];

//        $conn->query($company_sql);

        $address = $_POST['address'];
        $phone = $_POST['phone'];

        $alumni_id_fk = $student_id;

        $sql = "UPDATE users
        SET email = '$email',
            name = '$name',
            account_type = '2',
            dob = '$dob',
            gender = '$gender',
            address = '$address',
            phone = '$phone'
        WHERE alumni_id_fk = '$alumni_id_fk'";

        if (isset($_POST['password'])) {
            $password = password_hash(md5($_POST['password']), PASSWORD_DEFAULT);

            $sql = "UPDATE users
        SET password = '$password',
            email = '$email',
            name = '$name',
            account_type = '2',
            dob = '$dob',
            gender = '$gender',
            address = '$address',
            phone = '$phone'
        WHERE alumni_id_fk = '$alumni_id_fk'";
        }

        $conn->query($sql);

        echo "<script>alert('Successful')</script>";

        include('../frontend/logout.php');

    } catch (Exception $ex) {
        echo "<script>alert('Email/Student Id/phone is not unique')</script>";
    }
    echo "<script>location.assign('../frontend/register.php')</script>";
}


