@extends('layouts.email')
@section('content')

    <h2 style="font-weight: 500;font-size: 20px;color: #fff;">Hi!</h2>
    <p style="font-weight: 400;color: #fff;">
        <table class="table">
            <tr>
                <td>Name</td>
                <td>{{$inquiry->name}}</td>
            </tr>
            <tr>
                <td>Eamil</td>
                <td>{{$inquiry->email}}</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>{{$inquiry->subject}}</td>
            </tr>
            <tr>
                <td>Message</td>
                <td>{{$inquiry->message}}</td>
            </tr>
        </table>

    </p>

    <p style="font-weight: 400;color: #fff;">If you have any questions, feel free to reach out us at <a href="mailto:support@skoolio.xyz">support@sigmadigital.xyz</a> </p>
    <br>

@endsection
