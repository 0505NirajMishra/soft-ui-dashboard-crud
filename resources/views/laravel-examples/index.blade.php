@extends('layouts.user_type.auth')

@section('content')

<div>


    <div class="row">


        <div class="col-12">

            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Devices</h5>
                        </div>
                        <a href="{{ route('laravel-examples.create') }}" class="btn bg-gradient-primary btn-sm mb-0"
                            type="button">+&nbsp; Add Device</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Device Name
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Device Type
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Device Status
                                    </th>
                                    <td></td>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($devices as $device)


                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{ $device->id }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $device->device_name }}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{ $device->device_type }}</p>
                                    </td>
                                    <td class="text-center">

                                        @if ($device->device_status == 0)
                                        <p class="text-xs text-danger">deactice</p>
                                        @else
                                        <p class="text-xs text-success">active</p>
                                        @endif

                                    </td>

                                    <td></td>

                                    <td class="d-flex align-items-center position-relative">
                                        <a href="{{ route('laravel-examples.edit', $device) }}" class="btn btn-warning btn-custom position-relative me-2">Edit</a>

                                        <form action="{{ route('laravel-examples.destroy', $device) }}" method="POST" class="m-0">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-custom">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
