<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <title>Contact Us</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            width: 50%;
            margin: 0 auto;
            background-color: #ffff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
        }

        .form-group {
            color: #5d6167;
            display: flex;
            flex-direction: column;
            font-family: unset;
            margin-top: 10px;
        }

        .btn {
            padding: 10px;
            border: none;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
        }

        .form-control {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .heading {
            text-align: center;
        }

        .text-danger {
            color: #f43f5e;
            font-size: 12px;
        }

        .text-success {
            color: #10b981;
            font-size: 12px;
        }
    </style>
</head>
<body>
<div>
    <h1 class="heading">Contact Us</h1>
    <section>
        <form class="contact-form" action="{{route('feedback.send')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
                @error('fullname')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
                @error('subject')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" class="form-control" name="message" required></textarea>
                @error('message')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            @if(session('message'))
                <div class="text-success">{{ session('message') }}</div>
            @endif
            <button type="submit"
                    class="g-recaptcha btn"
                    @if(config('feedback.recapthca.use')) data-sitekey="{{ config('feedback.recapthca.site_key') }}"
                    @endif
                    data-callback='onSubmit'
                    data-action='submit'
            >
                Send Feedback
            </button>
        </form>
    </section>
</div>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
        document.getElementById("contact-form").submit();
    }
</script>
</body>
</html>