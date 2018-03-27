 <form method="post" style="text-align: center">
        <h3>PHEP TINH</h3>
        <br/>
        <span>S1:</span>
        <input type="text" name="num1" size="25" /><br />
        <span>S2:</span>
        <input type="text" name="num2" size="25" /><br />
        <span>Chon phep tinh:</span>
        <select name="selected">
            <option>Cong</option>
            <option>Tru</option>
            <option>Nhan</option>
            <option>Chia</option>
        </select>
        <br/>
        <input type="submit" name="add" value="submit" /> 
    </form>
<?php
            if(isset($_POST['num1'])&&isset($_POST['num2'])&&isset($_POST['selected']))
            {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $selected = $_POST['selected'];
                switch ($selected)
                {
                    case 'Cong':
                    {
                        echo 'Tong so '.$num1.' va '.$num2.' la: '.($num1+$num2);
                        break;
                    }
                    case 'Trừ':
                    {
                        echo 'Hieu so '.$num1.' va '.$num2.' la: '.($num1-$num2);
                        break;
                    }
                    case 'Nhan':
                    {
                        echo 'Tich so '.$num1.' va '.$num2.' la: '.($num1*$num2);
                        break;
                    }
                    case 'Chia':
                    {
                        echo 'Thương so '.$num1.' va '.$num2.' la: '.($num1/$num2);
                        break;
                    }
                }
            } 
            else
            {
                return;
            }
        ?>