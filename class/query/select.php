<?PHP 
namespace sql\query;


class select extends query {
	public $classname='\stdClass';
	
	public function __construct($query, $binds=[], $classname='\stdClass') {
		parent::__construct($query, $binds);
		$this->classname = $classname;
	}

	public function parse($pdo, $stmt, $result) {
		return $stmt->fetchAll(\PDO::FETCH_CLASS, $this->classname);
	}
}

?>