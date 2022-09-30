<div class="d-flex justify-content-center align-items-center" id="login-container">
    <form action="?page=login&act=log" method="post" class="bg-light p-5 border">
        <!-- Email input -->
        <h3 class="text-uppercase mb-4 mt-4">Login</h3>
        <div class="form-outline mb-3">
            <input type="email" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-3">
            <input type="password" id="form2Example2" class="form-control" />
            <label class="form-label" for="form2Example2">Password</label>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
            </div>

            <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
            </div>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4 w-100">Sign in</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Not a member? <a href="?arg=register">Register</a></p>
            <p>or sign up with:</p>
            <button type="button" class="btn btn-dark btn-floating mx-1 mb-2 px-3">
                <i class="fab fa-facebook-f text-reset text-dark"></i>
            </button>

            <button type="button" class="btn btn-dark btn-floating mb-2 mx-1">
                <i class="fab fa-google text-reset text-dark"></i>
            </button>

            <button type="button" class="btn btn-dark btn-floating mx-1 mb-2">
                <i class="fab fa-twitter text-reset "></i>
            </button>

            <button type="button" class="btn btn-dark btn-floating mx-1 mb-2">
                <i class="fab fa-github text-reset"></i>
            </button>
        </div>
    </form>
</div>