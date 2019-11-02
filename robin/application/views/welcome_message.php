<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='//fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .path-2-path-3-mask {height: 539px;background-image: url('/wp-content/uploads/2019/06/Post-a-Job_banner-1.png');background-size: cover;background-repeat: no-repeat;}
        .group-2 {    width: 100%;padding: 3% 0px 0px 0px;}
        .design-manager-bran {height: 29px;    width: 100%;color: #515151;font-family: 'Lato', sans-serif !important;font-size: 24px;line-height: 29px;}
        .we-re-looking-for-a {    height: 57px;width: 496px;color: #888888;font-family: 'Lato', sans-serif !important;font-size: 16px;line-height: 19px;}
    	.job-location {	height: 19px;	width: 36px;	color: #6D6E70;	font-family: 'Lato', sans-serif !important;	font-size: 16px;	line-height: 19px;	text-align: right;}
		.ic-chevron-left {	height: 12px;	width: 8px;}
		.company_name {	height: 19px;	width: 100%;	color: #888888;	font-family: 'Lato', sans-serif !important;	font-size: 16px;	font-weight: bold;	line-height: 19px;}
		.company-logo-m-box-880-x-660 {	height: 153px;	width: 153px;}
		.weeks-ago {	height: 19px;	width: 100%;	color: #B5B5B5;	font-family: 'Lato', sans-serif !important;	font-size: 16px;	font-style: italic;	line-height: 19px;}
		.hr-line-dashed {border-top: 1px solid #e7eaec;color: #ffffff;background-color: #ffffff;height: 1px;margin: 1% 13%;}
		.mask {	height: 153px;	width: 153px;	border-radius: 8px;	background-color: #F9F9F9;}
		.rectangle-3 {	height: 40px;	width: 130px;	border-radius: 2px;	background-color: #F7992B;}
		.lorem-ipsum-is-simpl {	height: 48px;	width: 616px;	color: #FFFFFF;	font-family: 'Lato', sans-serif !important;	font-size: 40px;	font-weight: bold;	line-height: 48px;	text-align: center;}
		/*.pagination li{font-size: larger;}
		.pagination li >a{margin: 66% !important;}*/
		li {padding: 1px 7px;font-size: large;font-weight: bold;}
		li a{color: #515151;}
		li.active a{color: #F7992B;}
	</style>
</head>
<body>

<div id="container" style="overflow: hidden;">
	<div class="row path-2-path-3-mask">
		<div class="col-sm-3 col-md-3 col-lg-3"></div>
		<div class="col-sm-6 col-md-6 col-lg-6" style="padding-top: 23%;">
			<form method="POST" class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 lorem-ipsum-is-simpl">
					Interview now for your dream job
				</div>
			</form>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2"></div>
	</div>
	<?php foreach ($response as $key) { ?>
		<div class="row group-2">
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
			<div class="col-sm-2 col-md-2 col-lg-2" style="text-align: center;padding: 0px 3%;">
				<div class="mask" style="background-image: url('/wp-content/uploads/2019/07/Hot-Jobs.png'); background-size: cover;background-repeat: no-repeat;">
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6 job-discripation">
				<div>
				<h3 class="design-manager-bran"><?php echo $key['title']; ?></h3>
				<h5 class="company_name"><?php echo $key['company']; ?></h5>
				<h6 class="we-re-looking-for-a"><?php echo substr(strip_tags($key['description']), 0, 200);?> …</h6>
				<p class="weeks-ago"> 2 weeks ago</p>
				<!-- <p class="weeks-ago"> <?php echo round((date('Y-m-d') - date('Y-m-d',strtotime($key['createdOn']))) / (60 * 60 * 24)); ?> day ago</p> -->
				</div>
			</div>
			<div class="col-sm-2 col-md-2 col-lg-2 job-location">
				<?php if(count($key['locations']) > 1){ echo "Multiple Locations"; }else{ echo "".$key['locations'][0]['city'].""; } ?> &nbsp
				<a href="<?php echo site_url('welcome/job_details/'.$key['code']) ?>" target="_blank"><i class="fa fa-chevron-right" style="color:#515151;"></i></a>
			</div>
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
		</div>
			<div class="hr-line-dashed"></div>
	<?php } ?>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2"></div>
		<div class="col-sm-8 col-md-8 col-lg-8">

				<?php echo $pagination; ?>
		</div>
	</div>
</div>

</body>
</html>
