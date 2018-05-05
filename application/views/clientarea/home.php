
   	<div class="col-md-12 col-sm-6">
   		<div class="text-center">
   			<h2><strong>Kalkulator pulsa</strong></h2>
   		</div>
   		<div class="col-md-12 text-center form-inline">
            <div class="form-group">
                <input type="text" name="nominal" id="nominal" class="form-control" placeholder="Nominal">
            </div>
            <div class="form-group">
                <select class="form-control">
                    <option value="jual">Harga Beli</option>
                    <option value="beli">Harga Jual</option>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control">
					<option value=''>Pilih jenis pulsa</option>
					<option value=''>TELKOMSEL</option>
					<option value=''>INDOSAT</option>
					<option value=''>XL</option>
					<option value=''>AXIS</option>
                </select>
            </div>&nbsp;
            <input type="submit" class="btn btn-success" name="convert" value="Hitung" id="kalkulasi">
				<p id="hasil"></p>
   		</div>
   		<br><br><br><br>
		<div class="col-md-12 col-sm-5">
			<div class="row">
				<div class="container-fluid">
					<div class="text-center">
					    <h2>Rate pulsa</h2>
					</div>
			  	<div class="row" align="center">

			    	<div class="col-sm-3">
			      		<div class="panel panel-default text-center">
				        	<div class="panel-heading">
				          		<img src="<?php echo base_url(); ?>assets/img/Telkomsel.png" width="200" height="70">
				        	</div>
				        	<div class="panel-body">
				        		<p><strong>Rate</strong><br>0,8</p>
					          	<p><strong>Harga jual</strong><br>78000</p>
					          	<p><strong>Harga Beli</strong><br> 91000</p>
					        </div>
					        <div class="panel-footer">
					          <a class="btn btn-primary" href="<?php echo base_url('clientarea/convert')?>">convert</a><br><br>
					          <a class="btn btn-primary" href="">Beli</a>
					        </div>
				    	</div> 
			    	</div> 
				    <div class="col-sm-3">
				     	<div class="panel panel-default text-center">
					        <div class="panel-heading"">
					          	<img src="<?php echo base_url(); ?>assets/img/xl.png" width="150" height="70">
					        </div>
					        <div class="panel-body">
					        	<p><strong>Rate</strong><br>0,8</p>
					          	<p><strong>Harga Jual</strong><br>85000</p>
					          	<p><strong>Harga Beli</strong><br> 94500</p>
					        </div>
					        <div class="panel-footer">
					          	<a class="btn btn-primary" href="<?php echo base_url('clientarea/convert')?>">convert</a><br><br>
					         	<a class="btn btn-primary" href="">Beli</a>
					        </div>
				      	</div> 
				    </div> 
				   	<div class="col-sm-3">
					    <div class="panel panel-default text-center">
					        <div class="panel-heading">
					          <img src="<?php echo base_url(); ?>assets/img/indosat1.png" width="150" height="70">
					        </div>
					        <div class="panel-body">
					        	<p><strong>Rate</strong><br>0,8</p>
						        <p><strong>Harga Jual</strong><br>82000</p>
					          	<p><strong>Harga Beli</strong><br> 92000</p>
					        </div>
					        <div class="panel-footer">
					          	<a class="btn btn-primary" href="<?php echo base_url('clientarea/convert')?>">convert</a><br><br>
					            <a class="btn btn-primary" href="">Beli</a>
					        </div>
					    </div> 
				    </div> 
				    <div class="col-sm-3">
				      	<div class="panel panel-default text-center">
					        <div class="panel-heading">
					         <img src="<?php echo base_url(); ?>assets/img/axis.png" width="150" height="70">
					        </div>
					        <div class="panel-body">
					        	<p><strong>Rate</strong><br>0,8</p>
					          	<p><strong>Harga jual</strong><br>85000</p>
					          	<p><strong>Harga Beli</strong><br> 92000</p>
					        </div>
					        <div class="panel-footer">
					          	<a class="btn btn-primary" href="<?php echo base_url('clientarea/convert')?>">convert</a><br><br>
					          	<a class="btn btn-primary" href="">Beli</a>
					        </div>
				      	</div> 
				    </div> 
			  		</div>
				</div>
			</div>
		</div>

		<br><br><br><br>
		<!--  Services -->

	 	<div id="services" class="services">
		    <div class="container">
		        <h2 class="wow fadeInUp">Mengapa Kami ?</h2>
		        <p class="wow fadeInUp" data-wow-delay="0.4">Kepuasan Pelanggan Adalah Komitemen Kami</p>
		        <div class="row">
		            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.8s">
		                <i class="fa fa-lock" aria-hidden="true"></i>
		                <h4>Aman</h4>
		                <p>Online pulsa akan selalu menjaga kerahasian seluruh data costumer dari pihak manapun. 
						</p>
		            </div>
		            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.4s">
		                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
		                <h4>Terpercaya</h4>
		                <p>Online pulsa adalah Situs jual beli pulsa transfer yang selalu menjaga kepercayaan yang di berikan customer kepada kami.</p>
		            </div>
		            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
		                <i class="fa fa-refresh" aria-hidden="true"></i>
		                <h4>Respon Cepat</h4>
		                <p>Online pulsa akan merespon cepat setiap ada customer yang order</p>
		            </div>
		            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
		                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
		                <h4>Mudah</h4>
		                <p>Online pulsa meiliki fitur transaksi yang sangat mudah bagi customer yang melakukan order </p>
		             </div>
		        </div>
		    </div>
	 	</div>
 
 	</div>