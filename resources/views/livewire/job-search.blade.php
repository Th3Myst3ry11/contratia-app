<div >
  
    <div class="col-lg-6" style="display:contents">
      <h3 class="text-center ">Search for the right Job for you</h3><hr>
      <div class="form-group" style="padding: 0px 230px">
         
        <input type="text" wire:model="searchTerm" class="form-control">
      </div>
      <div id="search_list"></div>
  </div>


    @foreach ($jobs as $jobs)
    

    <article class="border w-2/4 mx-auto border-gray-400 rounded-lg md:p-4 bg-white sm:py-3 py-4 px-2 m-10" data-article-path="/hagnerd/setting-up-tailwind-with-create-react-app-4jd" data-content-user-id="112962">
        <div role="presentation">
            <div>
              <div class="m-2">
                <div class="flex items-center">
                    <div class="mr-2">                
                      <a href="/hagnerd">          
                        <img class="rounded-full w-16" src="{{asset('storage/images/'.$jobs->file_path)}}" alt="hagnerd jobs" loading="lazy">        
                      </a>      
                    </div>
                    <div>
                      <p>          
                        <a href="/hagnerd" class="text text-gray-700 text-sm hover:text-black">{{$jobs->firstname}}</a>                  
                      </p>
                      <a href="/hagnerd/setting-up-tailwind-with-create-react-app-4jd" class="text-xs text-gray-600 hover:text-black">          
                        <time datetime="2019-08-02T13:58:42.196Z">{{$jobs->city}},{{$jobs->country}}</time>        
                      </a>      
                    </div>
                </div>
              </div>
              <div class="pl-12 md:pl-10 xs:pl-10">
                <h2 class="text-2xl font-bold mb-2 text-blue-600 leading-7">
                  <a href="/hagnerd/setting-up-tailwind-with-create-react-app-4jd" id="article-link-151230">
                    {{$jobs->title}}
                  </a>
                </h2>
                <div class="mb-1 leading-6 w-2/4">
                    <p style="color:black">{{$jobs->description}}</p>
                  </div>
                <div class="mb-2">
                  @foreach($jobs->skill as $skill)
                    <a href="/t/react" class="text-sm text-gray-600 p-1 hover:text-black">
                      <span class="text-opacity-50">#</span>
                      {{$skill}}
                    </a>
                   @endforeach
                </div>
               
                <div class="flex justify-between items-center">
                   
                    <div class="flex items-center">                
                                 
                      <a href="/show/{{$jobs->id}}" type="button" class="bg-gray-400 rounded text-sm px-3 py-2 text-current hover:text-black hover:bg-gray-500">                      
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

