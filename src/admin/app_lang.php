<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Komponensek';
$lang['admin_content'] = 'Tartalom';
$lang['admin_database_backup'] = 'Adatbázis biztonsági mentések';
$lang['admin_extensions'] = 'Kiterjesztések';
$lang['admin_firewall'] = 'Tűzfal';
$lang['admin_help'] = 'Segítség';
$lang['admin_languages'] = 'Nyelvek';
$lang['admin_logs'] = 'Rendszernaplók';
$lang['admin_media'] = 'Médiatár';
$lang['admin_modules'] = 'Modulok';
$lang['admin_plugins'] = 'Bővítmények';
$lang['admin_reports'] = 'Tevékenységi napló';
$lang['admin_settings'] = 'Rendszerbeállítások';
$lang['admin_sysinfo'] = 'Rendszerinformációk';
$lang['admin_system'] = 'Rendszer';
$lang['admin_system_firewall'] = 'Rendszer tűzfal';
$lang['admin_themes'] = 'Témák';
$lang['admin_updates'] = 'Rendszerfrissítések';
$lang['admin_users'] = 'Felhasználók';
$lang['admin_view_site'] = 'Oldal megtekintése';
$lang['per_page'] = 'Oldalanként';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Köszönjük, hogy a <a href="%s" target="_blank">%s</a>-t használta.';
$lang['admin_items_active_count'] = '=0{Nincs aktív elem.} other{<b>#</b> / <b>%s</b> elem aktív.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'A telepítés sikertelen: %s';
$lang['admin_install_location_app'] = 'Csak ez az alkalmazás';
$lang['admin_install_location_core'] = 'Összes alkalmazás';
$lang['admin_install_location_select'] = '&#151; Hely kiválasztása &#151;';
$lang['admin_install_update_confirm'] = 'Biztosan frissíteni szeretné ezt a csomagot?';
$lang['admin_install_update_error'] = 'A csomag frissítése sikertelen volt.';
$lang['admin_install_update_skip_confirm'] = 'Biztosan ki szeretné hagyni ezt a frissítést?';
$lang['admin_install_update_skip_error'] = 'A frissítés kihagyása sikertelen volt.';
$lang['admin_install_update_skip_success'] = 'A frissítés sikeresen kihagyva.';
$lang['admin_install_update_success'] = 'A csomag sikeresen frissítve.';
$lang['admin_install_upload_tip'] = 'Telepítsen csomagot annak <b>.zip</b> fájljának ide történő feltöltésével.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'A régi biztonsági mentési fájlok törlése sikertelen.';
$lang['admin_database_backup_clean_success'] = '%d biztonsági mentési fájl törölve. %d lemezterület felszabadítva.';
$lang['admin_database_backup_create'] = 'Biztonsági mentés létrehozása';
$lang['admin_database_backup_create_confirm'] = 'Biztosan létre akar hozni most egy biztonsági mentést?';
$lang['admin_database_backup_create_error'] = 'A biztonsági mentési fájl létrehozása sikertelen. Győződjön meg róla, hogy a <b>%s</b> mappa írható.';
$lang['admin_database_backup_create_success'] = 'Az adatbázis biztonsági mentési fájlja <b>%s</b> sikeresen létrehozva.';
$lang['admin_database_backup_delete_confirm'] = 'Biztosan törölni szeretné ezeket a biztonsági mentési fájlokat?';
$lang['admin_database_backup_delete_error'] = 'A kiválasztott biztonsági mentési fájlok törlése sikertelen.';
$lang['admin_database_backup_delete_success'] = 'A biztonsági mentési fájlok sikeresen törölve.';
$lang['admin_database_backup_download_error'] = 'A kiválasztott biztonsági mentési fájl letöltése sikertelen.';
$lang['admin_database_backup_download_success'] = 'A biztonsági mentési fájl sikeresen letöltve.';
$lang['admin_database_backup_lock_confirm'] = 'Biztosan zárolni szeretné ezeket a biztonsági mentési fájlokat?';
$lang['admin_database_backup_lock_error'] = 'A kiválasztott biztonsági mentési fájlok zárolása sikertelen.';
$lang['admin_database_backup_lock_success'] = 'A biztonsági mentési fájlok sikeresen zárolva.';
$lang['admin_database_backup_locked_error'] = 'A zárolt biztonsági mentési fájlok nem törölhetők.';
$lang['admin_database_backup_missing_error'] = 'A biztonsági mentési fájl nem található.';
$lang['admin_database_backup_unlock_confirm'] = 'Biztosan fel akarja oldani ezeknek a biztonsági mentési fájloknak a zárolását?';
$lang['admin_database_backup_unlock_error'] = 'A kiválasztott biztonsági mentési fájlok zárolásának feloldása sikertelen.';
$lang['admin_database_backup_unlock_success'] = 'A biztonsági mentési fájlok zárolása sikeresen feloldva.';
$lang['admin_database_prune'] = 'Tisztítás';
$lang['admin_database_prune_confirm'] = 'Biztosan tisztítani szeretné az adatbázist? Végrehajtás előtt biztonsági mentés készül.';
$lang['admin_database_prune_error'] = 'Az adatbázis tisztítása sikertelen.';
$lang['admin_database_prune_next'] = 'Következő tisztítás: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Az adatbázis sikeresen tisztítva.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Naplók törlése';
$lang['admin_logs_delete_confirm'] = 'Biztosan törölni szeretné a kiválasztott naplófájlokat?';
$lang['admin_logs_delete_error'] = 'A naplófájlok törlése sikertelen.';
$lang['admin_logs_delete_success'] = 'A naplófájlok sikeresen törölve.';
$lang['admin_logs_error_disabled'] = 'A naplózás jelenleg nincs engedélyezve.';
$lang['admin_logs_error_empty'] = 'Nem találhatók naplók.';
$lang['admin_logs_error_missing'] = 'Vagy a naplófájl nem található, vagy üres volt.';
$lang['admin_logs_tip'] = 'A naplózás nagyon gyorsan hatalmas fájlokat hozhat létre. Élő oldalak esetén gondolja át a régiek törlését.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Biztosan törölni szeretné a kiválasztott e-maileket?';
$lang['admin_emails_delete_error'] = 'A kiválasztott e-mailek törlése sikertelen.';
$lang['admin_emails_delete_success'] = 'A kiválasztott e-mailek sikeresen törölve.';
$lang['admin_emails_email_from'] = 'Feladó';
$lang['admin_emails_mail_queue'] = 'Levél sor';
$lang['admin_emails_mailer'] = 'Tömeges levél';
$lang['admin_emails_search'] = 'E-mailek keresése tárgy vagy tartalom alapján...';
$lang['admin_emails_send_error'] = 'Az e-mail sorba állítása sikertelen. Kérjük, próbálja újra.';
$lang['admin_emails_send_none'] = 'Nincs felhasználó, aki megfelel a kiválasztott feltételeknek.';
$lang['admin_emails_send_success'] = 'Az e-mail sorba állítva és hamarosan elküldésre kerül.';
$lang['admin_emails_send_to_banned'] = 'Küldés kitiltott felhasználóknak.';
$lang['admin_emails_send_to_deleted'] = 'Küldés törölt felhasználóknak.';
$lang['admin_emails_send_to_disabled'] = 'Küldés inaktív felhasználóknak.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Felhasználó hozzáadása';
$lang['admin_users_all_users'] = 'Összes felhasználó';
$lang['admin_users_ban_confirm'] = 'Biztosan ki szeretné tiltani a kiválasztott felhasználókat?';
$lang['admin_users_ban_error'] = 'Nem sikerült kitiltani a kiválasztott felhasználókat.';
$lang['admin_users_ban_success'] = 'A kiválasztott felhasználók sikeresen kitiltva.';
$lang['admin_users_delete_confirm'] = 'Biztosan törölni szeretné a kiválasztott felhasználókat?';
$lang['admin_users_delete_error'] = 'Nem sikerült törölni a kiválasztott felhasználókat.';
$lang['admin_users_delete_success'] = 'A kiválasztott felhasználók sikeresen törölve.';
$lang['admin_users_disable_confirm'] = 'Biztosan le szeretné tiltani a kiválasztott felhasználókat?';
$lang['admin_users_disable_error'] = 'Nem sikerült letiltani a kiválasztott felhasználókat.';
$lang['admin_users_disable_success'] = 'A kiválasztott felhasználók sikeresen letiltva.';
$lang['admin_users_edit'] = 'Felhasználó szerkesztése';
$lang['admin_users_edit_error'] = 'A felhasználó frissítése sikertelen.';
$lang['admin_users_edit_success'] = 'A felhasználó sikeresen frissítve.';
$lang['admin_users_enable_confirm'] = 'Biztosan engedélyezni szeretné a kiválasztott felhasználókat?';
$lang['admin_users_enable_error'] = 'Nem sikerült engedélyezni a kiválasztott felhasználókat.';
$lang['admin_users_enable_success'] = 'A kiválasztott felhasználók sikeresen engedélyezve.';
$lang['admin_users_groups'] = 'Csoportok';
$lang['admin_users_lock_confirm'] = 'Biztosan zárolni szeretné a kiválasztott felhasználókat?';
$lang['admin_users_lock_error'] = 'A kiválasztott felhasználók zárolása sikertelen.';
$lang['admin_users_lock_success'] = 'A kiválasztott felhasználók sikeresen zárolva.';
$lang['admin_users_logged'] = 'Bejelentkezett felhasználók';
$lang['admin_users_manage'] = 'Felhasználók kezelése';
$lang['admin_users_remove_confirm'] = 'Biztosan véglegesen törölni szeretné a kiválasztott felhasználókat és az összes adatukat?';
$lang['admin_users_remove_error'] = 'Nem sikerült véglegesen törölni a kiválasztott felhasználókat és az összes adatukat.';
$lang['admin_users_remove_success'] = 'A kiválasztott felhasználók és az összes adatuk sikeresen törölve.';
$lang['admin_users_restore_confirm'] = 'Biztosan vissza szeretné állítani a kiválasztott felhasználókat?';
$lang['admin_users_restore_error'] = 'Nem sikerült visszaállítani a kiválasztott felhasználókat.';
$lang['admin_users_restore_success'] = 'A kiválasztott felhasználók sikeresen visszaállítva.';
$lang['admin_users_search'] = 'Keresés név, felhasználónév vagy e-mail szerint...';
$lang['admin_users_unban_confirm'] = 'Biztosan fel akarja oldani ennek a felhasználónak a kitiltását?';
$lang['admin_users_unban_error'] = 'Nem sikerült feloldani a kiválasztott felhasználók kitiltását.';
$lang['admin_users_unban_success'] = 'A kiválasztott felhasználók kitiltása sikeresen feloldva.';
$lang['admin_users_unlock_confirm'] = 'Biztosan feloldja a kiválasztott felhasználók zárolását?';
$lang['admin_users_unlock_error'] = 'A kiválasztott felhasználók zárolásának feloldása sikertelen.';
$lang['admin_users_unlock_success'] = 'A kiválasztott felhasználók zárolása sikeresen feloldva.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Naplók törlése';
$lang['admin_reports_clear_confirm'] = 'Biztosan törölni szeretné a műveletek naplóját?';
$lang['admin_reports_clear_error'] = 'A műveletek naplójának törlése sikertelen.';
$lang['admin_reports_clear_success'] = 'A műveletek naplója sikeresen törölve.';
$lang['admin_reports_latest_actions'] = 'Legutóbbi műveletek';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Biztosan törölni szeretné a kiválasztott fájlokat?';
$lang['admin_media_delete_error'] = 'A fájlok törlése sikertelen.';
$lang['admin_media_delete_success'] = 'A fájlok sikeresen törölve.';
$lang['admin_media_file_delete_error'] = 'A fájl törlése sikertelen.';
$lang['admin_media_file_delete_success'] = 'A fájl sikeresen törölve.';
$lang['admin_media_file_update_error'] = 'A fájl frissítése sikertelen.';
$lang['admin_media_file_update_success'] = 'A fájl sikeresen frissítve.';
$lang['admin_media_search'] = 'Keresés név, leírás vagy fájlnév alapján...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Nincs aktív modul.} other{<b>#</b> / <b>%s</b> modul aktív.}';
$lang['admin_modules_add'] = 'Modul hozzáadása';
$lang['admin_modules_delete_confirm'] = 'Biztosan törölni szeretné a modult: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'A modul törlése sikertelen.';
$lang['admin_modules_delete_error_active'] = 'Az aktív modulok nem törölhetők.';
$lang['admin_modules_delete_success'] = 'A modul sikeresen törölve.';
$lang['admin_modules_disable_all_confirm'] = 'Biztosan le akarja tiltani az összes modult?';
$lang['admin_modules_disable_all_error'] = 'Az összes modul letiltása sikertelen.';
$lang['admin_modules_disable_all_success'] = 'Az összes modul sikeresen letiltva.';
$lang['admin_modules_disable_confirm'] = 'Biztosan le akarja tiltani a modult: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'A modul deaktiválása sikertelen.';
$lang['admin_modules_disable_success'] = 'A modul sikeresen deaktiválva.';
$lang['admin_modules_enable_all_confirm'] = 'Biztosan engedélyezni szeretné az összes modult?';
$lang['admin_modules_enable_all_error'] = 'Az összes modul engedélyezése sikertelen.';
$lang['admin_modules_enable_all_success'] = 'Az összes modul sikeresen engedélyezve.';
$lang['admin_modules_enable_confirm'] = 'Biztosan engedélyezni szeretné a modult: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'A modul aktiválása sikertelen.';
$lang['admin_modules_enable_success'] = 'A modul sikeresen aktiválva.';
$lang['admin_modules_global'] = 'Globális modul (megosztott)';
$lang['admin_modules_install_confirm'] = 'Biztosan telepíteni szeretné a(z) modult: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'A modul telepítése sikertelen volt.';
$lang['admin_modules_install_success'] = 'A modul sikeresen telepítve.';
$lang['admin_modules_install_tip'] = 'A modulok új funkciókat és funkcionalitást adnak az oldalához. Böngésszen az elérhető modulok között a <a href="%s" target="_blank" rel="noopener">modul könyvtárban</a> vagy töltsön fel egyet <b>.zip</b> csomagként.';
$lang['admin_modules_update_confirm'] = 'Biztosan frissíteni szeretné ezt a modult?';
$lang['admin_modules_update_error'] = 'A modul frissítése sikertelen volt.';
$lang['admin_modules_update_success'] = 'A modul sikeresen frissítve.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Nincs aktív bővítmény.} other{<b>#</b> / <b>%s</b> bővítmény aktív.}';
$lang['admin_plugins_add'] = 'Bővítmény hozzáadása';
$lang['admin_plugins_delete_confirm'] = 'Biztosan törölni szeretné a bővítményt: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'A bővítmény törlése sikertelen.';
$lang['admin_plugins_delete_error_active'] = 'Az aktív bővítmények nem törölhetők.';
$lang['admin_plugins_delete_success'] = 'A bővítmény sikeresen törölve.';
$lang['admin_plugins_disable_all_confirm'] = 'Biztosan le akarja tiltani az összes bővítményt?';
$lang['admin_plugins_disable_all_error'] = 'Az összes bővítmény letiltása sikertelen.';
$lang['admin_plugins_disable_all_success'] = 'Az összes bővítmény sikeresen letiltva.';
$lang['admin_plugins_disable_confirm'] = 'Biztosan le akarja tiltani a bővítményt: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'A bővítmény deaktiválása sikertelen.';
$lang['admin_plugins_disable_success'] = 'A bővítmény sikeresen deaktiválva.';
$lang['admin_plugins_enable_all_confirm'] = 'Biztosan engedélyezni szeretné az összes bővítményt?';
$lang['admin_plugins_enable_all_error'] = 'Az összes bővítmény engedélyezése sikertelen.';
$lang['admin_plugins_enable_all_success'] = 'Az összes bővítmény sikeresen engedélyezve.';
$lang['admin_plugins_enable_confirm'] = 'Biztosan engedélyezni szeretné a bővítményt: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'A bővítmény aktiválása sikertelen.';
$lang['admin_plugins_enable_success'] = 'A bővítmény sikeresen aktiválva.';
$lang['admin_plugins_global'] = 'Globális bővítmény (megosztott)';
$lang['admin_plugins_install_confirm'] = 'Biztosan telepíteni szeretné a(z) bővítményt: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'A bővítmény telepítése sikertelen volt.';
$lang['admin_plugins_install_success'] = 'A bővítmény sikeresen telepítve.';
$lang['admin_plugins_install_tip'] = 'A bővítmények kiterjesztik a meglévő funkciókat extra opciókkal vagy integrációkkal. Telepítse a <a href="%s" target="_blank" rel="noopener">bővítmény könyvtárból</a> vagy töltsön fel egy <b>.zip</b> fájlt.';
$lang['admin_plugins_update_confirm'] = 'Biztosan frissíteni szeretné ezt a bővítményt?';
$lang['admin_plugins_update_error'] = 'A bővítmény frissítése sikertelen volt.';
$lang['admin_plugins_update_success'] = 'A bővítmény sikeresen frissítve.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Téma hozzáadása';
$lang['admin_themes_delete_confirm'] = 'Biztosan törölni szeretné a témát: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'A téma törlése sikertelen.';
$lang['admin_themes_delete_error_active'] = 'Nem törölheti a jelenleg aktív témát.';
$lang['admin_themes_delete_success'] = 'A téma sikeresen törölve.';
$lang['admin_themes_disable_confirm'] = 'Biztosan le szeretné tiltani a témát: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'A téma letiltása nem sikerült.';
$lang['admin_themes_disable_error_active'] = 'Az aktív téma nem tiltható le.';
$lang['admin_themes_disable_success'] = 'A téma sikeresen le lett tiltva.';
$lang['admin_themes_enable_confirm'] = 'Biztosan engedélyezni szeretné a témát: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'A téma aktiválása sikertelen.';
$lang['admin_themes_enable_success'] = 'A téma sikeresen aktiválva.';
$lang['admin_themes_install_confirm'] = 'Biztosan telepíteni szeretné a(z) témát: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'A téma telepítése sikertelen volt.';
$lang['admin_themes_install_success'] = 'A téma sikeresen telepítve.';
$lang['admin_themes_install_tip'] = 'A témák megváltoztatják az oldal megjelenését és elrendezését. Válasszon a <a href="%s" target="_blank" rel="noopener">téma könyvtárból</a> vagy töltsön fel egy <b>.zip</b> fájlt a saját telepítéséhez.';
$lang['admin_themes_none_tip'] = 'Ez az alkalmazás téma nélkül fut. Telepítsen egyet a nyilvános felület testreszabásához.';
$lang['admin_themes_update_confirm'] = 'Biztosan frissíteni szeretné ezt a témát?';
$lang['admin_themes_update_error'] = 'A téma frissítése sikertelen volt.';
$lang['admin_themes_update_success'] = 'A téma sikeresen frissítve.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menük';
$lang['admin_menus_assign_error'] = 'A menü helyek frissítése sikertelen.';
$lang['admin_menus_assign_success'] = 'A menü helyek sikeresen frissítve.';
$lang['admin_menus_header'] = 'Elérhető <b>%s</b> menühely.';
$lang['admin_menus_location'] = 'Hely';
$lang['admin_menus_locations'] = 'Menü helyek';
$lang['admin_menus_manage'] = 'Menük kezelése';
$lang['admin_menus_menu'] = 'Hozzárendelt menü';
$lang['admin_menus_none'] = '&#151; Nincs &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Nyelv hozzáadása';
$lang['admin_languages_default_confirm'] = 'Biztosan ezt a nyelvet szeretné az oldal alapértelmezett nyelvévé tenni?';
$lang['admin_languages_default_error'] = 'Az alapértelmezett nyelv megváltoztatása sikertelen.';
$lang['admin_languages_default_error_nochange'] = 'Ez a nyelv már az alapértelmezett.';
$lang['admin_languages_default_success'] = 'Az alapértelmezett nyelv sikeresen megváltoztatva.';
$lang['admin_languages_delete_confirm'] = 'Biztosan törölni szeretné a nyelvet: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'A nyelv törlése sikertelen volt.';
$lang['admin_languages_delete_error_active'] = 'Az aktív nyelvek nem törölhetők.';
$lang['admin_languages_delete_error_default'] = 'Az alapértelmezett nyelv nem törölhető.';
$lang['admin_languages_delete_success'] = 'A nyelv sikeresen törölve.';
$lang['admin_languages_disable_all_confirm'] = 'Biztosan le akarja tiltani az összes nyelvet?';
$lang['admin_languages_disable_all_error'] = 'Az összes nyelv letiltása sikertelen.';
$lang['admin_languages_disable_all_success'] = 'Az összes nyelv sikeresen letiltva.';
$lang['admin_languages_disable_confirm'] = 'Biztosan le akarja tiltani a nyelvet: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'A nyelv letiltása sikertelen.';
$lang['admin_languages_disable_error_default'] = 'Az alapértelmezett nyelv nem tiltható le.';
$lang['admin_languages_disable_error_nochange'] = 'Ez a nyelv már le van tiltva.';
$lang['admin_languages_disable_success'] = 'A nyelv sikeresen letiltva.';
$lang['admin_languages_enable_all_confirm'] = 'Biztosan engedélyezni szeretné az összes nyelvet?';
$lang['admin_languages_enable_all_error'] = 'Az összes nyelv engedélyezése sikertelen.';
$lang['admin_languages_enable_all_success'] = 'Az összes nyelv sikeresen engedélyezve.';
$lang['admin_languages_enable_confirm'] = 'Biztosan engedélyezni szeretné a nyelvet: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'A nyelv engedélyezése sikertelen.';
$lang['admin_languages_enable_error_nochange'] = 'Ez a nyelv már engedélyezve van.';
$lang['admin_languages_enable_success'] = 'A nyelv sikeresen engedélyezve.';
$lang['admin_languages_install_confirm'] = 'Biztosan telepíteni szeretné a(z) nyelvet: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'A nyelv telepítése sikertelen volt.';
$lang['admin_languages_install_success'] = 'A nyelv sikeresen telepítve.';
$lang['admin_languages_install_tip'] = 'A nyelvek fordításokat adnak a webhely felületéhez és tartalmához. Böngéssze az elérhető nyelveket a <a href="%s" target="_blank" rel="noopener">nyelvi könyvtárban</a>, vagy töltsön fel egy <b>.zip</b> csomagot saját nyelve telepítéséhez.';
$lang['admin_languages_tip'] = 'Engedélyezze, tiltsa le és állítsa be az oldal alapértelmezett nyelvét. Az engedélyezett nyelvek elérhetők az oldal látogatói számára.';
$lang['admin_languages_update_confirm'] = 'Biztosan frissíteni szeretné ezt a nyelvet?';
$lang['admin_languages_update_error'] = 'A nyelv frissítése sikertelen volt.';
$lang['admin_languages_update_success'] = 'A nyelv sikeresen frissítve.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'A csomag már létezik.';
$lang['package_archive_download_failed'] = 'A csomagarchívum letöltése sikertelen.';
$lang['package_backup_create_error'] = 'A csomag biztonsági mentésének létrehozása sikertelen.';
$lang['package_backup_dir_failed'] = 'Nem sikerült létrehozni a biztonsági mentés könyvtárát: %s';
$lang['package_backup_missing'] = 'A biztonsági mentés fájl nem létezik.';
$lang['package_backup_path_error'] = 'A biztonsági mentés fájl útvonalát nem sikerült feloldani.';
$lang['package_backup_request_invalid'] = 'Érvénytelen biztonsági mentési kérés.';
$lang['package_backup_restore_error'] = 'A csomag biztonsági mentésének visszaállítása sikertelen.';
$lang['package_catalog_type_unknown'] = 'Ismeretlen katalógustípus.';
$lang['package_checksum_error'] = 'A csomag ellenőrzőösszegének (checksum) ellenőrzése sikertelen.';
$lang['package_copy_files_error'] = 'A csomagfájlok célállomásra történő másolása sikertelen.';
$lang['package_copy_updates_error'] = 'A frissítési fájlok célállomásra történő másolása sikertelen.';
$lang['package_dest_dir_failed'] = 'Nem sikerült létrehozni a célkönyvtárat: %s';
$lang['package_destination_error'] = 'A csomag célhelyét nem sikerült feloldani.';
$lang['package_download_dir_failed'] = 'Nem sikerült létrehozni a letöltési könyvtárat: %s';
$lang['package_download_empty'] = 'A csomag letöltése üres választ adott vissza.';
$lang['package_download_request_invalid'] = 'Érvénytelen csomagletöltési kérés.';
$lang['package_extract_failed'] = 'A ZIP fájl kibontása sikertelen: %s';
$lang['package_invalid_lang_files'] = 'Érvénytelen nyelv — az alkalmazáshoz szükséges nyelvi fájlok hiányoznak.';
$lang['package_invalid_lang_structure'] = 'Érvénytelen nyelv — az admin és/vagy ci3 könyvtárak hiányoznak.';
$lang['package_invalid_missing_info'] = 'Érvénytelen %s: az "info.php" hiányzik.';
$lang['package_invalid_module_structure'] = 'Érvénytelen modul — a szükséges config és/vagy controllers könyvtárak hiányoznak.';
$lang['package_invalid_plugin_boot'] = 'Érvénytelen bővítmény (plugin) — a "boot.php" hiányzik.';
$lang['package_invalid_plugin_contents'] = 'Érvénytelen bővítmény (plugin) — a bővítmények nem tartalmazhatnak vezérlőket vagy nézeteket (views).';
$lang['package_invalid_theme_boot'] = 'Érvénytelen téma — a "boot.php" hiányzik.';
$lang['package_invalid_theme_views'] = 'Érvénytelen téma — a views könyvtár hiányzik.';
$lang['package_no_root_dir'] = 'A csomag nem tartalmaz gyökérkönyvtárat.';
$lang['package_not_downloadable'] = 'A csomag nem tölthető le nyilvánosan.';
$lang['package_not_in_registry'] = 'A csomag nem érhető el a nyilvános regiszterben.';
$lang['package_request_invalid'] = 'Érvénytelen csomagkérés.';
$lang['package_rollback_request_invalid'] = 'Érvénytelen visszagörgetési (rollback) kérés.';
$lang['package_root_mismatch'] = 'A csomagarchívum gyökérkönyvtára nem egyezik ezzel: %s';
$lang['package_single_root_required'] = 'A csomagnak pontosan egy gyökérkönyvtárat kell tartalmaznia.';
$lang['package_source_error'] = 'A csomag forrását nem sikerült feloldani.';
$lang['package_system_core_restricted'] = 'A rendszerkomponensek nem telepíthetők csomagként.';
$lang['package_temp_dir_failed'] = 'Nem sikerült létrehozni az ideiglenes könyvtárat: %s';
$lang['package_type_unknown'] = 'Ismeretlen csomagtípus.';
$lang['package_update_request_invalid'] = 'Érvénytelen csomagfrissítési kérés.';
$lang['package_update_root_mismatch'] = 'A frissítési archívum gyökérkönyvtára nem egyezik ezzel: %s.';
$lang['package_upload_dir_failed'] = 'Nem sikerült létrehozni a feltöltési könyvtárat: %s';
$lang['package_url_invalid'] = 'Érvénytelen csomagterjesztési URL.';
$lang['package_write_failed'] = 'Nem sikerült a csomag kiírása ide: %s';
$lang['package_zip_not_found'] = 'A csomag ZIP fájl nem létezik: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Új frissítések érhetők el!';
$lang['update_backup_error'] = 'Nem sikerült biztonsági másolatot készíteni a meglévő csomagról. A frissítés megszakadt.';
$lang['update_check_disabled'] = 'Az automatikus frissítés-ellenőrzés le van tiltva. Engedélyezze őket a frissítések megtekintéséhez.';
$lang['update_check_error'] = 'Jelenleg nem lehet futtatni a frissítés-ellenőrzést.';
$lang['update_check_success'] = 'A frissítés-ellenőrzés sikeresen befejeződött.';
$lang['update_install_error'] = 'A csomagot nem sikerült telepíteni. A korábbi verzió megmaradt.';
$lang['update_install_success'] = 'A csomag sikeresen frissítve lett a legújabb verzióra.';
$lang['update_interval_3days'] = '3 naponta';
$lang['update_interval_biweekly'] = '2 hetente';
$lang['update_interval_daily'] = 'Minden nap';
$lang['update_interval_monthly'] = 'Havonta egyszer';
$lang['update_interval_weekly'] = 'Hetente egyszer';
$lang['update_not_available'] = 'A weboldala naprakész.';
$lang['update_rollback_confirm'] = 'Biztosan vissza szeretné állítani az előző verziót?';
$lang['update_rollback_error'] = 'Nem sikerült visszaállítani a korábbi verziót. Manuális beavatkozásra lehet szükség.';
$lang['update_rollback_success'] = 'A korábbi verzió sikeresen visszaállítva.';
$lang['updates_available'] = 'Elérhető frissítések';
$lang['updates_check_now'] = 'Ellenőrzés most';
$lang['updates_check_now_confirm'] = 'Biztosan ellenőrizni szeretné a frissítéseket most?';
$lang['updates_current_version'] = 'Jelenlegi verzió';
$lang['updates_enable'] = 'Frissítések engedélyezése';
$lang['updates_last_check'] = 'Utolsó ellenőrzés: %s';
$lang['updates_latest_version'] = 'Legújabb verzió';
$lang['updates_next_check'] = 'Következő ütemezett ellenőrzés: %s';
$lang['updates_previous_version'] = 'Korábbi verzió';
$lang['updates_recent'] = 'Nemrég frissítve';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'A megadott IP-cím letiltása sikertelen.';
$lang['admin_firewall_ban_success'] = 'Az IP-cím sikeresen letiltásra került.';
$lang['admin_firewall_block_ip'] = 'IP-cím letiltása';
$lang['admin_firewall_delete_confirm'] = 'Biztosan feloldja a kiválasztott IP-címek tiltását?';
$lang['admin_firewall_delete_error'] = 'A kiválasztott IP-címek tiltásának feloldása sikertelen.';
$lang['admin_firewall_delete_success'] = 'A kiválasztott IP-címek tiltása sikeresen feloldásra került.';
$lang['admin_firewall_duration'] = 'Tiltás időtartama';
$lang['admin_firewall_permanent'] = 'Állandó';
$lang['admin_firewall_reason'] = 'Tiltás oka';
$lang['admin_firewall_tip'] = 'Tekintse meg és kezelje a tűzfal által ismétlődő jogsértések vagy gyanús tevékenység miatt letiltott IP-címeket.';

// Settings
$lang['404_ban_duration'] = '404 letiltás időtartama';
$lang['404_threshold'] = '404 hibák száma';
$lang['uri_ban_duration'] = 'URI-letiltás időtartama';
$lang['uri_strike_threshold'] = 'URI-támadási határ';
