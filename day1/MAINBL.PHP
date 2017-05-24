<html>
<title>chatroom</title>
<head>
<link rel="stylesheet" type="text/css" href="first.css">
<script>
function formValidate() {
        var x = document.forms["myform"]["msg"].value;
		
		if (x.trim()==null || x.trim()==""|| x===" ") {
            		alert("dont try to put spaces or tags");
            		return false;
        	}
		
		if(/[^?#$@!^:;"',.%*{}() a-zA-Z]/.test(x))
		{
			alert("only alphabets and some special symbols are aloud");
			return false;
		}
		if(x.length<2)
			{alert("atleast 2 alphabets required");
			return false;
			}
		}
</script>
</head>
<body>
<form method="post" onsubmit="return formValidate()" action="chatapp.php" name="myform">
<div id="send"><input type="submit" value="Go"/></div>
<div id="msg"><input type="text" name="msg" maxlength=65 placeholder="WHAT'S ON YOUR MIND" required/></div>

</form>
</body>
</html>
