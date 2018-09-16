<!-- BEGIN: Topbar -->
<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
<div class="m-stack__item m-topbar__nav-wrapper">
	<ul class="m-topbar__nav m-nav m-nav--inline">
		<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
			<a href="#" class="m-nav__link m-dropdown__toggle">
				<span class="m-topbar__userpic">
					<img src=<?php echo base_url("assets/img/user4.jpg") ?> class="m--img-rounded m--marginless" alt=""/>
					<!--
					<span class="m-type m--bg-brand">
						<span class="m--font-light">
							S
							<span>
								<span>
									-->
								</span>
								<span class="m-topbar__username m--hide">
									Nick
								</span>
							</a>
							<div class="m-dropdown__wrapper">
								<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
								<div class="m-dropdown__inner">
									<div class="m-dropdown__header m--align-center" style="background: url(<?php echo base_url("assets/img/user_profile_bg.jpg") ?>); background-size: cover;">
										<div class="m-card-user m-card-user--skin-dark">
											<div class="m-card-user__pic">
												<img src=<?php echo base_url("assets/img/user4.jpg" ) ?> class="m--img-rounded m--marginless" alt=""/>
												<!--
												<span class="m-type m-type--lg m--bg-danger">
													<span class="m--font-light">
														S
														<span>
															<span>
																-->
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
																	<?php echo $this->session->userdata('nipp') ?>
																</span>
																<span class="m-card-user__name m--font-weight-500">
																	<?php echo $role; ?>
																</span>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">
																		Section
																	</span>
																</li>
																<li class="m-nav__item">
																	<a href="header/profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-users"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">
																					Back To iKnow
																				</span>
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="<?php echo base_url('Login/logout') ?>" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
																		Logout
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>
			<!-- END: Header -->