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
    $countBabies = count($babyMonstersArr);

    $randomBabyMonsters = [];

    for($index = 0; $index < $countBabies; $index++) {
        $randomIndex = array_rand($babyMonstersArr, 4);

        $randomBabyMonsters = $babyMonstersArr[$randomIndex];
    }
    return $randomBabyMonsters;
}

