<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <link href='//fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

    <style type="text/css">
        .careers {    height: 15px;    width: 42px;    color: #2E2E2E;     font-family: 'Lato', sans-serif !important;    font-size: 12px;    line-height: 15px;}
    	.designer-manager {height: 15px;	width: 108px; 	color: #2E2E2E;	font-family: 'Lato', sans-serif !important;	font-size: 12px;	line-height: 15px;}
		.mask {	height: 153px;	width: 153px;	border-radius: 8px;	background-color: #F9F9F9;}
		.designer-manager-br {	height: 48px;	color: #515151;	font-family: 'Lato', sans-serif !important;	font-size: 40px;	font-weight: bold;	line-height: 48px;}
		.pune-india-full-ti {	height: 29px;	color: #888888;	font-family: 'Lato', sans-serif !important;	font-size: 24px;	font-weight: bold;	line-height: 29px;}
		.rectangle-3 {	height: 40px;	width: 130px;	border-radius: 2px;	background-color: #F7992B; border-color: #F7992B;}
		.rectangle-4 {	height: 40px;	width: 130px;	border: 1px solid #F7992B;	border-radius: 2px; background-color: #FFFFFF; color:#F7992B;}
		.description {	height: 17px;	width: 74px;	color: #515151;	font-family: 'Lato', sans-serif !important;	font-size: 14px;	font-weight: bold;	line-height: 17px;}
		.are-you-passionate-a {	height: auto;	width: 587px;	color: #6D6E70;	font-family: 'Lato', sans-serif !important;	font-size: 14px;	line-height: 20px;}
		.see-more {	height: 17px;	width: 56px;	color: #F7992B;	font-family: 'Lato', sans-serif !important;	font-size: 14px;	line-height: 17px;}
		.520935260 {	height: 270.21px;	width: 406px;	background-color: rgba(46,46,46,0.8);}
		.about-company {	height: 17px;	width: 100px;	color: #515151;	font-family: 'Lato', sans-serif !important;	font-size: 14px;	font-weight: bold;	line-height: 17px;}
		.are-you-passionate-a-copy {	height: auto;	width: 587px;	color: #6D6E70;	font-family: 'Lato', sans-serif !important;	font-size: 14px;	line-height: 20px;}
		.qualification-exper {	height: 17px; color: #515151;	font-family: 'Lato', sans-serif !important;	font-size: 14px;	font-weight: bold;	letter-spacing: 0.44px;	line-height: 17px;}
		.rectangle {	height: 90px;	width: 90px;	border-radius: 2px;	background-color: #F7992B;}
		.industry {	height: 17px;	width: 60px;	color: #515151;	font-family: 'Lato', sans-serif !important;	font-size: 14px;	font-weight: bold;	line-height: 17px;}
		.information-technolo {	height: 51px;	width: 147px;	color: #6D6E70;	font-family: 'Lato', sans-serif !important;	font-size: 14px;	line-height: 17px;}
		.job-function {	height: 17px;	width: 115px;	color: #515151;	font-family: 'Lato', sans-serif !important;	font-size: 14px;	font-weight: bold;	line-height: 17px;}
		.job-technolo {	height: 17px;	width: 145px;	color: #6D6E70;	font-family: 'Lato', sans-serif !important;	font-size: 14px;	line-height: 17px;}
		.software-engineer {	height: 17px;	width: 113px;	color: #6D6E70;	font-family: 'Lato', sans-serif !important;	font-size: 14px;	line-height: 17px;}
		.role {	height: 17px;	width: 29px;	color: #515151;	font-family: 'Lato', sans-serif !important;	font-size: 14px;	font-weight: bold;	line-height: 17px;}
		.overall-experience {	height: 17px;	width: 120px;	color: #515151;	font-family: 'Lato', sans-serif !important;	font-size: 14px;	font-weight: bold;	line-height: 17px;}
		.rectangle-q {	height: 72px;	border-radius: 2px;	background-color: #F7992B;}
		.a5-8-years {	height: 17px;	color: #6D6E70;	font-family: 'Lato', sans-serif !important;	font-size: 14px;	line-height: 17px;}
		span.mandaory {color: red;}
		label.error {color: red;font-size: smaller;}
		input.error{border: 1px solid red;}
	</style>
</head>
<body>

<div id="container" style="overflow: hidden;">
	<div class="row"  style="padding-top: 2%;">
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-9 col-md-9 col-lg-9 careers">
			Careers  &nbsp<span class="designer-manager"><i class="fas fa-chevron-right fa-sm"></i>  &nbsp <?php echo $response[0]['title']; ?></span>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2"></div>
	</div>
	<div class="row" style="padding-top: 2%;">
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-2 col-md-2 col-lg-2" style="text-align: left;">
			<div class="mask" style="background-image: url('/wp-content/uploads/2019/07/Hot-Jobs.png');background-size: cover;    background-repeat: no-repeat;">
			</div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6 job-discripation">
			<div>
				<h3 class="design-manager-br"><?php echo $response[0]['title']; ?></h3>
				<h5 class="pune-india-full-ti"><?php if(count($response[0]['locations']) > 1){ echo "Multiple Locations";}else{ echo "".$response[0]['locations'][0]['city'].""; } ?><!-- , India ( <?php echo $response[0]['jobType']; ?> ) --></h5>
			</div>
		</div>
		<div class="col-sm-1 col-md-1 col-lg-1">
			<button type="button" class="btn btn-primary btn-md rectangle-3" data-id="<?php echo $response[0]['code'].'*'.$response[0]['title'];?>" data-toggle="modal" data-target="#jobStd">Apply</button>
			<!-- <button class="btn btn-primary btn-md rectangle-3"></button> --><br><br>
			<button class="btn btn-primary btn-md rectangle-4">Share</button>
		</div>
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
	</div>
	<div class="row" style="padding-top: 2%;">
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-6 col-md-6 col-lg-6">
			<div>
				<h3 class="description">Descripation</h3>
				<h5 class="are-you-passionate-a"><?php echo $response[0]['description'].''; ?></h5>

				<h3 class="see-more"> </h3>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4" style="padding-left: 0px;margin-left: 0px;">
				<video height="270.21px" width="406px" controls>
				  <source src="movie.mp4" type="video/mp4">
				  <!-- <source src="movie.ogg" type="video/ogg"> -->
				</video>
		</div>
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
	</div>
	<div class="row" style="padding-top: 2%;">
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-9 col-md-9 col-lg-9">
			<div>
				<h3 class="about-company">About company</h3>
				<h5 class="are-you-passionate-a-copy"><?php echo $response[0]['companyDescription'].''; ?></h5>
            </div>
		</div>
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
	</div>
	<div class="row" style="padding-top: 2%;">
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-9 col-md-9 col-lg-9">
			<div>
				<h3 class="qualification-exper">Role and Industry</h3>
				<div class="row" style="margin-left: 0px; padding-top: 2%;">
					<div class="rectangle col-sm-1 col-mg-1 col-lg-1">
					</div>
					<div class="col-sm-2 col-mg-2 col-lg-2" style="padding-top: 1%;">
						<h2 class="industry">Industry</h2>
						<h3 class="information-technolo"><?php echo $response[0]['industries']; ?></h3>

					</div>
					<div class="col-sm-1 col-mg-1 col-lg-1">
					</div>
					<div class="rectangle col-sm-1 col-mg-1 col-lg-1">
					</div>
					<div class="col-sm-2 col-mg-2 col-lg-2" style="padding-top: 1%;">
						<h2 class="job-function">Job function</h2>
						<h3 class="job-technolo"><?php echo $response[0]['jobfunction']; ?> </h3>
					</div>
				</div>
				<div class="row" style="margin-left: 0px;padding-top: 2%;">
					<div class="rectangle col-sm-1 col-mg-1 col-lg-1">
					</div>
					<div class="col-sm-2 col-mg-2 col-lg-2" style="padding-top: 1%;">
						<h2 class="role">Role</h2>
						<h3 class="software-engineer"><?php echo $response[0]['role']; ?></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
	</div>
	<div class="row" style="padding-top: 4%;">
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-9 col-md-9 col-lg-9">
			<div>
				<h3 class="qualification-exper">Qualification, Experience and Skills</h3>
				<div class="row" style="margin-left: 0px;padding-top: 2%;">
					<div class="rectangle-q col-sm-1 col-mg-1 col-lg-1">
					</div>
					<div class="col-sm-11 col-mg-11 col-lg-11"  style="padding-top: 1%;">
						<h2 class="overall-experience">Overall experience</h2>
						<h6 class="a5-8-years">( <?php echo $response[0]['minExpInYears'] ?> - <?php echo $response[0]['maxExpInYears'] ?> years )s</h6>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
	</div>
	<div class="row" style="padding-top: 2%;">
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-9 col-md-9 col-lg-9">
			<div>
				<!-- <h3 class="qualification-exper">Skill & Experience  </h3> -->
				<div class="row" style="margin-left: 0px;">
					<div class="rectangle-q col-sm-1 col-mg-1 col-lg-1">
					</div>
					<div class="col-sm-11 col-mg-11 col-lg-11" style="padding-top: 1%;">
						<h2 class="overall-experience">Skill & Experience  </h2>
						<h6 class="a5-8-years"><?php echo $response[0]['skills']; ?></h6>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
	</div>
	<div class="row" style="padding-top: 2%;">
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-9 col-md-9 col-lg-9">
			<div>
				<!-- <h3 class="qualification-exper">Qualification, Experience and Skills</h3> -->
				<div class="row" style="margin-left: 0px;">
					<div class="rectangle-q col-sm-1 col-mg-1 col-lg-1">
					</div>
					<div class="col-sm-11 col-mg-11 col-lg-11" style="padding-top: 1%;">
						<h2 class="overall-experience">Soft skills</h2>
						<h6 class="a5-8-years"><?php echo $response[0]['softSkills']; ?></h6>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
	</div>
	<div class="row" style="padding-top: 2%;">
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-9 col-md-9 col-lg-9">
			<div>
				<!-- <h3 class="qualification-exper">Qualification, Experience and Skills</h3> -->
				<div class="row" style="margin-left: 0px;">
					<div class="rectangle-q col-sm-1 col-mg-1 col-lg-1">
					</div>
					<div class="col-sm-11 col-mg-11 col-lg-11" style="padding-top: 1%;">
						<h2 class="overall-experience">Qualification</h2>
						<h6 class="a5-8-years"><?php echo $response[0]['qualifications']; ?></h6>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
	</div>
	<div class="row" style="padding-top: 4%;">
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-9 col-md-9 col-lg-9">
			<div>
				<h3 class="qualification-exper">Requirement Details</h3>
				<div class="row" style="margin-left: 0px; padding-top: 2%;">
					<div class="rectangle col-sm-1 col-mg-1 col-lg-1">
					</div>
					<div class="col-sm-2 col-mg-2 col-lg-2" style="padding-top: 1%;">
						<h2 class="industry">Location</h2>
						<h3 class="information-technolo"><?php if(count($response[0]['locations']) > 1){ $someArray = $response[0]['locations']; $i = 1;foreach ($someArray as $key => $value) {  if($i == count($response[0]['locations'])){ echo $value["city"].""; }else{ echo $value["city"].", "; } $i++;} }else{ echo "".$response[0]['locations'][0]['city'].""; } ?></h3>
					</div>
					<div class="col-sm-1 col-mg-1 col-lg-1">
					</div>
					<div class="rectangle col-sm-1 col-mg-1 col-lg-1">
					</div>
					<div class="col-sm-2 col-mg-2 col-lg-2" style="padding-top: 1%;">
						<h2 class="job-function">Employment Type</h2>
						<h3 class="job-technolo"><?php echo $response[0]['jobType']; ?></h3>
					</div>
				</div>
				<div class="row" style="margin-left: 0px; padding-top: 2%;">
					<div class="rectangle col-sm-1 col-mg-1 col-lg-1">
					</div>
					<div class="col-sm-2 col-mg-2 col-lg-2" style="padding-top: 1%;">
						<h2 class="industry">Vacancy</h2>
						<h3 class="information-technolo"><?php echo $response[0]['vacancy']; ?></h3>
					</div>
					<div class="col-sm-1 col-mg-1 col-lg-1">
					</div>
					<div class="rectangle col-sm-1 col-mg-1 col-lg-1">
					</div>
					<div class="col-sm-2 col-mg-2 col-lg-2" style="padding-top: 1%;">
						<h2 class="job-function">Salary</h2>
						<h3 class="job-technolo"><?php echo $response[0]['minimumSalary']; ?> - <?php echo $response[0]['maxSalary']; ?> <?php echo $response[0]['salaryCurrencyType']; ?> / <?php echo $response[0]['salaryPeriod']; ?> </h3>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-1 col-md-1 col-lg-1"></div>
	</div>
	<div class="hr-line-dashed"></div>
	<div id="jobStd" class="modal fade" role="dialog">
  		<div class="modal-dialog">
		    <div class="modal-content">
		      	<div class="modal-header" style="padding: 0.8rem 1rem;">
		        	<h4 class="modal-title" style="font-size: large;">Applying for <span class="job_call"></span></h4>
		        	<button type="button" class="close" data-dismiss="modal">&times;</button>
		      	</div>
		      	<div class="modal-body">
		        	<form class="form-horizontal" role="form" id="stdRecords" method="POST" action="<?php echo site_url('Welcome/apply_job') ?>">
		        		 <div class="form-group" style="display: none;">
		        			<div class="row">
                            	<div class="col-sm-6">
                                	<label class="control-label">Job Code <span class="mandaory">*</span></label>
                                	<input type="text" placeholder="" name='stud_jdCode' class="form-control" readonly="">
                                </div>
                                <div class="col-sm-6">
                                	<label class="control-label">Source Type <span class="mandaory">*</span></label>
                                	<input type="text" placeholder="" name='stud_SourceType' class="form-control" value="<?php echo $sourceType;?>" readonly="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
		        			<div class="row">
                            	<div class="col-sm-6">
                                	<label class="control-label">First Name <span class="mandaory">*</span></label>
                                	<input type="text" placeholder="" name='stud_first' class="form-control" required="">
                                </div>
                                <div class="col-sm-6">
                                	<label class="control-label">Last Name <span class="mandaory">*</span></label>
                                	<input type="text" placeholder="" name='stud_last' class="form-control" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            	<div class="col-sm-6">
                            		<label class="control-label">Email <span class="mandaory">*</span></label>
                            		<input type="email" placeholder="" name="stud_email" class="form-control" required="">
                            	</div>
                            	<div class="col-sm-6">
                            		<label class="control-label">Dial Code & Mobile Number <span class="mandaory">*</span></label>
                            		<div class="row">
                            			<div class="col-sm-4">
		                            		<select name="stud_code" class="form-control" style="width:auto;padding: 0;">
		                            			<option value=""> Code</option>
		                            			<?php for ($i=1; $i <= 1000; $i++) { ?>
		                            				<option value="<?php echo $i; ?>"><?php echo "+".$i; ?></option>
		                            			<?php } ?>
		                            			<option value="61-8">+61-8</option>
		                            			<option value="1-242">+1-242</option>
		                            			<option value="1-246">+1-246</option>
		                            			<option value="1-264">+1-264</option>
		                            			<option value="1-268">+1-268</option>
		                            			<option value="1-284">+1-284</option>
		                            			<option value="1-340">+1-340</option>
		                            			<option value="1-345">+1-345</option>
		                            			<option value="1-441">+1-441</option>
		                            			<option value="1-473">+1-473</option>
		                            			<option value="1-649">+1-649</option>
		                            			<option value="1-664">+1-664</option>
		                            			<option value="1-670">+1-670</option>
		                            			<option value="1-671">+1-671</option>
		                            			<option value="1-684">+1-684</option>
		                            			<option value="1-758">+1-758</option>
		                            			<option value="1-767">+1-767</option>
		                            			<option value="1-784">+1-784</option>
		                            			<option value="1-787">+1-787</option>
		                            			<option value="1-808">+1-808</option>
		                            			<option value="1-809">+1-809</option>
		                            			<option value="1-868">+1-868</option>
		                            			<option value="1-869">+1-869</option>
		                            			<option value="1-876">+1-876</option>
		                            			<option value="5399">+5399</option>
		                            			<option value="8810">+8810</option>
		                            			<option value="8812">+8812</option>
		                            			<option value="8816">+8816</option>
		                            			<option value="8818">+8818</option>
		                            			<option value="88213">+88213</option>
		                            			<option value="88216">+88216</option>
		                            		</select>
	                            		</div>
	                            		<div class="col-sm-8">
	                            		<input type="text" placeholder="" name="stud_contact" class="form-control">
	                            	</div>
	                            	</div>
                            	</div>
                            </div>
                        </div>
			      	</div>
			      	<div class="modal-footer">
			        	<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
			        	<div class="form-group">
		                	<div class="col-sm-12">
		                    	<button class="btn btn-md btn-primary" type="submit" style="background-color: #F7992B;border-color: #F7992B;"><strong>Apply</strong></button>
		                    	<button class="btn btn-md btn-warning" type="reset"  style="background-color: #FFFFFF;border-color: #F7992B;"><strong>Reset</strong></button>
		                    </div>
		                </div>
			      	</div>
		      	</form>
		    </div>
	  </div>
	</div>
</div>
<script type="text/javascript">
	<?php if(isset($flash['active']) && $flash['active'] == 1){ ?>
        swal({
            title: "<?=$flash['title']?>",
            text: "<?=$flash['text']?>",
            type: "<?=$flash['type']?>",
        });
    <?php } ?>

	$('#jobStd').on('show.bs.modal', function(e) {
          var jd = $(e.relatedTarget).data('id');
          var jd_details = jd.split('*');
          $(e.currentTarget).find('input[name="stud_jdCode"]').val(jd_details[0]);
          $(e.currentTarget).find('.job_call').text(jd_details[1]);
    });
	$('#stdRecords').validate({
   		rules:{
   			stud_first:{
   				required:true
   			},
			stud_last:{
				required:true
			},
			stud_email:{
				required:true
			},
			stud_contact:{
				// required:true,
				digits:true,
				minlength:10,
				maxlength:10
			}
   		},
   		message:{

   		}
   	})

</script>

</body>
</html>
