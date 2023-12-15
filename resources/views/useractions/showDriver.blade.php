{{-- Show Driver Modal Trigger --}}
<button type="button" class="btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#showDriverModal{{$ride->id}}">
    <i class="bi bi-chat-dots me-2"></i>
</button>

{{-- Show Driver Modal Start --}}
<div class="modal fade" id="showDriverModal{{$ride->id}}" tabindex="-1" aria-labelledby="showDriverModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h1" id="showDriverModalLabel">Driver Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">E-Mail</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$ride->driver->firstName . " " . $ride->driver->name}}</td>
                        <td>{{$ride->driver->phone}}</td>
                        <td>{{$ride->driver->email}}</td>
                    </tr>
                    </tbody>
                </table>
                {{-- Message Form --}}
                <form>

                    @csrf
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                    </div>
                    <input type="hidden" name="driverID" value="{{$ride->driver->id}}">
                    <input type="hidden" name="rideID" value="{{$ride->id}}">
                    <button type="submit" class="btn btn-primary">Send</button>
            </div>
            </form>
            </div>
            <div class="modal-footer">
         

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>
         
            </div>
        </div>
    </div>
</div>
{{-- Show Driver Modal End --}}
