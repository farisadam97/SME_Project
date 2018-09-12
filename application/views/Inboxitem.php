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
																	Inbox 
																</h2>
															</div>
														</div>
													</div>
													<!-- END: Subheader -->
													<div class="m-content">
														<div class="m-portlet m-portlet--mobile">
															<div class="m-portlet__head">
																<div class="m-portlet__head-caption">
																	<div class="m-portlet__head-title">
																		<div class="row">
																			<div class="col-lg-6">
																					<h3 class="m-portlet__head-text" name="nipp_pengirim">
																						[<?php echo $data[0]['nipp_pengirim'] ?>] 
																					</h3>
																			</div>
																			<div class="col-lg-6">
																					<h3 class="m-portlet__head-text" name="nama_pengirim">
																						<?php echo $data[0]['nama_pengirim']; ?>
																					</h3>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="m-portlet__body">
																<div class="m-portlet m-portlet--mobile">
																	<div class="m-portlet__head">
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h3 class="m-portlet__head-text" name="subjek">
																					Subject : <?php echo $data[0]['subjek']; ?>
																				</h3>
																			</div>
																		</div>
																	</div>
																	<div class="m-portlet__body">
																		<h6> <?php echo $data[0]['isi_pesan']; ?> </h6></br>			
																		<div class="m-widget4">
																			<div class="m-widget4__item">
																				<div class="m-widget4__img m-widget4__img--icon">
																					<img src="  
																					<?php $file_explode = explode(".", $data[0]['file']);
																						  $file_ext = array_slice($file_explode, 1);
																						switch ($file_ext[0]) {
																					    case "css":
																					        echo base_url("assets/img/css.svg");
																					        break;
																					    case "csv":
																					        echo base_url("assets/img/csv.svg");
																					        break;
																					    case "doc":
																					        echo base_url("assets/img/doc.svg");
																					        break;
																					    case "html":
																					        echo base_url("assets/img/html.svg");
																					        break;
																					    case "javascript":
																					        echo base_url("assets/img/javascript.svg");
																					        break;
																					    case "jpg":
																					        echo base_url("assets/img/jpg.svg");
																					        break;
																					    case "mp4":
																					        echo base_url("assets/img/mp4.svg");
																					        break;
																					    case "pdf":
																					        echo base_url("assets/img/pdf.svg");
																					        break;
																					    case "xml":
																					        echo base_url("assets/img/xml.svg");
																					        break;
																					    case "zip":
																					        echo base_url("assets/img/zip.svg");
																					        break;
																					    default:
																					        echo "";
																					} 
																					?> ">
																				</div>
																				<div class="m-widget4__info">
																					<span class="m-widget4__text">
																						<?php echo str_replace("assets/uploaded_files/", "", $data[0]['file']) ?>
																					</span>
																				</div>
																				<div class="m-widget4__ext">
																					<a href="<?php echo base_url($data[0]['file']); ?>" class="m-widget4__icon" download>
																						<i class="la la-download"></i>
																					</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<?php if ($data4[0]['keterangan'] == 'Unsolved') { ?>
																	<div class="form-group m-form__group">
																		<div class="col-md-2" >
																			<div class="email-btn" >
																				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#m_modal_4" style="width: 80%;">
																				Send Reply
																				</button>
																			</div>
																		</div>
																	</div>
																	<?php }else{ ?>

																	<?php } ?>

																	<div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="align:left;">
																	<div class="modal-dialog modal-lg" role="document">
																		<div class="modal-content">
																			<div class="modal-header">
																				<h5 class="modal-title" id="exampleModalLabel">
																					Reply
																				</h5>
																				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">
																						&times;
																					</span>
																				</button>
																			</div>
																			<div class="modal-body">
																				<form action="<?php echo base_url('Inbox/kirimPesan') ?>" method="post" role="form" enctype="multipart/form-data">
																					<div class="form-group">
																						<label  class="form-control-label">
																							Recipient:
																						</label>
		                                                                                 <input type="text" class="form-control" name="nipp_penerima" value="<?php echo $data[0]['nipp_pengirim'] ?>" readonly required>
		                                                                                <label  class="form-control-label">
																							Subject:
																						</label>
																						<input type="text" class="form-control" name="subjek" required>
																					</div>
																					<div class="form-group">
																						<label  class="form-control-label">
																							Message:
																						</label>
																						<textarea class="form-control" name="isi_pesan" required>
																						</textarea>
																					</div>
																					<div class="form-group">
																						
																						<input type="file" name="file" accept="image/*">
																						<!-- <input type="hidden" name="is_submit" value="1" /> -->
																					</div>
																					<div class="modal-footer">
																						<button type="button" class="btn btn-secondary" data-dismiss="modal">
																							Close
																						</button>
																						<div class="m-login__form-action">
																							<button  class="btn btn-primary" name="pesan" type="submit" value="Submit">	
																								Send message
																							</button>
																						</div>
																					</div>
																				</form>
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
										 <!--begin::Page Resources -->
										 <script src=<?php echo base_url("assets/js/html-table.js") ?> type="text/javascript"></script>
										<!--end::Page Resources -->
									</body>
									<!-- end::Body -->
								</html>
