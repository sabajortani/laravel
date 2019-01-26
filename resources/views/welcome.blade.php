<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    سیستم مدیریت انبار
                </div>

                <div class="links">
                    <a href="/bol">ثبت بارنامه</a>
                    <a href="/good">تعریف کالا</a>
                    <a href="/customer">ایجاد مشتری جدید</a>
                    <a href="/usagefactor">ثبت فاکتور خرید</a>
                    <a href="/tell">ثبت شماره تلفن</a>
                    <a href="/driver">ثبت راننده</a>
                    <a href="/sender">ثبت فرستنده</a>
                    <a href="/reseaver">ثبت گیرنده</a>
                    <a href="/store">ثبت انبار</a>
                    <a href="/document">ثبت سند</a>
                    <a href="/employee">ثبت کارمند جدید</a>
                    <br/>
                    <br/>
                    <a href="{{ route('bol.show.all') }}">مشاهده و ویرایش همه ی بارنامه ها</a>
                    <a href="/employee">ثبت کارمند جدید</a>
                    <a href="/employee">ثبت کارمند جدید</a>

                </div>
            </div>
        </div>
    </body>
</html>
