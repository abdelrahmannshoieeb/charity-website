<div>
    <!-- Table displaying regions -->
    <table class="table">
        <thead class="table-light">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>skills</th>
                <th>Start Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
            <tr>
                <td>{{ $job->title }}</td>
                <td>{{ $job->description }}</td>
                <td>
                    

                    @foreach($job->skills as $skill)
                    {{ $skill }}@if(!$loop->last), @endif
                    @endforeach
                </td>
                <td>{{ $job->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>