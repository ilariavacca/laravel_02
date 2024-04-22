<x-layout>
    <x-navbar />

   <h1>FORM modifica CANZONI</h1>
   <div class="container">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('songs.update', compact('song')) }}"  enctype="multipart/form-data">

                @csrf
                @method('put')
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">nome</label>
                  <input type="text" name='name' value={{ $song->name }} class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">img</label>
                  <input type="file" value="" name='img'class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">year</label>
                    <input type="number" name='year' value={{ $song->year }} class="form-control" id="exampleInputPassword1">
                  </div>
                  <div>
                    <img src="{{ Storage::url($song->img) }}" alt="foto">
                  </div>


                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
   </div>
</x-layout>
