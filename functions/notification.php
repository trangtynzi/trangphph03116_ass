<?php
/*
* XHN CMS 1.0
* Author : Xuan Hong
* Website : http://xuanhongnet.com
* E-mail : design@xuanhongnet.com
*/
    function alert_success($msg)
    {
        return "<div class=\"alert alert-success\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
			<strong>".$msg."</strong>
		</div>";
    }
    function alert_error($msg)
    {
        return "<div class=\"alert alert-error\">
			<button type=\"\" class=\"close\" data-dismiss=\"alert\">×</button>
			<strong>".$msg."</strong>
		</div>";
    }
