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
																		<form action="<?php echo base_url('Inbox/balasPesan') ?>" method="post">
																			<div class="form-group">
																				<label  class="form-control-label">
																					Recipient:
																				</label>
                                                                                <input type="text" class="form-control" name="nipp_penerima" value="<?php echo $data[0]['nipp_pengirim'] ?>" readonly>
                                                                                <label  class="form-control-label">
																					Subject:
																				</label>
																				<input type="text" class="form-control" name="subjek">
																			</div>
																			<div class="form-group">
																				<label  class="form-control-label">
																					Message:
																				</label>
																				<textarea class="form-control" name="isi_pesan"></textarea>
																			</div>
																			<input type="file" name="file" accept="image/*" >
																		
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