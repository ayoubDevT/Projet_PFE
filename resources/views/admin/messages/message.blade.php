<x-layout>
    <div class="page-content">


        <div class="row mt-5">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Messages</h6>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone number</th>
                                        <th>Subject</th>
                                        <th>Show Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $message)

                                    <tr>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->phone }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-icon-text mb-2  mt-2"
                                                data-toggle="modal" data-target="#exampleModal{{ $message->id }}">
                                                Details
                                            </button>
                                            <a class="btn btn-danger btn-icon-text mb-2  mt-2"
                                                href="{{ route('message.delete', ['id'=>$message->id]) }}">Supprimer</a>
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

        @foreach ($messages as $message)
        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{ $message->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Details</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="p-5">

                        <p>Subject :</p>
                        <p class="px-3">{{ $message->subject ?? 'no subject' }}</p>
                        <hr>
                        <p>Name :</p>
                        <p class="px-3">{{ $message->name }}</p>
                        <hr>
                        <p>Email :</p>
                        <p class="px-3">{{ $message->email }}</p>
                        <hr>
                        <p>Phone number :</p>
                        <p class="px-3">{{ $message->phone }}</p>
                        <hr>
                        <p>Message :</p>
                        <p class="px-3">{{ $message->message }}</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    </div>

                </div>
            </div>
        </div>
        @endforeach

    </div>
</x-layout>