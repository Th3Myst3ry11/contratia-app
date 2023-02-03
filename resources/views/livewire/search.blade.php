<div >
  
    <div class="col-lg-6" style="display:contents">
      <h3 class="text-center ">Search for the right Freelancer for you</h3><hr>
      <div class="form-group" style="padding: 0px 230px">
         
        <input type="text" wire:model="searchTerm" class="form-control">
      </div>
      <div id="search_list"></div>
  </div>

  <form style="position: absolute;left:0;" wire:submit.prevent='filter'>
    <div class="bg-white shadow-md rounded-lg p-6 w-64">
        <h2 class="text-lg text-gray-700 font-bold mb-4">Filter</h2>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="option-1">skill</label>
          <select wire:model='skillFilter' class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="option-1">
           @foreach($skills as $data)
            <option value="{{$data->skill}}">{{$data->skill}}</option>
            @endforeach 
          </select>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="option-2">Country</label>
          <select wire:model='countryFilter' class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="option-2">
            @foreach($countries as $data)
            <option value="{{$data->country}}">{{$data->country}}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="option-3">Per hour rate</label>
          <select wire:model='rateFilter' class="appearance-none border border-gray-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="option-3">
            <option value='10'> <10$/h </option>
            <option value='10-20'> 10$-20$ </option>
            <option value='20-30'> 20$-30$</option>
            <option value='20-30'> 30$-40$</option>
            <option value='<40'> <30$/h </option>
          </select>
        </div>
        <button type="submit" class='button' value="filter" style="background-color: blueviolet" >filter</button>
      </div>
  </form>
    @foreach ($profiles as $profile)
    

    <article class="border w-2/4 mx-auto border-gray-400 rounded-lg md:p-4 bg-white sm:py-3 py-4 px-2 m-10" data-article-path="/hagnerd/setting-up-tailwind-with-create-react-app-4jd" data-content-user-id="112962">
        <div role="presentation">
            <div>
              <div class="m-2">
                <div class="flex items-center">
                    <div class="mr-2">                
                      <a href="/hagnerd">          
                        <img class="rounded-full w-16" src="{{asset('storage/images/'.$profile->file_path)}}" alt="hagnerd profile" loading="lazy">        
                      </a>      
                    </div>
                    <div>
                      <p>          
                        <a href="/hagnerd" class="text text-gray-700 text-sm hover:text-black">{{$profile->firstname}}</a>                  
                      </p>
                      <a href="/hagnerd/setting-up-tailwind-with-create-react-app-4jd" class="text-xs text-gray-600 hover:text-black">          
                        <time datetime="2019-08-02T13:58:42.196Z">{{$profile->city}},{{$profile->country}}</time>        
                      </a>      
                    </div>
                </div>
              </div>
              <div class="pl-12 md:pl-10 xs:pl-10">
                <h2 class="text-2xl font-bold mb-2 text-blue-600 leading-7">
                  <a href="/hagnerd/setting-up-tailwind-with-create-react-app-4jd" id="article-link-151230">
                    {{$profile->title}}
                  </a>
                </h2>
               
                <div class="mb-2">
                  @foreach($profile->skill as $skill)
                    <a href="/t/react" class="text-sm text-gray-600 p-1 hover:text-black">
                      <span class="text-opacity-50">#</span>
                      {{$skill}}
                    </a>
                   @endforeach
                </div>
                <div class="mb-1 leading-6 w-2/4">
                  <p style="color:black">{{$profile->description}}</p>
                </div>
                <div class="flex justify-between items-center">
                   
                    <div class="flex items-center">                
                                 
                      <a href="/show/{{$profile->id}}" type="button" class="bg-gray-400 rounded text-sm px-3 py-2 text-current hover:text-black hover:bg-gray-500">                      
                        <span>See more Information</span>                      
                      </a>              
                    </div>
                </div>
              </div>
          </div>
        </div>
      </article>
      @endforeach

   
</div>
