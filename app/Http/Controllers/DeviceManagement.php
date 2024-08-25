<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceManagement extends Controller
{
    //

    public function index()
    {
        $devices = Device::all();
        return view('laravel-examples.index', compact('devices'));
    }

    public function create()
    {
        return view('laravel-examples.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'device_name' => 'required',
            'device_type' => 'required',
            'device_status' => 'required',
        ]);

        Device::create($validated);

        // Redirect to the correct named route
        return redirect()->route('laravel-examples.index')->with('success', 'Device created successfully.');
    }

    public function show(Device $device)
    {
        return view('laravel-examples.show', compact('device'));
    }

    public function edit(Device $device)
    {
        return view('laravel-examples.edit', compact('device'));
    }


    public function update(Request $request, Device $device)
    {
        $validated = $request->validate([
            'device_name' => 'required',
            'device_type' => 'required',
            'device_status' => 'required',
        ]);

        $device->update($validated);

        // Redirect to the correct named route
        return redirect()->route('laravel-examples.index')->with('success', 'Device updated successfully.');
    }

    public function destroy(Device $device)
    {
        $device->delete();

        // Redirect to the correct named route
        return redirect()->route('laravel-examples.index')->with('success', 'Device deleted successfully.');
    }

}
