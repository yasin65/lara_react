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
            <th width="15%">name </th>
            <th width="25%">E-mail </th>
            <th width="35%">Message</th>
            <th width="10%">  Edit    </th>
            <th width="10%">  Delete    </th>
          </tr>

@foreach($yas as $bat)

          <tr>
            <td>{{$bat->id }}</td>
            <td>{{$bat->name }}</td>
            <td>{{$bat->email }}</td>
            <td>{{$bat->message }}</td>
            <td><a href="{{URL::to('edit'.$bat->id)}}">Edit</a></td>
            <td><a href="{{URL::to('/delete'.$bat->id)}}">Delete</a></td>
          </tr>


@endforeach

        </table>

      </div>
    </div>


@endsection