<x-layout>
    <div class="page-content">


        <div class="row mt-5">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Bookings</h6>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone number</th>
                                        <th>Trip</th>
                                        <th>Number of persons</th>
                                        <th>Arrival date</th>
                                        <th>Departure date</th>
                                        <th>Show Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $booking)

                                    <tr>
                                        <td>{{ $booking->name }}</td>
                                        <td>{{ $booking->email }}</td>
                                        <td>{{ $booking->phone }}</td>
                                        <td>{{ $booking->trip->title_en }}</td>
                                        <td>{{ $booking->person }}</td>
                                        <td>{{ $booking->arrival }}</td>
                                        <td>{{ $booking->departure }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-icon-text mb-2  mt-2"
                                                data-toggle="modal" data-target="#exampleModal{{ $booking->id }}">
                                                Details
                                            </button>
                                            <a class="btn btn-danger btn-icon-text mb-2  mt-2"
                                                href="{{ route('booking.delete', ['id'=>$booking->id]) }}">Supprimer</a>
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
        @foreach ($bookings as $booking)
        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{ $booking->id }}" tabindex="-1" role="dialog"
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

                        <p>Name :</p>
                        <p class="px-3">{{ $booking->name }}</p>
                        <hr>
                        <p>Email :</p>
                        <p class="px-3">{{ $booking->email }}</p>
                        <hr>
                        <p>Phone number :</p>
                        <p class="px-3">{{ $booking->phone }}</p>
                        <hr>
                        <p>Trip :</p>
                        <p class="px-3">{{ $booking->trip->title_en }}</p>
                        <hr>
                        <p>Number of persons :</p>
                        <p class="px-3">{{ $booking->person }}</p>
                        <hr>
                        <p>Arrival date :</p>
                        <p class="px-3">{{ $booking->arrival }}</p>
                        <hr>
                        <p>Departure date :</p>
                        <p class="px-3">{{ $booking->departure }}</p>
                        <hr>
                        <p>Message :</p>
                        <p class="px-3">{{ $booking->message }}</p>
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