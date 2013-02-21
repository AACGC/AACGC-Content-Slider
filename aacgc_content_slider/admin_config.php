<?php

/*
#######################################
#     e107 website system plguin      #
#     AACGC Content Slider            #    
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/

require_once("../../class2.php");
if (!getperms("P"))
{
    header("location:" . e_HTTP . "index.php");
    exit;
} 
require_once(e_ADMIN . "auth.php");
require_once(e_HANDLER . "userclass_class.php");


if (isset($_POST['update']))
{ 

    $pref['contentslider_border'] = $_POST['contentslider_border'];
    $pref['contentslider_bordercolor'] = $_POST['contentslider_bordercolor'];


    $pref['contentslider_title'] = $_POST['contentslider_title'];
    $pref['content_titlefsize'] = $_POST['content_titlefsize'];
    $pref['content_titlefcolor'] = $_POST['content_titlefcolor'];
    $pref['content_textfsize'] = $_POST['content_textfsize'];
    $pref['content_textfcolor'] = $_POST['content_textfcolor'];

    $pref['content_introtfsize'] = $_POST['content_introtfsize'];
    $pref['content_introtfcolor'] = $_POST['content_introtfcolor'];
    $pref['content_introfsize'] = $_POST['content_introfsize'];
    $pref['content_introfcolor'] = $_POST['content_introfcolor'];

    $pref['contentslider_limgsize'] = $_POST['contentslider_limgsize'];
    $pref['contentslider_limgpath'] = $_POST['contentslider_limgpath'];
    $pref['contentslider_rimgsize'] = $_POST['contentslider_rimgsize'];
    $pref['contentslider_rimgpath'] = $_POST['contentslider_rimgpath'];


if (isset($_POST['contentslider_enable_rightimage'])) 
{$pref['contentslider_enable_rightimage'] = 1;}
else
{$pref['contentslider_enable_rightimage'] = 0;}

if (isset($_POST['contentslider_enable_leftimage'])) 
{$pref['contentslider_enable_leftimage'] = 1;}
else
{$pref['contentslider_enable_leftimage'] = 0;}

    save_prefs();

$consl_msgtext = "Settings Saved";
}


//--------------------------------------------------------------------


$consl_text .= "<form method='post' action='".e_SELF."' id='conslform'>
<table class='fborder' width='100%'><tr>";



$consl_text .= "
<tr>
<td style='width:30%' class='forumheader3' colspan=2><b>Settings</b></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Slider Menu Title:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='100' name='contentslider_title' value='" . $pref['contentslider_title'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Border Size (0 for no border):</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='10' name='contentslider_border' value='" . $pref['contentslider_border'] . "' />px</td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Border Color:</td>
<td style='width:70%' class='forumheader3'>#<input class='tbox' type='text'  size='10' name='contentslider_bordercolor' value='" . $pref['contentslider_bordercolor'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3' colspan=2><b>Section Settings</b></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Intro Title Font Size:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='5' name='content_introtfsize' value='" . $pref['content_introtfsize'] . "' />px</td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Intro Title Font color:</td>
<td style='width:70%' class='forumheader3'>#<input class='tbox' type='text'  size='10' name='content_introtfcolor' value='" . $pref['content_introtfcolor'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Intro Font Size:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='5' name='content_introfsize' value='" . $pref['content_introfsize'] . "' />px</td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Intro Font color:</td>
<td style='width:70%' class='forumheader3'>#<input class='tbox' type='text'  size='10' name='content_introfcolor' value='" . $pref['content_introfcolor'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Section Title Font Size:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='5' name='content_titlefsize' value='" . $pref['content_titlefsize'] . "' />px</td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Section Title Font color:</td>
<td style='width:70%' class='forumheader3'>#<input class='tbox' type='text'  size='10' name='content_titlefcolor' value='" . $pref['content_titlefcolor'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Section/Detail Font Size:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='5' name='content_textfsize' value='" . $pref['content_textfsize'] . "' />px</td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Section/Detail Font color:</td>
<td style='width:70%' class='forumheader3'>#<input class='tbox' type='text'  size='10' name='content_textfcolor' value='" . $pref['content_textfcolor'] . "' /></td>
</tr>";





$consl_text .= "
<tr>
<td style='width:30%' class='forumheader3' colspan=2><b>Image Settings</b></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Enable Left Image:</td>
<td colspan=2 class='forumheader3'>".($pref['contentslider_enable_leftimage'] == 1 ? "<input type='checkbox' name='contentslider_enable_leftimage' value='1' checked='checked' />" : "<input type='checkbox' name='contentslider_enable_leftimage' value='0' />")."</td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Left Image Path:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='100' name='contentslider_limgpath' value='" . $pref['contentslider_limgpath'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Left Image Size:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='10' name='contentslider_limgsize' value='" . $pref['contentslider_limgsize'] . "' />px</td>
</tr>


<tr>
<td style='width:30%' class='forumheader3'>Enable Right Image:</td>
<td colspan=2 class='forumheader3'>".($pref['contentslider_enable_rightimage'] == 1 ? "<input type='checkbox' name='contentslider_enable_rightimage' value='1' checked='checked' />" : "<input type='checkbox' name='contentslider_enable_rightimage' value='0' />")."</td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Right Image Path:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='100' name='contentslider_rimgpath' value='" . $pref['contentslider_rimgpath'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Right Image Size:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='10' name='contentslider_rimgsize' value='" . $pref['contentslider_rimgsize'] . "' />px</td>
</tr>
";




$consl_text .= "</table><br><br>";


//------------------------------------------------------------------------------------
$consl_text .= "
<table class='fborder' width='100%'><tr>
<td colspan='2' class='fcaption' style='text-align: left;'><input type='submit' name='update' value='Save Settings' class='button' />\n
</td>
</tr></table></form>";





$ns->tablerender("AACGC Content Slider(settings)", $consl_text);

require_once(e_ADMIN . "footer.php");
