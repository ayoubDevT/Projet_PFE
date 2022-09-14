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
              @error('path')
              <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
              @enderror
              <input type="text" value="home" name="page" hidden>
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
                    href="{{ route('image.delete', ['id'=>$image->id]) }}">Supprimer</a>


                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-icon-text mb-2  mt-2" data-toggle="modal"
                    data-target="#exampleModal{{ $image->id }}">
                    Modifier
                  </button>

                </div>
              </div>
              @endforeach


            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">choisir les trips d'accueil</h6>

            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Thumbnail</th>
                    <th>Jours</th>
                    <th>Min Age</th>
                    <th>Mois</th>
                    <th>Show Accueil</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($trips as $trip)

                  <tr>
                    <td>{{ $trip->id }}</td>
                    <td>{{ $trip->title }}</td>
                    <td><img src="{{asset('storage/' . $trip->thumbnail) }}" alt="trip_image"></td>
                    <td>{{ $trip->days }}</td>
                    <td>{{ $trip->min_age }}</td>
                    <td>{{ $trip->months }}</td>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input {{ $trip->show == 1 ? 'checked':'' }} type="radio" class="form-check-input"
                          onclick="document.location.href= '{{ route('trips.show' , ['id' => $trip->id]) }}'"
                          name="optionsRadios-{{ $trip->id }}" id="optionsRadios" value="option1">
                          Show
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input {{ $trip->show == 0 ? 'checked':'' }} type="radio" class="form-check-input"
                          onclick="document.location.href= '{{ route('trips.hide' , ['id' => $trip->id]) }}'"
                          name="optionsRadios-{{ $trip->id }}" id="optionsRadios1" value="option1">
                          Hide
                        </label>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
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
            @error('path')
            <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
            @enderror
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
              <button type="submit" name="sub" class="btn btn-primary">Modifier</button>

            </div>
          </form>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</x-layout>