<?php
/** $Id$ */
require_once "Net_Portscan/Portscan.php";

/** Test for checkPort() and getService() */
if (Net_Portscan::checkPort("localhost", 80) == NET_PORTSCAN_SERVICE_FOUND) {
    echo "There is a service on your machine on port 80 (" . Net_Portscan::getService(80) . ").\n";
}

/** Test for checkPortRange() */
echo "Scanning localhost ports 70-90\n";
$result = Net_Portscan::checkPortRange("localhost", 70, 90);

foreach ($result as $port => $element) {
    if ($element == NET_PORTSCAN_SERVICE_FOUND) {
        echo "On port " . $port . " there is running a service.\n";
    } else {
        echo "On port " . $port . " there is no service running.\n";
    }
}


/** Test for getService() */
echo "On port 22, there service " . Net_Portscan::getService(22) . " is running.\n";

/** Test for getPort() */
echo "The finger service usually runs on port " . Net_Portscan::getPort("finger") . ".\n";

?>
