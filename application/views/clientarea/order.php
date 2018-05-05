
<?php
$username=$this->session->userdata('username');
 
if(!$username){
 
  redirect('clientarea/login');
}
 
 ?>    
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <section>
                    <div class="wizard">
                      
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                    <span class="round-tab">
                                        <i class="fa fa-dollar"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                    <span class="round-tab">
                                        <i class="fa fa-credit-card"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                    <span class="round-tab">
                                        <i class="fa fa-refresh"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                   
                    <form role="form">
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel1" id="step1">
                                <div class="step1">
                                     <div class="col-md-12">
                                        <h3 align="center">Konversikan Nilai Pulsa</h3><br>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-md-3">Pilih Operator dan Rate <span class="required">&nbsp; :</span></label>
                                                <div class="col-md-6">
                                                    <select name="oprate" class="form-control">
                                                        <option value="">-- Operator dan Rate --</option>
                                                        <option value="">Telkomsel - Rate 0,8</option>
                                                        <option value="">Xl - Rate 0,8</option>
                                                        <option value="">Axis - Rate 0,8</option>
                                                        <option value="">Indosat - Rate 0,8</option>
                                                    </select>
                                                </div>   
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="row">    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-md-3">Pulsa Yang Akan Di Transfer <span class="required">&nbsp; :</span></label>
                                                <div class="col-md-6">
                                                    <input type="text" name="transfer" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-md-3">Uang yang akan anda terima <span class="required">&nbsp; :</span></label>
                                                <div class="col-md-6">
                                                    <input type="text" name="diterima" class="form-control" disabled="disabled" required="required">
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="btn btn-primary next-step">Selanjutnya</button></li>
                                    </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2">
                                <div class="step1">
                                     <div class="col-md-12">
                                        <h3 align="center">Detail Transfer</h3><br>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-3">No Anda <span class="required">&nbsp; :</span></label>
                                            <div class="col-md-6">
                                                <input type="text" name="" class="form-control">
                                            </div>   
                                        </div>    
                                    </div>
                                    <div class="row">    
                                        <div class="form-group">
                                            <label class="col-md-3">No Tujuan <span class="required">&nbsp; :</span></label>
                                            <div class="col-md-6">
                                                <input type="text" name="" class="form-control">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">    
                                        <div class="form-group">
                                            <label class="col-md-3">Jumlah pulsa yang akan di transfer <span class="required">&nbsp; :</span></label>
                                            <div class="col-md-6">
                                                <input type="text" name="diterima" class="form-control">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-3">Pilih Rekening Bank <span class="required">&nbsp; :</span></label>
                                            <div class="col-md-6">
                                                <select class="form-control">
                                                    <option>-- BANK --</option>
                                                    <option>BRI</option>
                                                    <option>BCA</option>
                                                    <option>MANDIRI</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>                              
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Sebelumnya</button></li>
                                    <li><button type="button" class="btn btn-primary next-step">Selanjutnya</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step3">
                                <div class="step1">
                                     <div class="col-md-12">
                                        <h3 align="center">Data Yang anda masukan </h3><br>
                                    </div>
                                    
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="btn btn-success">Proses</button></li>
                                    </ul>
                                </div>           
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>