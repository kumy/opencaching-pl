<?php 
// 050242-blue-jelly-icon-natural-wonders-flower13-sc36.png
?>
<script src="tpl/stdstyle/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="lib/tinymce4/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    width: 600,
    menubar: false,
	toolbar_items_size: 'small',
    language : "{language4js}",
    toolbar1: "newdocument | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image code | preview ",
    toolbar3: "bold italic underline strikethrough |  alignleft aligncenter alignright alignjustify | hr | subscript superscript | charmap emoticons | forecolor backcolor | nonbreaking ",

     plugins: [
        "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
     ],
 });
</script>
<script type="text/javascript"> 
<!--
function cancelDescEdit() {
	event.preventDefault();
	$("#powerTrailDescription").show();
	$("#toggleEditDescButton").show();
	$("#powerTrailDescriptionEdit").hide();
	$("#editDescSaveButton").hide();
	$("#editDescCancelButton").hide();
}
function toggleEditDesc() {
	event.preventDefault();
	$("#powerTrailDescription").hide();
	$("#toggleEditDescButton").hide();
	$("#powerTrailDescriptionEdit").show();
	$("#editDescSaveButton").show();
	$("#editDescCancelButton").show();
}
function ajaxUpdatePtDescription(){
	var ptDescription = tinymce.get('descriptionEdit').getContent();
	// alert(ptDescription);
	
	$('#ajaxLoaderDescription').show();
	$("#editDescSaveButton").hide();
	$("#editDescCancelButton").hide();
	
	request = $.ajax({
    	url: "powerTrail/ajaxUpdatePtDescription.php",
    	type: "post",
    	data:{projectId: $('#xmd34nfywr54').val(), ptDescription: ptDescription },
	});

    // callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
    	$("#descOKimg").show();
    	$(function() {
	    	setTimeout(function() {
       			$("#descOKimg").fadeOut(1000)
    		}, 3000);
		  });
       	$('#powerTrailDescription').html(ptDescription); 
        console.log("Hooray, it worked!"+response);
    });

    // callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // log the error to the console
        console.error(
            "The following error occured: "+
            textStatus, errorThrown
        );
    });

    // callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
    	
    	
    	$('#powerTrailDescriptionEdit').hide();
    	$('#ajaxLoaderDescription').hide();
    	$('#powerTrailDescription').show();
    	$('#toggleEditDescButton').show();

    });

    // prevent default posting of form
    event.preventDefault();

	return false;
	
	
	
	
}

function cancellAddNewUser2pt(){
	event.preventDefault();
	$('#addUser').hide();
	$('#dddx').show();
	$('.removeUserIcon').hide();
}
function ajaxRemoveUserFromPt(userId){
	
	$('#ajaxLoaderOwnerList').show();
	$('#ownerListUserActions').hide();
	
	request = $.ajax({
    	url: "powerTrail/ajaxremoveUserFromPt.php",
    	type: "post",
    	data:{projectId: $('#xmd34nfywr54').val(), userId: userId },
	});

    // callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
       	$('#powerTrailOwnerList').html(response); 
        console.log("Hooray, it worked!"+response);
        
    });

    // callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // log the error to the console
        console.error(
            "The following error occured: "+
            textStatus, errorThrown
        );
    });

    // callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
    	$('#ajaxLoaderOwnerList').hide();
    	$('#addUser').hide();
    	$('#ownerListUserActions').show();
    	$('.removeUserIcon').hide();
    	cancellAddNewUser2pt();
    });

    // prevent default posting of form
    event.preventDefault();

	return false;
	
		
}

function ajaxAddNewUser2pt(ptId) {
	$('#ajaxLoaderOwnerList').show();
	$('#ownerListUserActions').hide();
	
	request = $.ajax({
    	url: "powerTrail/ajaxAddNewUser2pt.php",
    	type: "post",
    	data:{projectId: ptId, userId: $('#addNewUser2pt').val()},
	});

    // callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
       	$('#ownerListOKimg').show();
       	$('#powerTrailOwnerList').html(response);
     	$(function() {
	    	setTimeout(function() {
       			$("#ownerListOKimg").fadeOut(1000)
    		}, 3000);
		}); 
        console.log("Hooray, it worked!"+response);
        
    });

    // callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // log the error to the console
        console.error(
            "The following error occured: "+
            textStatus, errorThrown
        );
    });

    // callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
    	$('#ajaxLoaderOwnerList').hide();
    	$('#addUser').hide();
    	$('#ownerListUserActions').show();
    	$('.removeUserIcon').hide();
    	cancellAddNewUser2pt();
    });

    // prevent default posting of form
    event.preventDefault();

	return false;
}

function clickShow(section, section2){
	event.preventDefault();
	$('#'+section2).hide();
	$('#'+section).show();
	$('.removeUserIcon').show();
}

var request;
function ajaxCountPtCaches(ptId) {
	$('#ajaxLoaderCacheCount').show();
	$('#cacheCountUserActions').hide();
	request = $.ajax({
    	url: "powerTrail/ajaxCachePtCount.php",
    	type: "post",
    	data:{projectId: ptId},
	});

    // callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
       	$('#powerTrailCacheCount').html(response); 
        console.log("Hooray, it worked!"+response);
        
    });

    // callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // log the error to the console
        console.error(
            "The following error occured: "+
            textStatus, errorThrown
        );
    });

    // callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
    	$('#ajaxLoaderCacheCount').hide();
    	$('#cacheCountUserActions').show();
    });

    // prevent default posting of form
    event.preventDefault();

	return false;
	}
	
	
	


function ajaxAddCacheToPT(cacheId)
{
	var projectId = $('#ptSelectorForCache'+cacheId).val();
    $.ajax({
      url: "powerTrail/ajaxAddCacheToPt.php",
      type: "post",
      data: {projectId: projectId, cacheId: cacheId},
      success: function(data){
      	  // alert(data);
          $("#cacheInfo"+cacheId).show();
          
          
          $(function() {
	    	setTimeout(function() {
       			$("#cacheInfo"+cacheId).fadeOut(1000)
    		}, 3000);
		  });

          
      },
      error:function(){
          alert("failure");
      }   
    }); 
}


function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText1");
	var text2 = document.getElementById("displayText2");
	var os_tytul = document.getElementById("os_tytul");
	var help_link1 = document.getElementById("help_link1");
	var help_link2 = document.getElementById("help_link2");
	var cialo = document.getElementById("cialo");
	
	if(ele.style.display == "block") 
	 {
      ele.style.display = "none";
	  // os_tytul.style.display = "block";
	  text.innerHTML = "{{os_zobo}}";
	  text2.innerHTML = "{{os_zobo}}";
	  help_link1.style.display = "block";
	  help_link2.style.display = "none";
	  cialo.style.display = "block";
  	 }
	else 
	 {
	  ele.style.display = "block";
	  // os_tytul.style.display = "none";
	  text.innerHTML = "{{os_powrot}}";
	  text2.innerHTML = "{{os_powrot}}";
	  help_link1.style.display = "none";
	  help_link2.style.display = "block";
	  cialo.style.display = "none";
	 }
} 
// -->
</script>

<style>
#linearBg1 {
	height: 25px;
	color: #E7E5DC;
	font-family: verdana;
	font-size: 12px;
	font-weight: bold;
	padding-left:8px;
	background-color: #1a82f7; background-repeat: repeat-y; 
	background: -webkit-gradient(linear, left top, right top, from(#1a82f7), to(#2F2727)); 
	background: -webkit-linear-gradient(left, #2F2727, #1a82f7); 
	background: -moz-linear-gradient(left, #2F2727, #1a82f7); 
	background: -ms-linear-gradient(left, #2F2727, #1a82f7); 
	background: -o-linear-gradient(left, #2F2727, #1a82f7);
	-moz-border-top-right-radius: 8px;
	-webkit-border-top-right-radius: 8px;
	border-top-right-radius: 8px;
}
.userActions {
	font-family: verdana;
	font-size: 9px;
}
.inlineTd{
	padding:15px;
}
.ptTd{
	font-family: verdana;
	font-size: 12px;
	text-align:center;
}


.editPtDataButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #97c4fe;
	-webkit-box-shadow:inset 0px 1px 0px 0px #97c4fe;
	box-shadow:inset 0px 1px 0px 0px #97c4fe;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #3d94f6), color-stop(1, #1e62d0) );
	background:-moz-linear-gradient( center top, #3d94f6 5%, #1e62d0 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#3d94f6', endColorstr='#1e62d0');
	background-color:#3d94f6;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #337fed;
	display:inline-block;
	color:#ffffff !important;
	font-family:arial;
	font-size:11px;
	font-weight:normal;
	padding:0px 16px;
	text-decoration:none !important;
	text-shadow:1px 1px 0px #1570cd;
}.editPtDataButton:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #1e62d0), color-stop(1, #3d94f6) );
	background:-moz-linear-gradient( center top, #1e62d0 5%, #3d94f6 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e62d0', endColorstr='#3d94f6');
	background-color:#1e62d0;
}.editPtDataButton:active {
	position:relative;
	top:1px;
}
/* This imageless css button was generated by CSSButtonGenerator.com */


</style>

<link rel="stylesheet" href="tpl/stdstyle/css/ptMenuCss/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>

<body>
	
<input type="hidden" id="xmd34nfywr54" value="{powerTrailId}">



	
<div class="content2-pagetitle"> 
 <img src="tpl/stdstyle/images/blue/050242-blue-jelly-icon-natural-wonders-flower13-sc36_32x32.png" class="icon32" alt="geocache" title="geocache" align="middle" /> 
 {{pt001}} {powerTrailName}	
</div> 

<p>
<ul id="css3menu1" class="topmenu">
{powerTrailMenu}
</ul>
</p>



<div style="display: {displayCreateNewPowerTrailForm}">
	<form name="createNewPowerTrail" action="powerTrail.php" method="post">
		<table>
			<tr>
				<td>{{pt008}} </td>
				<td><input type="text" name="powerTrailName" /></td>
			</tr>
			<tr>
				<td>{{pt009}}</td>
				<td>
					{ptTypeSelector}
				</td>
			</tr>
			<tr>
				<td>{{pt010}}</td>
				<td>		
					<select name="status">
						<option value="1">{{pt006}}</option>
						<option value="2">{{pt007}}</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>{{pt011}}</td>
				<td>		
					<textarea name="description"></textarea>
				</td>
			</tr>
		<tr>
			<td><input type="submit" value="{{submit}}" name="createNewPowerTrail" /></td>
		</tr>
		</table>
	</form>
</div>

<div style="display: {displayUserCaches};">
	<div class="searchdiv">
		<table border="0" cellspacing="2" cellpadding="1" style="margin-left: 10px; line-height: 1.4em; font-size: 13px;" width="95%">
		<tr>
		 <td><a href="{os_script}?sort=wpt">waypoint</a></td>
		 <td><a href="{os_script}?sort=nazwa">{{cache_name}}</a></td>
		 <td><a href="{os_script}?sort=autor">{{pt002}}</a></td>
		</tr>
	   <tr>
        <td colspan="7"><img src="tpl/stdstyle/images/blue/dot_blue.png" height="1" width="100%"/></td>
      </tr>
		{keszynki}
      <tr>
       <td colspan="7"><img src="tpl/stdstyle/images/blue/dot_blue.png" height="5" width="100%"/></td>
      </tr>
      </table>
    </div>
</div>

<div style="display: {displayPowerTrails}">
	<table border=0 width=100%>
		<tr>
			<td colspan=7 id="linearBg1">{{pt035}}</td>
		</tr>
		<tr>
			<th class="ptTd">{{pt036}}</th>
			<th class="ptTd">{{pt037}}</th>
			<th class="ptTd">{{pt038}}</th>
			<th class="ptTd">{{pt039}}</th>
			<th class="ptTd">{{pt040}}</th>
			<th class="ptTd">{{pt041}}</th>
			<th class="ptTd">{{pt042}}</th>
		</tr>
		{PowerTrails}
	</table>
</div>

<!-- display single Power trail and all conected infos -->

<br /><br />
<p>{mainPtInfo}</p>

<div style="display: {displaySelectedPowerTrail}">
	
	<table border=0 width=100%>
		<tr>
			<td width=251><img src="{powerTrailLogo}" /></td>
			<td align="center">
				{powerTrailName} [ ? TU WSTAWIĆ MAPĘ ? ]
				
			</td>
		</tr>
		<tr>
			<td colspan="3" id="linearBg1">{{pt019}}</td>
		</tr>
		<tr>
			<td>{{pt022}}</td><td><span id="powerTrailCacheCount">{powerTrailCacheCount}</span></td><td align="right"><span class="userActions" id="cacheCountUserActions">{cacheCountUserActions}</span><span style="display: none" id="ajaxLoaderCacheCount"><img src="tpl/stdstyle/js/jquery_1.9.2_ocTheme/ptPreloader.gif" /></div></td>
		</tr>
		<tr>
			<td>{{pt023}}</td><td>{ptTypeName}</td>
		</tr>
		<tr>
			<td>{{pt024}}</td><td>{powerTrailDateCreated}</td>
		</tr>
		<tr>
			<td>{{pt025}}</td><td><span id="powerTrailOwnerList">{powerTrailOwnerList}</span></td>
			<td align="right">
				<span class="userActions" id="ownerListUserActions">{ownerListUserActions}</span>
				<span style="display: none" id="ajaxLoaderOwnerList"><img src="tpl/stdstyle/js/jquery_1.9.2_ocTheme/ptPreloader.gif" /></span>
				<img id="ownerListOKimg" style="display: none" src="tpl/stdstyle/images/free_icons/accept.png" />
			</td>
		</tr>
		
		<tr>
			<td colspan="3" id="linearBg1">{{pt034}}</td>
		</tr>
		<tr>
			<td class="inlineTd" colspan="2">
				
				<div id="powerTrailDescription">{powerTrailDescription}</div>
				<div id="powerTrailDescriptionEdit" style="display: none">
					<textarea id="descriptionEdit" name="descriptionEdit">{powerTrailDescription}</textarea>
				
				</div>
			</td>
			<td align="right" valign="bottom">
				{displayPtDescriptionUserAction}
				<span style="display: none" id="ajaxLoaderDescription"><img src="tpl/stdstyle/js/jquery_1.9.2_ocTheme/ptPreloader.gif" /></span>
				<a href="#" id="editDescCancelButton" style="display: none" onclick="cancelDescEdit()" class="editPtDataButton">{{pt031}}</a> 
				<br /> <br />
				<a href="#" id="editDescSaveButton" style="display: none" onclick="ajaxUpdatePtDescription()" class="editPtDataButton">{{pt044}}</a>
				<img id="descOKimg" style="display: none" src="tpl/stdstyle/images/free_icons/accept.png" />
			</td>
		</tr>
	</table>
	
	<table border=0 width=100%>
	<tr>
		<td colspan="2" id="linearBg1">{{pt020}} {powerTrailName}</td>
	</tr>
	{PowerTrailCaches}
	</table>
	
	<table border=0 width=100%>
		<tr>
			<td id="linearBg1">{{pt021}} {powerTrailName}</td>
		</tr>
		<tr>
			<td>{{pt015}}: {powerTrailserStats}</td>
		</tr>
	</table>
	
</div>

<div id="ajax"></div>