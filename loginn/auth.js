document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('loginForm');
    const message = document.getElementById('message');

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        const username = form.elements['username'].value;
        const password = form.elements['password'].value;

        // Contoh validasi sederhana
        if (username === 'admin' && password === 'admin123') {
            message.textContent = 'Login successful!';
            setTimeout(() => {
                window.location.href = '../fixed-sidebar.html'; // Ganti 'index.html' dengan halaman utama Anda
            }, 1000); // Redirect setelah 1 detik (opsional)
        } else {
            message.textContent = 'Invalid username or password.';
        }
    });
});
