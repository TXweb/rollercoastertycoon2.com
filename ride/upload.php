	<html>
	<body bgcolor="#333399" text="#FFFFFF" link="#FFFF00" vlink="#FFFF00" alink="#FFFF00"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"><img src="images/sub_upload.gif" width="134" height="30"><br><br>
<table bgcolor=black><td><table cellpadding=3><tr><td bgcolor="#333399"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">
Think you've made a great ride?  Upload it and see what the RCT community thinks.
We accept rides from RollerCoaster Tycoon<sup>&reg;</sup> 2.<br>
</td></tr>
<form enctype="multipart/form-data" method=post name=post>
<tr><td bgcolor="#333399"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">
<input type=hidden name=form_submit value=1>
<input type=hidden name=MAX_FILE_SIZE value=326960>
Username: <input type=text name=username><br>
Password: <input type=password name=password><br>

	<script language="JavaScript">
		var UserName = getCookie("cusername");
		var Password = getCookie("cpassword");
	
		if (document.cookie) {
			if (UserName != null) {
				document.post.username.value = getCookie("cusername");
				if (getCookie("cpassword")) document.post.password.value = getCookie("cpassword");
			}
		}
	
		function getCookie(name) {
			if (name == "offset" && offset) {
				return offset
			}
			if (name == "lasttime" && lasttime) {
				return lasttime
			}
			var dc = document.cookie;
			var prefix = name + "=";
			var begin = dc.indexOf("; " + prefix);
	
			if (begin == -1) {
				begin = dc.indexOf(prefix);
				if (begin != 0) return null;
			} else
				begin += 2;
				var end = document.cookie.indexOf(";", begin);
			if (end == -1)
			end = dc.length;
			return unescape(fixCookie(dc.substring(begin + prefix.length, end)));
		}
		
		function fixCookie(temp) {
			while (temp.indexOf("+")>-1) {
				pos= temp.indexOf("+");
				temp = "" + (temp.substring(0, pos) + " " +
				temp.substring((pos + 1), temp.length));
			}
			return temp;
		}
	</script>
File: <input name=trackupload type=file><br>
<font size=1>Overwrite old coaster of same name (your previous votes will be lost!):</font> <input type=checkbox name=overwrite><br><br>
<input type=submit value="Upload File">
</form>
</td></tr>
<tr><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">
<b>How to Save Your Track (From Inside RollerCoaster Tycoon<sup>&reg;</sup> 2):</b>
</td></tr>
<tr><td bgcolor="#333399"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">
1.)Create your track<br>
2.)Test your track (click the yellow light in the ride window and let the test run once)<br>
3. Test your coaster design (see page 38 in the game manual). You must complete the test before you can save the design.
4. Save your design by clicking on the diskette icon in the "Measurements and Data" tab (see page 40 in the game manual).
</td></tr>
<tr><td><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">
<b>How to Upload Your Track:</b>
</td></tr>
<tr><td bgcolor="#333399"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">
1.)Click the "Browse" button (above)<br>
2.)Locate and select your track design file (usually located in <nobr>&nbsp;&nbsp;&nbsp;&nbsp;C:\Program Files\Infogrames Interactive\RollerCoaster Tycoon 2\Tracks)</nobr> and click "OK"<br>
3.)Click "Upload File" above
</td></tr></table></td></table>