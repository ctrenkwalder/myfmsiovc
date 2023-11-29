<?php

class className extends JobRouter\Engine\Runtime\PhpFunction\DialogFunction
{
	public function execute($rowId = null)
	{
		// Hier die Funktionalität einfügen
		// Chris 12
		
    $jobDB = $this->getJobDB();
    $sql = 'Please replace this text with your SQL SELECT statement!';
    $result = $jobDB->query($sql);
    if ($result === false) {
        throw new JobRouterException($jobDB->getErrorMessage());
    }
    while ($row = $jobDB->fetchRow($result)) {
        // Please replace this comment with your row-processing code!
        // Test123
    }
    
    }
}
?>