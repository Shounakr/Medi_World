<?php
require "init.php";

$PATIENT_ADM_NO = $_POST["PATIENT_ADM_NO"];
$PATIENT_NAME = $_POST["PATIENT_NAME"];
$PATIENT_PASSWORD = $_POST["PATIENT_PASSWORD"];
$PATIENT_CONTACT_NO = $_POST["PATIENT_CONTACT_NO"];
$PATIENT_EMAIL = $_POST["PATIENT_EMAIL"];
$PATIENT_GENDER = $_POST["PATIENT_GENDER"];
$PATIENT_DOB = $_POST["PATIENT_DOB"];
$PATIENT_BLOOD_GROUP = $_POST["PATIENT_BLOOD_GROUP"];
$PATIENT_HEIGHT = $_POST["PATIENT_HEIGHT"];
$PATIENT_WEIGHT = $_POST["PATIENT_WEIGHT"];
$PATIENT_METABOLIC_DISORDERS = $_POST["PATIENT_METABOLIC_DISORDERS"];

$sql_query = "INSERT INTO patient_details VALUES('$PATIENT_ADM_NO','$PATIENT_NAME','$PATIENT_PASSWORD','$PATIENT_CONTACT_NO','$PATIENT_EMAIL','$PATIENT_GENDER','$PATIENT_DOB','$PATIENT_BLOOD_GROUP','$PATIENT_HEIGHT','$PATIENT_WEIGHT','$PATIENT_METABOLIC_DISORDERS');";
if(mysqli_query($con,$sql_query))
{
	echo "Registration Sucessful....";
}
else
{
	echo "Registration Failed!!".mysqli_error($con);
}


?>