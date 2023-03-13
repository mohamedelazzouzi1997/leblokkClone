        <!-- Modal -->
        <div class="modal fade" id="emailRejectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-yellow-500">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Reservation Reject Email
                            message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="rejectForm" method="post" action="{{ route('reservation.reject', $res->id) }}"
                            class="form-group">
                            @csrf
                            <textarea class="w-full form-control" name="emailMessage" placeholder="Email Message" id="" cols="30"
                                rows="5">Donnez-nous quelques instants pour nous assurer que nous avons de la place pour vous. Nous sommes complets ou pas ouverts à l'heure que vous avez demandée :</textarea>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                            class="py-1 hover:bg-red-600 float-right px-3 bg-red-500 text-white rounded-md"
                            data-dismiss="modal">Close</button>
                        <button form="rejectForm" type="submit"
                            class="py-1 hover:bg-yellow-600 float-right px-3 bg-yellow-500 text-white rounded-md">send
                            email de rejection</button>
                    </div>
                </div>
            </div>
        </div>
