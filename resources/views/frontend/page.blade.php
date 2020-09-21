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
            <th width="30%">Zila </th>
            <th width="35%">Code</th>
            <th width="10%">  Edit    </th>
            <th width="10%">  Delete    </th>
          </tr>

@foreach($cat as $rat)

          <tr>
            <td>{{ $rat->id }}</td>
            
            <td>{{ $rat->zila }}</td>
            <td>{{ $rat->code }}</td>
            <td><a href="{{URL::to('edity'.$rat->id)}}">Edit</a></td>
            <td><a href="{{URL::to('/deletey'.$rat->id)}}">Delete</a></td>
          </tr>

@endforeach


        </table>

      </div>
    </div>


@endsection