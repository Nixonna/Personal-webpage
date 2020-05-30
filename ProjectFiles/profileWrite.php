<?php
$xml = new DOMDocument('1.0','UTF-8');
$xml->load('profile.xml');

$personal = "Hi! My name is Nixon, I'm 20 years old."; 
	$personal1 = "I'm now persuing BTech in CSE from VIT Bhopal.";
	$personal2 = "I'll be completing my BTEch by another year.";
	$personal3 = "I would like to persue a career as a Data Scientist.";
	
$qualification = "I have completed my higher secondary education from Army Public school."; 
	$qualification1 = "I am currently studying in VIT Bhopal.";
	
$project = "Sports Analytics."; 
	$project1 = "Online Study portal.";
	
$hobbies = "Playing Basketball."; 
	$hobbies1 = "Listening Songs."; 
	$hobbies2 = "Watching Movies.";

$rootTag = $xml->getElementsByTagName('document')->item(0);
$infoTag = $xml->createElement('info');
		$personalTag = $xml->createElement('personal');
			$personalTag1 = $xml->createElement('line1',$personal);
			$personalTag2 = $xml->createElement('line2',$personal1);
			$personalTag3 = $xml->createElement('line3',$personal2);
			$personalTag4 = $xml->createElement('line4',$personal3);
			
		$qualificationTag = $xml->createElement('qualification');
			$qualificationTag1 = $xml->createElement('line1',$qualification);
			$qualificationTag2 = $xml->createElement('line2',$qualification1);
			
		$projectTag = $xml->createElement('project');
			$projectTag1 = $xml->createElement('line1',$project);
			$projectTag2 = $xml->createElement('line2',$project1);
		
		$hobbiesTag = $xml->createElement('hobbies');
			$hobbiesTag1 = $xml->createElement('line1',$hobbies);
			$hobbiesTag2 = $xml->createElement('line2',$hobbies1);
			$hobbiesTag3 = $xml->createElement('line3',$hobbies2);
			
			
		$infoTag->appendChild($personalTag);
			$personalTag->appendChild($personalTag1);
			$personalTag->appendChild($personalTag2);
			$personalTag->appendChild($personalTag3);
			$personalTag->appendChild($personalTag4);
			
		$infoTag->appendChild($qualificationTag);
			$qualificationTag->appendChild($qualificationTag1);
			$qualificationTag->appendChild($qualificationTag2);
			
		$infoTag->appendChild($projectTag);
			$projectTag->appendChild($projectTag1);
			$projectTag->appendChild($projectTag2);
			
		$infoTag->appendChild($hobbiesTag);
			$hobbiesTag->appendChild($hobbiesTag1);
			$hobbiesTag->appendChild($hobbiesTag2);
			$hobbiesTag->appendChild($hobbiesTag3);
			
		$rootTag->appendChild($infoTag);
		$xml->save('profile.xml');
?>