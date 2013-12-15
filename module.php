<?PHP

	
	

	
	
	$module = nrns::module("sql", []);
	
	
	$module->config(function(){
	
		require 'class/query/query.php';
		require 'class/query/select.php';
		require 'class/query/insert.php';
		require 'class/query/update.php';
		require 'class/query/delete.php';
		
	});
	
	$module->service('sql', function($nrns){
		$service = $nrns->newObject();
		
		$service->select = function($query, $binds, $classname='stdClass') {
			return new sql\query\select($query, $binds, $classname);
		};
		
		$service->insert = function($query, $binds) {
			return new sql\query\insert($query, $binds);
		};
		
		return $service;
	});
	
	
	
	
	

?>