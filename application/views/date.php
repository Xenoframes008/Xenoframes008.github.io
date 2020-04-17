<html>
    <head>
        <title>view appointment details</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/style.css"/>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css"/>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

        <script type="text/javascript">
            $(function () {
                $("#datepicker").datepicker({
                    minDate: 0,
                    dateFormat: 'yy-mm-dd'
                });

            });
        </script>
    </head>

    <body>

        <label id ="pdesc_txt">Date:</label>

        <input type="text" id="datepicker" placeholder="Pickup Date" name="datepicker"/>



    
</body>
</html> 