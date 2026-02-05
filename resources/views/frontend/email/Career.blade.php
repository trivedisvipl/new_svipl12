<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <div style="width:600px; margin:0 auto; font-family:Arial, Helvetica, sans-serif;">

        <header
            style="background-color:#f1f1f1; width:100%; float:left; padding:15px 0px; text-align:center; position:relative; margin-bottom:15px;">
            <a href="#"><img style="width: 70px;" src="{!! asset('assets/frontend/img/header-logo.png') !!}"></a>

        </header>

        <div style="border: 1px solid #f1f1f1; padding-left: 8px; padding-right: 8px;">
            <p style="font-size: 18px; margin-bottom: 20px; font-weight: 600;">

            </p>
            <p style="font-size: 18px; margin-bottom: 20px;">
                Nmae  {{ $data['first_name'] }} {{ $data['second_name'] }}
            </p>
            <p style="font-size: 18px; margin-bottom: 20px;">
                Email: {{ $data['email'] }}
             </p>
             <p style="font-size: 18px; margin-bottom: 20px;">
                Contact No:  {{ $data['contact'] }}
            </p>
            <p style="font-size: 18px; margin-bottom: 20px;">
                Address  {{ $data['address'] }}
            </p>
            <p style="font-size: 18px; margin-bottom: 20px;">
                Experience  {{ $data['experience'] }}
            </p>
            <p style="font-size: 18px; margin-bottom: 20px;">
                Position  {{ $data['position'] }}
            </p>
            <p style="font-size: 18px; margin-bottom: 20px;">
               Message: {{ $data['message'] }}
            </p>
        </div>
        <div style="text-align:center; background-color:#f1f1f1; padding-top: 15px; padding-bottom: 10px;">
            <a href="#" style="width: 100%; display: block;"><img src="{!! asset('assets/frontend/img/header-logo.png') !!}" style="width:40px; margin: auto; display: block;"></a>
            <p style="margin-bottom: 10px;">© 2024 {{ Config::get('settings.sitename') }}.</p>
        </div>



    </div>
</body>
</html>
