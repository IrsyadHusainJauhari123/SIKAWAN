@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-5" style="margin-top: 50px; margin-left: 100px;">
                <div class="card card-default">
                    <div class="card-header" style="margin-bottom: 20px; background-color:chocolate">
                        <h3 style="color: #ffffff; font-size: 14pt; padding: 5px">Ganti Password {{ Auth::user()->username }}
                        </h3>
                        {{-- @include('components.utils.notif') --}}
                    </div>
                    <div class="card-body">
                        <form action="{{ url('setting') }}" method="post">
                            @method('PUT')

                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label"> Password lama </label>
                                <input type="password" name="lama" class="form-control">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="" class="control-label"> New Password </label>
                                <input type="password" name="baru" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label"> Confirm New Password </label>
                                <input type="password" name="konfirmasi" class="form-control">
                            </div>
                            <div class="form-group">
                                <button style="background-color: chocolate" class="btn btn- float-right"
                                    style="background-color: #008080;"><i class="fa fa-save"></i>
                                    Save </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
