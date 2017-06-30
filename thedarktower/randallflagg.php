<?php
function thedarktower_randallflagg_pickname() {
        $names = array(
                "Randall Flagg",
                "The Ageless Stranger",
                "The Walkin' Dude",
                "The Dark Man",
                "The Hardcase",
                "The Man in Black",
                "The Tall Man",
                "The Midnight Rambler",
                "The Adversary",
                "The Grinning Man",
                "Old Creeping Judas",
                "He Who Walks Behind The Rows",
                "The Covenant Man",
                "In The Stand",
                "Richard Fry",
                "Robert Franq",
                "Ramsey Forrest",
                "Robert Freemont",
                "Richard Freemantle",
                "Russell Faraday",
                "The Monster",
                "The Man with No Face",
                "Nyarlathotep",
                "Legion",
                "In other works",
                "Richard Fannin",
                "Raymond Fiegler",
                "Walter o'Dim",
                "Marten Broadcloak",
                "Walter Padick",
                "Walter Hodji",
                "Bill Hitch",
                "Revered Flagg"
        );
        $index = rand(0,count($names)-1);
        return $names[$index];
}

function thedarktower_randallflagg_setnewname() {
        $new_name = thedarktower_randallflagg_pickname();
        $sql = "UPDATE " . db_prefix("accounts") . " SET name='" . $new_name . "' WHERE login='The Dark Man'";
        db_query($sql);
        return true;
}
?>
