{"filter":false,"title":"hero.php","tooltip":"/hero.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":1},"end":{"row":17,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"cc0a6a80fee4bafd22dce0f99b0ea53702e667c0","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":15,"column":1},"action":"remove","lines":["<?php","","require_once 'character.php';","","class Hero extends Character {","    // クラス変数なので、初期化段階で代入する","    public static $type = '主人公';","","    function __construct() {","        parent::__construct(1000, 30);","    }","","    static function description() {","        print self::$type . 'は、この世界を守る勇者だ！' . PHP_EOL;","    }","}"],"id":2},{"start":{"row":0,"column":0},"end":{"row":17,"column":1},"action":"insert","lines":["<?php","","namespace TechAcademy\\RPG\\Characters;","","require_once 'character.php';","","class Hero extends Character {","    // クラス変数なので、初期化段階で代入する","    public static $type = '主人公';","","    function __construct() {","        parent::__construct(1000, 30);","    }","","    static function description() {","        print self::$type . 'は、この世界を守る勇者だ！' . PHP_EOL;","    }","}"]}]]},"timestamp":1588677126207}