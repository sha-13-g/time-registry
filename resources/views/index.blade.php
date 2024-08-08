@extends('base')

@section('content')
<div class="main">
<div class="sidebar">
    <div class="agent">
        @foreach ($agents as $agent)
            <div class="agent-entry">
                <div class="agent-name">
                    {{ $agent->name }}
                </div>
                <div class="comming-time-form-container">
                    <form action="/create/comming/{{$agent->id}}">
                        <button>Comming Time</button>
                    </form>
                </div>
                <div class="leaving-time-form-container">
                    <form action="/create/leaving/{{$agent->id}}">
                        <button>Leaving Time</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="main-content">
<div class="agent-form-container disabled">
    <form action="/create/agent" method="post">
    @csrf
        <div class="agent-name">
            <label for="">Name </label> <input type="text" name="name">
        </div>
        <div class="agent-address">
            <label for="">Address: </label> <input type="text" name="address">
        </div>
        <div class="agent-contact">
            <label for="">contact</label> <input type="tel" name="contact">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

        @foreach ($timeRegisters as $timeRegister)
        <div class="date">
            <div class="comming-time">
                {{ $timeRegister->comming_time }}
            </div>
            <div class="leaving-time">
                {{ $timeRegister->leaving_time }}
            </div>
        </div>
        @endforeach
</div>
</div>
@endsection
