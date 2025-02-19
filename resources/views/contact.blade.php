@include('home')
<div class="container">
    <form action="{{route('submitdata')}}" method="post">
        @csrf
        <div class="row pt-5">
            <div class="col-md-6 mb-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                 @enderror
            </div>

            <div class="col-md-6 mb-4">
                <label for="name" >Ref No</label>
                <input type="text" value="{{$randomNumber}}" class="form-control" name="ref" readonly>
                {{-- @error('ref')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror --}}
                
            </div>

            <div class="col-md-6 mb-4">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address">
                @error('address')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
            </div>

            <div class="col-md-6 mb-4">
                <label for="name">Phone number</label>
                <input type="text" class="form-control" name="number">
                @error('number')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
            </div>
            <div class="col-md-6 mb-4">
                <label for="breed">Choose a breed</label>
                <select name="dog_breed" id="" required>
                    <option value="" >Please select</option>
                    <option value="retriever">Retriever</option>
                    <option value="labrador">Labrador</option>
                    <option value="pug">Pug</option>
                </select>
                {{-- @error('dog_breed')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror --}}
            </div>
            <div class="col-md-6 mb-4">
                <p>Gender</p>
                <input type="radio" name="gender" value="Female">
                <label for="gender">Female</label>
                <input type="radio"  name="gender" value="Male">
                <label for="gender">Male</label>
                @error('gender')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror

            </div>
            <div class="col-md-6 mb-4">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date">
                @error('date')
                <span class="text-danger">{{$message}}</span>
                    
                @enderror
            </div>
        </div>
        <button class="btn btn-dark mt-4" type="submit">Submit</button>

    </form>
</div>
