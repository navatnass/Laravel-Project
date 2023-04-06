@extends('front.layouts.document')

@section('content')
<section>
    <header>
        <div class="nav-box">
            <img class="logotype" 
            src="{{ asset('storage/images/logotruck.jpg') }}" 
            alt="Logotype">
            <nav>
                <ul class="nav-links">
                    <li>
                        <a class="active" style="left: -630px;" href="{{route('front.home')}}">{{__('Home')}}</a>
                    </li>
                </ul>
            <img class="lang-en"
                src="{{ asset('storage/images/flagen.png') }}" 
                alt="lang">
                <a class="lang-en" href="/lang/en"></a>
            <img class="lang-lt" 
                src="{{ asset('storage/images/flaglt.png') }}" 
                alt="lang">
                <a class="lang-lt" href="/lang/lt"></a>
            </nav>
        </div>
        <div class="nav-line"></div>
    </header>
    
    <div class="game-cards">
       @foreach ($trucks as $truck)
            <article class="game-card game-card-hover">
                <div>
                    <h2>
                        {{ ($truck->make ?? '') }} {{ ($truck->model ?? '') }}
                    </h2>
                </div>
                <div class="game-card-body">
                    <div class="game-card-details">
                        <div>
                            <span>{{Str::ucfirst(trans('app.years'))}}</span>
                            <span>{{ ($truck->years ?? '')}}</span>
                        </div>
                        <div>
                            <span>{{Str::ucfirst(trans('app.run'))}}</span>
                            <span>{{ ($truck->run?? '')}} {{trans('app.km') }}</span>
                        </div>
                        <div>
                            <span>{{Str::ucfirst(trans('app.fuel'))}}</span>
                            <span>{{ ($truck->fuel ?? '') }}</span>
                        </div>
                        <div>
                            <span>{{Str::ucfirst(trans('app.type'))}}</span>
                            <span>{{ ($truck->type ?? '') }}</span>
                        </div>
                        <div>
                            <span>{{Str::ucfirst(trans('app.standart'))}}</span>
                            <span>{{ ($truck->standart ?? '') }}</span>
                        </div>
                        <div>
                            <span>{{Str::ucfirst(trans('app.countries'))}}</span>
                            <span>{{ ($truck->countries ?? '') }}</span>
                        </div>
                        <div>
                            <span>{{Str::ucfirst(trans('app.price'))}}</span>
                            <span>{{ ($truck->price?? '') }} {{trans('app.€') }}</span>
                        </div>
                        <br>
                        <div>
                    </div>
                    <div class="game-card-description">
                        {{ ($truck->description ?? '')}}
                    </div>
                </div>
                <div class="buttons">
                    <a href="{{route('front.trucks.show', ['truck' => $truck->id])}}" class="button">{{Str::ucfirst(trans('app.buy')) }}</a>
                    <a href="{{route('front.trucks.show', ['truck' => $truck->id])}}" class="button">{{Str::ucfirst(trans('app.pictures')) }}</a>
                </div>
            </article>
       @endforeach
    </div>
</section>
@endsection

