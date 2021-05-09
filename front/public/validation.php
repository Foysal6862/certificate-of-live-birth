<?php
session_start();

$_SESSION['errors'] = array();
$messages = [];

//start child details
$_SESSION['errors']['child_first_name'] = $messages;
$_SESSION['errors']['child_middle_name'] = $messages;
$_SESSION['errors']['child_last_name'] = $messages;
$_SESSION['errors']['child_suffix'] = $messages;
$_SESSION['errors']['child_facility_name'] = $messages;
$_SESSION['errors']['child_city'] = $messages;
//end child details

//start child details
$child_first_name = null;
$child_middle_name = null;
$child_last_name = null;
$child_suffix = null;
$child_facility_name = null;
$child_city = null;
//end child details

function is_empty($strValue)
{
    if (!empty($strValue)) {
        return true;
    }
    return false;
}
function has_alpha($strValue)
{
    if (ctype_alpha($strValue)) {
        return true;
    }
    return false;
}

//start child validate function
function validate_child_first_name($child_first_name)
{
    $errors = [];
    if (!is_empty($child_first_name)) {
        // $errors[] = "Your child first name should not be empty.";
        $_SESSION['errors']['child_first_name'][] = "Your child first name should not be empty.";
    }
    if (!has_alpha($child_first_name)) {
        $_SESSION['errors']['child_first_name'][] = "Use alpha in your child first name.";
    }
    return $errors;
}
function validate_child_middle_name($child_middle_name)
{
    $errors = [];
    if (!is_empty($child_middle_name)) {
        $_SESSION['errors']['child_middle_name'][] = "Your child middle name should not be empty.";
    }
    if (!has_alpha($child_middle_name)) {
        $_SESSION['errors']['child_middle_name'][] = "Use alpha in your child middle name";
    }
    return $errors;
}
function validate_child_last_name($child_last_name)
{
    $errors = [];
    if (!is_empty($child_last_name)) {
        $_SESSION['errors']['child_last_name'][] = "Your child last name should not be empty.";
    }
    if (!has_alpha($child_last_name)) {
        $_SESSION['errors']['child_last_name'][] = "Use alpha in your child last name";
    }
    return $errors;
}
function validate_child_suffix($child_suffix)
{
    $errors = [];
    if (!is_empty($child_suffix)) {
        $_SESSION['errors']['child_suffix'][] = "Your child suffix should not be empty.";
    }
    if (!has_alpha($child_suffix)) {
        $_SESSION['errors']['child_suffix'][] = "Use alpha in your child suffix";
    }
    return $errors;
}
function validate_child_facility_name($child_facility_name)
{
    $errors = [];
    if (!is_empty($child_facility_name)) {
        $_SESSION['errors']['child_facility_name'][] = "Your facility name should not be empty.";
    }
    if (!has_alpha($child_facility_name)) {
        $_SESSION['errors']['child_facility_name'][] = "Use alpha in your child facility name.";
    }
    return $errors;
}
function validate_child_city($child_city)
{
    $errors = [];
    if (!is_empty($child_city)) {
        $_SESSION['errors']['child_city'][] = "Your city should not be empty.";
    }
    if (!has_alpha($child_city)) {
        $_SESSION['errors']['child_city'][] = "Use alpha in your city.";
    }
    return $errors;
}
//end child validate function

//start child display validation errors function
function display_validation_errors_child_first_name($errors)
{
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>" . $error . "</li>";
    }
    echo "</ul>";
}
function display_validation_errors_child_middle_name($errors)
{
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>" . $error . "</li>";
    }
    echo "</ul>";
}
function display_validation_errors_child_last_name($errors)
{
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>" . $error . "</li>";
    }
    echo "</ul>";
}
function display_validation_errors_child_suffix($errors)
{
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>" . $error . "</li>";
    }
    echo "</ul>";
}
function display_validation_errors_child_facility_name($errors)
{
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>" . $error . "</li>";
    }
    echo "</ul>";
}
function display_validation_errors_child_city($errors)
{
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>" . $error . "</li>";
    }
    echo "</ul>";
}
//end child display validation errors function

if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {

    //start child
    if (array_key_exists('child_first_name', $_POST)) {
        $child_first_name = $_POST['child_first_name'];
    }
    $errors = validate_child_first_name($child_first_name);
    if (count($errors) > 0) {
        display_validation_errors_child_first_name($errors);
    }
    if (array_key_exists('child_middle_name', $_POST)) {
        $child_middle_name = $_POST['child_middle_name'];
    }
    $errors = validate_child_middle_name($child_middle_name);
    if (count($errors) > 0) {
        display_validation_errors_child_middle_name($errors);
    }
    if (array_key_exists('child_last_name', $_POST)) {
        $child_last_name = $_POST['child_last_name'];
    }
    $errors = validate_child_last_name($child_last_name);
    if (count($errors) > 0) {
        display_validation_errors_child_last_name($errors);
    }
    if (array_key_exists('child_suffix', $_POST)) {
        $child_suffix = $_POST['child_suffix'];
    }
    $errors = validate_child_suffix($child_suffix);
    if (count($errors) > 0) {
        display_validation_errors_child_suffix($errors);
    }
    if (array_key_exists('child_facility_name', $_POST)) {
        $child_facility_name = $_POST['child_facility_name'];
    }
    $errors = validate_child_facility_name($child_facility_name);
    if (count($errors) > 0) {
        display_validation_errors_child_facility_name($errors);
    }
    if (array_key_exists('child_city', $_POST)) {
        $child_city = $_POST['child_city'];
    }
    $errors = validate_child_city($child_city);
    if (count($errors) > 0) {
        display_validation_errors_child_city($errors);
    }
    //end child


    header('location:index.php');
}
