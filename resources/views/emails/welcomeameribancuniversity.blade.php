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
	font-family:"Arial",serif;
	mso-fareast-font-family:"Arial";
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
	mso-fareast-font-family:"Arial";
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
	mso-fareast-font-family:"Arial";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Arial";
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



<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='mso-fareast-font-family:"Arial";display:none;mso-hide:all'><o:p>&nbsp;</o:p></span></p>

<div align=center>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=600
 style='width:6.25in;background:white;border-collapse:collapse;border:none;
 mso-border-alt:solid #DDDDDD .75pt;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in'
 id=templateContainer>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td valign=top style='border:solid #DDDDDD 1.0pt;border-bottom:none;
  mso-border-top-alt:solid #DDDDDD .75pt;mso-border-left-alt:solid #DDDDDD .75pt;
  mso-border-right-alt:solid #DDDDDD .75pt;padding:0in 0in 0in 0in'>
  <div align=center>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=600
   style='width:6.25in;background:white;border-collapse:collapse;mso-yfti-tbllook:
   1184;mso-padding-alt:0in 0in 0in 0in' id=templateHeader>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
    <td style='padding:0in 0in 0in 0in'>
    <p class=MsoNormal align=center style='text-align:center'><a
    href="http://www.ameribancsales.net/"><b style='mso-bidi-font-weight:normal'><span
    style='font-size:25.5pt;font-family:"Arial",sans-serif;mso-fareast-font-family:
    "Arial";color:#202020;mso-no-proof:yes;text-decoration:none;
    text-underline:none'><!--[if gte vml 1]><v:shapetype id="_x0000_t75"
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
     alt="cid:image001.png@01CCBBFD.D3A88B20"
     href="http://www.ameribancsales.net/" style='width:615pt;height:108pt;
     visibility:visible;mso-wrap-style:square' o:button="t">
     <v:imagedata src="Welcome%20to%20AmeriBanc%20University!_files/image001.png"
      o:title="image001.png@01CCBBFD"/>
    </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
    border=0 width=820 height=144
    src="<?php echo $message->embed('assets/img/email/image001.png'); ?>"
    alt="cid:image001.png@01CCBBFD.D3A88B20" v:shapes="Picture_x0020_5"></span><![endif]></span></b></a><b><span
    style='font-size:25.5pt;font-family:"Arial",sans-serif;mso-fareast-font-family:
    "Arial";color:#202020'><o:p></o:p></span></b></p>
    </td>
   </tr>
  </table>
  </div>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td valign=top style='border-top:none;border-left:solid #DDDDDD 1.0pt;
  border-bottom:none;border-right:solid #DDDDDD 1.0pt;mso-border-left-alt:solid #DDDDDD .75pt;
  mso-border-right-alt:solid #DDDDDD .75pt;padding:0in 0in 0in 0in'>
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
       1184;mso-padding-alt:15.0pt 15.0pt 15.0pt 15.0pt'>
       <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
        height:256.35pt'>
        <td width="100%" valign=top style='width:100.0%;padding:15.0pt 15.0pt 15.0pt 15.0pt;
        height:256.35pt'>
        <p class=MsoNormal><span style='font-family:"Arial",sans-serif'>Hello </span><span
        style='font-size:11.0pt;font-family:"Arial",sans-serif;background:white;
        mso-bidi-font-weight:bold'>{{$name}},</span><span style='font-family:
        "Arial",sans-serif'><o:p></o:p></span></p>
        <p class=MsoNormal><span style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal><span style='font-family:"Arial",sans-serif'>First
        let me please say again, Welcome to AmeriBanc National as one of our
        newest Independent Merchant Consultants! We are excited to have you
        representing us in that territory and we look forward to getting you
        started on your path of building Lifetime Residual wealth! <span
        style='color:#1F497D'>&nbsp;</span><b>Please complete the attached<span
        style='color:#1F497D'> </span>Merchant Consultant Agreement and return
        fax to 888-538-4255 so I can enter your info into payroll.</b>.<o:p></o:p></span></p>
        <p class=MsoNormal><span style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal><span style='font-family:"Arial",sans-serif'>With
        that in mind, we thought we would get you started with your training by
        visiting <b><span style='color:blue'><a href="WWW.AMERIBANCSALES.NET">WWW.AMERIBANCSALES.NET</a></span><span
        style='color:#1F497D'> </span></b>to let the learning begin! </span><b><i
        style='mso-bidi-font-style:normal'><u><span style='font-size:13.0pt;
        font-family:"Arial",sans-serif;background:yellow;mso-highlight:yellow'>You
        will log in to the AmeriBanc website with the same USERNAME and
        PASSWORD you did before.</span></u></i></b><b><span style='font-family:
        "Arial",sans-serif'> </span></b><span style='font-family:"Arial",sans-serif;
        mso-bidi-font-weight:bold'>Once again you will need to click on the “MY
        ABN Login” on the upper left hand side of the page and login with the
        credentials we supplied to you in your second interview email. This
        will take you directly to your training portal. This must be completed
        in full, prior to the webinar next week.<b><span style='color:#1F497D'>
        <o:p></o:p></span></b></span></p>
        <p class=MsoNormal><span><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal><span style='font-family:"Arial",sans-serif;
        background:yellow;mso-highlight:yellow;mso-bidi-font-weight:bold'>If
        you accomplish all 7 modules and get your Degree in the next 48 hours,
        you will be receiving an additional $100 BONUS attached to your first
        deal commission as a reward for focus and intent.</span><span
        style='font-family:"Arial",sans-serif;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
        <p class=MsoNormal><span style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal><span style='font-family:"Arial",sans-serif'>There
        are a few questions you’ll have to answer correctly while watching each
        video section before moving onto the next<span style='color:#1F497D'>.</span>
        <span style='color:#1F497D'>T</span>his will ensure you’re getting a
        good grasp of the information being provided in pieces, and are ready
        for the next video. They are laid out in numbered modules that must be
        completed in order before the next module unlocks. I’ll be
        automatically alerted when you’ve finished different sections, and then
        when you’ve finally completed all of them. <o:p></o:p></span></p>
        <p class=MsoNormal><span style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal><span style='font-family:"Arial",sans-serif'>Your
        training will be completed when you go through the live follow-up
        webinar with Mike Martin, our VP of Sales, and then appointments
        start the next day! Of course your training won’t end then but rather be an 
		ongoing experience, and will be outlined out more for you by our support team.<o:p></o:p></span></p>
        <p class=MsoNormal><span style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal><span style='font-family:"Arial",sans-serif'>If you
        have any questions about any of this as you go through the process,
        please don’t hesitate to contact me!<o:p></o:p></span></p>
        <p class=MsoNormal><span style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal><span style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal><span style='font-family:"Arial",sans-serif'>Best
        Regards,<o:p></o:p></span></p>
        <p class=MsoNormal><span style='font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal><span style='font-size:14.0pt;font-family:"Arial",sans-serif;
        color:#376092;mso-themecolor:accent1;mso-themeshade:191;mso-style-textfill-fill-color:
        #376092;mso-style-textfill-fill-themecolor:accent1;mso-style-textfill-fill-alpha:
        100.0%;mso-style-textfill-fill-colortransforms:lumm=75000;background:
        white'>{{$recruiter}}<o:p></o:p></span></p>
        <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Arial",sans-serif;
        color:#376092;mso-themecolor:accent1;mso-themeshade:191;mso-style-textfill-fill-color:
        #376092;mso-style-textfill-fill-themecolor:accent1;mso-style-textfill-fill-alpha:
        100.0%;mso-style-textfill-fill-colortransforms:lumm=75000'><span
        style='mso-spacerun:yes'>   </span>National Recruiter<o:p></o:p></span></p>
        <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Arial",sans-serif;
        color:#376092;mso-themecolor:accent1;mso-themeshade:191;mso-style-textfill-fill-color:
        #376092;mso-style-textfill-fill-themecolor:accent1;mso-style-textfill-fill-alpha:
        100.0%;mso-style-textfill-fill-colortransforms:lumm=75000;background:
        white'><span style='mso-spacerun:yes'>   </span>Phone:
        {{$recruiter_phone}}<span style='mso-spacerun:yes'>   </span>Ext:
        {{$recruiter_extension}}<o:p></o:p></span></p>
        <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Arial",sans-serif;
        color:#376092;mso-themecolor:accent1;mso-themeshade:191;mso-style-textfill-fill-color:
        #376092;mso-style-textfill-fill-themecolor:accent1;mso-style-textfill-fill-alpha:
        100.0%;mso-style-textfill-fill-colortransforms:lumm=75000'><span
        style='mso-spacerun:yes'>   </span>Fax: 888-538-4255<o:p></o:p></span></p>
        <p class=MsoNormal><a href="http://www.ameribancsales.net/"><span
        style='font-size:10.0pt;font-family:"Arial Rounded MT Bold",sans-serif;
        color:#1F497D;mso-no-proof:yes;text-decoration:none;text-underline:
        none'><!--[if gte vml 1]><v:shape id="Picture_x0020_6" o:spid="_x0000_i1035"
         type="#_x0000_t75" alt="cid:image002.jpg@01C9D478.3C884F60"
         href="http://www.ameribancsales.net/" style='width:94.5pt;height:30pt;
         visibility:visible;mso-wrap-style:square' o:button="t">
         <v:imagedata src="Welcome%20to%20AmeriBanc%20University!_files/image002.jpg"
          o:title="image002.jpg@01C9D478"/>
        </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
        border=0 width=126 height=40
        src="<?php echo $message->embed('assets/img/email/image002.jpg'); ?>"
        alt="cid:image002.jpg@01C9D478.3C884F60" v:shapes="Picture_x0020_6"></span><![endif]></span></a><o:p></o:p></p>
        </td>
       </tr>
      </table>
      </td>
     </tr>
    </table>
    </td>
    <td width=200 valign=top style='width:150.0pt;background:white;padding:
    0in 0in 0in 0in' id=templateSidebar>
    <p class=MsoNormal><span style='color:black'><o:p>&nbsp;</o:p></span></p>
    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
     style='border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:
     0in 0in 0in 0in'>
     <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
      <td width=40 style='width:29.85pt;padding:0in 0in 0in 0in'>
      <p class=MsoNormal align=right style='text-align:right'><span
      style='mso-fareast-font-family:"Arial";mso-no-proof:yes'><!--[if gte vml 1]><v:shape
       id="Picture_x0020_21" o:spid="_x0000_i1034" type="#_x0000_t75" alt="facebook.png"
       style='width:15pt;height:14.25pt;visibility:visible;mso-wrap-style:square'
       filled="t" fillcolor="#fafafa">
       <v:imagedata src="Welcome%20to%20AmeriBanc%20University!_files/image003.jpg"
        o:title="facebook" croptop="-2632f" cropbottom="-6843f" cropright="-2731f"/>
       <o:lock v:ext="edit" aspectratio="f"/>
      </v:shape><![endif]--><![if !vml]><img border=0 width=20 height=19
      src="<?php echo $message->embed('assets/img/email/image004.jpg'); ?>"
      alt=facebook.png v:shapes="Picture_x0020_21"><![endif]></span><span
      style='mso-fareast-font-family:"Arial"'><o:p></o:p></span></p>
      </td>
      <td valign=top style='padding:0in 0in 0in 0in'>
      <p class=MsoNormal style='line-height:150%'><span style='font-size:9.0pt;
      line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:
      "Arial";color:#505050'><a
      href="http://www.facebook.com/pages/AmeriBanc-National/229862127028343?sk=app_190322544333196">Like
      us on FaceBook</a><o:p></o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:1'>
      <td width=40 style='width:29.85pt;padding:0in 0in 0in 0in'>
      <p class=MsoNormal align=right style='text-align:right'><span
      style='mso-fareast-font-family:"Arial";mso-no-proof:yes'><!--[if gte vml 1]><v:shape
       id="Picture_x0020_19" o:spid="_x0000_i1033" type="#_x0000_t75" alt="twitter.png"
       style='width:14.25pt;height:14.25pt;visibility:visible;mso-wrap-style:square'>
       <v:imagedata src="Welcome%20to%20AmeriBanc%20University!_files/image005.png"
        o:title="twitter"/>
      </v:shape><![endif]--><![if !vml]><img border=0 width=19 height=19
      src="<?php echo $message->embed('assets/img/email/image006.png'); ?>"
      alt=twitter.png v:shapes="Picture_x0020_19"><![endif]></span><span
      style='mso-fareast-font-family:"Arial"'><o:p></o:p></span></p>
      </td>
      <td valign=top style='padding:0in 0in 0in 0in'>
      <p class=MsoNormal style='line-height:150%'><span style='font-size:9.0pt;
      line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:
      "Arial";color:#505050'><a href="https://twitter.com/AmeriBanc">Follow
      us on Twitter</a><o:p></o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:2'>
      <td width=40 style='width:29.85pt;padding:0in 0in 0in 0in'>
      <p class=MsoNormal align=right style='text-align:right'><span
      style='mso-fareast-font-family:"Arial";mso-no-proof:yes'><!--[if gte vml 1]><v:shape
       id="Picture_x0020_20" o:spid="_x0000_i1032" type="#_x0000_t75" alt="image008.png"
       style='width:14.25pt;height:14.25pt;visibility:visible;mso-wrap-style:square'>
       <v:imagedata src="Welcome%20to%20AmeriBanc%20University!_files/image008.png"
        o:title="linkedin"/>
      </v:shape><![endif]--><![if !vml]><img border=0 width=19 height=19
      src="<?php echo $message->embed('assets/img/email/image007.png'); ?>"
      alt=youtube.png v:shapes="Picture_x0020_25"><![endif]></span><o:p></o:p></span></p>
      </td>
      <td valign=top style='padding:0in 0in 0in 0in'>
      <p class=MsoNormal style='line-height:150%'><span style='font-size:9.0pt;
      line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:
      "Arial";color:#505050'><a
      href="http://www.linkedin.com/company/2706829">Add us on Linkedin</a><o:p></o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:3'>
      <td width=40 style='width:29.85pt;padding:0in 0in 0in 0in'>
      <p class=MsoNormal align=right style='text-align:right'><span
      style='mso-fareast-font-family:"Arial";mso-no-proof:yes'><!--[if gte vml 1]><v:shape
       id="Picture_x0020_23" o:spid="_x0000_i1031" type="#_x0000_t75" alt="google.png"
       style='width:14.25pt;height:14.25pt;visibility:visible;mso-wrap-style:square'>
       <v:imagedata src="Welcome%20to%20AmeriBanc%20University!_files/image009.png"
        o:title="google"/>
      </v:shape><![endif]--><![if !vml]><img border=0 width=19 height=19
      src="<?php echo $message->embed('assets/img/email/image010.png'); ?>"
      alt=google.png v:shapes="Picture_x0020_23"><![endif]><o:p></o:p></span></p>
      </td>
      <td valign=top style='padding:0in 0in 0in 0in'>
      <p class=MsoNormal style='line-height:150%'><span style='font-size:9.0pt;
      line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:
      "Arial";color:#505050'><a
      href="https://plus.google.com/u/0/b/109875506897246317378/109875506897246317378/posts">Add
      Us on Google+</a><o:p></o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:4'>
      <td width=40 style='width:29.85pt;padding:0in 0in 0in 0in'>
      <p class=MsoNormal align=right style='text-align:right'><span
      style='mso-fareast-font-family:"Arial";mso-no-proof:yes'><!--[if gte vml 1]><v:shape
       id="Picture_x0020_25" o:spid="_x0000_i1030" type="#_x0000_t75" alt="youtube.png"
       style='width:14.25pt;height:14.25pt;visibility:visible;mso-wrap-style:square'>
       <v:imagedata src="Welcome%20to%20AmeriBanc%20University!_files/image011.png"
        o:title="youtube"/>
      </v:shape><![endif]--><![if !vml]><img border=0 width=19 height=19
      src="<?php echo $message->embed('assets/img/email/image012.png'); ?>"
      alt=youtube.png v:shapes="Picture_x0020_25"><![endif]><o:p></o:p></span></p>
      </td>
      <td valign=top style='padding:0in 0in 0in 0in'>
      <p class=MsoNormal style='line-height:150%'><span style='font-size:9.0pt;
      line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:
      "Arial";color:#505050'><a
      href="http://www.youtube.com/user/AmeriBancVideo">Follow us on YouTube</a><o:p></o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes'>
      <td colspan=2 valign=top style='padding:0in 0in 0in 0in'>
      <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
       width="100%" style='width:100.0%;border-collapse:collapse;mso-yfti-tbllook:
       1184;mso-padding-alt:0in 0in 0in 0in'>
       <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
        <td valign=top style='padding:7.5pt 15.0pt 0in 15.0pt'></td>
       </tr>
      </table>
      <p class=MsoNormal><span style='mso-fareast-font-family:"Arial";
      display:none;mso-hide:all'><o:p>&nbsp;</o:p></span></p>
      <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
       width="100%" style='width:100.0%;border-collapse:collapse;mso-yfti-tbllook:
       1184;mso-padding-alt:15.0pt 15.0pt 15.0pt 15.0pt'>
       <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
        height:216.3pt'>
        <td valign=top style='padding:15.0pt 15.0pt 15.0pt 15.0pt;height:216.3pt'>
        <p class=MsoNormal><a
        href="http://www.ameribancsales.net/services/check-imaging"><span
        style='mso-fareast-font-family:"Arial";color:windowtext;
        mso-no-proof:yes;text-decoration:none;text-underline:none'><!--[if gte vml 1]><v:shape
         id="Picture_x0020_3" o:spid="_x0000_i1029" type="#_x0000_t75"
         href="http://www.ameribancsales.net/services/check-imaging" style='width:111pt;
         height:106.5pt;visibility:visible;mso-wrap-style:square' o:button="t">
         <v:imagedata src="Welcome%20to%20AmeriBanc%20University!_files/image013.png"
          o:title=""/>
        </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
        border=0 width=148 height=142
        src="<?php echo $message->embed('assets/img/email/image029.png'); ?>" v:shapes="Picture_x0020_3"></span><![endif]></span></a><span
        style='mso-fareast-font-family:"Arial"'><o:p></o:p></span></p>
        <p class=MsoNormal style='line-height:150%'><span style='font-size:
        9.0pt;line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:
        "Arial";color:#505050'><span
        style='mso-spacerun:yes'>         </span><o:p></o:p></span></p>
        <p class=MsoNormal style='line-height:150%'><span style='font-size:
        9.0pt;line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:
        "Arial";color:#505050'><o:p>&nbsp;</o:p></span></p>
        <p class=MsoNormal style='line-height:150%'><a
        href="http://www.ameribancsales.net/services/mobile-solutions"><span
        style='font-size:9.0pt;line-height:150%;font-family:"Arial",sans-serif;
        mso-fareast-font-family:"Arial";color:#505050;mso-no-proof:
        yes;text-decoration:none;text-underline:none'><!--[if gte vml 1]><v:shape
         id="Picture_x0020_13" o:spid="_x0000_i1028" type="#_x0000_t75"
         href="http://www.ameribancsales.net/services/mobile-solutions"
         style='width:111pt;height:105.75pt;visibility:visible;
         mso-wrap-style:square' o:button="t">
         <v:fill o:detectmouseclick="t"/>
         <v:imagedata src="Welcome%20to%20AmeriBanc%20University!_files/image015.png"
          o:title=""/>
        </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
        border=0 width=148 height=141
        src="<?php echo $message->embed('assets/img/email/image031.png'); ?>" v:shapes="Picture_x0020_13"></span><![endif]></span></a><span
        style='font-size:9.0pt;line-height:150%;font-family:"Arial",sans-serif;
        mso-fareast-font-family:"Arial";color:#505050'><o:p></o:p></span></p>
        <p class=MsoNormal style='line-height:150%'><span style='font-size:
        9.0pt;line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:
        "Arial";color:#505050'><span style='mso-spacerun:yes'> 
        </span></span><a
        href="http://www.ameribancsales.net/services/authorize-net"><span
        style='font-size:9.0pt;line-height:150%;font-family:"Arial",sans-serif;
        mso-fareast-font-family:"Arial";color:#505050;mso-no-proof:
        yes;text-decoration:none;text-underline:none'><!--[if gte vml 1]><v:shape
         id="Picture_x0020_12" o:spid="_x0000_i1027" type="#_x0000_t75" alt="cid:image030.png@01D0FD1E.910BA4D0"
         href="http://www.ameribancsales.net/services/authorize-net" style='width:105pt;
         height:100.5pt;visibility:visible;mso-wrap-style:square' o:button="t">
         <v:imagedata src="Welcome%20to%20AmeriBanc%20University!_files/image033.png"
          o:title="image030.png@01D0FD1E"/>
        </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
        border=0 width=140 height=134
        src="<?php echo $message->embed('assets/img/email/image033.png'); ?>"
        alt="cid:image030.png@01D0FD1E.910BA4D0" v:shapes="Picture_x0020_12"></span><![endif]></span></a><a
        href="http://www.ameribancsales.net/services/authorize-net"><b
        style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
        line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:
        "Arial";color:#505050;mso-no-proof:yes;text-decoration:none;
        text-underline:none'><!--[if gte vml 1]><v:shape id="Picture_x0020_10"
         o:spid="_x0000_i1026" type="#_x0000_t75"
         href="http://www.ameribancsales.net/services/authorize-net" style='width:118.5pt;
         height:32.25pt;visibility:visible;mso-wrap-style:square' o:button="t">
         <v:fill o:detectmouseclick="t"/>
         <v:imagedata src="Welcome%20to%20AmeriBanc%20University!_files/image018.gif"
          o:title=""/>
        </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
        border=0 width=158 height=43
        src="<?php echo $message->embed('assets/img/email/image034.jpg'); ?>" v:shapes="Picture_x0020_10"></span><![endif]></span></b></a><span
        style='font-size:9.0pt;line-height:150%;font-family:"Arial",sans-serif;
        mso-fareast-font-family:"Arial";color:#505050'><o:p></o:p></span></p>
        </td>
       </tr>
      </table>
      <p class=MsoNormal><span style='font-size:11.0pt;font-family:"Calibri",sans-serif;
      mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin'><o:p></o:p></span></p>
      </td>
     </tr>
    </table>
    <p class=MsoNormal style='line-height:150%'><b style='mso-bidi-font-weight:
    normal'><span style='font-size:9.0pt;line-height:150%;font-family:"Arial",sans-serif;
    mso-fareast-font-family:"Arial";color:#505050'><o:p>&nbsp;</o:p></span></b></p>
    <p class=MsoNormal style='line-height:150%'><b style='mso-bidi-font-weight:
    normal'><span style='font-size:9.0pt;line-height:150%;font-family:"Arial",sans-serif;
    mso-fareast-font-family:"Arial";color:#505050'><span
    style='mso-spacerun:yes'>     </span>National Recruiting Division<o:p></o:p></span></b></p>
    <p class=MsoNormal style='line-height:150%'><span style='font-size:9.0pt;
    line-height:150%;font-family:"Arial",sans-serif;mso-fareast-font-family:
    "Arial";color:#505050'><span style='mso-spacerun:yes'>    
    </span>Phone:</span><span style='font-size:9.0pt;line-height:150%;
    font-family:"Arial",sans-serif'>888.548.4255 x 5005<o:p></o:p></span></p>
    <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Arial",sans-serif'><span
    style='mso-spacerun:yes'>     </span>Fax:</span><span style='font-family:
    "Arial",sans-serif;color:#1F497D'> </span><span style='font-size:9.0pt;
    font-family:"Arial",sans-serif;color:black;mso-themecolor:text1'>888-538-4255</span><span
    style='font-size:11.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin'><o:p></o:p></span></p>
    </td>
   </tr>
  </table>
  </div>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  <td valign=top style='border:solid #DDDDDD 1.0pt;border-top:none;mso-border-left-alt:
  solid #DDDDDD .75pt;mso-border-bottom-alt:solid #DDDDDD .75pt;mso-border-right-alt:
  solid #DDDDDD .75pt;padding:0in 0in 0in 0in' id=social>
  <div align=center>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=600
   style='width:6.25in;background:white;border-collapse:collapse;mso-yfti-tbllook:
   1184;mso-padding-alt:0in 0in 0in 0in' id=templateFooter>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
    <td valign=top style='padding:7.5pt 7.5pt 7.5pt 7.5pt'>
    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=663
     style='width:497.15pt;border-collapse:collapse;mso-yfti-tbllook:1184;
     mso-padding-alt:7.5pt 7.5pt 7.5pt 7.5pt'>
     <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
      <td width="100%" colspan=2 style='width:100.0%;background:#FAFAFA;
      padding:7.5pt 7.5pt 7.5pt 7.5pt'>
      <p class=MsoNormal align=center style='text-align:center;line-height:
      125%'><span style='font-size:9.0pt;line-height:125%;font-family:"Arial",sans-serif;
      mso-fareast-font-family:"Arial";color:#505050'><a
      href="http://www.facebook.com/pages/AmeriBanc-National/229862127028343?sk=app_190322544333196">Like
      us on FaceBook</a> | <a href="https://twitter.com/AmeriBanc">Follow us on
      Twitter</a> | <a href="http://www.linkedin.com/company/2706829">Add us on
      Linkedin</a> | <a
      href="https://plus.google.com/u/0/b/109875506897246317378/109875506897246317378/posts">Add
      Us on Google+</a></span><span style='font-size:9.0pt;line-height:125%;
      font-family:"Arial",sans-serif;mso-fareast-font-family:"Arial";
      color:#707070'> | </span><span style='font-size:9.0pt;line-height:125%;
      font-family:"Arial",sans-serif;mso-fareast-font-family:"Arial";
      color:#505050'><a href="http://www.youtube.com/user/AmeriBancVideo">Follow
      us on YouTube</a></span><span style='font-size:9.0pt;line-height:125%;
      font-family:"Arial",sans-serif;mso-fareast-font-family:"Arial";
      color:#707070'><o:p></o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:1'>
      <td width="61%" valign=top style='width:61.76%;padding:7.5pt 7.5pt 7.5pt 7.5pt'>
      <p class=MsoNormal align=center style='text-align:center;line-height:
      125%'><em><span style='font-size:9.0pt;line-height:125%;font-family:"Arial",sans-serif;
      mso-fareast-font-family:"Arial";color:#707070'>Copyright © 2011
      AmeriBanc National (ABN), All rights reserved.</span></em><span
      style='font-size:9.0pt;line-height:125%;font-family:"Arial",sans-serif;
      mso-fareast-font-family:"Arial";color:#707070'> <br>
      Regularly Visit <a href="http://www.ameribancsales.net/">Http://www.AmeriBancsales.net</a>
      for continued training <br>
      <strong><span style='font-family:"Arial",sans-serif'>Our mailing address
      is:</span></strong> <br>
      </span><b style='mso-bidi-font-weight:normal'><span style='font-size:
      9.0pt;line-height:125%;font-family:"Arial",sans-serif;color:gray;
      mso-themecolor:background1;mso-themeshade:128'>2150 Manchester Road Suite
      100, Wheaton IL, 60187</span></b><span style='font-size:9.0pt;line-height:
      125%;font-family:"Arial",sans-serif;mso-fareast-font-family:"Arial";
      color:#707070'><o:p></o:p></span></p>
      </td>
      <td width="38%" valign=top style='width:38.24%;padding:7.5pt 7.5pt 7.5pt 7.5pt'
      id=monkeyRewards>
      <p class=MsoNormal align=center style='text-align:center;line-height:
      125%'><a
      href="http://www.bbb.org/chicago/business-reviews/credit-card-processing-service/ameribanc-national-in-bloomingdale-il-88009308"
      title="&quot;Check us out at the BBB&quot; "><span style='font-size:9.0pt;
      line-height:125%;font-family:"Arial",sans-serif;mso-fareast-font-family:
      "Arial";color:#336699;mso-no-proof:yes;text-decoration:none;
      text-underline:none'><!--[if gte vml 1]><v:shape id="Picture_x0020_2"
       o:spid="_x0000_i1025" type="#_x0000_t75"
       href="http://www.bbb.org/chicago/business-reviews/credit-card-processing-service/ameribanc-national-in-bloomingdale-il-88009308"
       title="&quot;Check us out at the BBB&quot; " style='width:156.75pt;
       height:59.25pt;visibility:visible;mso-wrap-style:square' o:button="t">
       <v:imagedata src="Welcome%20to%20AmeriBanc%20University!_files/image020.png"
        o:title=""/>
      </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
      border=0 width=209 height=79
      src="<?php echo $message->embed('assets/img/email/image020.png'); ?>" v:shapes="Picture_x0020_2"></span><![endif]></span></a><span
      style='font-size:9.0pt;line-height:125%;font-family:"Arial",sans-serif;
      mso-fareast-font-family:"Arial";color:#707070'><o:p></o:p></span></p>
      </td>
     </tr>
     <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
      <td width="100%" colspan=2 style='width:100.0%;background:white;
      padding:7.5pt 7.5pt 7.5pt 7.5pt' id=utility></td>
     </tr>
    </table>
    </td>
   </tr>
  </table>
  </div>
  </td>
 </tr>
</table>

</div>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial";
color:black'><o:p>&nbsp;</o:p></span></p>

</div>

</body>
</html>
