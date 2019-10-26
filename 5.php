generate(2);

function generate($number){
    $string="1234567890qwertyuiopasdfghjklzxcvbnm";
    for($i=0; $i < $number; $i++){
        $limiter=0;
        for($k=0;$k < 16;$k++){
            echo $string[rand(0,35)];
            if(($limiter==3)&&($k != 15)){
                echo"-";
                $limiter=0;
            }else{
                $limiter++;
            }
            
            
        }
        echo "\n";
    }
}