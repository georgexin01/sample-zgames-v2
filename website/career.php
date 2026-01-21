<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // init head
    $pageName = 'Career';
    include('lib/htmlHead.php');
?>
</head>
<body>
<div class="moverspackers-main-wrapper">
<!-- header -->
<?php include('lib/header.php'); ?>

        <div class="moverspackers-subheader"style="background-image: url(/images/imgp/b_p15.jpg);">
            <span class="moverspackers-dark-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?= __('career.title'); ?></h1>
                        <ul class="moverspackers-breadcrumb">
                            <li><a href="/"><?= __('career.breadcrumb_home'); ?></a></li>
                            <li><?= __('career.breadcrumb_career'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		<div class="moverspackers-main-content moverspakers-faq-content">
			<div class="moverspackers-main-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
                            <div class="moverspackers-fancy-title">
                                <h2><?= __('career.join'); ?> <span><?= __('career.us'); ?></span></h2>
                                <p><?= __('career.description'); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel-group moverspakers-faq-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading1">
                                  <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1"><?= __('career.position_manager'); ?></a>
                                  </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                                  <div class="panel-body"><p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas venenatis, augue nec pretium or nare, ante mauris congue dui, eu porttitor enim ipsum non purus. Pellentesque sit amet feugiatma uris. Nam ultrices enim eu mattis cursus.</p></p></div>
                                  <div class="panel-body"><p><p>Pellentesque sit amet feugiatma uris. Nam ultrices enim eu mattis cursus.</p></p></div>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div style="margin-bottom: -20px;;" class="moverspackers-fancy-title">
                                <h2 ><?= __('career.job_application'); ?></h2>
                            </div>
                            <div class="col-md-12 col-md-12-custom custom-form" style="margin-bottom: 50px;">
                            	<form style="float: left; width: 100%;" id="jobForm" action="#" method="post">
                            		<label class="col-md-2"><?= __('career.name'); ?></label>
                            		<input class="col-md-10" type="text" name="name">
                            		<label class="col-md-2"><?= __('career.phone'); ?></label>
                            		<input class="col-md-10" type="text" name="contact">
                            		<label class="col-md-2"><?= __('career.email'); ?></label>
                            		<input class="col-md-10" type="email" name="email">

                                    <label class="col-md-2"><?= __('career.resume'); ?></label>
                            		<input class="col-md-10" type="file" name="attachment">

                                    <div class="col-md-12" style="padding:5"></div>
                            		<label class="col-md-2"><?= __('career.position'); ?></label>
                            		<select id="job-pos" name="pos" class="col-md-10" style="background-color: #f2f2f2; height: 30px; padding: 0 0; margin: 10px 0;">
                                        <option value="">--</option>
                                        <option value="manager"><?= __('career.position_manager'); ?></option>
                                    </select>
                                    <div class="col-md-12">
                                        <input type="submit" name="submit" value="<?= __('career.submit'); ?>">
                                    </div>
                            	</form>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
    <div class="clearfix"></div>

</div>

<!-- footer -->
<?php include('lib/footer.php'); ?>
<?php include('lib/htmlBody.php'); ?>
</body>
</html>
