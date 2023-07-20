<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>unilink</title>
  <link rel="shortcut icon" type="image/png" href="../assets/imgs/unilink.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="authentication-login.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/imgs/logo2.png" width="180" alt="">
                </a>
                <p class="text-center">Your Repository</p>
                <form>
                  <div class="mb-3" id="loginForm">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remember this device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="javascript(0)">Forgot Password ?</a>
                  </div>
                  <!-- <a href="./index.php" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</a> -->
                  <button onclick="login()" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">New to unilink?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-register.php">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function login() {
      // Assuming you have a server-side authentication mechanism, you can send the username and password to the server for validation
      // For this example, let's use a simple check for demonstration purposes.
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;

      if (email === 'admin@gmail.com' && password === 'admin') {
        // Login successful
        document.getElementById('loginForm').classList.add('hidden');
        document.getElementById('loggedInArea').classList.remove('hidden');
        document.getElementById('emailDisplay').innerText = email;
      } else {
        alert('Invalid email or password');
      }
    }

    function logout() {
      // Perform any additional logout actions if required
      // For this example, we simply hide the logged-in area and show the login form again
      document.getElementById('loggedInArea').classList.add('hidden');
      document.getElementById('loginForm').classList.remove('hidden');
      document.getElementById('email').value = '';
      document.getElementById('password').value = '';
    }
  </script>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>