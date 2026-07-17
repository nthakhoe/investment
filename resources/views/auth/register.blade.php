<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Create Account</title>

<style>

	body {
background: #f4f7fb;
font-family: 'Segoe UI', sans-serif;
display: flex;
justify-content: center;
align-items: center;
}

.register-container {
background: white;
padding: 40px;
border-radius: 14px;
width: 420px;
box-shadow: 0 8px 30px rgba(0,0,0,0.08);
}

h2 {
text-align: center;
margin-bottom: 10px;
color: #1e88e5;
}

.subtitle {
text-align: center;
margin-bottom: 25px;
color: #777;
}

label {
display: block;
margin-top: 15px;
font-weight: 500;
}

input, select {
width: 100%;
padding: 12px;
margin-top: 6px;
border-radius: 6px;
border: 1px solid #ddd;
}

button {
margin-top: 25px;
width: 100%;
padding: 14px;
background: #1e88e5;
color: white;
border: none;
border-radius: 6px;
font-size: 16px;
cursor: pointer;
}

button:hover {
background: #1565c0;
}

.checkbox-group {
margin-top: 15px;
font-size: 14px;
}

.login-link {
margin-top: 20px;
text-align: center;
}

.logo-wrapper {
    text-align: center;
    margin-bottom: 20px;
}

.register-logo {
    height: 70px;
    width: auto;
}

/* Optional enhancement for premium look */

.container {
	margin-top: 40px;
    background: white;
    padding: 40px;
    border-radius: 14px;
    width: 420px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.08);
}

.brand-subtitle {
    text-align: center;
    font-size: 14px;
    color: #6b7280;
    margin-top: -10px;
    margin-bottom: 15px;
}

</style>

</head>

<body>

<div class="container">

<div class="logo-wrapper">
    <img src="/images/homelogo.png" alt="Invexorite Wealth Logo" class="register-logo">
</div>

<h2>Create Investor Account</h2>
<p class="brand-subtitle">Invexorite Wealth Investor Registration</p>

@if(session('success'))
<p style="color:green">{{ session('success') }}</p>
@endif

<form method="POST" action="/register">

@csrf

<label>Full Name</label>
<input type="text" name="name" required>
@error('name') <div class="error">{{ $message }}</div> @enderror


<label>Email Address</label>
<input type="email" name="email" required>
@error('email') <div class="error">{{ $message }}</div> @enderror


<label>Phone Number</label>
<input type="text" name="phone" required>
@error('phone') <div class="error">{{ $message }}</div> @enderror


<label>Country</label>
<select name="country" required>
<option value="">Select Country</option>
<option value="Lesotho">Lesotho</option>
<option value="South Africa">South Africa</option>
</select>
@error('country') <div class="error">{{ $message }}</div> @enderror


<label>Password</label>
<input type="password" name="password" required>
@error('password') <div class="error">{{ $message }}</div> @enderror


<label>Confirm Password</label>
<input type="password" name="password_confirmation" required>


<label style="margin-top:15px;">
<input type="checkbox" required>
I understand investment risks and accept the platform disclaimer
</label>


<button type="submit">Register Account</button>

</form>

</div>

<script src="register.js"></script>

</body>
</html>