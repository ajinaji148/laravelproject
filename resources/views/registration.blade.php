@extends('layout')
@section('content')
<section class="contact-page-section">
        @if($errors->any())
            @foreach($errors->all() as $error)
                {{$error}}
            @endforeach
        @endif
        @if(session('success'))
                    <p>{{session('success')}}</p>
        @endif
			<div class="container ">
                
				<div class="people-info-wrap">
					<h2>leave us your info</h2>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur.</p> -->
                   
					<form action="/submit" method="post" enctype="multipart/form-data">
                        @csrf
						<span>
						<input type="text" placeholder="Full Name*" name="firstname" class="input- name" required autocomplete="ON">
						<input type="text" placeholder="Last Name*" name="lastname"  class="input- name"required>
                        <select id=""name="gender" class="input- name" required  >
                            <option name="gender" value="male">male</option>
                            <option name="gender" value="female">female</option>
                            
                        </select>
                        <input type="date" name="dob" class="input- name" required>
						<input type="email" name="email" placeholder="Email*" class="input- email" required>
                        <input type="tel" maxlength="14" name="phonenumber" required placeholder="Phone Number" id="" class="input- email">
                        <select name="country" id="country" placeholder="Country*" class="input- name"></select>
                        <select name="state" id="state" placeholder="State*" class="input- name"></select> 
                        <select name="city" id="city" placeholder="city*" class="input- name"></select>
                       
                        
                         <div  class="col-12">
                        <h3>Hobbies</h3> 
            
                           </div><br>
                        <div class="form-check col-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                        Writting
                                </label>
                        </div>
                        <!-- <div class="form-check col-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Reading
                                </label>
                        </div> -->
                        
                         
                        <div class="form-check col-3" >
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Reading
                                </label>
                        </div>
                        
                         
                        <div class="form-check col-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Sports
                                </label>
                        </div>
                     
                         
                         <input type="file" name="file" class="input- name" required >

						</span>
						<!-- <input type="text" name="subject" placeholder="Subject*" class="input- subject">
						<textarea placeholder="Messages*" name="textarea" class="input-">
							
						</textarea> -->
                      
						<input type="submit" value="submit now">
					</form>
				</div>	
			</div>
		</section>
@endsection