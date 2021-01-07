<div>
  <table class="table table-striped table-hover">
    <thead class="bg-dark text-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($contacts as $contact)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $contact->name }}</td>
          <td>{{ $contact->phone }}</th>
          <td>
            <button type="button" class="btn btn-info text-light">Update</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
