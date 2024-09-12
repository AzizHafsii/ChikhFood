@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Our Working Times</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Day</th>
                        <th scope="col">Opening Hours</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monday</td>
                        <td>10:00 AM - 10:00 PM</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>10:00 AM - 10:00 PM</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>10:00 AM - 10:00 PM</td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>10:00 AM - 10:00 PM</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>10:00 AM - 11:00 PM</td>
                    </tr>
                    <tr>
                        <td>Saturday</td>
                        <td>10:00 AM - 11:00 PM</td>
                    </tr>
                    <tr>
                        <td>Sunday</td>
                        <td>10:00 AM - 11:00 PM</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection