<!DOCTYPE html>
<html>
<head>
    <title>Send Email Notification</title>
</head>
<body>
    <h1>Send Email Notification</h1>
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('send.email.notification') }}" method="POST">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <div>
            <button type="submit">Send Notification</button>
        </div>
    </form>
</body>
</html>
