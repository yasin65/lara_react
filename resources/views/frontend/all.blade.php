@extends('layout')

@section('content')

<div id="content_header"></div>
    <div id="site_content">

      <div id="content">
        <!-- insert the page content here -->


        <h2>Tables</h2>
        <p>Tables should be used to display data and not used for laying out your website:</p>
        <table style="width:100%; border-spacing:0;">
          <tr>
            <th width="5%">Id </th>
            <th width="15%">Name </th>
            <th width="25%">E-mail </th>
            <th width="40%">Message</th>

          </tr>

@foreach($post as $past)
<tr>
  <td>{{$past->id}}</td>
  <td>{{$past->name}}</td>
  <td>{{$past->email}}</td>
  <td>{{$past->message}}</td>
</tr>
@endforeach


        </table>

      </div>
    </div>


@endsection