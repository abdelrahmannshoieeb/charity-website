<div>
    <!-- Table displaying regions -->
    <table class="table">
        <thead class="table-light">
            <tr>
                <th>Name</th>
                <th>City 1</th>
                <th>City 2</th>
                <th>City 3</th>
                <th>Start Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($regions as $region)
                <tr>
                    <td>{{ $region->name }}</td>
                    <td>{{ $region->region[0]  }}</td>
                    <td>{{ $region->region[1]  }}</td>
                    <td>{{ $region->region[2]  }}</td>
                    <td>{{ $region->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
