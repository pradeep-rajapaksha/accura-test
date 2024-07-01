@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-3 flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="d-inline-flex align-items-center mb-0">
                DS Divisions
            </h4>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="card mb-0">
            <div class="card-body">
                <table id="table-branches" class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($divisions as $key => $division)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $division->name }}</td>
                                <td>{{ $division->created_at }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No ds divisions available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('page_scripts')
<script>

</script>
@endpush
