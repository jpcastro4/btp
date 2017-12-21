<div id="footerwrap">
        <footer class="clearfix"></footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-12">
            <p><img src="<?php echo site_url('assets/')?>logo.png" alt=""></p>
            <p>Money Coin - Mutual Help</p>
            </div>

          </div><!-- /row -->
        </div><!-- /container -->   
  </div><!-- /footerwrap -->

  <script src="<?php echo base_url();?>assets/bo/assets/js/jquery.countdown.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js" type="text/javascript"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="<?php echo base_url() ?>assets/ajuda/jquery.ui.touch-punch.min.js"></script>

  <script type="text/javascript">
      
      $(document).ready(function(){
        
            $('[data-countdown]').each(function() {
            var $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
              $this.html(event.strftime('%H:%M:%S'));
            });
          });


            $( "#draggable" ).draggable();

            <?php if(isset($mensagem) ):  ?>
            //swal( '<?php echo $mensagem;?>', ' ', 'success');
            <?php endif;?>

            <?php if(isset($mensagem_erro)):  ?>
            //swal( '<?php echo $mensagem_erro;?>', ' ', 'error');
            <?php endif;?>

        setTimeout(function() {
            $(".alert").fadeOut();
        }, 3000);

      });
    </script>



  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="<?php echo base_url() ?>assets/ajuda/jquery.ui.touch-punch.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
         $( "#draggable" ).draggable();
       });
  </script>

</body>
</html>