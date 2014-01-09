<?PHP 
namespace sql\query;


class delete extends query {
	
	

	public function parse($pdo, $stmt, $result) {
		if($stmt->rowCount()==1){
			return true;
		}
	}
}

?>