<?PHP 
namespace sql\query;


class selectSingle extends query {
	public $classname='\stdClass';
	
	public function __construct($query, $binds=[], $classname='\stdClass') {
		parent::__construct($query, $binds);
		$this->classname = $classname;
	}

	public function parse($pdo, $stmt, $result) {
		return $stmt->fetchObject($this->classname);
	}
}

?>