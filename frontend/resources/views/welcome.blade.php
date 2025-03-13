<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Magang PNC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-gray-200 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-96" x-data="{ role: '', showPassword: false }">
        <h2 class="text-2xl font-bold text-center text-gray-700">Welcome!</h2>
        <p class="text-sm text-gray-500 text-center mb-6">Silahkan pilih peran Anda</p>

        <!-- Pilihan Role -->
        <div class="space-y-2 mb-4">
            <button @click="role = 'admin'" :class="role === 'admin' ? 'bg-orange-600 text-white' : 'bg-gray-300 text-gray-700'"
                class="w-full py-2 rounded-lg transition">Admin</button>
            <button @click="role = 'mahasiswa'" :class="role === 'mahasiswa' ? 'bg-orange-600 text-white' : 'bg-gray-300 text-gray-700'"
                class="w-full py-2 rounded-lg transition">Mahasiswa</button>
            <button @click="role = 'pembimbing'" :class="role === 'pembimbing' ? 'bg-orange-600 text-white' : 'bg-gray-300 text-gray-700'"
                class="w-full py-2 rounded-lg transition">Pembimbing</button>
        </div>

        <!-- Form Login -->
        <form x-show="role" x-transition action="/dashboard" method="GET">
        <input type="hidden" name="role" :value="role">

            <div>
                <label class="block text-gray-700">Username</label>
                <input type="text" name="username" class="w-full px-4 py-2 mt-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Masukkan Username" required>
            </div>

            <div class="relative">
                <label class="block text-gray-700">Password</label>
                <input :type="showPassword ? 'text' : 'password'" name="password" class="w-full px-4 py-2 mt-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Masukkan Password" required>
                <button type="button" class="absolute top-9 right-3 text-gray-500" @click="showPassword = !showPassword">
                    <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z" />
                    </svg>
                    <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A9.004 9.004 0 013 12a9.004 9.004 0 0112.5-8.325M21 12a9.003 9.003 0 01-9 9c-1.825 0-3.525-.525-5-1.5M17.25 17.25l3.75 3.75M3.75 3.75l3.75 3.75" />
                    </svg>
                </button>
            </div>

            <button type="submit" class="w-full bg-orange-600 text-white py-2 rounded-lg hover:bg-orange-700 transition">Masuk</button>
        </form>

        <p class="text-sm text-center text-gray-500 mt-4">Tidak memiliki akun? <a href="/register" class="text-orange-600 hover:underline">Daftar</a></p>
    </div>
</body>
</html>