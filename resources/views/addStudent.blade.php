@extends('welcome')
@section('title')
 Add Student Details
@endsection
@section('main_template')
<div class="container">
    <div class="row">
        <div class="col-md-8" style="margin-top: 30px">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Add Student Details</h3>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">File input</label>
                          <input type="file" id="exampleInputFile">
                          <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Check me out
                          </label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection