<h1>Part 4: Text analyzer</h1>
<form action="/Text_analyzer.php" method="post">
  <input type="text" id="fname" name="fname"><br><br>
  <input type="submit" value="Submit">
</form> 
<?php
    if($_POST){
        $a = [];
        $string = str_split($_POST['fname']);
        echo "<p><b>".$_POST['fname']."</b><p>";
        for($i=0;$i<count($string);$i++){
            $maxlength=0;
            $temp_maxlength=0;
            $count=0;
            $before=[];
            $after=[];
            if(!in_array($string[$i], $a)){
                $a[] = $string[$i];
                for($z=0;$z<count($string);$z++){
                    if($string[$i]==$string[$z]){
                        $count+=1;
                        if($maxlength<$temp_maxlength){
                            $maxlength=$temp_maxlength;
                        }
                        if($z>0){
                            $before[] = $string[$z-1];
                        }
                        if($z+1<count($string)){
                            $after[] = $string[$z+1];
                        }
                    }elseif($count>0){
                        $temp_maxlength+=1;
                    }
                }
                echo $string[$i]." : ".$count;
                if(count($after)>0){
                    echo " sebelum : ".implode(", ",$after);
                }
                if(count($before)>0){
                    echo " sesudah : ".implode(", ",$before);
                }
                if($count>1){
                    echo " jarak maksimum : ".$maxlength;
                }
                echo "<br><br>";
            }
        }
    }
?>