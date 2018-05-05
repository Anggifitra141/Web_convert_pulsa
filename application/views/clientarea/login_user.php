
	<div class="col-md-12">
		<div class="text-center">
			<h3>Silahkan login </h3>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
                                <?php
                                    $success_msg= $this->session->flashdata('success_msg');
                                    $error_msg  = $this->session->flashdata('error_msg');

                                    if ($success_msg) {
                                        ?>
                                        <div class="alert alert-success">
                                            <?php echo $success_msg;?>
                                        </div>
                                    <?php    
                                    }
                                    if ($error_msg) {
                                        ?>
                                        <div class="alert alert-danger">
                                            <?php echo $error_msg; ?>
                                        </div> 
                                     <?php      
                                    }
                                ?>
								<form id="login-form" action="<?php echo base_url('clientarea/login_user') ?>" method="post" role="form" style="display: block;">
									<div class="text-center">
										<a href="" class="btn btn-danger btn-flat btn-md" style="width: 90px;" title="Google Plus"><i class="fa fa-google-plus"></i></a>
										<a href="" class="btn btn-primary btn-flat btn-md" style="width: 90px;" title="Facebook"><i class="fa fa-facebook"></i></a><hr>
									</div>
									<div class="form-group">
										<input type="email" name="email" class="form-control" placeholder="Email anda" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password"  class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" class="form-control btn btn-primary" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="#" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>

                               

								<form id="register-form" action="<?php echo base_url('clientarea/register_user') ?>" method="post" role="form" style="display: none;">
									<div class="form-group">
                                        <div class="row">
                                            <label class="col-md-4">Username <span class="required">&nbsp; :</span></label>
                                            <div class="col-md-8">
                                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                                            </div>   
                                        </div>    
                                    </div>
                                    <div class="form-group">    
                                        <div class="row">
                                            <label class="col-md-4">Password <span class="required">&nbsp; :</span></label>
                                            <div class="col-md-8">
                                                <input type="password" name="" class="form-control" placeholder="Password" required>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="form-group">    
                                        <div class="row">
                                            <label class="col-md-4">Nama Lenkap <span class="required">&nbsp; :</span></label>
                                            <div class="col-md-8">
                                                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lenkap" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">    
                                        <div class="row">
                                            <label class="col-md-4">Alamat Lengkap <span class="required">&nbsp; :</span></label>
                                            <div class="col-md-8">
                                                <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">    
                                        <div class="row">
                                            <label class="col-md-4">No Hp <span class="required">&nbsp; :</span></label>
                                            <div class="col-md-8">
                                                <input type="text" name="no_hp" class="form-control" placeholder="No Hp yang bisa dihubungi" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">    
                                        <div class="row">
                                            <label class="col-md-4">Email <span class="required">&nbsp; :</span></label>
                                            <div class="col-md-8">
                                                <input type="email" name="email" class="form-control" placeholder="Email yang Valid" required>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-4">Pilih Rekening Bank <span class="required">&nbsp; :</span></label>
                                            <div class="col-md-8">
                                                <select class="form-control" name="bank">
                                                    <option>-- BANK --</option>
                                                    <option>BRI</option>
                                                    <option>BCA</option>
                                                    <option>MANDIRI</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">    
                                        <div class="row">
                                            <label class="col-md-4">Nomor Rekening <span class="required">&nbsp; :</span></label>
                                            <div class="col-md-8">
                                                <input type="text" name="no_rek" class="form-control" placeholder="Nomor Rekening" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">    
                                        <div class="row">
                                            <label class="col-md-4">Nama Pemilik Rekening <span class="required">&nbsp; :</span></label>
                                            <div class="col-md-8">
                                                <input type="text" name="nama_pemilik" class="form-control" placeholder="Nama Pemilik Rekening" required>
                                            </div>
                                        </div>
                                    </div>  
									<div class="form-group">	
										<div class="row">
											<div class="col-sm-4 col-sm-offset-4">
												<input type="reset" name="register-submit" id="register-submit" class="form-control btn btn-default" value="Reset" required>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" class="form-control btn btn-success" value="Register Now">
											</div>
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

