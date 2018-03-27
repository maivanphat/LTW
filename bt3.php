  <form method="post" style="text-align: center">
        <h3>BAI TAP 3</h3>
        <br/>
        <span>Nhap mang >=10 phan tu:</span>
        <input type="text" name="array" size="25" /><br />
        <br/>
        <input type="submit" name="add" value="submit" /> 
    </form>
 <?php
            if(isset($_POST['array']))
            {
               
                $str = $_POST['array'];
                echo $str . "<br/>";
                
       
                $array = explode(",", $str);
                
                
                $tong = 0;
                for ($i = 0 ; $i < count($array); $i++)
                {
                    $tong += $array[$i];
                }
                echo 'a. Tong: ' . $tong . "<br/>";
                
                
                $min = $array[0];
                for ($i = 1 ; $i < count($array); $i++)
                {
                    if($array[$i]<$min)
                    {
                        $min = $array[$i];
                    }
                }
                echo 'b. Min: ' . $min . "<br/>";
                
               
                $max = $array[0];
                for ($i = 1 ; $i < count($array); $i++)
                {
                    if($array[$i]>$max)
                    {
                        $max = $array[$i];
                    }
                }
                echo 'c. Max: ' . $max . "<br/>";
                
               
                array_pop($array);
                echo 'd. Xoa phan tu cuoi: ';
                for ($i = 0 ; $i < count($array); $i++)
                {
                    echo $array[$i];
                }
                echo '<br/>';
                
                //Loại bỏ phần tử đầu tiên
                array_pop($array);
                echo 'd. xoa phan tu dau: ';
                for ($i = 1 ; $i < count($array); $i++)
                {
                    echo $array[$i];
                }
                echo '<br/>';
            }
        ?>