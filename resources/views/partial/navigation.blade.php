
	<nav>
		<ul>

		  <li>
			  <a class="{{setActive('home')}}" href="{{route('home')}}">
			  	@lang('Home')
			  </a>
			</li>

			<li>
				<a class="{{setActive('about')}}"  href="{{route('about')}}">
				  @lang('About')
				</a>
			</li>

			<li>
		  	<a class="{{setActive('project.*')}}"  href="{{route('project.index')}}">
				  @lang('Project')
			   </a>
			</li>

			<li>
			   <a class="{{setActive('contact')}}"  href="{{route('contact')}}">
			     @lang('Contact')
		     </a>
		    </li>
		    @guest
            <li>
			   <a class="{{setActive('login')}}"  href="{{route('login')}}">
			     @lang('Login')
		       </a>
		    </li>
		    @else
              <li>
			   <a class="{{setActive('logout')}}"  href="{{route('logout')}}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
			     @lang('Logout')
		       </a>
		    </li>

		    @endauth
		</ul>
	</nav>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
      </form>
