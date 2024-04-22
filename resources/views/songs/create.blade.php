<x-layout>
    <x-navbar />

   <h1>FORM CREAZIONE CANZONI</h1>
   <div class="container">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('songs.store') }}"  enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">nome</label>
                  <input type="text" name='name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">img</label>
                  <input type="file" name='img'class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">year</label>
                    <input type="number" name='year' class="form-control" id="exampleInputPassword1">
                    <div>
                      <select class="form-select" aria-label="Default select example" name="category_id">
                        <option selected>Open this select menu</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}"> {[$category->name]}</option>
                        @endforeach
                      </select>

                    </div>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

        </div>
    </div>
   </div>
</x-layout>
