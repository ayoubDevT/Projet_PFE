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
                                <label for="exampleInputText1">Titre</label>
                                <input value="{{ old('title') }}" type="text" class="form-control"
                                    id="exampleInputText1" name="title">
                                @error('title')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Categorie</label>
                                <select class="js-example-basic-single w-100" name="sub_category_id" data-width="100%">
                                    @foreach ($sub_categories as $sub_category)
                                    <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="overview"
                                    rows="5">{{ old('overview') }}</textarea>
                                @error('overview')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText1">Jours</label>
                                <input value="{{ old('days') }}" type="number" class="form-control" id="exampleInputText1"
                                    name="days" placeholder="Number Days">
                                @error('days')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText1">Min Age</label>
                                <input value="{{ old('min_age') }}" type="number" class="form-control"
                                    id="exampleInputText1" name="min_age" placeholder="Number Years+">
                                @error('min_age')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tags">Les Mois</label>
                                <input name="months" id="tags"
                                    value="January, February, March, April, May, June, July, August, September, October, November, December" />
                                @error('mounths')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="myDropify">Thumbnail</label>
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
                                        <th>Jours</th>
                                        <th>Min Age</th>
                                        <th>Mois</th>
                                        <th>Modification</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trips as $trip)

                                    <tr>
                                        <td>{{ $trip->title }}</td>
                                        <td>{{ $trip->sub_category->name }}</td>
                                        <td><img src="{{asset('storage/' . $trip->thumbnail) }}" alt="trip_image"></td>
                                        <td>{{ $trip->days }}</td>
                                        <td>{{ $trip->min_age }}</td>
                                        <td>{{ $trip->months }}</td>
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