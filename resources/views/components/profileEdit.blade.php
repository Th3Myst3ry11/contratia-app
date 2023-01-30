@extends('components/layout')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<form method = 'POST' action="/profile/create">
@csrf

<!-- component --><div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    
                    <div class="col-md-6"><label class="labels">firstname</label>
                        <input type="text" class="form-control" placeholder="first name" name="firstname" required>
                        @error('firstname')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div> 
                    
                   
                    <div class="col-md-6"><label class="labels">Surname</label>
                        <input type="text" class="form-control" name="lastname" placeholder="surname" required>
                        @error('lastname')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="row mt-3">
                   
                    <div class="col-md-12"><label class="labels">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="enter phone number" name="phone" required>
                        @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                   
                    <div class="col-md-12"><label class="labels">City</label>
                        <input type="text" class="form-control" placeholder="enter city name" name="city" required>
                        @error('city')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>                 
                    <div class="col-md-12"><label class="labels">Country</label>
                        <input type="text" class="form-control" placeholder="enter country name" name="country" required>
                        @error('country')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-md-12"><label class="labels">Rate</label>
                        <input type="text" class="form-control" placeholder="enter your rate" name="rate" required>
                        @error('rate')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-md-12"><label class="labels">currency</label>
                        <input type="text" class="form-control" placeholder="enter your prefered currency" name="currency" required>
                        @error('currency')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-md-12"><label class="labels">email</label>
                        <input type="text" class="form-control" placeholder="enter email" name="email" required>
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-md-12"><label class="labels">description </label>
                        <input type="text" class="form-control" placeholder="description" name="description" required>
                        @error('description')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                   
                </div>
                <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit">Save Profile</div>
            </div>
        </div>
      
        </div>
    </div>
</div>
</div>
</div>
</form>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('skillDisplay', () => ({
            skills: [{
                    'title': 'HTML',
                    'percent': '95',
                },
                {
                    'title': 'CSS',
                    'percent': '70',
                },
                {
                    'title': 'Tailwind CSS',
                    'percent': '90',
                },
                {
                    'title': 'JavaScript',
                    'percent': '70',
                },
                {
                    'title': 'Alpine JS',
                    'percent': '80',
                }, {
                    'title': 'PHP',
                    'percent': '65',
                }, {
                    'title': 'Laravel',
                    'percent': '75',
                }
            ],
            currentSkill: {
                'title': 'HTML',
                'percent': '95',
            }
        }));
    });
</script>
<style>


.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>
@endsection