<x-layout>
  <div class="page-content">
    <div class="row">
      <div class="col-md-12 stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Ajouter une image a votre slider</h6>
            <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <input name="path" type="file" id="myDropify" class="border" />
              <input type="submit" value="Ajouter" class="btn btn-primary btn-icon-text mb-2  mt-2">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5">

      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Modifier votre slider</h6>

            <div class="owl-carousel owl-theme owl-mouse-wheel">
              @foreach ($imgs as $image)

              <div class="content item">
                <div class="content-overlay"></div> <img src="{{asset('storage/' . $image->path) }}" alt="item-image"
                  class="content-image">
                <div class="content-details fadeIn-bottom">
                  <a class="btn btn-danger btn-icon-text mb-2  mt-2"
                    href="{{ route('image.delete', ['id'=>$image->id]) }}">delete</a>


                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-icon-text mb-2  mt-2" data-toggle="modal"
                    data-target="#exampleModal{{ $image->id }}">
                    update
                  </button>

                </div>
              </div>
              @endforeach


            </div>
          </div>
        </div>
      </div>
    </div>
    @foreach ($imgs as $image)
    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ $image->id }}" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modifier votre image</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ route('image.edit', ['id'=>$image->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input name="path" type="file" id="myDropify" class="border" />

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="sub" class="btn btn-primary">Save changes</button>

            </div>
          </form>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</x-layout>