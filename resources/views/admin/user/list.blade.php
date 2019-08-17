@include('admin/sections/head')
@include('admin/sections/header')
<div class="container">
  <h2>{{ $title }}</h2>
  <p>This table contains user list.</p>
  <button class="float-right btn btn-primary"><i class="fa fa-plus"></i></button>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sl.no</th>
        <th>User ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action(Edit/Delete)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>USER01</td>
        <td>John</td>
        <td>john@example.com</td>
        <td>
          <button class="btn btn-info"><i class="fa fa-edit"></i></button>
          <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>USER02</td>
        <td>Mary</td>
        <td>mary@example.com</td>
        <td>
          <button class="btn btn-info"><i class="fa fa-edit"></i></button>
          <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>USER03</td>
        <td>July</td>
        <td>july@example.com</td>
        <td>
          <button class="btn btn-info"><i class="fa fa-edit"></i></button>
          <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
@include('admin/sections/footer')
