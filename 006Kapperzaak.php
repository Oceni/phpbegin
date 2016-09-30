<?php

print("De volgende momenten zijn nog beschikbaar:9.45,
10.30<ul>");

foreach($kappersagenda as $tijd => $afspraak) {
    if($afspraak == "") {
        print("<li>".$tijd."</li>") ;
    }
}
