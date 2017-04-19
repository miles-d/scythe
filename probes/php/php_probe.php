<?php

function scythe_probe($marker)
{
    $dir = getenv('SCYTHE_PROBE_DIR');
    if (!$dir) {
        return;
    }

    $fn = implode(DIRECTORY_SEPARATOR, [$dir, "$marker.scythe_probe"]);
    touch($fn);
}
