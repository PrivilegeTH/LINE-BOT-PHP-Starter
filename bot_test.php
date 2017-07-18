<?php							
$access_token = 'lWF7amB1WGocJ3CzMsQ78Rjed/9T61jB0s893PVhyTrbF/CuCVN4ZgMWjpUz05HlSiSM/kEpT6N0YQ6nTOhRCKcUmfCAM/WV33qiArst0AlnPaA+DZGyf1oLvQwFKkkMryKbv3/F4yc7cQT6P+RnRAdB04t89/1O/w1cDnyilFU=';							
							
$content = file_get_contents('php://input');							
$events = json_decode($content, true);							


if (!is_null($events['events'])) {							
foreach ($events['events'] as $event) {							
							
	if (($event['type'] == 'message' && strtolower(preg_replace("/[^A-Za-z0-9]/", "", $event['message']['text'])) ==  'hi')) 
        {$text ='wassup?'; }	

	else if (($event['type'] == 'message' && strtolower(preg_replace("/[^A-Za-z0-9]/", "", $event['message']['text'])) ==	'rb'	) ||				
	($event['type'] == 'message' && strtolower(preg_replace("/[^A-Za-z0-9]/", "", $event['message']['text'])) == 	'richardsbay'	) ||				
	($event['type'] == 'message' && strtolower(preg_replace("/[^A-Za-z0-9]/", "", $event['message']['text'])) == 	'richardbay'	) ||				
	($event['type'] == 'message' && strtolower(preg_replace("/[^A-Za-z0-9]/", "", $event['message']['text'])) == 	'richardsbayprice'	)				
 	) {						
	$text =	'Richards Bay coal	 82.64 	USD/ton	-0.51%	changed from yesterday'	
	; }						
			
	else {				
	$text =	"Sorry, I'm not sure what you are asking, could you try something else?			
		Or try 'List' to see the example of keywords"			
	; }




				
	$replyToken = $event['replyToken'];				
	$messages = [				
	'type' => 'text',				
	'text' => $text				
	];				
	$url = 'https://api.line.me/v2/bot/message/reply';				
	$data = [				
	'replyToken' => $replyToken,				
	'messages' => [$messages],				
	];				
	$post = json_encode($data);				
	$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);				
	$ch = curl_init($url);				
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");				
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);				
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);				
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);				
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);				
	$result = curl_exec($ch);				
	curl_close($ch);				
	echo $result . "\r\n";				
	}				
}					
echo "OK";		
		
