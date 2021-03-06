<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" -->
<html dir="LTR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<meta http-equiv="Content-Style-Type" content="text/css">

<link rel="top" href="index.php" title="" />
<link rel="search" href="search.php" title="" />
<link rel="help" href="faq.php" title="" />
<link rel="author" href="memberlist.php" title="" />

<title>BuchiOnline :: 検索</title>
<link rel="stylesheet" href="templates/DarkEQ/DarkEQ.css" type="text/css" />
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
 	background-color: #111111;
 	scrollbar-face-color: #602C72;
 	scrollbar-highlight-color: #602C72;
 	scrollbar-shadow-color: #602C72;
 	scrollbar-3dlight-color: #602C72;
 	scrollbar-arrow-color:  #E3DDFF;
 	scrollbar-track-color: #333355;
 	scrollbar-darkshadow-color: #98AAB1;
}

/* General font families for common tags */
font,th,td,p { font-family: 'MS Pゴシック', Verdana, Arial, Helvetica, sans-se }
a:link,a:active,a:visited { color : #E3DDFF; }
a:hover		{ text-decoration: underline; color : #E3DDFF; }
hr	{ height: 0px; border: solid #c2cdd6 0px; border-top-width: 1px;}


/* This is the border line & background colour round the entire page */
.bodyline	{ background-color: #111133; border: 1px #602C72 solid; }

/* This is the outline round the main forum tables */
.forumline	{ background-color: #000000; border: 1px #602C72 solid; }


/* Main table cell colours and backgrounds */
td.row1	{ background-color: #222233; }
td.row2	{ background-color: #2C2B3C; }
td.row3	{ background-color: #333344; }


/*
  This is for the table cell above the Topics, Post & Last posts on the index.php page
  By default this is the fading out gradiated silver background.
  However, you could replace this with a bitmap specific for each forum
*/
td.rowpic {
		background-color: #ffffff;
		background-image: url(templates/DarkEQ/images/cellpic2.jpg);
		background-repeat: repeat-y;
}

/* Header cells - the blue and silver gradient backgrounds */
th	{
	color: #E3DDFF; font-size: 11px; font-weight : bold;
	background-color: #E3DDFF; height: 25px;
	background-image: url(templates/DarkEQ/images/cellpic3.gif);
}

td.cat,td.catHead,td.catSides,td.catLeft,td.catRight,td.catBottom {
			background-image: url(templates/DarkEQ/images/cellpic1.gif);
			background-color:#333344; border: #FFFFFF; border-style: solid; height: 28px;
}


/*
  Setting additional nice inner borders for the main table cells.
  The names indicate which sides the border will be on.
  Don't worry if you don't understand this, just ignore it :-)
*/
td.cat,td.catHead,td.catBottom {
	height: 29px;
}
th.thHead,th.thSides,th.thTop,th.thLeft,th.thRight,th.thBottom,th.thCornerL,th.thCornerR {
	font-weight: bold; border: #ffffff; border-style: solid; height: 28px; }
td.row3Right,td.spaceRow {
	background-color: #333344; border: #FFFFFF; border-style: solid; }

th.thHead,td.catHead { font-size: 12px; border-width: 0px 0px 0px 0px; }
th.thSides,td.catSides,td.spaceRow	 { border-width: 0px 0px 0px 0px; }
th.thRight,td.catRight,td.row3Right	 { border-width: 0px 0px 0px 0px; }
th.thLeft,td.catLeft	  { border-width: 0px 0px 0px 0px; }
th.thBottom,td.catBottom  { border-width: 0px 0px 0px 0px; }
th.thTop	 { border-width: 0px 0px 0px 0px; }
th.thCornerL { border-width: 0px 0px 0px 0px; }
th.thCornerR { border-width: 0px 0px 0px 0px; }


/* The largest text used in the index page title and toptic title etc. */
.maintitle	{
	font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
	font-size : 22px;
	font-weight : bold;
	text-decoration : none;
	line-height : 120%;
	color : #FFFFFF;
}



/* General text */
.gen { font-size : 12px; }
.genmed { font-size : 11px; }
.gensmall { font-size : 10px; }
.gen,.genmed,.gensmall { color : #FFE8FF; }
a.gen,a.genmed,a.gensmall { color: #AF95DF; text-decoration: none; }
a.gen:hover,a.genmed:hover,a.gensmall:hover	{ color: #AF95DF; text-decoration: underline; }


/* The register, login, search etc links at the top of the page */
.mainmenu		{ font-size : 11px; color : #FFE8FF }
a.mainmenu		{ text-decoration: none; color : #E3DDFF;  }
a.mainmenu:hover{ text-decoration: underline; color : #E3DDFF; }


/* Forum category titles */
.cattitle		{ font-weight: bold; font-size: 12px ; letter-spacing: 1px; color : #E3DDFF}
a.cattitle		{ text-decoration: none; color : #E3DDFF; }
a.cattitle:hover{ text-decoration: underline; }


/* Forum title: Text and link to the forums used in: index.php */
.forumlink		{ font-weight: bold; font-size: 12px; color : #E3DDFF; }
a.forumlink 	{ text-decoration: none; color : #E3DDFF; }
a.forumlink:hover{ text-decoration: underline; color : #E3DDFF; }


/* Used for the navigation text, (Page 1,2,3 etc) and the navigation bar when in a forum */
.nav			{ font-weight: bold; font-size: 11px; color : #FFE8FF;}
a.nav			{ text-decoration: none; color : #E3DDFF; }
a.nav:hover		{ text-decoration: underline; }


/* titles for the topics: could specify viewed link colour too */
.topictitle,h1,h2	{ font-weight: bold; font-size: 11px; color : #FFE8FF; }
a.topictitle:link   { text-decoration: none; color : #E3DDFF; }
a.topictitle:visited { text-decoration: none; color : #9C96B6; }
a.topictitle:hover	{ text-decoration: underline; color : #E3DDFF; }



/* Name of poster in viewmsg.php and viewtopic.php and other places */
.name			{ font-size : 11px; color : #FFE8FF;}

/* Location, number of posts, post date etc */
.postdetails		{ font-size : 10px; color : #E3DDFF; }


/* The content of the posts (body of text) */
.postbody { font-size : 12px; line-height: 18px}
a.postlink:link	{ text-decoration: underline; color : #D8B7FF }
a.postlink:visited { text-decoration: underline; color : #D8B7FF; }
a.postlink:hover { text-decoration: underline; color : #D8B7FF}


/* Quote & Code blocks */
.code {
	font-family: 'MS Pゴシック', Courier, 'Courier New', sans-serif; font-size: 11px; color: #EBE5FF;
	background-color: #676579; border: #333344; border-style: solid;
	border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

.quote {
	font-family: 'MS Pゴシック', Verdana, Arial, Helvetica, sans-se; font-size: 11px; color: #EBE5FF; line-height: 125%;
	background-color: #676579; border: #333344; border-style: solid;
	border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}


/* Copyright and bottom info */
.copyright		{ font-size: 10px; font-family: 'MS Pゴシック', Verdana, Arial, Helvetica, sans-se; color: #BBBBDD; letter-spacing: -1px;}
a.copyright		{ color: #BBBBDD; text-decoration: none;}
a.copyright:hover { color: #FFE8FF; text-decoration: underline;}


/* Form elements */
input,textarea, select {
	color : #000000;
	font: normal 11px 'MS Pゴシック', Verdana, Arial, Helvetica, sans-se;
	border-color : #000000;
}

/* The text input fields background colour */
input.post, textarea.post, select {
	background-color : #ffffff;
}

input { text-indent : 2px; }

/* The buttons used for bbCode styling in message post */
input.button {
	background-color : #efefef;
	color : #000000;
	font-size: 11px; font-family: 'MS Pゴシック', Verdana, Arial, Helvetica, sans-se;
}

/* The main submit button option */
input.mainoption {
	background-color : #fafafa;
	font-weight : bold;
}

/* None-bold submit button */
input.liteoption {
	background-color : #fafafa;
	font-weight : normal;
}

/* This is the line in the posting page which shows the rollover
  help line. This is actually a text box, but if set to be the same
  colour as the background no one will know ;)
*/
.helpline { background-color: #DEE3E7; border-style: none; }


/* Import the fancy styles for IE only (NS4.x doesn't use the @import function) */
@import url("templates/DarkEQ/formIE.css");
-->
</style>

</head>

<body bgcolor="#111111" text="#FFE8FF" link="#E3DDFF" vlink="#9C96B6">
<span class="gen"><a name="top"></a></span><table width="100%" border="0" cellspacing="0" cellpadding="10" align="center">
<tr>
	<td class="bodyline">
		  <table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>


		<td> <a href="index.php?sid=35aba7a2e676ee53952538263d262ef8"><img src="templates/DarkEQ/images/logo_phpBB.gif" border="0" alt="BuchiOnline フォーラムインデックス" vspace="1" /></a>
		</td>


		<td align="center" width="100%" valign="middle"><span class="maintitle">BuchiOnline</span><br />
		  <span class="gen">Online Game Databases<br />&nbsp; </span>

		  <table cellspacing="0" cellpadding="2" border="0">
			<tr>
			  <td valign="top" nowrap="nowrap" align="center"><span class="mainmenu">&nbsp;<a href="faq.php?sid=35aba7a2e676ee53952538263d262ef8" class="mainmenu"><img src="templates/DarkEQ/images/icon_mini_faq.gif" width="12" height="13" border="0" alt="FAQ" hspace="3" />FAQ</a></span><span class="mainmenu">&nbsp;&nbsp;&nbsp;<a href="search.php?sid=35aba7a2e676ee53952538263d262ef8" class="mainmenu"><img src="templates/DarkEQ/images/icon_mini_search.gif" width="12" height="13" border="0" alt="検索" hspace="3" />検索</a>&nbsp;&nbsp;&nbsp;<a href="memberlist.php?sid=35aba7a2e676ee53952538263d262ef8" class="mainmenu"><img src="templates/DarkEQ/images/icon_mini_members.gif" width="12" height="13" border="0" alt="メンバーリスト" hspace="3" />メンバーリスト</a>&nbsp;&nbsp;&nbsp;<a href="groupcp.php?sid=35aba7a2e676ee53952538263d262ef8" class="mainmenu"><img src="templates/DarkEQ/images/icon_mini_groups.gif" width="12" height="13" border="0" alt="ユーザグループ" hspace="3" />ユーザグループ</a>&nbsp;&nbsp;&nbsp;<a href="profile.php?mode=register&amp;sid=35aba7a2e676ee53952538263d262ef8" class="mainmenu"><img src="templates/DarkEQ/images/icon_mini_register.gif" width="12" height="13" border="0" alt="登録" hspace="3" />登録</a></span></td>
			</tr>
			<tr>
			  <td nowrap="nowrap" valign="top" height="25" align="center"><span class="mainmenu">&nbsp;<a href="profile.php?mode=editprofile&amp;sid=35aba7a2e676ee53952538263d262ef8" class="mainmenu"><img src="templates/DarkEQ/images/icon_mini_profile.gif" width="12" height="13" border="0" alt="プロフィール" hspace="3" />プロフィール</a>&nbsp;&nbsp;&nbsp;<a href="privmsg.php?folder=inbox&amp;sid=35aba7a2e676ee53952538263d262ef8" class="mainmenu"><img src="templates/DarkEQ/images/icon_mini_message.gif" width="12" height="13" border="0" alt="プライベートメッセージをみるにはログインが必要です" hspace="3" />プライベートメッセージをみるにはログインが必要です</a>&nbsp;&nbsp;&nbsp;<a href="login.php?sid=35aba7a2e676ee53952538263d262ef8" class="mainmenu"><img src="templates/DarkEQ/images/icon_mini_login.gif" width="12" height="13" border="0" alt=" ログイン " hspace="3" /> ログイン </a></span></td>
			</tr>
		  </table>
			</td>
			</tr>
		  </table>
<span class="mainmenu"> <br /> </span>


<form action="search.php?mode=results&amp;sid=35aba7a2e676ee53952538263d262ef8" method="POST"><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="left"><span class="nav"><a href="index.php?sid=35aba7a2e676ee53952538263d262ef8" class="nav">BuchiOnline フォーラムインデックス</a></span></td>
	</tr>
</table>

<table class="forumline" width="100%" cellpadding="4" cellspacing="1" border="0">
	<tr>
		<th class="thHead" colspan="4" height="25">検索条件</th>
	</tr>
	<tr>
		<td class="row1" colspan="2" width="50%"><span class="gen">検索キーワード:</span><br /><span class="gensmall">全てのキーワードを含んだものを検索する時は <u>AND</u> どれかのキーワードを含んだものを検索する時は <u>OR</u> キーワードを含まないものを検索する時は <u>NOT</u> を使用します。ワイルドカードとして * も使用できます。</span></td>
		<td class="row2" colspan="2" valign="top"><span class="genmed"><input type="text" style="width: 300px" class="post" name="search_keywords" size="30" /><br /><input type="radio" name="search_terms" value="any" checked="checked" /> どれかのキーワードで検索、または、入力した通りに検索<br /><input type="radio" name="search_terms" value="all" /> 全てのキーワードを含む</span></td>
	</tr>
	<tr>
		<td class="row1" colspan="2"><span class="gen">投稿者で検索:</span><br /><span class="gensmall">ワイルドカードとして * も使用できます。</span></td>
		<td class="row2" colspan="2" valign="middle"><span class="genmed"><input type="text" style="width: 300px" class="post" name="search_author" size="30" /></span></td>
	</tr>
	<tr>
		<th class="thHead" colspan="4" height="25">検索オプション</th>
	</tr>
	<tr>
		<td class="row1" align="right"><span class="gen">フォーラム:&nbsp;</span></td>
		<td class="row2"><span class="genmed"><select class="post" name="search_forum"><option value="-1">全て</option><option value="1">General Forum</option><option value="2">EverQuest Players</option><option value="3">FF11 Pub</option></select></span></td>
		<td class="row1" align="right" nowrap="nowrap"><span class="gen">どれくらい以前まで検索？:&nbsp;</span></td>
		<td class="row2" valign="middle"><span class="genmed"><select class="post" name="search_time"><option value="0" selected="selected">全ての記事</option><option value="1">1 日</option><option value="7">7 日</option><option value="14">2 週間</option><option value="30">1 ヶ月</option><option value="90">3 ヶ月</option><option value="180">6 ヶ月</option><option value="364">1 年</option></select><br /><input type="radio" name="search_fields" value="all" checked="checked" /> トピックタイトルとメッセージ本文を検索<br /><input type="radio" name="search_fields" value="msgonly" /> メッセージ本文のみ検索</span></td>
	</tr>
	<tr>
		<td class="row1" align="right"><span class="gen">カテゴリ:&nbsp;</span></td>
		<td class="row2"><span class="genmed"><select class="post" name="search_cat"><option value="-1">全て</option><option value="1">Public</option><option value="2">EverQuest</option><option value="3">FINAL FANTASY XI ONLINE</option>
		</select></span></td>
		<td class="row1" align="right"><span class="gen">並び順:&nbsp;</span></td>
		<td class="row2" valign="middle" nowrap="nowrap"><span class="genmed"><select class="post" name="sort_by"><option value="0">投稿時間</option><option value="1">記事件名</option><option value="2">トピックタイトル</option><option value="3">投稿者</option><option value="4">フォーラム</option></select><br /><input type="radio" name="sort_dir" value="ASC" /> 昇り順<br /><input type="radio" name="sort_dir" value="DESC" checked /> 下り順</span>&nbsp;</td>
	</tr>
	<tr>
		<td class="row1" align="right" nowrap="nowrap"><span class="gen">結果表示:&nbsp;</span></td>
		<td class="row2" nowrap="nowrap"><input type="radio" name="show_results" value="posts" /><span class="genmed">記事<input type="radio" name="show_results" value="topics" checked="checked" />トピックス</span></td>
		<td class="row1" align="right"><span class="gen">結果で表示する文字数</span></td>
		<td class="row2"><span class="genmed"><select class="post" name="return_chars"><option value="-1">全て</option><option value="0">0</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="200" selected="selected">200</option><option value="300">300</option><option value="400">400</option><option value="500">500</option><option value="600">600</option><option value="700">700</option><option value="800">800</option><option value="900">900</option><option value="1000">1000</option></select> 文字（記事）</span></td>
	</tr>
	<tr>
		<td class="catBottom" colspan="4" align="center" height="28"><input class="liteoption" type="submit" value="検索" /></td>
	</tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="right" valign="middle"><span class="gensmall">時間設定は、 GMT + 9 時間</span></td>
	</tr>
</table></form>

<table width="100%" border="0">
	<tr>
		<td align="right" valign="top">
<form method="GET" name="jumpbox" action="viewforum.php?sid=35aba7a2e676ee53952538263d262ef8">
  <table cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td nowrap="nowrap"><span class="gensmall">移動：:&nbsp;<select name="f" onChange="if(this.options[this.selectedIndex].value != -1){ forms['jumpbox'].submit() }"><option value="-1">フォーラムを選択</option><option value="-1">&nbsp;</option><option value="-1">Public</option><option value="-1">----------------</option><option value="1">General Forum</option><option value="-1">&nbsp;</option><option value="-1">EverQuest</option><option value="-1">----------------</option><option value="2">EverQuest Players</option><option value="-1">&nbsp;</option><option value="-1">FINAL FANTASY XI ONLINE</option><option value="-1">----------------</option><option value="3">FF11 Pub</option></select><input type="hidden" name="sid" value="sid=35aba7a2e676ee53952538263d262ef8" />&nbsp;
		<input type="submit" value="Go" class="liteoption" />
		</span></td>
	</tr>
  </table>
</form>

</td>
	</tr>
</table>


<div align="center"> <span class="copyright"><br /><br />
  <!--

	Please note that the following copyright notice
	MUST be displayed on each and every page output
	by phpBB. You may alter the font, colour etc. but
	you CANNOT remove it, nor change it so that it be,
	to all intents and purposes, invisible. You may ADD
	your own notice to it should you have altered the
	code but you may not replace it. The hyperlink must
	also remain intact. These conditions are part of the
	licence this software is released under. See the
	LICENCE and README files for more information.

	The phpBB Group : 2001

// -->
  Powered by phpBB 2.0.0 &copy; 2001 <a href="http://www.phpbb.com/" target="_phpbb" class="copyright">phpBB
  Group</a><br> -- Theme by <a href="mailto:Shady@ShadyNeighbor.com" class="copyright">ShadyNeighbor</a> - EQ graphic from <a href="http://www.freeclipart.nu/" class="copyright">www.freeclipart.nu/</a> -- <br /></span></div>
	</td>
  </tr>
</table>
&nbsp;
</body>
</html>

