    <div class="container">

	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>User Profile</dtitle>
	      		<hr>
				<div class="thumbnail">
					<img width="100" src="<?php echo base_url(); ?>assets/avatar.png" alt="<?php echo $conta->usuarioNome; ?>" class="img-circle">
				</div><!-- /thumbnail -->
				<h1><?php echo $conta->usuarioNome; ?></h1>
				<h3><?php echo $conta->usuarioEmail; ?></h3>
				<br>
					<div class="info-user">
						<span aria-hidden="true" class="li_user fs1"></span>
						<span aria-hidden="true" class="li_settings fs1"></span>
						<span aria-hidden="true" class="li_mail fs1"></span>
						<span aria-hidden="true" class="li_key fs1"></span>
					</div>
				</div>
        </div>

        <div class="col-sm-3 col-lg-3">

      <!-- LOCAL TIME BLOCK -->
      		<div class="half-unit">
	      		<dtitle><?php echo $this->lang->line('plan_active') ?></dtitle>
	      		<hr>
		      		<!-- <div class="clockcenter">
			      		<digiclock>12:45:25</digiclock>
		      		</div> -->
		      	<div class="cont">
					<!-- <p><img src="images/up.png" alt=""> <bold>Up</bold> | 356ms.</p> -->
					<bold><?php echo (empty($conta->pacoteNome))? $this->lang->line('NOTPLAN') : $conta->pacoteNome ?></bold>
				</div>
			</div>

      <!-- SERVER UPTIME -->
			<div class="half-unit">
	      		<dtitle><?php echo $this->lang->line('BALANCE'); ?></dtitle>
	      		<hr>
	      		<div class="cont">
					<!-- <p><img src="images/up.png" alt=""> <bold>Up</bold> | 356ms.</p> -->
					<bold>$ <?php echo $conta->usuarioSaldo ?> BTP</bold>
				</div>
			</div>

        </div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle><?php echo $this->lang->line('MAXBINARY'); ?></dtitle>
		  		<hr>
	        	<div class="progChart type-donut label-centered">
				    <canvas id="tetoBinario" data-value="<?php echo (empty($conta->percTetoBinario))? 0 : number_format($conta->percTetoBinario,2) ?>">
				    </canvas>
				    <!-- <div class="progChart__summary">
				      <p class="progChart__summary__number"><?php echo number_format($conta->percTetoBinario,2) ?></p>
				      <p class="progChart__summary__title">Binary Max</p>
				    </div> -->
				</div>


	        	<h2><?php echo (empty($conta->percTetoBinario))? 0 : number_format($conta->percTetoBinario,2) ?>%</h2>
			</div>
        </div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>G<?php echo $this->lang->line('MAXDIRECT'); ?></dtitle>
		  		<hr>
	        	<div class="progChart type-donut label-centered">
				    <canvas id="tetoDireta" data-value="<?php echo (empty($conta->percTetoDireta))? 0 : number_format($conta->percTetoDireta,2) ?>">
				    </canvas>
				    <!-- <div class="progChart__summary">
				      <p class="progChart__summary__number"><?php echo number_format($conta->percTetoBinario,2) ?></p>
				      <p class="progChart__summary__title">Binary Max</p>
				    </div> -->
				</div>


	        	<h2><?php echo (empty($conta->percTetoDireta))? 0 : number_format($conta->percTetoDireta,2) ?>%</h2>
			</div>
        </div>
        
        
      </div><!-- /row -->
      
      <div class="row">
     	
     	<div class="col-sm-3 col-lg-3">

	  <!-- LIVE VISITORS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle><?php echo $this->lang->line('POINTSBINARYE'); ?></dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold><?php echo (empty($conta->usuarioPontosEsquerda))? 0 : $conta->usuarioPontosEsquerda ?></bold></p>
      			<!-- <p><img src="images/up-small.png" alt=""> 412 Max. | <img src="images/down-small.png" alt=""> 89 Min.</p> -->
	      		</div>
      		</div>
      	</div>
      	<div class="col-sm-3 col-lg-3">	
	  <!-- PAGE VIEWS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle><?php echo $this->lang->line('ACTIVELEG'); ?></dtitle>
	      		<hr>
	      		<!-- <div class="cont">
      			<p><bold>145.0K</bold></p>
      			<p><img src="images/up-small.png" alt=""> 23.88%</p>
	      		</div> -->
	      		<div class="" style="padding-top:1px"></div>
	      		<div class="switch switch-yellow">
					<input type="radio" class="switch-input" name="usuarioBinarioPernaAtiva" value="0" id="yes" <?php echo ($conta->usuarioBinarioPernaAtiva == 0)? 'checked' : '' ?> >
					<label for="yes" class="switch-label switch-label-off"><?php echo $this->lang->line('LEFT'); ?></label>
					<input type="radio" class="switch-input" name="usuarioBinarioPernaAtiva" value="1" id="no" <?php echo ($conta->usuarioBinarioPernaAtiva == 1)? 'checked' : '' ?>>
					<label for="no" class="switch-label switch-label-on"><?php echo $this->lang->line('RIGHT'); ?></label>
					<span class="switch-selection"></span>
				</div>

      		</div>
      	</div>

      	<div class="col-sm-3 col-lg-3">	
	  <!-- PAGE VIEWS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle><?php echo $this->lang->line('POINTSBINARYD'); ?></dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold><?php echo (empty($conta->usuarioPontosDireita))? 0 : $conta->usuarioPontosDireita ?></bold></p>
      			<!-- <p><img src="images/up-small.png" alt=""> 23.88%</p> -->
	      		</div>
      		</div>
      	</div>

      	<div class="col-sm-3 col-lg-3">	
	  <!-- PAGE VIEWS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle><?php echo $this->lang->line('DIRECTINDICATIONS'); ?></dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold><?php echo $conta->usuarioPontosEsquerda; ?></bold></p>
      			<!-- <p><img src="images/up-small.png" alt=""> 23.88%</p> -->
	      		</div>
      		</div>
      	</div>

     </div>

     <div class="row">
     	<div class="col-12 col-sm-4 col-lg-4">	
	  <!-- PAGE VIEWS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle><?php echo $this->lang->line('MOMENTVALUE') ?></dtitle>
	      		<hr>
	      		<div class="cont" style="margin-top:15px;">
	      		<p><bold>$150</bold></p>
      			<small><p><img width="10" src="<?php echo base_url('assets') ?>/down-small.png" alt=""> $159,5 | <img width="10" src="<?php echo base_url('assets') ?>/up-small.png" alt="">  $155</p></small>
	      		</div>
      		</div>
      	</div>
      	<div class="col-12 col-sm-4 col-lg-4">	
	  <!-- PAGE VIEWS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle><?php echo $this->lang->line('TIMER') ?></dtitle>
	      		<hr>
	      		<div class="clockcenter">
			      	<digiclock>12:45:25</digiclock>
		      	</div>
      		</div>
      	</div>
      	<div class="col-12 col-sm-4 col-lg-4">	
	  <!-- PAGE VIEWS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle><?php echo $this->lang->line('AVALIABLEDONATIONS') ?></dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold>80</bold></p>
	      		</div>
      		</div>
      	</div>
     </div>

     <div class="row">
     	<div class="col-sm-12">
      		<div class="dash-unit graph">
      		<dtitle><?php echo $this->lang->line('GRAPHIC') ?></dtitle>
      		<hr>
			    <div class="section-graph">
			      <div id="importantchart"></div>
			      <br>
			      <div class="graph-info">
			        <i class="graph-arrow"></i>
			        <span class="graph-info-big">634.39</span>
			        <span class="graph-info-small">+2.18 (3.71%)</span>
			      </div>
			    </div>
			</div>
        </div>
     </div>  
      
      
	</div>  
	