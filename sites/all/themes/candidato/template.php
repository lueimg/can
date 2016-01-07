<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

function candidato_form_alter(&$form, &$form_state, $form_id) {
    if ($form_id == 'webform_client_form_23') {
//        $form['#attributes']['class'][] = 'form-horizontal';
    }
    drupal_add_library('system', 'ui.datepicker');
}
