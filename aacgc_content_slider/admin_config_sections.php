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

    $pref['contentslider_introtitle'] = $_POST['contentslider_introtitle'];
    $pref['contentslider_intro'] = $_POST['contentslider_intro'];

    $pref['content_title1'] = $_POST['content_title1'];
    $pref['content_content1'] = $_POST['content_content1'];
    $pref['content_button1'] = $_POST['content_button1'];
    $pref['content_title2'] = $_POST['content_title2'];
    $pref['content_content2'] = $_POST['content_content2'];
    $pref['content_button2'] = $_POST['content_button2'];
    $pref['content_title3'] = $_POST['content_title3'];
    $pref['content_content3'] = $_POST['content_content3'];
    $pref['content_button3'] = $_POST['content_button3'];
    $pref['content_title4'] = $_POST['content_title4'];
    $pref['content_content4'] = $_POST['content_content4'];
    $pref['content_button4'] = $_POST['content_button4'];
    $pref['content_title5'] = $_POST['content_title5'];
    $pref['content_content5'] = $_POST['content_content5'];
    $pref['content_button5'] = $_POST['content_button5'];




if (isset($_POST[''])) 
{$pref[''] = 1;}
else
{$pref[''] = 0;}

    save_prefs();

$consl_msgtext = "Settings Saved";
}


//--------------------------------------------------------------------


$consl_text .= "<form method='post' action='".e_SELF."' id='conslform'>
<table class='fborder' width='100%'><tr>";



$consl_text .= "
<table class='fborder' width='100%'><tr>
<td style='width:30%' class='forumheader3' colspan=2><b>Introduction (Main Section)</b></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Intro Title:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='100' name='contentslider_introtitle' value='" . $pref['contentslider_introtitle'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Intro:</td>
<td style='width:70%' class='forumheader3'><textarea class='tbox' rows='10' cols='100' name='contentslider_intro'>".$tp->toFORM($pref['contentslider_intro'])."</textarea>
</tr>
</table><br><br>


<table class='fborder' width='100%'><tr>
<td style='width:30%' class='forumheader3' colspan=2><b>Section 1</b></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Title:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='100' name='content_title1' value='" . $pref['content_title1'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Content/Details:</td>
<td style='width:70%' class='forumheader3'><textarea class='tbox' rows='10' cols='100' name='content_content1'>".$tp->toFORM($pref['content_content1'])."</textarea>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Button Text:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='15' name='content_button1' value='" . $pref['content_button1'] . "' /></td>
</tr></table><br><br>


<table class='fborder' width='100%'><tr>
<td style='width:30%' class='forumheader3' colspan=2><b>Section 2</b></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Title:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='100' name='content_title2' value='" . $pref['content_title2'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Content/Details:</td>
<td style='width:70%' class='forumheader3'><textarea class='tbox' rows='10' cols='100' name='content_content2'>".$tp->toFORM($pref['content_content2'])."</textarea>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Button Text:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='15' name='content_button2' value='" . $pref['content_button2'] . "' /></td>
</tr></table><br><br>


<table class='fborder' width='100%'><tr>
<td style='width:30%' class='forumheader3' colspan=2><b>Section 3</b></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Title:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='100' name='content_title3' value='" . $pref['content_title3'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Content/Details:</td>
<td style='width:70%' class='forumheader3'><textarea class='tbox' rows='10' cols='100' name='content_content3'>".$tp->toFORM($pref['content_content3'])."</textarea>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Button Text:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='15' name='content_button3' value='" . $pref['content_button3'] . "' /></td>
</tr></table><br><br>


<table class='fborder' width='100%'><tr>
<td style='width:30%' class='forumheader3' colspan=2><b>Section 4</b></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Title:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='100' name='content_title4' value='" . $pref['content_title4'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Content/Details:</td>
<td style='width:70%' class='forumheader3'><textarea class='tbox' rows='10' cols='100' name='content_content4'>".$tp->toFORM($pref['content_content4'])."</textarea>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Button Text:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='15' name='content_button4' value='" . $pref['content_button4'] . "' /></td>
</tr></table><br><br>


<table class='fborder' width='100%'><tr>
<td style='width:30%' class='forumheader3' colspan=2><b>Section 5</b></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Title:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='100' name='content_title5' value='" . $pref['content_title5'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Content/Details:</td>
<td style='width:70%' class='forumheader3'><textarea class='tbox' rows='10' cols='100' name='content_content5'>".$tp->toFORM($pref['content_content5'])."</textarea>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Button Text:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='15' name='content_button5' value='" . $pref['content_button5'] . "' /></td>
</tr></table><br><br>


";




/*
$consl_text .= "<tr>
<td style='width:30%' class='forumheader3'>Text/Content:</td>
<td colspan=2 class='forumheader3'>".($pref[''] == 1 ? "<input type='checkbox' name='' value='1' checked='checked' />" : "<input type='checkbox' name='' value='0' />")."</td>
</tr>";
*/


//------------------------------------------------------------------------------------
$consl_text .= "
<table class='fborder' width='100%'><tr>
<td colspan='2' class='fcaption' style='text-align: left;'><input type='submit' name='update' value='Save Settings' class='button' />\n
</td>
</tr></table></form>";





$ns->tablerender("AACGC Content Slider(sections)", $consl_text);

require_once(e_ADMIN . "footer.php");

