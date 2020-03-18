<?php 
$tampil = json_decode($response, true);

$tampil =$tampil["rajaongkir"]["results"];
//echo $tampil[14]["province"];
?>

@extends('template/main')

@section('title', 'tes D.O.T')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Provinsi</th>
                  <th scope="col">Kota</th>
                  <th scope="col">Kode Post</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($tampil as $view) : ?>
                <tr>
                  <th scope="row"><?=  $view["city_id"]; ?></th>
                  <td><?=  $view["province"]; ?></td>
                  <td><?=  $view["city_name"]; ?></td>
                  <td><?=  $view["postal_code"]; ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
        </div>
    </div>
</div>
{{-- <div class="container">

</div> --}}
@endsection






