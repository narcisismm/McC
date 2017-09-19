


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="http(s)://cdn.goeasy.io/goeasy.js"></script>

    <script type="text/javascript">
        var goEasy = new GoEasy({
            appkey: 'BC-443fa407858e44e4808444bc0f6ac602'
        });
        //GoEasy-OTP可以对appkey进行有效保护，详情请参考：GoEasy-Reference
        <?php
        $url = "http(s)://goeasy.io/goeasy/publish";
        $post_data = array ("appkey" => "BC-443fa407858e44e4808444bc0f6ac602","channel" => "demo_channel", "content" => "Hello world!");
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        $output = curl_exec($ch);
        curl_close($ch);
        print_r($output);

        ?>
        goEasy.publish({
            channel: 'demo_channel',
            message: 'Hello world!'
        });
    </script>
</head>
<body>

</body>
</html>