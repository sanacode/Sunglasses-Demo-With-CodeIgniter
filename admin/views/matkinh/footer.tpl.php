    <!-- jQuery -->
    <script src="views/<?php echo TEMPLATE_NAME ?>/js/jquery.js"></script>
    
    <script src="views/<?php echo TEMPLATE_NAME ?>/js/jPages.min.js"></script>
    <script>
      $(function(){
        $("div.holder").jPages({
          containerID : "jpage",
          previous : "←",
          next : "→",
          perPage : 10,
          delay : 10
        });
      });
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="views/<?php echo TEMPLATE_NAME ?>/js/bootstrap.min.js"></script>