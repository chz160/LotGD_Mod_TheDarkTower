<?php
function thedarktower_getmoduleinfo() {
        $info = array(
                "name"=>"The Dark Tower",
                "author"=>"`@c`#h`$z`%1`^6`Q0",
                "version"=>"1.0",
                "category"=>"Miscellaneous",
                "download"=>"http://dragonprime.net/index.php?module=Downloads",
        );
        return $info;
}

function thedarktower_install() {
//      module_addhook("newday-runonce");
        module_addhook("newday");
        return true;
}

function thedarktower_uninstall() {
        return true;
}

function thedarktower_dohook($hookname,$args) {
        global $session;

        switch($hookname){
        case "newday":
                thedarktower_randallflagg_setnewname();
                break;
        }

        return $args;
}

function thedarktower_runevent($type) { }

function thedarktower_run() { }
?>
