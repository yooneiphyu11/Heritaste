<?php 
$id=$_GET['id'];
$type=$_GET['type'];
// echo "<script>('Do U Want TO Delete This Recipe?');
// window.location.href='delete.php?id=$id;';
// </script>";


echo "<script>  
if (confirm('Are you sure you want to delete?')) {  
    window.location.href = 'delete.php?id=$id';  
} else {  
    window.location.href = 'update.php';  
}  
</script>";  
?>

require "database_connection.php";
$CRUD=new CRUD();
if($type==='meal'){
    $delete=$CRUD->delete_mealByEN_id($id);
    $delete=$CRUD->delete_desEn($id);
    echo "<script>alert('Delete meal Successfully.');
    window.location.herf='update.php';
    </script>";
}
elseif($type==='dessert'){
    $delete=$CRUD->delete_dessertbyEN_id($id);
    $delete=$CRUD->delete_desEn($id);
    echo "<script>alert('Delete dessert Successfully.');
    window.location.herf='update.php';
    </script>";
}
else{
    echo "No Recipe Found.";
}
?>