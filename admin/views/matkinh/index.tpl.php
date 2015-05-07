<!-- Header -->
<?php include ("views/".TEMPLATE_NAME."/header.tpl.php"); ?>

<body>
    <div id="wrapper">
        
        <!-- Menu -->
        <?php include("views/".TEMPLATE_NAME."/menu.tpl.php"); ?>
        
        <div id="page-wrapper">
            <!-- Content -->
            <?php include("views/".TEMPLATE_NAME."/content/".$c.DS.ACTION.".tpl.php"); ?>
            <!-- /Content -->
        </div>

    </div>

<!-- Footer -->
<?php include("views/matkinh/footer.tpl.php"); ?>

</body>
</html>