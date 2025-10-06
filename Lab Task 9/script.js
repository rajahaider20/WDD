const form = document.getElementById("signupForm");

form.addEventListener("submit", function (e) {
  e.preventDefault();
  clearErrors();

  let valid = true;

  // Get form values
  const fname = document.getElementById("fname").value.trim();
  const lname = document.getElementById("lname").value.trim();
  const phone = document.getElementById("phone").value.trim();
  const email = document.getElementById("emailField").value.trim();
  const password = document.getElementById("pass").value.trim();
  const confirmPass = document.getElementById("confirmPass").value.trim();

  // Regex patterns
  const phonePattern = /^[0-9]{10,11}$/; // 10 or 11 digits
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*]).{8,}$/;

  // First Name
  if (fname.length < 3) {
    showError("fname_err", "First name must be at least 3 characters");
    valid = false;
  }

  // Last Name
  if (lname.length > 10 || lname === "") {
    showError("lname_err", "Last name must be less than 10 characters");
    valid = false;
  }

  // Phone
  if (!phonePattern.test(phone)) {
    showError("phone_err", "Enter a valid phone number (10–11 digits)");
    valid = false;
  }

  // Email
  if (!emailPattern.test(email)) {
    showError("email_err", "Enter a valid email address");
    valid = false;
  }

  // Password
  if (!passwordPattern.test(password)) {
    showError(
      "pass_err",
      "Min 8 chars, 1 uppercase, 1 number, 1 special character"
    );
    valid = false;
  }

  // Confirm Password
  if (confirmPass !== password) {
    showError("confirmPass_err", "Passwords do not match");
    valid = false;
  }

  if (valid) {
    alert("Form submitted successfully!");
    form.submit();
  }
});

// Helper functions
function showError(id, message) {
  document.getElementById(id).textContent = message;
}

function clearErrors() {
  document.querySelectorAll(".err").forEach((el) => (el.textContent = ""));
}
