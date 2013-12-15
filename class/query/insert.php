<?PHP 
namespace sql\query;


class insert extends query {

	public function parse($pdo, $stmt, $result) {
		if($stmt->rowCount()==1){
			$id = $pdo->lastInsertId();
		
			return $id;
		}
	}
}

?>