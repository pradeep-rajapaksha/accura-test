
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">   
</head>
<body>
    <div class="login-page bg-light vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col pe-0">
                                <div class="form-left h-100 py-4 px-5">
                                    {{ html()->form('POST')
                                        ->route('auth.authenticate')
                                        ->class('needs-validation row g-3')
                                        ->open() }}
                                        <div class="col-12">
                                            <label>Email<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                                {{ html()->email('email')
                                                    ->value(old('email'))
                                                    ->placeholder('admin@example.com')
                                                    ->required(true)
                                                    ->class(['form-control', 'is-invalid' => $errors->has('email')]) }}
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <label>Password<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                                {{ html()->password('password')
                                                    ->placeholder('***********')
                                                    ->required(true)
                                                    ->class(['form-control', 'is-invalid' => $errors->has('password')]) }}
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary px-5 float-end mt-4">Login</button>
                                        </div>
                                    {{ html()->form()->close() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>