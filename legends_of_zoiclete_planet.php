<?php
    // Static functions
    function getIndex(object $elem, array $a_list): int{
        if (sizeof($a_list) > 0){
            for ($i = 0; $i < sizeof($a_list); $i++){
                if ($a_list[$i] == $elem){
                    return $i;
                }
            }
        }
        return -1;
    }

    function convertToScientific(string $num): string {
        if (is_numeric($num)){
            // Checking whether the value of num is above 10E+15 or not
            if ($num > bcpow(10, 15)){
                $new = ""; // initial value
                for ($i = 0; $i < strlen($num); $i++){
                    if ($num[$i] != ".") {
                        $new .= $num[$i];
                    }
                    else{
                        break;
                    }
                }
                $power = strlen($new) - 1;
                return $num[0].".".substr($new, 1, 2)." * 10 ^ ".$power;
            }
            // Checking whether the value of num is below 10E-15 or not
            elseif ($num < bcpow(10, -15, strlen($num))){
                // Getting the value of power
                $power = 0; // initial value
                $dotIndex = 1;
                $firstNonZeroIndex = 0; // initial value
                for ($i = 0; $i < strlen($num); $i++){
                    if ($i > $dotIndex){
                        if ($num[$i] == 0){
                            $power--;
                        }
                        else{
                            $firstNonZeroIndex = $i;
                            break;
                        }
                    }
                }
                $power--;
                return $num[$firstNonZeroIndex].".".substr($num, $firstNonZeroIndex + 1, 2)
                    ." * 10 ^ ".$power;
            }
            return $num;
        }
        return "NaN";
    }

    class BattleRecord{

    }

    class Battle{

    }

    class Position{

    }

    class Character{

    }

    class WildCharacter extends Character{

    }

    class CharacterType{

    }

    class CharacterClass{

    }

    class Skill{

    }

    class SkillLevelUpBonus{

    }

    class Battlefield{

    }

    class Transport{

    }

    class Ship extends Transport{

    }

    class Truck extends Transport{

    }

    class Car extends Transport{

    }

    class Motorcycle extends Transport{

    }

    class TransportType{

    }

    class Building{

    }

    class Barracks extends Building{

    }

    class Stable extends Building{

    }

    class SiegeWorks extends Building{

    }

    class Shrine extends Building{

    }

    class TownCenter extends Building{

    }

    class Harbor extends Building{

    }

    class Garage extends Building{

    }

    class Mine extends Building{

    }

    class Farm extends Building{

    }

    class Wall extends Building{

    }

    class Fort extends Building{

    }

    class Gate extends Building{

    }

    class DefenseTower extends Building{

    }

    class QuizZone extends Building{

    }

    class BuildingType{

    }

    class QuizQuestion{

    }

    class Tile{

    }

    class Land extends Tile{

    }

    class Plains extends Land{

    }

    class Mountain extends Land{

    }

    class Hill extends Land{

    }

    class Water extends Tile{

    }

    class River extends Water{

    }

    class Lake extends Water{

    }

    class Sea extends Water{

    }

    class Ocean extends Water{

    }

    class SpecialPower{

    }

    class Research{

    }

    class ResearchNode{

    }

    class ResearchTree{

    }

    class Player{

    }

    class AI extends Player{

    }

    class Deck{

    }

    class Shop{

    }

    class GlobalShop extends Shop{

    }

    class BattlefieldShop extends Shop{

    }

    class Rune{

    }

    class Box{

    }

    class TreasureChest{

    }

    class Game{

    }

    function main(){
        $date = date('m/d/Y h:i:s a', time());
    }

    main();
?>