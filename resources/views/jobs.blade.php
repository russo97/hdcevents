<x-layout>
  <h1>Jobs</h1>

  <p>
    Temos um total de {{ $jobs -> count() }} jobs disponíveis
  </p>

  <ul>
    @foreach($jobs as $job)
      <li>
        <a href="/job/{{ $job['id'] }}">
          <strong>{{ $job['title'] }}: Pays {{ $job['salary'] }} per year.</strong>
        </a>
      </li>
    @endforeach
  </ul>
</x-layout>
