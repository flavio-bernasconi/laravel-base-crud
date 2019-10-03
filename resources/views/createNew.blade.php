<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  </head>
  <body>
    <div class="container pt-5 pl-5">
      <div class="row ">
        <div class="col-12 mb-3">
          <a href="{{ route('start')}}" class="">Back</a>
        </div>
        <div class="col-12 mb-5">
          <form action="{{ route('storePerson')}}" method="post" >
            @csrf
            @method('POST')
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Name</label>
                <input type="text" class="form-control" name="name"  placeholder="Name">
              </div>
              <div class="form-group col-md-6">
                <label>lastname</label>
                <input type="text" class="form-control" name="lastname"  placeholder="lastname">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>age</label>
                <input type="number" class="form-control" name="age"  placeholder="age">
              </div>
              <div class="form-group col-md-6">
                <label>jobTitle</label>
                <input type="text" class="form-control" name="jobTitle"  placeholder="jobTitle">
              </div>
            </div>
            <button type="submit" class="btn btn-dark mt-2">Add Person</button>
          </form>
        </div>

      </div>

    </div>

  </body>
</html>
