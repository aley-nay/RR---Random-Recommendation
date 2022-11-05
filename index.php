<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Baloo+Da+2:400,700&display=swap" rel="stylesheet">

	<style type="text/css">
		body{
			display: flex;
    		justify-content: center;
    		align-items: center;
    		font-family: 'Baloo Da 2', cursive;

		}
		button{
			width: 100%;
			margin-bottom: 20px;
		}
		#ep_data{
			max-width: 250px;
    		text-align: justify;
		}
		img{width: 100%;}
		h1,h2 {margin-bottom: 0px;}
		h2{margin-top: 0px;}
		h1{text-align: center;}
	</style>
</head>
<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<div id="ep_box">
	<h1>Random episodes</h1>
	<button type="button" onclick="ep_function()">Random Episode</button>
	<div id="ep_data"></div>
</div>
<script type="text/javascript">
    function ep_function () {
      $.ajax({
        url:"function.php",
        type: "POST",
        success:function(result){
        	$("#ep_data").html(result);
       }
     });
 }
</script>
</body>
</html>