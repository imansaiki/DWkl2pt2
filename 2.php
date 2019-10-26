hitungKembalian(220000,250000);

function hitungKembalian($pembelian,$bayar){
    $cashback=0;
    if($pembelian>200000){
        $cashback=$pembelian/10;
    }
    $totalKembali=$bayar-$pembelian+$cashback;
    $liPul=0;
    $duPul=0;
    $sePul=0;
    $liRib=0;
    while($totalKembali>5000){
        if($totalKembali>=50000){
            $totalKembali-=50000;
            $liPul++;
        }elseif (($totalKembali>=20000)&&($totalKembali<50000)) {
            $totalKembali-=20000;
            $duPul++;
        }elseif(($totalKembali>=10000)&&($totalKembali<20000)){
            $totalKembali-=10000;
            $sePul++;
        }else {
            $totalKembali-=5000;
            $liRib++;
        }
    }
    if($liPul>0){
        echo $liPul." x 50000\n";
    }
    if($duPul>0){
        echo $duPul." x 20000\n";
    }
    if($sePul>0){
        echo $sePul." x 10000\n";
    }
    if($liRib>0){
        echo $liRib." x 5000\n";
    }
    if($totalKembali>0){
        echo $totalKembali." disumbangkan\n";
    }
}