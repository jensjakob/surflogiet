<?php
function load_css_and_js() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'load_css_and_js' );

function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'title-tag' );

add_action( 'wp_ajax_sendActivityEmail', 'sendActivityEmail' );
add_action( 'wp_ajax_nopriv_sendActivityEmail', 'sendActivityEmail' );

function sendActivityEmail() {
	header('Content-Type: application/json');

	$activity = $_POST['activity'];
	$date = $_POST['date'];
	$people = $_POST['people'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$message = $message . "\r\n\r\n" .
	'Aktivitet: '. $activity . "\r\n" .
	'Deltagare: '. $people . "\r\n" .
	'Datum: '. $date . "\r\n\r\n" .
	'Namn: '. $name . "\r\n" .
	'E-mail: '. $email . "\r\n" .
	'Telefon: '. $phone . "\r\n";

	// $to = get_option('admin_email');
	$to = "info@surflogiet.se";
	$subject = "surflogiet.com " . $name;
	$headers = 'From: '. $to . "\r\n" .
	'Reply-To: ' . $email . "\r\n";

	$sent = wp_mail($to, $subject, strip_tags($message), $headers);

	if($sent) {
		echo json_encode(array(
			'status' => 'OK',
		));
		wp_die();
	} else {
		echo json_encode(array(
			'status' => 'error',
		));
		wp_die();
	}
}

add_action( 'wp_ajax_sendEventEmail', 'sendEventEmail' );
add_action( 'wp_ajax_nopriv_sendEventEmail', 'sendEventEmail' );

function sendEventEmail() {
	header('Content-Type: application/json');

	$company = $_POST['company'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$message = $message . "\r\n\r\n" .
	'Företag: ' . $company . "\r\n" .
	'Kontaktperson: ' . $name . "\r\n" .
	'E-post: ' . $email . "\r\n" .
	'Telefon: ' . $phone . "\r\n";

	// $to = get_option('admin_email');
	$to = "mattias@surflogiet.se";
	$subject = "surflogiet.com " . $company;
	$headers = 'From: '. $to . "\r\n" .
	'Reply-To: ' . $email . "\r\n";

	$sent = wp_mail($to, $subject, strip_tags($message), $headers);

	if($sent) {
		echo json_encode(array(
			'status' => 'OK',
		));
		wp_die();
	} else {
		echo json_encode(array(
			'status' => 'error',
		));
		wp_die();
	}
}

add_action( 'wp_ajax_sendMassageEmail', 'sendMassageEmail' );
add_action( 'wp_ajax_nopriv_sendMassageEmail', 'sendMassageEmail' );

function sendMassageEmail() {
	header('Content-Type: application/json');

	$length = $_POST['length'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$message = $message . "\r\n\r\n" .
	'Längd: '. $length . "\r\n" .
	'Datum: '. $date . "\r\n" .
	'Tid: '. $time . "\r\n\r\n" .
	'Namn: '. $name . "\r\n" .
	'E-mail: '. $email . "\r\n" .
	'Telefon: '. $phone . "\r\n";

	// $to = get_option('admin_email');
	$to = "kattis@surflogiet.se";
	$subject = "surflogiet.com " . $name;
	$headers = 'From: '. $to . "\r\n" .
	'Reply-To: ' . $email . "\r\n";

	$sent = wp_mail($to, $subject, strip_tags($message), $headers);

	if($sent) {
		echo json_encode(array(
			'status' => 'OK',
		));
		wp_die();
	} else {
		echo json_encode(array(
			'status' => 'error',
		));
		wp_die();
	}
}
?>