@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
 
                    You are logged in! as <strong>{{ strtoupper(Auth::user()->role) }}</strong>
                    
            Admin Page: <a href="{{ url('/') }}/adminOnlyPage">{{ url('/') }}/adminOnlyPage</a>
                    
            Super Admin Page: <a href="{{ url('/') }}/superAdminOnlyPage">{{ url('/') }}/super_adminOnlyPage</a>
                    
            Member Page: <a href="{{ url('/') }}/memberOnlyPage">{{ url('/') }}/memberOnlyPage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
