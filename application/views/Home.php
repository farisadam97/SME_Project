<!DOCTYPE html>

<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			iKnow | SME
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<style>
			m-portlet {padding-left=15px;padding-right=15px;}
			/* m-portlet-body {padding= 2.2rem 2.2rem;} */
			
		</style>
		<!--end::Web font -->
        <!--begin::Base Styles -->  
        <!--begin::Page Vendors -->
		
		<!--end::Page Vendors -->
		<link href=<?php echo base_url('assets/css/vendors.bundle.css') ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo base_url('assets/css/style.bundle.css') ?> rel="stylesheet" type="text/css" />
		<!-- <link href=<?php //echo base_url('assets/css/style.bundle.css') ?> rel="stylesheet" type="text/css" />
		<link href=<?php //echo base_url('assets/css/fontawesome.min.css') ?> rel="stylesheet" type="text/css" />
		<link href=<?php //echo base_url('assets/css/fontawesome.css') ?> rel="stylesheet" type="text/css" />
		<link href=<?php //echo base_url('assets/css/fontawesome-all.min.css') ?> rel="stylesheet" type="text/css" />
		<link href=<?php //echo base_url('assets/css/fa-svg-with-js.css') ?> rel="stylesheet" type="text/css" /> -->
		<!--end::Base Styles -->
		<link rel="shortcut icon" href=<?php echo base_url("assets/img/iKnow-icon.png") ?> />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header "  m-minimize-offset="200" m-minimize-mobile-offset="200" >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="index.html" class="m-brand__logo-wrapper">
										<img alt="" src=<?php echo base_url("assets/img/iKnow2ee.png") ?> />
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block 
					 ">
										<span></span>
									</a>
									<!-- END -->
							<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
							<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
			<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>
									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>
						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<!-- begin Header -->
							<?php include 'Header.php' ?>
							<!-- end Header -->
											<!-- begin::Body -->
											<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
												<!-- BEGIN: Left Aside -->
												<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
													<i class="la la-close"></i>
												</button>
												<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
													<!-- BEGIN: Aside Menu -->
													<?php include 'LeftMenu.php' ?>
													<!-- END: Aside Menu -->
												</div>
												<!-- END: Left Aside -->
												<div class="m-grid__item m-grid__item--fluid m-wrapper">
													<!-- BEGIN: Subheader -->
													<div class="m-subheader ">
														<div class="d-flex align-items-center">
															<div class="mr-auto">
																<h2 class="m-subheader__title ">
																	Home 
																</h2>
															</div>
														</div>
													</div>
													<!-- END: Subheader -->

													<div class="m-content">
														<?php foreach ($rank as $l) { ?>
														<!--begin:: Widgets/Stats-->
														<div class="m-portlet ">
															<div class="m-portlet__body  m-portlet__body--no-padding">
																<div class="row m-row--no-padding m-row--col-separator-xl">
																	<div class="col-md-12 col-lg-6 col-xl-3">
																		<!--begin::Total Profit-->
																		<div class="m-widget24">
																			<div class="m-widget24__item">
																				<h4 class="m-widget24__title">
																					Questions
																				</h4>
																				<br>
																				<span class="m-widget24__desc">
																					This Month <!-- echo this month -->
																				</span>
																				<span class="m-widget24__stats m--font-brand">
																					<?php 	$question = $l['question'];
																							$persen = 100;
																							$target = 30;
																					?>
																					<?php echo $question ?>
																				</span>
																				<div class="m--space-10"></div>
																				<div class="progress m-progress--sm">
																					<div class="progress-bar m--bg-brand" role="progressbar" style="width: <?php echo ($question/$target)*$persen; ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																				</div>
																				<span class="m-widget24__change">
																					Target
																				</span>
																				<span class="m-widget24__number">
																					30 Times
																				</span>
																			</div>
																		</div>
																		<!--end::Total Profit-->
																	</div>
																	<div class="col-md-12 col-lg-6 col-xl-3">
																		<!--begin::New Feedbacks-->
																		<div class="m-widget24">
																			<div class="m-widget24__item">
																				<h4 class="m-widget24__title">
																					Answers
																				</h4>
																				<br>
																				<span class="m-widget24__desc">
																					This Month <!-- echo this month -->
																				</span>
																				<span class="m-widget24__stats m--font-info">
																					<?php 	$answer = $l['answer'];
																							$persen = 100;
																							$target = 30;
																					?>
																					<?php echo $answer ?>
																				</span>
																				<div class="m--space-10"></div>
																				<div class="progress m-progress--sm">
																					<div class="progress-bar m--bg-info" role="progressbar" style="width: <?php echo ($answer/$target)*$persen; ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																				</div>
																				<span class="m-widget24__change">
																					Target
																				</span>
																				<span class="m-widget24__number">
																					30 Times
																				</span>
																			</div>
																		</div>
																		<!--end::New Feedbacks-->
																	</div>
																	<div class="col-md-12 col-lg-6 col-xl-3">
																		<!--begin::New Orders-->
																		<div class="m-widget24">
																			<div class="m-widget24__item">
																				<h4 class="m-widget24__title">
																					Login
																				</h4>
																				<br>
																				<span class="m-widget24__desc">
																					This Month <!-- echo this month -->
																				</span>
																				<span class="m-widget24__stats m--font-danger">
																					<?php 	$login = $l['login'];
																							$persen = 100;
																							$target = 30;
																					?>
																					<?php echo $login;?>
																				</span>
																				<div class="m--space-10"></div>
																				<div class="progress m-progress--sm">
																					<div class="progress-bar m--bg-danger" role="progressbar" style="width: <?php echo ($login/$target)*$persen; ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																				</div>
																				<span class="m-widget24__change">
																					Target
																				</span>
																				<span class="m-widget24__number">
																					30 Times
																				</span>
																			</div>
																		</div>
																		<!--end::New Orders-->
																	</div>
																	<div class="col-md-12 col-lg-6 col-xl-3">
																		<!--begin::New Users-->
																		<div class="m-widget24">
																			<div class="m-widget24__item">
																				<h4 class="m-widget24__title">
																					Ranking 
																				</h4>
																				<br>
																				<span class="m-widget24__desc">
																					This Month <!-- echo this month -->
																				</span>
																				<br>
																				<a href="" class="btn m-btn m-btn--icon btn-lg m-btn--icon-only" data-toggle="modal" data-target="#m_modal_6" title="leaderboard" style="margin: 58px 0px 0px 10px;">
																					<i><img src="<?php echo base_url('assets/img/ranking.svg')?>" style="width: 40px; height: auto;"></i>
																				</a>
																				<span class="m-widget24__stats m--font-warning">
																					<?php if($l['rank']==1){ ?>
																						<img src="<?php echo base_url('assets/img/first.svg') ?>" style="width: 120px; height: auto;">
																					<?php }elseif($l['rank']==2){ ?>
																						<img src="<?php echo base_url('assets/img/second.svg') ?>" style="width: 120px; height: auto;">
																					<?php }elseif($l['rank']==3){ ?>
																						<img src="<?php echo base_url('assets/img/third.svg') ?>" style="width: 120px; height: auto;">
																					<?php }else{ 
																						echo 'Unranked' ?>
																						<br>
																						<span>
																							<img src="<?php echo base_url('assets/img/winner.svg') ?>" style="width: 60px; height: auto;">
																						</span>
																					
																					
																				</span>


																				<!-- <div class="m--space-10"></div>
																				<div class="progress m-progress--sm">
																					<div class="progress-bar m--bg-warning" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																				</div>
																				<span class="m-widget24__change">
																					Percentile
																				</span>
																				<span class="m-widget24__number">

																				</span> -->
																				<?php } ?>
																			</div>
																		</div>
																		<!--end::New Users-->
																	</div>
																</div>
															</div>
														</div>
														<?php }?>
														<!--end:: Widgets/Stats--> 



														<!--Begin::Section Experts-->
														<div class="m-portlet" >
															<div class="m-portlet__head" >
																<div class="m-portlet__head-caption">
																	<div class="m-portlet__head-title">
																		<h3 class="m-portlet__head-text">
																			Experts
																		</h3>
																	</div>
																</div>
															</div>
															<div class="m-portlet-body" style="padding: 2.2rem 2.2rem;">
																<div class="row">
																	<?php foreach ($data1 as $a) { ?>
																	<div class="col-xl-3" >
																		<!--begin:: Widgets/Blog-->
																		
																		<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force">
																			<a href="<?php echo base_url()."index.php/Experts/item/". $a['nipp']?>">
																			<div class="m-portlet__body" style="">
																				<div class="m-widget19" >
																					<div class="m-widget19__content">
																						<div class="m-widget19__header" style="margin: 0 auto 0 auto;align-content:centre;">
																							<div class="m-widget19__user-img" >
																								<img class="m-widget19__img" src="<?php echo base_url(). "assets/img/man.png" ?>" alt="" style="margin-top: 10px;margin-bottom: 20px;width: 100px; height: 100px;">
																							</div>
																						</div>
																						<div class="m-widget19__body" style="text-align:center;">
																							<h5><?php echo $a['nama_sme']; ?></h5>
																						</div>
																					</div>
																					<!-- <div class="m-widget19__action">
																						<button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
																							Read More
																						</button>
																					</div> -->
																				</div>
																			</div>
																		</a>
																		</div>
																		<!--end:: Widgets/Blog-->
																	</div>
																	<?php } ?>
																</div>
																
																<div class="row">
		  															<div class="col-xl-3">
																	</div>
																	<div class="col-xl-3">
																	</div>
																	<div class="col-xl-3">
																	</div>
																	<div class="col-xl-3" style="text-align:right;">
																		<a href="<?php echo base_url("Experts") ?>">
																			<button type="button" class="btn btn-outline-accent m-btn m-btn--custom">
																				Show More..
																			</button>
																		</a>
																	</div>
																</div>
															</div>
														</div>
														<!--End::Section-->
														<!--Begin::Section-->
														<div class="m-portlet" >
															<div class="m-portlet__head" >
																<div class="m-portlet__head-caption">
																	<div class="m-portlet__head-title">
																		<h3 class="m-portlet__head-text">
																			Knowledges
																		</h3>
																	</div>
																</div>
															</div>
															<div class="m-portlet-body" style="padding: 2.2rem 2.2rem;">
																	<!--begin: Datatable -->
																<div class="row">
																	<div class="col-sm-12">
																		<div class="row">
																			<table class="table table-striped html-table table-bordered table-hover" >
																				<thead>
																					<tr>
																						<th title="No" style="text-align: center;">
																							No
																						</th>
																						<th title="Nama Ilmu" style="text-align: center;">
																							Ilmu
																						</th>
																						<th title="Nama Topik" style="text-align: center;">
																							Sub Ilmu
																						</th>
																						<th title="Nama Expert" style="text-align: center;">
																							Experts
																						</th>
																						<th title="Action" style="text-align: center;">
																							Action
																						</th>
																					</tr>
														                            </thead>
														                            <tbody>
														                            <?php $i=0; foreach ($data7 as $b) { $i++ ?>
														                                <tr>
														                                    <td><?php echo $b['id_pengetahuan']; ?></td>
														                                    <td><?php echo $b['nama_pengetahuan']; ?></td>
														                                    <td><?php $topik = array_unique(explode(";", $b['topik'])); ?>
														                                    <ul>
														                                    <?php foreach ($topik as $topikk)
														                                    {
														                                    	echo '<li>'. $topikk. '</li>';
														                                    }
														                                    ?>
														                                	</ul>
														                                    </td>

														                                    <td>
														                                    	<div class="m-portlet__body">
																									<div class="m-list-search">
																										<div class="m-list-search__results">
																										<?php $experts = array_unique(explode(";", $b['expert'])); ?>
																										<?php $experts2 = array_unique(explode(";", $b['nippsme'])); ?>
																											<?php $i=0; foreach ($experts as $expert) { ?>
																			 									<a href="<?php echo base_url()."Experts/item/". $experts2[$i]; ?>" class="m-list-search__result-item">
																												<span class="m-list-search__result-item-pic">
																													<img class="m--img-rounded" src="<?php echo base_url("assets/img/man.png"); ?>" title="">
																												</span>
																												<span class="m-list-search__result-item-text">
																						                            <?php
																						                               	echo $expert;	
																				                                 	?>
																												</span>
																												</a>

																											<?php $i++; ?>
																											<?php } ?>

																											
																	                                    </div>
																									</div>
																								</div>
														                                   		
														                                    </td>
														                                    
														                                    <td style="vertical-align: middle;">
														                                    	<div style="text-align: center;">
																									<a href="<?php echo base_url()."Knowledge/item/". $b['id_pengetahuan']?>" class="btn btn-info m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air">
																										<i class="fa flaticon-eye"></i>
																									</a>
																								</div>
																							</td>
																					</tr>									
																				<?php } ?>															                        
																				</tbody>
																			</table>	
																		</div>
																	</div>
																</div>
																<div class="row" style="ma">
																	<div class="col-xl-3">
																	</div>
																	<div class="col-xl-3">
																	</div>
																	<div class="col-xl-3">
																	</div>
																	<div class="col-xl-3" style="text-align:right;">
																		<a href="<?php echo base_url("Knowledge") ?>">
																			<button type="button" class="btn btn-outline-accent m-btn m-btn--custom">
																				Show More..
																			</button>
																		</a>
																	</div>
																</div>
															</div>
														</div>
														<!--End::Section-->
														<!--begin::Modal-->
														<div class="modal fade" id="m_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
															<div class="modal-dialog modal-dialog-centered" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<div class="col-xl-12">
																		<!--begin:: Widgets/New Users-->
																			<div class="m-portlet m-portlet--full-height ">
																				<div class="m-portlet__head">
																					<div class="m-portlet__head-caption">
																						<div class="m-portlet__head-title">
																							<h3 class="m-portlet__head-text">
																								Leaderboard!
																							</h3>
																						</div>
																					</div>
																					<div class="m-portlet__head-tools">
																						<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
																							<li class="nav-item m-tabs__item">
																								
																							</li>
																							<li class="nav-item m-tabs__item">
																								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																									<span aria-hidden="true">
																										&times;
																									</span>
																								</button>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<?php foreach ($leaderboard as $leader) { ?>
																				<div class="m-portlet__body">
																					<div class="tab-content">
																						<div class="tab-pane active" id="m_widget4_tab1_content">
																							<!--begin::Widget 14-->
																							<div class="m-widget4">
																								<!--begin::Widget 14 Item-->
																								<div class="m-widget4__item">
																									<?php
																									switch ($leader['rank']) {

																									    case $leader['rank']==1:
																									        echo 
																									        "<div class='m-widget4__ext'>
																												<a href='#'  class='m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-warning' style='pointer-events: none;'>
																													1
																												</a>
																											</div>";
																									        break;
																									    case $leader['rank']==2:
																									        echo 
																									        "<div class='m-widget4__ext'>
																												<a href='#'  class='m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-accent' style='pointer-events: none;'>
																													2
																												</a>
																											</div>";
																									        break;
																									    case $leader['rank']==3:
																									        echo 
																									        "<div class='m-widget4__ext'>
																												<a href='#'  class='m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-danger' style='pointer-events: none;'>
																													3
																												</a>
																											</div>";
																									        break;
																									    case $leader['rank']==4:
																									        echo 
																									        "<div class='m-widget4__ext'>
																												<a href='#'  class='m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-outline-metal' style='pointer-events: none;'>
																													4
																												</a>
																											</div>";
																											break;
																										case $leader['rank']==5:
																									        echo 
																									        "<div class='m-widget4__ext'>
																												<a href='#'  class='m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-outline-metal' style='pointer-events: none;'>
																													5
																												</a>
																											</div>";
																											break;
																										case $leader['rank']==6:
																									        echo 
																									        "<div class='m-widget4__ext'>
																												<a href='#'  class='m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-outline-metal' style='pointer-events: none;'>
																													6
																												</a>
																											</div>";
																											break;
																										case $leader['rank']==7:
																									        echo 
																									        "<div class='m-widget4__ext'>
																												<a href='#'  class='m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-outline-metal' style='pointer-events: none;'>
																													7
																												</a>
																											</div>";
																											break;
																										case $leader['rank']==8:
																									        echo 
																									        "<div class='m-widget4__ext'>
																												<a href='#'  class='m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-outline-metal' style='pointer-events: none;'>
																													8
																												</a>
																											</div>";
																											break;
																										case $leader['rank']==9:
																									        echo 
																									        "<div class='m-widget4__ext'>
																												<a href='#'  class='m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-outline-metal' style='pointer-events: none;'>
																													9
																												</a>
																											</div>";
																											break;
																										case $leader['rank']==10:
																									        echo 
																									        "<div class='m-widget4__ext'>
																												<a href='#'  class='m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-outline-metal' style='pointer-events: none;'>
																													10
																												</a>
																											</div>";
																											break;
																										default:
																										echo 
																									        "<div class='m-widget4__ext'>
																												<a href='#'  class='m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary' style='pointer-events: none;'>
																													0
																												</a>
																											</div>";

																									    
																									} 
																									?>
																									<div class="m-widget4__ext">
																										<span class="m-widget4__title">
																											&nbsp;
																										</span>
																									</div>
																									<div class="m-widget4__img m-widget4__img--pic">
																										<img src="<?php echo base_url('assets/img/user4.jpg') ?>" alt="">
																									</div>
																									<div class="m-widget4__info">
																										<span class="m-widget4__title">
																											<?php echo $leader['nama']; ?>

																										</span>
																										<br>
																										<span class="m-widget4__sub">
																											<?php echo $leader['nipp']; ?>
																										</span>
																									</div>
																								</div>
																								<!--end::Widget 14 Item-->
																							</div>
																							<!--end::Widget 14-->
																						</div>
																					</div>
																				</div>
																				<?php } ?>
																			</div>
																			<!--end:: Widgets/New Users-->
																		</div>
																	</div>
																	
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary" data-dismiss="modal">
																			Close
																		</button>
																	</div>
																</div>
															</div>
														</div>
													<!--end::Modal-->
													</div>
												</div>
											</div>
											<!-- end:: Body -->
											<!-- begin::Footer -->
											<?php include 'Footer.php' ?>
											<!-- end::Footer -->
										</div>
										<!-- end:: Page -->
    		        <!-- begin::Quick Sidebar -->
										<!-- <div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
											<div class="m-quick-sidebar__content m--hide">
												<span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
													<i class="la la-close"></i>
												</span>
												<ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
													<li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">
															Messages
														</a>
													</li>
													<li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link" 		data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
															Settings
														</a>
													</li>
													<li class="nav-item m-tabs__item">
														<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
															Logs
														</a>
													</li>
												</ul>
												
											</div>
										</div> -->
										<!-- end::Quick Sidebar -->		    
	    <!-- begin::Scroll Top -->
										<div id="m_scroll_top" class="m-scroll-top">
											<i class="la la-arrow-up"></i>
										</div>
										<!-- end::Scroll Top -->		    	
    	<!--begin::Base Scripts -->
										<script src=<?php echo base_url("assets/js/vendors.bundle.js") ?> type="text/javascript"></script>
										<script src=<?php echo base_url("assets/js/scripts.bundle.js") ?> type="text/javascript"></script>
										<!--end::Base Scripts -->   
       
       
										 <!--begin::Page Resources -->
										 <script src=<?php echo base_url("assets/js/metronic-datatable/base/html-table.js") ?> type="text/javascript"></script>
										<!--end::Page Resources -->
										<script src=<?php echo base_url("assets/js/datatables.bundle.js") ?> type="text/javascript"></script>
										<!--end::Page Vendors -->  
        <!--begin::Page Resources -->
										<script src=<?php echo base_url("assets/js/basic.js") ?> type="text/javascript"></script>
									</body>
									<!-- end::Body -->
								</html>
