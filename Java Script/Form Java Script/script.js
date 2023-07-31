function validateForm() {
  // Check all input boxes for empty values
  const inputs = document.querySelectorAll('input[type="text"], input[type="date"], input[type="email"], input[type="tel"], input[type="password"]');
  for (const input of inputs) {
    if (input.value.trim() === '') {
      alert("Error: Input is empty!");
      return false;
    }
  }

  // Validate Email address
  const emailInput = document.getElementById('email');
  const emailValue = emailInput.value.trim();
  if (!validateEmail(emailValue)) {
    alert("Error: Invalid Email address!");
    return false;
  }

  // Validate Phone number
  const phoneInput = document.getElementById('phone');
  const phoneValue = phoneInput.value.trim();
  if (!validatePhoneNumber(phoneValue)) {
    alert("Error: Invalid Phone number!");
    return false;
  }

  // Validate password confirmation
  const passwordInput = document.getElementById('password');
  const confirmPasswordInput = document.getElementById('confirmPassword');
  const passwordValue = passwordInput.value;
  const confirmPasswordValue = confirmPasswordInput.value;
  if (passwordValue !== confirmPasswordValue) {
    alert("Error: Passwords do not match!");
    return false;
  }

  return true;
}

function validateEmail(email) {
  // Simple email validation with @ and .
  return /\S+@\S+\.\S+/.test(email);
}

function validatePhoneNumber(phone) {
  // Phone number should consist of 10 digits
  return /^\d{10}$/.test(phone);
}
