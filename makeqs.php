<?php

ini_set("display_errors","0");
ERROR_REPORTING(E_NONE);


$conds = <<<OKDONE
<div class="ui-widget">
  <label for="conditions">Your condition: </label>
  <input id="conditions">
</div>
OKDONE;
 
$medstable =<<<OKDONE
	<style>
	table.medstable td {
		border-top:1px solid black;
		padding-left: 8px;
		vertical-align:middle;
	}
	td.big {
		font-size:120%;
		font-weight:bold;
	}
	td.morn {
		background-color: rgba(255,255,0,.4);
	}
	td.eve {
		background-color: rgba(0,0,200,.2);
	}
	table.medstable img {
		width: 100px;
		margin-top:5px;
	}
	</style>
	<table class="medstable">
	<tr>
		<td class="medstable morn"><img src="pillsrc1.png"></td>
		<td class="medstable morn">Xanax (two pills)</td>
		<td class="medstable big morn" rowspan="2">8:30 AM<BR>(breakfast)</td></tr>
	</td>
		<td class="morn"><img src="pillsrc2.jpg"></td>
		<td class="morn">Lipitor (two pills)</td>
	</tr>
	<tr>
		<td class="medstable eve"><img src="pillsrc3.jpg"></td>
		<td class="medstable eve">Prednisone (one pill)</td>
		<td class="medstable big eve">10:10 PM<BR>(bedtime)</td>
	</tr>
	</table><BR>
	This will help you <B>stay in control of your anxiety</B>, <B>keep your heart healthy</b>, and <B>keep your skin clear</B>. 
OKDONE;

$msgs = array(
	"msg2"=>"<div style='text-align:center'>Welcome to LoopRX!<BR><BR><img src='looprx.png' style='width:300px;'><BR><BR>Let's get you set up. If you're in a hurry, we can do this in under 2 minutes.</div>", 
	"msg3"=>"We can set medication reminders for you automatically, or you can customize them for your personal schedule. ", 
	"msg4"=>"Okay! Here's your personalized medication schedule. $medstable ", 
	"msg5"=>"Okay! I'll keep this quick by only asking the necessary questions. ", 
	"msg6"=>"When do you usually get up in the morning?", 
	"msg7"=>"When do you usually go to bed at night?", 
	"msg8"=>"When do you usually eat breakfast?", 
	"msg9"=>"When do you usually eat lunch?", 
	"msg10"=>"When do you usually eat dinner?", 
	"msg11"=>"Do you have anything you do every day at a specific time? (like exercise, a TV show, a leaving for an appointment)", 
	"msg12"=>"Now for reminders! I can give you a standard reminder (a beep on your phone) or you can get customized messages or phone calls. ", 
	"msg13"=>"What kind of reminders would you like?", 
	"msg15"=>"Whom do you want to call you?", 	
	"msg26"=>"<img src='pills1.png'><BR><BR>When do you want to take this?", 
	"msg27"=>"<img src='pills2.png'><BR><BR>When do you want to take this?", 
	"msg28"=>"Done!</p><p>Use the “Schedule” button to review or change your schedule anytime.", 
	"msg29"=>"Now you can check out additional info about your meds, your health, or your care team.",
	"msg101"=>$conds,
	"msg110"=>"<div id='healthcond'><p>You can do a lot to prevent or delay getting type 2 diabetes (&ldquo;dy-ah-BEE-teez&rdquo;), including:</p><ul ><li>Watching your weight</li><li>Eating healthy</li><li>Staying active</li></ul><p>Diabetes is one of the leading causes of disability and death in the United States. If it&rsquo;s not controlled, diabetes can cause serious health problems.</p><p>The good news is that the small steps you take to prevent diabetes can lead to big rewards.</p><p>To get started, <a href=\"http://ndep.nih.gov/media/NDEP60_GAMEPLAN_4c_508.pdf\" >make your game plan to prevent type 2 diabetes [PDF - 7 MB]</a>.</p><p><strong>What is diabetes?</strong><br />Diabetes is a disease. People with diabetes have too much glucose (sugar) in their blood.</p><p>Your body depends on glucose for energy. When you eat, the food turns into glucose. Your blood carries the glucose to other parts of your body.</p><p>When you have diabetes, your body has trouble turning glucose into energy. Instead of being used by your body, the glucose builds up in your blood. The rest of your body is starved of energy.</p><p>Diabetes can&#39;t be cured, but it can be controlled. If it&rsquo;s not controlled, diabetes can lead to:</p><ul ><li>Blindness</li><li>Nerve damage</li><li>Kidney disease</li><li>Heart disease</li><li>Stroke</li></ul><p><strong><em>What is type 2 diabetes?</em></strong><br />There is more than one type of diabetes. Type 2 diabetes is the most common form of diabetes. People who are overweight are more likely to get type&nbsp;2&nbsp;diabetes.</p><p><strong>Am I at risk for diabetes?</strong><br />You may be at risk for type 2 diabetes if you:</p><ul ><li>Are age 45 or older</li><li>Are overweight</li><li>Have a parent or sibling with diabetes</li><li>Are African American, Hispanic or Latino American, American Indian, Asian American, or Pacific Islander</li><li>Have had diabetes during pregnancy (gestational diabetes) or have had a baby with a birth weight of more than 9 pounds</li><li>Have high blood pressure or cholesterol</li><li>Exercise less than 3 times a week</li><li>Have pre-diabetes</li></ul><p><strong><em>What is pre-diabetes? </em></strong><br />Pre-diabetes means the amount of glucose in your blood is higher than normal. If you have pre-diabetes, you are at risk for type 2 diabetes and other serious health problems, like heart disease and stroke.&nbsp;<a href=\"http://www.cdc.gov/diabetes/prevention/prediabetes.htm\" >Find out more about pre-diabetes</a>.</p><p><strong>What are the signs of diabetes?</strong><br />Many people with diabetes don&rsquo;t know they have the disease. Some signs of diabetes include:</p><ul ><li>Being very thirsty or very hungry</li><li>Feeling tired for no reason</li><li>Urinating (going to the bathroom) more than usual</li><li>Losing weight for no reason</li><li>Having cuts or bruises that are slow to heal</li><li>Having trouble seeing (blurry vision)</li><li>Losing feeling or having tingling in your hands or feet</li></ul><p>Not everyone who has diabetes has these signs. If you have any of these signs or think you may be at risk, talk with your doctor about getting tested for diabetes.</p></div>",
);

$buttons = array(
	"msg2"=>array(array("Next", 3)),
	"msg3"=>array(
		array("Personalize my schedule<BR>based on my daily habits", 5),
		array("Make a schedule for me<BR>(You can personalize it later)", 4),
		array("I'll tell you when I want to<BR>take my medications",26)
	),
	"msg10"=>array(array("#time#",4)),
	"msg12"=>array(array("Personalize my reminders",15),array("Use standard reminders<BR>(you can personalize them later)",28)),
	"msg13"=>array(array("Call my phone",15),array("Play an alert on my phone",28),array("Send me a text message",28)),
	"msg26"=>array(array("#time#",27)),
	"msg27"=>array(array("#time#",12)),
	"msg4"=>array(array("I want to change this.",3),array("OK",12)),
	"msg5"=>array(array("Next",6)),
	"msg6"=>array(array("#time#",10),),
	"msg7"=>array(array("#time#",8),),
	"msg8"=>array(array("#time#",9),),
	"msg9"=>array(array("#time#",10),),	
	"msg15"=>array(array("Ellen DeGeneres", 28), array("Sir Patrick Stewart", 28), array("Elvis", 28), array("A generic recording", 28), array("Record your own message", 28)),
	"msg28"=>array(array("Next", 29)),
	"msg29"=>array(array("Medication info", 100),array("Health condition info", 110),array("My care team", 102),array("I'm done for now", 103)),
	"msg101"=>array(array(">>>", 110)),
	"msg110"=>array(array("restart", 2)),
);

$template =<<<OKDONE
			<!-- ##n## -->
			<div data-role="page" id="page_##n##">
			$header
			<div data-role="content" id="content_##n##">
			<div class='question' id='div-q##n##'>
			<div class='qprompt' id='prompt-q_##n##'><p>##qtext##</p></div>

			<div class='qoptions' id='options-q##n##'>
			<input type="text" name="q##n##" id="q##n##" value="not set" class="response" />
							##buttons##

<!--							##backbutton## -->
			</div>

			<!-- set these buttons to all set the answer and move on. so much more foolproof. :D-->
			<script>
				\$(document).ready( function() {	
					var q=\$("#q##n##");
					\$("#options-q##n## .ui-btn:not('.backbutton')").click( function() {
						var resp = \$( this ).html();
						q.val(resp);
						console.log("set " + q.attr('name') + " to " + q.val());
						$ifend
					});
				});
			</script>

			</div>
			</div>
			</div>
OKDONE;

$output = "";
$buttemplate =<<<OKDONE
	<div><a href="###dest##" id="q##n##p##i##" class="ui-btn p##n##button" data-theme="b">##label##</A></div>
OKDONE;
$timeinput =<<<OKDONE
	<div class="ui-field-contain"> 
		<input name="mode##n##" id="mode##n##" type="text"  data-role="datebox" data-options='{ "mode":"timebox"}' />
	</div>
	<div><a href="###dest##" id="q##n##p##i##" class="ui-btn p##n##button" data-theme="b">Next</A></div>
OKDONE;


$lastpage = "";
foreach($msgs as $n=>$msg) {
	$newq = $template;
	$newq = str_replace("##n##", "$n", $newq);
	$newq = str_replace("##qtext##", $msg, $newq);
	$btns = $buttons[$n];
	$i=1;
	$btext = "";
	foreach($btns as $btn) {
		if($btn[0]=="#time#") { $b = $timeinput; }
		else { $b = $buttemplate; }
		$b = str_replace("#time#", $timeinput, $b);
		$b = str_replace("##n##", "$n", $b);
		$b = str_replace("##i##", $i, $b);
		$b = str_replace("##label##", $btn[0], $b);
		$b = str_replace("##dest##", "page_msg".$btn[1], $b);
		$i++;
		$btext .= $b;
	}
	$newq = str_replace("##buttons##", $btext, $newq);
	$output .= $newq;
	$lastpage = $n;
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>LoopRX</title>
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.css">
       <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="http://cdn.jtsage.com/datebox/1.4.5/jqm-datebox-1.4.5.min.css" />
	<style>
		div.subemotion {
			margin-left: 20px;
			display:none;
		}
		div.subemotion ui-btn {
			background-color: #F0F0FF;
		}
		input[type='text'],textarea {font-size:16pt !important;}
		input[type='text']:focus,textarea:focus {font-size:16pt !important;background-color: rgba(230,230,255,.8);}
		.ui-btn-inner { 
			white-space: normal !important; 
		}
	</style>
	<link rel="stylesheet" href="https://star.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">

	<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>

    <script type="text/javascript" src="http://cdn.jtsage.com/external/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="http://dev.jtsage.com/jQM-DateBox/js/doc.js"></script>
    <script type="text/javascript" src="http://cdn.jtsage.com/datebox/1.4.5/jqm-datebox-1.4.5.core.min.js"></script>
    <script type="text/javascript" src="http://cdn.jtsage.com/datebox/1.4.5/jqm-datebox-1.4.5.mode.calbox.min.js"></script>
    <script type="text/javascript" src="http://cdn.jtsage.com/datebox/1.4.5/jqm-datebox-1.4.5.mode.datebox.min.js"></script>
    <script type="text/javascript" src="http://cdn.jtsage.com/datebox/1.4.5/jqm-datebox-1.4.5.mode.flipbox.min.js"></script>
    <script type="text/javascript" src="http://cdn.jtsage.com/datebox/1.4.5/jqm-datebox-1.4.5.mode.slidebox.min.js"></script>
    <script type="text/javascript" src="http://cdn.jtsage.com/datebox/1.4.5/jqm-datebox-1.4.5.mode.customflip.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>

	<!--	<link rel="stylesheet" type="text/css" href="http://ucsflowerstress.org/pinger/style/questions.css">-->
<!--	<meta name="viewport" content="width=300, initial-scale=1.0"/>  -->
	<meta name="viewport" content="initial-scale=0.8, width=device-width" /> 
	<meta name="HandheldFriendly" content="true"/>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8"><script language="javascript">
	function foundLocation(position) {
// 		var lat = position.coords.latitude;
// 		var long = position.coords.longitude;
// 		document.getElementById("loclat").value = lat;
// 		document.getElementById("loclon").value = long;
//		alert('Found location: ' + lat + ', ' + long);
	}
		function noLocation() {
//		alert('Could not find location');
		document.getElementById("loclat").value = "couldn't detect";
		document.getElementById("loclon").value = "couldn't detect";
	}
</script>
<script>
	function submitThis() {
// 		currently just submits, but could handle any other pre-submission stuff that's needed too
		$("#pingform").submit();
		return true;
	}

	function uncap(style) {
		$("." + style).each( function(index) {
			$( this ).html($( this ).html().toLowerCase());
			$( this ).css("font-weight", "normal");			
			$( this ).css("color", "#777799");			
		});	
	}
	function cap(eselect) {
		eselect = "#"+eselect;
// 		console.log("capping " + eselect);
// 		console.log("content: "+$(eselect).html());
		$(eselect).html($(eselect).html().toUpperCase());
		$(eselect).css("font-weight", "bold");
		$(eselect).css("color", "black");
// 		$(eselect).css("background", "blue");
	}
 	$(document).ready( function() {
 	  $(function() {
		var availableTags = [
			"Acid reflux",
			"Anxiety",
			"Congestive heart failure",
			"COPD",
			"Diabetes"
		];
		$( "#conditions" ).autocomplete({
		  source: availableTags
		});
	  });

		$(".response").css("display", "none");
		$("a").attr("data-transition", "slide");
		$("#q45").val(Date());
//		window.location.href="#page1";		
 		params = getgets();
	 	updatelastcall("LASTTIMESTR");
//  		console.log("updateid" + params['cid']);
// 	 	updateid(cid);
	 	updatelasttime('LASTTIMESTR');
		window.location.href="#page_msg2";
		console.log("time is "+window.time);
//  		$(".question:last a").click(function() {
//  			$("#pingform").submit();
//  			return false;
//  		});
//		dumptext();
// set up the global variables used for continue button gating
		window.continues = {
			"p2continue":['required', 'required'],
			"p3continue":['required', 'filled'],
			"p4continue":['required', 'required'],
			"p6continue":['required', 'required'],
			"p10continue":['required'],
			"p12continue":['required']
		}					
 	});

// this isn't much of a function. Just split off for readability.
 	
 	function checkEnable(button, index, value) {
		curval = window.continues[button][index];
//	Once it's been answered (set to 'filled'), it can never be set back.
		if(curval=='unrequired' | curval=='required') {
	 		window.continues[button][index] = value;
	 	}
 		console.log(window.continues[button]);
		allow=true;
 		for(var i=0; i < window.continues[button].length; i++) {
// This was nice but doesn't work when some fields should remain true even if they become required, then unrequired, then required again.
//  		allow = allow & window.continues[button][i];
			if(window.continues[button][i]=='required') {
				allow=false;
			}
 		}
 		console.log("allow: "+allow);
 		if(allow) {
 			$("#"+button).removeClass("ui-disabled");
 		}
 		else {
 			$("#"+button).addClass("ui-disabled");
 		}
 		return allow;
 	}	

	function updateid(id) {
		$("#q44").val(id);
		console.log("q44 set to "+	$("#q44").val());
	}
	
	function updatelasttime(lasttime) {
		updateinfo = "using last call time: " + lasttime;
		$("#q49").val(updateinfo);
		console.log("q49 set to "+	$("#q49").val());
	}
	
	function updatelastcall(lasttime) {
		if(lasttime) {
			console.log("setting lasttime spans to "+lasttime);
			$("span.lasttime").html(" ("+lasttime+")");
		}
		else {
			console.log("updatelastcall failed because lasttime was blank");
		}
	}
	function getgets() {
		var urlParams;
		(window.onpopstate = function () {
		    var match,
	        pl     = /\+/g,  // Regex for replacing addition symbol with a space
	        search = /([^&=]+)=?([^&]*)/g,
	        decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
	        query  = window.location.search.substring(1);
		    urlParams = {};
    		while (match = search.exec(query))
    		   urlParams[decode(match[1])] = decode(match[2]);
   // 		   console.log("detected URL param " + decode(match[1]) + " : " + decode(match[2]));
			}
		)();
		return urlParams;
	}
	
	function dumptext() {
		var dump;
		$( ".qprompt" ).each( function (index) {
			dump = dump + " --- " + $( this ).attr("id") + " : " + $( this ).html();
		})
		$("#q50").val(dump);
	}


	</script>
	</head>
	<body id="hibody" onload="">
<!-- fastclick span used to remove delay on button tap -->


<span id="fastclick">
<input type="hidden" name="q60" id="q60" value="empower">
<input type="hidden" name="q44" id="q44" value="CID NOT RETRIEVED">
<input type="hidden" name="q49" id="q49" value="last call time not set">
<input type="hidden" name="q45" id="q45" value="server vars removed">
<div name="pingtime" id="pingtime" style="display:none">pingtime not filled in
</div>

<div data-role="page" id="pageBlank">
</div>


<?php echo($output); ?>




<div data-role="page" id="pageend">
<div data-role="header" id="headerend">
<h1>Finished!
</h1>
</div>
<div data-role="content" id="contentend">
<div class="controls" id="controls-qend">
<br/>
<br/>
<input type="submit" id="submitbutton" data-theme="b" value="Submit">
<a href='#page4' class='ui-btn' id="lastback">
<
< Go back
</A>
<br/>
</div>
</div>
</div>
<input type="hidden" id="alltext" name="48" value="location detector not run">
<input type="hidden" id="loclat" name="46" value="location detector not run">
<input type="hidden" id="loclon" name="47" value="location detector not run">
</form>
</span>
</html>	