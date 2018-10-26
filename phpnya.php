<?php 

$varA= $_POST['a'];
$varOF=$_POST['of'];
$varB = $_POST['b'];

echo "$varA $varOF $varB ";
	
	if($varA=="true")
		{	
			$varA=1;
		}else
			{
				$varA=0;	
			}

		if($varB=="true")
		{	
			$varB=1;
		}else
			{
				$varB=0;	
			}


			if($varOF=="and")
				{
					if($varA==$varB)
								{echo "true";}
								else
									{echo "false";}	
				}
				elseif ($varOF=="or") 
						{
							
							
							if ($varA||$varB)

								{echo "true";}	
								else
									{echo " else";}
							
						}
						elseif ($varOF=="xor") 	
						{
							if($varA^$varB)
								{echo "true";}
								else
									{echo "false";}	
							
						}							
						else{	

								
					 							if($varA!= $varB)
													{echo "true";}
													else
														{echo "false";}	
												
											
							}									


?>