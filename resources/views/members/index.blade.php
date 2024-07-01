@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="d-inline-flex align-items-center mb-0">
                Members
            </h4>

            <div class="btn-group align-items-center btn-group-job-acion">
                <a href="{{route('members.create')}}" class="btn btn-outline-primary px-3">Create a New Member</a>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="card mb-0">
            <div class="card-body">
                <div class="d-flex justify-content-end flex-wrap flex-md-nowrap align-items-center py-1 mb-3 border-bottom">
                    {{ html()->form('GET', '')->open() }}
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="form-control" placeholder="Search by Last Name" value="{{request()->get('search')}}"/>
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                        </div>
                    {{ html()->form()->close() }}
                </div>
                <table id="table-branches" class="table table-striped">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Date of Birth</th>
                            <th>DS Division</th>
                            <th>Created At</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($members as $member)
                            <tr>
                                <td>{{ $member->firstname }}</td>
                                <td>
                                    <a href="{{route('members.show', $member->id)}}">{{ $member->lastname }}</a>
                                </td>
                                <td>{{ date('Y-m-d', strtotime($member->dob)) }}</td>
                                <td>{{ $member->dsDivision?->name ?? '' }}</td>
                                <td>{{ $member->created_at }}</td>
                                <td class="text-center">
                                    <a href="{{route('members.edit', $member->id)}}" class="btn btn-sm btn-link text-primary py-0">Edit</a>

                                    {{ html()->form('DELETE')->route('members.destroy', $member->id)
                                        ->class('d-inline')
                                        ->attribute('onsubmit', 'return confirm("Are you sure you want to delete this member?");')
                                        ->open() }}

                                        <button type="submit" class="btn btn-sm btn-link text-danger py-0">Delete</button>
                                    {{ html()->form()->close() }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No members available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $members->withQueryString()->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
