<?php
class CartController {
	/*--------รัน Sql รับต่าจากตาราง---------*/
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	/*--------รัน Sql รับต่าจำนวนแถวจากตาราง---------*/
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>