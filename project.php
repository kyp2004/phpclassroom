<?php 
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-all");
  $data = json_decode($json);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>ศูนย์ข้อมูล Covid-19 โรงเรียนหล่มสักวิทยาคม</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.1/examples/pricing/pricing.css" rel="stylesheet">
  </head>
  <body>

<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4">ศูนย์ข้อมูล Covid-19 โรงเรียนหล่มสักวิทยาคม</span>
      </a>
    </div>
    <!-- แก้ไขส่วนที่ 1 -->
    <div class="d-flex justify-content-end">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="profile.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">จัดทำโดย</h5>
              <p class="card-text">นางสาวกัญญาภัทร  เมฆมล </p>
              <p class="card-text"><small class="text-muted">ม.6/13 เลขที่ 18 , 55795</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-7 fw-normal">รายงานข้อมูล Covid-19 รายวัน</h1>
      <p class="fs-5 text-muted">ข้อมูล ณ <?php echo $data[0]->txn_date; ?></p>
    </div>
  </header>
  <!-- แก้ไขส่วนที่ 2 -->
  <main>
    <div class="row row-cols-1 row-cols-md-4 mb-3 text-center">
      <div class="col-3">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3 bg-primary text-white">
            <h4 class="my-0 fw-normal">ผู้ป่วยใหม่</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php echo $data[0]->new_case; ?><small class="text-muted fw-light"> คน</small></h1>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3 bg-success text-white">
            <h4 class="my-0 fw-normal">หายป่วยกลับบ้าน</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">xxx<small class="text-muted fw-light"> คน</small></h1>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card mb-4 rounded-3 shadow-sm ">
          <div class="card-header py-3 bg-warning text-white">
            <h4 class="my-0 fw-normal">ผู้ป่วยสะสม</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">xxx<small class="text-muted fw-light"> คน</small></h1>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3 bg-dark text-white">
            <h4 class="my-0 fw-normal">เสียชีวิต</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">xxx<small class="text-muted fw-light"> คน</small></h1>
          </div>
        </div>
      </div>
    </div>

  </main>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <header>
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-7 fw-normal">รายงานข้อมูล Covid-19 แยกจังหวัด</h1>
      </div>
    </header>
    <div class="row">
      <div class="col">
        <table class="table table-striped rounded-3">
          <tr>
            <th>#</th>
            <th>จังหวัด</th>
            <th>ผู้ป่วยใหม่</th>
            <th>หายป่วยกลับบ้าน</th>
            <th>ผู้ป่วยสะสม</th>
            <th>เสียชีวิต</th>
          </tr>
          <!-- แก้ไขส่วนที่ 3 -->
          <!-- Loop -->
          <tr>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
          </tr>
          <tr>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
          </tr>
          <tr>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
          </tr>
        </table>
      </div>
    </div>

  </footer>
</div>


    
  </body>
</html>
