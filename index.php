
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="header">
          <div class="container">
            <nav class="navbar navbar-inverse">
                  <div class="container-fluid">
                    <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="#">Namchinh</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                      <li class="dropdown">
                       <a class="dropdown-toggle" data-toggle="dropdown">Trang chủ
                       <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                         <li><a href="#">HTML</a></li>
                         <li><a href="#">CSS</a></li>
                         <li><a href="#">JavaScript</a></li>
                       </ul>
                     </li>


                       <li><a href="#">Trang chủ</a></li>
                       <li><a href="#">Trang chủ</a></li>
                       <li><a href="#">Trang chủ</a></li>
                    </ul>
                    <form class="navbar-form navbar-left" action="/action_page.php">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a data-toggle="modal" data-target="#myModal" href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                              <div class="modal fade" id="myModal" role="dialog"> 
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                       <h4 class="modal-title">Đăng ký</h4>
                                    </div>
                                    <div class="modal-body">
                                       <form action="/action_page.php"> <!-- Nội dung modal -->
                                     
                                          <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                          </div>
                                          <div class="form-group">
                                            <label for="ngaysinh">Ngày Sinh:</label>
                                            <input type="date" class="form-control" id="ngaysinh" placeholder="Nhap ngaysinh" name="ngaysinh">
                                          </div>
                                          <div class="form-group">
                                            <label for="gt">Giới tính:</label>
                                            <label class="checkbox-inline">
                                              <input type="checkbox" value="">Nam
                                            </label>
                                            <label class="checkbox-inline">
                                              <input type="checkbox" value="">Nữ
                                            </label>
                                          </div>

                                          <div class="form-group">
                                            <label for="pwd">Password:</label>
                                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                          </div>
                                          
                                          <button type="submit" class="btn btn-default">Submit</button>
                                        
                                      </form>
                                      
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                    </div>
                                 </div>

                              </div> 


                               

                              </div>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                  </div>
                  </div>
            </nav>

          </div>

        </div>
        <div class="content">
          <div class="container">
                    <div class="row">
                      <h2> <span class="title_row">Danh sách sản phẩm<span></h2>

                        
                        <div class="col-sm-3">
                          <div class="thumbnail">
                            <img src="image/thum3.jpg" alt="...">
                            <div class="caption">
                              <h3 class="title_product"><a href="#">VÁY SƠ MI TRẮNG DÁNG XÒE</a></h3>
                              <p><span class="price">Giá :200000 VND</span></p>
                              <p class="check_out"><a href="#" class="btn btn-primary" role="button">Đặt hàng</a> <a href="#" class="btn btn-default" role="button">Chi tiết</a></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="thumbnail">
                            <img src="image/thum2.jpg" alt="...">
                            <div class="caption">
                              <h3 class="title_product"><a href="#">VÁY SƠ MI TRẮNG DÁNG XÒE</a></h3>
                              <p><span class="price">Giá :200000 VND</span></p>
                              <p class="check_out "><a href="#" class="btn btn-primary" role="button">Đặt hàng</a> <a href="#" class="btn btn-default" role="button">Chi tiết</a></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="thumbnail">
                            <img src="image/thum.jpg" alt="...">
                            <div class="caption">
                              <h3 class="title_product"><a href="#">VÁY SƠ MI TRẮNG DÁNG XÒE</a></h3>
                              <p><span class="price">Giá :200000 VND</span></p>
                              <p class="check_out "><a href="#" class="btn btn-primary" role="button">Đặt hàng</a> <a href="#" class="btn btn-default" role="button">Chi tiết</a></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="thumbnail">
                            <img src="image/thum3.jpg" alt="...">
                            <div class="caption">
                              <h3 class="title_product"><a href="#">VÁY SƠ MI TRẮNG DÁNG XÒE</a></h3>
                              <p><span class="price">Giá :200000 VND</span></p>
                              <p class="check_out "><a href="#" class="btn btn-primary" role="button">Đặt hàng</a> <a href="#" class="btn btn-default" role="button">Chi tiết</a></p>
                            </div>
                          </div>
                        </div>
                        
                        </div>
                 </div>
                 <hr>
            <div class="container title_list_pro">
              <H1 class="dt">Điện thoại</H1>
        
              <H1 class="lt">Lap top</H1>
              
              <H1 class="pk">Phụ kiện</H1>

              
            </div>
            <div class="container product_flex">
              
                <div class="box_pro_flex">
                
                  <div class="item item1">
                    <img src="image/dienthoai.jpg">
                    <div class="infor_pro">
                      
                      <p>dasdasdasdasdsadsads</p>
                      <p>2324323432434</p>
                      <button type="button" class="btn btn-info">Info</button>
                      <button type="button" class="btn btn-info">Info</button>




                    </div>
                     
                  </div>
                   <div class="item item2">
                     
                        <img src="image/dienthoai.jpg">
                         <div class="infor_pro">
                      
                      <p>dasdasdasdasdsadsads</p>
                      <p>2324323432434</p>
                      <button type="button" class="btn btn-info">Info</button>
                      <button type="button" class="btn btn-info">Info</button>
                    </div>
                  </div>
                   <div class="item item3">
                        <img src="image/dienthoai.jpg">
                         <div class="infor_pro">
                      
                      <p>dasdasdasdasdsadsads</p>
                      <p>2324323432434</p>
                      <button type="button" class="btn btn-info">Info</button>
                      <button type="button" class="btn btn-info">Info</button>

                    </div>
                  </div>
                   <div class="item item3">
                        <img src="image/dienthoai.jpg">
                         <div class="infor_pro">
                      
                      <p>dasdasdasdasdsadsads</p>
                      <p>2324323432434</p>
                      <button type="button" class="btn btn-info">Info</button>
                      <button type="button" class="btn btn-info">Info</button>

                    </div>
                  </div>

                </div>
                <div class="box_pro_flex">
                
                  <div class="item item1">
                    <img src="image/dienthoai.jpg">
                    <div class="infor_pro">
                      
                      <p>dasdasdasdasdsadsads</p>
                      <p>2324323432434</p>
                      <button type="button" class="btn btn-info">Info</button>
                      <button type="button" class="btn btn-info">Info</button>




                    </div>
                     
                  </div>
                   <div class="item item2">
                     
                        <img src="image/dienthoai.jpg">
                         <div class="infor_pro">
                      
                      <p>dasdasdasdasdsadsads</p>
                      <p>2324323432434</p>
                      <button type="button" class="btn btn-info">Info</button>
                      <button type="button" class="btn btn-info">Info</button>
                    </div>
                  </div>
                   <div class="item item3">
                        <img src="image/dienthoai.jpg">
                         <div class="infor_pro">
                      
                      <p>dasdasdasdasdsadsads</p>
                      <p>2324323432434</p>
                      <button type="button" class="btn btn-info">Info</button>
                      <button type="button" class="btn btn-info">Info</button>

                    </div>
                  </div>
                   <div class="item item3">
                        <img src="image/dienthoai.jpg">
                         <div class="infor_pro">
                      
                      <p>dasdasdasdasdsadsads</p>
                      <p>2324323432434</p>
                      <button type="button" class="btn btn-info">Info</button>
                      <button type="button" class="btn btn-info">Info</button>

                    </div>
                  </div>

                </div>
                <div class="box_pro_flex">
                
                  <div class="item item1">
                    <img src="image/dienthoai.jpg">
                    <div class="infor_pro">
                      
                      <p>dasdasdasdasdsadsads</p>
                      <p>2324323432434</p>
                      <button type="button" class="btn btn-info">Info</button>
                      <button type="button" class="btn btn-info">Info</button>




                    </div>
                     
                  </div>
                   <div class="item item2">
                     
                        <img src="image/dienthoai.jpg">
                         <div class="infor_pro">
                      
                      <p>dasdasdasdasdsadsads</p>
                      <p>2324323432434</p>
                      <button type="button" class="btn btn-info">Info</button>
                      <button type="button" class="btn btn-info">Info</button>
                    </div>
                  </div>
                   <div class="item item3">
                        <img src="image/dienthoai.jpg">
                         <div class="infor_pro">
                      
                      <p>dasdasdasdasdsadsads</p>
                      <p>2324323432434</p>
                      <button type="button" class="btn btn-info">Info</button>
                      <button type="button" class="btn btn-info">Info</button>

                    </div>
                  </div>
                   <div class="item item3">
                        <img src="image/dienthoai.jpg">
                         <div class="infor_pro">
                      
                      <p>dasdasdasdasdsadsads</p>
                      <p>2324323432434</p>
                      <button type="button" class="btn btn-info">Info</button>
                      <button type="button" class="btn btn-info">Info</button>

                    </div>
                  </div>

                </div>


            </div>
          </div>



          </div>
              <div class="footer">
        </div>
        </div>
        

</body>
</html>
