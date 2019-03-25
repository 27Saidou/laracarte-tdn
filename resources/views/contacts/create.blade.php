@extends('layouts.default',['title'=>'Contact'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 ">
                <h2>Get In Touch</h2>
                <p class="text-muted">if you having trouble with this service.please <a href="mailto:saidou360@yahoo.com">ask me for help</a></p>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label sr-only">Message</label>
                        <textarea name="message" id="message" rows="10" cols="10" class="form-control" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
