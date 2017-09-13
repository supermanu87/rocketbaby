<?php
$_['config_secure'] = 0;
$_['config_start_filename'] = 'analyze.ok';
$_['config_log_filename'] = 'analyzeLog'.date("YmdHi").'.txt';
$_['config_export_log_filename'] = 'exportLog'.date("YmdHi", strtotime('+2 hours')).'.txt';
$_['config_export_time'] = date("YmdHi", strtotime('+2 hours'));
$_['config_export_filename'] = 'dashboard_'.$_['config_export_time'].'.xlsx';
$_['config_export_stk_filename'] = 'stk_dashboard_'.$_['config_export_time'].'.xlsx';
$_['config_export_cambi'] = 'cambi_'.$_['config_export_time'].'.xlsx';
$_['config_export_dbpo'] = 'dbpo_'.$_['config_export_time'].'.xlsx';
$_['config_error_log'] = 1;
$_['config_import_filetypes'] = 'xlsx|csv';
$_['config_number_delimiter'] = '_';
$_['config_split_delimiter'] = '_';
$_['config_csv_delimiter'] = '|';
$_['config_db_dashboard'] = 'dashboard';
$_['config_db_stk_dashboard'] = 'stk_dashboard';
$_['config_db_input_file'] = 'input_file';
$_['config_db_payment_method'] = 'payment_method';
$_['config_db_vendor'] = 'vendor';
$_['config_db_cambi'] = 'cambi';
$_['config_db_shopify'] = 'shopify';
$_['config_db_spe'] = 'spe';
$_['config_db_simfdb'] = 'simfdb';
$_['config_db_pro'] = 'pro';
$_['config_db_ric'] = 'ric';
$_['config_db_cancellati'] = 'cancellati';
$_['config_db_soldout'] = 'soldout';
$_['config_db_dashboard_files'] = 'dashboard_files';
$_['config_db_stk_dashboard_files'] = 'stk_dashboard_files';
$_['config_db_tables'] = array($_['config_db_dashboard'], $_['config_db_cambi'], $_['config_db_shopify'], $_['config_db_spe'], $_['config_db_simfdb'], $_['config_db_pro'], $_['config_db_ric'], $_['config_db_
cancellati'], $_['config_db_soldout']);
$_['config_export_file_columns'] = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "AA", "AB", "AC", "AD", "AE");

$_['config_db_exclude_columns'] = array('analyze_id', 'FileID');
?>