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
                            @foreach ($imgs as $img)
                           
                            <div class="content item">
                                <div class="content-overlay"></div> <img src="{{asset('storage/' . $img->path) }}" alt="item-image" class="content-image">
                                <div class="content-details fadeIn-bottom">
                                    <a class="btn btn-danger btn-icon-text mb-2  mt-2" href="{{ route('image.delete', ['id'=>$img->id]) }}" >delete</a>
                                    <a class="btn btn-primary btn-icon-text mb-2  mt-2" href="/update/{{ $img->id }}" >update</a>
                                    
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-{{ $img->id }}">
                                          update
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal-{{ $img->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <form action="{{ route('image.update') }}" method="post"></form>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                ...
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                            
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layout>