<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="35207128587-r6g2gd2khs88ihck013geb2kp42qvuhl.apps.googleusercontent.com">
    <title>Document</title>
</head>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<body>
     <div id="mySignin" onclick="login()"><img src="google_image_here.png" alt="google" style="cursor:pointer;height: 60px;width: 309px;"/></div>

      <script type="text/javascript">
        function login() 
        {
          var myParams = {
            'clientid' : '35207128587-r6g2gd2khs88ihck013geb2kp42qvuhl.apps.googleusercontent.com',
            'cookiepolicy' : 'single_host_origin',
            'callback' : 'loginCallback',
            'approvalprompt':'force',
            'scope' : 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read'
          };
          gapi.auth.signIn(myParams);
        }

        function loginCallback(result)
        {
            if(result['status']['signed_in'])
            {
                var request = gapi.client.plus.people.get(
                {
                    'userId': 'me'
                });
                request.execute(function (resp)
                {
                    /* console.log(resp);
                    console.log(resp['id']); */
                    var email = '';
                    if(resp['emails'])
                    {
                        for(i = 0; i < resp['emails'].length; i++)
                        {
                            if(resp['emails'][i]['type'] == 'account')
                            {
                              //  email = resp['emails'][i]['value'];//here is required email id
                            }
                        }
                    }
                  // var usersname = resp['displayName'];//required name
                });
            }
        }
        function onLoadCallback()
        {
            gapi.client.setApiKey('YOUR_API_KEY');
            gapi.client.load('plus', 'v1',function(){});
        }

            </script>

        <script type="text/javascript">
              (function() {
               var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
               po.src = 'https://apis.google.com/js/client.js?onload=onLoadCallback';
               var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
             })();
        </script>
</body>
</html>