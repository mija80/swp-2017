<?php   
$serii = [ 
            ['name' => 'Game Of Thrones',
             'year' => '1987', 
             'length' => '120m'],
        
            ['name' => 'Stranger Things',
             'year' => '2016', 
             'length' => '140m'
             ]
         ];
                echo '<pre>';
                print_r($serii);
                echo '</pre>';  

      
        foreach ( $serii as $serija ) {
         switch ( $serija["name"] . $serija["year"] . $serija["length"]) : 
            case "Game Of Thrones"
                echo "Serijata e $serija["name"] . Godinata e $serija["year"] . Dolzinata e $serija["length"]";
                break;
            
            case "Stranger Things"
                echo "Serijata e $serija["name"] . Godinata e $serija["year"] . Dolzinata e $serija["length"]";
                break;
        
            default:
                echo 'Nepostoecka serija';
                break;
        }
        echo '<hr>';


