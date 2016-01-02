<?php
/***************************************************************************
 *
 *   NewPoints plugin (/inc/languages/admin/newpoints.lang.php)
 *	 Author: Pirata Nervo
 *   Copyright: © 2014 Pirata Nervo
 *
 *   Website: http://www.mybb-plugins.com
 *
 *   NewPoints plugin for MyBB - A complex but efficient points system for MyBB.
 *
 ***************************************************************************/

/****************************************************************************
	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
****************************************************************************/

$l['newpoints'] = "NewPoints";
$l['newpoints_submit_button'] = 'Invia';
$l['newpoints_reset_button'] = 'Resetta';
$l['newpoints_error'] = 'Si è verificato un errore.';
$l['newpoints_continue_button'] = 'Continua';
$l['newpoints_click_continue'] = 'Clicca continua per procedere.';
$l['newpoints_delete'] = 'Cancella';
$l['newpoints_missing_fields'] = 'C è uno o più campi mancanti.';
$l['newpoints_edit'] = 'Modifica';
$l['newpoints_task_ran'] = 'Backup NewPoints task ran';

///////////////// Plugins
$l['newpoints_plugins'] = 'Plugins';
$l['newpoints_plugins_description'] = 'Qui puoi gestire il plugin NewPoints.';

///////////////// Settings
$l['newpoints_settings'] = 'Impostazioni';
$l['newpoints_settings_description'] = 'Qui puoi gestire il plugin NewPoints.';
$l['newpoints_settings_change'] = 'Cambia';
$l['newpoints_settings_change_description'] = 'Cambia impostazioni.';
$l['newpoints_settings_main'] = 'Impostazioni principali';
$l['newpoints_settings_main_description'] = 'These settings come with NewPoints by default.';
$l['newpoints_settings_income'] = 'Impostazioni reddito';
$l['newpoints_settings_income_description'] = 'Queste impostazioni di default sono legati al reddito generato da invio di post,voti nei sondaggi etc...';
$l['newpoints_select_plugin'] = 'Devi selezionare un gruppo.';

///////////////// Log
$l['newpoints_log'] = 'Log';
$l['newpoints_log_description'] = 'Gestire le voci di registro.';
$l['newpoints_log_action'] = 'Azione';
$l['newpoints_log_data'] = 'Dati';
$l['newpoints_log_user'] = 'Utente';
$l['newpoints_log_date'] = 'Data';
$l['newpoints_log_options'] = 'Opzionis';
$l['newpoints_no_log_entries'] = 'Impossibile trovare voci di registro.';
$l['newpoints_log_entries'] = 'Voci di registro';
$l['newpoints_log_notice'] = 'Nota : alcune statistiche sono basate le voci di registro.';
$l['newpoints_log_deleteconfirm'] = 'Sei sicuro di voler cancellare la voce di registro selezionata ?';
$l['newpoints_log_invalid'] = 'Voce di registro non valida.';
$l['newpoints_log_deleted'] = 'Voce di registro eliminata con successo.';
$l['newpoints_log_prune'] = 'Riduci voci di registro';
$l['newpoints_older_than'] = 'Older than';
$l['newpoints_older_than_desc'] = 'Prune log entries older than the number of days you enter.';
$l['newpoints_log_pruned'] = 'Voci di registro ridotte con successo.';
$l['newpoints_log_pruneconfirm'] =' Sei sicuro di voler ridurre le voci di registro?';
$l['newpoints_invalid_username'] = 'Username selezionato non è valido.';
$l['newpoints_log_filter'] = 'Filtri';
$l['newpoints_filter_username'] = 'Username';
$l['newpoints_filter_username_desc'] = 'Immettere un username per filtrare. Questo può essere vuoto.';
$l['newpoints_filter_actions'] = 'Azioni';
$l['newpoints_filter_actions_desc'] = 'Seleziona le azioni che vuoi filtrare.';
$l['newpoints_select_actions'] = 'Seleziona azioni';
$l['newpoints_filter'] = 'Filtri abilitati:<br />{1}';
$l['newpoints_username'] = 'Username';

///////////////// Maintenance
$l['newpoints_maintenance'] = 'Manutenzione';
$l['newpoints_maintenance_description'] = 'Qui si possono trovare strumenti di manutenzione.';
$l['newpoints_recount'] = 'Ricontare punti';
$l['newpoints_recount_per_page'] = 'Per pagina';
$l['newpoints_recount_per_page_desc'] = 'Inserire il numero di utenti che si desidera ricontare per pagina.<br />Riconta si basa sulle impostazioni di reddito.';
$l['newpoints_reset'] = 'Resetta punti';
$l['newpoints_reset_per_page'] = 'Per pagina';
$l['newpoints_reset_per_page_desc'] = 'Immettere il numero di utenti che si desidera resettare per pagina.';
$l['newpoints_recounted'] = 'Hai ricontato con successo i soldi degli utenti.';
$l['newpoints_reset_action'] = 'Hai resettato con successo i soldi degli utenti.';
$l['newpoints_reset_done'] = 'Hai resettato con successo i soldi degli utenti.';
$l['newpoints_recount_done'] = 'Punti ricontati';
$l['newpoints_recountconfirm'] = 'Sei sicuro di voler ricontare tutti i punti?';
$l['newpoints_reset_points'] = 'Punti';
$l['newpoints_reset_points_desc'] = 'Numero di tutti i punti che saranno ripristinati.';
$l['newpoints_edituser'] = 'Modifica utente';
$l['newpoints_edituser_uid'] = 'ID utente';
$l['newpoints_edituser_uid_desc'] = 'Inserire ID utente che si desidera modificare.';
$l['newpoints_reconstruct'] = 'Ricostruisci Templates';
$l['newpoints_reconstruct_title'] = 'Ricostruisci templates';
$l['newpoints_reconstruct_desc'] = 'The templates: postbit, postbit_classic and member_profile will be edited in order to fix variable duplicates.';
$l['newpoints_maintenance_edituser'] = 'Modifica utente';
$l['newpoints_maintenance_edituser_desc'] = 'Modifica i punti dell\'utente.';
$l['newpoints_invalid_user'] = 'Utente non valido.';
$l['newpoints_edituser_points'] = 'Modifica punti';
$l['newpoints_edituser_points_desc'] = 'Inserire il numero di punti che si desidera dare all\'utente.';
$l['newpoints_user_edited'] = 'L\'utente selezionato è stato modificato con successo.';
$l['newpoints_reconstruct_done'] = 'Templates ricostruito';
$l['newpoints_reconstructed'] = 'Hai ricostruito i templates con successo.';
$l['newpoints_reconstructconfirm'] = 'Sei sicuro di voler ricostruire i templates?';
$l['newpoints_resetconfirm'] = 'Sei sicuro di voler resettare tutti i soldi?';

///////////////// Stats
$l['newpoints_stats'] = 'Statistiche';
$l['newpoints_stats_description'] = 'Visualizza le statistiche del forum.';
$l['newpoints_stats_lastdonations'] = 'Ultima donazione';
$l['newpoints_error_gathering'] = 'Impossibile raccogliere i dati.';
$l['newpoints_stats_richest_users'] = 'Richieste utenti';
$l['newpoints_stats_from'] = 'Da';
$l['newpoints_stats_to'] = 'a';
$l['newpoints_stats_date'] = 'Data';
$l['newpoints_stats_user'] = 'Utente';
$l['newpoints_stats_points'] = 'Punti';
$l['newpoints_stats_amount'] = 'Importo';

///////////////// Forum Rules
$l['newpoints_forumrules'] = 'Regole del forum';
$l['newpoints_forumrules_description'] = 'Gestisci le regole del forum e le opzioni.';
$l['newpoints_forumrules_add'] = 'Aggiungi';
$l['newpoints_forumrules_add_description'] = 'Aggiungi nuova regola.';
$l['newpoints_forumrules_edit'] = 'Modifica';
$l['newpoints_forumrules_edit_description'] = 'Modifica una regola esistente.';
$l['newpoints_forumrules_delete'] = 'Cancella';
$l['newpoints_forumrules_title'] = 'Titolo del forum';
$l['newpoints_forumrules_name'] = 'Nome della regola';
$l['newpoints_forumrules_options'] = 'Opzioni';
$l['newpoints_forumrules_none'] = 'Impossibile trovare le regole.';
$l['newpoints_forumrules_rules'] = 'Regola forum';
$l['newpoints_forumrules_addrule'] = 'Aggiungi regola';
$l['newpoints_forumrules_editrule'] = 'Modifica regola';
$l['newpoints_forumrules_forum'] = 'Forum';
$l['newpoints_forumrules_forum_desc'] = 'Select the forum affected by this rule.';
$l['newpoints_forumrules_name_desc'] = 'Immetti un nome per la regola.';
$l['newpoints_forumrules_desc'] = 'Descrizione';
$l['newpoints_forumrules_desc_desc'] = 'Inserisci una descrizione per la regola.';
$l['newpoints_forumrules_minview'] = 'Minimo di punti da visualzzare';
$l['newpoints_forumrules_minview_desc'] = 'Inserisci il minimo di punti che serve per visualizzare questo forum.';
$l['newpoints_forumrules_minpost'] = 'Minimo di punti per post';
$l['newpoints_forumrules_minpost_desc'] = 'Inserisci il minimo di punti richiesti per creare un post o un thread nel forum selezionato.';
$l['newpoints_forumrules_rate'] = 'Income Rate';
$l['newpoints_forumrules_rate_desc'] = 'Enter the income rate for the selected forum. Default is 1';
$l['newpoints_forumrules_added'] = 'La nuova regola del forum è stata aggiunta con successo.';
$l['newpoints_select_forum'] = 'Seleziona un forum';
$l['newpoints_forumrules_notice'] = 'Note: forums without rules have an income rate of 1 and have no minimum points to view or post.';
$l['newpoints_forumrules_invalid'] = 'Regola non valida.';
$l['newpoints_forumrules_edited'] = 'La regola selezionata è stata modificata con successo';
$l['newpoints_forumrules_deleted'] = 'La regola selezionata è stata cancellata con successo';
$l['newpoints_forumrules_deleteconfirm'] = 'Sei sicura di voler cancellare la regola?';

///////////////// Group Rules
$l['newpoints_grouprules'] = 'Regole gruppo utenti';
$l['newpoints_grouprules_description'] = 'Gestisci le regole del gruppo utenti e le opzioni.';
$l['newpoints_grouprules_add'] = 'Aggiungi';
$l['newpoints_grouprules_add_description'] = 'Aggiungi nuova regola.';
$l['newpoints_grouprules_edit'] = 'Modifica';
$l['newpoints_grouprules_edit_description'] = 'Modifica regola esistente.';
$l['newpoints_grouprules_delete'] = 'Cancella';
$l['newpoints_grouprules_title'] = 'Titolo del gruppo';
$l['newpoints_grouprules_name'] = 'Nome regola';
$l['newpoints_grouprules_options'] = 'Opzioni';
$l['newpoints_grouprules_none'] = 'Impossibile trovare le regole.';
$l['newpoints_grouprules_rules'] = 'Regole gruppo';
$l['newpoints_grouprules_addrule'] = 'Aggiungi gruppo regole';
$l['newpoints_grouprules_editrule'] = 'Modifica gruppo regole';
$l['newpoints_grouprules_group'] = 'Gruppo utenti';
$l['newpoints_grouprules_group_desc'] = 'Select the group affected by this rule.';
$l['newpoints_grouprules_name_desc'] = 'Inserisci il nome della regola.';
$l['newpoints_grouprules_desc'] = 'Descrizione';
$l['newpoints_grouprules_desc_desc'] = 'Inserisci una descrizione per la regola.';
$l['newpoints_grouprules_rate'] = 'Income Rate';
$l['newpoints_grouprules_rate_desc'] = 'Enter the income rate for the selected group. Default is 1';
$l['newpoints_grouprules_added'] = 'La regola del nuovo gruppo utenti è stata aggiunta con successo.';
$l['newpoints_select_group'] = 'Seleziona un gruppo';
$l['newpoints_grouprules_notice'] = 'Note: groups without rules have an income rate of 1 and have do not have auto payments set.';
$l['newpoints_grouprules_invalid'] = 'Regola non valida.';
$l['newpoints_grouprules_edited'] = 'La regola selezionata è stata modificata con successo';
$l['newpoints_grouprules_deleted'] = 'La regola selezionata è stata cancellata con successo';
$l['newpoints_grouprules_deleteconfirm'] = 'Sei sicuro di voler cancellare la regola selezionata?';
$l['newpoints_grouprules_pointsearn'] = 'Punti da pagare';
$l['newpoints_grouprules_pointsearn_desc'] = 'Punti pagati per questo gruppo ogni X secondi (numero secondi si trovano in opzione in basso ).';
$l['newpoints_grouprules_period'] = 'Quante volte questo gruppo ha pagato';
$l['newpoints_grouprules_period_desc'] = 'Numero di secondi tra ogni pagamento a tutti gli utenti in cui <strong>primary</strong> group is this one.';

///////////////// Upgrades
$l['newpoints_upgrades'] = 'Aggiornamenti';
$l['newpoints_upgrades_description'] = 'Aggiornamenti NewPoints da qui.';
$l['newpoints_upgrades_name'] = 'Nome';
$l['newpoints_upgrades_run'] = 'Esegui';
$l['newpoints_upgrades_confirm_run'] = 'Sei sicuro di voler eseguire l\'aggiornamento del file?';
$l['newpoints_run'] = 'Esegui';
$l['newpoints_no_upgrades'] = 'Nessun aggiornamento.';
$l['newpoints_upgrades_notice'] = 'You should backup your database before running an upgrade script.<br /><small>Only run upgrade files if you\'re sure about what you\'re doing</small>';
$l['newpoints_upgrades_ran'] = 'Aggiornamento script eseguito con successo.';
$l['newpoints_upgrades_newversion'] = 'Nuova versione';

?>
