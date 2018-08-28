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
		<link href=<?php echo base_url('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') ?> rel="stylesheet" type="text/css" />
		<!--end::Page Vendors -->
		<link href=<?php echo base_url('assets/vendors/base/vendors.bundle.css') ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo base_url('assets/demo/default/base/style.bundle.css') ?> rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href=<?php echo base_url("assets/demo/default/media/img/logo/favicon.ico") ?> />
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
										<img alt="" src="assets/demo/default/media/img/logo/logo_default_dark.png"/>
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
														<!--Begin::Section Hot Threads-->
														<div class="row">
															<div class="col-xl-6">
																<div class="m-portlet" >
																	<div class="m-portlet__head" >
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h3 class="m-portlet__head-text">
																					HOT THREADS! 
																				</h3>
																				<span style="margin-left: 5px;">
																				<i class="fa fa-fire"></i>
																				</span>
																			</div>
																		</div>
																	</div>
																	<div class="m-portlet-body" style="padding: 2.2rem 2.2rem;">
																		<div class="row">
																			<div class="col-xl-12" >
		  																		<!--Begin::Section-->
																				  <table class="table table-striped- table-bordered table-hover" >
																				  	<col width="85%">
  																					<col width="15%">
																					<tbody>
																						<tr>
																							<td>
																								[Studi Lingkungan] - Apa pengaruh dari pembuangan sam..
																							</td>
																							<td>
																								<i class="fa fa-eye"> 29<i>
																							</td>
																						</tr>
																						<tr>
																							<td>
																								[Studi Lingkungan] - Apa pengaruh dari pembuangan sam..
																							</td>
																							<td>
																								<i class="fa fa-eye"> 29<i>
																							</td>
																						</tr>
																						<tr>
																							<td>
																								[Studi Lingkungan] - Apa pengaruh dari pembuangan sam..
																							</td>
																							<td>
																								<i class="fa fa-eye"> 29<i>
																							</td>
																						</tr>
																						<tr>
																							<td>
																								[Studi Lingkungan] - Apa pengaruh dari pembuangan sam..
																							</td>
																							<td>
																								<i class="fa fa-eye"> 29<i>
																							</td>
																						</tr>
																					</tbody>
																				</table>
														<!--End::Section-->
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														<!--End::Section Hot Threads-->
														<!--Begin::Section SME of The Week-->
															<div class="col-xl-6">
																<div class="m-portlet" >
																	<div class="m-portlet__head" >
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h3 class="m-portlet__head-text">
																					SME Of The Week
																				</h3>
																			</div>
																		</div>
																	</div>
																	<div class="m-portlet-body" style="padding: 2.2rem 2.2rem;">
																		<div class="row">
																			<div class="col-xl-12" >
																				<!--begin:: Widgets/Blog-->
																				<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force">
																					<div class="m-portlet__body col-xl-4">
																						<div class="m-widget19">
																							<div class="m-widget19__content">
																								<div class="m-widget19__header" style="margin: 0 auto 0 auto;">
																									<div class="m-widget19__user-img">
																										<img class="m-widget19__img" src="assets/app/media/img//users/user1.jpg" style="margin-top: 10px;margin-bottom: 20px;width: 100px; height: 100px;">
																									</div>
																								</div>
																								<div class="m-widget19__body col-xl-4" style="text-align:center;">
																									<h5> hlo hlo hlo hlo hlo </h5>
																								</div>
																							</div>
																							<!-- <div class="m-widget19__action">
																								<button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
																									Read More
																								</button>
																							</div> -->
																						</div>
																					</div>
																				</div>
																				<!--end:: Widgets/Blog-->
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!--End::Section SME of the Week-->
														<!--Begin::Section Topic Graph-->
														<div class="row">
															<div class="col-xl-6">
																<div class="m-portlet" >
																	<div class="m-portlet__head" >
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h3 class="m-portlet__head-text">
																					Topic's Graph 
																				</h3>
																			</div>
																		</div>
																	</div>
																	<div class="m-portlet-body" style="padding: 2.2rem 2.2rem;">
																		<div class="row">
																			<div class="col-xl-12" >
																				<!--begin:: Widgets/Blog-->
																				<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force" >
																					
																					<div class="m-portlet__body" style="">
																						<div class="m-widget19" >
																							<div class="m-widget19__content">
																								<div class="m-widget19__header" style="margin: 0 auto 0 auto;align-content:centre;">
																									<div class="m-widget19__user-img" >
																										<img class="m-widget19__img" src="assets/app/media/img//users/user1.jpg" alt="" style="margin-top: 10px;margin-bottom: 20px;width: 100px; height: 100px;">
																									</div>
																								</div>
																								<div class="m-widget19__body" style="text-align:center;">
																									<h5> hlo hlo hlo hlo hlo </h5>
																								</div>
																							</div>
																							<!-- <div class="m-widget19__action">
																								<button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
																									Read More
																								</button>
																							</div> -->
																						</div>
																					</div>
																				</div>
																				<!--end:: Widgets/Blog-->
																			</div>
																			
																			
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-xl-6">
																<div class="m-portlet" >
																	<div class="m-portlet__head" >
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h3 class="m-portlet__head-text">
																					Questioner of The Week
																				</h3>
																			</div>
																		</div>
																	</div>
																	<div class="m-portlet-body" style="padding: 2.2rem 2.2rem;">
																		<div class="row">
																			<div class="col-xl-3" >
																				<!--begin:: Widgets/Blog-->
																				<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force" >
																					
																					<div class="m-portlet__body" style="">
																						<div class="m-widget19" >
																							<div class="m-widget19__content">
																								<div class="m-widget19__header" style="margin: 0 auto 0 auto;align-content:centre;">
																									<div class="m-widget19__user-img" >
																										<img class="m-widget19__img" src="assets/app/media/img//users/user1.jpg" alt="" style="margin-top: 10px;margin-bottom: 20px;width: 100px; height: 100px;">
																									</div>
																								</div>
																								<div class="m-widget19__body" style="text-align:center;">
																									<h5> hlo hlo hlo hlo hlo </h5>
																								</div>
																							</div>
																							<!-- <div class="m-widget19__action">
																								<button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
																									Read More
																								</button>
																							</div> -->
																						</div>
																					</div>
																				</div>
																				<!--end:: Widgets/Blog-->
																			</div>
																			<div class="col-xl-3" >
																				<!--begin:: Widgets/Blog-->
																				<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force" >
																					
																					<div class="m-portlet__body" style="">
																						<div class="m-widget19" >
																							<div class="m-widget19__content">
																								<div class="m-widget19__header" style="margin: 0 auto 0 auto;align-content:centre;">
																									<div class="m-widget19__user-img" >
																										<img class="m-widget19__img" src="assets/app/media/img//users/user1.jpg" alt="" style="margin-top: 10px;margin-bottom: 20px;width: 100px; height: 100px;">
																									</div>
																								</div>
																								<div class="m-widget19__body" style="text-align:center;">
																									<h5> hlo hlo hlo hlo hlo </h5>
																								</div>
																							</div>
																							<!-- <div class="m-widget19__action">
																								<button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
																									Read More
																								</button>
																							</div> -->
																						</div>
																					</div>
																				</div>
																				<!--end:: Widgets/Blog-->
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
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
																		<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force" >
																			
																			<div class="m-portlet__body" style="">
																				<div class="m-widget19" >
																					<div class="m-widget19__content">
																						<div class="m-widget19__header" style="margin: 0 auto 0 auto;align-content:centre;">
																							<div class="m-widget19__user-img" >
																								<img class="m-widget19__img" src="<?php echo base_url(). "assets/app/media/img/users/100_3.jpg" ?>" alt="" style="margin-top: 10px;margin-bottom: 20px;width: 100px; height: 100px;">
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
																	<button type="button" class="btn btn-outline-accent m-btn m-btn--custom">
																			Show More..
																		</button>
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
																		<table class="table table-striped- table-bordered table-hover" >
																			<thead>
																				<tr>
																				<th>
																					No
																				</th>
																				<th>
																					Ilmu
																				</th>
																				<th>
																					Sub Ilmu
																				</th>
																				<th>
																					Experts
																				</th>
																				<th>
																					Action
																				</th>
																				</tr>
													                            </thead>
													                            <tbody>
													                            <?php $i=0; foreach ($data2 as $b) { $i++ ?>
													                                <tr>
													                                    <td><?php echo $b['id_pengetahuan']; ?></td>
													                                    <td><?php echo $b['nama_pengetahuan']; ?></td>
													                                    <td><?php $topik = explode(";", $b['topik']);
													                                    foreach ($topik as $topikk)
													                                    {
													                                    	echo '&bull;'. $topikk. '<br>';
													                                    }
													                                    ?>
													                                    </td>

													                                    <td>
													                                    <?php $experts = explode(";", $data3[$i]['expert']);
													                                    foreach ($experts as $expert)
													                                    {
													                                    	echo '&bull;'. $expert. '<br>';
													                                    }
													                                    ?>
													                                    </td>
													                                    
													                                    <td>
													                                    	<div style="text-align: center;">
																								<a href="<?php echo base_url()."index.php/Knowledge/item/". $b['id_pengetahuan']?>" class="btn btn-info m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air">
																									<i class="fa flaticon-visible"></i>
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
																	<a href="<?php echo base_url()."index.php/Knowledge" ?>">
																		<button type="button" class="btn btn-outline-accent m-btn m-btn--custom">
																			Show More..
																		</button>
																	</a>
																</div>
															</div>
															</div>
														</div>
														<!--End::Section-->
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
										<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
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
										</div>
										<!-- end::Quick Sidebar -->		    
	    <!-- begin::Scroll Top -->
										<div id="m_scroll_top" class="m-scroll-top">
											<i class="la la-arrow-up"></i>
										</div>
										<!-- end::Scroll Top -->		    	
    	<!--begin::Base Scripts -->
										<script src=<?php echo base_url("assets/vendors/base/vendors.bundle.js") ?> type="text/javascript"></script>
										<script src=<?php echo base_url("assets/demo/default/base/scripts.bundle.js") ?> type="text/javascript"></script>
										<!--end::Base Scripts -->   
       
       
										 <!--begin::Page Resources -->
										 <script src=<?php echo base_url("assets/demo/default/custom/crud/metronic-datatable/base/html-table.js") ?> type="text/javascript"></script>
										<!--end::Page Resources -->
										<script src=<?php echo base_url("assets/vendors/custom/datatables/datatables.bundle.js") ?> type="text/javascript"></script>
										<!--end::Page Vendors -->  
        <!--begin::Page Resources -->
										<script src=<?php echo base_url("assets/demo/default/custom/crud/datatables/basic/basic.js") ?> type="text/javascript"></script>
									</body>
									<!-- end::Body -->
								</html>
