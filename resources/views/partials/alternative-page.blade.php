  <div class="alternative-page">
    @if (request()->is('signin'))
      <span>
        Don't have an account?
        <a href="/signup">Sign Up</a>
      </span>
    @elseif(request()->is('signup'))
      <span>
        Already have an account?
        <a href="/signin">Sign In</a>
      </span>
    @endif

  </div>
