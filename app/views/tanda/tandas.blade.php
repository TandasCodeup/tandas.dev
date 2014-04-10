@extends('layouts.master')


@section('content')

<div class="container">
    <div class="row">
        <h2>Float Label Pattern Forms</h2>
        <p class="lead">
            This new pattern transforms Bootstrap's form fields into modern, fun and user-friendly experiences!<br />
            <small class="text-muted">Learn more about this pattern at <a href="http://bradfrostweb.com/blog/post/float-label-pattern/" target="blank">http://bradfrostweb.com/blog/post/float-label-pattern/</a></small>
        </p>

        <div class="alert alert-warning">
            <h4>Missing SELECT Support</h4>
            This feature does not currently support SELECT tags - I'm still working out a way to make them work with Bootstrap's native examples.
        </div>

        <hr />

        <div class="row">
            <div class="col-sm-8">

                <h4 class="page-header">Default Implementation</h4>
                <form role="form">
                    <div class="form-group float-label-control">
                        <label for="">Username</label>
                        <input type="email" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">Textarea</label>
                        <textarea class="form-control" placeholder="Textarea" rows="1"></textarea>
                    </div>
                </form>


                <h4 class="page-header">Bottom Labels</h4>
                <form role="form">
                    <div class="form-group float-label-control label-bottom">
                        <label for="">Username</label>
                        <input type="email" class="form-control" placeholder="Username">
                    </div>
                </form>


                <h4 class="page-header">Placeholder Overrides</h4>
                <form role="form">
                    <div class="form-group float-label-control">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control" placeholder="What's your email address?">
                    </div>
                </form>

            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Features
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>Very customizable</li>
                            <li>Works with Bootstrap's native form examples</li>
                            <li>Uses CSS transitions for fallback browser support</li>
                            <li>Placeholder override for labels when fields are empty</li>
                            <li>Included authored jQuery plugin</li>
                            <li>Optional bottom label positioning with the <code>.label-bottom</code> utility</li>
                            <li>Works great with Chrome's AutoComplete</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




$stop

