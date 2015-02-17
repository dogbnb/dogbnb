@extends('layouts.master')

@section('content')
 
<title>Host Profile </title>
<!-- table info -->
  <div class="container bordered img-rounded">
    <h2 class="page-header"> Host Profile</h2>
    <div class="panel panel-default">
        <table class="table table-striped table-bordered">
		    <tr>
          <th>Name</th>
          <th>Phone</th>    
          <th>Email</th>
          <th>Street Address</th>
          <th>Apt</th>
          <th>City</th>
          <th>State</th>
          <th>Zip</th>
          <th>Nickname</th>
          <th>Max. Size Allowed</th>
          <th>Description</th>
			    <th width="70px"></th>
		    </tr>

    <!-- populate table -->
            <? foreach ($stmts as $stmt): ?>
              
              <tr>
             
                <td><?= $stmt['name'] ?></td>
                <td><?= $stmt['phone'] ?></td>
                <td><?= $stmt['email'] ?></td>
                <td><?= $stmt['street'] ?></td>
                <td><?= $stmt['apt'] ?></td>
				<td><?= $stmt['city'] ?></td>
                <td><?= $stmt['state'] ?></td>
                <td><?= $stmt['zip'] ?></td>
                <td><?= $stmt['nickname'] ?></td>
                <td><?= $stmt['maxsize'] ?></td>
                <td><?= $stmt['description'] ?></td>
              
            <? endforeach ?>
              </tr>
  </table>
</div>
@stop