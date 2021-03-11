<!-- menggunakan memanggil app.blade.php yang ada di berada di layouts/app.blade.php sebagai layout-->
@extends('layouts.app')
<!--content yang ada di section disesuaikan dengan penggunaan content yang ada di yield pada app.blade.php -->
@section('content')
	<!--menggunakan page slide untuk menampilkan gambar -->

  	<!-- <div id="page" style="background:white"> -->
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url({{URL::to('/')}}/assets/images/slider-01.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
							<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
									<h1><strong>Hutanta Cafe</strong></h1>
                  <p style="color:white"><strong>Jl. P. Siantar No.KM2, Sibola Hotangsas, Balige, Kabupaten Toba Samosir</strong></p>
            <p style="color:white"><strong>Kontak : 0811-6201-680</strong></p>
			<p style="color:white"><a class="btn btn-warning" href="/menu/reservasi">Reservation</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url({{URL::to('/')}}/assets/images/slider-02.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
                   <h1><strong>Hutanta Cafe</strong></h1>
                   <p style="color:white"><strong>Jl. P. Siantar No.KM2, Sibola Hotangsas, Balige, Kabupaten Toba Samosir</strong></p>  
			<p style="color:white"><a class="btn btn-warning" href="#">Reservation</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	</ul>				  
			  </div>			  
	</aside>
	<!-- </div> -->

    <section class="ftco-section">
    	<div class="menu-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading-title text-center">
							<br>
							<h1><font color=#e87523><strong>Hidangan</strong></font></h2>
						</div>
					</div>
				</div>
				
				<div class="row inner-menu-box">
					
	<br>
	<table border="0" width="100%" height="85%">
			<h1> <b> <font color= #e87523>Makanan </b></h1></font>
			<br>
			<td align="center" class="zoom"><img src="images/menu-1.jpg" style="width:250px; height:250px"></td>
			<td align="center" class="zoom"><img src="images/menu-2.jpg" style="width:250px; height:250px"></td>
			<td align="center" class="zoom"><img src="images/menu-3.jpg" style="width:250px; height:250px"></td>
			<td align="center" class="zoom"><img src="images/menu-4.jpg" style="width:250px; height:250px"></td>
		</tr>
	
		<tr>
			<td align= center ><b><font size ="3" color ="black">Bihun Goreng Spesial</font></b></td>
			<td align= center ><b><font size ="3" color ="black">Spaghetti Carbonara</font></b></td>
			<td align= center ><b><font size ="3" color ="black">Ayam Panggang Kecap</font></b></td>
			<td align= center ><b><font size ="3" color ="black">Ikan Bakar Bumbu </font></b></td>
		</tr>
		
		
		<tr>
			<td align= center ><font size ="3" color ="black">Rp 20.000</font></td>
			<td align= center ><font size ="3" color ="black">Rp 28.000</font></td>
			<td align= center ><font size ="3" color ="black">Rp 40.000</font></td>
			<td align= center ><font size ="3" color ="black">Rp 35.000</font></td>
		</tr>
		<tr>
		<td align= center><a class="btn btn-warning" style="border-radius:8px;" href="#"> <b>Pesan</b></td></a>
			<td align= center><a class="btn btn-warning" style="border-radius:8px;" href="#"> <b>Pesan</b></td></a>
			<td align= center><a class="btn btn-warning" style="border-radius:8px;" href="#"> <b>Pesan</b></td></a>
			<td align= center><a class="btn btn-warning" style="border-radius:8px;" href="#"> <b>Pesan</b></td></a>
			
		</td>
	</tr>
	
		<tr>
			<tr>
				<td>
			<br><h1><b><font color =#e87523> Minuman </h1></b> </font> <br> 
			</td>
			</tr>
	
			<td  align="center" class="zoom"><img src="assets/images/drink-1.jpg" style="width:250px; height:300px"></td>
			<td  align="center" class="zoom"><img src="assets/images/drink-2.jpeg" style="width:250px; height:300px"></td>
			<td  align="center" class="zoom"><img src="assets/images/drink-3.jpg" style="width:250px; height:300px"></td>
			<td  align="center" class="zoom"><img src="assets/images/drink-4.jpg" style="width:250px; height:300px"></td>
		</tr>
	
		<tr>
			<td align= center ><b><font size ="3" color ="black">Ice Coffee</font></b></td>
			<td align= center ><b><font size ="3" color ="black">Ice Tea</font></b></td>
			<td align= center ><b><font size ="3" color ="black">Ice Caramel</font></b></td>
			<td align= center ><b><font size ="3" color ="black">Orange Juice</font></b></td>
		</tr>
	
		<tr>
			<td align= center ><font size ="3" color ="black">Rp 22.000</font></td>
			<td align= center ><font size ="3" color ="black">Rp 15.000</font></td>
			<td align= center ><font size ="3" color ="black">Rp 20.000</font></td>
			<td align= center ><font size ="3" color ="black">Rp 15.000</font></td>
		</tr>
		<tr>
    <td align= center><a class="btn btn-warning" style="border-radius:8px;" href="#"> <b>Pesan</b></td></a>
			<td align= center><a class="btn btn-warning" style="border-radius:8px;" href="#"> <b>Pesan</b></td></a>
			<td align= center><a class="btn btn-warning" style="border-radius:8px;" href="#"> <b>Pesan</b></td></a>
			<td align= center><a class="btn btn-warning" style="border-radius:8px;" href="#"> <b>Pesan</b></td></a>
			
    </tr>
</table>
    </div>
    </div>
    </div>
    </div>
    </div>
	</section>
	</div>
   <br>
	<!--menggunakan template footer.blaade -->
	@include('footer')
	</div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	@endsection