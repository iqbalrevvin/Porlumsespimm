<?php
function sessionType(){
	if(@$_SESSION['Administrator']){
    		$session = @$_SESSION['Administrator'];
    	}elseif(@$_SESSION['Alumni']){
    		$session = @$_SESSION['Alumni'];
    	}
    return $session;
}
?>