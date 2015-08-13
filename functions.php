<?php
/**
 * ctx includes
 *
 * Librarys to include. Feel free to add your own.
 *
 */
 
$libs = [
  'lib/assets.php',                // Asset management from sage project
];

foreach ($libs as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }
  require_once $filepath;
}
unset($file, $filepath);