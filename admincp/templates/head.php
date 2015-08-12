<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>XHN CMS</title>
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="templates/css/stylesheets.css" />
    <link rel="stylesheet" type="text/css" href="templates/css/xhn.css" />
    <link rel='stylesheet' type='text/css' href='templates/css/fullcalendar.print.css' media='print' />
    <script type='text/javascript' src='templates/js/jquery.min.js'></script>
    <script type='text/javascript' src='templates/js/jquery-ui.min.js'></script>
    <script type='text/javascript' src='templates/js/plugins/jquery/jquery.mousewheel.min.js'></script>
    <script type='text/javascript' src='templates/js/plugins/cookie/jquery.cookies.2.2.0.min.js'></script>
    <script type='text/javascript' src='templates/js/plugins/bootstrap.min.js'></script>
    <script type='text/javascript' src='templates/js/plugins/charts/excanvas.min.js'></script>
    <script type='text/javascript' src='templates/js/plugins/charts/jquery.flot.js'></script>    
    <script type='text/javascript' src='templates/js/plugins/charts/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='templates/js/plugins/charts/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='templates/js/plugins/charts/jquery.flot.resize.js'></script>
    <script type='text/javascript' src='templates/js/plugins/sparklines/jquery.sparkline.min.js'></script>
    <script type='text/javascript' src='templates/js/plugins/fullcalendar/fullcalendar.min.js'></script>
    <script type='text/javascript' src='templates/js/plugins/select2/select2.min.js'></script>
    <script type='text/javascript' src='templates/js/plugins/uniform/uniform.js'></script>
    <script type='text/javascript' src='templates/js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
    <script type='text/javascript' src='templates/js/plugins/validation/languages/jquery.validationEngine-en.js' charset='utf-8'></script>
    <script type='text/javascript' src='templates/js/plugins/validation/jquery.validationEngine.js' charset='utf-8'></script>
    <script type='text/javascript' src='templates/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    <script type='text/javascript' src='templates/js/plugins/animatedprogressbar/animated_progressbar.js'></script>
    <script type='text/javascript' src='templates/js/plugins/qtip/jquery.qtip-1.0.0-rc3.min.js'></script>
    <script type='text/javascript' src='templates/js/plugins/cleditor/jquery.cleditor.js'></script>
    <script type='text/javascript' src='templates/js/plugins/dataTables/jquery.dataTables.min.js'></script>    
    <script type='text/javascript' src='templates/js/plugins/fancybox/jquery.fancybox.pack.js'></script>
    <script type='text/javascript' src='templates/js/cookies.js'></script>
    <script type='text/javascript' src='templates/js/actions.js'></script>
    <script type='text/javascript' src='templates/js/charts.js'></script>
    <script type='text/javascript' src='templates/js/plugins.js'></script>
    <script type='text/javascript' src='../libraries/ckeditor/ckeditor.js'></script>
    <script type='text/javascript' src='../libraries/ckeditor/ckfinder/ckfinder.js'></script>
    <script type="text/javascript">
    function BrowseServer()
    {
    	var finder = new CKFinder();
    	finder.basePath = '../';
    	finder.selectActionFunction = SetFileField;
    	finder.popup();
    }
    function SetFileField( fileUrl )
    {
   	    document.getElementById( 'xFilePath' ).value = document.getElementById( 'xFilePath' ).value + fileUrl + "|\n";
    }
    function confirmdel()
    {
        return confirm("Bạn có đồng ý xóa không ?");
    }
	</script>
</head>