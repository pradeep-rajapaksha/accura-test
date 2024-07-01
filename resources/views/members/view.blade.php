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
            <div class="card-body">
                <table class="table table-striped-columns">
                    <tr>
                        <th class="col-2 text-end">First Name: </th>
                        <td class="align-middle">
                            {{ $member?->firstname }}    
                        </td>
                        
                        <th class="col-2 text-end">DS Division:</th>
                        <td class="align-middle">{{ $member?->dsDivision->name }}</td>
                    </tr>
                    
                    <tr>
                        <th class="col-2 text-end">Last Name:</th>
                        <td class="align-middle">{{ $member?->lastname }}</td>
                        
                        <th class="col-2 text-end">Date of Birth: </th>
                        <td class="align-middle">{{ date('Y-m-d', strtotime($member?->dob)) }}</td>
                    </tr>
                    
                    <tr>
                        <th class="col-2 text-end">Email: </th>
                        <td class="align-top">{{ $member?->email }}</td>
                        
                        <th class="col-2 text-end">Summery: </th>
                        <td class="align-middle">{{ $member?->summery }}</td>
                    </tr>
                </table>
                
            </div>
        </div>
    </div>
</div>

@endsection
