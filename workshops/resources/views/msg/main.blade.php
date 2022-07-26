@if(session('success'))
    <div class="alert alert-success" align="center" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" align="center" role="alert">
        {{ session('error') }}
    </div>
@endif

@if(session('fundsError'))
    <div class="alert alert-danger" align="center" role="alert">
        {{ session('fundsError') }}
    </div>
@endif

@if(session('fundsSuccess'))
    <div class="alert alert-success" align="center" role="alert">
        {{ session('fundsSuccess') }}
    </div>
@endif

@if(session('infoUpdate'))
    <div class="alert alert-success" align="center" role="alert">
        {{ session('infoUpdate') }}
    </div>
@endif

@if(session('deleted'))
    <div class="alert alert-success" align="center" role="alert">
        {{ session('deleted') }}
    </div>
@endif