<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</style>
</head>
<body>
	<div class="content">
		<?php 
			$group = array("1" => "Admin", "2" => "Manager", "3" => "Member", "4" => "Guest");
			$city = array("ct" => "Cần Thơ", "tg" => "Tiền Giang", "bl" => "Bạc Liêu");

			function createSelectbox($name, $attributes, $array, $keySelect){
				$xhtml = "";
				if(!empty($array)){
					$xhtml .= '<select name="'.$name.'" id="'.$name.'" style="'. $attributes .'">';
					foreach ($array as $key => $value) {
						if($key == $keySelect){
							$xhtml .= '<option value="'.$key.'"  selected = "selected">'.$value.'</option>';
						}
						else{
							$xhtml .= '<option value="'.$key.'">'.$value.'</option>';
						}

						
					}

					/*$xhtml .= '<option value="1">Admin</option>';
					$xhtml .= '<option value="2">Manager</option>';
					$xhtml .= '<option value="3">Member</option>';
					$xhtml .= '<option value="4">Guest</option>';*/
					$xhtml .= '</select>';
				}	
				return $xhtml;			
			}

			$groupSelect = createSelectbox("group", "width: 200px", $group, 4);
			$citySelect = createSelectbox("city", "width: 300px", $city, "tg");
			echo $groupSelect . "<br>" . $citySelect;
			
		 ?>
	</div>
</body>
</html>