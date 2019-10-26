$data = array
  (
  array("a","c","b","e","d"),
  array("g","e","f")
  );
  
$datalain = array
  (
  array("g","h","i","j"),
  array("a","c","b","e","d"),
  array("g","e","f")
  );

sort_array($datalain);

function sort_array($array){

    for($i=0;$i<count($array)-1;$i++){
        $minCount=$i;
        for($j=$i;$j<count($array);$j++){
            if (count($array[$j]<$array[$minCount])) {
                $minCount=$j;
            }
        }
        $temp =$array[$i];
        $array[$i]=$array[$minCount];
        $array[$minCount]=$temp;
    }
    for($i=0;$i<count($array);$i++){
        $array[$i]=sortAlpha($array[$i]);
    }
    print_r($array);
}
function sortAlpha($array){
        $refer=array(
        "a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5,"f"=>6,
        "g"=>7,"h"=>8,"i"=>9,"j"=>10,"k"=>11,"l"=>12,
        "m"=>13,"n"=>14,"o"=>15,"p"=>16,"q"=>17,"r"=>18,
        "s"=>19,"t"=>20,"u"=>21,"v"=>22,"w"=>23,"x"=>24,
        "y"=>25,"z"=>26,
    );
    for($i=0;$i<count($array)-1;$i++){
        $min=$i;
        for($j=$i;$j<count($array);$j++){
            if ($refer[$array[$j]]<$refer[$array[$min]]) {
                $min=$j;
            }
        }
        $temp =$array[$i];
        $array[$i]=$array[$min];
        $array[$min]=$temp;
    }
    return $array;
}