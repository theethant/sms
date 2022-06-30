<div class="card mb-3">
    <img src="https://media.gettyimages.com/photos/young-woman-working-at-home-picture-id1214045621?s=612x612" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of student</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

        <table class="table table-hover">
            <thead class="thead-light">
                <tr class="table-secondary">
                    <th scope="col">CNE</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Second Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->cne }}</td>
                        <td>{{ $student->firstName }}</td>
                        <td>{{ $student->secondName }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->speciality }}</td>
                        <td>
                            <a href="{{ url("/edit/$student->id") }}" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


