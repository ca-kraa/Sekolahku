<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <title>Register Form</title>
</head>
<body class="bg-gray-100">
  <div class="flex justify-center items-center h-screen">
    <div class="bg-white rounded-lg p-8 shadow-md w-96">
      <h2 class="text-2xl font-bold mb-6">Register</h2>
      <form>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nama</label>
          <input class="w-full border border-gray-300 p-2 rounded-md" type="text" id="name" placeholder="Nama" required>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="nisn">NISN</label>
          <input class="w-full border border-gray-300 p-2 rounded-md" type="text" id="nisn" placeholder="NISN" required>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
          <input class="w-full border border-gray-300 p-2 rounded-md" type="email" id="email" placeholder="Email" required>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="email_verified">Verifikasi Email</label>
          <input class="w-full border border-gray-300 p-2 rounded-md" type="email" id="email_verified" placeholder="Verifikasi Email" required>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
          <input class="w-full border border-gray-300 p-2 rounded-md" type="password" id="password" placeholder="Password" required>
        </div>
        <div class="flex justify-center">
          <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors" type="submit">Register</button>
        </div>
      </form>
      <div class="flex justify-center mt-4">
        <p class="text-sm text-gray-700">Sudah punya akun? <a href="/login" class="text-blue-500">Login</a></p>
      </div>
    </div>
  </div>
</body>
</html>
