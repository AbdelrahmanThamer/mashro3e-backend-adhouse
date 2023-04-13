        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url( 'assets/plugins/bootstrap/js/bootstrap.bundle.min.js' ); ?>"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url( 'assets/plugins/morris/morris.min.js' ); ?>"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url( 'assets/plugins/sparkline/jquery.sparkline.min.js' ); ?>"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url( 'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js' ); ?>"></script>
        <script src="<?php echo base_url( 'assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js' ); ?>"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url( 'assets/plugins/knob/jquery.knob.js' ); ?>"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <!-- color picker -->
         <script src="<?php echo base_url( 'assets/plugins/colorpicker/bootstrap-colorpicker.min.js' ); ?>"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url( 'assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js' ); ?>"></script>
        <!-- Slimscroll -->
        <script src="<?php echo base_url( 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ); ?>"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url( 'assets/plugins/fastclick/fastclick.js' ); ?>"></script>
        <!-- AdminLTE App(This is sidebar and nav action) -->
        <script src="<?php echo base_url( 'assets/dist/js/adminlte.js' ); ?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url( 'assets/dist/js/demo.js' ); ?>"></script>
      

        <script src="https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
        
        <?php show_analytic(); ?>
        <script src="<?php echo base_url( 'assets/validator/jquery.validate.js' ); ?>"></script>
         
		<script type="text/javascript">
			
			// functions to run after jquery is loaded
			if ( typeof runAfterJQ == "function" ) runAfterJQ();

			<?php if ( $this->config->item( 'client_side_validation' ) == true ): ?>
				
				// functions to run after jquery is loaded
				if ( typeof jqvalidate == "function" ) jqvalidate();

			<?php endif; ?>

            $('.page-sidebar-menu li').removeClass('active');

            // highlight submenu item
            $('li a[href="' + this.location.pathname + '"]').parent().addClass('active');

            // Highlight parent menu item.
            $('ul a[href="' + this.location.pathname + '"]').parents('li').addClass('active');

            

		</script>

        <script>
  
          $(function () {
              //Date range picker for offline paid
           
            $('input[name="date"]').daterangepicker();

            })

        </script>

        <script>
  
          $(function () {
              //Date range picker for offline paid
           
            $('#reservation').daterangepicker();

            })

        </script>

        <?php if ( isset( $load_gallery_js )) : ?>

            <?php $this->load->view( $template_path .'/components/gallery_script' ); ?> 

        <?php endif; ?>

	</div>
 <!-- ./ wrapper -->
</body>
</html>