<?php
/**
 * Header
 *
 *
 * @package CKRUtiltiies
 * @since 1.0.0
 * @author Chris Carr therealchriscarr.me
 */

?><!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="height=device-height,width=device-width, initial-scale=1.0" >
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

		<?php wp_head(); ?>
        <?php wp_enqueue_style('Bootstrap 4', get_template_directory_uri().'/assets/css/bootstrap.min.css'); ?>
        <?php wp_enqueue_style('Custom Styles', get_template_directory_uri().'/style.css'); ?>
	</head>

<body class="container-fluid">

		<?php
		wp_body_open();
		?>

		<header role="banner">
            <nav class="navbar navbar-expand-lg navbar-light static-top pb-2 border-bottom mb-3 align-content-center">

                <a href="<?php echo site_url() ?>" class="align-top"><div class="navbar-brand pr-5"><?php echo get_custom_logo() ?><?php  echo get_bloginfo( 'name' ) ?></div></a>

                <button class="navbar-toggler" type="button"
                        data-toggle="collapse"
                        data-target="#navbar-toggley"
                        aria-controls="navbar-toggley"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse text-center row" id="navbar-toggley">
                    <ul class="navbar-nav col-12 align-items-center">
                        <li class="nav-item nav-link col-2 align-self-center"><a href="<?php echo site_url() ?>/about" class="text-black-50">About Us</a></li>
                        <li class="nav-item nav-dropdown col-2">
                            <a class="nav-link" href="#" id="surveyDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Employees</a>
                            <div aria-labelledby="surveyDropdown" class="dropdown-menu">
                                <a href="<?php echo site_url() ?>/add_employee" class="text-black-50 dropdown-item">Add Employee</a>
                                <a href="<?php echo site_url() ?>/employees_edit" class="text-black-50 dropdown-item">Edit Existing Employee Info</a>
                                <a href="<?php echo site_url() ?>/delete_employee" class="text-black-50 dropdown-item">Manage Wages</a>
                                <a href="<?php echo site_url() ?>/delete_employee" class="text-black-50 dropdown-item">Payroll</a>
                            </div>
                        </li>
                        <li class="nav-item nav-link col-2"><a href="<?php echo site_url() ?>/services" class="text-black-50">Services Provided</a></li>
                        <li class="nav-item nav-link col-2"><a href="<?php echo site_url() ?>/portfolio" class="text-black-50">Portfolio</a></li>
                        <li class="nav-item nav-link col-2"><a href="<?php echo site_url() ?>/contact_us" class="text-black-50">Contact Us</a></li>
                    </ul>
                </div>

            </nav>
		</header><!-- #site-header -->
