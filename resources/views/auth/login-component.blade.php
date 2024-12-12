<div>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin Panel | Login</title>

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
      <!-- Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
      <style>
          body {
              font-family: 'Inter', sans-serif;
              background: linear-gradient(to right, #4facfe, #00f2fe);
              height: 100vh;
              display: flex;
              justify-content: center;
              align-items: center;
              margin: 0;
          }

          .login-container {
              background: #fff;
              border-radius: 10px;
              box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
              padding: 2rem;
              max-width: 400px;
              width: 100%;
          }

          .login-container h1 {
              font-size: 1.75rem;
              font-weight: 700;
              margin-bottom: 1rem;
              color: #333;
              text-align: center;
          }

          .form-control {
              border-radius: 30px;
              padding: 10px 15px;
              font-size: 0.95rem;
          }

          .btn-primary {
              background: #4facfe;
              border: none;
              border-radius: 30px;
              padding: 10px 20px;
              font-size: 1rem;
              font-weight: 600;
              transition: background 0.3s ease;
          }

          .btn-primary:hover {
              background: #00c6ff;
          }

          .remember-me {
              display: flex;
              align-items: center;
              gap: 0.5rem;
              font-size: 0.85rem;
          }

          .alert-danger {
              font-size: 0.9rem;
              border-radius: 5px;
              margin-bottom: 1rem;
          }

          .footer {
              text-align: center;
              margin-top: 2rem;
              font-size: 0.85rem;
              color: #555;
          }
      </style>
  </head>

  <body>
      <div class="login-container">
          <h1>Welcome Back!</h1>
          @if (session()->has('error'))
              <div class="alert alert-danger">
                  {{ session()->get('error') }}
              </div>
          @endif
          <form>
              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" wire:model="email" id="email" class="form-control" placeholder="Enter your email">
                  @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
              </div>
              <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" wire:model="password" id="password" class="form-control" placeholder="Enter your password">
                  @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
              </div>
              <div class="mb-3 form-check remember-me">
                  <input type="checkbox" id="remember" class="form-check-input">
                  <label for="remember" class="form-check-label">Remember Me</label>
              </div>
              <div class="d-grid">
                  <button type="submit" wire:click="login" class="btn btn-primary">Sign In</button>
              </div>
          </form>
          <div class="footer">
              © 2024 Admin Panel. All rights reserved.
          </div>
      </div>

      <!-- Bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>

  </html>
</div>
