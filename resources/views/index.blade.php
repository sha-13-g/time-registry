@extends('base')

@section('content')
<div class="main">
    <div class="sidebar">
        <div class="agent">
            @foreach ($agents as $agent)
                <div class="agent-entry">
                    <span class="agent-name">
                        {{ $agent->name }}
                    </span>
                    <span class="comming-time-form-container">
                        <form action="/create/comming/{{$agent->id}}">
                            <button>Comming</button>
                        </form>
                    </span>
                    <span class="leaving-time-form-container">
                        <form action="/create/leaving/{{$agent->id}}">
                            <button>Leaving</button>
                        </form>
                    </span>
                </div>
            @endforeach
        </div>
    </div>

        <div class="agent-form-container disabled">
        <button type="button" class="close-btn">X</button>
            <form action="/create/agent" method="post">
            @csrf
                <div class="agent-name">
                    <label for="">Name </label> <input type="text" name="name">
                </div>
                <div class="agent-address">
                    <label for="">Address </label> <input type="text" name="address">
                </div>
                <div class="agent-contact">
                    <label for="">contact</label> <input type="tel" name="contact">
                </div>
                <button type="submit" class="submit-agent">Submit</button>
            </form>
        </div>

    <div class="main-content">

        @foreach ($timeRegisters as $timeRegister)
           <div class="date">
                <span class="comming-time">
                    {{ $timeRegister->comming_time }}
                </span>
                <span class="leaving-time">
                    {{ $timeRegister->leaving_time }}
                </span>
           </div>
        @endforeach
    </div>
</div>
@endsection
