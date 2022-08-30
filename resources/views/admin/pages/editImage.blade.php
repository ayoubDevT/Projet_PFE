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
                            <input type="submit" value="Update" class="btn btn-primary btn-icon-text mb-2  mt-2">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>