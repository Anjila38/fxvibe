@include('home')
@include('navbar')
<div class="container pt-5">
    <form action="{{ route('submit') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col-md-6 mb-3">
                <label for="name">Address</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="col-md-6 mb-3">
                <label for="name">Phone number</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="col-md-6 mb-3">
                <label for="name">Country</label>
                <input type="text" class="form-control" name="country">
            </div>
            <div class="col-md-6 mb-3">
                <label for="name">State</label>
                <input type="text" class="form-control" name="state">
            </div>
            <div class="col-md-6 mb-3">
                <label for="name">Date</label>
                <input type="date" class="form-control" name="date">
            </div>
            <div class="col-md-6 mb-3">
                <label for="name">Time</label>
                <input type="time" class="form-control" name="time">
            </div>
            <div class="col-md-6 mb-3">
                <label for="name">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="col-md-6 mb-3">
                <p>Color</p>
                <label for="">Red</label>
                <input type="checkbox" name="color" value="red">
                <label for="">Green</label>
                <input type="checkbox" name="color" value="green">
                <label for="">Blue</label>
                <input type="checkbox" name="color" value="green">
            </div>
            <div class="col-md-6 mb-3">
                <label for="name">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>
