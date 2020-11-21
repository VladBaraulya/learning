<?php
	interface IChessmen{
		public function move($x,$y);
		public function getPosition();
	}
	abstract class AbstractChessmen implements IChessmen{
        private $x;
        private $y;
		public function getPosition(){
			echo 'позиция вашей Фигуры :'.$this->x.' по оси X ,'.$this->y.' по оси Y<br>';
		}
	}
	class King extends AbstractChessmen{
        private $x =4;
        private $y =3;
		public function move($x,$y){
		    try {
                if ($x > 8){
                    throw new Exception('вы вышли за пределы доски по оси X<br>');
                }
                if ($y > 8){
                    throw new Exception('вы вышли за пределы доски по оси Y<br>');
                }

                if (abs($x - $this->x) > 1 || abs($y - $this->y) > 1)
                {
                    throw new Exception('не верный ход<br>');
                }
            } catch (Exception $e) {
		        echo $e->getMessage();
		        return;
            }

			$this->x = $x;
			$this->y = $y;
		}

        public function getPosition(){
            echo 'позиция вашей Фигуры :'.$this->x.' по оси X ,'.$this->y.' по оси Y<br>';
        }
	}
	class Queen extends AbstractChessmen{
        private $x = 1;
        private $y = 1;
		public function move($x,$y){

		    try {
                $move = false;
                if ($x > 8){
                    throw new Exception('вы вышли за пределы доски по оси X<br>');
                }
                if ($y > 8){
                    throw new Exception('вы вышли за пределы доски по оси Y<br>');
                }

                if ($x == $this->x || $y == $this->y) {
                    $move = true;
                }

                if (abs($x - $this->x) == abs($y - $this->y))  {
                    $move = true;
                }

                if ($move == true) {
                    $this->x = $x;
                    $this->y = $y;
                } else {
                    throw new Exception('не верный ход<br>');
                }
            } catch (Exception $e) {
                echo $e->getMessage();
                return;
            }

		}

        public function getPosition(){
            echo 'позиция вашей Фигуры :'.$this->x.' по оси X ,'.$this->y.' по оси Y<br>';
        }
	}
	$king = new King();
	$king->getPosition();
    $king->move(3,3);
	$king->getPosition();
	$king->move(2,2);
	$king->getPosition();
	$queen = new Queen();
	$queen->getPosition();
	$queen->move(7,1);
	$queen->getPosition();
	$queen->move(7,3);
	$queen->getPosition();
