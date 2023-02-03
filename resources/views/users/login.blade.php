@extends('layouts/app')

@section('content')

<section class="h-screen" style="background-color: azure">
    <div class="container px-6 py-12 h-full">
      <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
        <div class="md:w-8/12 lg:w-6/12 mb-12 md:mb-0">
          <img
            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
            class="w-full"
            alt="Phone image"

          />
        </div>
        <div class="md:w-8/12 lg:w-5/12 lg:ml-20">
          <form method="POST" action="/users/authenticate">
            @csrf
            <!-- Email input -->
            <div class="mb-6">
              <input
                type="text"
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                placeholder="Email address/Username" name="email" value="{{old('email')}}"
              />

              @error('email')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
  
            <!-- Password input -->
            <div class="mb-6">
              <input
                type="password"
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                placeholder="Password" name='password'
              />
              @error('password')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
  
            <div class="flex justify-between items-center mb-6">
              <div class="form-group form-check">
                <input
                  type="checkbox"
                  class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                  id="exampleCheck3"
                  checked
                />
                <label class="form-check-label inline-block text-gray-800" for="exampleCheck2"
                >Remember me</label
              >
              </div>
              <a
                href="#!"
                class="text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 duration-200 transition ease-in-out"
                >Forgot password?</a
              >
              <p class="text-sm font-semibold mt-2 pt-1 mb-0">
                Don't have an account?
                <a
                  href="/register"
                  class="text-red-600 hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out"
                  >Register</a
                > <br>
              </p>
            </div>
  
            <!-- Submit button -->
            <button
              type="submit"
              class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
              data-mdb-ripple="true"
              data-mdb-ripple-color="light"
            >
              Sign in
            </button>
  
            <div
              class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5"
            >
              <p class="text-center font-semibold mx-4 mb-0">OR</p>
            </div>
  
            <a
              class="px-7 py-3 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full flex justify-center items-center mb-3"
              style="background-color: #fa2500"
              href="{{route('google-auth')}}"
              role="button"
              data-mdb-ripple="true"
              data-mdb-ripple-color="light"
              
            >
              <!-- Facebook -->
              <svg 
              xmlns="http://www.w3.org/2000/svg"
               viewBox="0 0 488 512"
               class="w-3.5 h-3.5 mr-2"
              >
                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/>
            </svg>Continue with Google
            </a>
          
              
          </form>
        </div>
      </div>
    </div>
  </section>

  @endsection