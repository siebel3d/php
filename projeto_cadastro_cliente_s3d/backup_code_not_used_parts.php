<?php
    //radio button selection to change php page.
    $c_option = @$_GET['crud_option'];
    if($c_option == 'create'){
        $page_action = 'create.php';
    }
    if($c_option == 'read'){
        $page_action = 'read.php';
    }
    if($c_option == 'update'){
        $page_action = 'update.php';
    }
    if($c_option == 'delete'){
        $page_action = 'delete.php';
    }
    ?>
    
    <form method="GET" action="<?php echo $page_action; ?>">
?>