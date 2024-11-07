@extends('backend.app')

@section('content')

                            <form action="{{ route('students.store') }}" method="POST" class="parsley-examples">
                            @csrf
                                        <div class="form-group">
                                            <label for="userName">User Name<span class="text-danger">*</span></label>
                                            <input type="text" name="name" parsley-trigger="change" required
                                                    placeholder="Enter user name" class="form-control" id="userName">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                            <input type="email" name="email" parsley-trigger="change" required
                                                    placeholder="Enter email" class="form-control" id="emailAddress">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">phone<span class="text-danger">*</span></label>
                                            <input id="pass1" type="text" placeholder="phone" name="phone" required
                                                    class="form-control">
                                        </div>

                                        

                                        <div class="form-group">
                                        <label for="address">Address <span class="text-danger">*</span></label>
                                            <textarea name="address" type="text" id="" required
                                            placeholder="address" class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <div class="checkbox checkbox-purple">
                                                <input id="checkbox6a" type="checkbox">
                                                <label for="checkbox6a">
                                                    Remember me
                                                </label>
                                            </div>
        
                                        </div>
        
                                        <div class="form-group text-right mb-0">
                                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-light waves-effect">
                                                Cancel
                                            </button>
                                        </div>
        
                                    </form>
@endsection