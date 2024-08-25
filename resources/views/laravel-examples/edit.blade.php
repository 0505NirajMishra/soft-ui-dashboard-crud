@extends('layouts.user_type.auth')

@section('content')

<div class="row">
    <div class="col-md-12 ">
        <!-- Centers the card -->
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('laravel-examples.update',$device) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Device Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="device_name"
                                    aria-describedby="emailHelp" placeholder="Device Name"
                                    value="{{ old('device_name',$device->device_name) }}">

                                @error('device_name')
                                <span class="text-danger text-xs mt-2">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Device Type</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="device_type"
                                    placeholder="Device Type" value="{{ old('device_type',$device->device_type) }}">

                                @error('device_type')
                                <span class="text-danger text-xs mt-2">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Device Status</label>
                                <select name="device_status" class="form-control">
                                    <option value="">Select</option>
                                    <option value="0" {{ $device->device_status == 0 ? 'selected' : '' }} >Deactive</option>
                                    <option value="1" {{ $device->device_status == 1 ? 'selected' : '' }} >Active</option>
                                </select>

                                @error('device_status')
                                <span class="text-danger text-xs mt-2">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
