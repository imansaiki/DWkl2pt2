
hitungVoucher("DumbWaysMantap",50000);


function hitungVoucher($voucher,$bayar){
    if($voucher=="DumbWaysAsik"){
        if($bayar>=20000){
            if($bayar*(50/100)<20000){
                $diskon=$bayar*(50/100);
            }else{
                $diskon=20000;
            }
            $akhir=$bayar-$diskon;
            echo "- Uang yang harus dibayar : ".$akhir."\n";
            echo "- Diskon : ".$diskon."\n";
            echo "- Kembalian : ".$akhir."\n";
        }else{
            echo "- Uang yang harus dibayar : ".$bayar."\n";
            echo "- Diskon : 0\n";
            echo "- Kembalian : 0\n";
        }
    }elseif ($voucher=="DumbWaysMantap") {
        if($bayar>=50000){
            if($bayar*(30/100)<40000){
                $diskon=$bayar*(30/100);
            }else{
                $diskon=40000;
            }
            $akhir=$bayar-$diskon;
            echo "- Uang yang harus dibayar : ".$akhir."\n";
            echo "- Diskon : ".$diskon."\n";
            echo "- Kembalian : ".$akhir."\n";
        }else{
            echo "- Uang yang harus dibayar : ".$bayar."\n";
            echo "- Diskon : 0\n";
            echo "- Kembalian : 0\n";
        }
    }else{
            echo "kode voucher tidak valid\n";
            echo "- Uang yang harus dibayar : ".$bayar."\n";
            echo "- Diskon : 0\n";
            echo "- Kembalian : 0\n";
    }
}