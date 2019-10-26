$dataKey=["dumb","ways","the","best"];
$word="dumbways";

check($dataKey,$word);

function check($dataKey,$word){
    
    for($i = 0;$i < count($dataKey);$i++ ){
        $charCount=0;
        $wordCount=0;
        
        for($k = 0; $k < strlen($word);$k++){
            if($word[$k]==$dataKey[$i][$charCount]){
                if($charCount==(strlen($dataKey[$i])-1)){
                    $wordCount++;
                    $charCount=0;
                    
                }elseif($charCount<(strlen($dataKey[$i])-1)){
                    $charCount++;
                }
            }else{
                $charCount=0;
            }
        }
        if($wordCount>0){
            echo $dataKey[$i]." => True\n";
        }else{
            echo $dataKey[$i]." => False\n";
        }
    }
}