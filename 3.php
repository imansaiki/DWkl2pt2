cetak_gambar(7);
function cetak_gambar($dimensi){
    if(($dimensi<=1)&&(($dimensi%3)>0)){
        echo "Isikan parameter berupa bilangan ganjil lebih dari 1";
    }else{
        for($i=0;$i < $dimensi;$i++){
            for($k=0;$k < $dimensi;$k++){
                if(($k>0)&&($k<$dimensi-1)&&($i>0)&&($i<$dimensi-1)&&($i!=(ceil(($dimensi-1)/2)))){
                    echo " - ";
                }else{
                    echo " * ";
                }
            }
            echo "\n";
        }
    }
}