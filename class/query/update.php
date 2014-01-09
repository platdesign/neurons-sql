<?PHP 
namespace sql\query;


class update extends query {
	

	public function parse($pdo, $stmt, $result) {
		if($stmt->rowCount()==1){
			$this->trigger("done");
			return true;
		}
	}

}

?>