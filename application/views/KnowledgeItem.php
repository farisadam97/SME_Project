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
		<!--end::Web font -->
        <!--begin::Base Styles -->  
        <!--begin::Page Vendors -->
		<!--end::Page Vendors -->
		<link href=<?php echo base_url('assets/css/vendors.bundle.css') ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo base_url('assets/css/style.bundle.css') ?> rel="stylesheet" type="text/css" />
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
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block">
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
                                                    <div class="m-content">
														<div class="row">
															<div class="col-md-12">
																<div class="m-portlet m-portlet--responsive-mobile m-portlet--warning m-portlet--head-solid-bg m-portlet--bordered">	
																	<div class="m-portlet__head">
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<span class="m-portlet__head-icon">
																					<i class="flaticon-light"></i>
																				</span>
																				<h3 class="m-portlet__head-text">
																					<?php echo $data8[0]['nama_pengetahuan']; ?>
																				</h3>
																			</div>
																		</div>
																	</div>

																	<div class="m-portlet__body">
																		<a class="flaticon-info"><?php echo " ".$data8[0]['definisi_pengetahuan']; ?></a>
																	</div>

																	<div class="m-portlet__body">
																		<h2>
																			Sub Ilmu
																		</h2>
																		
													                            <?php $i=0; foreach ($data8 as $topikk) { ?>
													                    <ul>
																			<li>            	
													                            <?php echo $topikk['topik']. '<br>'; 
													                            ?>  
																			</li>
																		</ul>

																		<?php } ?>

																	</div>
																	<div class="m-portlet__body">
																		<h2>
																			Experts
																		</h2>	
																	</div>
																	<div class="m-portlet__body">
																		<div class="m-list-search">
																			<div class="m-list-search__results">
																				<?php foreach ($data9 as $j) { ?>
																				<?php $experts = explode(";", $j['expert']); ?>
																				<?php $experts2 = explode(";", $j['nippsme']); ?>
																				<?php foreach ($experts as $expert) { ?>
																				<a href="<?php echo base_url()."index.php/Experts/item/". $experts2[$i]; ?>" class="m-list-search__result-item">

																					<span class="m-list-search__result-item-pic">
																						<img class="m--img-rounded" src=<?php echo base_url("assets/img/user4.jpg"); ?> title="">
																					</span>
																					<span class="m-list-search__result-item-text">
															                            <?php
															                               	echo $expert. '<br>';
															                               	$i++;
													                                 	?>
																					</span>
																						<?php } ?>
																				<?php } ?>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
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
        <!--begin::Page Vendors -->
										
										<!--end::Page Vendors -->  
        <!--begin::Page Snippets -->
										
										<!--end::Page Snippets -->
										 <!--begin::Page Resources -->
										 
										<!--end::Page Resources -->
									</body>
									<!-- end::Body -->
								</html>