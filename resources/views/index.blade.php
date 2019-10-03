<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  </head>
  <body>
    <div class="container">
      <a href="{{ route('createPerson')}}" class="btn btn-primary mt-5 mb-5">Add New</a>
      <ulcla
      list-group>
        @foreach ($people as $person)
          <li class="list-group-item pt-4 pb-4">
            <h3>{{ $person -> firstname}} {{ $person -> lastname}}</h3>
            <a href="{{ route('editPerson', $person -> id)}}">Update</a>
            <a href="{{ route('deletePerson', $person -> id)}}">delete</a>

          </li>
        @endforeach
      </ul>
    </div>


  </body>
</html>
