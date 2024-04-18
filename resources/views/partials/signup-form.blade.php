 <form method="POST" action="/users">
   @csrf
   <div class="input">
     <label for="name">Name</label>
     <input type="text" name="name" id="name">
   </div>
   <div class="input">
     <label for="username">Username</label>
     <input type="text" name="username" id="username">
   </div>
   <div class="input">
     <label for="email">Email</label>
     <input type="email" name="email" id="email">
   </div>
   <div class="input">
     <label for="password">Password</label>
     <input type="password" name="password" id="password">
   </div>
   <div class="input">
     <label for="confirm_password">Confirm Password</label>
     <input type="password" name="confirm_password" id="confirm_password">
   </div>
   <button>Sign Up</button>
 </form>
