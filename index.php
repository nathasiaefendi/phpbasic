<html>
   
   <head>
      <title>Hello World</title>
   </head>
   
   <body>
      <?php
		
		//echo "Hello, World!";
		
		$teststr = "Helo World";
		//$test-num = 0123456;
		
		for ($x = 0; $x <= 10; $x++) {
			
			if($x % 2 == 0) {
				
					echo "$teststr $x even <br>";
				
			}
			else if ($x % 2 == 1){
				
				echo "$teststr $x odd <br>";
				
			}
		
		}
		
		
		//echo $teststr;
		
		//var_dump($test-str);
		//die();
		//var_dump($test-num);
		
		//var dump : check tipe data, length.
		//die : prosess stop (ga dijalankan). setelah die
		
		?>
   </body>

</html>