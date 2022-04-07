<html>
    <?php

        $oldal = [
            'title' => "Oldalgeneráló",
            'header' => "PHP gyakorlas",
            'menu' => [
                "home" => "Nyitó oldal",
                "contact" => "Kapcsolat",
                "gallery" => "Galéria",
                "other" => "Egyebek"],
            'tartalom' => [
                ['P0', "Lorem ipsum dolor sit amet."],
                ['P1', "Lorem ipsum dolor sit amet."],
                ['P2', "Lorem ipsum dolor sit amet."],
                ['P3', "Lorem ipsum dolor sit amet."],
                ['P4', "Lorem ipsum dolor sit amet."]
            ],
            'footer' => ['ev' => '2022', 'ceg' => 'Teszt Elek', 'email' => 'tesztelek@gmail.com']
        ];

        function headerMaker(){

        }

        function pMaker(){

        }

        function MenuMaker($items, $active = null){
            foreach($items as $key => $value){
                echo '<li';

                if($active){
                    echo 'class="active">';
                }

                echo '<a href="? page = '.$key.'">'.$value.'</a></li>';
            }
        }

        function MenuMaker2($items, $active = null){
            $nav = "<nav><ul>";
            foreach($items as $key => $value){
                echo '<li';

                if($active){
                    echo 'class="active">';
                }

                echo '<a href="? page = '.$key.'">'.$value.'</a></li>';
            }
        }
    ?>
</html>