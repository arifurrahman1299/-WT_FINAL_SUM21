<html>
    <head></head>
	<boady>
	    <div align="center">
			<form>
			    <div>
				    <h4>Username:</h4>
					<input type = "text" name = "uname" id = "uname" placeholder ="Username" onkeyup="getVal(this);"/> <br/>
					<span id = "op"> </span>
				</div>
				<div>
				    <h4>Password:</h4>
					<input type = "password" placeholder ="Password"/>
					<span> </span>
				</div>
			</form>
			<button id = "g_btn" onclick="viewGFrom();">Login With Google</button>
			<span onmouseover="viewInfo();" onmouseout="hideInfo();">AIUB</span>
			<P id="aiub_info" style="display:none;">American International University-Bangladesh, commonly known by its acronym AIUB, is an accredited private university in Dhaka, Bangladesh.</p>
			<form id = "g_form" style = "display:none;">
			    <div>
				    <h4>Gmail:</h4>
					<input type = "text" placeholder ="Gmail"/>
					<span> </span>
				</div>
				<div>
				    <h4>Gmail Password:</h4>
					<input type = "password" placeholder ="Password"/>
					<span> </span>
				</div>
			</form>	
		</div>
		<script src="test.js"></script>
	</boady>
</html>