
/**
* Created by IntelliJ IDEA.
* User: nemo
* Date: 18/10/17
* Time: 13:58
*/

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BlogController extends CI_Model
{


	public function insert($data)
	{
		$this->db->query(
			'SELECT * FROM `BlogPost` WHERE 1');
		// Inserting into your table
		$this->db->insert('MyTable', $data);
		// Return the id of inserted row
		return $idOfInsertedData = $this->db->insert_id();
	}
}

//$servername = "46.252.205.164";
//$username = "164509733_bhayward";
//$password = "b34nsprout";
//$dbname = "BenHaywardNetUsers";

//
//$this->load->database();
//
//// Create connection
////$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//	die("Connection failed: " . $conn->connect_error);
//}
//
//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";
//
//if ($conn->query($sql) === TRUE) {
//	echo "New record created successfully";
//} else {
//	echo "Error: " . $sql . "<br>" . $conn->error;
//}
//
//$conn->close();
//
?>
