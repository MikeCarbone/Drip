<?php

	if(!is_active_sidebar('sidebar')){
		return;
	}

?>

<?php dynamic_sidebar('sidebar'); ?>