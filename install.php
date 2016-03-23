<?php

if (!$this->hasConfig('headsupgrid_aktiv')) {
    $this->setConfig('headsupgrid_aktiv', '1');
}


if (!$this->hasConfig('headsupgrid_config')) {
    $this->setConfig('headsupgrid_config',
    "
    definegrid = function() {
    var browserWidth = $(window).width();

    // LARGE DESKTOP & UP
    if (browserWidth >= 1200)
    {
        pageUnits = 'px';
        colUnits = 'px';
        pagewidth = 1170;
        columns = 12;
        columnwidth = 70;
        gutterwidth = 30;
        pagetopmargin = 35;
        rowheight = 20;
        makehugrid();
        $('#hugrid').css('left', '50%');
        $('#hugrid').css('margin-left', -1170/2);
    }

    // DEFAULT DESKTOP
    if (browserWidth >= 980 && browserWidth < 1200)
    {
        pageUnits = 'px';
        colUnits = 'px';
        pagewidth = 940;
        columns = 12;
        columnwidth = 60;
        gutterwidth = 20;
        pagetopmargin = 35;
        rowheight = 20;
        makehugrid();
        $('#hugrid').css('left', '50%');
        $('#hugrid').css('margin-left', -940/2);
    }

    // PORTRAIT TABLET TO DEFAULT DESKTOP
    if (browserWidth >= 768 && browserWidth < 980){
        pageUnits = 'px';
        colUnits = 'px';
        pagewidth = 724;
        columns = 12;
        columnwidth = 42;
        gutterwidth = 20;
        pagetopmargin = 35;
        rowheight = 20;
        makehugrid();
        $('#hugrid').css('left', '50%');
        $('#hugrid').css('margin-left', -724/2);
    }

    // PORTRAIT/LANDSCAPE PHONE TO SMALL DESKTOP & PORTRAIT TABLET
    if (browserWidth <= 767)
    {
        pageUnits = 'px';
        colUnits = 'px';
        pagewidth = browserWidth - 40;
        columns = 2;
        columnwidth = (browserWidth - 60)/2;
        gutterwidth = 20;
        pagetopmargin = 35;
        pageleftmargin = 20;
        pagerightmargin = 20;
        rowheight = 20;
        makehugrid();
    }
}");
}
