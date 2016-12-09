<?php
$show_help = false;
$p['tt'] = 1;	# default to delta time
$file = $argv[$argc-1]; # filename is always last argument

if (in_array($argv[1], array('--help', '-help', '-h', '-?'))) {
    $show_help = true;
}

if (!file_exists($file)) {
    echo "File not found.\n";
    exit();
}

foreach ($argv as $arg) {
    if (strpos($arg, 'timestamp') != null) {
        $values = split('=', $arg);

        if ($values[1] == 'delta') {
            $p['tt'] = 1;
        } elseif ($values[1] == 'absolute') {
            $p['tt'] = 0;
        } else {
            $show_help = true;
            break;
        }
    }
}

if ($show_help) {
    echo "Help...\n";
    exit();
}

$tt = isset($p['tt']) ? $p['tt'] : 0;

if ($file != '') {
    require('midi.class.php');

    $midi = new Midi();
    $midi->importMid($file);
    $xml = $midi->getTxt($tt);
    echo $xml;
}

?>

