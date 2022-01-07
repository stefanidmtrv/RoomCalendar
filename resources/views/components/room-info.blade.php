<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Room information
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-number" id="exampleModalLabel">Room {{$number}} </h5>
          
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5 class="table-capacity" id="exampleModalLabel">Table capacity: {{$table_capacity}}</h5>
          <h5 class="computer-capacity" id="exampleModalLabel">Computer capacity: {{$computer_capacity}}</h5>
          <h5 class="num_projectors" id="exampleModalLabel">Table capacity: {{$num_projectors}}</h5>
          <h5 class="floor" id="exampleModalLabel">Floor: {{$floor}}</h5>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>