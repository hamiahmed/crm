<form method="post" style="border:1px solid #ccc">
    @csrf
    <div class="container">
        <h1>Sign Up</h1>
        <hr>

        <label for="email"><b>Name</b></label>
        <input type="text" placeholder="Enter Email" name="name" required>
        <br>
        <label for="email"><b>Username</b></label>
        <input type="text" placeholder="Enter Email" name="username" required>
        <br>
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>
        <br>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <br>
        <label for="psw"><b>Role</b></label>
        <select name="role">
            <option value="1">Admin</option>
            <option value="2">HR</option>
        </select>
        <div class="clearfix">
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>