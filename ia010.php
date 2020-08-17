<!-- Robyn Start 04-10-2017 -->
<html>
<head>
<script src="https://brisim.bri.co.id/assets/js/jquery-2.1.4.min.js"></script>
<script src="https://brisim.bri.co.id/assets/js/spinbox.min.js"></script>
<script src="https://brisim.bri.co.id/assets/js/spin-js/spin.js"></script>
<style type="text/css">
#spinner-preview{opacity: 0.3;filter: alpha(opacity=30); /* For IE8 and earlier */ z-index:100; position:absolute; top:0; left:0; width:100%; height:100%; box-sizing:border-box; background-color:black; }
</style>
<script type="text/javascript">
// Namespace
var Rats = {};

Rats.UI = {};

Rats.UI.LoadAnimation = {
	"start" : function() {
	$('#spinner-preview').css('display','inline');
	$('#spinner-preview').height('100%');
	$('#spinner-preview').width('100%');
	var top = $(window).height()/2
	var left = $(window).width() / 2;
	 
	var opts = {
		lines:13,
		length:28,
		width:14,
		radius:42,
		scale:0.2,
		corners:1,
		color:'#FFFFFF',
		opacity:0.25,
		rotate:0,
		direction:1,
		speed:1,
		trail:60,
		fps:20,
		zIndex:2e9,
		className:'spinner',
		top:'200px',
		left:left + 'px',
		shadow:false,
		hwaccel:false,
		position:'absolute'};

		var target = document.getElementById('spinner-preview');
		return new Spinner(opts).spin(target);
},
"stop" : function(spinner) {
spinner.stop();
$('#spinner-preview').fadeOut(200);
//$('#spinner-preview').css('display','none');
//$('#spinner-preview').hide.empty();
}
};

$(window).load(function(){
	spinner = Rats.UI.LoadAnimation.start();
});
	</script>
	</head>
			
		<body onLoad="document.FrmSendSession.submit();">  
		<div style="display:none;" id="spinner-preview"></div><!-- spin.js -->
		<form name="FrmSendSession" id="FrmSendSession" action="http://rs2.portaldwh.bri.co.id" method="post">
	        <input type="hidden" id="user_id" name="user_id" value="00174122" />
			<input type="hidden" id="app_name" name="app_name" value="BRISIM" />
			<input type="hidden" id="key" name="key" value="00174122ip=rs3.portaldwh.bri.co.id&addr=ZWR0ekpxMi80bGdwTlBIbVFxMGVjcEsvL2lhWWdWRW5odm5JQnAzTFhwbWxXbFNENU1HaDd0dkw1NnlscFZGaXUrb1Q4R01aREhFcmZ0OW96c2ZFYVE9PQapibrisimrapibrisimrtimbrisim&KanwilLogin=0&CabangLogin=0&UkerLogin=0&rs:Command=Render" />
			<input type="hidden" id="client_ip" name="client_ip" value="192.168.67.29" />
	        <input type="hidden" id="reportAddr" name="reportAddr" value="/cr_2005/ia010" />
			<input type="hidden" id="reportIp" name="reportIp" value="rs3.portaldwh.bri.co.id" />
			<input type="hidden" id="QueryStr" name="QueryStr" value="ip=rs3.portaldwh.bri.co.id&addr=ZWR0ekpxMi80bGdwTlBIbVFxMGVjcEsvL2lhWWdWRW5odm5JQnAzTFhwbWxXbFNENU1HaDd0dkw1NnlscFZGaXUrb1Q4R01aREhFcmZ0OW96c2ZFYVE9PQapibrisimrapibrisimrtimbrisim&KanwilLogin=0&CabangLogin=0&UkerLogin=0&rs:Command=Render" />
		</form>
		</body>
							
</html><script id="f5_cspm">(function(){var f5_cspm={f5_p:'MIBEIDJIDAJLMADKHADIAOACDGGOEINGIEFCEKIKOKJLLOECBCCHEIIKDONPMEKHMCCMDCFEONNBHIMHILALMFOLEKHAJBCDFIKLDNLJCEHAHIHLDNFLOKBJJAMLCMNB',setCharAt:function(str,index,chr){if(index>str.length-1)return str;return str.substr(0,index)+chr+str.substr(index+1);},get_byte:function(str,i){var s=(i/16)|0;i=(i&15);s=s*32;return((str.charCodeAt(i+16+s)-65)<<4)|(str.charCodeAt(i+s)-65);},set_byte:function(str,i,b){var s=(i/16)|0;i=(i&15);s=s*32;str=f5_cspm.setCharAt(str,(i+16+s),String.fromCharCode((b>>4)+65));str=f5_cspm.setCharAt(str,(i+s),String.fromCharCode((b&15)+65));return str;},set_latency:function(str,latency){latency=latency&0xffff;str=f5_cspm.set_byte(str,48,(latency>>8));str=f5_cspm.set_byte(str,49,(latency&0xff));str=f5_cspm.set_byte(str,43,2);return str;},wait_perf_data:function(){try{var wp=window.performance.timing;if(wp.loadEventEnd>0){var res=wp.loadEventEnd-wp.navigationStart;if(res<60001){var cookie_val=f5_cspm.set_latency(f5_cspm.f5_p,res);window.document.cookie='f5avr1750012068aaaaaaaaaaaaaaaa='+encodeURIComponent(cookie_val)+';path=/';}
return;}}
catch(err){return;}
setTimeout(f5_cspm.wait_perf_data,100);return;},go:function(){var chunk=window.document.cookie.split(/\s*;\s*/);for(var i=0;i<chunk.length;++i){var pair=chunk[i].split(/\s*=\s*/);if(pair[0]=='f5_cspm'&&pair[1]=='1234')
{var d=new Date();d.setTime(d.getTime()-1000);window.document.cookie='f5_cspm=;expires='+d.toUTCString()+';path=/;';setTimeout(f5_cspm.wait_perf_data,100);}}}}
f5_cspm.go();}());</script>