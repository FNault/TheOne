<?php

	/**
	 * @param $Host
	 * @param $Username
	 * @param $Password
	 * @param $DataBase
	 * @param $Table
	 *----------------------
	 * when not adding additional parameters everything from the table is selected
	 * unlimited additional other parameters to get multiple or single data from table
	 * @return array|bool
	 */
	function _DataGet($Host, $Username, $Password, $DataBase, $Table){
		if(func_num_args() < 5){
			return FALSE;
		}
		else{
			$Rows = [];
			$SQL = new mysqli($Host, $Username, $Password, $DataBase);
			if (mysqli_connect_errno()){
				return FALSE;
			}
			elseif (func_num_args() == 5){
				if ($Result = $SQL->query("SELECT * FROM $Table")){

					while ($Row = $Result->fetch_assoc()){
						array_push($Rows, $Row);
					}
				}
			}

			else{
				$Args    = func_get_args();
				$Columns = '';
				$FinalArgs = [];
				for($i = count($Args); $i > 5; $i--){
					array_push($FinalArgs, array_pop($Args));
				}
				for($i = 0; $i < count($FinalArgs); $i++){
					if($Columns == ''){
						$Columns = $FinalArgs[$i];
					}else{
						$Columns = $Columns . ' , ' . $FinalArgs[ $i ];
					}
				}
				if ($Result = $SQL->query("SELECT $Columns FROM $Table ORDER by ID")){
					while ($Row = $Result->fetch_assoc()){
						 array_push($Rows, $Row);
					}
				}
			}
			$SQL->close();
			return $Rows;
		}
	}

	/**
	 * @param $Host
	 * @param $Username
	 * @param $Password
	 * @param $DataBase
	 * @param $Table
	 * @param $Datas
	 * @return bool
	 * -------------------
	 * format $Datas this way : 'row:value,row2:value2'
	 */
	function _DataSet($Host, $Username, $Password, $DataBase, $Table, $Datas){
		$ValuesColumns = explode(',', $Datas);
		$Columns = [];
		for($j = 0; $j < count($ValuesColumns); $j++){
			$Columns[$j] = explode(':', $ValuesColumns[$j]);
		}
		$SQLconnect = new mysqli($Host, $Username, $Password, $DataBase);
		if (mysqli_connect_errno()){
			var_dump('erreur de connexion');
			return FALSE;
		}
		elseif (func_num_args() == 6){
			$Values = '';
			$Column = '';
			for ($i = 0; $i < count($Columns); $i++){
				if ($Values == '' && $Column == ''){
					$Values = '\'' . $Columns[ $i ][1] . '\'';
					$Column =  $Table. '.' . $Columns[$i][0];
				}
				else{
					$Values = $Values . ', \''. $Columns[ $i ][1] . '\'';
					$Column = $Column . ', '. $Table. '.' . $Columns[ $i ][0];
				}
			}
			var_dump($Values);

			if($SQLconnect->query("INSERT INTO $Table ($Column) VALUES ($Values)") === TRUE){
				$SQLconnect->close();
				return True;
			}
			else{
				var_dump('erreur d\'envois');
				$SQLconnect->close();
				return False;
			}
		}
		return False;
	}

