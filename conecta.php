<?php

try
{
	$pdo = new PDO("mysql:dbname = pessoa; host=locahost","root", "");
}
catch(PDOException $e)
{
	echo "Erro com banco de dados: ".$e->getMessage();
}
catch(Exception $e)
{
	echo "Erro genérico: ".$e->getMessage();
}

//$pdo->query("INSERT INTO pessoa(nome, email) VALUES ('Miriam', 'email')");

/*
$servidor= "localhost";
$porta=5432;
$usuario="postgres";
$senha="postgres";
$banco="postgres";

try {
    $db = new PDO("pgsql:host=$servidor; port= $porta; dbname=$banco", $usuario,  $senha);
    echo "Conectado com sucesso!!";
 } catch (PDOException  $e) {
    echo "ERRO: ". $e->getMessage();
 }
 
*/

/*
include_once('connection.php'); 
 class Db_Class{
     private $table_name = 'user';
     function createUser(){
         $sql = "INSERT INTO 
                  PUBLIC.".$this->table_name.
                  "(name,email,mobile_no,address) ".
                  "VALUES('".$this->cleanData($_POST['name']).
                  "','".$this->cleanData($_POST['email']).
                  "','".$this->cleanData($_POST['mobileno']).
                  "','".$this->cleanData($_POST['address'])."')";

         return pg_affected_rows(pg_query($sql));
     }
     function getUsers(){             
         $sql ="select *from public." . $this->table_name . " ORDER BY id DESC";
         return pg_query($sql);
     } 
     function getUserById(){    
   
         $sql ="select *from public." . $this->table_name . "  where id='".$this->cleanData($_POST['id'])."'";
         return pg_query($sql);
     } 
     function deleteuser(){    
   
          $sql ="delete from public." . $this->table_name . "  where id='".$this->cleanData($_POST['id'])."'";
         return pg_query($sql);
     } 
     function updateUser($data=array()){       
      
         $sql = "update public.user set name='".$this->cleanData($_POST['name']).
         "',email='".$this->cleanData($_POST['email'])."', mobile_no='".$this->cleanData($_POST['mobileno'])."',address='".$this->cleanData($_POST['address'])."' where id = '".$this->cleanData($_POST['id'])."' ";
         return pg_affected_rows(pg_query($sql));        
     }
     function cleanData($val){
          return pg_escape_string($val);
     }
 

*/
/*
<?php
	// Initialize connection variables.
	$host = "mydemoserver.postgres.database.azure.com";
	$database = "mypgsqldb";
	$user = "mylogin@mydemoserver";
	$password = "<server_admin_password>";

	// Initialize connection object.
	$connection = pg_connect("host=$host dbname=$database user=$user password=$password") 
		or die("Failed to create connection to database: ". pg_last_error(). "<br/>");
	print "Successfully created connection to database.<br/>";

	// Drop previous table of same name if one exists.
	$query = "DROP TABLE IF EXISTS inventory;";
	pg_query($connection, $query) 
		or die("Encountered an error when executing given sql statement: ". pg_last_error(). "<br/>");
	print "Finished dropping table (if existed).<br/>";

	// Create table.
	$query = "CREATE TABLE inventory (id serial PRIMARY KEY, name VARCHAR(50), quantity INTEGER);";
	pg_query($connection, $query) 
		or die("Encountered an error when executing given sql statement: ". pg_last_error(). "<br/>");
	print "Finished creating table.<br/>";

	// Insert some data into table.
	$name = '\'banana\'';
	$quantity = 150;
	$query = "INSERT INTO inventory (name, quantity) VALUES ($name, $quantity);";
	pg_query($connection, $query) 
		or die("Encountered an error when executing given sql statement: ". pg_last_error(). "<br/>");

	$name = '\'orange\'';
	$quantity = 154;
	$query = "INSERT INTO inventory (name, quantity) VALUES ($name, $quantity);";
	pg_query($connection, $query) 
		or die("Encountered an error when executing given sql statement: ". pg_last_error(). "<br/>");

	$name = '\'apple\'';
	$quantity = 100;
	$query = "INSERT INTO inventory (name, quantity) VALUES ($name, $quantity);";
	pg_query($connection, $query) 
		or die("Encountered an error when executing given sql statement: ". pg_last_error()). "<br/>";

	print "Inserted 3 rows of data.<br/>";

	// Closing connection
	pg_close($connection);
*/
/*

para ler

	// Initialize connection variables.
	$host = "mydemoserver.postgres.database.azure.com";
	$database = "mypgsqldb";
	$user = "mylogin@mydemoserver";
	$password = "<server_admin_password>";
	
	// Initialize connection object.
	$connection = pg_connect("host=$host dbname=$database user=$user password=$password")
				or die("Failed to create connection to database: ". pg_last_error(). "<br/>");

	print "Successfully created connection to database. <br/>";

	// Perform some SQL queries over the connection.
	$query = "SELECT * from inventory";
	$result_set = pg_query($connection, $query) 
		or die("Encountered an error when executing given sql statement: ". pg_last_error(). "<br/>");
	while ($row = pg_fetch_row($result_set))
	{
		print "Data row = ($row[0], $row[1], $row[2]). <br/>";
	}

	// Free result_set
	pg_free_result($result_set);

	// Closing connection
	pg_close($connection);
?>

/*

atualizar

<?php
	// Initialize connection variables.
	$host = "mydemoserver.postgres.database.azure.com";
	$database = "mypgsqldb";
	$user = "mylogin@mydemoserver";
	$password = "<server_admin_password>";

	// Initialize connection object.
	$connection = pg_connect("host=$host dbname=$database user=$user password=$password")
				or die("Failed to create connection to database: ". pg_last_error(). ".<br/>");

	print "Successfully created connection to database. <br/>";

	// Modify some data in table.
	$new_quantity = 200;
	$name = '\'banana\'';
	$query = "UPDATE inventory SET quantity = $new_quantity WHERE name = $name;";
	pg_query($connection, $query) 
		or die("Encountered an error when executing given sql statement: ". pg_last_error(). ".<br/>");
	print "Updated 1 row of data. </br>";

	// Closing connection
	pg_close($connection);
*/
/*

Excluir: 

	// Initialize connection variables.
	$host = "mydemoserver.postgres.database.azure.com";
	$database = "mypgsqldb";
	$user = "mylogin@mydemoserver";
	$password = "<server_admin_password>";

	// Initialize connection object.
	$connection = pg_connect("host=$host dbname=$database user=$user password=$password")
			or die("Failed to create connection to database: ". pg_last_error(). ". </br>");

	print "Successfully created connection to database. <br/>";

	// Delete some data from table.
	$name = '\'orange\'';
	$query = "DELETE FROM inventory WHERE name = $name;";
	pg_query($connection, $query) 
		or die("Encountered an error when executing given sql statement: ". pg_last_error(). ". <br/>");
	print "Deleted 1 row of data. <br/>";

	// Closing connection
	pg_close($connection);
*/

/*
 limpar recursos

 az group delete \
    --name $AZ_RESOURCE_GROUP \
    --yes
   */
?>