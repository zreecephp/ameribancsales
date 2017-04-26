<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Really Simple HTML Email Template</title>
<style>
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 1107305727 0 0 415 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 1073786111 1 0 415 0;}
@font-face
	{font-family:Verdana;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-1593833729 1073750107 16 0 415 0;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520081665 -1073717157 41 0 66047 0;}
@font-face
	{font-family:"Brush Script MT";
	panose-1:3 6 8 2 4 4 6 7 3 4;
	mso-font-charset:0;
	mso-generic-font-family:script;
	mso-font-pitch:variable;
	mso-font-signature:3 0 0 0 1 0;}
@font-face
	{font-family:"Arial Rounded MT Bold";
	panose-1:2 15 7 4 3 5 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:3 0 0 0 1 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;}
h1
	{mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"Heading 1 Char";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:7.5pt;
	margin-left:0in;
	mso-pagination:widow-orphan;
	mso-outline-level:1;
	font-size:25.5pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	color:#202020;}
h4
	{mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-qformat:yes;
	mso-style-link:"Heading 4 Char";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:7.5pt;
	margin-left:0in;
	mso-pagination:widow-orphan;
	mso-outline-level:4;
	font-size:16.5pt;
	font-family:"Arial",sans-serif;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	color:#202020;}
a:link, span.MsoHyperlink
	{mso-style-noshow:yes;
	mso-style-priority:99;
	color:blue;
	mso-themecolor:hyperlink;
	text-decoration:underline;
	text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
	{mso-style-noshow:yes;
	mso-style-priority:99;
	color:purple;
	mso-themecolor:followedhyperlink;
	text-decoration:underline;
	text-underline:single;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-link:"Balloon Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:8.0pt;
	font-family:"Tahoma",sans-serif;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;}
span.Heading1Char
	{mso-style-name:"Heading 1 Char";
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Heading 1";
	mso-ansi-font-size:25.5pt;
	mso-bidi-font-size:25.5pt;
	font-family:"Arial",sans-serif;
	mso-ascii-font-family:Arial;
	mso-hansi-font-family:Arial;
	mso-bidi-font-family:Arial;
	color:#202020;
	mso-font-kerning:18.0pt;
	font-weight:bold;}
span.Heading4Char
	{mso-style-name:"Heading 4 Char";
	mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Heading 4";
	mso-ansi-font-size:16.5pt;
	mso-bidi-font-size:16.5pt;
	font-family:"Arial",sans-serif;
	mso-ascii-font-family:Arial;
	mso-hansi-font-family:Arial;
	mso-bidi-font-family:Arial;
	color:#202020;
	font-weight:bold;}
span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Balloon Text";
	mso-ansi-font-size:8.0pt;
	mso-bidi-font-size:8.0pt;
	font-family:"Tahoma",sans-serif;
	mso-ascii-font-family:Tahoma;
	mso-hansi-font-family:Tahoma;
	mso-bidi-font-family:Tahoma;}
span.EmailStyle21
	{mso-style-type:personal-compose;
	mso-style-noshow:yes;
	mso-style-unhide:no;
	color:black;}
span.apple-converted-space
	{mso-style-name:apple-converted-space;
	mso-style-unhide:no;}
span.EmailStyle23
	{mso-style-type:personal;
	mso-style-noshow:yes;
	mso-style-unhide:no;
	color:black;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:10.0pt;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
@page WordSection1
	{size:8.5in 11.0in;
	margin:1.0in 1.0in 1.0in 1.0in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}

</style>
</head>

<body bgcolor="#FAFAFA" lang=EN-US link=blue vlink=purple style='tab-interval:
.5in'>

<div class=WordSection1>

<p class=MsoNormal style='margin-left:120.0pt;text-indent:-120.0pt;tab-stops:
120.0pt;mso-layout-grid-align:none;text-autospace:none'><b><span
style='font-family:"Calibri",sans-serif;mso-bidi-font-family:Calibri;
color:black'>Subject:<span style='mso-tab-count:1'>                          </span></span></b><span
style='font-family:"Calibri",sans-serif;mso-bidi-font-family:Calibri;
color:black'>ABN LETTER OF CONFIRMATION<o:p></o:p></span></p>


<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal align=center style='text-align:center'><a
name="_MailOriginal"><o:p>&nbsp;</o:p></a></p>

<div align=center>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=600
 style='width:6.25in;background:white;border-collapse:collapse;mso-yfti-tbllook:
 1184;mso-padding-alt:0in 0in 0in 0in' id=templateContainer>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td valign=top style='border:solid #DDDDDD 1.0pt;border-bottom:none;
  padding:0in 0in 0in 0in'>
  <div align=center>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=600
   style='width:6.25in;background:white;border-collapse:collapse;mso-yfti-tbllook:
   1184;mso-padding-alt:0in 0in 0in 0in' id=templateHeader>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
    <td style='padding:0in 0in 0in 0in'>
    <p class=MsoNormal align=center style='text-align:center'><span
    style='mso-bookmark:_MailOriginal'></span><a
    href="http://www.ameribancsales.net/"><span style='mso-bookmark:_MailOriginal'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:25.5pt;
    font-family:"Arial",sans-serif;color:#202020;mso-no-proof:yes;text-decoration:
    none;text-underline:none'><!--[if gte vml 1]><v:shapetype id="_x0000_t75"
     coordsize="21600,21600" o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe"
     filled="f" stroked="f">
     <v:stroke joinstyle="miter"/>
     <v:formulas>
      <v:f eqn="if lineDrawn pixelLineWidth 0"/>
      <v:f eqn="sum @0 1 0"/>
      <v:f eqn="sum 0 0 @1"/>
      <v:f eqn="prod @2 1 2"/>
      <v:f eqn="prod @3 21600 pixelWidth"/>
      <v:f eqn="prod @3 21600 pixelHeight"/>
      <v:f eqn="sum @0 0 1"/>
      <v:f eqn="prod @6 1 2"/>
      <v:f eqn="prod @7 21600 pixelWidth"/>
      <v:f eqn="sum @8 21600 0"/>
      <v:f eqn="prod @7 21600 pixelHeight"/>
      <v:f eqn="sum @10 21600 0"/>
     </v:formulas>
     <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
     <o:lock v:ext="edit" aspectratio="t"/>
    </v:shapetype><v:shape id="Picture_x0020_5" o:spid="_x0000_i1036" type="#_x0000_t75"
     alt="cid:image001.jpg@01CCBBFD.D3A88B20"
     href="http://www.ameribancsales.net/" style='width:615pt;height:108pt;
     visibility:visible;mso-wrap-style:square' o:button="t">
     <v:imagedata src="ABN%20LETTER%20OF%20CONFIRMATION_files/image001.jpg"
      o:title="image001.jpg@01CCBBFD"/>
    </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
    border=0 width=820 height=144
    src="<?php echo $message->embed('assets/img/email/image001.jpg'); ?>"
    alt="cid:image001.jpg@01CCBBFD.D3A88B20" v:shapes="Picture_x0020_5"></span><![endif]></span></b></span><span
    style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
    _MailOriginal'><b><span style='font-size:25.5pt;font-family:"Arial",sans-serif;
    color:#202020'><o:p></o:p></span></b></span></p>
    </td>
    <span style='mso-bookmark:_MailOriginal'></span>
   </tr>
  </table>
  </div>
  <span style='mso-bookmark:_MailOriginal'></span></td>
  <span style='mso-bookmark:_MailOriginal'></span>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td valign=top style='border-top:none;border-left:solid #DDDDDD 1.0pt;
  border-bottom:none;border-right:solid #DDDDDD 1.0pt;padding:0in 0in 0in 0in'>
  <div align=center>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=600
   style='width:6.25in;border-collapse:collapse;mso-yfti-tbllook:1184;
   mso-padding-alt:0in 0in 0in 0in' id=templateBody>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
    <td valign=top style='padding:0in 0in 0in 0in'>
    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
     style='border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:
     0in 0in 0in 0in'>
     <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
      <td valign=top style='background:white;padding:0in 0in 0in 0in'>
      <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
       width=608 style='width:456.2pt;border-collapse:collapse;mso-yfti-tbllook:
       1184;mso-padding-alt:0in 0in 0in 0in'>
       <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
        height:256.35pt'>
        <td width="100%" valign=top style='width:100.0%;padding:15.0pt 15.0pt 15.0pt 15.0pt;
        height:256.35pt'>
        <p class=MsoNormal><span style='mso-bookmark:_MailOriginal'><span
        style='font-family:"Arial",sans-serif'>Hi <span style='background:yellow;
        mso-highlight:yellow'>{{$name}}</span> - We are all looking forward to
        working with you.<o:p></o:p></span></span></p>
        <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
        auto'><span style='mso-bookmark:_MailOriginal'><span style='font-family:
        "Arial",sans-serif'>&nbsp;&nbsp;&nbsp; Please fill out the attached <b>confirmation</b>
        form and fax it back to me at </span></span><span style='mso-bookmark:
        _MailOriginal'><strong><span style='font-size:14.0pt;color:red'>888-538-4255</span></strong></span><span
        style='mso-bookmark:_MailOriginal'><span style='font-family:"Arial",sans-serif'>
        as soon as possible so that I can confirm your position with our
        company, secure your leads for your territory and start preparing your
        training material for training. This should be filled out and faxed
        back A.S.A.P. so we can get started on building your territory and
        getting you prepared for training.&nbsp; Once you return fax (or scan
        and return e-mail) this form, you will be assigned a user ID and
        password for AmeriBanc University and will start your preparation for
        this independent contractor position.&nbsp; You will notice the
        following schedule as you are in this training phase;<o:p></o:p></span></span></p>
        <p class=MsoListParagraph style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
        auto;text-indent:-.25in;mso-list:l0 level1 lfo2'><span
        style='mso-bookmark:_MailOriginal'><![if !supportLists]><b><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif;mso-fareast-font-family:
        Calibri;mso-bidi-font-family:Calibri'><span style='mso-list:Ignore'>1)<span
        style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><b><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif'>Return this
        attached form ASAP<span style='color:#1F497D'> </span>via fax or
        scanned e-mail.<o:p></o:p></span></b></span></p>
        <p class=MsoListParagraph style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
        auto;text-indent:-.25in;mso-list:l0 level1 lfo2'><span
        style='mso-bookmark:_MailOriginal'><![if !supportLists]><b><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif;mso-fareast-font-family:
        Calibri;mso-bidi-font-family:Calibri'><span style='mso-list:Ignore'>2)<span
        style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><b><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif'>You will
        receive an e-mail Welcoming to AmeriBanc University, assigning your
        User ID and Password so follow through the instructions.<o:p></o:p></span></b></span></p>
        <p class=MsoListParagraph style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
        auto;text-indent:-.25in;mso-list:l0 level1 lfo2'><span
        style='mso-bookmark:_MailOriginal'><![if !supportLists]><b><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif;mso-fareast-font-family:
        Calibri;mso-bidi-font-family:Calibri'><span style='mso-list:Ignore'>3)<span
        style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><b><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif'>Attached to
        that e-mail will be you Independent Merchant Consultant
        Agreement.&nbsp; Please complete and return that within 48 hours.<o:p></o:p></span></b></span></p>
        <p class=MsoListParagraph style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
        auto;text-indent:-.25in;mso-list:l0 level1 lfo2'><span
        style='mso-bookmark:_MailOriginal'><![if !supportLists]><b><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif;mso-fareast-font-family:
        Calibri;mso-bidi-font-family:Calibri'><span style='mso-list:Ignore'>4)<span
        style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><b><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif'>Completing
        AmeriBanc University in a timely manner will qualify you for an
        additional $100 Bonus!<o:p></o:p></span></b></span></p>
        <p class=MsoListParagraph style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
        auto;text-indent:-.25in;mso-list:l0 level1 lfo2'><span
        style='mso-bookmark:_MailOriginal'><![if !supportLists]><b><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif;mso-fareast-font-family:
        Calibri;mso-bidi-font-family:Calibri'><span style='mso-list:Ignore'>5)<span
        style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><b><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif'>The Day
        before the Webinar<span style='color:#1F497D'>(Monday) - </span>You
        will receive an invitation to a conference call the day before to
        assist in your preparation, please be present and have any relevant
        questions you need answered.<o:p></o:p></span></b></span></p>
        <p class=MsoListParagraph style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
        auto;text-indent:-.25in;mso-list:l0 level1 lfo2'><span
        style='mso-bookmark:_MailOriginal'><![if !supportLists]><b><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif;mso-fareast-font-family:
        Calibri;mso-bidi-font-family:Calibri'><span style='mso-list:Ignore'>6)<span
        style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><b><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif'>Webinar Day<span
        style='color:#1F497D'> (Tuesday)</span> – be logged in on time so you
        can explore the site and be comfortable in the classroom as
        participation and comments are encouraged.<o:p></o:p></span></b></span></p>
        <p class=MsoListParagraph style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
        auto;text-indent:-.25in;mso-list:l0 level1 lfo2'><span
        style='mso-bookmark:_MailOriginal'><![if !supportLists]><b><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif;mso-fareast-font-family:
        Calibri;mso-bidi-font-family:Calibri'><span style='mso-list:Ignore'>7)<span
        style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><b><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif'>You will be
        assigned to a Sales Support Manager for continued training<o:p></o:p></span></b></span></p>
        <p class=MsoListParagraph style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
        auto;text-indent:-.25in;mso-list:l0 level1 lfo2'><span
        style='mso-bookmark:_MailOriginal'><![if !supportLists]><b><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif;mso-fareast-font-family:
        Calibri;mso-bidi-font-family:Calibri'><span style='mso-list:Ignore'>8)<span
        style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><b><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif'>The Day After
        the Webinar<span style='color:#1F497D'> (Wednesday)</span> - You will
        be invited to a conference call as this is your 1<sup>st</sup> day with
        appointments so we can help prepare you more for your success.<o:p></o:p></span></b></span></p>
        <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
        auto'><span style='mso-bookmark:_MailOriginal'><span style='font-family:
        "Arial",sans-serif'>We will be in contact with you very shortly. If you
        have any other questions, please feel free to call me or e-mail myself
        or your recruiter. <o:p></o:p></span></span></p>
        <p class=MsoNormal><span style='mso-bookmark:_MailOriginal'><span
        style='font-family:"Arial",sans-serif'>Thank You and Welcome to the
        AmeriBanc Family,<o:p></o:p></span></span></p>
        <p class=MsoNormal><span style='mso-bookmark:_MailOriginal'><span
        style='font-size:11.0pt;font-family:"Calibri",sans-serif;color:#1F497D'>&nbsp;&nbsp;</span><o:p></o:p></span></p>
        <p class=MsoNormal><span style='mso-bookmark:_MailOriginal'><span
        style='font-size:14.0pt;font-family:"Arial Rounded MT Bold",sans-serif;
        color:#1F497D;background:yellow;mso-highlight:yellow'>{{$recruiter}}</span></span><span
        style='mso-bookmark:_MailOriginal'><span style='font-size:24.0pt;
        font-family:"Brush Script MT"'><o:p></o:p></span></span></p>
        <p class=MsoNormal><span style='mso-bookmark:_MailOriginal'><span
        style='font-size:10.0pt;font-family:"Arial Rounded MT Bold",sans-serif;
        color:#1F497D'>&nbsp;&nbsp; National Recruiter<o:p></o:p></span></span></p>
        <p class=MsoNormal><span style='mso-bookmark:_MailOriginal'><span
        style='font-size:10.0pt;font-family:"Arial Rounded MT Bold",sans-serif;
        color:#1F497D'>&nbsp;&nbsp; Phone: <span style='background:yellow;
        mso-highlight:yellow'>{{$recruiter_phone}}&nbsp;&nbsp; {{$recruiter_extension}}</span></span></span><span
        style='mso-bookmark:_MailOriginal'><span style='font-size:10.0pt;
        font-family:"Arial Rounded MT Bold",sans-serif'><o:p></o:p></span></span></p>
        <p class=MsoNormal><span style='mso-bookmark:_MailOriginal'><span
        style='font-size:10.0pt;font-family:"Arial Rounded MT Bold",sans-serif;
        color:#1F497D'>&nbsp;&nbsp; Fax: 888-538-4255<o:p></o:p></span></span></p>
        <p class=MsoNormal><span style='mso-bookmark:_MailOriginal'></span><a
        href="http://www.ameribancsales.net/"><span style='mso-bookmark:_MailOriginal'><span
        style='font-size:10.0pt;font-family:"Arial Rounded MT Bold",sans-serif;
        color:#1F497D;mso-no-proof:yes;text-decoration:none;text-underline:
        none'><!--[if gte vml 1]><v:shape id="Picture_x0020_6" o:spid="_x0000_i1035"
         type="#_x0000_t75" alt="cid:image002.jpg@01C9D478.3C884F60"
         href="http://www.ameribancsales.net/" style='width:94.5pt;height:30pt;
         visibility:visible;mso-wrap-style:square' o:button="t">
         <v:imagedata src="ABN%20LETTER%20OF%20CONFIRMATION_files/image002.jpg"
          o:title="image002.jpg@01C9D478"/>
        </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
        border=0 width=126 height=40
        src="<?php echo $message->embed('assets/img/email/image002.jpg'); ?>"
        alt="cid:image002.jpg@01C9D478.3C884F60" v:shapes="Picture_x0020_6"></span><![endif]></span></span><span
        style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
        _MailOriginal'><o:p></o:p></span></p>
        </td>
        <span style='mso-bookmark:_MailOriginal'></span>
       </tr>
      </table>
      <span style='mso-bookmark:_MailOriginal'></span></td>
      <span style='mso-bookmark:_MailOriginal'></span>
     </tr>
    </table>
    <span style='mso-bookmark:_MailOriginal'></span></td>
    <span style='mso-bookmark:_MailOriginal'></span>
    <td width=200 valign=top style='width:150.0pt;background:white;padding:
    0in 0in 0in 0in' id=templateSidebar>
    <p class=MsoNormal><span style='mso-bookmark:_MailOriginal'><span
    style='color:black'><o:p>&nbsp;</o:p></span></span></p>
    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
     style='border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:
     0in 0in 0in 0in'>
     <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
      <td width=40 style='width:29.85pt;padding:0in 0in 0in 0in'>
      <p class=MsoNormal align=right style='text-align:right'><span
      style='mso-bookmark:_MailOriginal'><span style='mso-no-proof:yes'><!--[if gte vml 1]><v:shape
       id="Picture_x0020_21" o:spid="_x0000_i1034" type="#_x0000_t75" alt="facebook.png"
       style='width:15pt;height:14.25pt;visibility:visible;mso-wrap-style:square'>
       <v:imagedata src="ABN%20LETTER%20OF%20CONFIRMATION_files/image003.jpg"
        o:title="facebook"/>
      </v:shape><![endif]--><![if !vml]><img border=0 width=20 height=19
      src="<?php echo $message->embed('assets/img/email/image003.jpg'); ?>"
      alt=facebook.png v:shapes="Picture_x0020_21"><![endif]></span><o:p></o:p></span></p>
      </td>
      <span style='mso-bookmark:_MailOriginal'></span>
      <td valign=top style='padding:0in 0in 0in 0in'>
      <p class=MsoNormal style='line-height:150%'><span style='mso-bookmark:
      _MailOriginal'></span><a
      href="http://www.facebook.com/pages/AmeriBanc-National/229862127028343?sk=app_190322544333196"><span
      style='mso-bookmark:_MailOriginal'><span style='font-size:9.0pt;
      line-height:150%;font-family:"Arial",sans-serif'>Like us on FaceBook</span></span><span
      style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
      _MailOriginal'><span style='font-size:9.0pt;line-height:150%;font-family:
      "Arial",sans-serif;color:#505050'><o:p></o:p></span></span></p>
      </td>
      <span style='mso-bookmark:_MailOriginal'></span>
     </tr>
     <tr style='mso-yfti-irow:1'>
      <td width=40 style='width:29.85pt;padding:0in 0in 0in 0in'>
      <p class=MsoNormal align=right style='text-align:right'><span
      style='mso-bookmark:_MailOriginal'><span style='mso-no-proof:yes'><!--[if gte vml 1]><v:shape
       id="Picture_x0020_19" o:spid="_x0000_i1033" type="#_x0000_t75" alt="twitter.png"
       style='width:14.25pt;height:14.25pt;visibility:visible;mso-wrap-style:square'>
       <v:imagedata src="ABN%20LETTER%20OF%20CONFIRMATION_files/image004.png"
        o:title="twitter"/>
      </v:shape><![endif]--><![if !vml]><img border=0 width=19 height=19
      src="<?php echo $message->embed('assets/img/email/image004.jpg'); ?>"
      alt=twitter.png v:shapes="Picture_x0020_19"><![endif]></span><o:p></o:p></span></p>
      </td>
      <span style='mso-bookmark:_MailOriginal'></span>
      <td valign=top style='padding:0in 0in 0in 0in'>
      <p class=MsoNormal style='line-height:150%'><span style='mso-bookmark:
      _MailOriginal'></span><a href="https://twitter.com/AmeriBanc"><span
      style='mso-bookmark:_MailOriginal'><span style='font-size:9.0pt;
      line-height:150%;font-family:"Arial",sans-serif'>Follow us on Twitter</span></span><span
      style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
      _MailOriginal'><span style='font-size:9.0pt;line-height:150%;font-family:
      "Arial",sans-serif;color:#505050'><o:p></o:p></span></span></p>
      </td>
      <span style='mso-bookmark:_MailOriginal'></span>
     </tr>
     <tr style='mso-yfti-irow:2'>
      <td width=40 style='width:29.85pt;padding:0in 0in 0in 0in'>
      <p class=MsoNormal align=right style='text-align:right'><span
      style='mso-bookmark:_MailOriginal'><span style='mso-no-proof:yes'><!--[if gte vml 1]><v:shape
       id="Picture_x0020_20" o:spid="_x0000_i1032" type="#_x0000_t75" alt="linkedin.png"
       style='width:14.25pt;height:14.25pt;visibility:visible;mso-wrap-style:square'>
       <v:imagedata src="ABN%20LETTER%20OF%20CONFIRMATION_files/image005.png"
        o:title="linkedin"/>
      </v:shape><![endif]--><![if !vml]><img border=0 width=19 height=19
      src="<?php echo $message->embed('assets/img/email/image005.png'); ?>"
      alt=linkedin.png v:shapes="Picture_x0020_20"><![endif]></span><o:p></o:p></span></p>
      </td>
      <span style='mso-bookmark:_MailOriginal'></span>
      <td valign=top style='padding:0in 0in 0in 0in'>
      <p class=MsoNormal style='line-height:150%'><span style='mso-bookmark:
      _MailOriginal'></span><a href="http://www.linkedin.com/company/2706829"><span
      style='mso-bookmark:_MailOriginal'><span style='font-size:9.0pt;
      line-height:150%;font-family:"Arial",sans-serif'>Add us on Linkedin</span></span><span
      style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
      _MailOriginal'><span style='font-size:9.0pt;line-height:150%;font-family:
      "Arial",sans-serif;color:#505050'><o:p></o:p></span></span></p>
      </td>
      <span style='mso-bookmark:_MailOriginal'></span>
     </tr>
     <tr style='mso-yfti-irow:3'>
      <td width=40 style='width:29.85pt;padding:0in 0in 0in 0in'>
      <p class=MsoNormal align=right style='text-align:right'><span
      style='mso-bookmark:_MailOriginal'><span style='mso-no-proof:yes'><!--[if gte vml 1]><v:shape
       id="Picture_x0020_23" o:spid="_x0000_i1031" type="#_x0000_t75" alt="google.png"
       style='width:14.25pt;height:14.25pt;visibility:visible;mso-wrap-style:square'>
       <v:imagedata src="ABN%20LETTER%20OF%20CONFIRMATION_files/image006.png"
        o:title="google"/>
      </v:shape><![endif]--><![if !vml]><img border=0 width=19 height=19
      src="<?php echo $message->embed('assets/img/email/image006.png'); ?>" alt=google.png
      v:shapes="Picture_x0020_23"><![endif]></span><o:p></o:p></span></p>
      </td>
      <span style='mso-bookmark:_MailOriginal'></span>
      <td valign=top style='padding:0in 0in 0in 0in'>
      <p class=MsoNormal style='line-height:150%'><span style='mso-bookmark:
      _MailOriginal'></span><a
      href="https://plus.google.com/u/0/b/109875506897246317378/109875506897246317378/posts"><span
      style='mso-bookmark:_MailOriginal'><span style='font-size:9.0pt;
      line-height:150%;font-family:"Arial",sans-serif'>Add Us on Google+</span></span><span
      style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
      _MailOriginal'><span style='font-size:9.0pt;line-height:150%;font-family:
      "Arial",sans-serif;color:#505050'><o:p></o:p></span></span></p>
      </td>
      <span style='mso-bookmark:_MailOriginal'></span>
     </tr>
     <tr style='mso-yfti-irow:4'>
      <td width=40 style='width:29.85pt;padding:0in 0in 0in 0in'>
      <p class=MsoNormal align=right style='text-align:right'><span
      style='mso-bookmark:_MailOriginal'><span style='mso-no-proof:yes'><!--[if gte vml 1]><v:shape
       id="Picture_x0020_25" o:spid="_x0000_i1030" type="#_x0000_t75" alt="youtube.png"
       style='width:14.25pt;height:14.25pt;visibility:visible;mso-wrap-style:square'>
       <v:imagedata src="ABN%20LETTER%20OF%20CONFIRMATION_files/image007.png"
        o:title="youtube"/>
      </v:shape><![endif]--><![if !vml]><img border=0 width=19 height=19
      src="<?php echo $message->embed('assets/img/email/image007.png'); ?>"
      alt=youtube.png v:shapes="Picture_x0020_25"><![endif]></span><o:p></o:p></span></p>
      </td>
      <span style='mso-bookmark:_MailOriginal'></span>
      <td valign=top style='padding:0in 0in 0in 0in'>
      <p class=MsoNormal style='line-height:150%'><span style='mso-bookmark:
      _MailOriginal'></span><a href="http://www.youtube.com/user/AmeriBancVideo"><span
      style='mso-bookmark:_MailOriginal'><span style='font-size:9.0pt;
      line-height:150%;font-family:"Arial",sans-serif'>Follow us on YouTube</span></span><span
      style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
      _MailOriginal'><span style='font-size:9.0pt;line-height:150%;font-family:
      "Arial",sans-serif;color:#505050'><o:p></o:p></span></span></p>
      </td>
      <span style='mso-bookmark:_MailOriginal'></span>
     </tr>
     <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes'>
      <td colspan=2 valign=top style='padding:0in 0in 0in 0in'>
      <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
       width="100%" style='width:100.0%;border-collapse:collapse;mso-yfti-tbllook:
       1184;mso-padding-alt:0in 0in 0in 0in'>
       <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
        <td valign=top style='padding:7.5pt 15.0pt 0in 15.0pt'><span
        style='mso-bookmark:_MailOriginal'></span></td>
        <span style='mso-bookmark:_MailOriginal'></span>
       </tr>
      </table>
      <p class=MsoNormal><span style='mso-bookmark:_MailOriginal'><span
      style='display:none;mso-hide:all'><o:p>&nbsp;</o:p></span></span></p>
      <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
       width="100%" style='width:100.0%;border-collapse:collapse;mso-yfti-tbllook:
       1184;mso-padding-alt:0in 0in 0in 0in'>
       <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
        height:216.3pt'>
        <td valign=top style='padding:15.0pt 15.0pt 15.0pt 15.0pt;height:216.3pt'>
        <p class=MsoNormal><span style='mso-bookmark:_MailOriginal'></span><a
        href="http://www.ameribancsales.net/services/merchant-cards"><span
        style='mso-bookmark:_MailOriginal'><span style='color:windowtext;
        mso-no-proof:yes;text-decoration:none;text-underline:none'><!--[if gte vml 1]><v:shape
         id="Picture_x0020_3" o:spid="_x0000_i1029" type="#_x0000_t75"
         href="http://www.ameribancsales.net/services/merchant-cards" style='width:111pt;
         height:105.75pt;visibility:visible;mso-wrap-style:square' o:button="t">
         <v:imagedata src="ABN%20LETTER%20OF%20CONFIRMATION_files/image008.png"
          o:title=""/>
        </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
        border=0 width=148 height=141
        src="<?php echo $message->embed('assets/img/email/image009.png'); ?>" v:shapes="Picture_x0020_3"></span><![endif]></span></span><span
        style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
        _MailOriginal'><o:p></o:p></span></p>
        <p class=MsoNormal style='line-height:150%'><span style='mso-bookmark:
        _MailOriginal'><span style='font-size:9.0pt;line-height:150%;
        font-family:"Arial",sans-serif;color:#505050'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <o:p></o:p></span></span></p>
        <p class=MsoNormal style='line-height:150%'><span style='mso-bookmark:
        _MailOriginal'><span style='font-size:9.0pt;line-height:150%;
        font-family:"Arial",sans-serif;color:#505050'><o:p>&nbsp;</o:p></span></span></p>
        <p class=MsoNormal style='line-height:150%'><span style='mso-bookmark:
        _MailOriginal'></span><a
        href="http://www.ameribancsales.net/services/apple-pay"><span
        style='mso-bookmark:_MailOriginal'><span style='font-size:9.0pt;
        line-height:150%;font-family:"Arial",sans-serif;color:#505050;
        mso-no-proof:yes;text-decoration:none;text-underline:none'><!--[if gte vml 1]><v:shape
         id="Picture_x0020_13" o:spid="_x0000_i1028" type="#_x0000_t75"
         href="http://www.ameribancsales.net/services/apple-pay" style='width:108pt;
         height:116.25pt;visibility:visible;mso-wrap-style:square' o:button="t">
         <v:imagedata src="ABN%20LETTER%20OF%20CONFIRMATION_files/image010.png"
          o:title=""/>
        </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
        border=0 width=144 height=155
        src="<?php echo $message->embed('assets/img/email/image011.png'); ?>" v:shapes="Picture_x0020_13"></span><![endif]></span></span><span
        style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
        _MailOriginal'><span style='font-size:9.0pt;line-height:150%;
        font-family:"Arial",sans-serif;color:#505050'><o:p></o:p></span></span></p>
        <p class=MsoNormal style='line-height:150%'><span style='mso-bookmark:
        _MailOriginal'><span style='font-size:9.0pt;line-height:150%;
        font-family:"Arial",sans-serif;color:#505050'><o:p>&nbsp;</o:p></span></span></p>
        <p class=MsoNormal align=center style='text-align:center;line-height:
        150%'><span style='mso-bookmark:_MailOriginal'></span><a
        href="http://www.ameribancsales.net/services/apple-pay"><span
        style='mso-bookmark:_MailOriginal'><b style='mso-bidi-font-weight:normal'><span
        style='font-size:9.0pt;line-height:150%;font-family:"Arial",sans-serif;
        color:#505050;mso-no-proof:yes;text-decoration:none;text-underline:
        none'><!--[if gte vml 1]><v:shape id="Picture_x0020_10" o:spid="_x0000_i1027"
         type="#_x0000_t75"
         href="http://www.ameribancsales.net/services/apple-pay" style='width:105.75pt;
         height:180pt;visibility:visible;mso-wrap-style:square' o:button="t">
         <v:imagedata src="ABN%20LETTER%20OF%20CONFIRMATION_files/image012.jpg"
          o:title=""/>
        </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
        border=0 width=141 height=240
        src="<?php echo $message->embed('assets/img/email/image013.jpg'); ?>" v:shapes="Picture_x0020_10"></span><![endif]></span></b></span><span
        style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
        _MailOriginal'><span style='font-size:9.0pt;line-height:150%;
        font-family:"Arial",sans-serif;color:#505050'><o:p></o:p></span></span></p>
        <p class=MsoNormal align=center style='text-align:center;line-height:
        150%'><span style='mso-bookmark:_MailOriginal'></span><a
        href="http://www.ameribancsales.net/services/apple-pay"><span
        style='mso-bookmark:_MailOriginal'><span style='font-size:9.0pt;
        line-height:150%;font-family:"Arial",sans-serif;color:#505050;
        mso-no-proof:yes;text-decoration:none;text-underline:none'><!--[if gte vml 1]><v:shape
         id="Picture_x0020_12" o:spid="_x0000_i1026" type="#_x0000_t75"
         href="http://www.ameribancsales.net/services/apple-pay" style='width:86.25pt;
         height:33.75pt;visibility:visible;mso-wrap-style:square' o:button="t">
         <v:fill o:detectmouseclick="t"/>
         <v:imagedata src="ABN%20LETTER%20OF%20CONFIRMATION_files/image014.png"
          o:title=""/>
        </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
        border=0 width=115 height=45
        src="<?php echo $message->embed('assets/img/email/image015.png'); ?>" v:shapes="Picture_x0020_12"></span><![endif]></span></span><span
        style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
        _MailOriginal'><span style='font-size:9.0pt;line-height:150%;
        font-family:"Arial",sans-serif;color:#505050'><o:p></o:p></span></span></p>
        </td>
        <span style='mso-bookmark:_MailOriginal'></span>
       </tr>
      </table>
      <span style='mso-bookmark:_MailOriginal'></span>
      <p class=MsoNormal><span style='mso-bookmark:_MailOriginal'><span
      style='font-size:11.0pt;font-family:"Calibri",sans-serif'><o:p></o:p></span></span></p>
      </td>
      <span style='mso-bookmark:_MailOriginal'></span>
     </tr>
    </table>
    <p class=MsoNormal style='line-height:150%'><span style='mso-bookmark:_MailOriginal'><b><span
    style='font-size:9.0pt;line-height:150%;font-family:"Arial",sans-serif;
    color:#505050'><o:p>&nbsp;</o:p></span></b></span></p>
    <p class=MsoNormal style='line-height:150%'><span style='mso-bookmark:_MailOriginal'><b><span
    style='font-size:9.0pt;line-height:150%;font-family:"Arial",sans-serif;
    color:#505050'>&nbsp;&nbsp;&nbsp;&nbsp; National Recruiting Division<o:p></o:p></span></b></span></p>
    <p class=MsoNormal style='line-height:150%'><span style='mso-bookmark:_MailOriginal'><span
    style='font-size:9.0pt;line-height:150%;font-family:"Arial",sans-serif;
    color:#505050'>&nbsp;&nbsp;&nbsp;&nbsp; Phone:</span></span><span
    style='mso-bookmark:_MailOriginal'><span style='font-size:9.0pt;line-height:
    150%;font-family:"Arial",sans-serif'>888.548.4255 x 5005<o:p></o:p></span></span></p>
    <p class=MsoNormal><span style='mso-bookmark:_MailOriginal'><span
    style='font-size:9.0pt;font-family:"Arial",sans-serif'>&nbsp;&nbsp;&nbsp;&nbsp;
    Fax:</span></span><span style='mso-bookmark:_MailOriginal'><span
    style='font-family:"Arial",sans-serif;color:#1F497D'> </span></span><span
    style='mso-bookmark:_MailOriginal'><span style='font-size:9.0pt;font-family:
    "Arial",sans-serif;color:black'>888-538-4255</span></span><span
    style='mso-bookmark:_MailOriginal'><span style='font-size:11.0pt;
    font-family:"Calibri",sans-serif'><o:p></o:p></span></span></p>
    </td>
    <span style='mso-bookmark:_MailOriginal'></span>
   </tr>
  </table>
  </div>
  <span style='mso-bookmark:_MailOriginal'></span></td>
  <span style='mso-bookmark:_MailOriginal'></span>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  <td valign=top style='border:solid #DDDDDD 1.0pt;border-top:none;padding:
  0in 0in 0in 0in' id=social>
  <div align=center>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=600
   style='width:6.25in;background:white;border-collapse:collapse;mso-yfti-tbllook:
   1184;mso-padding-alt:0in 0in 0in 0in' id=templateFooter>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
    <td valign=top style='padding:7.5pt 7.5pt 7.5pt 7.5pt'>
    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=663
     style='width:497.15pt;border-collapse:collapse;mso-yfti-tbllook:1184;
     mso-padding-alt:0in 0in 0in 0in'>
     <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
      <td width="100%" colspan=2 style='width:100.0%;background:#FAFAFA;
      padding:7.5pt 7.5pt 7.5pt 7.5pt'>
      <p class=MsoNormal align=center style='text-align:center;line-height:
      125%'><span style='mso-bookmark:_MailOriginal'></span><a
      href="http://www.facebook.com/pages/AmeriBanc-National/229862127028343?sk=app_190322544333196"><span
      style='mso-bookmark:_MailOriginal'><span style='font-size:9.0pt;
      line-height:125%;font-family:"Arial",sans-serif'>Like us on FaceBook</span></span><span
      style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
      _MailOriginal'><span style='font-size:9.0pt;line-height:125%;font-family:
      "Arial",sans-serif;color:#505050'> | </span></span><a
      href="https://twitter.com/AmeriBanc"><span style='mso-bookmark:_MailOriginal'><span
      style='font-size:9.0pt;line-height:125%;font-family:"Arial",sans-serif'>Follow
      us on Twitter</span></span><span style='mso-bookmark:_MailOriginal'></span></a><span
      style='mso-bookmark:_MailOriginal'><span style='font-size:9.0pt;
      line-height:125%;font-family:"Arial",sans-serif;color:#505050'> | </span></span><a
      href="http://www.linkedin.com/company/2706829"><span style='mso-bookmark:
      _MailOriginal'><span style='font-size:9.0pt;line-height:125%;font-family:
      "Arial",sans-serif'>Add us on Linkedin</span></span><span
      style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
      _MailOriginal'><span style='font-size:9.0pt;line-height:125%;font-family:
      "Arial",sans-serif;color:#505050'> | </span></span><a
      href="https://plus.google.com/u/0/b/109875506897246317378/109875506897246317378/posts"><span
      style='mso-bookmark:_MailOriginal'><span style='font-size:9.0pt;
      line-height:125%;font-family:"Arial",sans-serif'>Add Us on Google+</span></span><span
      style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
      _MailOriginal'><span style='font-size:9.0pt;line-height:125%;font-family:
      "Arial",sans-serif;color:#707070'> | </span></span><a
      href="http://www.youtube.com/user/AmeriBancVideo"><span style='mso-bookmark:
      _MailOriginal'><span style='font-size:9.0pt;line-height:125%;font-family:
      "Arial",sans-serif'>Follow us on YouTube</span></span><span
      style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
      _MailOriginal'><span style='font-size:9.0pt;line-height:125%;font-family:
      "Arial",sans-serif;color:#707070'><o:p></o:p></span></span></p>
      </td>
      <span style='mso-bookmark:_MailOriginal'></span>
     </tr>
     <tr style='mso-yfti-irow:1'>
      <td width="61%" valign=top style='width:61.76%;padding:7.5pt 7.5pt 7.5pt 7.5pt'>
      <p class=MsoNormal align=center style='text-align:center;line-height:
      125%'><span style='mso-bookmark:_MailOriginal'><em><span
      style='font-size:9.0pt;line-height:125%;font-family:"Arial",sans-serif;
      color:#707070'>Copyright © 2011 AmeriBanc National (ABN), All rights
      reserved.</span></em></span><span style='mso-bookmark:_MailOriginal'><span
      style='font-size:9.0pt;line-height:125%;font-family:"Arial",sans-serif;
      color:#707070'> <br>
      Regularly Visit </span></span><a href="http://www.ameribancsales.net/"><span
      style='mso-bookmark:_MailOriginal'><span style='font-size:9.0pt;
      line-height:125%;font-family:"Arial",sans-serif'>Http://www.AmeriBancsales.net</span></span><span
      style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
      _MailOriginal'><span style='font-size:9.0pt;line-height:125%;font-family:
      "Arial",sans-serif;color:#707070'> for continued training <br>
      <strong><span style='font-family:"Arial",sans-serif'>Our mailing address
      is:</span></strong> <br>
      </span></span><span style='mso-bookmark:_MailOriginal'><b><span
      style='font-size:9.0pt;line-height:125%;font-family:"Arial",sans-serif;
      color:gray'>2150 Manchester Road Suite 100, Wheaton IL, 60187</span></b></span><span
      style='mso-bookmark:_MailOriginal'><span style='font-size:9.0pt;
      line-height:125%;font-family:"Arial",sans-serif;color:#707070'><o:p></o:p></span></span></p>
      </td>
      <span style='mso-bookmark:_MailOriginal'></span>
      <td width="38%" valign=top style='width:38.24%;padding:7.5pt 7.5pt 7.5pt 7.5pt'
      id=monkeyRewards>
      <p class=MsoNormal align=center style='text-align:center;line-height:
      125%'><span style='mso-bookmark:_MailOriginal'></span><a
      href="http://www.bbb.org/chicago/business-reviews/credit-card-processing-service/ameribanc-national-in-bloomingdale-il-88009308"
      title="&quot;Check us out at the BBB&quot; "><span style='mso-bookmark:
      _MailOriginal'><span style='font-size:9.0pt;line-height:125%;font-family:
      "Arial",sans-serif;color:#336699;mso-no-proof:yes;text-decoration:none;
      text-underline:none'><!--[if gte vml 1]><v:shape id="Picture_x0020_2"
       o:spid="_x0000_i1025" type="#_x0000_t75" alt="cid:image011.png@01D0FD1B.F2349120"
       href="http://www.bbb.org/chicago/business-reviews/credit-card-processing-service/ameribanc-national-in-bloomingdale-il-88009308"
       title="&quot;Check us out at the BBB&quot; " style='width:156.75pt;
       height:59.25pt;visibility:visible;mso-wrap-style:square' o:button="t">
       <v:imagedata src="ABN%20LETTER%20OF%20CONFIRMATION_files/image016.png"
        o:title="image011.png@01D0FD1B"/>
      </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
      border=0 width=209 height=79
      src="<?php echo $message->embed('assets/img/email/image016.jpg'); ?>"
      alt="cid:image011.png@01D0FD1B.F2349120" v:shapes="Picture_x0020_2"></span><![endif]></span></span><span
      style='mso-bookmark:_MailOriginal'></span></a><span style='mso-bookmark:
      _MailOriginal'><span style='font-size:9.0pt;line-height:125%;font-family:
      "Arial",sans-serif;color:#707070'><o:p></o:p></span></span></p>
      </td>
      <span style='mso-bookmark:_MailOriginal'></span>
     </tr>
     <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
      <td width="100%" colspan=2 style='width:100.0%;background:white;
      padding:7.5pt 7.5pt 7.5pt 7.5pt' id=utility><span style='mso-bookmark:
      _MailOriginal'></span></td>
      <span style='mso-bookmark:_MailOriginal'></span>
     </tr>
    </table>
    <span style='mso-bookmark:_MailOriginal'></span></td>
    <span style='mso-bookmark:_MailOriginal'></span>
   </tr>
  </table>
  </div>
  <span style='mso-bookmark:_MailOriginal'></span></td>
  <span style='mso-bookmark:_MailOriginal'></span>
 </tr>
</table>

</div>

<span style='mso-bookmark:_MailOriginal'></span>

<div>

<p class=MsoNormal><a name="_MailAutoSig"><span style='font-size:6.0pt;
font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
mso-fareast-theme-font:minor-fareast;color:#929292;mso-no-proof:yes'>.</span></a><span
style='mso-bookmark:_MailAutoSig'><span style='font-size:6.0pt;font-family:
"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";mso-fareast-theme-font:
minor-fareast;mso-no-proof:yes'><o:p></o:p></span></span></p>

</div>

<span style='mso-bookmark:_MailAutoSig'></span>

<p class=MsoNormal><span style='color:black'><o:p>&nbsp;</o:p></span></p>

</div>

</body>
</html>
