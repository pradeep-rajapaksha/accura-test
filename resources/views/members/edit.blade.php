@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-3 flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="d-inline-flex align-items-center mb-0">
                Members:: {{ $member?->firstname }} {{ $member?->lastname }}
            </h4>

            <div class="btn-group align-items-center btn-group-job-acion">
                <a href="{{route('members.index')}}" class="btn btn-outline-secondary px-3">Bask to Members</a>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="card mb-0">
            {{ html()->form('PUT')
                    ->route('members.update', $member->id)
                    ->class('needs-validation')
                    ->open() }}
                <div class="card-body">
                    @include('members.form', compact('member'))
                </div>
                <div class="card-footer">
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-3">Save</button>
                    </div>
                </div>
            {{ html()->form()->close() }}
        </div>
    </div>
</div>

@endsection
