<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Rendszerfrissítések érhetők el';
$lang['emails_updates_available_message'] = <<<EOT
Helló,

Új rendszerfrissítések érkeztek a {site_anchor} webhelyre.

Ezek a frissítések biztonsági javításokat, teljesítményjavításokat vagy új funkciókat tartalmazhatnak.
Javasoljuk, hogy minél hamarabb tekintse át őket.

A rendelkezésre álló frissítéseket az adminisztrációs felületen tekintheti át és kezelheti:
{link}

Ha már áttekintette vagy alkalmazta a frissítéseket, további intézkedésre nincs szükség.

Ez egy automatikus rendszerüzenet, amelyet a {site_name} küldött.
Kérjük, ne válaszoljon erre az e-mailre.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Fiók aktiválása';
$lang['emails_account_activation_request_message'] = <<<EOT
Üdvözöljük {name},

Köszönjük, hogy regisztrált a {site_anchor} oldalon. A fiókja létrejött, de aktiválnia kell, mielőtt használhatná.

A fiók aktiválásához kattintson az alábbi linkre, vagy másolja be a böngészőjébe:
{link}

Üdvözlettel,
-- A {site_name} csapata.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Új aktiválási hivatkozás';
$lang['emails_account_activation_resend_message'] = <<<EOT
Üdvözöljük {name},

Nemrég új aktivációs linket kért a {site_anchor} oldalon, mert a fiókja nem volt aktív.
A fiók aktiválásához kattintson az alábbi linkre, vagy másolja be a böngészőjébe:
{link}

Ha Ön nem kérte ezt, nincs szükség további teendőkre.

Ez a művelet a következő IP címről történt: {ip_link}.

Üdvözlettel,
-- A {site_name} csapata.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Fiók aktiválva';
$lang['emails_account_activation_success_message'] = <<<EOT
Üdvözöljük {name},

A fiókja a {site_anchor} oldalon sikeresen aktiválva lett. Most már bármikor <a href="{login_url}" target="_blank" rel="noopener">bejelentkezhet</a>.

Reméljük, hogy élvezni fogja a tartózkodását, kérjük, fogadja tiszteletteljes üdvözletünket.

-- A {site_name} csapata.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Fiók jóváhagyásra vár';
$lang['emails_account_approval_pending_message'] = <<<EOT
Üdvözöljük {name},

Köszönjük, hogy csatlakozott hozzánk a {site_anchor} oldalon. A fiókja létrejött, de aktiválás előtt adminisztrátori jóváhagyásra szorul.
Őszintén elnézést kérünk ezért a fontos lépésért, de ez csak biztonsági okokból történik.

A fiókja jóváhagyása után azonnal kap egy megerősítő e-mailt.

Reméljük, hogy élvezni fogja tartózkodását, kérjük, fogadja tiszteletteljes üdvözletünket.

-- A {site_name} csapata.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Fiók jóváhagyva';
$lang['emails_account_approval_success_message'] = <<<EOT
Üdvözöljük {name},

Nagyszerű hír! Az Ön fiókja a {site_anchor} oldalon jóváhagyásra került.

Most már bejelentkezhet és azonnal elkezdheti használni a fiókját:
{link}

Örülünk, hogy velünk van.

-- A {site_name} csapata.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Fiók visszaállítva';
$lang['emails_account_restored_message'] = <<<EOT
Üdvözöljük {name},

Ez az e-mail megerősíti, hogy a fiókja a {site_anchor} oldalon sikeresen helyreállításra került.

Üdvözöljük újra és reméljük, hogy ezúttal élvezni fogja tartózkodását.

Üdvözlettel,
-- A {site_name} csapata.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Üdvözlünk a(z) {site_name} oldalon';
$lang['emails_account_welcome_message'] = <<<EOT
Üdvözöljük {name},

A legtöbb embernek valóban hosszú üdvözlő e-mail sorozata van, miután regisztrál az oldalukon.

Jó hír: mi nem vagyunk olyanok, mint a legtöbb ember.
De, mindenképpen szeretnénk üdvözölni, és köszönjük, hogy csatlakozott hozzánk a {site_anchor} oldalon.

Reméljük, hogy élvezni fogja tartózkodását, kérjük, fogadja tiszteletteljes üdvözletünket.

-- A {site_name} csapata.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'E-mail cím módosítási kérelem';
$lang['emails_email_change_request_message'] = <<<EOT
Üdvözöljük {name},

Ezt az e-mailt azért kapja, mert e-mail változtatási kérést kaptunk a {site_anchor} oldalon lévő fiókjához.

Ha folytatni szeretné, kattintson az alábbi linkre vagy másolja be a böngészőjébe:
{link}

Ha nem kért e-mail változtatást, nincs szükség további teendőkre.

Ez a művelet a következő IP címről történt: {ip_link}.

Üdvözlettel,
-- A {site_name} csapata.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'E-mail cím megváltoztatva';
$lang['emails_email_change_success_message'] = <<<EOT
Üdvözöljük {name},

Ez az e-mail megerősíti, hogy a {site_anchor} oldalon használt e-mail címe sikeresen megváltozott.

Ha nem Ön végezte ezt a műveletet, kérjük, lépjen velünk kapcsolatba a lehető leghamarabb a probléma megoldása érdekében.

Ez a művelet a következő IP címről történt: {ip_link}.

Üdvözlettel,
-- A {site_name} csapata.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Sikertelen bejelentkezési figyelmeztetés';
$lang['emails_login_alert_failure_message'] = <<<EOT
Üdvözöljük {name},

Valaki nemrég rossz jelszavakat használt, hogy megpróbáljon bejelentkezni a {site_name} fiókjába.

Szerver dátuma: {date}
Eszköz: {browser}, {platform}
IP cím: {ip_link}

Ha ez nem Ön volt, ne aggódjon, a bejelentkezési kísérlet nem sikerült.

Ha ez Ön volt és nem emlékszik a jelszavára, kattintson az alábbi linkre a visszaállításhoz:
{reset_link}

Ha problémája van a fiókjába való bejelentkezéssel, vegye fel a kapcsolatot a csapatunkkal vagy kérjen egykattintásos bejelentkezési linket.

-- {site_name} csapat.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Sikeres bejelentkezés értesítése';
$lang['emails_login_alert_success_message'] = <<<EOT
Üdvözöljük {name},

Ezt az e-mailt sikeres bejelentkezés után küldjük a {site_name} fiókjába.

Szerver dátuma: {date}
Eszköz: {browser}, {platform}
IP cím: {ip_link}

Ha Ön volt a bejelentkező, biztonságosan figyelmen kívül hagyhatja ezt az e-mailt.

Ha nem Ön jelentkezett be, kérjük, azonnal változtassa meg jelszavát fiókja biztonságáért.

Bármilyen segítségért, vegye fel a kapcsolatot támogató csapatunkkal.

-- {site_name} csapat
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Gyors bejelentkezési hivatkozás';
$lang['emails_login_magic_link_message'] = <<<EOT
Üdvözöljük {name},

Egykattintásos bejelentkezést kért a {site_anchor} oldalon lévő fiókjához.

Kattintson az alábbi linkre, vagy másolja be a böngészőjébe, és azonnal be lesz jelentkezve:
{link}

Ez a link 15 percen belül lejár. Ha Ön nem kérte ezt, kérjük, hagyja figyelmen kívül ezt az e-mailt.

Ez a művelet a következő IP címről történt: {ip_link}.

Üdvözlettel,
-- {site_name} csapat.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Kétfaktoros hitelesítés';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Üdvözöljük {name},

Az Ön kétfaktoros hitelesítési kódja: <strong>{code}</strong>

Bármikor kikapcsolhatja a kétfaktoros hitelesítést a fiókbeállításaiban.

Ez a művelet a következő IP címről történt: {ip_link}.

Üdvözlettel,
-- {site_name} csapat.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Jelszó-visszaállítási kérelem';
$lang['emails_password_change_request_message'] = <<<EOT
Üdvözöljük {name},

Ezt az e-mailt azért kapja, mert jelszó-visszaállítási kérést kaptunk a {site_anchor} oldalon lévő fiókjához.

Ha folytatni szeretné, kattintson az alábbi linkre vagy másolja be a böngészőjébe:
{link}

Ha nem kért jelszó-visszaállítást, nincs szükség további teendőkre.

Ez a kérés a következő IP címről érkezett: {ip_link}.

Üdvözlettel,
-- {site_name} csapat.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Jelszó sikeresen megváltoztatva';
$lang['emails_password_change_success_message'] = <<<EOT
Üdvözöljük {name},

Ez az e-mail megerősíti, hogy a jelszava a {site_anchor} oldalon sikeresen megváltozott. Most már be tud <a href="{login_url}" target="_blank" rel="noopener">jelentkezni</a> az új jelszóval.

Ha Ön nem végezte ezt a műveletet, kérjük, lépjen velünk kapcsolatba a lehető leghamarabb a probléma megoldása érdekében.

Ez a művelet a következő IP címről történt: {ip_link}.

Üdvözlettel,
-- {site_name} csapat.
EOT;
