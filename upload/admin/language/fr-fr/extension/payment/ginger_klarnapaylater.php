<?php

/**
 * General Admin Settings Page
 */
$_['heading_title'] = 'EMS Online: Klarna Pay Later';
$_['text_ginger_klarnapaylater'] = '<img src="view/image/payment/ginger_klarnapaylater.png" alt="EMS Online" title="EMS Online" />';
$_['text_extension'] = 'Extensions';

/**
 * Entry points
 */
$_['entry_status'] = 'Statut:';
$_['entry_order_completed'] = 'Commande réalisé:';
$_['entry_order_new'] = 'Nouvelle commande:';
$_['entry_order_expired'] = 'Commande expirée:';
$_['entry_order_cancelled'] = 'Commande Annulé:';
$_['entry_order_processing'] = 'Commande en traitement:';
$_['entry_order_error'] = 'Erreur de commande:';
$_['entry_sort_order'] = 'Order de tri:';
$_['entry_ginger_api_key'] = 'EMS Online clé API:';
$_['entry_ginger_total'] = 'Total:';
$_['entry_cacert'] = 'Bundle cURL ca.cert:';
$_['entry_order_captured'] = 'Commande capturé:';

/**
 * Text strings
 */
$_['text_button_save'] = 'Enregister';
$_['text_button_cancel'] = 'Annuler';
$_['text_enabled'] = 'Activé';
$_['text_disabled'] = 'Désactivé';
$_['text_payments'] = 'Paiements';
$_['text_issuer_id'] = 'SWIFT/BIC';
$_['text_settings_saved'] = 'EMS Online: Paramètres Klarna Pay Later mis a jour!';
$_['text_edit_ginger'] = 'Modifier EMS Online: Paramètres Klarna Pay Later';
$_['text_yes'] = 'Oui';
$_['text_no'] = 'Non';
/**
 * Error messages
 */
$_['error_missing_api_key'] = "La clé API est vide. Veuillez définir la clé API et réessayer";

/**
 * Information text
 */
$_['info_help_api_key'] = 'Obtenez votre EMS Online clé API du portail marchand.';
$_['info_help_total'] = 'Le total de la caisse que la commande doit atteindre avant que ce mode de paiement devient actif.';
$_['info_plugin_not_configured'] = 'EMS Online: Plugin Klarna Pay Later est pas configuré.';
$_['info_help_klarnapaylater_ip_filter'] = 'Si cette champs est rempli, uniquement pour ces adresses IP le mode de paiement sera affiché. (Par Ex: 128.0.0.1, 255.255.255.255)';
$_['entry_klarnapaylater_ip_filter'] = 'le filtrage IP:';
$_['entry_klarnapaylater_test_api_key'] = 'clé API de Test:';
$_['info_help_klarnapaylater_test_api_key'] = 'Si entré, cette clé API sera utilisée uniquement à des test.';

/**
 * Refund text
 */
$_['empty_price'] = 'Le prix est vide dans les informations sur le produit de remboursement.';
$_['wrong_order_status'] = 'Seules les commandes terminées peuvent être remboursées.';
$_['order_not_captured'] = 'Les remboursements ne sont possibles qu\'une fois capturés.';
$_['refund_not_completed'] = "Le remboursement n'est pas terminé.";