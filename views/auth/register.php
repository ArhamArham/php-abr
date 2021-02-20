<?php
?>
<div class="container mt-5">
    <div class="col row">
        <div class="col-3"></div>
        <div class="col-6">
            <h2>Register to us</h2>
            <form method="post" action="/register">
                <div class="col row">
                    <div class="col-6 mb-3">
                        <label for="first-name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first-name">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="last-name" class="form-label">last Name</label>
                        <input type="text" class="form-control" id="last-name">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm-password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>
