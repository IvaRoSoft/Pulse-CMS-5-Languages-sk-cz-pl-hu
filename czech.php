<?php
/*
	* PulseCMS 5 jazyky
	* překlad: Čeština
	* Autor: IvaRo
	* Kontakt: preklad@pulse.wz.sk
  * Copyright (c) 2017 IvaRo Soft Slovakia	
	* Licence: MIT
*/

//Global - Globální

$lang_cancel = "Zrušit";
$lang_duplicate = "Duplikát";
$lang_help = "Nápověda";
$lang_help_url ="http://help.pulsecms.com/";
$lang_settings = "Nastavení";
$lang_account = "Účet";
$lang_save = "Uložit";
$lang_rename_btn = "Přejmenovat";
$lang_title = "Pulse CMS";    /* Název admin stránky */

// Auto backup - Automatické zálohování
$lang_autobackup_email_subject_line = 'Pulse automatické zálohování';
$lang_autobackup_email_text =<<<EOD
Dobrý den,

Instalační program Pulse generoval záložní soubor zip.

S pozdravem,
Vaše Pulse CMS
EOD;

// Login - Přihlášení
$lang_login_forgot_password = "Zapomněli jste heslo ?";
$lang_login_forgot_password_email_body =<<<EOD
	Dobrý den,
	
	Vaše heslo pro Pulse je PASSWORD
EOD;
$lang_login_forgot_password_email_subject_line = "Zapomněli jste heslo Pulse?"; 
$lang_login_incorrect = "Vaše heslo je nesprávné!";
$lang_login_password = "Heslo";
$lang_login_button = "Přihlášení";
$lang_nav_logout = "Odhlášení";
$lang_login_otp = "OTP Heslo";   /* OTP = jednorázové heslo - vygenerovane */
$lang_login_welcome = "Ahoj!";
$lang_login_name = "Uživatel Pulse";

// Home - Domovská stránka
$lang_home_emptyfold = "Tato složka je prázdná."; 
$lang_home_new = "Nový";
$lang_home_upload_button = "Nahrát";
$lang_home_preview = "Náhled";

// Navigation  - Navigace

$lang_nav_title = "Navigace";
$lang_nav_home = "Domů";
$lang_nav_blocks = "Blok";
$lang_nav_img = "Média";
$lang_nav_blog = "Blog";
$lang_nav_pages = "Stránky";
$lang_nav_stats = "Statistiky";

// Navigation logged in bar  - Navigace v liště
$lang_nav_logged_in_add_block     = 'Přidat nový blok';
$lang_nav_logged_in_add_blog_post = 'Přidat nový příspěvek blogu';
$lang_nav_logged_in_add_media     = 'Přidat nová média';
$lang_nav_logged_in_add_page      = 'Přidat novou stránku';


// Gallery - Galerie

$lang_gal_alt_gallery = "alt tag (popis)";  /* Popis obrázku */
$lang_gal_caption_gallery = "Zde vložte titulek";
$lang_gal_filename = "Název souboru";
$lang_gal_dimensions = "Rozměry";
$lang_gal_size = "Velikost";
$lang_gal_img = "IMG";
$lang_gal_link = "Odkaz";
$lang_gallery_tool_tip = "Chcete-li vytvořit lightbox galerii, vytvořte složku obrázků a použijte odkaz vložení.";

// Pages  - Stránky

$lang_pages_meta = "Meta";    /* Hlavička stránky */
$lang_pages_title = "Název stránky";
$lang_pages_description = "Popis stránky";

// Create - Vytvořit

$lang_create_file_or_folder = 'Nová stránka';   /* miš maš */
$lang_create_button = "Vytvořit"; 
$lang_create_tool_tip = "Stránky, bloky a příspěvky na blogu musí končit příponou '.txt'. Chcete-li vytvořit složku, neuvadejte příponou '.txt'.";
$lang_create_embed_tag = "Odkaz vložení.";  /* "Embed Tag" */

// Delete - Vymazat

$lang_delete = 'Jste si jisti, že to chcete smazat ';
$lang_del_button = "Vymazat";

// Errors - Chyby

$lang_error_create_ext = 'Neplatná přípona souboru.';
$lang_error_file_exists = 'Soubor s tímto názvem již v této složce existuje.';
$lang_error_upload = 'Chcete-li nahrát obrázek, musíte být v galerii.';
$lang_no_content = 'žádný obsah nebyl nalezen';

//Blog - Blog

$lang_blog_title = 'Název Blogu';
$lang_blog_date = 'Datum';
$lang_blog_read_more = 'Čtěte více';
$lang_blog_back_button = 'Zpět';
$lang_blog_older = 'Starší';
$lang_blog_newer = 'Novější';
$lang_blog_error_folder = "V Blogu nelze vytvořit složku";
$lang_blog_tool_tip = "Položky blogu jsou řazeny podle čísla, nejvyšší číslování prozatím nejnovější příspěvek.";
$lang_blog_import = 'Importovat';
$lang_blog_import_tool_tip = 'Položky blogu importovat z RSS. Importér bude importovat z RSS a Atom formátů.';
$lang_blog_import_page_max = 'Maximální počet stránek';
$lang_blog_import_page_var = 'Název proměnné stránkováni';
$lang_blog_import_url = 'URL';

//Form - Formulář

$lang_form_error1 = 'Prosím vyplňte pole ';
$lang_form_error2a = 'Vaše pole ';
$lang_form_error2b = ' je příliš dlouhé.';
$lang_form_subject_line = 'Kontakt';
$lang_form_email_sent = 'E-mail byl odeslán';
$lang_form_sent_button = 'Odeslat';
$lang_auto_thank_contact = 'Děkuji za zaslání e-mailu! Na Váš e-mail odpovím jakmile to bude možné.';

//Newsletter Form - Formulář zpravodaje

$lang_newsletter_thanks ='Díky!';
$lang_newsletter_try_again ='Zkuste to znovu';
$lang_newsletter_placeholder ='Zadejte e-mail';
$lang_newsletter_send ='Přihlásit se';

// Stats - Statistiky

$lang_stats_today = "Návštěvníci";
$lang_stats_refers = "Top odkazovačů";
$lang_stats_pages = "Top stránek";
$lang_stats_refresh = "Aktualizovat";
$lang_stats_pageviews = "Zobrazení stránek";
$lang_stats_per_visit = "Stránky / Návštěva";
$lang_stats_bounce_rate ="Míra hodnocení";
$lang_stats_online = "Přítomen";   /* Online */
$lang_stats_thisweek = "Tento týden";
$lang_stats_todays_stats = "Dnes";
$lang_stats_nodata = "Žádná data";

$lang_stats_browsers  = "prohlížeče";
$lang_stats_countries = "země";
$lang_stats_devices   = "zařízení";
$lang_stats_systems   = "Systémy";

// Custom post types - Vlastní příspěvek
$lang_custom_post_type_error_illegal_characters = 'Název příspěvku má nepovolené znaky';
$lang_custom_post_type_error_illegal_name       = 'Název příspěvku má nepovolen název';
$lang_custom_post_type_error_unknown_entry      = 'Tento příspěvek není znám';

// Status messages - Stavové zprávy
$lang_status_ok = 'Uložená data';

// Media gallery - Media Galerie
$lang_media_order = 'Pořadí';

// Dashboard - Navigační lišta
$lang_dashboard_backups = 'Zálohování';

$lang_dashboard_blocks = 'Bloky';
$lang_dashboard_edit_blocks = 'Upravit Bloky';

$lang_dashboard_blog = 'Blog';
$lang_dashboard_edit_blog = 'Upravit Blog';

$lang_dashboard_notes = 'Panel poznámek';

$lang_dashboard_file_storage = 'Uložení souborů';

$lang_dashboard_media = 'Media';
$lang_dashboard_edit_media = 'Upravit Media';

$lang_dashboard_pages = 'Stránky';
$lang_dashboard_edit_page = 'Upravit stránku';

# ???
$lang_crop = 'Crop';    /* pokračovat v práci (vlož konec PHP) */
 ?>