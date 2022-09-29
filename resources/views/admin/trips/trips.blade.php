<x-layout>
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Ajouter trip</h6>
                        <form action="{{ route('trips.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title_en">Titre(en)</label>
                                <input value="{{ old('title_en') }}" type="text" class="form-control"
                                    id="title_en" name="title_en">
                                @error('title_en')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title_de">Titre(de)</label>
                                <input value="{{ old('title_de') }}" type="text" class="form-control"
                                    id="title_de" name="title_de">
                                @error('title_de')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title_fr">Titre(fr)</label>
                                <input value="{{ old('title_fr') }}" type="text" class="form-control"
                                    id="title_fr" name="title_fr">
                                @error('title_fr')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Categorie</label>
                                <select class="js-example-basic-single w-100" name="sub_id" data-width="100%">
                                    @foreach ($sub_categories as $sub_category)
                                    <option value="{{ $sub_category->id }}">{{ $sub_category->name_en }}</option>
                                    @endforeach


                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="overview">Description(en)</label>
                                <input value="{{ old('overview_en') }}" type="text" class="form-control"
                                id="overview_en" name="overview_en">
                                @error('overview_en')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="overview_de">Description(de)</label>
                                <input value="{{ old('overview_de') }}" type="text" class="form-control"
                                id="overview_de" name="overview_de">
                                @error('overview_de')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="overview_fr">Description(fr)</label>
                                <input value="{{ old('overview_fr') }}" type="text" class="form-control"
                                id="overview_fr" name="overview_fr">
                                @error('overview_fr')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="editor_en">Content(en)</label>
                                <textarea name="content_en" id="editor_en" cols="30" rows="10">{{ old('content_en') }}</textarea>
                                
                            </div>
                            <div class="form-group">
                                <label for="editor_de">Content(de)</label>
                                <textarea name="content_de" id="editor_de" cols="30" rows="10">{{ old('content_de') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="editor_fr">Content(fr)</label>
                                <textarea name="content_fr" id="editor_fr" cols="30" rows="10">{{ old('content_fr') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="price">Prix</label>
                                <input value="{{ old('price') }}" type="number" class="form-control" id="price"
                                    name="price" placeholder="Number Days">
                                @error('price')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="days">Jours</label>
                                <input value="{{ old('days') }}" type="number" class="form-control" id="days"
                                    name="days" placeholder="Number Days">
                                @error('days')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="min_age">Min Age</label>
                                <input value="{{ old('min_age') }}" type="number" class="form-control"
                                    id="min_age" name="min_age" placeholder="Number Years+">
                                @error('min_age')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label >Months</label>
                                <input name="months_en" id="tags_en"
                                    value="January, February, March, April, May, June, July, August, September, October, November, December" />
                                @error('months_en')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label >Monate</label>
                                <input name="months_de" id="tags_de"
                                    value="Januar, Februar, März, April, Mai, Juni, Juli, August, September, Oktober, November, Dezember" />
                                @error('months_de')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label >Les Mois</label>
                                <input name="months_fr" id="tags_fr"
                                    value="Janvier, Fevrier, Mars, Avril, Mai, Juin, Juillet, Aout, Septembre, Octobre, Novembre, Decembre" />
                                @error('months_fr')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="myDropify">Thumbnail min(1200x600)</label>
                                <input name="thumbnail" type="file" id="myDropify" class="border" />
                                @error('thumbnail')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <input name="sub" type="submit" value="Ajouter"
                                class="btn btn-primary btn-icon-text mb-2  mt-2">
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Tous les TRIPS</h6>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Category</th>
                                        <th>Thumbnail</th>
                                        <th>Prix</th>
                                        <th>Jours</th>
                                        <th>Min Age</th>
                                        <th>Mois</th>
                                        <th>Modification</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trips as $trip)

                                    <tr>
                                        <td>{{ $trip->title_en }}</td>
                                        <td>{{ $trip->sub->name_en }}</td>
                                        <td><img src="{{asset('storage/' . $trip->thumbnail) }}" alt="trip_image"></td>
                                        <td>{{ $trip->price }}</td>
                                        <td>{{ $trip->days }}</td>
                                        <td>{{ $trip->min_age }}</td>
                                        <td>{{ $trip->months_en }}</td>
                                        <td>
                                            <a class="btn btn-danger btn-icon-text mb-2  mt-2"
                                                href="{{ route('trips.delete', ['id'=>$trip->id]) }}">Supprimer</a>
                                            <a class="btn btn-primary btn-icon-text mb-2  mt-2"
                                                href="{{ route('trips.update', ['id'=>$trip->id]) }}">Modifier</a>

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

        <!-- Modal -->
        <!--<div class="modal fade" id="exampleModal{{-- $trip->id --}}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modifier votre image</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputText1">Title</label>
                            <input value="{{-- $trip->title --}}" type="text" class="form-control" id="exampleInputText1"
                                name="title">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select class="js-example-basic-single w-100" name="sub_category_id" data-width="100%">
                                @foreach ($sub_categories as $sub_category)

                                <option value="{{-- $sub_category->id --}}" {{-- $select=($trip->sub_category_id == $sub_category->id) ?
                                    'selected' : '' --}}>{{-- $sub_category->name --}}</option>
                                @endforeach


                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea value="{{-- $trip->overview --}}" class="form-control"
                                id="exampleFormControlTextarea1" name="overview" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText1">Days</label>
                            <input value="{{-- $trip->days --}}" type="text" class="form-control" id="exampleInputText1"
                                name="days" placeholder="Number Days">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText1">Min Age</label>
                            <input value="{{-- $trip->min_age --}}" type="text" class="form-control" id="exampleInputText1"
                                name="min_age" placeholder="Number Years+">
                        </div>
                        <div class="form-group">
                            <label for="tags">Months</label>
                            <input value="{{-- $trip->months --}}" name="months" id="tags"
                                value="January, February, March, April, May, June, July, August, September, October, November, December" />
                        </div>
                        <div class="form-group">
                            <label for="myDropify">Thumbnail</label>
                            <input value="{{-- $trip->thumbnail --}}" name="thumbnail" type="file" id="myDropify"
                                class="border" />

                        </div>



                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="sub" class="btn btn-primary">Save changes</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>-->

    </div>
</x-layout>