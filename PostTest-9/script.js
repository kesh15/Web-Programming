document.getElementById("loginForm").addEventListener("submit", function(event) {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
  
    // Validasi sederhana di sini (misalnya, cek jika field kosong)
  
    if (username.trim() === '' || password.trim() === '') {
      alert("Username dan password harus diisi!");
      event.preventDefault();
    }
  });
  