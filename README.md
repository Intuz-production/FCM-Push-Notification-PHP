<h1>Introduction - FCM Push Notification</h1>
INTUZ is presenting an interesting FCM push notification class. 
Please follow the below steps to integrate this control in your project.

<br/><br/>
<h1>Push notification operations</h1>

Send push notification to Android and iOS devices using FCM

<br/><br/>
<h1>Example Usage</h1>

define below constants somewhere in you main configuration parameters file
```
define("PUSHNOTIFICATION_API_KEY", "Your google account's SERVER key");
define("PUSHNOTIFICATION_URL", "https://fcm.googleapis.com/fcm/send"); // for FCM
```

Include your notifiation class
```
require_once('../notification.class.php');
$push = new notification();
```

How to use defined instance of notification class
```

$deviceTokens = array("ABCD", "XYZ" ...... );
$parameters = array(
	"YOUR_KEY" => "YOUR_VALUEs",
	"message" => "relavant message",
	"type" => "notification type",
	"data" => "Other custom data",
);

$push->sendnotification($deviceTokens, $parameters);
```

<br/><br/>
<h1>Bugs and Feedback</h1>
For bugs, questions and discussions please use the Github Issues.

<br/><br/>
<h1>License</h1>
The MIT License (MIT)
<br/><br/>
Copyright (c) 2018 INTUZ
<br/><br/>
Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions: 
<br/><br/>
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

<br/>
<h1></h1>
<a href="https://www.intuz.com/" target="_blank"><img src="Screenshots/logo.jpg"></a>
