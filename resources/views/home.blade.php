<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<style>
.carousel{
  width: 90%;
  margin-left: auto;
  border: 1px solid #d5d1d1;
  margin-right: auto;
  padding: 10px 0px 10px 0px;
  height: 492.4px;
  border-radius: 3px;
}
  .carousel-control-prev-icon,
.carousel-control-next-icon {
  height: 100px;
  width: 100px;
  outline: black;
  background-size: 100%, 100%;
}
.carousel-control-prev-icon{
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;

}
.carousel-control-next-icon{
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
}

.carousel .carousel-inner .carousel-item .row{
  width: 100%;
  margin: 0px 0px 0px 0px;
  /*height:450px;*/ 
 /* background-color: #495057*/
}
.carousel-control-next, .carousel-control-prev {
    width: 100px;
}
.navbar .navbar-nav{
  margin-right: 5%;
}
.nav-tabs .nav-item .nav-link{
  color: #495057;
}
.nav-tabs .nav-item{
  width:150px;
  text-align: center;
}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #ffffff;
    background-color: #495057;
    border-color: #dee2e6 #dee2e6 #fff;
}

.carousel-inner .carousel-item {
  padding-left: 100px;
  padding-right: 100px;
  transition: -webkit-transform 1s ease;
  transition: transform 1s ease;
  transition: transform 1s ease, -webkit-transform 1s ease;
}
.featured{
  margin-top: 35px;
  text-align: center;
}
.nav-tabs{
  border: 0px;
}
.tab-content{
  width: 90%;
  margin: 0 auto 0 auto;
  border: 1px solid #bcbaba;
  border-radius: 3px;
}
.tab-content .tab-pane .row{
  margin:10px 0px 10px;
  width: 100%;
}
.container{
  max-width: 1400px;
  padding: 0px 100px 0px 100px;
}
.tab-content .container .row .col-sm-3 .card{
  width: 258.81px;
  height: 472.18px;
}
.on-sale{
  display: inline-flex;
  margin-left: 80px;
}
.on-sale .btn-secondary{
  margin-left: 1150px;
}
</style>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="170px" height="30px">
            <path fill-rule="evenodd" fill="#f75454" d="M166.225,28.691 L165.065,15.398 L160.598,28.691 L158.229,28.691 L153.762,15.398 L152.590,28.691 L148.928,28.691 L150.405,11.052 L155.629,11.052 L159.389,22.124 L163.198,11.052 L168.422,11.052 L169.875,28.691 L166.225,28.691 ZM142.641,28.691 L138.051,20.928 L136.989,20.928 L136.989,28.691 L133.327,28.691 L133.327,11.052 L139.724,11.052 C140.692,11.052 141.546,11.189 142.287,11.461 C143.028,11.734 143.620,12.112 144.063,12.596 C144.507,13.081 144.840,13.636 145.064,14.263 C145.288,14.889 145.400,15.577 145.400,16.326 C145.400,17.506 145.078,18.472 144.436,19.225 C143.793,19.978 142.869,20.484 141.665,20.745 L146.975,28.691 L142.641,28.691 ZM141.896,16.204 C141.896,15.544 141.673,15.028 141.225,14.653 C140.777,14.279 140.086,14.092 139.150,14.092 L136.989,14.092 L136.989,18.303 L139.150,18.303 C140.981,18.303 141.896,17.603 141.896,16.204 ZM125.570,27.831 C124.206,28.567 122.666,28.936 120.949,28.936 C119.224,28.936 117.680,28.567 116.317,27.831 C114.953,27.094 113.881,26.034 113.100,24.651 C112.319,23.267 111.928,21.672 111.928,19.866 C111.928,18.051 112.319,16.454 113.100,15.074 C113.881,13.695 114.953,12.639 116.317,11.907 C117.680,11.174 119.224,10.808 120.949,10.808 C122.674,10.808 124.217,11.174 125.576,11.907 C126.935,12.639 128.005,13.695 128.786,15.074 C129.567,16.454 129.958,18.051 129.958,19.866 C129.958,21.672 129.567,23.267 128.786,24.651 C128.005,26.034 126.933,27.094 125.570,27.831 ZM124.807,15.715 C123.797,14.690 122.512,14.177 120.949,14.177 C119.387,14.177 118.101,14.690 117.092,15.715 C116.083,16.741 115.578,18.124 115.578,19.866 C115.578,21.616 116.083,23.005 117.092,24.034 C118.101,25.064 119.387,25.579 120.949,25.579 C122.512,25.579 123.797,25.064 124.807,24.034 C125.816,23.005 126.320,21.616 126.320,19.866 C126.320,18.124 125.816,16.741 124.807,15.715 ZM66.872,28.691 L61.391,21.196 L60.097,21.196 L60.097,28.691 L56.435,28.691 L56.435,11.052 L60.097,11.052 L60.097,17.986 L61.342,17.986 L66.872,11.052 L71.340,11.052 L64.504,19.487 L71.547,28.691 L66.872,28.691 ZM48.677,27.831 C47.314,28.567 45.774,28.936 44.057,28.936 C42.332,28.936 40.788,28.567 39.425,27.831 C38.061,27.094 36.989,26.034 36.208,24.651 C35.427,23.267 35.036,21.672 35.036,19.866 C35.036,18.051 35.427,16.454 36.208,15.074 C36.989,13.695 38.061,12.639 39.425,11.907 C40.788,11.174 42.332,10.808 44.057,10.808 C45.782,10.808 47.324,11.174 48.684,11.907 C50.043,12.639 51.113,13.695 51.894,15.074 C52.675,16.454 53.066,18.051 53.066,19.866 C53.066,21.672 52.675,23.267 51.894,24.651 C51.113,26.034 50.040,27.094 48.677,27.831 ZM47.915,15.715 C46.905,14.690 45.620,14.177 44.057,14.177 C42.495,14.177 41.209,14.690 40.200,15.715 C39.191,16.741 38.686,18.124 38.686,19.866 C38.686,21.616 39.191,23.005 40.200,24.034 C41.209,25.064 42.495,25.579 44.057,25.579 C45.620,25.579 46.905,25.064 47.915,24.034 C48.924,23.005 49.428,21.616 49.428,19.866 C49.428,18.124 48.924,16.741 47.915,15.715 ZM28.487,27.831 C27.124,28.567 25.584,28.936 23.867,28.936 C22.141,28.936 20.597,28.567 19.234,27.831 C17.871,27.094 16.799,26.034 16.018,24.651 C15.236,23.267 14.846,21.672 14.846,19.866 C14.846,18.051 15.236,16.454 16.018,15.074 C16.799,13.695 17.871,12.639 19.234,11.907 C20.597,11.174 22.141,10.808 23.867,10.808 C25.592,10.808 27.134,11.174 28.493,11.907 C29.852,12.639 30.922,13.695 31.704,15.074 C32.485,16.454 32.875,18.051 32.875,19.866 C32.875,21.672 32.485,23.267 31.704,24.651 C30.922,26.034 29.850,27.094 28.487,27.831 ZM27.724,15.715 C26.715,14.690 25.429,14.177 23.867,14.177 C22.304,14.177 21.018,14.690 20.009,15.715 C19.000,16.741 18.496,18.124 18.496,19.866 C18.496,21.616 19.000,23.005 20.009,24.034 C21.018,25.064 22.304,25.579 23.867,25.579 C25.429,25.579 26.715,25.064 27.724,24.034 C28.733,23.005 29.238,21.616 29.238,19.866 C29.238,18.124 28.733,16.741 27.724,15.715 ZM11.672,27.367 C10.736,28.250 9.361,28.691 7.546,28.691 L0.283,28.691 L0.283,11.052 L5.996,11.052 C7.875,11.052 9.314,11.478 10.311,12.328 C11.308,13.178 11.806,14.365 11.806,15.886 C11.806,16.676 11.633,17.374 11.287,17.980 C10.941,18.586 10.431,19.052 9.755,19.377 C11.969,19.988 13.076,21.445 13.076,23.748 C13.076,25.278 12.608,26.484 11.672,27.367 ZM7.827,14.647 C7.420,14.277 6.821,14.092 6.032,14.092 L3.811,14.092 L3.811,18.242 L6.191,18.242 C6.940,18.242 7.501,18.047 7.875,17.656 C8.250,17.266 8.437,16.753 8.437,16.118 C8.437,15.508 8.233,15.018 7.827,14.647 ZM8.876,21.709 C8.445,21.278 7.749,21.062 6.789,21.062 L3.811,21.062 L3.811,25.554 L6.862,25.554 C7.782,25.554 8.455,25.347 8.883,24.932 C9.310,24.517 9.523,23.988 9.523,23.345 C9.523,22.686 9.308,22.140 8.876,21.709 Z"></path>
            <path fill="#f75454" fill-rule="evenodd" d="M105.996,23.499 C105.995,26.752 103.950,29.265 100.748,29.950
            C100.713,29.958 100.681,29.983 100.647,30.000 C100.588,30.000 100.529,30.000 100.471,30.000 C100.467,28.585 100.460,27.171 100.466,25.756 C100.467,25.675 100.550,25.565 100.626,25.518 C101.352,25.068 101.714,24.425 101.711,23.571 C101.707,22.020 101.710,20.469 101.710,18.892 C103.133,18.892 104.546,18.892 105.996,18.892 C105.996,18.989 105.996,19.093 105.996,19.196 C105.996,20.630 105.997,22.065 105.996,23.499 ZM101.715,17.089 C101.715,15.990 101.683,14.917 101.724,13.847 C101.767,12.679 102.761,11.806 103.931,11.838 C105.060,11.869 105.978,12.794 105.993,13.940 C106.005,14.954 105.995,15.969 105.995,16.983 C105.995,17.011 105.987,17.040 105.980,17.089 C104.569,17.089 103.157,17.089 101.715,17.089 ZM96.421,29.234 C94.322,27.983 93.199,26.136 93.155,23.703 C93.108,21.138 93.145,18.571 93.146,16.005 C93.146,15.957 93.153,15.910 93.159,15.841 C94.572,15.841 95.976,15.841 97.426,15.841 C97.426,15.948 97.426,16.060 97.426,16.172 C97.426,18.602 97.430,21.031 97.423,23.461 C97.421,24.364 97.757,25.066 98.548,25.540 C98.629,25.589 98.688,25.740 98.689,25.844 C98.699,27.122 98.695,28.401 98.696,29.679 C98.696,29.786 98.703,29.893 98.707,30.000 C98.648,30.000 98.590,30.000 98.531,30.000 C97.799,29.823 97.075,29.624 96.421,29.234 ZM93.145,14.043 C93.145,13.935 93.145,13.823 93.145,13.711 C93.145,11.318 93.137,8.926 93.149,6.534 C93.154,5.625 92.818,4.928 92.023,4.460 C91.961,4.424 91.894,4.332 91.894,4.265 C91.886,2.850 91.888,1.436 91.888,0.000 C93.423,0.232 94.703,0.889 95.731,2.009 C96.833,3.209 97.413,4.630 97.421,6.261 C97.433,8.791 97.426,11.319 97.427,13.849 C97.427,13.906 97.421,13.964 97.416,14.043 C96.005,14.043 94.599,14.043 93.145,14.043 ZM89.588,4.782 C89.034,5.128 88.866,5.768 88.868,6.431 C88.875,8.061 88.870,9.692 88.869,11.322 C88.869,12.143 88.869,12.963 88.867,13.783 C88.867,13.869 88.857,13.954 88.851,14.051 C87.434,14.051 86.035,14.051 84.587,14.051 C84.587,13.958 84.587,13.866 84.587,13.774 C84.588,11.294 84.579,8.814 84.590,6.334 C84.605,3.158 86.853,0.543 90.000,0.018 C90.028,0.013 90.058,0.017 90.125,0.017 C90.125,0.639 90.125,1.243 90.125,1.848 C90.125,2.405 90.109,2.962 90.130,3.518 C90.149,4.032 90.126,4.447 89.588,4.782 ZM84.585,15.837 C86.015,15.837 87.420,15.837 88.868,15.837 C88.868,15.951 88.868,16.065 88.868,16.179 C88.868,18.608 88.849,21.039 88.873,23.468 C88.908,27.007 86.358,29.493 83.589,29.955 C83.552,29.961 83.518,29.985 83.482,30.000 C83.424,30.000 83.365,30.000 83.306,30.000 C83.310,28.634 83.319,27.268 83.313,25.902 C83.311,25.691 83.376,25.580 83.559,25.467 C84.268,25.031 84.587,24.371 84.587,23.549 C84.587,21.099 84.586,18.650 84.585,16.201 C84.585,16.085 84.585,15.970 84.585,15.837 ZM81.366,30.000 C80.875,29.844 80.360,29.740 79.897,29.524 C77.435,28.380 76.120,26.440 76.027,23.732 C75.974,22.192 76.017,20.649 76.016,19.107 C76.016,19.040 76.016,18.973 76.016,18.886 C77.447,18.886 78.859,18.886 80.303,18.886 C80.303,19.000 80.303,19.104 80.303,19.209 C80.303,20.663 80.308,22.117 80.302,23.571 C80.298,24.427 80.666,25.065 81.387,25.518 C81.463,25.566 81.547,25.675 81.547,25.756 C81.553,27.171 81.546,28.585 81.542,30.000 C81.484,30.000 81.425,30.000 81.366,30.000 ZM76.017,17.097 C76.017,16.540 76.017,15.997 76.017,15.453 C76.017,14.965 76.012,14.478 76.017,13.990 C76.030,12.831 76.911,11.892 78.032,11.838 C79.203,11.781 80.217,12.619 80.282,13.797 C80.341,14.885 80.294,15.978 80.294,17.097 C78.857,17.097 77.452,17.097 76.017,17.097 Z"></path>
        </svg>
        </a>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex"> 
          <li class="nav-item">
            <a class="nav-link" href="#" aria-haspopup="true" aria-expanded="false">
              Home
            </a>
          </li>
          <li class="nav-item ml-3">
            <a class="nav-link" href="#" aria-haspopup="true" aria-expanded="false">
              Shop
            </a>
          </li>
          <li class="nav-item ml-3">
            <a class="nav-link" href="#" aria-haspopup="true" aria-expanded="false">
              About
            </a>
          </li>
          <li class="nav-item ml-3">
            <a class="nav-link" href="#" aria-haspopup="true" aria-expanded="false">
              Cart(0)
            </a>
          </li>
        </ul>
      </nav>

      <div class="on-sale mt-5"><h2>On Sale</h2> <button type="button" class="btn btn-secondary">View All ></button></div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-pause="hover">
        <div class="carousel-inner">
          <div class="carousel-item active" >
            <div class="row">
            <div class="col-sm-3">
              <div class="card" style="width: 100%;">
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 100%;">
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 100%;">
                <img class="card-img-top" src="../resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 100%;">
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div>
            </div>
            </div>
          </div>
          <div class="carousel-item" >
            <div class="row">
            <div class="col-sm-3">
              <div class="card" style="width: 100%;">
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div> 
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 100%;">
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 100%;">
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 100%;">
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div>
            </div>
            </div>
          </div> 
          <div class="carousel-item">
            <div class="row">
            <div class="col-sm-3">
              <div class="card" style="width: 100%;">
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" style="width: 100%;">
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              
            </div>
            <div class="col-sm-3">
              
            </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <h2 class="featured">Featured Books</h2>
      <ul class="nav nav-tabs"style="justify-content:center">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#recommended">Recommended</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#popular">Popular</a>
        </li>
      </ul>
      
      <!-- Tab panes -->
      <div class="tab-content">
        <div id="recommended" class="container tab-pane active">
          <div class="row">
            <div class="col-sm-3">
              <div class="card" >
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div> 
            </div>
            <div class="col-sm-3">
              <div class="card" >
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" >
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" >
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div>
            </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <div class="card" >
                  <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                  <div class="card-body">
                    <h5 class="card-title">Book Title</h5>
                    <p class="card-text">Author Name</p>
                  </div>
                  <div class="card-header">
                    Price
                  </div>
                </div> 
              </div>
              <div class="col-sm-3">
                <div class="card" >
                  <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                  <div class="card-body">
                    <h5 class="card-title">Book Title</h5>
                    <p class="card-text">Author Name</p>
                  </div>
                  <div class="card-header">
                    Price
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card" >
                  <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                  <div class="card-body">
                    <h5 class="card-title">Book Title</h5>
                    <p class="card-text">Author Name</p>
                  </div>
                  <div class="card-header">
                    Price
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card" >
                  <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                  <div class="card-body">
                    <h5 class="card-title">Book Title</h5>
                    <p class="card-text">Author Name</p>
                  </div>
                  <div class="card-header">
                    Price
                  </div>
                </div>
              </div>
              </div>
        </div>
        <div id="recommend 2" class="container tab-pane fade"><br>
          <div class="row">
            <div class="col-sm-3">
              <div class="card" >
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div> 
            </div>
            <div class="col-sm-3">
              <div class="card" >
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" >
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card" >
                <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                <div class="card-body">
                  <h5 class="card-title">Book Title</h5>
                  <p class="card-text">Author Name</p>
                </div>
                <div class="card-header">
                  Price
                </div>
              </div>
            </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <div class="card" >
                  <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                  <div class="card-body">
                    <h5 class="card-title">Book Title</h5>
                    <p class="card-text">Author Name</p>
                  </div>
                  <div class="card-header">
                    Price
                  </div>
                </div> 
              </div>
              <div class="col-sm-3">
                <div class="card" >
                  <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                  <div class="card-body">
                    <h5 class="card-title">Book Title</h5>
                    <p class="card-text">Author Name</p>
                  </div>
                  <div class="card-header">
                    Price
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card" >
                  <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                  <div class="card-body">
                    <h5 class="card-title">Book Title</h5>
                    <p class="card-text">Author Name</p>
                  </div>
                  <div class="card-header">
                    Price
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card" >
                  <img class="card-img-top" src="http://127.0.0.1:8000/resources/assets/bookcover/book6.jpg" alt="Card image cap" style="">
                  <div class="card-body">
                    <h5 class="card-title">Book Title</h5>
                    <p class="card-text">Author Name</p>
                  </div>
                  <div class="card-header">
                    Price
                  </div>
                </div>
              </div>
              </div>
        </div>
      </div>
    </div>
</body>
<!-- Footer -->
<footer class="mt-5 bg-light">
  <!-- Section: Social media -->
  <section
    class="" style="display: flex"
  >
    <!-- Left -->
    <div class="mx-3 mt-3">
      <a  href="#">
        <?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="226pt" height="40pt" viewBox="0 0 226 40" version="1.1">
<g id="surface1">
<path style=" stroke:none;fill-rule:evenodd;fill:rgb(9.803922%,6.666667%,4.313725%);fill-opacity:1;" d="M 220.980469 38.253906 L 219.4375 20.53125 L 213.5 38.253906 L 210.351562 38.253906 L 204.414062 20.53125 L 202.855469 38.253906 L 197.984375 38.253906 L 199.949219 14.738281 L 206.894531 14.738281 L 211.894531 29.496094 L 216.957031 14.738281 L 223.902344 14.738281 L 225.832031 38.253906 Z M 189.628906 38.253906 L 183.527344 27.902344 L 182.113281 27.902344 L 182.113281 38.253906 L 177.246094 38.253906 L 177.246094 14.738281 L 185.75 14.738281 C 187.035156 14.738281 188.175781 14.917969 189.15625 15.28125 C 190.140625 15.644531 190.929688 16.148438 191.519531 16.792969 C 192.109375 17.441406 192.550781 18.183594 192.851562 19.019531 C 193.144531 19.851562 193.296875 20.769531 193.296875 21.769531 C 193.296875 23.339844 192.867188 24.628906 192.015625 25.632812 C 191.160156 26.636719 189.933594 27.3125 188.328125 27.660156 L 195.390625 38.253906 Z M 188.640625 21.605469 C 188.640625 20.726562 188.34375 20.035156 187.746094 19.535156 C 187.152344 19.039062 186.230469 18.789062 184.988281 18.789062 L 182.113281 18.789062 L 182.113281 24.402344 L 184.988281 24.402344 C 187.421875 24.402344 188.640625 23.472656 188.640625 21.605469 Z M 166.933594 37.105469 C 165.121094 38.089844 163.074219 38.582031 160.792969 38.582031 C 158.5 38.582031 156.445312 38.089844 154.632812 37.105469 C 152.820312 36.125 151.394531 34.710938 150.355469 32.867188 C 149.316406 31.023438 148.796875 28.894531 148.796875 26.488281 C 148.796875 24.066406 149.316406 21.9375 150.355469 20.097656 C 151.394531 18.261719 152.820312 16.851562 154.632812 15.875 C 156.445312 14.898438 158.5 14.410156 160.792969 14.410156 C 163.085938 14.410156 165.136719 14.898438 166.941406 15.875 C 168.75 16.851562 170.171875 18.261719 171.207031 20.097656 C 172.246094 21.9375 172.765625 24.066406 172.765625 26.488281 C 172.765625 28.894531 172.246094 31.023438 171.207031 32.867188 C 170.171875 34.710938 168.746094 36.125 166.933594 37.105469 Z M 165.917969 20.953125 C 164.578125 19.585938 162.867188 18.902344 160.792969 18.902344 C 158.714844 18.902344 157.003906 19.585938 155.664062 20.953125 C 154.320312 22.320312 153.652344 24.164062 153.652344 26.488281 C 153.652344 28.820312 154.320312 30.675781 155.664062 32.042969 C 157.003906 33.417969 158.714844 34.105469 160.792969 34.105469 C 162.867188 34.105469 164.578125 33.417969 165.917969 32.042969 C 167.261719 30.675781 167.933594 28.820312 167.933594 26.488281 C 167.933594 24.164062 167.261719 22.320312 165.917969 20.953125 Z M 88.898438 38.253906 L 81.613281 28.261719 L 79.894531 28.261719 L 79.894531 38.253906 L 75.027344 38.253906 L 75.027344 14.738281 L 79.894531 14.738281 L 79.894531 23.980469 L 81.546875 23.980469 L 88.898438 14.738281 L 94.839844 14.738281 L 85.753906 25.980469 L 95.117188 38.253906 Z M 64.710938 37.105469 C 62.898438 38.089844 60.851562 38.582031 58.570312 38.582031 C 56.277344 38.582031 54.222656 38.089844 52.414062 37.105469 C 50.597656 36.125 49.171875 34.710938 48.132812 32.867188 C 47.097656 31.023438 46.574219 28.894531 46.574219 26.488281 C 46.574219 24.066406 47.097656 21.9375 48.132812 20.097656 C 49.171875 18.261719 50.597656 16.851562 52.414062 15.875 C 54.222656 14.898438 56.277344 14.410156 58.570312 14.410156 C 60.863281 14.410156 62.914062 14.898438 64.71875 15.875 C 66.527344 16.851562 67.949219 18.261719 68.988281 20.097656 C 70.027344 21.9375 70.546875 24.066406 70.546875 26.488281 C 70.546875 28.894531 70.027344 31.023438 68.988281 32.867188 C 67.949219 34.710938 66.523438 36.125 64.710938 37.105469 Z M 63.699219 20.953125 C 62.355469 19.585938 60.648438 18.902344 58.570312 18.902344 C 56.492188 18.902344 54.785156 19.585938 53.441406 20.953125 C 52.101562 22.320312 51.429688 24.164062 51.429688 26.488281 C 51.429688 28.820312 52.101562 30.675781 53.441406 32.042969 C 54.785156 33.417969 56.492188 34.105469 58.570312 34.105469 C 60.648438 34.105469 62.355469 33.417969 63.699219 32.042969 C 65.039062 30.675781 65.710938 28.820312 65.710938 26.488281 C 65.710938 24.164062 65.039062 22.320312 63.699219 20.953125 Z M 37.871094 37.105469 C 36.058594 38.089844 34.011719 38.582031 31.730469 38.582031 C 29.433594 38.582031 27.382812 38.089844 25.570312 37.105469 C 23.757812 36.125 22.332031 34.710938 21.292969 32.867188 C 20.253906 31.023438 19.734375 28.894531 19.734375 26.488281 C 19.734375 24.066406 20.253906 21.9375 21.292969 20.097656 C 22.332031 18.261719 23.757812 16.851562 25.570312 15.875 C 27.382812 14.898438 29.433594 14.410156 31.730469 14.410156 C 34.023438 14.410156 36.074219 14.898438 37.878906 15.875 C 39.683594 16.851562 41.109375 18.261719 42.148438 20.097656 C 43.183594 21.9375 43.703125 24.066406 43.703125 26.488281 C 43.703125 28.894531 43.183594 31.023438 42.148438 32.867188 C 41.109375 34.710938 39.683594 36.125 37.871094 37.105469 Z M 36.859375 20.953125 C 35.515625 19.585938 33.804688 18.902344 31.730469 18.902344 C 29.652344 18.902344 27.941406 19.585938 26.601562 20.953125 C 25.257812 22.320312 24.589844 24.164062 24.589844 26.488281 C 24.589844 28.820312 25.257812 30.675781 26.601562 32.042969 C 27.941406 33.417969 29.652344 34.105469 31.730469 34.105469 C 33.804688 34.105469 35.515625 33.417969 36.859375 32.042969 C 38.195312 30.675781 38.871094 28.820312 38.871094 26.488281 C 38.871094 24.164062 38.195312 22.320312 36.859375 20.953125 Z M 15.515625 36.488281 C 14.273438 37.667969 12.445312 38.253906 10.03125 38.253906 L 0.375 38.253906 L 0.375 14.738281 L 7.972656 14.738281 C 10.46875 14.738281 12.382812 15.304688 13.707031 16.4375 C 15.035156 17.570312 15.695312 19.152344 15.695312 21.183594 C 15.695312 22.234375 15.464844 23.164062 15.003906 23.972656 C 14.546875 24.78125 13.867188 25.402344 12.96875 25.835938 C 15.910156 26.652344 17.382812 28.59375 17.382812 31.664062 C 17.382812 33.703125 16.761719 35.3125 15.515625 36.488281 Z M 10.402344 19.527344 C 9.863281 19.035156 9.066406 18.789062 8.019531 18.789062 L 5.066406 18.789062 L 5.066406 24.324219 L 8.230469 24.324219 C 9.226562 24.324219 9.972656 24.0625 10.46875 23.542969 C 10.96875 23.019531 11.21875 22.339844 11.21875 21.488281 C 11.21875 20.675781 10.945312 20.023438 10.402344 19.527344 Z M 11.800781 28.945312 C 11.226562 28.371094 10.300781 28.082031 9.027344 28.082031 L 5.066406 28.082031 L 5.066406 34.074219 L 9.121094 34.074219 C 10.34375 34.074219 11.242188 33.796875 11.808594 33.242188 C 12.378906 32.691406 12.660156 31.984375 12.660156 31.128906 C 12.660156 30.246094 12.375 29.519531 11.800781 28.945312 Z M 11.800781 28.945312 "/>
<path style=" stroke:none;fill-rule:evenodd;fill:rgb(96.862745%,32.941176%,32.941176%);fill-opacity:1;" d="M 140.914062 31.332031 C 140.910156 35.667969 138.191406 39.019531 133.9375 39.933594 C 133.890625 39.941406 133.847656 39.976562 133.800781 40 C 133.722656 40 133.644531 40 133.566406 40 C 133.5625 38.113281 133.554688 36.230469 133.5625 34.339844 C 133.5625 34.234375 133.671875 34.085938 133.773438 34.023438 C 134.738281 33.425781 135.222656 32.566406 135.214844 31.425781 C 135.210938 29.359375 135.214844 27.292969 135.214844 25.191406 C 137.105469 25.191406 138.984375 25.191406 140.914062 25.191406 C 140.914062 25.316406 140.914062 25.457031 140.914062 25.59375 C 140.914062 27.507812 140.914062 29.417969 140.914062 31.332031 Z M 135.222656 22.785156 C 135.222656 21.320312 135.179688 19.890625 135.234375 18.464844 C 135.289062 16.90625 136.613281 15.742188 138.167969 15.785156 C 139.667969 15.824219 140.890625 17.058594 140.90625 18.585938 C 140.925781 19.9375 140.910156 21.292969 140.910156 22.644531 C 140.910156 22.683594 140.898438 22.71875 140.890625 22.785156 C 139.015625 22.785156 137.136719 22.785156 135.222656 22.785156 Z M 128.183594 38.980469 C 125.394531 37.308594 123.898438 34.847656 123.839844 31.605469 C 123.777344 28.183594 123.828125 24.761719 123.828125 21.339844 C 123.828125 21.277344 123.835938 21.214844 123.84375 21.121094 C 125.726562 21.121094 127.59375 21.121094 129.519531 21.121094 C 129.519531 21.261719 129.519531 21.414062 129.519531 21.5625 C 129.519531 24.800781 129.523438 28.042969 129.515625 31.28125 C 129.515625 32.484375 129.960938 33.421875 131.011719 34.050781 C 131.117188 34.121094 131.195312 34.320312 131.199219 34.457031 C 131.210938 36.160156 131.207031 37.867188 131.207031 39.574219 C 131.207031 39.714844 131.21875 39.855469 131.222656 40 C 131.144531 40 131.066406 40 130.988281 40 C 130.015625 39.761719 129.050781 39.496094 128.183594 38.980469 Z M 123.828125 18.722656 C 123.828125 18.582031 123.828125 18.429688 123.828125 18.28125 C 123.828125 15.089844 123.816406 11.902344 123.832031 8.710938 C 123.839844 7.5 123.394531 6.570312 122.335938 5.949219 C 122.253906 5.898438 122.164062 5.777344 122.164062 5.6875 C 122.15625 3.800781 122.15625 1.914062 122.15625 0 C 124.199219 0.308594 125.898438 1.183594 127.265625 2.679688 C 128.730469 4.277344 129.5 6.175781 129.515625 8.347656 C 129.53125 11.722656 129.519531 15.089844 129.523438 18.464844 C 129.523438 18.542969 129.515625 18.621094 129.507812 18.722656 C 127.632812 18.722656 125.761719 18.722656 123.828125 18.722656 Z M 119.097656 6.375 C 118.363281 6.839844 118.136719 7.691406 118.140625 8.574219 C 118.152344 10.746094 118.144531 12.921875 118.144531 15.097656 C 118.144531 16.191406 118.144531 17.285156 118.140625 18.378906 C 118.140625 18.492188 118.128906 18.605469 118.121094 18.734375 C 116.234375 18.734375 114.375 18.734375 112.453125 18.734375 C 112.453125 18.609375 112.453125 18.488281 112.453125 18.363281 C 112.453125 15.058594 112.4375 11.753906 112.453125 8.445312 C 112.476562 4.210938 115.464844 0.722656 119.648438 0.0234375 C 119.683594 0.0195312 119.726562 0.0234375 119.8125 0.0234375 C 119.8125 0.851562 119.8125 1.65625 119.8125 2.464844 C 119.8125 3.207031 119.792969 3.949219 119.820312 4.691406 C 119.84375 5.375 119.816406 5.929688 119.097656 6.375 Z M 112.449219 21.117188 C 114.351562 21.117188 116.21875 21.117188 118.140625 21.117188 C 118.140625 21.269531 118.140625 21.417969 118.140625 21.574219 C 118.140625 24.808594 118.117188 28.050781 118.148438 31.292969 C 118.195312 36.011719 114.804688 39.324219 111.125 39.941406 C 111.074219 39.949219 111.027344 39.980469 110.984375 40 C 110.90625 40 110.828125 40 110.75 40 C 110.753906 38.179688 110.765625 36.355469 110.757812 34.535156 C 110.753906 34.253906 110.84375 34.105469 111.082031 33.957031 C 112.027344 33.375 112.453125 32.496094 112.453125 31.398438 C 112.453125 28.132812 112.449219 24.867188 112.449219 21.601562 C 112.449219 21.449219 112.449219 21.292969 112.449219 21.117188 Z M 108.167969 40 C 107.515625 39.792969 106.832031 39.652344 106.214844 39.363281 C 102.945312 37.839844 101.195312 35.253906 101.070312 31.644531 C 101 29.589844 101.058594 27.53125 101.054688 25.476562 C 101.054688 25.386719 101.054688 25.296875 101.054688 25.183594 C 102.960938 25.183594 104.835938 25.183594 106.753906 25.183594 C 106.753906 25.332031 106.753906 25.472656 106.753906 25.613281 C 106.753906 27.550781 106.761719 29.488281 106.753906 31.425781 C 106.75 32.570312 107.238281 33.417969 108.195312 34.023438 C 108.296875 34.089844 108.410156 34.234375 108.410156 34.339844 C 108.417969 36.230469 108.410156 38.113281 108.402344 40 C 108.328125 40 108.25 40 108.167969 40 Z M 101.058594 22.796875 C 101.058594 22.050781 101.058594 21.328125 101.058594 20.605469 C 101.058594 19.953125 101.050781 19.304688 101.058594 18.652344 C 101.074219 17.105469 102.246094 15.855469 103.734375 15.785156 C 105.292969 15.707031 106.640625 16.824219 106.726562 18.394531 C 106.808594 19.847656 106.746094 21.304688 106.746094 22.796875 C 104.835938 22.796875 102.964844 22.796875 101.058594 22.796875 Z M 101.058594 22.796875 "/>
</g>
</svg>

      </a>
    </div>
    <div class="ml-3">
      <h5>BOOKWORM</h5>
      <span>ADDRESS</span>
      <br/>
      <span>PHONE</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    {{-- <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->
</footer> --}}
<!-- Footer -->
</html>