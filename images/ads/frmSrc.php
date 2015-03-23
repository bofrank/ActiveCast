<?php

?><html><head>
<script language="javascript">
	function expand(){	
		parent.document.getElementById("test").height="500";
	}
	function contract(){	
		parent.document.getElementById("test").height="60";
	}
</script>
<head>
<body>

<div onClick="expand()">expand</div>
<div onClick="contract()">contract</div>

</body>
</html>