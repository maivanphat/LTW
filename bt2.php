
    <form  method="post" style="text-align: center">
        <h3>BAI TAP DATE</h3>
        <br/>
        <span>Nhap Ngay:</span>
        <input type="text" name="date" size="35" /><br /><br>
        <input type="submit" name="add" value="submit" /> 
    </form>
 <?php
 echo "KET QUA <br><br><br>";
            if(isset($_POST['date']))
            {
                //Lấy ngày nhập vào
                $date = $_POST['date'];
                echo $date . "<br/>";
                
                //Đổi từ dd/mm/yyyy samg dạng dd-mm-yyyy
                $dateA = str_replace("/", "-", $date);
                echo "a. " . $dateA . "<br/>";
                
                //Đổi từ dd/mm/yyyy samg dạng month dd,yyyy
                $time = strtotime($dateA);
                echo "b. " . date("M d,Y", $time);
            }
        ?>