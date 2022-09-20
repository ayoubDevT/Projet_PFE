<x-layout>

    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Modifier trip</h6>

                        <form action="{{ route('trips.edit', ['id'=>$trip->id]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputText1">Titre</label>
                                <input value="{{ $trip->title }}" type="text" class="form-control"
                                    id="exampleInputText1" name="title">
                                @error('title')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Categorie</label>
                                <select class="js-example-basic-single w-100" name="sub_id" data-width="100%">
                                    @foreach ($sub_categories as $sub_category)

                                    <option value="{{ $sub_category->id }}" {{ $select=($trip->sub_category_id == $sub_category->id)
                                        ?
                                        'selected' : '' }}>{{ $sub_category->name }}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="overview"
                                    rows="5">{{ $trip->overview }}</textarea>
                                @error('overview')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText1">Jours</label>
                                <input value="{{ $trip->days }}" type="text" class="form-control" id="exampleInputText1"
                                    name="days" placeholder="Number Days">
                                @error('days')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText1">Min Age</label>
                                <input value="{{ $trip->min_age }}" type="text" class="form-control"
                                    id="exampleInputText1" name="min_age" placeholder="Number Years+">
                                @error('min_age')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tags">Les mois</label>
                                <input value="{{ $trip->months }}" name="months" id="tags"
                                    value="January, February, March, April, May, June, July, August, September, October, November, December" />
                                @error('months')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="myDropify">Thumbnail</label><br>
                                <label for="old">Ancienne image</label>
                                <img src="{{ asset('storage/'.$trip->thumbnail) }}" id="old" alt="old image"
                                    width="400px" class="mb-4">
                                <label for="myDropify">Nouvelle image</label>
                                <input value="{{ $trip->thumbnail }}" name="thumbnail" type="file" id="myDropify"
                                    class="border" />
                                @error('thumbnail')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror

                            </div>



                            <div class="modal-footer">
                                <a class="btn btn-secondary"
                                    href="{{ route('trips.index') }}">Annuler</a>
                                <button type="submit" name="sub" class="btn btn-primary">Modifier</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>