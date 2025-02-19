@include('home')
<div class="container pt-5">
    <form action="{{route('submitform')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col-md-6">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="col-md-6">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="col-md-6">
                <label for="name">Zip Code</label>
                <input type="text" class="form-control" name="code">
            </div>
            <div class="col-md-6">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="4"></textarea>
            </div>

        </div>
        <div class="col-md-6 mt-4">
            <button class="btn btn-dark" type="submit">Submit</button>
        </div>
    </form>
</div>
