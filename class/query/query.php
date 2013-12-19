<?PHP 
namespace sql\query;


class query {
	public $sql, $binds=[];
	
	public function __construct($sql, $binds=[]) {
		$this->sql = $sql;
		$this->binds = $binds;
	}
	
	public function execute($pdo) {
		
		$stmt = $pdo->prepare($this->sql);
		
		$result = $stmt->execute($this->binds);
		
		return $this->parse($pdo, $stmt, $result);
	}
	
	public function parse($pdo, $stmt, $result) {
		
	}
}

?>