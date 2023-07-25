@extends('layout')
@section('content')
<section class="contact-page-section">
			<div class="container">
				<div class="people-info-wrap">
					<h2>leave us your info</h2>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur.</p> -->
					<form method="post" action="/login">
					
						@csrf
						<span>

                        <input type="email" placeholder="Email*" name="email" class="input- email" required autocomplete="ON">
                        <input type="password" placeholder="password" name="password" class="input- email"required autocomplete="ON">
                        <button class="input- email">Login</button>
                        <a href=""  class="input- email"><button >forgot password</button></a>
					</form>	
					@if($errors->any())
    					@foreach($errors->all() as $error)
    						<span>{{$error}}</span>
   						@endforeach
    				@endif
						
						
				</div>

				
			</div>
		</section>

@endsection