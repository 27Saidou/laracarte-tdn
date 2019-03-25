@extends('layouts.default',['title'=>'About'])
@section('content')
    <div class="container">
        <h2>Whate is {{config('app.name')}}</h2>
        <p>{{config('app.name')}} is a clone app of <a href="https://laramap.com" target="_blank">laramap.com</a>
        </p>
        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-wraning">
                    <strong><i class="fas fa-exclamation-triangle"></i>This app has been built by <a href="https://twitter.com/etsmo">@etsmo</a> for learning purpose</strong>
                </p>
            </div>
        </div>
        <p>
        feel free to help to improve the <a href="https://github.com/27Saidou/laracarte-tdn">source code.</a>
        </p>
        <hr>
        <h2>Whate is laramap ?</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Dolores consequatur perferendis eaque molestiae earum nisi! Impedit, laudantium sed dignissimos a ea enim necessitatibus nostrum rem numquam commodi ex suscipit libero.
        </p>
        <p>More info <a href="https://laramap.com/p/about"> here.</a>
        </p>
        <hr>
        <h2>Which tools and services are you used in {{config('app.name')}} ?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quam cupiditate est ipsa ea assumenda quas magni aspernatur nam odit saepe numquam velit, dicta aut enim eaque omnis consectetur a!
        </p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Madrils</li>
            <li>Google maps</li>
            <li>Gravatar</li>
            <li>Anthony Martin's Geolocation Packages</li>
            <li>Heroku</li>
        </ul>
    </div>
@stop
