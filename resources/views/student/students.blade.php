@include('head')
@include('nav')


{{-- Content for all students goes here --}}
<div class="container">
    <h2 class="text-center mb-4 mt-4">Studenti <span class="text-info">RAF</span>a</h2>
    <table class="table table-striped mb-4 mt-4">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Slug</th>
                <th>Opcije</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr class="text-center">
                    <td> {{ $student->id }}</td>
                    <td> {{ $student->ime }}</td>
                    <td> {{ $student->prezime }}</td>
                    <td> {{ $student->slug }}</td>
                    <td>
                        <a href='{{ url("/student/{$student->id}") }}' class="btn btn-info">Opširnije</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <ul class="pagination mb-4 mt-4">
      @for ($i = $page; $i < $pages + 1; $i++)
        <li class="page-item"><a class="page-link" href='{{ url("/students/$i") }}'>{{ $i }}</a></li>
      @endfor
    </ul> --}}

</div>


@include('foot')