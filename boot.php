<?php
if (!rex::isBackend()) {

// if ($this->getConfig('status') != 'deaktiviert') {
    rex_extension::register('OUTPUT_FILTER',function(rex_extension_point $ep){

        $suchmuster = '</body>';
        $ersetzen = '<link rel="stylesheet" href="./assets/addons/headsupgrid/hugrid.css" type="text/css" media="screen" />
        <script type="text/javascript" src="./assets/addons/headsupgrid/hugrid.js"></script>
        <script type="text/javascript" src="./assets/addons/headsupgrid/config.js"></script>
        </body>';
        $ep->setSubject(str_replace($suchmuster, $ersetzen, $ep->getSubject()));
      });
// }

 }
