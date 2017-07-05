<?php
/*
	* PulseCMS 5 jazyky
	* Prekľad: Slovenčina
	* Autor: IvaRo
	* Kontakt: preklad@pulse.wz.sk
	* Copyright (c) 2017 IvaRo Soft Slovakia	
	* Licencia: MIT
*/

// Global - Všeobecné

$lang_cancel = "Zrušiť";
$lang_duplicate = "Duplikát";
$lang_help = "Pomocník";
$lang_help_url ="http://help.pulsecms.com/";
$lang_settings = "Nastavenie";
$lang_account = "Účet";
$lang_save = "Uložiť";
$lang_rename_btn = "Premenovať";
$lang_title = "Pulse CMS";  /* Názov admin stránky */

// Auto backup - Automatické zálohovanie
$lang_autobackup_email_subject_line = 'Pulse automatické zálohovanie, pripomienka';
$lang_autobackup_email_text =<<<EOD
Dobrý deň,

Vaša inštalácia Pulse vygenerovala záložný zip súbor.

S pozdravom,
Vaše Pulse CMS
EOD;

// Login - Prihlásenie
$lang_login_forgot_password = "Zabudli ste heslo ?";
$lang_login_forgot_password_email_body =<<<EOD
	Dobrý deň,
	
	Vaše heslo pre Pulse je PASSWORD
EOD;
$lang_login_forgot_password_email_subject_line = "Zabudli ste vaše heslo pre Pulse?"; 
$lang_login_incorrect = "Vaše helo je nesprávne!";
$lang_login_password = "Heslo";
$lang_login_button = "Prihlásenie";
$lang_nav_logout = "Odhlásiť sa";
$lang_login_otp = "OTP Heslo"; /* OTP = jednorázové heslo - vygenerovane */
$lang_login_welcome = "Ahoj!";
$lang_login_name = "Užívateľ Pulse";

// Home - Úvod
$lang_home_emptyfold = "Tento priečinok je prázdny."; 
$lang_home_new = "Nový";
$lang_home_upload_button = "Nahrať";   /* Nahrať súbor */
$lang_home_preview = "Náhľad";

// Navigation -  Navigácia

$lang_nav_title = "Navigácia";
$lang_nav_home = "Domov";
$lang_nav_blocks = "Bloky";
$lang_nav_img = "Media";
$lang_nav_blog = "Blog";
$lang_nav_pages = "Stránky";
$lang_nav_stats = "Štatistiky";

// Navigation logged in bar - Navigačný pruh
$lang_nav_logged_in_add_block     = 'Pridať nový blok';
$lang_nav_logged_in_add_blog_post = 'Pridať nový príspevok blogu';
$lang_nav_logged_in_add_media     = 'Pridať nové médiá';
$lang_nav_logged_in_add_page      = 'Pridať novú stránku';


// Gallery - Galéria

$lang_gal_alt_gallery = "alt tag (popis)"; /* Popis obrázku */
$lang_gal_caption_gallery = "Tu vložte titulok"; 
$lang_gal_filename = "Názov súboru";
$lang_gal_dimensions = "Rozmery";
$lang_gal_size = "Veľkosť";
$lang_gal_img = "IMG";
$lang_gal_link = "Odkaz";
$lang_gallery_tool_tip = "Ak chcete vytvoriť galériu lightbox, vytvorte priečinok obrázkov a použite odkaz vloženia.";

// Pages - Stránky

$lang_pages_meta = "Meta";   /* Hlavička stránky */
$lang_pages_title = "Názov stránky";
$lang_pages_description = "Popis stránky";

// Create - Vytvoriť

$lang_create_file_or_folder = 'Nová stránka';    /*Sami nevedia čo chcú */
$lang_create_button = "Vytvoriť"; 
$lang_create_tool_tip = "Stránky, bloky a príspevky na blogu musia končiť príponou '.txt'. Ak chcete vytvoriť priečinok, neuvádzajte príponou '.txt'.";
$lang_create_embed_tag = "Odkaz vloženia."; /* "Embed Tag" */

// Delete - Vymazať

$lang_delete = 'Ste si istí, že to chcete odstrániť? ';
$lang_del_button = "Odstrániť";

// Errors - Chyby

$lang_error_create_ext = 'Neplatná prípona súboru.';
$lang_error_file_exists = 'Súbor s týmto názvom v tejto zložke už existuje.';
$lang_error_upload = 'Ak chcete nahrať obrázok, musíte byť v galérii.';
$lang_no_content = 'Žiadny obsah nebol nájdený.';

// Blog - Blog

$lang_blog_title = 'Názov Blogu';
$lang_blog_date = 'Dátum';
$lang_blog_read_more = 'Čítajte ďalej';
$lang_blog_back_button = 'Späť';
$lang_blog_older = 'Staršie';
$lang_blog_newer = 'Novšie';
$lang_blog_error_folder = "Nedá sa vytvoriť priečinok v Blogu";
$lang_blog_tool_tip = "Príspevky do blogu sú usporiadané podľa čísla, pričom najvyššie číslovanie je najnovší príspevok.";
$lang_blog_import = 'Importovať';
$lang_blog_import_tool_tip = 'Importovať položky blogu z RSS. Importujú sa formáty RSS a ATOM.';
$lang_blog_import_page_max = 'Maximálny počet stránok';
$lang_blog_import_page_var = 'Názov premennej stránkovania';
$lang_blog_import_url = 'URL';

// Form  - Formulár

$lang_form_error1 = 'Prosim vyplnte údaje ';
$lang_form_error2a = 'Vaše údaje ';
$lang_form_error2b = ' je príliš dlhé.';
$lang_form_subject_line = 'Kovtakt';
$lang_form_email_sent = 'E-mail bol odoslaný';
$lang_form_sent_button = 'Odoslať';
$lang_auto_thank_contact = 'Ďakujem za zaslanie e-mailu! Na Váš e-mail odpoviem hneď ako to bude možné.';

// Newsletter Form - Informačný Formulár

$lang_newsletter_thanks ='Vďaka!';
$lang_newsletter_try_again ='Skúste to znova';
$lang_newsletter_placeholder ='Zadajte e-mail';
$lang_newsletter_send ='Prihlásiť sa';

// Stats - Štatistika

$lang_stats_today = "Návštevy";
$lang_stats_refers = "Top odkazovače";
$lang_stats_pages = "Top stránky";
$lang_stats_refresh = "Aktualizovať";
$lang_stats_pageviews = "Zobrazenie stránok";
$lang_stats_per_visit = "Stránky / Návštevnosť";
$lang_stats_bounce_rate ="Miera hodnotenia";
$lang_stats_online = "Prítomný"; /* Online */
$lang_stats_thisweek = "Tento týždeň";
$lang_stats_todays_stats = "Dnes";
$lang_stats_nodata = "Žiadne dáta";

$lang_stats_browsers  = "prehliadače";
$lang_stats_countries = "Krajiny";
$lang_stats_devices   = "zariadenia";
$lang_stats_systems   = "systémy";

// Custom post types - Vlastné typy príspevkov
$lang_custom_post_type_error_illegal_characters = 'Názov príspevku má nepovolené znaky';
$lang_custom_post_type_error_illegal_name       = 'Názov príspevku má nepovolený názov';
$lang_custom_post_type_error_unknown_entry      = 'Tento príspevok nie je známy';

// Status messages - Stavové správy
$lang_status_ok = 'Údaje su uložené';

// Media gallery - Médiá galéria
$lang_media_order = 'Poradie';

// dashboard - navigačný pás
$lang_dashboard_backups = 'Zálohy';

$lang_dashboard_blocks = 'Bloky';
$lang_dashboard_edit_blocks = 'Upraviť Bloky';

$lang_dashboard_blog = 'Blog';
$lang_dashboard_edit_blog = 'Upraviť Blog';

$lang_dashboard_notes = 'Panel poznámok';   /* Poznámky */

$lang_dashboard_file_storage = 'Ukladanie súborov';

$lang_dashboard_media = 'Media';
$lang_dashboard_edit_media = 'Upraviť Media';

$lang_dashboard_pages = 'Stránky';
$lang_dashboard_edit_page = 'Upraviť Stránku';

# ???
$lang_crop = 'Crop';   /* pokračovať v práci (vlož konec PHP) */
?>