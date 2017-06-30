<?php
function thedarktower_getmoduleinfo() {
        $info = array(
                "name"=>"The Dark Tower",
                "author"=>"`@c`#h`4z`%1`^6`Q0",
                "version"=>"1.0",
                "category"=>"Miscellaneous",
                "download"=>"https://github.com/chz160/LotGD_Mod_TheDarkTower",
				"prefs"=>array(
					"The Dark Tower Preferences,title"
				)
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
			require_once("modules/thedarktower/randallflagg.php");
			thedarktower_randallflagg_setnewname();
			break;
        }

        return $args;
}

function thedarktower_runevent($type) { }

function thedarktower_run() { }
?>
