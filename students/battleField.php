<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";

  $nicolas;

  // 15/ La classe BattleField du fichier students/battleField.php doit avoir une méthode statique createMyWarrior
  class BattleField extends BaseBattleField
  {

    public static function createMyWarrior(){

      $nicolas = new MarvelWarrior($GLOBALS['warriorID']);
    
      $weapon = new Weapon("sword", 100);
      $weapon->setImageUrl("https://m.media-amazon.com/images/I/71QuQI3d56L._AC_SS450_.jpg");

      $nicolas->setWeapon($weapon);
      
      $nicolas->setImageUrl("https://dungeonworld.pbta.fr/wp-content/uploads/sites/2/2015/11/Guerrier-221x300.jpg");
      // $imageUrl = "https://dungeonworld.pbta.fr/wp-content/uploads/sites/2/2015/11/Guerrier-221x300.jpg";
      // $nicolas->setImageUrl($imageUrl);
      
      $nicolas->saveNew();

    }

    public static function createOtherWarrior(){

      $php = new StartrekWarrior('php');

      $weapon = new Weapon("laptop", 100);
      $weapon->setImageUrl("https://i.stack.imgur.com/wtGw0.png");

      $php->setWeapon($weapon);

      $php->setImageUrl("https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png");
      // $imageUrl = "https://dungeonworld.pbta.fr/wp-content/uploads/sites/2/2015/11/Guerrier-221x300.jpg";
      // $nicolas->setImageUrl($imageUrl);
      
      $php->saveNew();

    }

  }
  
