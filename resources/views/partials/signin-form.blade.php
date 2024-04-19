  <form method="POST" action="/signin">
    @csrf
    <div class="input">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" placeholder="Email...">
    </div>
    <div class="input">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Password...">
    </div>
    <button>Sign In</button>
  </form>
