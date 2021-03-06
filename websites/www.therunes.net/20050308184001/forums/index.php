<!-- mod : profile cp -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">

<link rel="top" href="index.php" title="" />
<link rel="search" href="search.php" title="" />
<link rel="help" href="faq.php" title="" />
<link rel="author" href="memberlist.php" title="" />

<title>The Runes :: Index</title>
<!-- link rel="stylesheet" href="templates/subSilver/subSilver.css" type="text/css" -->
<style type="text/css">
<!--
/*
  The original subSilver Theme for phpBB version 2+
  Created by subBlue design
  http://www.subBlue.com

  NOTE: These CSS definitions are stored within the main page body so that you can use the phpBB2
  theme administration centre. When you have finalised your style you could cut the final CSS code
  and place it in an external file, deleting this section to save bandwidth.
*/

/* General page style. The scroll bar colours only visible in IE5.5+ */
body {
        background-color: #FBFBF9;
        scrollbar-face-color: #EEF3F6;
        scrollbar-highlight-color: #FFFFFF;
        scrollbar-shadow-color: #EEF3F6;
        scrollbar-3dlight-color: #D7DBE1;
        scrollbar-arrow-color:  #202664;
        scrollbar-track-color: #FDFFFF;
        scrollbar-darkshadow-color: #7C533F;
}

/* General font families for common tags */
font,th,td,p { font-family: Verdana, Arial, Helvetica, sans-serif }
a:link,a:active,a:visited { color : #202664; }
a:hover                { text-decoration: underline; color : #DD6900; }
hr        { height: 0px; border: solid #D7DBE1 0px; border-top-width: 1px;}

/* This is the border line & background colour round the entire page */
.bodyline        { background-color: #FFFFFF; border: 1px #7C533F solid; }

/* This is the outline round the main forum tables */
.forumline        { background-color: #FFFFFF; border: 2px #707470 solid; }

/* Main table cell colours and backgrounds */
td.row1        { background-color: #FDFFFF; }
td.row2        { background-color: #EEF3F6; }
td.row3        { background-color: #D7DBE1; }

/*
  This is for the table cell above the Topics, Post & Last posts on the index.php page
  By default this is the fading out gradiated silver background.
  However, you could replace this with a bitmap specific for each forum
*/
td.rowpic {
                background-color: #FFFFFF;
                background-image: url(templates/subSilver/images/);
                background-repeat: repeat-y;
}

/* Header cells - the blue and silver gradient backgrounds */
th        {
        color: #404000; font-size: 11px; font-weight : bold;
        background-color: #202664; height: 25px;
        background-image: url(templates/subSilver/images/image7.gif);
}

td.cat,td.catHead,td.catSides,td.catLeft,td.catRight,td.catBottom {
                        background-image: url(templates/subSilver/images/);
                        background-color:#D7DBE1; border: #F7F7F7; border-style: solid; height: 28px;
}

/*
  Setting additional nice inner borders for the main table cells.
  The names indicate which sides the border will be on.
  Don't worry if you don't understand this, just ignore it :-)
*/
td.cat,td.catHead,td.catBottom {
        height: 29px;
        border-width: 0px 0px 0px 0px;
}
th.thHead,th.thSides,th.thTop,th.thLeft,th.thRight,th.thBottom,th.thCornerL,th.thCornerR {
        font-weight: bold; border: #FFFFFF; border-style: solid; height: 28px;
}
td.row3Right,td.spaceRow {
        background-color: #D7DBE1; border: #F7F7F7; border-style: solid;
}

th.thHead,td.catHead { font-size: 12px; border-width: 1px 1px 0px 1px; }
th.thSides,td.catSides,td.spaceRow         { border-width: 0px 1px 0px 1px; }
th.thRight,td.catRight,td.row3Right         { border-width: 0px 1px 0px 0px; }
th.thLeft,td.catLeft          { border-width: 0px 0px 0px 1px; }
th.thBottom,td.catBottom  { border-width: 0px 1px 1px 1px; }
th.thTop         { border-width: 1px 0px 0px 0px; }
th.thCornerL { border-width: 1px 0px 0px 1px; }
th.thCornerR { border-width: 1px 1px 0px 0px; }

/* The largest text used in the index page title and toptic title etc. */
.maintitle        {
        font-weight: bold; font-size: 22px; font-family: "Trebuchet MS",Verdana, Arial, Helvetica, sans-serif;
        text-decoration: none; line-height : 120%; color : #3A394F;
}

/* General text */
.gen { font-size : 12px; }
.genmed { font-size : 11px; }
.gensmall { font-size : 10px; }
.red { color: #ff0000; font-weight: bold; }
.blue { color: #0000ff; font-weight: bold; }
.gen,.genmed,.gensmall { color : #3A394F; }
a.gen,a.genmed,a.gensmall { color: #202664; text-decoration: none; }
a.gen:hover,a.genmed:hover,a.gensmall:hover        { color: #DD6900; text-decoration: underline; }

/* The register, login, search etc links at the top of the page */
.mainmenu                { font-size : 11px; color : #3A394F }
a.mainmenu                { text-decoration: none; color : #202664;  }
a.mainmenu:hover{ text-decoration: underline; color : #DD6900; }

/* Forum category titles */
.cattitle                { font-weight: bold; font-size: 12px ; letter-spacing: 1px; color : #202664}
a.cattitle                { text-decoration: none; color : #202664; }
a.cattitle:hover{ text-decoration: underline; }

/* Forum title: Text and link to the forums used in: index.php */
.forumlink                { font-weight: bold; font-size: 12px; color : #202664; }
a.forumlink         { text-decoration: none; color : #202664; }
a.forumlink:hover{ text-decoration: underline; color : #DD6900; }

/* Used for the navigation text, (Page 1,2,3 etc) and the navigation bar when in a forum */
.nav                        { font-weight: bold; font-size: 11px; color : #3A394F;}
a.nav                        { text-decoration: none; color : #202664; }
a.nav:hover                { text-decoration: underline; }

/* titles for the topics: could specify viewed link colour too */
.topictitle,h1,h2        { font-weight: bold; font-size: 11px; color : #3A394F; }
a.topictitle:link   { text-decoration: none; color : #202664; }
a.topictitle:visited { text-decoration: none; color : #414783; }
a.topictitle:hover        { text-decoration: underline; color : #DD6900; }

/* Name of poster in viewmsg.php and viewtopic.php and other places */
.name                        { font-size : 11px; color : #3A394F;}

/* Location, number of posts, post date etc */
.postdetails                { font-size : 10px; color : #3A394F; }

/* The content of the posts (body of text) */
.postbody { font-size : 12px; line-height: 18px}
a.postlink:link        { text-decoration: none; color : #202664 }
a.postlink:visited { text-decoration: none; color : #414783; }
a.postlink:hover { text-decoration: underline; color : #DD6900}

/* Quote & Code blocks */
.code {
        font-family: Courier, 'Courier New', sans-serif; font-size: 11px; color: #54765E;
        background-color: #F2F2F8; border: #D7DBE1; border-style: solid;
        border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

.quote {
        font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #444444; line-height: 125%;
        background-color: #F2F2F8; border: #D7DBE1; border-style: solid;
        border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

/* Copyright and bottom info */
.copyright                { font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #444444; letter-spacing: -1px;}
a.copyright                { color: #444444; text-decoration: none;}
a.copyright:hover { color: #3A394F; text-decoration: underline;}

/* Form elements */
input,textarea, select {
        color : #3A394F;
        font: normal 11px Verdana, Arial, Helvetica, sans-serif;
        border-color : #3A394F;
}

/* The text input fields background colour */
input.post, textarea.post, select {
        background-color : #FFFFFF;
}

input { text-indent : 2px; }

/* The buttons used for bbCode styling in message post */
input.button {
        background-color : #FDFFFF;
        color : #3A394F;
        font-size: 11px; font-family: Verdana, Arial, Helvetica, sans-serif;
}

/* The main submit button option */
input.mainoption {
        background-color : #F2F2F8;
        font-weight : bold;
}

/* None-bold submit button */
input.liteoption {
        background-color : #F2F2F8;
        font-weight : normal;
}

/* This is the line in the posting page which shows the rollover
  help line. This is actually a text box, but if set to be the same
  colour as the background no one will know ;)
*/
.helpline { background-color: #EEF3F6; border-style: none; }

/*-- mod : profile cp --*/
.foundercolor, a.foundercolor, a.foundercolor:link, a.foundercolor:active, a.foundercolor:visited {
	color: #404000;
	font-weight: bold;
}
a.foundercolor:hover {
	color:	#DD6900;
	text-decoration: underline;
}

.admincolor, a.admincolor, a.admincolor:link, a.admincolor:active, a.admincolor:visited {
	color: #404000;
	font-weight: bold;
}
a.admincolor:hover {
	color:	#DD6900;
	text-decoration: underline;
}

.modcolor, a.modcolor, a.modcolor:link, a.modcolor:active, a.modcolor:visited {
	color: #54765E;
	font-weight: bold;
}
a.modcolor:hover {
	color:	#DD6900;
	text-decoration: underline;
}

.usercolor, a.usercolor, a.usercolor:link, a.usercolor:active, a.usercolor:visited {
	color : #202664;
	font-weight: bold;
}
a.usercolor:hover {
	color: #DD6900;
	text-decoration: underline;
}
/*-- fin mod : profile cp --*/

/* Import the fancy styles for IE only (NS4.x doesn't use the @import function) */
@import url("templates/subSilver/formIE.css");
-->
</style>
</head>
<body leftmargin="0" topmargin="0" bgcolor="#FBFBF9" text="#3A394F" link="#202664" vlink="#414783" />

<a name="top"></a>
<table width="100%" border="0" cellspacing="0" cellpadding="0" background ="templates/subSilver/images/a-header-middle.jpg">
<tr width="100%" align="center" valign="middle">
<td rowspan="2"><img src="templates/subSilver/images/a-header-top.jpg" border="0" usemap="#Map" alt="TheRunes Homepage" vspace="0" /></a></td>
</tr></table>
<table border="0" cellpadding="5" cellspacing="0" width="100%" align="left" height="100%">
<tr>
<td width="100%" valign="top"><table width="100%" cellspacing="0" cellpadding="10" border="0" valign="top">
    <tr>
	<td class="bodyline"><table width="100%" cellspacing="0" cellpadding="0" border="0">
      <tr>
                     <tr><td align="center" width="100%" valign="top">
                                <table cellspacing="0" cellpadding="2" border="0">
                                        <tr>
                                                <td align="center" valign="top" nowrap="nowrap"><span class="mainmenu"><a href="faq.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_faq.gif" width="12" height="13" border="0" alt="FAQ" hspace="3" />FAQ</a></span><span class="mainmenu">&nbsp; &nbsp;<a href="search.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_search.gif" width="12" height="13" border="0" alt="Search" hspace="3" />Search</a>&nbsp; &nbsp;<a href="memberlist.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_members.gif" width="12" height="13" border="0" alt="Memberlist" hspace="3" />Memberlist</a>&nbsp; &nbsp;<a href="groupcp.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_groups.gif" width="12" height="13" border="0" alt="Usergroups" hspace="3" />Usergroups</a>&nbsp; &nbsp;<a href="favorites.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_groups.gif" width="12" height="13" border="0" alt="Favorites" hspace="3" />Favorites</a>&nbsp;&nbsp;
                                                &nbsp;<a href="statistics.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_statistics.png" width="12" height="13" border="0" alt="Statistics" hspace="3" />Statistics</a>&nbsp;
                                                &nbsp;<a href="profile.php?mode=register" class="mainmenu"><img src="templates/subSilver/images/icon_mini_register.gif" width="12" height="13" border="0" alt="Register" hspace="3" />Register</a></span>&nbsp;
						&nbsp;<a href="http://www.therunes.net/forums/search.php?search_author=*&search_time=1" class="mainmenu"><img src="templates/subSilver/images/icon_mini_members.gif" width="12" height="13" border="0" alt="Today's Topics" hspace="3" />Today's Topics</a>&nbsp;
<br>
                                                &nbsp;<a href="profile.php?mode=editprofile" class="mainmenu"><img src="templates/subSilver/images/icon_mini_profile.gif" width="12" height="13" border="0" alt="Profile" hspace="3" />Profile</a>&nbsp; &nbsp;<a href="privmsg.php?folder=inbox" class="mainmenu"><img src="templates/subSilver/images/icon_mini_message.gif" width="12" height="13" border="0" alt="Log in to check your private messages" hspace="3" />Log in to check your private messages</a>&nbsp; &nbsp;<a href="login.php" class="mainmenu"><img src="templates/subSilver/images/icon_mini_login.gif" width="12" height="13" border="0" alt="Log in" hspace="3" />Log in</a>&nbsp;</span></td>
                                        </tr>
                                        </td>
                                        </tr>
                        </tr>
                </table>
<table width="80%" cellspacing="0" cellpadding="0" border="0" align="center">
<td align="center" width="100%" valign="middle"><span class="gen"></span></td>
</table>
<br>
<map name="Map">
  <area shape="rect" coords="145,10,410,65" href="http://www.therunes.net">
</map>

<!-- mod : profile cp -->
<!-- mod : categories hierarchy v 2 -->
<script language="javascript" type="text/javascript" src="./templates/collapsible_forum_index.js"></script>
<script language="javascript" type="text/javascript">
<!--

var CFIG_Version = "DHTML Collapsible Forum Index MOD v1.1.1";

var CFIG = new _CFIG('CFIG',
		['./templates/subSilver/images/icon_sign_plus.gif', './templates/subSilver/images/icon_sign_minus.gif'],
		['./templates/subSilver/images/icon_down_arrow.gif', './templates/subSilver/images/icon_up_arrow.gif'],
		['/', '', (('0' == '0') ? false : true)]);
	CFIG.T['cookie'] = 'therunesforums_CFI_cats_1';
	CFIG.T['title'] = ['C.F.I.', 'Collapsible&nbsp;Forum&nbsp;Index&nbsp;Options'];
	CFIG.T['close'] = 'Close';
	CFIG.T['delete'] = 'Delete&nbsp;Saved&nbsp;State';
	CFIG.T['restore'] = 'Restore&nbsp;Saved&nbsp;State';
	CFIG.T['save'] = 'Save&nbsp;State';
	CFIG.T['expand_all'] = 'Expand&nbsp;All';
	CFIG.T['collapse_all'] = 'Collapse&nbsp;All';
	CFIG.T['u_index'] = 'index.php';
	CFIG.allowed = Boolean(1 == 0 || 1 == 1);	// None or Medium?

	if( CFIG.IsEnabled() && (1 == 0) && parseInt(CFIG.getQueryVar('c')) > 0 )
	{
		window.location.replace('index.php');
	}
// -->
</script>

<table width="100%" cellspacing="0" cellpadding="2" border="0" align="center">
  <tr>
        <td align="left" valign="bottom"><span class="gensmall">
	The time now is Tue Mar 08, 2005 12:39 pm<br /></span>
<script language="javascript" type="text/javascript">
<!--
	CFIG.writeButton();
// -->
</script>
        <span class="nav"><a href="index.php" class="nav">The Runes Forum Index</a></span></td>
        <td align="right" valign="bottom" class="gensmall">
                <a href="search.php?search_id=unanswered" class="gensmall">View unanswered posts</a><br />
		    <a href="index.php?mark=forums" class="gensmall">Mark all forums read</a></td>
  </tr>
</table>
<script language="javascript" type="text/javascript">
<!--
	CFIG.writePanel();
// -->
</script>


<script language="javascript" type="text/javascript">
<!--
if( CFIG )
{
	CFIG.C['cat_c7'] = new _CFIC('c7', 'none');
	if( CFIG.C['cat_c7'] ) CFIG.C['cat_c7'].add('forum_c7_f40');
	if( CFIG.C['cat_c7'] ) CFIG.C['cat_c7'].add('forum_c7_f36');
	if( CFIG.C['cat_c7'] ) CFIG.C['cat_c7'].add('forum_c7_f37');
	if( CFIG.C['cat_c7'] ) CFIG.C['cat_c7'].add('forum_c7_f38');
	CFIG.C['cat_c2'] = new _CFIC('c2', 'none');
	if( CFIG.C['cat_c2'] ) CFIG.C['cat_c2'].add('forum_c2_f39');
	if( CFIG.C['cat_c2'] ) CFIG.C['cat_c2'].add('forum_c2_f5');
	if( CFIG.C['cat_c2'] ) CFIG.C['cat_c2'].add('forum_c2_f3');
	if( CFIG.C['cat_c2'] ) CFIG.C['cat_c2'].add('forum_c2_f2');
	if( CFIG.C['cat_c2'] ) CFIG.C['cat_c2'].add('forum_c2_f4');
	if( CFIG.C['cat_c2'] ) CFIG.C['cat_c2'].add('forum_c2_f15');
	if( CFIG.C['cat_c2'] ) CFIG.C['cat_c2'].add('forum_c2_f7');
	if( CFIG.C['cat_c2'] ) CFIG.C['cat_c2'].add('forum_c2_f16');
	CFIG.C['cat_c3'] = new _CFIC('c3', 'none');
	if( CFIG.C['cat_c3'] ) CFIG.C['cat_c3'].add('forum_c3_c8');
	if( CFIG.C['cat_c3'] ) CFIG.C['cat_c3'].add('forum_c3_f20');
	CFIG.C['cat_c6'] = new _CFIC('c6', 'none');
	if( CFIG.C['cat_c6'] ) CFIG.C['cat_c6'].add('forum_c6_f11');
	if( CFIG.C['cat_c6'] ) CFIG.C['cat_c6'].add('forum_c6_f10');
	if( CFIG.C['cat_c6'] ) CFIG.C['cat_c6'].add('forum_c6_f23');
	if( CFIG.C['cat_c6'] ) CFIG.C['cat_c6'].add('forum_c6_f12');
}

function CFIG_slideCat(cat_id, isLink)
{
	if( CFIG && CFIG.currentStep <= 0 )
	{
		if( CFIG.IsEnabled() && CFIG.C['cat_'+cat_id] )
		{
			if( isLink ) return false;
			CFIG.createQueue();
			CFIG.slideForums(cat_id);
			CFIG.execQueue();
			CFIG.saveIndexState(CFIG.T['cookie']);
			return false;	// omit the default action of the link.
		}
		if( !isLink )
		{
			var u_index = CFIG.T['u_index'];
			u_index += ( u_index.indexOf('?') > 0 ? '&' : '?' ) + 'c=' + parseInt(cat_id);
			window.location.replace(u_index);
			return false;
		}
	}
	return true;	// let the link do its job.
}
function CFIG_onLoad()
{
	if( CFIG_oldOnLoad )
	{
		CFIG_oldOnLoad();
		CFIG_oldOnLoad = null;
	}
	if( CFIG && CFIG.IsEnabled() )
	{
		CFIG.restoreIndexState(CFIG.T['cookie']);
	}
}
var CFIG_oldOnLoad = window.onload;
window.onload = CFIG_onLoad;
// -->
</script>

<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
<tr>
	<th colspan="2" width="100%" nowrap="nowrap">&nbsp;Forum&nbsp;</th>
	<th width="50" nowrap="nowrap">&nbsp;Topics&nbsp;</th>
	<th width="50" nowrap="nowrap">&nbsp;Posts&nbsp;</th>
	<th width="150" nowrap="nowrap">&nbsp;Last Post&nbsp;</th>
</tr>
<tr onclick="CFIG_slideCat('c7', false);" style="cursor:pointer;cursor:hand;" title="/OOC Talk. All friends old and new welcome!">
	<td class="cat" width="100%" colspan="2">&nbsp;&nbsp;<img name="icon_sign_c7" src="templates/subSilver/images/spacer.gif" border="0" />&nbsp;&nbsp;<span class="cattitle"><a href="index.php?c=7" onclick="return CFIG_slideCat('c7', true);" onfocus="this.blur();" class="cattitle" title="/OOC Talk. All friends old and new welcome!">The Lobby</a></span></td>
	<td class="rowpic" colspan="3" align="right">&nbsp;</td>
</tr>
<tr id="cat_c7" style="display:none;">
	<td width="46" class="row1"><img src="templates/subSilver/images/spacer.gif" width="46" height="0" /></td>
	<td width="100%" class="row1" colspan="1"><img src="templates/subSilver/images/spacer.gif" width="46" height="0" /></td>
	<td width="250" class="row3" colspan="3"><img src="templates/subSilver/images/spacer.gif" width="46" height="0" /></td>
</tr>
<tr id="forum_c7_f40" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=40" class="forumlink">General OOC</a><br /></span>
		<span class="genmed">Just a place to hang out with the community. All welcome!</span>
		<span class="gensmall"><br /><b>Moderator:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">325</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">4758</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=98648#98648" title="The dangers of joining the millitary">The dangers of joining t...</a><br />Tue Mar 08, 2005 9:44 am<br /><a href="profile.php?mode=viewprofile&amp;u=586">Falinya</a> <a href="viewtopic.php?p=98648#98648"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="forum_c7_f36" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=36" class="forumlink">Movies. Music and Books</a><br /></span>
		<span class="genmed">Yes, there is RL out there somewhere!</span>
		<span class="gensmall"><br /><b>Moderator:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">112</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">1468</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=98601#98601" title="Hitchikers Guide to the Galaxy">Hitchikers Guide to the ...</a><br />Mon Mar 07, 2005 2:25 pm<br /><a href="profile.php?mode=viewprofile&amp;u=2438">Inque</a> <a href="viewtopic.php?p=98601#98601"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="forum_c7_f37" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=37" class="forumlink">Tech Talk</a><br /></span>
		<span class="genmed">Here ya go Hikaru! As promised :)</span>
		<span class="gensmall"><br /><b>Moderator:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">51</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">367</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=98599#98599" title="XML?">XML?</a><br />Mon Mar 07, 2005 2:20 pm<br /><a href="profile.php?mode=viewprofile&amp;u=1462">Retric</a> <a href="viewtopic.php?p=98599#98599"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="forum_c7_f38" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=38" class="forumlink">Rants</a><br /></span>
		<span class="genmed">A place to vent. Enter at own risk!</span>
		<span class="gensmall"><br /><b>Moderator:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">451</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">9707</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=98500#98500" title="Spell level 57 Page not working">Spell level 57 Page not ...</a><br />Sat Mar 05, 2005 5:21 am<br /><a href="profile.php?mode=viewprofile&amp;u=4310">Jessica</a> <a href="viewtopic.php?p=98500#98500"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="cat_c7_foot" style="display:;">
	<td colspan="5" height="1" class="spaceRow"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
</tr>
<tr onclick="CFIG_slideCat('c2', false);" style="cursor:pointer;cursor:hand;" title="">
	<td class="cat" width="100%" colspan="2">&nbsp;&nbsp;<img name="icon_sign_c2" src="templates/subSilver/images/spacer.gif" border="0" />&nbsp;&nbsp;<span class="cattitle"><a href="index.php?c=2" onclick="return CFIG_slideCat('c2', true);" onfocus="this.blur();" class="cattitle" title="">EverQuest Live</a></span></td>
	<td class="rowpic" colspan="3" align="right">&nbsp;</td>
</tr>
<tr id="cat_c2" style="display:none;">
	<td width="46" class="row1"><img src="templates/subSilver/images/spacer.gif" width="46" height="0" /></td>
	<td width="100%" class="row1" colspan="1"><img src="templates/subSilver/images/spacer.gif" width="46" height="0" /></td>
	<td width="250" class="row3" colspan="3"><img src="templates/subSilver/images/spacer.gif" width="46" height="0" /></td>
</tr>
<tr id="forum_c2_f39" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=39" class="forumlink">EQLive General</a><br /></span>
		<span class="genmed">General topics related to EQLive</span>
		<span class="gensmall"><br /><b>Moderator:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">2252</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">36512</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=98653#98653" title="Mentoring for EQ1?  Would it make a difference to you?">Mentoring for EQ1?  Woul...</a><br />Tue Mar 08, 2005 11:43 am<br /><a href="profile.php?mode=viewprofile&amp;u=4064">Lillywhite</a> <a href="viewtopic.php?p=98653#98653"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="forum_c2_f5" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=5" class="forumlink">Quests, Spells, Epic and Tradeskills</a><br /></span>
		<span class="genmed">Questions, Info, Strats, Walk-Throughs.</span>
		<span class="gensmall"><br /><b>Moderator:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">683</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">10615</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=98657#98657" title="Question about War Caller">Question about War Calle...</a><br />Tue Mar 08, 2005 12:32 pm<br /><a href="profile.php?mode=viewprofile&amp;u=4279">Caillech</a> <a href="viewtopic.php?p=98657#98657"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="forum_c2_f3" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=3" class="forumlink">Zones, NPC's - Strategies and Questions</a><br /></span>
		<span class="genmed">Strategies, Questions, Information on Mobs, Zones, Expansions etc ... EPIC info being moved soon from this area! Please post Epic Info and Strats in area below.<B></span>
		<span class="gensmall"><br /><b>Moderator:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">915</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">10069</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=98580#98580" title="Dulak Harbor (Charm Kite Guide)">Dulak Harbor (Charm Kite...</a><br />Mon Mar 07, 2005 10:51 am<br /><a href="profile.php?mode=viewprofile&amp;u=88">Bimmin</a> <a href="viewtopic.php?p=98580#98580"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="forum_c2_f2" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=2" class="forumlink">Everything you wanted to know about AA, LP, and Tribute Points!</a><br /></span>
		<span class="genmed">Questions and Information on AA's<B></span>
		<span class="gensmall"><br /><b>Moderator:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">297</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">5669</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=98626#98626" title="AAXP overview">AAXP overview</a><br />Mon Mar 07, 2005 11:58 pm<br /><a href="profile.php?mode=viewprofile&amp;u=4079">Rhaddick</a> <a href="viewtopic.php?p=98626#98626"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="forum_c2_f4" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=4" class="forumlink">Gear</a><br /></span>
		<span class="genmed">Gear Suggestions, Information Including Augmentation etc<B></span>
		<span class="gensmall"><br /><b>Moderator:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">516</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">4845</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=98641#98641" title="Anyone know graphic of Mottled Black Dragonscale, please?">Anyone know graphic of M...</a><br />Tue Mar 08, 2005 8:00 am<br /><a href="profile.php?mode=viewprofile&amp;u=1929">Spoogy</a> <a href="viewtopic.php?p=98641#98641"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="forum_c2_f15" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=15" class="forumlink">Just The Facts Mam'..</a><br /></span>
		<span class="genmed">A place to posts the FACTS --> data parsing<B></span>
		<span class="gensmall"><br /><b>Moderator:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">46</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">817</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=96588#96588" title="On PoTime avoidance mods">On PoTime avoidance mods...</a><br />Mon Feb 14, 2005 8:44 pm<br /><a href="profile.php?mode=viewprofile&amp;u=1600">Montaigne</a> <a href="viewtopic.php?p=96588#96588"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="forum_c2_f7" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=7" class="forumlink">Warstories, Character Journals and other Tales</a><br /></span>
		<span class="genmed">This is the place to post those stories of old times... Why I remember back when...<B></span>
		<span class="gensmall"><br /><b>Moderator:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">55</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">242</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=96273#96273" title="Your Biggest &quot;Wiped out the entire raid ...&quot; story">Your Biggest &quot;Wiped...</a><br />Thu Feb 10, 2005 1:17 pm<br /><a href="profile.php?mode=viewprofile&amp;u=2563">Jeradim</a> <a href="viewtopic.php?p=96273#96273"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="forum_c2_f16" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=16" class="forumlink">Brenlo/Developer Area</a><br /></span>
		<span class="genmed">This is the place to ask Brenlo or Developers questions. You MUST read the rules before posting as they are slightly different in this area<B></span>
		<span class="gensmall"><br /><b>Moderator:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">225</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">1037</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=97370#97370" title="Sever issues with zoning into time">Sever issues with zoning...</a><br />Tue Feb 22, 2005 10:57 am<br /><a href="profile.php?mode=viewprofile&amp;u=1501">Sunaeri</a> <a href="viewtopic.php?p=97370#97370"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="cat_c2_foot" style="display:;">
	<td colspan="5" height="1" class="spaceRow"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
</tr>
<tr onclick="CFIG_slideCat('c3', false);" style="cursor:pointer;cursor:hand;" title="">
	<td class="cat" width="100%" colspan="2">&nbsp;&nbsp;<img name="icon_sign_c3" src="templates/subSilver/images/spacer.gif" border="0" />&nbsp;&nbsp;<span class="cattitle"><a href="index.php?c=3" onclick="return CFIG_slideCat('c3', true);" onfocus="this.blur();" class="cattitle" title="">EverQuest II, WOW And Other Games</a></span></td>
	<td class="rowpic" colspan="3" align="right">&nbsp;</td>
</tr>
<tr id="cat_c3" style="display:none;">
	<td width="46" class="row1"><img src="templates/subSilver/images/spacer.gif" width="46" height="0" /></td>
	<td width="100%" class="row1" colspan="1"><img src="templates/subSilver/images/spacer.gif" width="46" height="0" /></td>
	<td width="250" class="row3" colspan="3"><img src="templates/subSilver/images/spacer.gif" width="46" height="0" /></td>
</tr>
<tr id="forum_c3_c8" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/cat_folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="index.php?c=8" class="forumlink">EQ2</a><br /></span>
		<span class="genmed">A place to post information regarding EQ2!<B></span>
		<span class="gensmall"><br /><b>Subforums:</b>&nbsp;<a href="./viewtopic.php?p=98576#98576"><img src="templates/subSilver/images/icon_minipost.gif" border="0" alt="No new posts" title="No new posts" align="middle" /></a><a href="./viewforum.php?f=29" title="General Gameplay Discussion" class="gensmall">General Gameplay</a>, <a href="./viewtopic.php?p=98575#98575"><img src="templates/subSilver/images/icon_minipost.gif" border="0" alt="No new posts" title="No new posts" align="middle" /></a><a href="./viewforum.php?f=32" title="Discuss all aspects of play as it relates to the Coercer/Illusionist subclass" class="gensmall">Coercer/Illusionist</a>, <a href="./viewtopic.php?p=98455#98455"><img src="templates/subSilver/images/icon_minipost.gif" border="0" alt="No new posts" title="No new posts" align="middle" /></a><a href="./viewforum.php?f=30" title="Discussions on Tradeskills" class="gensmall">Artisans</a>, <a href="./viewtopic.php?p=96687#96687"><img src="templates/subSilver/images/icon_minipost.gif" border="0" alt="No new posts" title="No new posts" align="middle" /></a><a href="./viewforum.php?f=31" title="Discuss Quests" class="gensmall">Quests</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">340</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">2670</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=98576#98576" title="Mentoring System - Coming Soon">Mentoring System - Comin...</a><br />Mon Mar 07, 2005 10:28 am<br /><a href="profile.php?mode=viewprofile&amp;u=2308">Breez</a> <a href="viewtopic.php?p=98576#98576"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="forum_c3_f20" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/cat_folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=20" class="forumlink">WoW etc</a><br /></span>
		<span class="genmed">For those playing WoW or other nonEQ games!<B></span>
		<span class="gensmall"><br /><b>Moderators:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a>, <a href="./groupcp.php?g=4155">World of Warcraft</a><br /><b>Subforums:</b>&nbsp;<a href="./viewtopic.php?p=98655#98655"><img src="templates/subSilver/images/icon_minipost.gif" border="0" alt="No new posts" title="No new posts" align="middle" /></a><a href="./viewforum.php?f=34" title="General Chat" class="gensmall">The Inn</a>, <a href="./viewtopic.php?p=98350#98350"><img src="templates/subSilver/images/icon_minipost.gif" border="0" alt="No new posts" title="No new posts" align="middle" /></a><a href="./viewforum.php?f=42" title="Trade Skills" class="gensmall">Professions</a>, <a href="./viewtopic.php?p=95420#95420"><img src="templates/subSilver/images/icon_minipost.gif" border="0" alt="No new posts" title="No new posts" align="middle" /></a><a href="./viewforum.php?f=43" title="" class="gensmall">Quests</a>, <a href="./viewtopic.php?p=97886#97886"><img src="templates/subSilver/images/icon_minipost.gif" border="0" alt="No new posts" title="No new posts" align="middle" /></a><a href="./viewforum.php?f=44" title="" class="gensmall">UI Customization</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">211</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">2364</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=98655#98655" title="Upcoming Content Patch">Upcoming Content Patch...</a><br />Tue Mar 08, 2005 11:58 am<br /><a href="profile.php?mode=viewprofile&amp;u=51">Nadia</a> <a href="viewtopic.php?p=98655#98655"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="cat_c3_foot" style="display:;">
	<td colspan="5" height="1" class="spaceRow"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
</tr>
<tr onclick="CFIG_slideCat('c6', false);" style="cursor:pointer;cursor:hand;" title="">
	<td class="cat" width="100%" colspan="2">&nbsp;&nbsp;<img name="icon_sign_c6" src="templates/subSilver/images/spacer.gif" border="0" />&nbsp;&nbsp;<span class="cattitle"><a href="index.php?c=6" onclick="return CFIG_slideCat('c6', true);" onfocus="this.blur();" class="cattitle" title="">Miscellaneous</a></span></td>
	<td class="rowpic" colspan="3" align="right">&nbsp;</td>
</tr>
<tr id="cat_c6" style="display:none;">
	<td width="46" class="row1"><img src="templates/subSilver/images/spacer.gif" width="46" height="0" /></td>
	<td width="100%" class="row1" colspan="1"><img src="templates/subSilver/images/spacer.gif" width="46" height="0" /></td>
	<td width="250" class="row3" colspan="3"><img src="templates/subSilver/images/spacer.gif" width="46" height="0" /></td>
</tr>
<tr id="forum_c6_f11" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=11" class="forumlink">UI's and other Misc. Things</a><br /></span>
		<span class="genmed">UI's, timers, etc<B></span>
		<span class="gensmall"><br /><b>Moderator:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">52</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">439</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=95665#95665" title="Custom Target Rings">Custom Target Rings</a><br />Thu Feb 03, 2005 12:37 pm<br /><a href="profile.php?mode=viewprofile&amp;u=4096">Chickachicka</a> <a href="viewtopic.php?p=95665#95665"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="forum_c6_f10" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=10" class="forumlink">Trade/Sell Spells Gear</a><br /></span>
		<span class="genmed">Trade or sell Spells and Gear here. Be sure to include your SERVER name in the subject line<B></span>
		<span class="gensmall"><br /><b>Moderator:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">47</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">111</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=90957#90957" title="BRISTLEBANE....WTB insanity and vallons quickening">BRISTLEBANE....WTB insan...</a><br />Wed Dec 22, 2004 7:45 pm<br /><a href="profile.php?mode=viewprofile&amp;u=3996">Ronsonal</a> <a href="viewtopic.php?p=90957#90957"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="forum_c6_f23" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=23" class="forumlink">Show Off Your Sigs!</a><br /></span>
		<span class="genmed">For those who want to show off their signature/avatar art, but don't want them to load with every post you make show them off here. </span>
		<span class="gensmall"><br /><b>Moderator:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">33</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">109</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=98656#98656" title="Wanting to make a sig">Wanting to make a sig</a><br />Tue Mar 08, 2005 12:16 pm<br /><a href="profile.php?mode=viewprofile&amp;u=4279">Caillech</a> <a href="viewtopic.php?p=98656#98656"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="forum_c6_f12" style="display:;">
	<td  class="row1" align="center" valign="middle" height="50"><img src="templates/subSilver/images/folder_big.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td class="row1" width="100%" height="50" colspan="1" valign="top">
		<span class="forumlink"><a href="viewforum.php?f=12" class="forumlink">Test Forum</a><br /></span>
		<span class="genmed">As the Name Implies :-)<B></span>
		<span class="gensmall"><br /><b>Moderator:</b>&nbsp;<a href="./groupcp.php?g=31">Site Moderators</a></span>
	</td>
	<td class="row3" align="center" valign="middle" height="50"><span class="gensmall">68</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">240</span></td>
	<td class="row3" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall"><a href="viewtopic.php?p=93839#93839" title="test">test</a><br />Wed Jan 19, 2005 7:30 am<br /><a href="profile.php?mode=viewprofile&amp;u=2970">caldaar</a> <a href="viewtopic.php?p=93839#93839"><img src="templates/subSilver/images/icon_latest_reply.gif" border="0" alt="View latest post" title="View latest post" /></a></span></td>
</tr>
<tr id="cat_c6_foot" style="display:;">
	<td colspan="5" height="1" class="spaceRow"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
</tr>
</table>
<br class="gensmall" />


<table width="100%" cellspacing="0" border="0" align="center" cellpadding="2">
  <tr>
        <td align="left"><span class="gensmall"><a href="index.php?mark=forums" class="gensmall">Mark all forums read</a></span></td>
        <td align="right"><span class="gensmall">All times are GMT - 6 Hours</span></td>
  </tr>
</table>

<!-- Start add - Fully integrated shoutbox MOD -->
<table width="100%" cellspacing="0" border="0" align="center" cellpadding="2" class="forumline">
      <tr>
         <td align="center" nowrap="nowrap" class="catHead"><span class="cattitle"><a href="shoutbox_max.php">Shoutbox</a></span></td>
      </tr>
      <tr>
         <td>
          <iframe src="shoutbox.php" scrolling="NO" width="100%" height="190" frameborder="0" marginheight="0" marginwidth="0" allowtransparency="true"></iframe>
         </td>
  </tr>
</table>
<br/>
<!-- End add - Fully integrated shoutbox MOD -->



<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
  <tr>
        <td class="catHead" colspan="2" height="28"><span class="cattitle"><a href="viewonline.php" class="cattitle">Who is Online</a></span></td>
  </tr>
  <tr>
        <td class="row1" align="center" valign="middle" rowspan="3"><img src="templates/subSilver/images/whosonline.gif" alt="Who is Online" /></td>
        <td class="row1" align="left" width="100%"><span class="gensmall">Our users have posted a total of <b>94753</b> articles<br />We have <b>4320</b> registered users<br />The newest registered user is <b><a href="profile.php?mode=viewprofile&amp;u=4325">Lore</a></b>
<br />There Has Been <b>1830296</b> Visitors Since May 24, 2003
</span>
        </td>
  </tr>
  <tr>
     <td class="row1" align="left"><span class="gensmall">In total <b>568</b> user have visited this site today :: 118 Registered, 8 Hidden and 442 Guests&nbsp;, 85 of them within the last hour.<br />Registered Users:  <a href="profile.php?mode=viewprofile&amp;u=1302"><b>Agamezz Urazz</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=4259"><b>Aiimee</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1287"><b>Alricrahl</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1508"><b>Amris</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1189"><b>Anaximander</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=3966"><b>Arxael</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=71"><b>Atasi Guru</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2896"><b>Aurolia</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1593"><b>Badmorda</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=621"><b>Belanar</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=88"><b>Bimmin</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=3049"><b>Binki</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1850"><b>Branar</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=4318"><b>Branuuin</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=3680"><b>Brie</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1125"><b>caeadarie</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=4279"><b>Caillech</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=4170"><b>cdoe</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1617"><b>Cerpicio</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=3373"><b>Chantera</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2552"><b>Chantress</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1107"><b>Cilene</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=3388"><b>ctab</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2090"><b>cylena</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=3297"><b>Cypriam</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=645"><b>Danie</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1296"><b>Devnor</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=363"><b>Diku</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=3628"><b>DjinnToniq</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=859"><b>Elemer</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=124"><b>Elipson</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1079"><b>Encantor</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=4294"><b>Ephwin</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2789"><b>Faenka</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2779"><b>Faevena</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=3216"><b>Faidiina</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=586"><b>Falinya</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=3464"><b>Frequency</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=359"><b>Funxi</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2879"><b>Glidelph</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=318"><b>Gnappiechanter Rewopemong</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1507"><b>Gnarl</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=3105"><b>Goloth</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=352"><b>greif_quellious</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=968"><b>Hannar Darkstone</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=4322"><b>Holley Tyer</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1683"><b>Irrelien</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=738"><b>Iumuno</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=4310"><b>Jessica</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2647"><b>jlyons</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=41"><b>Kadath</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1071"><b>Kestel</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2134"><b>Khalin</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1996"><b>Kingfishx</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1469"><b>Kogarne</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=964"><b>Labyrrinth</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1634"><b>Latrissa</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1036"><b>Leetah</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=934"><b>liash</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=4064"><b>Lillywhite</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=688"><b>limatel</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2389"><b>Llan2193</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1297"><b>Londo</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=4325"><b>Lore</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=4019"><b>Magevo</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2570"><b>Manizeh</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=3249"><b>Merlica</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2912"><b>Mezamven</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=93"style="color:#54765E"><b><b>Mezrin Kortex</b></b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1540"><b>Milow_FV</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1761"><b>Mistofelees</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=51"><b>Nadia</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1272"><b>Nandainea</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=414"><b>Nariek</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2293"><b>Ndaara</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1450"><b>Nokei</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1587"><b>Obsin</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1308"><b>Olwynn</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=4020"><b>ommuden</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=356"><b>Ompy</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2107"><b>Qindiean</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1128"><b>ramoen</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=4079"><b>Rhaddick</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=3976"><b>rikku</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=966"><b>Riothamus</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=13"><b>rosi</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=204"><b>Saediien</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2364"><b>Saellis</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=752"><b>Salinu</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=886"><b>Seacanyon</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=502"><b>Silamael</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1329"><b>Sinestria</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1470"><b>sinhuit</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=242"><b>Sinthetic</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2844"><b>smootha</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1929"><b>Spoogy</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2991"><b>Stargayzer</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=196"style="color:#54765E"><b><b>Starmist</b></b></a>,  <a href="profile.php?mode=viewprofile&amp;u=3990"><b>Stephen51</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2568"><b>Svetlana</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2040"><b>taywne</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=203"><b>Teferi</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2414"><b>Teremar</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1982"><b>Tessei</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=3622"><b>Trehbul</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=3242"><b>Ucchan</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=62"><b>vami</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=151"><b>Vinen</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1448"><b>Vnayin</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=4125"><b>Voudoun</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=547"><b>Vven</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=1011"><b>Wybart</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2056"><b>Wyora</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2154"><b>XEV_grau</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=2917"><b>Yanditik</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=220"><b>Yaxa</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=3230"><b>Zarco Dreamstorm</b></a>,  <a href="profile.php?mode=viewprofile&amp;u=824"><b>Zoltaan</b></a></br></span></td>
  </tr>
  <tr>
        <td class="row1" align="left"><span class="gensmall">In total there are <b>23</b> users online :: 7 Registered, 2 Hidden and 14 Guests &nbsp; [&nbsp;<span class="foundercolor">Board Founder</span>&nbsp;]&nbsp;&nbsp;[&nbsp;<span class="admincolor">Administrator</span>&nbsp;]&nbsp;&nbsp;[&nbsp;<span class="modcolor">Moderator</span>&nbsp;]&nbsp;&nbsp;[&nbsp;<span class="usercolor">User</span>&nbsp;]<br />Most users ever online was <b>250</b> on Fri Sep 24, 2004 11:31 am<br />Registered Users: <a href="profile.php?mode=viewprofile&u=1508" class="usercolor">Amris</a>, <a href="profile.php?mode=viewprofile&u=1593" class="usercolor">Badmorda</a>, <a href="profile.php?mode=viewprofile&u=3049" class="usercolor">Binki</a>, <a href="profile.php?mode=viewprofile&u=4279" class="usercolor">Caillech</a>, <a href="profile.php?mode=viewprofile&u=1507" class="usercolor">Gnarl</a>, <a href="profile.php?mode=viewprofile&u=2389" class="usercolor">Llan2193</a>, <a href="profile.php?mode=viewprofile&u=62" class="usercolor">vami</a></span></td>
  </tr>
</table>

<table width="100%" cellpadding="1" cellspacing="1" border="0">
        <td align="left" valign="top"><span class="gensmall">This data is based on users active over the past five minutes</span></td>
</table>



<form method="post" action="login.php">
  <table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
        <tr>
          <td class="catHead" height="28"><a name="login"></a><span class="cattitle">Log in</span></td>
        </tr>
        <tr>
          <td class="row1" align="center" valign="middle" height="28"><span class="gensmall">Username:
                <input class="post" type="text" name="username" size="10" />
                &nbsp;&nbsp;&nbsp;Password:
                <input class="post" type="password" name="password" size="10" />
                &nbsp;&nbsp; &nbsp;&nbsp;Log me on automatically each visit
                <input class="text" type="checkbox" name="autologin" />
                &nbsp;&nbsp;&nbsp;
                <input type="submit" class="mainoption" name="login" value="Log in" />
                </span> </td>
        </tr>
  </table>
</form>

<br clear="all" />

<table cellspacing="3" border="0" align="center" cellpadding="0">
  <tr>
        <td width="20" align="center"><img src="templates/subSilver/images/folder_new.gif" alt="New posts"/></td>
        <td><span class="gensmall">New posts</span></td>
        <td>&nbsp;&nbsp;</td>
        <td width="20" align="center"><img src="templates/subSilver/images/folder.gif" alt="No new posts" /></td>
        <td><span class="gensmall">No new posts</span></td>
        <td>&nbsp;&nbsp;</td>
        <td width="20" align="center"><img src="templates/subSilver/images/folder_lock.gif" alt="Forum is locked" /></td>
        <td><span class="gensmall">Forum is locked</span></td>
  </tr>
</table>



<div align="center"><span class="copyright"><br /><br />
<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB 2.0. If you cannot (for good
	reason) retain the full copyright we request you at least leave in place the
	Powered by phpBB 2.0.4 line, with phpBB linked to www.phpbb.com. If you refuse
	to include even this then support on our forums may be affected.

	The phpBB Group : 2002
// -->
Forums for Members of <a href="http://www.therunes.net/">TheRunes</a>.<BR>
A Community for Enchanters of <a href="http://www.everquest.com/">EverQuest</a>� Enthusiasts.<BR>
This site is neither affiliated with or endorsed by <a href="http://www.sonyonline.com/" class="copyright">Sony Online Entertainment</a>.<br>
Powered by <a href="http://www.phpbb.com/" target="_phpbb" class="copyright">phpBB Super Furry</a> &copy; 2001.<br /></span></div>
		</td>
	</tr>
</table>
</body>
</html>

