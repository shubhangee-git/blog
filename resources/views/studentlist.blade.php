<div class="card mb-3">
  <img class="card-img-top" src="/images/ICT-INDUSTRY.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">You can find here all the informations about students in the system</p>
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">CNE</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Age</th>
        <th scope="col">Speciality</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
      <tr>
        <td>{{ $student->cne }}</td>
        <td>{{ $student->firstName }}</td>
        <td>{{ $student->secondName }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ $student->speciality }}</td>
        <td>
          <!-- <a class="btn btn-sm-info" href="#" role="button">Show</a> -->
          <a class="btn btn-sm-warning" href="{{ url('/edit/'.$student->id) }}" role="button">Edit</a>
          <!-- <a class="btn btn-sm-danger" href="#" role="button">Delete</a> -->
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>



