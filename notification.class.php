<?php
// Copyright (C) 2018 INTUZ. 

// Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the
// "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish,
// distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to
// the following conditions:

// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
// MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR
// ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
// THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
class notification{
	function sendnotification($devicetoken, $param){
		$apiKey = PUSHNOTIFICATION_API_KEY; //define api key in your main file
		$url = PUSHNOTIFICATION_URL; //define FCM URL in your main file i.e "https://fcm.googleapis.com/fcm/send"

		$registrationIDs = $devicetoken; //Array of device tokens. could be single or multiple
		 
		//Set variables
		$fields = array(
		'registration_ids' => $registrationIDs,
		'data' => $param,
		);
		
		 
		$headers = array(
		'Authorization: key=' . $apiKey,
		'Content-Type: application/json'
		);
		 
		//Open connection
		$ch = curl_init();
		 
		// Set the url, number of POST vars, POST data
		curl_setopt( $ch, CURLOPT_URL, $url );
		 
		curl_setopt( $ch, CURLOPT_POST, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		 
		curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );
		 
		//Execute post
		$result = curl_exec($ch);
		
		if ($result === FALSE) {
		    die('Curl failed: ' . curl_error($ch));
		}

		//Close connection
		curl_close($ch);	
		return $result;
		
	}
}
