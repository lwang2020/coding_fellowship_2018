<?php
include ('include/include_all.php');
?>


<?php
//Function 1: this gets all the items in a multi-tiered array
function GetAllInventoryItems(){
	$result = dbQuery("
		SELECT *
		FROM inventory
	")->fetchAll();
return $result;
}

//Function 2: When you call this, make sure the function has a number in it
//so it can call the right column, since you're tryna only get one array from one column
function GetAnInventoryItem($inventoryId){
		$result = dbQuery("
		SELECT *
		FROM inventory
		WHERE inventoryId = $inventoryId
		")->fetch();
	return $result;
}

//Function 3: When you call this, it lets you add stuff into the table
function InsertInventoryItem($name, $description, $category){
	$result = dbQuery("
		INSERT INTO inventory(name, description, category)
		VALUES('$name', '$description', '$category')
	")->fetch();
}

//Let's make this the call area:
$allInventoryItems = GetAnInventoryItem(3);


/*
Here's an example of us using Function 3:

InsertInventoryItem ('Grapefruit', 'I like the red kind', 'Produce');
InsertInventoryItem ('Turkey pot pie', 'they have a gazillion calories', 'Frozen');
InsertInventoryItem ('Captain Crunch', 'Lots of sugar', 'Cereal');
*/
