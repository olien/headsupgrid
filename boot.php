<?php
if (!rex::isBackend()) {
  if ($this->getConfig('headsupgrid_aktiv') == '1') {
    rex_extension::register('OUTPUT_FILTER',function(rex_extension_point $ep){
      $suchmuster = '</body>';
      $ersetzen = '
        <!-- Heads-Up-Grid -->
          <link rel="stylesheet" href="./assets/addons/headsupgrid/hugrid.css" type="text/css" media="screen" />
          <script type="text/javascript" src="./assets/addons/headsupgrid/hugrid.js"></script>



          <script type="text/javascript">

          '.$this->getConfig('headsupgrid_config').'

            $(document).ready(function() {
                definegrid();
                setgridonload();
            });

            $(window).resize(function() {
                definegrid();
            });
          </script>
        <!-- // Heads-Up-Grid -->
        </body>';
      $ep->setSubject(str_replace($suchmuster, $ersetzen, $ep->getSubject()));
    });
  }
}
