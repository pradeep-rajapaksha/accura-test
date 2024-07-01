<table class="table table-striped-columns">
    <tr>
        <th class="text-end">First Name: </th>
        <td class="align-middle {{ $errors->has('firstname') ? 'is-invalid' : '' }}">
            {{ html()->input()->name('firstname')
                ->value($member?->firstname ?? old('firstname'))
                ->class(['form-control', 'is-invalid' => $errors->has('firstname')]) }}
            <div class="invalid-feedback">{{ $errors->first('firstname') }}</div>     
        </td>

        <th class="text-end">DS Division: <span class="text-danger">*</span></th>
        <td class="align-middle {{ $errors->has('ds_division_id') ? 'is-invalid' : '' }}">
                {{ html()->select('ds_division_id')
                    ->value($member?->ds_division_id ?? old('ds_division_id'))
                    ->options($dsDivisions)
                    ->placeholder('')
                    ->required(true)
                    ->class(['form-control', 'is-invalid' => $errors->has('ds_division_id')]) }}
            <div class="invalid-feedback">{{ $errors->first('ds_division_id') }}</div>         
        </td>
    </tr>

    <tr>
        <th class="text-end">Last Name: <span class="text-danger">*</span></th>
        <td class="align-middle {{ $errors->has('lastname') ? 'is-invalid' : '' }}">
            {{ html()->input()->name('lastname')
                ->value($member?->lastname ?? old('lastname'))
                ->class(['form-control', 'is-invalid' => $errors->has('lastname')])
                ->required(true) }}
            <div class="invalid-feedback">{{ $errors->first('lastname') }}</div>
        </td>

        <th class="text-end">Date of Birth: </th>
        <td class="align-middle {{ $errors->has('dob') ? 'is-invalid' : '' }}">
            {{ html()->date('dob')
                ->value( (empty($member) ?: date('Y-m-d', strtotime($member?->dob))) ?? old('dob'))
                ->attribute('max', date('Y-m-d', strtotime('-18 years')))
                ->class(['form-control', 'is-invalid' => $errors->has('dob')]) }}
            <div class="invalid-feedback">{{ $errors->first('dob') }}</div>
        </td>
    </tr>

    <tr>
        <th class="text-end">Email: </th>
        <td class="align-top {{ $errors->has('email') ? 'is-invalid' : '' }}">
            {{ html()->email('email')
                ->value($member?->email ?? old('email'))
                ->class(['form-control', 'is-invalid' => $errors->has('email')]) }}
            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
        </td>

        <th class="text-end">Summery: </th>
        <td class="align-middle {{ $errors->has('summery') ? 'is-invalid' : '' }}">
            {{ html()->textarea('summery')
                ->value($member?->summery ?? old('summery'))
                ->rows(5)
                ->class(['form-control', 'is-invalid' => $errors->has('summery')]) }}
            <div class="invalid-feedback">{{ $errors->first('summery') }}</div>
        </td>
    </tr>
</table>
