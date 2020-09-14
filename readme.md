## Code Note

#### db.php
```php
/**
 * Server Info
 */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'faisal');

$connection = new mysqli(HOST, USER, PASS, DB);
```
#### function.php
```php 
/**
 * Database helper function
 * @INSERT DATA
 */
function insert($table, $data){
    global $connection;
    $keys = array_keys($data);
    $val = array_values($data);

    $col_name = implode(',' , $keys);
    $val_all = '';
    foreach( $val as $v ){
        $val_all .= "'" . $v . "' ,";
    }

    $val_final =  substr( $val_all, 0, -1);

    $sql = "INSERT INTO $table ($col_name) VALUES ($val_final)";
    $connection -> query($sql);
    $mess = "<p class=\" alert alert-success \">User added successfully !<button class=\" close \" data-dismiss=\"alert\">&times;</button></p>";
    return $mess;
}

/**
 * Database helper function
 * @SHOW ALL DATA
 */
function showAll($table){
    global $connection;
    $sql = "SELECT * FROM  $table";
    $data = $connection -> query($sql);
    return $data;
}

```

