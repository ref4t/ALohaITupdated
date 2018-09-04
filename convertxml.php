<?php
    require 'config.php';
    
    $filename=time().".xml";

    $sql = "select * from member order by id desc";
    $res = mysqli_query($conn, $sql);
   
    $xml = new XMLWriter();
    $xml->openMemory();
    //$xml->openURI("php://output");  //print on screen no file output
    $xml->setIndent(true);
    $xml->startDocument('1.0', 'UTF-8');
    $xml->startElement('all_member');
    while ($row = mysqli_fetch_assoc($res)) {
      $xml->startElement("member");
      $xml->writeElement("id", $row['ID']);
      $xml->writeElement("name", $row['Name']);
      $xml->writeElement("email", $row['Email']);
	  $xml->writeElement("position", $row['Position']);
      $xml->writeElement("salary", $row['Salary']);
	  $xml->writeElement("education", $row['Education']);
	  $xml->writeElement("skills", $row['skills']);
	  $xml->writeElement("location", $row['location']);
	  
      $xml->endElement();
    }
    $xml->endElement();
    $xml->endDocument();

    //header('Content-type: text/xml'); //print on screen no file output with output memory
    //echo $xml->outputMemory(); //print on screen no file output with output memory
    
    $file = $xml->outputMemory();
    file_put_contents($filename,$file);
    
    //$xml->flush(); //print on screen no file output

    // Free result set
    mysqli_free_result($res); 
    // Close connections
    mysqli_close($conn);
    echo "<script>
			alert('XML created!');
			window.location.href='membershow.php';
			</script>" ;
?>