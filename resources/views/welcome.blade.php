@extends('layouts.app')
@section('title', 'Movies')
@section('main-content')

      {{-- bootstrap 5.2.3 --}}

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

    <h1>Tutti i film</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">title</th>
            <th scope="col">original_title</th>
            <th scope="col">nationality</th>
            <th scope="col">date</th>
            <th scope="col">vote</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($Movies as $elem)

          <tr>
            <td>{{$elem->id}}</td>
            <td>{{$elem->title}}</td>
            <td>{{$elem->original_title}}</td>
            <td>{{$elem->nationality}}</td>
            <td>{{$elem->date}}</td>
            <td>{{$elem->vote}}</td>
          </tr>

          @endforeach

        </tbody>
      </table>

      {{-- bootstrap 5.2.3 --}}

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@endsection
