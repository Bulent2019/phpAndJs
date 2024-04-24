<?php

function getBabyMonster($monsterBaby) {

    return json_encode($monsterBaby);
}

function getAllBabyMonsters($babyMonstersArr) {
    $babyMonsterInJson = [];

    foreach($babyMonstersArr as $babyMonster) {
        $babyMonsterInJson [] = json_encode($babyMonster);
    }

    return $babyMonsterInJson;
}

function fourRandomBabyMonsters($babyMonstersArr) {
    $randomBabyMonsters[] = array_rand($babyMonstersArr, 4);

    return $randomBabyMonsters;
}
