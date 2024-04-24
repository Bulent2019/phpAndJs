<?php
function getBabyMonsterJson($monsterBaby) {

    return json_encode($monsterBaby);
}

function getAllBabyMonstersJson($babyMonstersArr) {
    $babyMonsterInJson = [];

    foreach($babyMonstersArr as $babyMonster) {
        $babyMonsterInJson [] = getBabyMonsterJson($babyMonster);
    }

    return $babyMonsterInJson;
}

function fourRandomBabyMonsters($babyMonstersArr) {

    return array_rand($babyMonstersArr, 4);
}
