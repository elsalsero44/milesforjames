<?php
// flip to true, to enable debugging output of queries.
$m_bDebugQueries=false;

// handles the posting of a new news item.
function vAddContact($szName, $szPhone1, $szPhone2, $szEmail, $nAvailability, $szNotes)
{
	$szQueryString = "INSERT INTO ContactUs (name, phone1, phone2, email, availability, notes) VALUES (" .
					 "'" . $szName . "'," . 
					 "'" . $szPhone1 . "'," . 
					 "'" . $szPhone2 . "'," . 
					 "'" . $szEmail . "'," . 
					 $nAvailability . "," . 
					 "'" . $szNotes . "')";

	if ($m_bDebugQueries)
	{					 
		 print("szQueryString=" . $szQueryString);
	}
	 mysql_query($szQueryString);
}
?>

