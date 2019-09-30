<?php 
	class Operaciones
	{
		private $n;
		private $cadena;
		private $a;
		private $b;
		private $c;
		public function __construct($n,$cadena,$a,$b,$c)
		{
			$this->n=$n;
			$this->cadena=$cadena;
			$this->a=$a;
			$this->b=$b;
			$this->c=$c;
		}
		public function CalcularFibonacci()
		{
			$a = 0;    
			$b = 1;
			for($i=0;$i<$this->n;$i++)    
			{    
    			$c = $a + $b;    
   				echo $a."<br/>";         
    			$a=$b;       
    			$b=$c;     
			}
		}//Calcular fibonacci
		public function CalcularMenor()
		{		
			if(($this->a < $this->b) and ($this->a < $this->c)) 
			{ 
				echo "$this->a es menor que $this->b y $this->c";
			}
			else 
			{
				if(($this->b<$this->a) and ($this->b<$this->c))
	 				{ 
	 					echo "$this->b es menor que $this->a y $this->c";
	 				}
				else 
				{
					echo "$this->c es menor que $this->a y $this->b";
				}
	 		}	
		}//Calcular el menor de 3 numeros
		public function Piramide()
		{
 			$caden=strlen("$this->cadena");
			$m=($caden/2)-1;
 			for($j=1;$j<=$caden+1;$j++)
 			{ 
				echo '<center>'.substr("$this->cadena",$m,$j),"<br><br>".'</center>';
				if($m== -$m)
				{
					$m=0;
				}
				else
				{
					$m=$m-1;
				}
				$j=$j+1;
			}
		}
	}
 ?>