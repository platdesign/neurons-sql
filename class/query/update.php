<?PHP 
namespace sql\query;


class update extends query {
	

	public function parse($pdo, $stmt, $result) {
		return $stmt->fetchAll(\PDO::FETCH_CLASS, $this->classname);
	}
}

?>