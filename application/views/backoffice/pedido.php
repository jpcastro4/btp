

    <div class="container" style="max-width: 640px;margin:0 auto;">

	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

      <!-- USER PROFILE BLOCK -->
         

        <div class="col-12">

      <!-- LOCAL TIME BLOCK -->
      		<div class="half-unit">
	      		<dtitle><?php echo $this->lang->line('package'); ?></dtitle>
	      		<hr>
		      		<!-- <div class="clockcenter">
			      		<digiclock>12:45:25</digiclock>
		      		</div> -->
		      	<div class="cont">
					<!-- <p><img src="images/up.png" alt=""> <bold>Up</bold> | 356ms.</p> -->
					<bold><?php echo $pacote->pacoteNome ?></bold>
				</div>
			</div>

    
			<div class="half-unit">
	      		<dtitle><?php echo $this->lang->line('package_value'); ?></dtitle>
	      		<hr>
	      		<div class="cont">
					 
					<bold>US$ <?php echo $pacote->pacoteValor ?></bold>
					<p> <?php echo $pacote->pacoteValor ?>BTP</p>
				</div>
			</div>

			<div class="half-unit">
	      		<dtitle><?php echo $this->lang->line('btc_value'); ?></dtitle>
	      		<hr>
	      		<div class="cont">
					 
					<bold>BTC$ <?php echo $pedido->btcValor ?></bold>
					 
				</div>
			</div>

			<div class="half-unit" style="height: auto;">
	      		<dtitle>QR CODE</dtitle>
	      		<hr>
	      		<div class="cont">
					 
					<p> <?php echo $pedido->pedidoEndWallet ?>BTP</p>
					 
				</div>
	      		<div class="cont">
					 
					<img width="100%" src="<?php echo base_url('wallets/'.$pedido->pedidoID.'.png' ); ?>">
					 
				</div>
			</div>

        </div>

     
        
      </div><!-- /row -->
        
      
	</div>  
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="images/logo.png" alt=""></p>
      			<p>Money Coin - Mutual Help</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->
          
</body></html>