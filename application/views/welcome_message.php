<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome Prodigies</title>
	<link rel="stylesheet" href="/dpw/template.css" type="text/css" />
</head>
<style>
	html,body{background:#222;margin:0;}
	body{border-top:4px solid #000;}
	.content{color:#777;font:12px/1.4 "helvetica neue",arial,sans-serif;width:620px;margin:20px auto;}
	h1{font-size:12px;font-weight:normal;color:#ddd;margin:0;}
	p{margin:0 0 20px}
	a {color:#22BCB9;text-decoration:none;}
	.cred{margin-top:20px;font-size:11px;}
</style>

<script type="text/javascript" src="/dpw/jquery.js"></script>
<script type="text/javascript" src="/dpw/galleria-1.2.5.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	});
</script>

<body>
<div id="templatemo_site_title_bar_wrapper">
	<div id="templatemo_site_title_bar">
	        <div id="site_title">
                <h1>
                    <img src="/dpw/images/logo.png" alt="CSS Templates" />
                </h1>
			</div>
            <div id="templatemo_menu">
				<ul>
					<li><?php echo anchor('welcome','Home') ?></li>
                    <li><?php echo anchor('welcome/about','About Me') ?></li>
                    <li><?php echo anchor('welcome/login','Are you a prodigy? Sign here') ?></li>
                </ul>				
            </div>
            
    </div> 

</div> 

<div id="templatemo_banner_wrapper">
	
    <div id="templatemo_banner">
    
    	<p>"There are only two ways to live your life. One is as though nothing is a miracle. The other is as though everything is a miracle."
		<br/><span>Albert Einstein</span></p>
    
    </div> <!-- end of templatemo_banner -->

</div> <!-- end of templatemo_banner_wrapper -->


</body>
</html>