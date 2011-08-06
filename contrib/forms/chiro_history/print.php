<?php
include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: chiro_history");
?>
<html><head>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
</head>
<body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<form method=post action="<?echo $rootdir;?>/forms/chiro_history/save.php?mode=new" name="my_form" onsubmit="return top.restoreSession()">
<h1> Chiropractic History </h1>
<hr>
<input type="submit" name="submit form" value="submit form" /><br>
<br>
<h3> <? xl("History",'e') ?> </h3>

<table>

<tr><td>
<span class='text'><?php xl('Approximate onset date (yyyy-mm-dd): ','e') ?></span>
</td><td>
<input type='text' size='10' name='approximate_onset_date' id='approximate_onset_date' onkeyup='datekeyup(this,mypcc)' onblur='dateblur(this,mypcc)' title='yyyy-mm-dd last date of this event' />
<img src='../../../interface/pic/show_calendar.gif' align='absbottom' width='24' height='22'
id='img_approximate_onset_date' border='0' alt='[?]' style='cursor:pointer'
title='Click here to choose a date'>
<script>
Calendar.setup({inputField:'approximate_onset_date', ifFormat:'%Y-%m-%d', button:'img_approximate_onset_date'});
</script>
</td></tr>

</table>

<table>

<tr><td> <? xl("Due to",'e') ?> </td> <td><label><input type="checkbox" name="due_to[]" value="Insidious Onset" /> <? xl("Insidious Onset",'e') ?> </label> <label><input type="checkbox" name="due_to[]" value="Trauma" /> <? xl("Trauma",'e') ?> </label> <label><input type="checkbox" name="due_to[]" value="Work Injury" /> <? xl("Work Injury",'e') ?> </label> <label><input type="checkbox" name="due_to[]" value="Personal Injury" /> <? xl("Personal Injury",'e') ?> </label> <label><input type="checkbox" name="due_to[]" value="Auto Collision" /> <? xl("Auto Collision",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Areas involved",'e') ?> </td> <td><label><input type="checkbox" name="areas_involved[]" value="Right" /> <? xl("Right",'e') ?> </label> <label><input type="checkbox" name="areas_involved[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="areas_involved[]" value="Neck" /> <? xl("Neck",'e') ?> </label> <label><input type="checkbox" name="areas_involved[]" value="Mid Back" /> <? xl("Mid Back",'e') ?> </label> <label><input type="checkbox" name="areas_involved[]" value="Low Back" /> <? xl("Low Back",'e') ?> </label> <label><input type="checkbox" name="areas_involved[]" value="Shoulder" /> <? xl("Shoulder",'e') ?> </label> <label><input type="checkbox" name="areas_involved[]" value="Elbow" /> <? xl("Elbow",'e') ?> </label> <label><input type="checkbox" name="areas_involved[]" value="Hand" /> <? xl("Hand",'e') ?> </label> <label><input type="checkbox" name="areas_involved[]" value="Hip" /> <? xl("Hip",'e') ?> </label> <label><input type="checkbox" name="areas_involved[]" value="Knee" /> <? xl("Knee",'e') ?> </label> <label><input type="checkbox" name="areas_involved[]" value="Foot" /> <? xl("Foot",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Radiating to",'e') ?> </td> <td><label><input type="checkbox" name="radiating_to[]" value="Right" /> <? xl("Right",'e') ?> </label> <label><input type="checkbox" name="radiating_to[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="radiating_to[]" value="Shoulder" /> <? xl("Shoulder",'e') ?> </label> <label><input type="checkbox" name="radiating_to[]" value="Arm" /> <? xl("Arm",'e') ?> </label> <label><input type="checkbox" name="radiating_to[]" value="Hip" /> <? xl("Hip",'e') ?> </label> <label><input type="checkbox" name="radiating_to[]" value="Leg" /> <? xl("Leg",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Radiating to other",'e') ?> </td> <td><input type="text" name="radiating_to_other"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Describe symtoms",'e') ?> </td> <td><label><input type="checkbox" name="describe_symtoms[]" value="Constant" /> <? xl("Constant",'e') ?> </label> <label><input type="checkbox" name="describe_symtoms[]" value="Intermittent" /> <? xl("Intermittent",'e') ?> </label> <label><input type="checkbox" name="describe_symtoms[]" value="Dull Ache" /> <? xl("Dull Ache",'e') ?> </label> <label><input type="checkbox" name="describe_symtoms[]" value="Sharp" /> <? xl("Sharp",'e') ?> </label> <label><input type="checkbox" name="describe_symtoms[]" value="Burning" /> <? xl("Burning",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Pain severity",'e') ?> </td> <td><select name="pain_severity" >
<option value=""></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10"> <? xl("10",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Associated symptoms",'e') ?> </td> <td><textarea name="associated_symptoms"  rows="4" cols="40"></textarea></td></tr>

</table>

<table>

<tr><td> <? xl("Pain with",'e') ?> </td> <td><label><input type="checkbox" name="pain_with[]" value="Cough" /> <? xl("Cough",'e') ?> </label> <label><input type="checkbox" name="pain_with[]" value="Sneeze" /> <? xl("Sneeze",'e') ?> </label> <label><input type="checkbox" name="pain_with[]" value="Deep Breath" /> <? xl("Deep Breath",'e') ?> </label> <label><input type="checkbox" name="pain_with[]" value="Baring Down" /> <? xl("Baring Down",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Describe pain",'e') ?> </td> <td><input type="text" name="describe_pain"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Worse",'e') ?> </td> <td><label><input type="checkbox" name="worse[]" value="Bending" /> <? xl("Bending",'e') ?> </label> <label><input type="checkbox" name="worse[]" value="Sitting Rising" /> <? xl("Sitting Rising",'e') ?> </label> <label><input type="checkbox" name="worse[]" value="Turning Neck" /> <? xl("Turning Neck",'e') ?> </label> <label><input type="checkbox" name="worse[]" value="Turning Trunk" /> <? xl("Turning Trunk",'e') ?> </label> <label><input type="checkbox" name="worse[]" value="Turning Lower Back" /> <? xl("Turning Lower Back",'e') ?> </label> <label><input type="checkbox" name="worse[]" value="Standing" /> <? xl("Standing",'e') ?> </label> <label><input type="checkbox" name="worse[]" value="Lying" /> <? xl("Lying",'e') ?> </label> <label><input type="checkbox" name="worse[]" value="Resting" /> <? xl("Resting",'e') ?> </label> <label><input type="checkbox" name="worse[]" value="AM" /> <? xl("AM",'e') ?> </label> <label><input type="checkbox" name="worse[]" value="PM" /> <? xl("PM",'e') ?> </label> <label><input type="checkbox" name="worse[]" value="No Effect" /> <? xl("No Effect",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Worse other",'e') ?> </td> <td><input type="text" name="worse_other"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Better",'e') ?> </td> <td><label><input type="checkbox" name="better[]" value="Bending" /> <? xl("Bending",'e') ?> </label> <label><input type="checkbox" name="better[]" value="Sitting Rising" /> <? xl("Sitting Rising",'e') ?> </label> <label><input type="checkbox" name="better[]" value="Turning Neck" /> <? xl("Turning Neck",'e') ?> </label> <label><input type="checkbox" name="better[]" value="Turning Trunk" /> <? xl("Turning Trunk",'e') ?> </label> <label><input type="checkbox" name="better[]" value="Turning Lower Back" /> <? xl("Turning Lower Back",'e') ?> </label> <label><input type="checkbox" name="better[]" value="Standing" /> <? xl("Standing",'e') ?> </label> <label><input type="checkbox" name="better[]" value="Lying" /> <? xl("Lying",'e') ?> </label> <label><input type="checkbox" name="better[]" value="Resting" /> <? xl("Resting",'e') ?> </label> <label><input type="checkbox" name="better[]" value="AM" /> <? xl("AM",'e') ?> </label> <label><input type="checkbox" name="better[]" value="PM" /> <? xl("PM",'e') ?> </label> <label><input type="checkbox" name="better[]" value="No Effect" /> <? xl("No Effect",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Better other",'e') ?> </td> <td><input type="text" name="better_other"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Pain effected",'e') ?> </td> <td><label><input type="checkbox" name="pain_effected[]" value="NA" /> <? xl("NA",'e') ?> </label> <label><input type="checkbox" name="pain_effected[]" value="Job" /> <? xl("Job",'e') ?> </label> <label><input type="checkbox" name="pain_effected[]" value="Home" /> <? xl("Home",'e') ?> </label> <label><input type="checkbox" name="pain_effected[]" value="Recreational Activities" /> <? xl("Recreational Activities",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Effected other",'e') ?> </td> <td><input type="text" name="effected_other"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Previous history",'e') ?> </td> <td><label><input type="checkbox" name="previous_history[]" value="No" /> <? xl("No",'e') ?> </label> <label><input type="checkbox" name="previous_history[]" value="Yes" /> <? xl("Yes",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Previous history explain",'e') ?> </td> <td><input type="text" name="previous_history_explain"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Previous treatment",'e') ?> </td> <td><label><input type="checkbox" name="previous_treatment[]" value="DC" /> <? xl("DC",'e') ?> </label> <label><input type="checkbox" name="previous_treatment[]" value="MD" /> <? xl("MD",'e') ?> </label> <label><input type="checkbox" name="previous_treatment[]" value="PT" /> <? xl("PT",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Previous treatment other",'e') ?> </td> <td><input type="text" name="previous_treatment_other"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Current treatment",'e') ?> </td> <td><label><input type="checkbox" name="current_treatment[]" value="DC" /> <? xl("DC",'e') ?> </label> <label><input type="checkbox" name="current_treatment[]" value="MD" /> <? xl("MD",'e') ?> </label> <label><input type="checkbox" name="current_treatment[]" value="PT" /> <? xl("PT",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Current treatment other",'e') ?> </td> <td><input type="text" name="current_treatment_other"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Recent scans",'e') ?> </td> <td><label><input type="checkbox" name="recent_scans[]" value="X-Rays" /> <? xl("X-Rays",'e') ?> </label> <label><input type="checkbox" name="recent_scans[]" value="MRI" /> <? xl("MRI",'e') ?> </label> <label><input type="checkbox" name="recent_scans[]" value="CT" /> <? xl("CT",'e') ?> </label></td></tr>

</table>

<table>

<tr><td>
<span class='text'><?php xl('Scan date (yyyy-mm-dd): ','e') ?></span>
</td><td>
<input type='text' size='10' name='scan_date' id='scan_date' onkeyup='datekeyup(this,mypcc)' onblur='dateblur(this,mypcc)' title='yyyy-mm-dd last date of this event' />
<img src='../../../interface/pic/show_calendar.gif' align='absbottom' width='24' height='22'
id='img_scan_date' border='0' alt='[?]' style='cursor:pointer'
title='Click here to choose a date'>
<script>
Calendar.setup({inputField:'scan_date', ifFormat:'%Y-%m-%d', button:'img_scan_date'});
</script>
</td></tr>

</table>

<table>

<tr><td> <? xl("Scan location",'e') ?> </td> <td><input type="text" name="scan_location"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Medications",'e') ?> </td> <td><label><input type="checkbox" name="medications[]" value="NSAIDS" /> <? xl("NSAIDS",'e') ?> </label> <label><input type="checkbox" name="medications[]" value="Muscle Relaxer" /> <? xl("Muscle Relaxer",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Medications other",'e') ?> </td> <td><input type="text" name="medications_other"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Vitamins supplements",'e') ?> </td> <td><label><input type="checkbox" name="vitamins_supplements[]" value="Mulivitamin" /> <? xl("Mulivitamin",'e') ?> </label> <label><input type="checkbox" name="vitamins_supplements[]" value="Calcium" /> <? xl("Calcium",'e') ?> </label> <label><input type="checkbox" name="vitamins_supplements[]" value="Fish Oil" /> <? xl("Fish Oil",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Vitamins supplements other",'e') ?> </td> <td><input type="text" name="vitamins_supplements_other"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Recent or major surgeries",'e') ?> </td> <td><input type="text" name="recent_or_major_surgeries"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Current or past health problems",'e') ?> </td> <td><input type="text" name="current_or_past_health_problems"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Family history of major illness",'e') ?> </td> <td><input type="text" name="family_history_of_major_illness"  /></td></tr>

</table>
<br>
<h3> <? xl("Musculosketal Exam",'e') ?> </h3>
<br>
<h3> <? xl("Constitutional",'e') ?> </h3>

<table>

<tr><td> <? xl("Ht",'e') ?> </td> <td><input type="text" name="ht"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Wt",'e') ?> </td> <td><input type="text" name="wt"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Bp",'e') ?> </td> <td><input type="text" name="bp"  /></td></tr>

</table>

<table>

<tr><td> <? xl("General appearance",'e') ?> </td> <td><label><input type="checkbox" name="general_appearance[]" value="Normal" /> <? xl("Normal",'e') ?> </label> <label><input type="checkbox" name="general_appearance[]" value="Other" /> <? xl("Other",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("General appearance other",'e') ?> </td> <td><input type="text" name="general_appearance_other"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Current symptoms",'e') ?> </td> <td><label><input type="checkbox" name="current_symptoms[]" value="Cervical" /> <? xl("Cervical",'e') ?> </label> <label><input type="checkbox" name="current_symptoms[]" value="Thoracic" /> <? xl("Thoracic",'e') ?> </label> <label><input type="checkbox" name="current_symptoms[]" value="Lumbar" /> <? xl("Lumbar",'e') ?> </label> <label><input type="checkbox" name="current_symptoms[]" value="SI" /> <? xl("SI",'e') ?> </label> <label><input type="checkbox" name="current_symptoms[]" value="Other" /> <? xl("Other",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Symptoms other",'e') ?> </td> <td><input type="text" name="symptoms_other"  /></td></tr>

</table>
<br>
<h3> <? xl("Mechanical MecKenzie Exam",'e') ?> </h3>

<table>

<tr><td> <? xl("Cervical",'e') ?> </td> <td><label><input type="checkbox" name="cervical" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Cervical wnl",'e') ?> </td> <td><input type="text" name="cervical_wnl"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Thoracic",'e') ?> </td> <td><label><input type="checkbox" name="thoracic" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Thoracic wnl",'e') ?> </td> <td><input type="text" name="thoracic_wnl"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lumbar",'e') ?> </td> <td><label><input type="checkbox" name="lumbar" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Lumbar wnl",'e') ?> </td> <td><input type="text" name="lumbar_wnl"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv rom",'e') ?> </td> <td><label><input type="checkbox" name="cerv_rom[]" value="Subject" /> <? xl("Subject",'e') ?> </label> <label><input type="checkbox" name="cerv_rom[]" value="Object" /> <? xl("Object",'e') ?> </label> <label><input type="checkbox" name="cerv_rom[]" value="WNL" /> <? xl("WNL",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv flexion rom",'e') ?> </td> <td><input type="text" name="cerv_flexion_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv flexion pain",'e') ?> </td> <td><label><input type="checkbox" name="cerv_flexion_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv flexion response",'e') ?> </td> <td><input type="text" name="cerv_flexion_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv extension rom",'e') ?> </td> <td><input type="text" name="cerv_extension_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv extension pain",'e') ?> </td> <td><label><input type="checkbox" name="cerv_extension_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv extension response",'e') ?> </td> <td><input type="text" name="cerv_extension_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv lt lat flex rom",'e') ?> </td> <td><input type="text" name="cerv_lt_lat_flex_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv lt lat flex pain",'e') ?> </td> <td><label><input type="checkbox" name="cerv_lt_lat_flex_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv lt lat flex response",'e') ?> </td> <td><input type="text" name="cerv_lt_lat_flex_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv rt lat flex rom",'e') ?> </td> <td><input type="text" name="cerv_rt_lat_flex_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv rt lat flex pain",'e') ?> </td> <td><label><input type="checkbox" name="cerv_rt_lat_flex_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv rt lat flex response",'e') ?> </td> <td><input type="text" name="cerv_rt_lat_flex_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv lt rotation rom",'e') ?> </td> <td><input type="text" name="cerv_lt_rotation_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv lt rotation pain",'e') ?> </td> <td><label><input type="checkbox" name="cerv_lt_rotation_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv lt rotation response",'e') ?> </td> <td><input type="text" name="cerv_lt_rotation_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv rt rotation rom",'e') ?> </td> <td><input type="text" name="cerv_rt_rotation_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv rt rotation pain",'e') ?> </td> <td><label><input type="checkbox" name="cerv_rt_rotation_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv rt rotation response",'e') ?> </td> <td><input type="text" name="cerv_rt_rotation_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Thor rom",'e') ?> </td> <td><label><input type="checkbox" name="thor_rom[]" value="Subject" /> <? xl("Subject",'e') ?> </label> <label><input type="checkbox" name="thor_rom[]" value="Object" /> <? xl("Object",'e') ?> </label> <label><input type="checkbox" name="thor_rom[]" value="WNL" /> <? xl("WNL",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Thor flexion rom",'e') ?> </td> <td><input type="text" name="thor_flexion_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Thor flexion pain",'e') ?> </td> <td><label><input type="checkbox" name="thor_flexion_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Thor flexion response",'e') ?> </td> <td><input type="text" name="thor_flexion_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Thor extension rom",'e') ?> </td> <td><input type="text" name="thor_extension_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Thor extension pain",'e') ?> </td> <td><label><input type="checkbox" name="thor_extension_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Thor extension response",'e') ?> </td> <td><input type="text" name="thor_extension_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Thor lt lat flex rom",'e') ?> </td> <td><input type="text" name="thor_lt_lat_flex_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Thor lt lat flex pain",'e') ?> </td> <td><label><input type="checkbox" name="thor_lt_lat_flex_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Thor lt lat flex response",'e') ?> </td> <td><input type="text" name="thor_lt_lat_flex_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Thor rt lat flex rom",'e') ?> </td> <td><input type="text" name="thor_rt_lat_flex_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Thor rt lat flex pain",'e') ?> </td> <td><label><input type="checkbox" name="thor_rt_lat_flex_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Thor rt lat flex response",'e') ?> </td> <td><input type="text" name="thor_rt_lat_flex_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Thor lt rotation rom",'e') ?> </td> <td><input type="text" name="thor_lt_rotation_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Thor lt rotation pain",'e') ?> </td> <td><label><input type="checkbox" name="thor_lt_rotation_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Thor lt rotation response",'e') ?> </td> <td><input type="text" name="thor_lt_rotation_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Thor rt rotation rom",'e') ?> </td> <td><input type="text" name="thor_rt_rotation_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Thor rt rotation pain",'e') ?> </td> <td><label><input type="checkbox" name="thor_rt_rotation_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Thor rt rotation response",'e') ?> </td> <td><input type="text" name="thor_rt_rotation_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb rom",'e') ?> </td> <td><label><input type="checkbox" name="lumb_rom[]" value="Subject" /> <? xl("Subject",'e') ?> </label> <label><input type="checkbox" name="lumb_rom[]" value="Object" /> <? xl("Object",'e') ?> </label> <label><input type="checkbox" name="lumb_rom[]" value="WNL" /> <? xl("WNL",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb flexion rom",'e') ?> </td> <td><input type="text" name="lumb_flexion_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb flexion pain",'e') ?> </td> <td><label><input type="checkbox" name="lumb_flexion_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb flexion response",'e') ?> </td> <td><input type="text" name="lumb_flexion_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb extension rom",'e') ?> </td> <td><input type="text" name="lumb_extension_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb extension pain",'e') ?> </td> <td><label><input type="checkbox" name="lumb_extension_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb extension response",'e') ?> </td> <td><input type="text" name="lumb_extension_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb lt lat flex rom",'e') ?> </td> <td><input type="text" name="lumb_lt_lat_flex_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb lt lat flex pain",'e') ?> </td> <td><label><input type="checkbox" name="lumb_lt_lat_flex_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb lt lat flex response",'e') ?> </td> <td><input type="text" name="lumb_lt_lat_flex_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb rt lat flex rom",'e') ?> </td> <td><input type="text" name="lumb_rt_lat_flex_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb rt lat flex pain",'e') ?> </td> <td><label><input type="checkbox" name="lumb_rt_lat_flex_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb rt lat flex response",'e') ?> </td> <td><input type="text" name="lumb_rt_lat_flex_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb lt rotation rom",'e') ?> </td> <td><input type="text" name="lumb_lt_rotation_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb lt rotation pain",'e') ?> </td> <td><label><input type="checkbox" name="lumb_lt_rotation_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb lt rotation response",'e') ?> </td> <td><input type="text" name="lumb_lt_rotation_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb rt rotation rom",'e') ?> </td> <td><input type="text" name="lumb_rt_rotation_rom"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb rt rotation pain",'e') ?> </td> <td><label><input type="checkbox" name="lumb_rt_rotation_pain" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Lumb rt rotation response",'e') ?> </td> <td><input type="text" name="lumb_rt_rotation_response"  /></td></tr>

</table>
<br>
<h3> <? xl("Orthopedic Neurological",'e') ?> </h3>

<table>

<tr><td> <? xl("Cervical test",'e') ?> </td> <td><label><input type="checkbox" name="cervical_test" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Lt cervical comp",'e') ?> </td> <td><label><input type="checkbox" name="lt_cervical_comp[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="lt_cervical_comp[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Lt cervical comp response",'e') ?> </td> <td><input type="text" name="lt_cervical_comp_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Rt cervical comp",'e') ?> </td> <td><label><input type="checkbox" name="rt_cervical_comp[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="rt_cervical_comp[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Rt cervical comp response",'e') ?> </td> <td><input type="text" name="rt_cervical_comp_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Soto hall",'e') ?> </td> <td><label><input type="checkbox" name="soto_hall[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="soto_hall[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Soto hall response",'e') ?> </td> <td><input type="text" name="soto_hall_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lt shoulder depression",'e') ?> </td> <td><label><input type="checkbox" name="lt_shoulder_depression[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="lt_shoulder_depression[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Lt shoulder depression response",'e') ?> </td> <td><input type="text" name="lt_shoulder_depression_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Rt shoulder depression",'e') ?> </td> <td><label><input type="checkbox" name="rt_shoulder_depression[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="rt_shoulder_depression[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Rt shoulder depression response",'e') ?> </td> <td><input type="text" name="rt_shoulder_depression_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Ditraction test",'e') ?> </td> <td><label><input type="checkbox" name="ditraction_test[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="ditraction_test[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Ditraction test response",'e') ?> </td> <td><input type="text" name="ditraction_test_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Extremity other",'e') ?> </td> <td><label><input type="checkbox" name="extremity_other[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="extremity_other[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Extremity other response",'e') ?> </td> <td><input type="text" name="extremity_other_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lumbar test",'e') ?> </td> <td><label><input type="checkbox" name="lumbar_test" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Left slr",'e') ?> </td> <td><label><input type="checkbox" name="left_slr[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="left_slr[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Left slr response",'e') ?> </td> <td><input type="text" name="left_slr_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Right slr",'e') ?> </td> <td><label><input type="checkbox" name="right_slr[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="right_slr[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Right slr response",'e') ?> </td> <td><input type="text" name="right_slr_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lt braggards",'e') ?> </td> <td><label><input type="checkbox" name="lt_braggards[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="lt_braggards[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Lt braggards response",'e') ?> </td> <td><input type="text" name="lt_braggards_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Rt braggards",'e') ?> </td> <td><label><input type="checkbox" name="rt_braggards[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="rt_braggards[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Rt braggards response",'e') ?> </td> <td><input type="text" name="rt_braggards_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lt patricks faber",'e') ?> </td> <td><label><input type="checkbox" name="lt_patricks_faber[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="lt_patricks_faber[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Lt patricks faber response",'e') ?> </td> <td><input type="text" name="lt_patricks_faber_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Rt patricks faber",'e') ?> </td> <td><label><input type="checkbox" name="rt_patricks_faber[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="rt_patricks_faber[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Rt patricks faber response",'e') ?> </td> <td><input type="text" name="rt_patricks_faber_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lt elys",'e') ?> </td> <td><label><input type="checkbox" name="lt_elys[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="lt_elys[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Lt elys response",'e') ?> </td> <td><input type="text" name="lt_elys_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Rt elys",'e') ?> </td> <td><label><input type="checkbox" name="rt_elys[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="rt_elys[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Rt elys response",'e') ?> </td> <td><input type="text" name="rt_elys_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Milgrams",'e') ?> </td> <td><label><input type="checkbox" name="milgrams[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="milgrams[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Milgrams response",'e') ?> </td> <td><input type="text" name="milgrams_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Lt yeomans",'e') ?> </td> <td><label><input type="checkbox" name="lt_yeomans[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="lt_yeomans[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Lt yeomans response",'e') ?> </td> <td><input type="text" name="lt_yeomans_response"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Rt yeomans",'e') ?> </td> <td><label><input type="checkbox" name="rt_yeomans[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="rt_yeomans[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Rt yeomans response",'e') ?> </td> <td><input type="text" name="rt_yeomans_response"  /></td></tr>

</table>
<br>
<h3> <? xl("Palpatory Tenderness",'e') ?> </h3>

<table>

<tr><td> <? xl("Oc c1",'e') ?> </td> <td><label><input type="checkbox" name="oc_c1[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="oc_c1[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("C1 c2",'e') ?> </td> <td><label><input type="checkbox" name="c1_c2[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="c1_c2[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("C2 c3",'e') ?> </td> <td><label><input type="checkbox" name="c2_c3[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="c2_c3[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("C3 c4",'e') ?> </td> <td><label><input type="checkbox" name="c3_c4[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="c3_c4[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("C4 c5",'e') ?> </td> <td><label><input type="checkbox" name="c4_c5[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="c4_c5[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("C5 c6",'e') ?> </td> <td><label><input type="checkbox" name="c5_c6[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="c5_c6[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("C6 c7",'e') ?> </td> <td><label><input type="checkbox" name="c6_c7[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="c6_c7[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("C7 t1",'e') ?> </td> <td><label><input type="checkbox" name="c7_t1[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="c7_t1[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("T1 t2",'e') ?> </td> <td><label><input type="checkbox" name="t1_t2[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="t1_t2[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("T2 t3",'e') ?> </td> <td><label><input type="checkbox" name="t2_t3[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="t2_t3[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("T3 t4",'e') ?> </td> <td><label><input type="checkbox" name="t3_t4[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="t3_t4[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("T4 t5",'e') ?> </td> <td><label><input type="checkbox" name="t4_t5[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="t4_t5[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("T5 t6",'e') ?> </td> <td><label><input type="checkbox" name="t5_t6[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="t5_t6[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("T6 t7",'e') ?> </td> <td><label><input type="checkbox" name="t6_t7[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="t6_t7[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("T7 t8",'e') ?> </td> <td><label><input type="checkbox" name="t7_t8[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="t7_t8[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("T8 t9",'e') ?> </td> <td><label><input type="checkbox" name="t8_t9[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="t8_t9[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("T9 t10",'e') ?> </td> <td><label><input type="checkbox" name="t9_t10[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="t9_t10[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("T10 t11",'e') ?> </td> <td><label><input type="checkbox" name="t10_t11[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="t10_t11[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("T11 t12",'e') ?> </td> <td><label><input type="checkbox" name="t11_t12[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="t11_t12[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("T12 l1",'e') ?> </td> <td><label><input type="checkbox" name="t12_l1[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="t12_l1[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("L1 l2",'e') ?> </td> <td><label><input type="checkbox" name="l1_l2[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="l1_l2[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("L2 l3",'e') ?> </td> <td><label><input type="checkbox" name="l2_l3[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="l2_l3[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("L3 l4",'e') ?> </td> <td><label><input type="checkbox" name="l3_l4[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="l3_l4[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("L4 l5",'e') ?> </td> <td><label><input type="checkbox" name="l4_l5[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="l4_l5[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("L5 si",'e') ?> </td> <td><label><input type="checkbox" name="l5_si[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="l5_si[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Si",'e') ?> </td> <td><label><input type="checkbox" name="si[]" value="Left" /> <? xl("Left",'e') ?> </label> <label><input type="checkbox" name="si[]" value="Right" /> <? xl("Right",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Reflexes",'e') ?> </td> <td><label><input type="checkbox" name="reflexes" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Bicep left",'e') ?> </td> <td><select name="bicep_left" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Bicep right",'e') ?> </td> <td><select name="bicep_right" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Brachio left",'e') ?> </td> <td><select name="brachio_left" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Brachio right",'e') ?> </td> <td><select name="brachio_right" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Tricep left",'e') ?> </td> <td><select name="tricep_left" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Tricep right",'e') ?> </td> <td><select name="tricep_right" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Patellar left",'e') ?> </td> <td><select name="patellar_left" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Patellar right",'e') ?> </td> <td><select name="patellar_right" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Achilles left",'e') ?> </td> <td><select name="achilles_left" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Achilles right",'e') ?> </td> <td><select name="achilles_right" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Vbi",'e') ?> </td> <td><label><input type="checkbox" name="vbi[]" value="Negative" /> <? xl("Negative",'e') ?> </label> <label><input type="checkbox" name="vbi[]" value="Positive" /> <? xl("Positive",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Neurology",'e') ?> </td> <td><label><input type="checkbox" name="neurology" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("C5 motor",'e') ?> </td> <td><select name="c5_motor" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("C5 sensation",'e') ?> </td> <td><select name="c5_sensation" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("C6 motor",'e') ?> </td> <td><select name="c6_motor" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("C6 sensation",'e') ?> </td> <td><select name="c6_sensation" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("C7 motor",'e') ?> </td> <td><select name="c7_motor" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("C7 sensation",'e') ?> </td> <td><select name="c7_sensation" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("C8 motor",'e') ?> </td> <td><select name="c8_motor" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("C8 sensation",'e') ?> </td> <td><select name="c8_sensation" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("T1 motor",'e') ?> </td> <td><select name="t1_motor" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("T1 sensation",'e') ?> </td> <td><select name="t1_sensation" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("L4 motor",'e') ?> </td> <td><select name="l4_motor" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("L4 sensation",'e') ?> </td> <td><select name="l4_sensation" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("L5 motor",'e') ?> </td> <td><select name="l5_motor" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("L5 sensation",'e') ?> </td> <td><select name="l5_sensation" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("S1 motor",'e') ?> </td> <td><select name="s1_motor" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("S1 sensation",'e') ?> </td> <td><select name="s1_sensation" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Coordination sensation",'e') ?> </td> <td><select name="coordination_sensation" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Muscle testing",'e') ?> </td> <td><label><input type="checkbox" name="muscle_testing" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv flex strgth",'e') ?> </td> <td><select name="cerv_flex_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv flex tone",'e') ?> </td> <td><select name="cerv_flex_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv flex spasm",'e') ?> </td> <td><label><input type="checkbox" name="cerv_flex_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Cerv flex pain",'e') ?> </td> <td><select name="cerv_flex_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Scm strgth",'e') ?> </td> <td><select name="scm_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Scm tone",'e') ?> </td> <td><select name="scm_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Scm spasm",'e') ?> </td> <td><label><input type="checkbox" name="scm_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Scm pain",'e') ?> </td> <td><select name="scm_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Upper trap strgth",'e') ?> </td> <td><select name="upper_trap_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Upper trap tone",'e') ?> </td> <td><select name="upper_trap_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Upper trap spasm",'e') ?> </td> <td><label><input type="checkbox" name="upper_trap_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Upper trap pain",'e') ?> </td> <td><select name="upper_trap_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Mid trap strgth",'e') ?> </td> <td><select name="mid_trap_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Mid trap tone",'e') ?> </td> <td><select name="mid_trap_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Mid trap spasm",'e') ?> </td> <td><label><input type="checkbox" name="mid_trap_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Mid trap pain",'e') ?> </td> <td><select name="mid_trap_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Lower trap strgth",'e') ?> </td> <td><select name="lower_trap_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Lower trap tone",'e') ?> </td> <td><select name="lower_trap_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Lower trap spasm",'e') ?> </td> <td><label><input type="checkbox" name="lower_trap_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Lower trap pain",'e') ?> </td> <td><select name="lower_trap_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Scalenes strgth",'e') ?> </td> <td><select name="scalenes_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Scalenes tone",'e') ?> </td> <td><select name="scalenes_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Scalenes spasm",'e') ?> </td> <td><label><input type="checkbox" name="scalenes_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Scalenes pain",'e') ?> </td> <td><select name="scalenes_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Subscap strgth",'e') ?> </td> <td><select name="subscap_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Subscap tone",'e') ?> </td> <td><select name="subscap_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Subscap spasm",'e') ?> </td> <td><label><input type="checkbox" name="subscap_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Subscap pain",'e') ?> </td> <td><select name="subscap_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Supraspin strgth",'e') ?> </td> <td><select name="supraspin_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Supraspin tone",'e') ?> </td> <td><select name="supraspin_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Supraspin spasm",'e') ?> </td> <td><label><input type="checkbox" name="supraspin_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Supraspin pain",'e') ?> </td> <td><select name="supraspin_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Teres strgth",'e') ?> </td> <td><select name="teres_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Teres tone",'e') ?> </td> <td><select name="teres_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Teres spasm",'e') ?> </td> <td><label><input type="checkbox" name="teres_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Teres pain",'e') ?> </td> <td><select name="teres_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Quadriceps strgth",'e') ?> </td> <td><select name="quadriceps_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Quadriceps tone",'e') ?> </td> <td><select name="quadriceps_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Quadriceps spasm",'e') ?> </td> <td><label><input type="checkbox" name="quadriceps_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Quadriceps pain",'e') ?> </td> <td><select name="quadriceps_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Psoas strgth",'e') ?> </td> <td><select name="psoas_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Psoas tone",'e') ?> </td> <td><select name="psoas_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Psoas spasm",'e') ?> </td> <td><label><input type="checkbox" name="psoas_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Psoas pain",'e') ?> </td> <td><select name="psoas_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Tfl strgth",'e') ?> </td> <td><select name="tfl_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Tfl tone",'e') ?> </td> <td><select name="tfl_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Tfl spasm",'e') ?> </td> <td><label><input type="checkbox" name="tfl_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Tfl pain",'e') ?> </td> <td><select name="tfl_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Piriformis strgth",'e') ?> </td> <td><select name="piriformis_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Piriformis tone",'e') ?> </td> <td><select name="piriformis_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Piriformis spasm",'e') ?> </td> <td><label><input type="checkbox" name="piriformis_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Piriformis pain",'e') ?> </td> <td><select name="piriformis_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Gluteus strgth",'e') ?> </td> <td><select name="gluteus_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Gluteus tone",'e') ?> </td> <td><select name="gluteus_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Gluteus spasm",'e') ?> </td> <td><label><input type="checkbox" name="gluteus_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Gluteus pain",'e') ?> </td> <td><select name="gluteus_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Hamstring strgth",'e') ?> </td> <td><select name="hamstring_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Hamstring tone",'e') ?> </td> <td><select name="hamstring_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Hamstring spasm",'e') ?> </td> <td><label><input type="checkbox" name="hamstring_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Hamstring pain",'e') ?> </td> <td><select name="hamstring_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Quad lum strgth",'e') ?> </td> <td><select name="quad_lum_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Quad lum tone",'e') ?> </td> <td><select name="quad_lum_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Quad lum spasm",'e') ?> </td> <td><label><input type="checkbox" name="quad_lum_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Quad lum pain",'e') ?> </td> <td><select name="quad_lum_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Lat dorsi strgth",'e') ?> </td> <td><select name="lat_dorsi_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Lat dorsi tone",'e') ?> </td> <td><select name="lat_dorsi_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Lat dorsi spasm",'e') ?> </td> <td><label><input type="checkbox" name="lat_dorsi_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Lat dorsi pain",'e') ?> </td> <td><select name="lat_dorsi_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Infrspinatus strgth",'e') ?> </td> <td><select name="infrspinatus_strgth" >
<option value=""></option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Infrspinatus tone",'e') ?> </td> <td><select name="infrspinatus_tone" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Infrspinatus spasm",'e') ?> </td> <td><label><input type="checkbox" name="infrspinatus_spasm" value="yes" /></label></td></tr>

</table>

<table>

<tr><td> <? xl("Infrspinatus pain",'e') ?> </td> <td><select name="infrspinatus_pain" >
<option value=""></option>
<option value="Increase"> <? xl("Increase",'e') ?> </option>
<option value="Decrease"> <? xl("Decrease",'e') ?> </option>
<option value="Within Normal"> <? xl("Within Normal",'e') ?> </option>
</select></td></tr>

</table>

<table>

<tr><td> <? xl("Diagnosis",'e') ?> </td> <td><label><input type="checkbox" name="diagnosis[]" value="Cervical" /> <? xl("Cervical",'e') ?> </label> <label><input type="checkbox" name="diagnosis[]" value="Thoracic" /> <? xl("Thoracic",'e') ?> </label> <label><input type="checkbox" name="diagnosis[]" value="Lumbar" /> <? xl("Lumbar",'e') ?> </label> <label><input type="checkbox" name="diagnosis[]" value="SI" /> <? xl("SI",'e') ?> </label> <label><input type="checkbox" name="diagnosis[]" value="Dysfunction" /> <? xl("Dysfunction",'e') ?> </label> <label><input type="checkbox" name="diagnosis[]" value="Strain Ligamentous Injury" /> <? xl("Strain Ligamentous Injury",'e') ?> </label> <label><input type="checkbox" name="diagnosis[]" value="Muscle Spasms" /> <? xl("Muscle Spasms",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Diagnosis other",'e') ?> </td> <td><input type="text" name="diagnosis_other"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Treatment plan",'e') ?> </td> <td><label><input type="checkbox" name="treatment_plan[]" value="Manual Manipulation" /> <? xl("Manual Manipulation",'e') ?> </label> <label><input type="checkbox" name="treatment_plan[]" value="Manual Therapy Massage" /> <? xl("Manual Therapy Massage",'e') ?> </label> <label><input type="checkbox" name="treatment_plan[]" value="Exercise Prescription" /> <? xl("Exercise Prescription",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Treatment plan other",'e') ?> </td> <td><input type="text" name="treatment_plan_other"  /></td></tr>

</table>

<table>

<tr><td> <? xl("Frequency",'e') ?> </td> <td><label><input type="checkbox" name="frequency[]" value="4-8 Tx" /> <? xl("4-8 Tx",'e') ?> </label> <label><input type="checkbox" name="frequency[]" value="12-15 Tx Then Re-Exam" /> <? xl("12-15 Tx Then Re-Exam",'e') ?> </label> <label><input type="checkbox" name="frequency[]" value="PRN Flare-Up" /> <? xl("PRN Flare-Up",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <? xl("Frequency other",'e') ?> </td> <td><input type="text" name="frequency_other"  /></td></tr>

</table>
<table></table><input type="submit" name="submit form" value="submit form" />
</form>
<?php
formFooter();
?>
