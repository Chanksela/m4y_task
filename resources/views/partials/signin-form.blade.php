  <form method="POST" action="/signin">
    @csrf
    <div class="input">
      <label for="email">Email</label>
      <input type="email" name="email" id="email">
    </div>
    <div class="input">
      <label for="password">Password</label>
      <input type="password" name="password" id="password">
    </div>
    <button>Sign In</button>
  </form>
