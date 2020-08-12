
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
		</ul>
	</nav>