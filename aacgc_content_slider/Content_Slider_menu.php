<?php

/*
#######################################
#     e107 website system plguin      #
#     AACGC Content Slider            #    
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/


//-------------------------Menu Title--------------------------------+

$contentslider_title .= "".$pref['contentslider_title']."";

//-------------------------------------------------------------------+

$contentslider_text .= "<table style='width:100%' class='' border='".$pref['contentslider_border']."' bordercolor='".$pref['contentslider_bordercolor']."'><tr>";

if($pref['contentslider_enable_leftimage'] == "1"){
$contentslider_text .= "<td class='' rowspan=2><img width='".$pref['contentslider_limgsize']."' src='".$pref['contentslider_limgpath']."' align=left></img></td>";}

$contentslider_text .= "<td class=''>";

$contentslider_text .= "
<table style='width:100%' class='forumheader3'><tr>
<td class=''><center>
<script type='text/javascript' src='".e_PLUGIN."aacgc_content_slider/thumbnailviewer.js' defer='defer'></script>
<div id='loadareacontentslider' style='width:100%' class=''>
<font color='".$pref['content_introtfcolor']."' size='".$pref['content_introtfsize']."'><b><u>".$pref['contentslider_introtitle']."</u></b></font><br><br>
<font color='".$pref['content_introfcolor']."' size='".$pref['content_introfsize']."'>".$pref['contentslider_intro']."</font></div>
</center>
</td></tr></table>";



$contentslider_text .= "</td>";

if($pref['contentslider_enable_rightimage'] == "1"){
$contentslider_text .= "<td class='' rowspan=2><img width='".$pref['contentslider_rimgsize']."' src='".$pref['contentslider_rimgpath']."' align=right></img></td>";}

$contentslider_text .= "</tr><tr><td class=''>
<table style='width:100%' class=''><tr>";


$contentslider_text .= "<td class='forumheader3' style='width:20%'><center>
<a href='".e_PLUGIN."aacgc_content_slider/images/blank.png' rel='enlargeimage::click' rev='loadareacontentslider::' title='<font color=".$pref['content_introtfcolor']." size=".$pref['content_introtfsize']."><b><u>".$pref['contentslider_introtitle']."</u></b></font><br><br><font color=#".$pref['content_introfcolor']." size=".$pref['content_introfsize'].">".$pref['contentslider_intro']."'>[ Main ]</a></td>";


if ($pref['content_button1'] == ""){}
else
{$contentslider_text .= "<td class='forumheader3' style='width:20%'><center>
<a href='".e_PLUGIN."aacgc_content_slider/images/blank.png' rel='enlargeimage::click' rev='loadareacontentslider::' title='<font color=#".$pref['content_titlefcolor']." size=".$pref['content_titlefsize']."><b><u>".$pref['content_title1']."</u></b></font><br><br><font color=#".$pref['content_textfcolor']." size=".$pref['content_textfsize'].">".$pref['content_content1']."</font>'>[ ".$pref['content_button1']." ]</a></td>";}

if ($pref['content_button2'] == ""){}
else
{$contentslider_text .= "<td class='forumheader3' style='width:20%'><center>
<a href='".e_PLUGIN."aacgc_content_slider/images/blank.png' rel='enlargeimage::click' rev='loadareacontentslider::' title='<font color=#".$pref['content_titlefcolor']." size=".$pref['content_titlefsize']."><b><u>".$pref['content_title2']."</u></b></font><br><br><font color=#".$pref['content_textfcolor']." size=".$pref['content_textfsize'].">".$pref['content_content2']."</font>'>[ ".$pref['content_button2']." ]</a></td>";}

if ($pref['content_button3'] == ""){}
else
{$contentslider_text .= "<td class='forumheader3' style='width:20%'><center>
<a href='".e_PLUGIN."aacgc_content_slider/images/blank.png' rel='enlargeimage::click' rev='loadareacontentslider::' title='<font color=#".$pref['content_titlefcolor']." size=".$pref['content_titlefsize']."><b><u>".$pref['content_title3']."</u></b></font><br><br><font color=#".$pref['content_textfcolor']." size=".$pref['content_textfsize'].">".$pref['content_content3']."</font>'>[ ".$pref['content_button3']." ]</a></td>";}

if ($pref['content_button4'] == ""){}
else
{$contentslider_text .= "<td class='forumheader3' style='width:20%'><center>
<a href='".e_PLUGIN."aacgc_content_slider/images/blank.png' rel='enlargeimage::click' rev='loadareacontentslider::' title='<font color=#".$pref['content_titlefcolor']." size=".$pref['content_titlefsize']."><b><u>".$pref['content_title4']."</u></b></font><br><br><font color=#".$pref['content_textfcolor']." size=".$pref['content_textfsize'].">".$pref['content_content4']."</font>'>[ ".$pref['content_button4']." ]</a></td>";}

if ($pref['content_button5'] == ""){}
else
{$contentslider_text .= "<td class='forumheader3' style='width:20%'><center>
<a href='".e_PLUGIN."aacgc_content_slider/images/blank.png' rel='enlargeimage::click' rev='loadareacontentslider::' title='<font color=#".$pref['content_titlefcolor']." size=".$pref['content_titlefsize']."><b><u>".$pref['content_title5']."</u></b></font><br><br><font color=#".$pref['content_textfcolor']." size=".$pref['content_textfsize'].">".$pref['content_content5']."</font>'>[ ".$pref['content_button5']." ]</a></td>";}

$contentslider_text .= "</tr></table></td>";

$contentslider_text .= "</tr></table>";



$ns -> tablerender($contentslider_title, $contentslider_text);


?>