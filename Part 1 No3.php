<?php //php 7.0.8
##segitiga
echo "segitiga\n";
for($i =0;$i<10;$i++){
    for($z=$i;$z<10;$z++){
        echo " ";
    }
    for($q=0;$q<$i;$q++){
        echo "*";
    }
    for($w=0;$w<$i;$w++){
        echo "*";
    }
    echo "\n";
}
##segitiga terbalik
echo "\n";
echo "segitiga terbalik\n\n";
for($i =0;$i<10;$i++){
    for($q=0;$q<$i;$q++){
        echo " ";
    }
    for($z=$i;$z<10;$z++){
        echo "*";
    }
    for($z=$i;$z<10;$z++){
        echo "*";
    }
    echo "\n";
}
##ketupat
echo "\n";
echo " ketupat\n";
for($i =0;$i<10;$i++){
    for($z=$i;$z<10;$z++){
        echo " ";
    }
    for($q=0;$q<$i;$q++){
        echo "*";
    }
    for($w=0;$w<$i;$w++){
        echo "*";
    }
    echo "\n";
}
for($i =0;$i<10;$i++){
    for($q=0;$q<$i;$q++){
        echo " ";
    }
    for($z=$i;$z<10;$z++){
        echo "*";
    }
    for($z=$i;$z<10;$z++){
        echo "*";
    }
    echo "\n";
}
?>