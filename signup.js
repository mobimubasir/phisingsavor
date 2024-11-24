// Enhanced Form Validation
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('signupForm');
    form.addEventListener('submit', function (e) {
      let valid = true;
      const password = document.getElementById('password');
      const confirmPassword = document.getElementById('confirmPassword');
  
      // Check if passwords match
      if (password.value !== confirmPassword.value) {
        valid = false;
        confirmPassword.classList.add('is-invalid');
        confirmPassword.nextElementSibling.textContent = 'Passwords do not match.';
      } else {
        confirmPassword.classList.remove('is-invalid');
        confirmPassword.nextElementSibling.textContent = '';
      }
  
      // Additional validation checks can be added here
  
      if (!valid) {
        e.preventDefault();
      }
    });
  });
  