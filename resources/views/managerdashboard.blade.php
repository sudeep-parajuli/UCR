@extends("layouts.app")

@section("title") Manager Dashboard @endsection

@section("content")
<h3>Manager Dashboard</h3>


<section class="container">
<h4>Total Number of Users in UCR</h4><br>
<table class="table">
<thead class="table-primary">
<tr>
<th scope="col-3">User Type</th>
<th scope="col-3"> Total Number</th>
</tr>
</thead>

<tbody>
<tr>
<td>UCR Staff</td>
<td>{{$totalUCRStaff->count()}}</td>
</tr>

<tr>
<td>Staff-Customer</td>
<td>{{$totalStaff->count()}}</td>
</tr>

<tr>
<td>Staff-Customer</td>
<td>{{$totalStudent->count()}}</td>
</tr>
</tbody>
</table>

<h4>Total Number of Device Available</h4><br>
<h5> Total Device: {{$totalDevice->count()}}</h5>
<table class="table">
<thead class="table-primary">
<tr>
<th scope="col-3">Device Brand</th>
<th scope="col-3"> Total Number</th>
</tr>
</thead>

<tbody>
<tr>
<td>HP</td>
<td>{{$totalDevice->where("brand", "=", "HP")->count()}}</td>
</tr>

<tr>
<td>Apple</td>
<td>{{$totalDevice->where("brand", "=", "Apple")->count()}}</td>
</tr>

<tr>
<td>Asus</td>
<td>{{$totalDevice->where("brand", "=", "Asus")->count()}}</td>
</tr>

<tr>
<td>Dell</td>
<td>{{$totalDevice->where("brand", "=", "Dell")->count()}}</td>
</tr>

<tr>
<td>Lenovo</td>
<td>{{$totalDevice->where("brand", "=", "Lenovo")->count()}}</td>
</tr>

<tr>
<td>Toshiba</td>
<td>{{$totalDevice->where("brand", "=", "Toshiba")->count()}}</td>
</tr>

<tr>
<td>Microsoft</td>
<td>{{$totalDevice->where("brand", "=", "Microsoft")->count()}}</td>
</tr>
</tbody>
</table>
</section>

@endsection