<?php
	function bankomat(){
        $value = (int)$_POST["val"];
		if(!$value) {
		    return ['Не корректное число'];
        }
		if ($value % 5 != 0){
            $val_1 = 5 * ceil($value / 5);
            $val_2  = $value - ($value % 5);
            return ["выберете корректную сумму:".$val_1."или".$val_2];
		}

        $bills = [500, 200, 100, 50, 20, 10, 5];
        $billNumber = [];

        foreach ($bills as $bill) {
            $ostatok = $value % $bill; 

            if ($ostatok == $value) {
                continue;           
            }

            $kratnayaSumma = $value - $ostatok;

            $billNumber[] = '$' . $bill . ' - '  . $kratnayaSumma / $bill; 

            $value = $ostatok; 
        }

        return ($billNumber);
    }

    echo json_encode(bankomat());

