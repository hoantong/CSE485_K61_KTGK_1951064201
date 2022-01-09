<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <title>Dua an bien doi khi hau</title>
</head>

<body>

  <div class="container-fluid">
    <div class="col-md-12 header mt-2">
      <h3>Chương Trình Dự Án KTTV BDKH </h3>
      <div class="button">
        <button type="button" class="btn btn-danger">Thêm</button>
        <button type="button" class="btn btn-warning">Sửa</button>
        <button type="button" class="btn btn-info">Xóa</button>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-4">

        <select class="form-select" aria-label="Default select example">
          <option selected>Chọn lĩnh vực</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>

      </div>

      <div class="col-md-4">

        <select class="form-select" aria-label="Default select example">
          <option selected>Chọn loại nhiệm vụ</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>

      </div>
      <div class="col-md-4">
        <div class="input-group rounded">
          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
            aria-describedby="search-addon" />
          <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
          </span>
        </div>
    </div>

        <div class="container">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Mã dự án</th>
                <th scope="col">Tên dự án</th>
                <th scope="col">Thời gian</th>
                <th scope="col">Lĩnh vực</th>
                <th scope="col">Nhiệm vụ</th>
                <th scope="col">Cơ quan thực hiện</th>
                <th scope="col">Tổng đầu tư</th>
                <th scope="col">Người ký</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tệp tin</th>

              </tr>
            </thead>
            <tbody>
              <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
              <?php
                    // Bước 01: Kết nối Database Server
                    $conn = mysqli_connect('localhost','root','','1951064201_kttv_bdkh');
                    if(!$conn){
                        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                    }
                    // Bước 02: Thực hiện truy vấn
                    $sql = "SELECT * FROM duan";
                    $result = mysqli_query($conn,$sql);
                    // Bước 03: Xử lý kết quả truy vấn
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
              <tr>
                <th scope="row">
                  <?php echo $row['maduan']; ?>
                </th>
                <td>
                  <?php echo $row['tenduan']; ?>
                </td>
                <td>
                  <?php echo $row['namthuchien']; ?>
                </td>
                <td>
                  <?php echo $row['linhvuc']; ?>
                </td>
                <td>
                  <?php echo $row['nhiemvu']; ?>
                </td>
                <td>
                  <?php echo $row['coquanthuchien']; ?>
                </td>

              </tr>
              <?php
                        }
                    }
                ?>


            </tbody>

          </table>
        </div>


      </div>







      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>