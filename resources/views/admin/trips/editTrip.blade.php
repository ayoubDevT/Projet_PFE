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
                                <label for="title_en">Titre(en)</label>
                                <input value="{{ $trip->title_en }}" type="text" class="form-control" id="title_en"
                                    name="title_en">
                                @error('title_en')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title_de">Titre(de)</label>
                                <input value="{{ $trip->title_de }}" type="text" class="form-control" id="title_de"
                                    name="title_de">
                                @error('title_de')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title_fr">Titre(fr)</label>
                                <input value="{{ $trip->title_fr }}" type="text" class="form-control" id="title_fr"
                                    name="title_fr">
                                @error('title_fr')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Categorie</label>
                                <select class="js-example-basic-single w-100" name="sub_id" data-width="100%">
                                    @foreach ($sub_categories as $sub_category)

                                    <option value="{{ $sub_category->id }}" {{ $select=($trip->sub_id ==
                                        $sub_category->id)
                                        ?
                                        'selected' : '' }}>{{ $sub_category->name_en }}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="overview_en">Description(en)</label>
                                <input value="{{ $trip->overview_en }}" type="text" class="form-control"
                                    id="overview_en" name="overview_en">
                                @error('overview_en')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="overview_de">Description(de)</label>
                                <input value="{{ $trip->overview_de }}" type="text" class="form-control"
                                    id="overview_de" name="overview_de">
                                @error('overview_de')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="overview_fr">Description(fr)</label>
                                <input value="{{ $trip->overview_fr }}" type="text" class="form-control"
                                    id="overview_fr" name="overview_fr">
                                @error('overview_fr')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="editor_en">Content(en)</label>
                                <textarea name="content_en" id="editor_en" cols="30"
                                    rows="10">{!! $trip->content_en == null ? 'no code' : $trip->content_en !!}</textarea>
                                @error('content_en')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="editor_de">Content(de)</label>
                                <textarea name="content_de" id="editor_de" cols="30"
                                    rows="10">{!! $trip->content_de == null ? 'no code' : $trip->content_de !!}</textarea>
                                @error('content_de')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="editor_fr">Content(fr)</label>
                                <textarea name="content_fr" id="editor_fr" cols="30"
                                    rows="10">{!! $trip->content_fr == null ? 'no code' : $trip->content_fr !!}</textarea>
                                @error('content_fr')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="price">Prix</label>
                                <input value="{{ $trip->price }}" type="number" class="form-control" id="price"
                                    name="price" placeholder="Number Days">
                                @error('price')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="days">Jours</label>
                                <input value="{{ $trip->days }}" type="text" class="form-control" id="days" name="days"
                                    placeholder="Number Days">
                                @error('days')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="min_age">Min Age</label>
                                <input value="{{ $trip->min_age }}" type="text" class="form-control" id="min_age"
                                    name="min_age" placeholder="Number Years+">
                                @error('min_age')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tags_en">Months</label>
                                <input name="months_en" id="tags_en" value="{{ $trip->months_en }}" />
                                @error('months_en')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tags_de">Monate</label>
                                <input name="months_de" id="tags_de" value="{{ $trip->months_de }}" />
                                @error('months_de')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tags_fr">Les mois</label>
                                <input name="months_fr" id="tags_fr" value="{{ $trip->months_fr }}" />
                                @error('months_fr')
                                <p class="text-red-500 text-xs ml-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="myDropify">Thumbnail min(1200x600)</label><br>
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
                                <a class="btn btn-secondary" href="{{ route('trips.index') }}">Annuler</a>
                                <button type="submit" name="sub" class="btn btn-primary">Modifier</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>