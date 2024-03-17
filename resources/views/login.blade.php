<!DOCTYPE html>
<html>

<head>
    <title>Fisheries Department Khyberpakhtunkhwa</title>
    <style>
        /* Some basic styling */

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url("{{ url('../storage/app/images/fish.jpg') }}");
            /* Replace with your image's path */
            background-size: cover;
            background-repeat: no-repeat;
        }

        footer {
            text-align: center;
            padding-top: 5px;
            padding-bottom: 5px;
            background: #20222438;
            margin-top: 10px;
        }

        .kurtlar {
            color: rgb(11, 3, 3);
        }

        .container {
            width: 220px;
            margin: 0 auto;
            padding: 90px;
            margin-top: 50px;
            text-align: center;
            border-style: groove;
        }

        .logo {
            margin-bottom: 30px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #14B8CF;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="{{ url('../storage/app/images/New Logo Fisheries.png') }}" alt="Logo" width="150px">
        </div>
        @if(session()->get('error'))
        <div class="alert alert-danger" style="background-color: #911B14 !important; font-size: 12px; padding-top: 5px; padding-bottom: 5px; color: white; text-align: left; padding: 10px;" role="alert">
            {{ session()->get('error') }}
        </div><br>
        @elseif($errors->any())
        <div class="alert alert-danger" style="background-color: #911B14 !important; font-size: 12px; padding-top: 5px; padding-bottom: 5px; color: white; text-align: left; padding: 10px;" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br>
        @endif
        
        <form action="{{url('login')}}" method="post">
            @csrf
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button class="login-btn" type="submit">Login</button>
        </form>
    </div>
    <footer>
        <p>Developed By <a href="https://www.suit.edu.pk/">SUIT Incubation</a> © <a class="kurtlar" href="https://www.kurtlardeveloper.com/">Kurtlar developers</a></p>
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        <?php if (session()->get('error')) { ?>
            setInterval(function() {
                $('.alert').hide();
            }, 4000);
        <?php } ?>
    });
</script>

</html>