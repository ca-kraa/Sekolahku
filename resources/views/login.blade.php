<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="max-w-md w-full px-6 py-8 bg-white shadow-md">
            <h2 class="text-2xl font-bold mb-8 text-center">Masuk</h2>
            <form>
                <div class="mb-6">
                    <label class="block font-bold mb-2" for="nisn">NISN / Email</label>
                    <input class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:ring focus:ring-blue-500" type="text" id="nisn" name="nisn" placeholder="Enter your NISN" required>
                </div>
                <div class="mb-6">
                    <label class="block font-bold mb-2" for="password">Password:</label>
                    <input class="w-full border border-gray-300 px-3 py-2 rounded-md focus:outline-none focus:ring focus:ring-blue-500" type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="flex justify-between items-center">
                    <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-green-500" type="submit">Masuk</button>
                    <a class="text-blue-500 hover:underline" href="">Belum Punya Akun?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
